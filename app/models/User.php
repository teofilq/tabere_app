<?php
/**
 * User class
 */
class User
{
    use Model;

    protected $table = 'users';
	public function __construct() {
        $this->order_column = 'user_id';  // Setează $order_column la 'user_id'
    }
    protected $allowedColumns = [
        'role',
        'username',
        'first_name',
        'last_name',
        'password',
        'email',
        'email_verified',
        'phone',
        'phone_verified',
        'address',
        'birth_date',
        'created_at',
        'image_path',
        'additional_info',
        'token'
    ];

    public function validate($data)
    {
        $this->errors = [];
		// se asigura impotriva atacurilor de tip cross-site scripting (XSS)
		$data = $this->sanitizeData($data);
        // Validează prenume
        if(empty($data['first_name'])) {
            $this->errors['first_name'] = "Prenumele este obligatoriu";
        }

        // Validează nume
        if(empty($data['last_name'])) {
            $this->errors['last_name'] = "Numele este obligatoriu";
        }

        // Validează password
        if(empty($data['password'])) {
            $this->errors['password'] = "Parola este obligatorie";
        } else if(strlen($data['password']) < 6) {
            $this->errors['password'] = "Parola trebuie să fie de cel puțin 6 caractere";
        }

        // Validate email
        if (empty($data['email'])) {
            $this->errors['email'] = "Email-ul este obligatoriu";
        } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $this->errors['email'] = "Email-ul nu este valid";
        } elseif (!$this->isEmailUnique($data['email'])) {
            $this->errors['email'] = "Acest email este deja înregistrat";
        }

        // Alte câmpuri sunt opționale, deci nu avem nevoie de validări suplimentare pentru ele.

        if(empty($this->errors)) {
            return true;
        }

        return false;
    }

	private function isEmailUnique($email)
    {
        $result = $this->where(['email' => $email]);
        return !$result; // Dacă nu sunt rezultate, emailul este unic
    }

	public function insert($data)
    {
        if ($this->validate($data)) {
            if (isset($data['password'])) {
                // Hash the password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
            }

            /** remove unwanted data **/
            $data = array_intersect_key($data, array_flip($this->allowedColumns));

            // Building the query
            $keys = array_keys($data);
            $query = "insert into $this->table (".implode(",", $keys).") values (:".implode(",:", $keys).")";

            // Execute the insert query
            $this->query($query, $data);

            return true; 
        } else {
            return false;
        }
    }

}


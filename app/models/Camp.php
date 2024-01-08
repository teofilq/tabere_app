
<?php
/**
 * Camp class
 */
class Camp
{
    use Model;

    protected $table = 'camps'; // Numele tabelului tău pentru tabere
    public function __construct() {
        $this->order_column = 'camp_id';  
    }
    // Colonele permise din tabelul camps pentru a preveni asignarea masiva
    protected $allowedColumns = [
        'user_id',
        'camp_name',
        'location',
        'description',
        'created_date',
        'start_date',
        'end_date'
    ];
    // Validarea datelor pentru o nouă înregistrare sau actualizare
    public function validate($data)
    {
        $this->errors = [];

        // Validează numele taberei
        if(empty($data['camp_name'])) {
            $this->errors['camp_name'] = "Numele taberei este obligatoriu";
        }

        // Validează locația
        if(empty($data['location'])) {
            $this->errors['location'] = "Locația este obligatorie";
        }

        // Validează datele de început și sfârșit
        if(empty($data['start_date'])) {
            $this->errors['start_date'] = "Data de început este obligatorie";
        }


        if(empty($this->errors)) {
            return true;
        }

        return false;
    }
}

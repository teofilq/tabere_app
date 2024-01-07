<?php 

/**
 * login class
 */
class Login
{
	use Controller;

	public function index()
	{
		$data = [];
		
		if($_SERVER['REQUEST_METHOD'] == "POST")
		{
			$user = new User;
			$arr['email'] = $_POST['email'];

			$row = $user->first($arr);
			
			if($row)
			{
				// Verifică dacă hash-ul parolei din baza de date corespunde cu parola introdusă
				if(password_verify($_POST['password'], $row->password))
				{
					session_regenerate_id(true);
					// Parola este corectă
					$_SESSION['USER'] = $row;
					redirect('home');
				}
				else
				{
					// Parola nu este corectă
					$user->errors['email'] = "Wrong email or password";
				}
			}
			else
			{
				// Utilizatorul nu a fost găsit
				$user->errors['email'] = "Wrong email or password";
			}

			$data['errors'] = $user->errors;
		}

		$this->view('login',$data);
	}
}



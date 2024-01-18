<?php 

/**
 * signup class
 */
class Signup
{
	use Controller;

	public function index()
	{
		$data = [];
		
		if($_SERVER['REQUEST_METHOD'] == "POST")
		{
			$user = new User;
			if($user->validate($_POST))
			{
				$token = bin2hex(random_bytes(16));
				$_POST['token'] = $token; 
				$user->insert($_POST);				
				sendVerifyEmail($_POST['email'], $_POST['first_name'], $token);
				redirect('login');
			}

			$data['errors'] = $user->errors;			
		}

		$this->view('signup',$data);
	}

}

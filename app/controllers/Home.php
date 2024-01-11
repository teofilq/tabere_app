<?php 

/**
 * home class
 */

class Home
{
	use Controller;

	public function index()
	{
		$data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->email;
		$data['first_name']= empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->first_name;
		$data['role']= empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->role;

					switch ($_SESSION['USER']->role??'guest') {
						case 'admin':
							redirect('Dashboard');
							break;
						case 'limited':
							redirect('User');
							break;
						case 'limited':
							redirect('User');
							break;
						case 'guest':
							$this->view('home');
							break;
					}
		
	}
	public function learnmore()
	{
		$this->view('learnmore');
	}

}



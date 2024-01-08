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
		$this->view('home',$data);
	}

}



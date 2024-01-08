<?php

class App
{
	private $controller = 'Home';
	private $method 	= 'index';

	private function splitURL()
	{
		$URL = $_GET['url'] ?? 'home';
		$URL = explode("/", trim($URL,"/"));
		return $URL;	
	}

	private function checkAccess() {

        $userRole = $_SESSION['USER']->role ?? 'guest';
		show($userRole);
        $permissions = [
			'admin' => [
				'Dashboard' => ['index', 'edit', 'delete', 'create'],
				'User' => ['index', 'edit', 'delete', 'create'],
				'Report' => ['index', 'edit', 'delete', 'create'],
				'Home' => ['index'],
				'About' => ['index'],
				'Logout' => ['index']
			],
			'volunteer' => [
				'Dashboard' => ['index'],
				'Event' => ['index', 'view'],
				'Report' => ['index', 'create'],
				'Home' => ['index'],
				'About' => ['index'],
				'Logout' => ['index']
			],
			'limited' => [
				'Dashboard' => ['index'],
				'Event' => ['index'],
				'Home' => ['index'],
				'Logout' => ['index']
			],
			'guest' => [
				'Home' => ['index'],
				'About' => ['index']
			]
		];
		

        if (!isset($permissions[$userRole][$this->controller]) || !in_array($this->method, $permissions[$userRole][$this->controller])) {
            $this->controller = '_404';
            $this->method = 'index';
        }
    }

	public function loadController()
	{
		$URL = $this->splitURL();

		/** select controller **/
		$filename = "../app/controllers/".ucfirst($URL[0]).".php";
		if(file_exists($filename))
		{
			require $filename;
			$this->controller = ucfirst($URL[0]);
			unset($URL[0]);
		}else{

			$filename = "../app/controllers/_404.php";
			require $filename;
			$this->controller = "_404";
		}

		$controller = new $this->controller;

		/** select method **/
		if(!empty($URL[1]))
		{
			if(method_exists($controller, $URL[1]))
			{
				$this->method = $URL[1];
				unset($URL[1]);
			}	
		}
		$this->checkAccess();
		call_user_func_array([$controller,$this->method], $URL);

	}	

}
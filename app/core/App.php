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
		$userRole= $_SESSION['USER']->role ?? 'guest';
        $permissions = [
			'admin' => [
				'Dashboard' => ['index', 'edit', 'delete', 'create','store'],
				'User' => ['index', 'edit', 'delete', 'create'],
				'Report' => ['index', 'edit', 'delete', 'create'],
				'Home' => ['index'],
				'About' => ['index'],
				'Logout' => ['index'],
				'_404' => ['index']
			],      
			'volunteer' => [
				//'Dashboard' => ['index'],
				'Event' => ['index', 'view'],
				'Report' => ['index', 'create'],
				'Home' => ['index'],
				'About' => ['index'],
				'Logout' => ['index'],
				'_404' => ['index']
			],
			'limited' => [
				//'Dashboard' => ['index'],
				'Event' => ['index'],
				'Home' => ['index'],
				'Logout' => ['index'],
				'User' => ['index','show'],
				'_404' => ['index']
			],
			'guest' => [
				'Home' => ['index'],
				'About' => ['index'],
				'Login' => ['index'],
				'Signup' => ['index'],
				'_404' => ['index']
			]
		];
		

        if (!isset($permissions[$userRole][$this->controller]) || !in_array($this->method, $permissions[$userRole][$this->controller])) {
			$filename = "../app/controllers/_403.php";
			require $filename;
			$this->controller = '_403';
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
		$this->checkAccess();

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

		call_user_func_array([$controller,$this->method], $URL);

	}	

}
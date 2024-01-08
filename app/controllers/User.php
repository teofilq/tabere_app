<?php

class User {
    use Controller;

    private $campModel;

    public function __construct() {
        $this->campModel = new Camp();
    }

    // Afișează toate taberele disponibile pentru utilizator
    public function index() {
        $camps = $this->campModel->findAll();
        $this->view('user/loggedin', ['camps' => $camps, 'username' => $_SESSION['USER']->first_name]);
    }

    // Afișează detalii despre o tabără specifică
    public function show($id) {
        $camp = $this->campModel->first(['camp_id' => $id]);
        if ($camp) {
            $this->view('user', ['camp' => $camp]);
        } else {
            // Redirecționează sau afișează un mesaj de eroare
            $this->view('404');
        }
    }
}

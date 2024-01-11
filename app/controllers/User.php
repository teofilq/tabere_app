<?php

class User {
    use Controller;

    private $campModel;
    private $volunteerModel;

    public function __construct() {
        $this->campModel = new Camp();
        $this->volunteerModel = new VolunteerProfile();
    }

    // Afișează toate taberele disponibile pentru utilizator
    public function index() {
        $camps = $this->campModel->findAll();
        $this->view('user/loggedin', ['camps' => $camps, 'username' => $_SESSION['USER']->first_name]);
    }

    public function newvolunteer() {
        $this->view('user/newvolunteer', ['username' => $_SESSION['USER']->first_name]);
    }
    public function send() {
        if($this->volunteerModel->first(['user_id' => $_SESSION['USER']->user_id])) {
        } else {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $data = $_POST;
                $data['user_id'] = $_SESSION['USER']->user_id;
                if ($this->volunteerModel && $this->volunteerModel->validate($data)) {
                    if ($this->volunteerModel->insert($data)) {
                        redirect('user/loggedin');
                    } else {
                        die('Ceva nu a funcționat corect la trimiterea formularului.');
                    }
                } else {
                    $this->view('user/newvolunteer', ['data' => $data, 'errors' => $this->volunteerModel->errors]);
                }
            } else {
                $this->view('user/newvolunteer');
            }
        }
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

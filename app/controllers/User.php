<?php

class User {
    use Controller;

    private $campModel;
    private $volunteerModel;
    private $userModel;
   
    public function __construct() {
        $this->campModel = new Camp();
        $this->volunteerModel = new VolunteerProfile();
        $this->userModel = new UserModel();
    }

    // Afișează toate taberele disponibile pentru utilizator
    public function index() {
        echo memory_get_usage();
        $camps = $this->campModel->findAll();
        $this->view('user/loggedin', ['camps' => $camps, 'username' => $_SESSION['USER']->first_name]);
    }
 
    public function newvolunteer() {
        if($this->volunteerModel->first(['user_id' => $_SESSION['USER']->user_id])) {
            $camps = $this->campModel->findAll();
            $warning = 1;
            $this->view('user/loggedin', ['camps' => $camps, 'username' => $_SESSION['USER']->first_name, 'warning'=>$warning]);
        } else {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $data = $_POST;
                $data['user_id'] = $_SESSION['USER']->user_id;
                if ($this->volunteerModel && $this->volunteerModel->validate($data)) {
                    if ($this->volunteerModel->insert($data)) {
                        redirect('user/newvolunteer');
                    } else {
                        die('Ceva nu a funcționat corect la trimiterea formularului.');
                    }
                } else {
                    $this->view('user/newvolunteer', ['data' => $data, 'errors' => $this->volunteerModel->errors]);
                }
            } else {
                $this->view('user/newvolunteer', ['username' => $_SESSION['USER']->first_name]);
            }
        }
    }

    // În controller-ul dvs., adăugați o metodă pentru a gestiona solicitările la URL-ul de verificare
    public function verify($email, $token)
    {
        
        // Căutați utilizatorul în baza de date folosind adresa de e-mail
        $user = $this->userModel->first(['email' => $email]);
        show($user);
        show($token);
        // Verificați dacă tokenul de verificare se potrivește cu cel stocat în baza de date
        if ($user->token == $token) {
            echo "Tokenul se potrivește";
            // Dacă tokenul se potrivește, setați utilizatorul ca verificat și salvați în baza de date
            $this->userModel->update($user->user_id, ['email_verified' => true], 'user_id');
    
            // Afiseaza mesaj de succes
            $this->view('user/verified');
        } else {
            // Dacă tokenul nu se potrivește, afiseaza mesaj de eroare
            echo "Nu s-a putut verifica emailul";
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

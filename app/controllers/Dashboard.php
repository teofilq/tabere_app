<?php 

class Dashboard {
    use Controller;

    private $campModel;
    private $userModel;
    private $volunteerModel;
    public function __construct() {
        $this->campModel = new Camp();
        $this->userModel = new User();
        $this->volunteerModel = new VolunteerProfile();
    }

    // Afișează toate taberele în dashboard-ul adminului
    public function index() {
        $camps = $this->campModel->findAll();
        $this->view('admin/dashboard', ['camps' => $camps, 'username' => $_SESSION['USER']->first_name]);
    }
     public function verifyvolunteer() {
        $volunteersWithInfo = $this->volunteerModel->findAllWithUsers();
        $this->view('admin/verifyvolunteer', ['volunteers' => $volunteersWithInfo, 'username' => $_SESSION['USER']->first_name]);
    }
    // Procesează datele trimise de formularul de adăugare a unei noi tabere
    public function store() {
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = $_POST;
            $data['user_id'] = $_SESSION['USER']->user_id;
            if ($this->campModel->validate($data)) {
                if ($this->campModel->insert($data)) {
                    redirect('Dashboard/index');
                } else {
                    die('Ceva nu a funcționat corect la inserarea taberei.');
                }
            } else {
                $this->view('admin/create', ['data' => $data, 'errors' => $this->campModel->errors]);
            }
        } else {
            $this->view('admin/create');
        }
    }

    // Afișează formularul pentru editarea unei tabere existente
    public function edit($id) {
        $camp = $this->campModel->first(['camp_id' => $id]);
        if($camp) {
            $this->view('admin/edit', ['camp' => $camp]);
        } else {
            redirect('dashboard');
        }
    }

    // Procesează datele trimise de formularul de editare a unei tabere
    public function update($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = $_POST;
            if ($this->campModel->validate($data)) {
                if ($this->campModel->update($id, $data,'camp_id')) {
                    redirect('dashboard');
                } else {
                    die('Ceva nu a funcționat corect la actualizarea taberei.');
                }
            } else {
                $this->view('admin/edit', ['camp' => $data, 'errors' => $this->campModel->errors]);
            }
        } else {
            redirect('dashbord');
        }
    }

    // Șterge o tabără
    public function delete($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            if ($this->campModel->delete($id, 'camp_id')) {
                redirect('dashboard');
            } else {
                die('Ceva nu a funcționat corect la ștergerea taberei.');
            }
        } else {
            redirect('dashboard');
        }
    }
}
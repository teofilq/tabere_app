<?php 

class Admin {
    use Controller;

    private $campModel;

    public function __construct() {
        $this->campModel = new Camp();
        
        // Verifică dacă utilizatorul este autentificat și are rolul de 'admin'
        if (!$this->isAdmin()) {
            redirect('home');
        }
    }

    // Verifică dacă utilizatorul este admin
    private function isAdmin() {
        return isset($_SESSION['USER']) && $_SESSION['USER']->role === 'admin';
    }

    // Afișează toate taberele în dashboard-ul adminului
    public function index() {
        $camps = $this->campModel->findAll();
        $this->view('admin/dashboard', ['camps' => $camps]);
    }


    // Procesează datele trimise de formularul de adăugare a unei noi tabere
    public function store() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = $_POST;
            $data['user_id'] = $_SESSION['USER']->user_id;
            if ($this->campModel->validate($data)) {
                if ($this->campModel->insert($data)) {
                    redirect('admin/dashboard');
                } else {
                    die('Ceva nu a funcționat corect la inserarea taberei.');
                }
            } else {
                $this->view('admin/create', ['data' => $data, 'errors' => $this->campModel->errors]);
            }
        } else {
            redirect('admin/create');
        }
    }

    // Afișează formularul pentru editarea unei tabere existente
    public function edit($id) {
        $camp = $this->campModel->first(['camp_id' => $id]);
        if($camp) {
            $this->view('admin/edit', ['camp' => $camp]);
        } else {
            redirect('admin/dashboard');
        }
    }

    // Procesează datele trimise de formularul de editare a unei tabere
    public function update($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = $_POST;
            if ($this->campModel->validate($data)) {
                if ($this->campModel->update($id, $data)) {
                    redirect('admin/dashboard');
                } else {
                    die('Ceva nu a funcționat corect la actualizarea taberei.');
                }
            } else {
                $this->view('admin/edit', ['camp' => $data, 'errors' => $this->campModel->errors]);
            }
        } else {
            redirect('admin/edit/' . $id);
        }
    }

    // Șterge o tabără
    public function delete($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($this->campModel->delete($id)) {
                redirect('admin/dashboard');
            } else {
                die('Ceva nu a funcționat corect la ștergerea taberei.');
            }
        } else {
            redirect('admin/dashboard');
        }
    }
}
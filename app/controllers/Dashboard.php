<?php 

class Dashboard {
    use Controller;

    private $campModel;
    private $userModel;
    private $volunteerModel;
    public function __construct() {
        $this->campModel = new Camp();
        $this->userModel = new UserModel();
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
    public function downloadcv($id) {
        $user = $this->userModel->first(['user_id' => $id]);
        $profile = $this->volunteerModel->first(['user_id' => $id]);
    
        if ($user && $profile) {

            $pdf = new TCPDF();
            $pdf->SetCreator('tabere_app');
            $pdf->SetTitle('CV - ' . $user->first_name . ' ' . $user->last_name);
            $pdf->SetHeaderData('', 0, 'CV', $user->first_name . ' ' . $user->last_name);
            $pdf->setHeaderFont(['DejaVuSans', '', 10]);
            $pdf->setFooterFont(['DejaVuSans', '', 8]);
            $pdf->SetFont('dejavusans', '', 12);
            $pdf->AddPage();
            
            function checkEmpty($value) {
                return empty($value) ? 'Nu există informații' : $value;
            }
            
            $pdf->SetFont('dejavusans', 'B', 12); 
            $pdf->Cell(0, 10, "Nume: " . checkEmpty($user->first_name . ' ' . $user->last_name), 0, 1);
            $pdf->Cell(0, 10, "Email: " . checkEmpty($user->email), 0, 1);
            $pdf->Cell(0, 10, "Telefon: " . checkEmpty($user->phone), 0, 1);
            $pdf->Cell(0, 10, "Adresă: " . checkEmpty($user->address), 0, 1);
            $pdf->Cell(0, 10, "Data nașterii: " . checkEmpty($user->birth_date), 0, 1);
            $pdf->Cell(0, 10, "Informații suplimentare: " . checkEmpty($user->additional_info), 0, 1);
            
            $pdf->SetFont('dejavusans', '', 12); 
            $pdf->Cell(0, 10, '', 0, 1, 'C');
            $pdf->SetFont('dejavusans', 'B', 12);
            $pdf->Cell(0, 10, 'Informații Profil Voluntar', 0, 1, 'C');
            
            $pdf->SetFont('dejavusans', '', 12); 
            $pdf->Cell(0, 10, "Experiență: " . checkEmpty($profile->experience), 0, 1);
            $pdf->Cell(0, 10, "Educație: " . checkEmpty($profile->education), 0, 1);
            $pdf->Cell(0, 10, "Motivație: " . checkEmpty($profile->motivation), 0, 1);
            $pdf->Cell(0, 10, "Probleme medicale: " . checkEmpty($profile->medical_issues), 0, 1);
            $pdf->Cell(0, 10, "Limbi vorbite: " . checkEmpty($profile->languages_spoken), 0, 1);
            
            $pdf->Output("CV_{$user->first_name}_{$user->last_name}.pdf", 'D');
        } else {
            redirect('dashboard/verifyvolunteer');
        }
    }
    
    
    
}
<?php
/**
 * VolunteerProfile class
 */
class VolunteerProfile
{
    use Model;

    protected $table = 'volunteer_profiles'; // Numele tabelului pentru profiluri voluntari
    public function __construct() {
        $this->order_column = 'volunteer_profile_id';  
    }

    // Colonele permise din tabelul volunteer_profiles
    protected $allowedColumns = [
        'user_id',
        'status',
        'experience',
        'motivation',
        'education',
        'medical_issues',
        'languages_spoken'
    ];

    public function findAllWithUsers() {
        // Interogarea SQL pentru a combina datele din 'users' și 'volunteer_profiles'
        $query = "SELECT volunteer_profiles.*, users.*
                  FROM volunteer_profiles
                  INNER JOIN users ON volunteer_profiles.user_id = users.user_id";

        // Execută interogarea și returnează rezultatele
        return $this->query($query);
    }

    public function validate($data)
    {
    $this->errors = [];

    // Validează experiența
    if(empty($data['experience'])) {
        $this->errors['experience'] = "Experiența este obligatorie";
    }

    // Validează motivația
    if(empty($data['motivation'])) {
        $this->errors['motivation'] = "Motivația este obligatorie";
    }

    // Validează educația
    if(empty($data['education'])) {
        $this->errors['education'] = "Educația este obligatorie";
    }

    if(empty($this->errors)) {
        return true;
    }

    return false;
    }

}

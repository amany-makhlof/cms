<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller { 
    function __construct() {
        parent::__construct();
        $array_model = array('helper_model');
        $this->load->model($array_model);
        
    }
    // view login page 
    public function view()
    {
        $data['info'] = $this->helper_model->getUserData();
        $this->mainclass->home_template('home/dashborad/student/dashborad/dashborad_student_view',$data);
    }
    
    
}




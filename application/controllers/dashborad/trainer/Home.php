<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller { 
    function __construct() {
        parent::__construct();
        /*$array_model = array('helper_model');
        $this->load->model($array_model);*/
        
        
    }
    // view login page 
    public function view($token)
    {
        $info = getUserData();
        
        if($token == $info->Token && $info->Type == 'C'  ){
            $data['info'] = $info;
            $this->mainclass->home_template('home/dashborad/trainer/dashborad/dashborad_trainer_view',$data);
        } else {
            redirect('error');
        }
    }
    
    public function coursesUser($token){
        $info = getUserData();
        
        if($token == $info->Token && $info->Type == 'C'  ){
            $data['info'] = $info;
            $this->mainclass->home_template('home/dashborad/trainer/dashborad/dashborad_courses_view',$data);
        } else {
            redirect('error');
        }
    }
    
    
}




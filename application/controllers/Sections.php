<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sections extends CI_Controller { 
    function __construct() {
        parent::__construct();
        $array_model = array('admin/departments_model','login_model');
        $this->load->model($array_model);
        
    }
    // view login page 
    public function index()
    {
         $data['departments'] = $this->departments_model->getRootDepartments(); 
         $this->mainclass->home_template('home/sections/sections_view',$data);
    }
    
    
}




<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SubSections extends CI_Controller { 
    function __construct() {
        parent::__construct();
        $array_model = array('admin/departments_model','login_model');
        $this->load->model($array_model);
        
    }
    // view login page 
    public function index($Token = null )
    {
		$data['Dep']         = $this->departments_model->getDepByToken($Token) ; 
 		$data['departments'] = $this->departments_model->getChild($data['Dep']['ID']) ;
        $this->mainclass->home_template('home/subSections/subSections_view',$data);
    }
    
    
}




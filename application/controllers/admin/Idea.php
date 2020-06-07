<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Idea extends CI_Controller { 
        function __construct() {
            parent::__construct();
            $array_model = array('admin/idea_model','login_model');
            $this->load->model($array_model);
            $session = $this->session->userdata('sessionToken');
            if($this->login_model->chackSession($session) != 'U'){
                $this->session->sess_destroy();
                redirect('home');
            }
        }
     public function index()
    {  
        $data['items'] = $this->idea_model->getlst( );
        $this->mainclass->admin_template('admin/idea/text_view', $data);
     }
     
    public function Edit($Token = null ){
		$Token               = filter_var($this->security->xss_clean($Token), FILTER_SANITIZE_STRING);
        $data['info']         = $this->idea_model->getItem( $Token );
        $this->mainclass->admin_template('admin/idea/idea_view',$data);
    }
}



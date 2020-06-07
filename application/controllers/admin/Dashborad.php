<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashborad extends CI_Controller { 
    function __construct() {
        parent::__construct();
        $this->load->model('login_model');
        $session = $this->session->userdata('sessionToken');
        if($this->login_model->chackSession($session) != 'U'){
            $this->session->sess_destroy();
            redirect('home');
        }
        
    }
    // view login page 
    public function index()
    { 
        $this->mainclass->admin_template('admin/dashborad_view');
    }
       // view edit_contact
    public function edit_contact()
    {
         $data['contact'] = $this->login_model->edit_contact($this->session->userdata('sessionToken'));
 
        $this->mainclass->admin_template('admin/edit_contact_view');
    }
    
     public function update_contact()
    {   
					
                                             $this->form_validation->set_rules('password', 'lang:password', 'required|min_length[8]');
					if ($this->form_validation->run() == FALSE){ 
						$validation =  validation_errors('<p style="color:red" class=" text-right">','</p>');
						$this->session->set_flashdata('msg', $validation );
						redirect('admin/Dashborad/update_contact');
 					}else{
						 
                                                $pass  = filter_var($this->security->xss_clean($this->input->post('password')), FILTER_SANITIZE_STRING);
					  
						 
                                                $data['contact'] = $this->login_model->edit_contact($this->session->userdata('sessionToken'));
						$data = array(
 							'Password'        =>  $pass   
						); 
						//update_contact
						if( $this->login_model->update_contact($data,$data['contact']->ID)){ 
						
						 
							$this->session->set_flashdata('msg', '<div class="alert alert-success">'.lang('am_Success_save').'</div>');
						        redirect('admin/Dashborad/update_contact');
						} else { 
							$this->session->set_flashdata('msg', '<div class="alert alert-danger">'.lang('am_error_save').'</div>');
						        redirect('admin/Dashborad/update_contact');
						} 
						  
						
					 ;
				} 
    }
}



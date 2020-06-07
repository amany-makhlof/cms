<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coures extends CI_Controller { 
    function __construct() {
        parent::__construct();
        $array_model = array(  'admin/courses_model','admin/departments_model');
        $this->load->model($array_model);
        
        
    }
    // view login page 
    public function view($token)
    {
        $data['info']        = $this->courses_model->getOneCourse($departmentID);
        $data['departments'] = $this->departments_model->getDepartments();
        $data['instructor']  = $this->courses_model->getInstructors();
        
        if($token === $this->coures_model->getOneCoures($token)->token){
            $data['info'] = $this->coures_model->getOneCoures($token);
            $this->mainclass->home_template('home/coures/coures_view',$data);
        }else{
            redirect('error');
        }
        
       
    }
    
    public function subscription($token){
        if($token === $this->coures_model->getOneCoures($token)->token){
            if($this->session->userdata('log_in') == TRUE ){
                $session   = $this->session->userdata('sessionToken');
                $tokenuser = $this->users_home_model->getTokenFromSession($session);
                if($tokenuser){
                    $data   = array(
                                'Contact_Token' => $tokenuser,
                                'courses_Token' => $token
                           );
                    $this->coures_model->addSubscription($data);
                    $this->session->set_flashdata('subscription', lang('subscriptionDone') );
                    redirect('coures/view/' . $token);
                }else{
                     redirect('error');
                }
                
            } else {
                $this->session->set_flashdata('subscription', lang('subscriptionError') );
                $this->session->set_userdata('backToCoures',$token);
                redirect('login');
            }
        }else{
            redirect('error');
        }
    }
    
    
    
}




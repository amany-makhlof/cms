<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller { 
    function __construct() {
        parent::__construct();
        $array_model = array('login_model','support_model');
        $this->load->model($array_model);
        
    }
    // view login page 
    public function index()
    {
        if(!$this->session->userdata('log_in')){
         $this->mainclass->home_template('home/login_view');
        }else{
            redirect('home');
        }
    }
    // chack login page 
    public function chackLogin()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST'  ) {
            if(!$this->session->userdata('log_in')){
                $this->form_validation->set_rules('email', 'الايميل', 'required|valid_email|max_length[50]');
                $this->form_validation->set_rules('password', 'الباسورد', 'required|min_length[9]|max_length[50]');
                if ($this->form_validation->run() == FALSE){
                    $this->session->set_flashdata('error_login', lang('errorfields') );
                    redirect('login');
                }else{
                    

                    $email = filter_var($this->security->xss_clean($this->input->post('email')), FILTER_SANITIZE_STRING);
                    $pass  = filter_var($this->security->xss_clean($this->input->post('password')), FILTER_SANITIZE_STRING);
                    $this->load->library('encrypt');
                    $pass       = filter_var($this->security->xss_clean(md5($this->Encryptkey.$pass)), FILTER_SANITIZE_STRING); 
                    $loginData = $this->login_model->check_login_user($email,$pass);
                    //chack login
                    if($loginData){

                        $sessionToken = $this->login_model->check_session_login();

                        $data = array(
                            'sessionToken' => $loginData['sessionToken'],
                            'log_in' => true
                        );
                        $this->session->set_userdata($data);

                       //chack type and redirect
                        if($loginData['type'] == "U" ){
                            redirect('admin/dashborad');
                        }elseif($loginData['type'] == "C" ){
                            if($this->session->userdata('backToCoures')){
                                 redirect('coures/view/' . $this->session->userdata('backToCoures'));   
                            }else{
                                redirect('dashborad/trainer/home/view/'. $loginData['token'] );
                            }
                        }else{
                            if($this->session->userdata('backToCoures')){
                                 redirect('coures/view/' . $this->session->userdata('backToCoures'));   
                            }else{
                                redirect('dashborad/student/home/view/' . $loginData['token'] ); 
                            }
                           
                        }



                    }else{
                        $this->session->set_flashdata('error_login', lang('errorLogin') );
                        redirect('login');
                    }


                }
            }else{
                redirect('home');
            }       

        }else{
            redirect('login');
        }
        
    }
    // view signUp page 
    public function signUp()
    {
        if(!$this->session->userdata('log_in')){
           $data['country'] = $this->support_model->getCountry();
           $data['courses'] = $this->support_model->get_courses();
           $this->mainclass->home_template('home/signUp_view',$data);
           
        }else{
            redirect('home');
        }
    }
    
    public function signNew(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST'  ) {
            if(!$this->session->userdata('log_in')){
                
                $this->form_validation->set_rules('name'             , 'lang:name'       , 'required|min_length[9]|max_length[50]');
                $this->form_validation->set_rules('email'            , 'lang:email'      ,'required|valid_email|max_length[50]|is_unique[contact.Mail]');
                $this->form_validation->set_rules('pass_confirmation', 'lang:password'   , 'required|min_length[9]|max_length[50]');
                $this->form_validation->set_rules('pass'             , 'lang:re_password', 'matches[pass_confirmation]');
                $this->form_validation->set_rules('date'             , 'lang:brithday'   , 'required|min_length[10]|max_length[10]');
                $this->form_validation->set_rules('Degree'           , 'lang:Degree'     , 'required|min_length[4]|max_length[100]');
                $this->form_validation->set_rules('phone'            , 'lang:phone'      , 'required|min_length[6]|max_length[50]');
                $this->form_validation->set_rules('mobile'           , 'lang:mobile'     , 'required|min_length[6]|max_length[50]');
                $this->form_validation->set_rules('mobile2'          , 'lang:mobile2'    , 'required|min_length[6]|max_length[50]');
                $this->form_validation->set_rules('Country'          , 'lang:Country'    , 'required|numeric|max_length[50]');
                $this->form_validation->set_rules('adderss'          , 'lang:adderss'    , 'required|min_length[3]|max_length[80]');  
                
                
                if ($this->form_validation->run() == FALSE){
                    $validation =  validation_errors('<p style="color:red" class=" text-right">','</p>');
                    $this->session->set_flashdata('validation_errors', $validation );
                    redirect('login/signUp');
                }else{
                    
                    $name               = filter_var($this->security->xss_clean($this->input->post('name')), FILTER_SANITIZE_STRING);
                    $email              = filter_var($this->security->xss_clean($this->input->post('email')), FILTER_VALIDATE_EMAIL);
                    $pass_confirmation  = filter_var($this->security->xss_clean($this->input->post('pass_confirmation')), FILTER_SANITIZE_STRING);
                    $date               = filter_var($this->security->xss_clean($this->input->post('date')), FILTER_SANITIZE_STRING);
                    $Degree             = filter_var($this->security->xss_clean($this->input->post('Degree')), FILTER_SANITIZE_STRING);
                    $phone              = filter_var($this->security->xss_clean($this->input->post('phone')), FILTER_SANITIZE_NUMBER_INT);
                    $mobile             = filter_var($this->security->xss_clean($this->input->post('mobile')), FILTER_SANITIZE_NUMBER_INT);
                    $mobile2            = filter_var($this->security->xss_clean($this->input->post('mobile2')), FILTER_SANITIZE_NUMBER_INT);
                    $Country            = filter_var($this->security->xss_clean($this->input->post('Country')), FILTER_SANITIZE_NUMBER_INT);
                    $adderss            = filter_var($this->security->xss_clean($this->input->post('adderss')), FILTER_SANITIZE_STRING);
                    $token              = $this->login_model->getTokenForUser();
                    
                    $option = array('cast' => 12 );
                    $hashpassword = password_hash($pass_confirmation,PASSWORD_BCRYPT,$option);
                    
                    $data = array(
                        'Name'           =>  $name,
                        'Mail'           =>  $email,
                        'Password'       =>  $hashpassword,
                        'brithDay'       =>  $date,
                        'Degree'         =>  $Degree,
                        'Phone'          =>  $phone,
                        'Mobile'         =>  $mobile,
                        'Mobile2'        =>  $mobile2,
                        'Nationality_ID' =>  $Country,
                        'Address'        =>  $adderss,
                        'Token'          =>  $token
                    );
                    
                    
                    //if user sign up 
                    if($this->login_model->addNewUser($data)){
                        
                        // chack Interests array or not if Interests array insert in database
                        if(is_array($this->input->post('Interests'))){
                            
                            foreach ($this->input->post('Interests') as  $value) {
                                $courses_depID = filter_var($value , FILTER_SANITIZE_NUMBER_INT );
                                //chack $courses_depID exist or not  in courses_dep and insert Interests
                                $this->support_model->addInterestsUsers($courses_depID,$token);
                            }
                        }
                        
                        $data = array(
                            'sessionToken' => $token,
                            'log_in' => true
                        );
                        $this->session->set_userdata($data);
                        redirect('profile/home');
                    } 
                      
                    
                  
                }
            }else{
                redirect('home');
            }       

        }else{
            redirect('home');
        }
        
    }
    
    // chack login page 
    public function chackEmail()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST'  ) {
                $this->form_validation->set_rules('email', 'الايميل', 'required|is_unique[contact.Mail]');
                if ($this->form_validation->run() == FALSE){
                   $data_ajax = '0';
                   $this->output->set_content_type('application/json')->set_output(json_encode($data_ajax));
                }else{
                   $data_ajax = '1';
                   $this->output->set_content_type('application/json')->set_output(json_encode($data_ajax));
                }    
                
        }else{
            redirect('home');
        }
        
    }
    
     public function logout(){
         
        $this->login_model->LogOut($this->session->userdata('sessionToken')); 
        $this->session->sess_destroy();
        redirect('home');
    }
}



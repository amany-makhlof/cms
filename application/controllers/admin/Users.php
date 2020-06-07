<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller { 
        function __construct() {
            parent::__construct();
            $array_model = array('admin/users_model','login_model','support_model');
            $this->load->model($array_model);
            $session = $this->session->userdata('sessionToken');
            if($this->login_model->chackSession($session) != 'U'){
                $this->session->sess_destroy();
                redirect('home');
            }
            
            
        }
    // view login page 
    public function index($type = null )
    {   
        $data['users'] = $this->users_model->getUsers($type);
        $this->mainclass->admin_template('admin/users/users_view',$data);
    }
    
     public function add()
    {   
        $data['country'] = $this->support_model->getCountry();
        $this->mainclass->admin_template('admin/users/add_user_view',$data);
    }
    
    public function addNewUser(){
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST'  ) {
                
                $this->form_validation->set_rules('name'             , 'lang:name'       , 'required|min_length[9]|max_length[50]');
                $this->form_validation->set_rules('type'             , 'lang:type'       , 'required|in_list[S,C]');
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
                    redirect('admin/users/add');
                }else{
                    
                    $name               = filter_var($this->security->xss_clean($this->input->post('name')), FILTER_SANITIZE_STRING);
                    $type               = filter_var($this->security->xss_clean($this->input->post('type')), FILTER_SANITIZE_STRING);
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
                        'Type'           =>  $type,
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
                        redirect('admin/users');
                    } else {
                        redirect('admin/dashborad');
                    } 
                      
                    
                  
                }
            
        }else{
            redirect('home');
        }
        
    }
    
    public function Edit($userID = null ){echo'ff';
        $data['info']    = $this->users_model->getOneUser($userID);
        $data['country'] = $this->support_model->getCountry();
        $this->mainclass->admin_template('admin/users/edit_user_view',$data);
    }
    
    public function EditUser(){
        $id = $this->input->post('ID');
        if(!$this->users_model->getOneUser($id) == false ){
            if ($_SERVER['REQUEST_METHOD'] === 'POST'  ) {

                    $this->form_validation->set_rules('name'             , 'lang:name'       , 'required|min_length[9]|max_length[50]');
                    $this->form_validation->set_rules('type'             , 'lang:type'       , 'required|in_list[S,C]');
                    $this->form_validation->set_rules('email'            , 'lang:email'      ,'required|valid_email|max_length[50]');
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
                        redirect('admin/users/Edit/' . $id);
                    }else{

                        $name               = filter_var($this->security->xss_clean($this->input->post('name')), FILTER_SANITIZE_STRING);
                        $type               = filter_var($this->security->xss_clean($this->input->post('type')), FILTER_SANITIZE_STRING);
                        $email              = filter_var($this->security->xss_clean($this->input->post('email')), FILTER_VALIDATE_EMAIL);
                        $date               = filter_var($this->security->xss_clean($this->input->post('date')), FILTER_SANITIZE_STRING);
                        $Degree             = filter_var($this->security->xss_clean($this->input->post('Degree')), FILTER_SANITIZE_STRING);
                        $phone              = filter_var($this->security->xss_clean($this->input->post('phone')), FILTER_SANITIZE_NUMBER_INT);
                        $mobile             = filter_var($this->security->xss_clean($this->input->post('mobile')), FILTER_SANITIZE_NUMBER_INT);
                        $mobile2            = filter_var($this->security->xss_clean($this->input->post('mobile2')), FILTER_SANITIZE_NUMBER_INT);
                        $Country            = filter_var($this->security->xss_clean($this->input->post('Country')), FILTER_SANITIZE_NUMBER_INT);
                        $adderss            = filter_var($this->security->xss_clean($this->input->post('adderss')), FILTER_SANITIZE_STRING);

                       
                        $data = array(
                            'Name'           =>  $name,
                            'Type'           =>  $type,
                            'Mail'           =>  $email,
                            'brithDay'       =>  $date,
                            'Degree'         =>  $Degree,
                            'Phone'          =>  $phone,
                            'Mobile'         =>  $mobile,
                            'Mobile2'        =>  $mobile2,
                            'Nationality_ID' =>  $Country,
                            'Address'        =>  $adderss,
                        );


                        //if user sign up 
                        if($this->users_model->updateUser($id,$data)){
                            redirect('admin/users/edit/' . $id );
                        } else {
                            redirect('admin/dashborad');
                        } 



                    }

            }else{
                redirect('home');
            }
        }else{
              
        }   
    }
    
    public function EditProfile($token = null ){
        $token               = filter_var($this->security->xss_clean($token), FILTER_SANITIZE_STRING);
        $data['info']    = $this->users_model->getOneUser_token($token);
       // $data['country'] = $this->support_model->getCountry();echo'sss';
        $this->mainclass->admin_template('admin/users/edit_user_id_view',$data);
    }
    
    public function UpdateProfile(){
        $id    = $this->input->post('ID');
        $Token = $this->input->post('Token');
        if(!$this->users_model->getOneUser($id) == false ){
            if ($_SERVER['REQUEST_METHOD'] === 'POST'  ) {

                    $this->form_validation->set_rules('name'             , 'lang:name'       , 'required|min_length[2]|max_length[50]'); 
                    $this->form_validation->set_rules('email'            , 'lang:email'      ,'required|valid_email|max_length[50]'); 
                    $this->form_validation->set_rules('old_password'     , 'lang:old_password'    , 'required|min_length[9]|max_length[20]');  
                    $this->form_validation->set_rules('new_password'     , 'lang:new_password'    , 'required|min_length[9]|max_length[20]');  


                    if ($this->form_validation->run() == FALSE){
                        $validation =  validation_errors('<p style="color:red" class=" text-right">','</p>');
                        $this->session->set_flashdata('validation_errors', $validation );
                        $this->session->set_flashdata('error', lang('am_error_save') ); 
                        redirect('admin/users/EditProfile/' . $Token  );
                    }else{

                        $name               = filter_var($this->security->xss_clean($this->input->post('name')), FILTER_SANITIZE_STRING);
                        $email              = filter_var($this->security->xss_clean($this->input->post('email')), FILTER_VALIDATE_EMAIL);
                        $this->load->library('encrypt');
                        $old_password       = filter_var($this->security->xss_clean(md5($this->Encryptkey.$this->input->post('old_password'))), FILTER_SANITIZE_STRING); 
                        $new_password       = filter_var($this->security->xss_clean(md5($this->Encryptkey.$this->input->post('new_password'))), FILTER_SANITIZE_STRING); 
                        
                        $data = array(
                            'Name'           =>  $name,
                            'Mail'           => $email,
                            'Password'       =>  $new_password 
                        );


                        //if user sign up 
                        if($this->users_model->UpdateProfile($id,$data,$old_password)){ 
                                $this->session->set_flashdata('success', lang('am_op_suc') );
                                redirect('admin/users/EditProfile/' . $Token    );
                        } else { 
                            $this->session->set_flashdata('error', lang('am_error_save') );
                                redirect('admin/users/EditProfile/' . $Token );
                        } 



                    }

            }else{
                redirect('home');
            }
        }else{
              
        }   
    }
    
    //delete user 
        public function delete(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){		
                    $this->form_validation->set_rules('id', 'id', 'required|integer');
                        if ($this->form_validation->run() == FALSE){
                                $data_ajax['msg'] = 'حدث خطاء اثناء الموافقة';
                                $data_ajax['status'] = 0;
                                $this->output->set_content_type('application/json')->set_output(json_encode($data_ajax));
                        }else{ 
                          $id = $this->input->post('id');
                            if($this->users_model->deleteUser($id)){
                                $data_ajax['status'] = 1 ;
                                $this->output->set_content_type('application/json')->set_output(json_encode($data_ajax));
                            }
                        }

            }     
        }
    
    
}



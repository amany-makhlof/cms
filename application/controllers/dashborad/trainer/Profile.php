<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller { 
    function __construct() {
        parent::__construct();
        $array_model = array('users_home_model','login_model','support_model');
        $this->load->model($array_model);
        
        
    }
    // view login page 
    public function view($token)
    {
        $session       = $this->session->userdata('sessionToken');
        $data['token'] = $this->users_home_model->getTokenFromSession($session);
        $data['info'] = $this->users_home_model->get_info_user($token);
        $this->mainclass->home_template('home/dashborad/trainer/profile/trainer_view',$data);
        
    }
// edit Trainer  page 
    public function edit($token)
    {
        $session       = $this->session->userdata('sessionToken');
        $data['token'] = $this->users_home_model->getTokenFromSession($session);
        //for Authorization user 
        if($token == $data['token'] ){
            
            $data['courses'] = $this->support_model->get_courses();
            $data['country']  = $this->support_model->getCountry();
            $data['info']  = $this->users_home_model->get_info_user($token);
            $this->mainclass->home_template('home/dashborad/trainer/profile/edit_view',$data);
            
        }else{
            redirect('error');
        }
        
        
    }
    
     public function updateInfo(){
         if($_SERVER['REQUEST_METHOD'] === 'POST'){
             $session       = $this->session->userdata('sessionToken');
             $data['token'] = $this->users_home_model->getTokenFromSession($session);
             $token = $this->input->post('token');
             
             if($token == $data['token'] ){
                 
                $this->form_validation->set_rules('name'             , 'lang:name'       , 'required|min_length[9]|max_length[50]');
                $this->form_validation->set_rules('S_Awards'         , 'lang:S_Awards'   , 'required|min_length[4]|max_length[80]');
                $this->form_validation->set_rules('job'              , 'lang:job'        ,'required|min_length[9]|max_length[50]');
                $this->form_validation->set_rules('date'             , 'lang:brithday'   , 'required|min_length[10]|max_length[10]');
                $this->form_validation->set_rules('facebook'         , 'lang:facebook'   , 'required|valid_url');
                $this->form_validation->set_rules('twitter'          , 'lang:twitter'    , 'required|valid_url');
                $this->form_validation->set_rules('google'           , 'lang:google'     , 'required|valid_url');
                $this->form_validation->set_rules('experience'       , 'lang:experience' , 'required|numeric|max_length[2]');
                $this->form_validation->set_rules('phone'            , 'lang:phone'      , 'required|min_length[6]|max_length[50]|numeric');
                $this->form_validation->set_rules('mobile'           , 'lang:mobile'     , 'required|min_length[6]|max_length[50]|numeric');
                $this->form_validation->set_rules('mobile2'          , 'lang:mobile2'    , 'required|min_length[6]|max_length[50]|numeric');
                $this->form_validation->set_rules('Country'          , 'lang:Country'    , 'required|numeric|max_length[50]');
                $this->form_validation->set_rules('Degree'           , 'lang:Degree'     , 'required|min_length[4]|max_length[100]');
                $this->form_validation->set_rules('adderss'          , 'lang:adderss'    , 'required|min_length[3]|max_length[80]');  
                $this->form_validation->set_rules('Languages'        , 'lang:Languages'  , 'required|min_length[4]|max_length[200]');
                $this->form_validation->set_rules('Biography'        , 'lang:Biography'  , 'required|min_length[4]|min_length[4]');
                $this->form_validation->set_rules('P_experienc'      , 'lang:P_experienc', 'required|min_length[4]');

                
                
                if ($this->form_validation->run() == FALSE){
                    
                    $validation =  validation_errors('<p style="color:red" class=" text-right">','</p>');
                    $this->session->set_flashdata('validation_errors', $validation );
                    redirect('dashborad/trainer/profile/edit/' .  $data['token']);
                    
                }else{
                    
                    $name               = filter_var($this->security->xss_clean($this->input->post('name')), FILTER_SANITIZE_STRING);
                    $S_Awards           = filter_var($this->security->xss_clean($this->input->post('S_Awards')), FILTER_SANITIZE_STRING);
                    $job                = filter_var($this->security->xss_clean($this->input->post('job')), FILTER_SANITIZE_STRING);
                    $date               = filter_var($this->security->xss_clean($this->input->post('date')), FILTER_SANITIZE_STRING);
                    $facebook           = filter_var($this->security->xss_clean($this->input->post('facebook')),FILTER_SANITIZE_URL );
                    $twitter            = filter_var($this->security->xss_clean($this->input->post('twitter')), FILTER_SANITIZE_URL);
                    $google             = filter_var($this->security->xss_clean($this->input->post('google')), FILTER_SANITIZE_URL);
                    $experience         = filter_var($this->security->xss_clean($this->input->post('experience')), FILTER_SANITIZE_NUMBER_INT);
                    $phone              = filter_var($this->security->xss_clean($this->input->post('phone')), FILTER_SANITIZE_NUMBER_INT);
                    $mobile             = filter_var($this->security->xss_clean($this->input->post('mobile')), FILTER_SANITIZE_NUMBER_INT);
                    $mobile2            = filter_var($this->security->xss_clean($this->input->post('mobile2')), FILTER_SANITIZE_NUMBER_INT);
                    $Country            = filter_var($this->security->xss_clean($this->input->post('Country')), FILTER_SANITIZE_NUMBER_INT);
                    $Degree             = filter_var($this->security->xss_clean($this->input->post('Degree')), FILTER_SANITIZE_STRING);
                    $adderss            = filter_var($this->security->xss_clean($this->input->post('adderss')), FILTER_SANITIZE_STRING);
                    $Languages          = filter_var($this->security->xss_clean($this->input->post('Languages')), FILTER_SANITIZE_STRING);
                    $Biography          = filter_var($this->security->xss_clean($this->input->post('Biography')), FILTER_SANITIZE_STRING);
                    $P_experienc        = filter_var($this->security->xss_clean($this->input->post('P_experienc')), FILTER_SANITIZE_STRING);
                    
                    $data = array(
                        'Name'           =>  $name,
                        'job'            =>  $job,
                        'brithDay'       =>  $date,
                        'facebook'       =>  $facebook,
                        'twitter'        =>  $twitter,
                        'google'         =>  $google,
                        'Experience'     =>  $experience,
                        'Phone'          =>  $phone,
                        'Mobile'         =>  $mobile,
                        'Mobile2'        =>  $mobile2,
                        'Nationality_ID' =>  $Country,
                        'Degree'         =>  $Degree,
                        'Address'        =>  $adderss,
                        'Languages'      => $Languages,
                        'Biography'      => $Biography,
                        'Personal_experiences' => $P_experienc,
                        'Scientific_Awards'    =>  $S_Awards
                        
                    );
                    
                    //if user sign up 
                    if($this->users_home_model->updateUser($token,$data)){
                        redirect('dashborad/trainer/profile/view/' .  $token);
                    } else {
                        
                       $this->session->set_flashdata('validation_errors',  lang('errorUpdate') ); 
                       redirect('dashborad/trainer/profile/edit/' .  $data['token']);
                       
                    } 
                    
                    
                }
                 
             } else {
               redirect('error');  
             } 
             
         } else {
             redirect('error');
         }
     }
    
    
    //upload Img 
    public function uploadImg($token){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $session       = $this->session->userdata('sessionToken');
            $data['token'] = $this->users_home_model->getTokenFromSession($session);
            if($token == $data['token'] ){
                $imgName = $_FILES["userFiles"]["name"]; 
                //xss clean image
                if($this->security->xss_clean($this->input->post('userFiles'),TRUE) === FALSE){

                    $data_ajax['status'] = 0 ;
                    $data_ajax['msg'] = 'error';
                    $this->output->set_content_type('application/json')->set_output(json_encode($data_ajax));

                }else{ 

                        $config['upload_path']   = 'upload/';
                        $config['allowed_types'] =  'gif|jpg|png|jpeg';
                        $config['encrypt_name']  = true;
                        $config['max_size'] = 100000;

                        $this->load->library('upload',$config);

                       if(! $this->upload->do_upload('userFiles')){
                           $data_ajax['status'] = 0 ;
                           $data_ajax['imgName'] = $imgName;
                           $data_ajax['msg'] =  $this->upload->display_errors();
                           $this->output->set_content_type('application/json')->set_output(json_encode($data_ajax));

                       }else{
                           $image_data = $this->upload->data();
                           $img_name = $image_data['file_name'];
                           $data = array('Img' => $img_name );
                           if($this->users_home_model->updateUser($token,$data)){
                                // if image uploaded do every thing U needed
                                $image_data = $this->upload->data();
                                $img_name = $image_data['file_name'];
                                $data_ajax['status'] = 1 ;
                                $data_ajax['imgName'] = $imgName;
                                $data_ajax['msg'] =  $img_name;
                                $this->output->set_content_type('application/json')->set_output(json_encode($data_ajax));
                           }
                       }


                }
            }
        } 
            
    }
        
     
     
}





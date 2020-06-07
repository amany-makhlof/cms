<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Departments extends CI_Controller { 
        function __construct() {
            parent::__construct();
            $array_model = array('admin/departments_model','login_model');
            $this->load->model($array_model);
            $session = $this->session->userdata('sessionToken');
            if($this->login_model->chackSession($session) != 'U'){
                $this->session->sess_destroy();
                redirect('home');
            }
        }
    // view login page 
    public function index()
    {   
        $data['departments'] = $this->departments_model->getRootDepartments();
        $this->mainclass->admin_template('admin/departments/departments_view',$data);
    }
    
     public function add()
    {   
        $data['departments'] = $this->departments_model->getRootDepartments();
        $this->mainclass->admin_template('admin/departments/add_department_view',$data);
    }
    
    public function addNewDepartments(){
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST'  ) {
                
                $this->form_validation->set_rules('name' , 'lang:name'  , 'required|min_length[3]|max_length[140]');
				$this->form_validation->set_rules('name_en' , 'lang:am_name_en'  , 'required|min_length[3]|max_length[140]');
				$this->form_validation->set_rules('content'  , 'lang:am_content'   , 'required|min_length[9]|max_length[200]');
				$this->form_validation->set_rules('content_en' , 'lang:am_content_en'  , 'required|min_length[9]|max_length[200]');
                 $this->form_validation->set_rules('departments'   , 'lang:am_departments'    , 'numeric|max_length[50]');
                
                
                if ($this->form_validation->run() == FALSE){
                    $validation =  validation_errors('<p style="color:red" class=" text-right">','</p>');
                    $this->session->set_flashdata('msg', $validation );
                    redirect('admin/departments/add');
                }else{
                     
                    $name                = filter_var($this->security->xss_clean($this->input->post('name')), FILTER_SANITIZE_STRING);
                    $name_en             = filter_var($this->security->xss_clean($this->input->post('name_en')), FILTER_SANITIZE_STRING);
                    $content             = filter_var($this->security->xss_clean($this->input->post('content')), FILTER_SANITIZE_STRING);
                    $content_en          = filter_var($this->security->xss_clean($this->input->post('content_en')), FILTER_SANITIZE_STRING);
                    $departments         = filter_var($this->security->xss_clean($this->input->post('departments')), FILTER_SANITIZE_NUMBER_INT);
                  
                    $token               = getToken('courses_dep');
                    $UserData            = getUserData() ;
				    $UserToken           = $UserData->Token;
                    $data = array(
                        'Name'           =>  $name,
                        'Name_en'        =>  $name_en,
                        'Content'        =>  $content,
                        'Content_en'     =>  $content_en,
                        'ParentID'       =>  $departments,
                        'TokenContact'   =>  $UserToken ,
                        'Token'          =>  $token
                    ); 
                    //add
                    if($this->departments_model->addNewDepartment($data)){
						$this->session->set_flashdata('msg', '<div class="alert alert-success">'.lang('am_Success_save').'</div>');
                        redirect('admin/departments');
                    } else {
						$this->session->set_flashdata('msg', '<div class="alert alert-danger">'.lang('am_error_save').'</div>');
                         redirect('admin/dashborad');
                    } 
                      
                    
                  
                }
            
        }else{
            redirect('home');
        }
        
    }
    
    public function Edit($departmentID = null ){
        $data['info']        = $this->departments_model->getOneDepartment($departmentID);
        $data['departments'] = $this->departments_model->getRootDepartments();
        $this->mainclass->admin_template('admin/departments/edit_department_view',$data);
    }
    
    public function EditDepartment(){
        $id = $this->input->post('ID'); 
        if(!$this->departments_model->getOnedepartment($id) == false ){
            if ($_SERVER['REQUEST_METHOD'] === 'POST'  ) {

                  $this->form_validation->set_rules('name' , 'lang:name'  , 'required|min_length[3]|max_length[140]');
		          $this->form_validation->set_rules('name_en' , 'lang:am_name_en'  , 'required|min_length[3]|max_length[140]');
		          $this->form_validation->set_rules('content'  , 'lang:am_content'   , 'required|min_length[9]|max_length[200]');
		          $this->form_validation->set_rules('content_en' , 'lang:am_content_en'  , 'required|min_length[9]|max_length[200]');
                  $this->form_validation->set_rules('departments'   , 'lang:am_departments'    , 'numeric|max_length[50]');


                    if ($this->form_validation->run() == FALSE){
                        $validation =  validation_errors('<div class="alert alert-danger">','</div>');
                        $this->session->set_flashdata('msg', $validation );
                          redirect('admin/departments/Edit/' . $id);
                    }else{

                     $name                = filter_var($this->security->xss_clean($this->input->post('name')), FILTER_SANITIZE_STRING);
                     $name_en             = filter_var($this->security->xss_clean($this->input->post('name_en')), FILTER_SANITIZE_STRING);
                     $content             = filter_var($this->security->xss_clean($this->input->post('content')), FILTER_SANITIZE_STRING);
                     $content_en          = filter_var($this->security->xss_clean($this->input->post('content_en')), FILTER_SANITIZE_STRING);
                     $departments         = filter_var($this->security->xss_clean($this->input->post('departments')), FILTER_SANITIZE_NUMBER_INT);

                     $UserData            = getUserData() ;
				     $UserToken           = $UserData->Token;
                       
                     $data = array(
                        'Name'           =>  $name,
                        'Name_en'        =>  $name_en,
                        'Content'        =>  $content,
                        'Content_en'     =>  $content_en,
                        'ParentID'       =>  $departments,
                        'TokenContact'   =>  $UserToken  
                         );  
                        //update
                        if($this->departments_model->updateDepartment($id,$data)){
                           $this->session->set_flashdata('msg', '<div class="alert alert-success">'.lang('am_Success_save').'</div>');
                           redirect('admin/Departments/Edit/' . $id );
                        } else {
						   $this->session->set_flashdata('msg', '<div class="alert alert-danger">'.lang('am_error_save').'</div>');
                           redirect('admin/Departments/Edit/' . $id );
                        }
					}
            }else{
                redirect('home');
            }
        }  
    }
    
    //delete department 
        public function delete(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){		
                    $this->form_validation->set_rules('id', 'id', 'required|integer');
                        if ($this->form_validation->run() == FALSE){
                                $data_ajax['msg'] = 'حدث خطاء اثناء الموافقة';
                                $data_ajax['status'] = 0;
                                $this->output->set_content_type('application/json')->set_output(json_encode($data_ajax));
                        }else{ 
                          $id = $this->input->post('id');
                            if($this->departments_model->deleteDepartment($id)){
                                $data_ajax['status'] = 1 ;
                                $this->output->set_content_type('application/json')->set_output(json_encode($data_ajax));
                            }
                        }

            }     
        }
    
    
}



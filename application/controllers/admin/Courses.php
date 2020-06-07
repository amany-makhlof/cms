<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends CI_Controller { 
        function __construct() {
            parent::__construct();
            $array_model = array('admin/courses_model','admin/departments_model','login_model');
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
        $data['courses'] = $this->courses_model->getCourses();
        $this->mainclass->admin_template('admin/courses/courses_view',$data);
    }
    
     public function add()
    {   
        $data['departments'] = $this->departments_model->getDepartments();
        $data['instructor']  = $this->courses_model->getInstructors();
        $this->mainclass->admin_template('admin/courses/add_course_view',$data);
    }
    
    public function addNewCourses(){
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST'  ) {
                
                $this->form_validation->set_rules('name' , 'lang:name'  , 'required|min_length[3]|max_length[140]');
				$this->form_validation->set_rules('name_en' , 'lang:am_name_en'  , 'required|min_length[3]|max_length[140]'); 
				$this->form_validation->set_rules('instructor' , 'lang:am_instructor'  , 'required|min_length[50]|max_length[300]');
                 $this->form_validation->set_rules('departments'   , 'lang:am_departments'    , 'required|numeric|max_length[50]'); 
                 $this->form_validation->set_rules('course_price'   , 'lang:am_course_price'    , 'required|numeric|max_length[5]'); 
				$this->form_validation->set_rules('from' , 'lang:am_from'  , 'required|min_length[10]|max_length[100]'); 
				$this->form_validation->set_rules('to'  , 'lang:am_to'  , 'required|min_length[10]|max_length[100]'); 
				//$this->form_validation->set_rules('days' , 'lang:am_days'  , 'required'); 
				$this->form_validation->set_rules('language' , 'lang:am_language'  , 'required|min_length[4]|max_length[140]'); 
                
                
                if ($this->form_validation->run() == FALSE){
                    $validation =  validation_errors('<p style="color:red" class=" text-right">','</p>');
                    $this->session->set_flashdata('msg', $validation );
                    redirect('admin/Courses/add');
                }else{
                     
                    $name           = filter_var($this->security->xss_clean($this->input->post('name')), FILTER_SANITIZE_STRING);
                    $name_en        = filter_var($this->security->xss_clean($this->input->post('name_en')), FILTER_SANITIZE_STRING); 
                    $departments    = filter_var($this->security->xss_clean($this->input->post('departments')), FILTER_SANITIZE_NUMBER_INT);
				    $instructor     = filter_var($this->security->xss_clean($this->input->post('instructor')), FILTER_SANITIZE_STRING); 
                    $course_price   = filter_var($this->security->xss_clean($this->input->post('course_price')), FILTER_SANITIZE_NUMBER_INT); 
                    $from           = filter_var($this->security->xss_clean($this->input->post('from')), FILTER_SANITIZE_STRING); 
                    $to             = filter_var($this->security->xss_clean($this->input->post('to')), FILTER_SANITIZE_STRING); 
                    $days           = filter_var($this->security->xss_clean(implode(",",$this->input->post('days'))), FILTER_SANITIZE_STRING); 
				    $language       = filter_var($this->security->xss_clean($this->input->post('language')), FILTER_SANITIZE_STRING); 
                  
                    $token          = getToken('courses');
                    $UserData       = getUserData() ;
				    $UserToken      = $UserData->Token;
                    $data = array(
                        'Name'           =>  $name,
                        'Name_en'        =>  $name_en,
                        'courses_depID'  =>  $departments,
                        'course_price'   =>  $course_price,
                        'from'           =>  $from,
                        'to'             =>  $to ,
                        'days'           =>  $days,
                        'instructorToken'=>  $instructor ,
                        'language'       =>  $language ,
                        'TokenContact'   =>  $UserToken ,
                        'token'          =>  $token 
                    ); 
                    //add
                    if($this->courses_model->addNewCourse($data)){
						$this->session->set_flashdata('msg', '<div class="alert alert-success">'.lang('am_Success_save').'</div>');
                        redirect('admin/Courses');
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
        $data['info']        = $this->courses_model->getOneCourse($departmentID);
        $data['departments'] = $this->departments_model->getDepartments();
        $data['instructor']  = $this->courses_model->getInstructors();
        $this->mainclass->admin_template('admin/Courses/edit_course_view',$data);
    }
    
    public function EditCourse(){
        $id = $this->input->post('ID'); 
        if(!$this->courses_model->getOneCourse($id) == false ){
            if ($_SERVER['REQUEST_METHOD'] === 'POST'  ) {

					$this->form_validation->set_rules('name' , 'lang:name'  , 'required|min_length[3]|max_length[140]');
					$this->form_validation->set_rules('name_en' , 'lang:am_name_en'  , 'required|min_length[3]|max_length[140]'); 
					$this->form_validation->set_rules('instructor' , 'lang:am_instructor'  , 'required|min_length[50]|max_length[300]');
					 $this->form_validation->set_rules('departments'   , 'lang:am_departments'    , 'required|numeric|max_length[50]'); 
					 $this->form_validation->set_rules('course_price'   , 'lang:am_course_price'    , 'required|numeric|max_length[5]'); 
					$this->form_validation->set_rules('from' , 'lang:am_from'  , 'required|min_length[10]|max_length[100]'); 
					$this->form_validation->set_rules('to'  , 'lang:am_to'  , 'required|min_length[10]|max_length[100]'); 
					//$this->form_validation->set_rules('days' , 'lang:am_days'  , 'required'); 
					$this->form_validation->set_rules('language' , 'lang:am_language'  , 'required|min_length[4]|max_length[140]'); 
					
                
                    if ($this->form_validation->run() == FALSE){
                        $validation =  validation_errors('<div class="alert alert-danger">','</div>');
                        $this->session->set_flashdata('msg', $validation );
                          redirect('admin/Courses/Edit/' . $id);
                    }else{

                   	    $name           = filter_var($this->security->xss_clean($this->input->post('name')), FILTER_SANITIZE_STRING);
						$name_en        = filter_var($this->security->xss_clean($this->input->post('name_en')), FILTER_SANITIZE_STRING); 
						$departments    = filter_var($this->security->xss_clean($this->input->post('departments')), FILTER_SANITIZE_NUMBER_INT);
						$instructor     = filter_var($this->security->xss_clean($this->input->post('instructor')), FILTER_SANITIZE_STRING); 
						$course_price   = filter_var($this->security->xss_clean($this->input->post('course_price')), FILTER_SANITIZE_NUMBER_INT); 
						$from           = filter_var($this->security->xss_clean($this->input->post('from')), FILTER_SANITIZE_STRING); 
						$to             = filter_var($this->security->xss_clean($this->input->post('to')), FILTER_SANITIZE_STRING); 
						$days           = filter_var($this->security->xss_clean(implode(",",$this->input->post('days'))), FILTER_SANITIZE_STRING); 
						$language       = filter_var($this->security->xss_clean($this->input->post('language')), FILTER_SANITIZE_STRING); 

						 $UserData            = getUserData() ;
						 $UserToken           = $UserData->Token;
						   
						 $data = array(
							'Name'           =>  $name,
							'Name_en'        =>  $name_en,
							'courses_depID'  =>  $departments,
							'course_price'   =>  $course_price,
							'from'           =>  $from,
							'to'             =>  $to ,
							'days'           =>  $days,
							'instructorToken'=>  $instructor ,
							'language'       =>  $language ,
							'TokenContact'   =>  $UserToken
							 );  
							//update
							if($this->courses_model->updateCourse($id,$data)){
							   $this->session->set_flashdata('msg', '<div class="alert alert-success">'.lang('am_Success_save').'</div>');
							   redirect('admin/Courses/Edit/' . $id );
							} else {
							   $this->session->set_flashdata('msg', '<div class="alert alert-danger">'.lang('am_error_save').'</div>');
							   redirect('admin/Courses/Edit/' . $id );
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
                            if($this->courses_model->deleteCourse($id)){
                                $data_ajax['status'] = 1 ;
                                $this->output->set_content_type('application/json')->set_output(json_encode($data_ajax));
                            }
                        }

            }     
        }
    
    
}



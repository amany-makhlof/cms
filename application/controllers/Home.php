      

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller { 
    function __construct() {
        parent::__construct();
    $this->load->helper('form');
    $this->load->helper('url');
    $this->load->library('form_validation');
        $array_model = array('admin/cms_model','home_model');
        $this->load->model($array_model);
        
    }
    // view index 
    public function index()
    { 
		 $this->cms_model->addvisitor('rqwerewewdfdasfdfd8s9f7ds8f74d56s4fsd564f5d6sf64' ); 
		$data['message']      = $this->cms_model->getItem('rqwerewewdfdasfdfd8s9f7ds8f74d56s4fsd564f5d6sf64' ); 
		$data['mission']      = $this->cms_model->getItem('rqwerewewssdfdasfdfd8s9f7ds8f74d56s4fsd564f5d6sf' ); 
		$data['Vision']       = $this->cms_model->getItem('rqwerewewdfdsgrasfdfd8s9f7ds8f74d56s4fsd564f5d6sf' ); 
 		$data['Conditions']   = $this->cms_model->getDep('rqwerewewdfstefedasfdfd8s9f7ds8f74d56s4fsd564f5d6sf' ); 
		$data['banner']       = $this->cms_model->getDep('rqwerewewdfstefeyhutgds8f74d56s4fsd564f5d6sf' ); 
 
        $this->mainclass->home_template('home/home_view',$data);
    }
    // view questions
    public function questions()
    {  
	    $data['Dep']   = $this->cms_model->getDepName('rqwerewewdfstefedfsaasfdfd8s9f7ds8f74d56s4fsd564f5d6sf'  );
		$data['questions']    = $this->cms_model->getDep('rqwerewewdfstefedfsaasfdfd8s9f7ds8f74d56s4fsd564f5d6sf' );  
        $this->mainclass->home_template('home/questions_view',$data);
    }
	
    // view idea
    public function idea()
    { 
 	$Token               = 'rqwerew8s9f7dssfaeaewe4fsd564f5d6sfewdfstefedfsaasfdfd';
        $data['info']        = $this->cms_model->getItem($Token); 
        $data['Dep']   = $this->cms_model->getDepName('rqwerew8s9f7dssfaeaewe4fsd564f5d6sfewdfstefedfsaasfdfd'  );  
        $this->mainclass->home_template('home/idea_view',$data);
    } 
    // view projects
    public function projects()
    { 
	    $data['Dep']   = $this->cms_model->getDepName('rqwerewe9f7ds7548f74d56s4ا4wdfstefedasfdfd8sf5d6sf22'  );
	$data['info']   = $this->cms_model->getItem('rqwerewe9f7dddsd56sedasfdff5d6sf22'  );  
        $this->mainclass->home_template('home/projects_view',$data);
    }  
    // view contact
    public function contact()
    { 
	    $data['Dep']         = $this->cms_model->getDepName('rqwerewewdfstefe'  );
 		$Token               = 'A3iUkjdSgvirUJjkkIdoqJrHqBff8YS88y480BhjWWuhFVb7qp';
        $data['info']        = $this->cms_model->getItem($Token); 
        $this->mainclass->home_template('home/contact_view',$data);
    }  // view send_contact
    public function send_contact()
    {  
			if ($_SERVER['REQUEST_METHOD'] === 'POST'  ) {
					
					$this->form_validation->set_rules('form_name' , 'lang:am_Your_Name'  , 'required|min_length[3]|max_length[140]');
					$this->form_validation->set_rules('form_email' , 'lang:am_Your_Mail'  , 'required|valid_email'); 
 					$this->form_validation->set_rules('form_phone' , 'lang:phone'  , 'required|min_length[5]|max_length[15]'); 
 					$this->form_validation->set_rules('form_subject' , 'lang:am_Subject'  , 'required|min_length[3]|max_length[350]');
					 $this->form_validation->set_rules('form_message' , 'lang:am_Your_Message'  , 'required|min_length[3]|max_length[350]'); 
					 
					if ($this->form_validation->run() == FALSE){ 
						$validation =  validation_errors('<p style="color:red" class=" text-right">','</p>');
						$this->session->set_flashdata('msg', $validation );
						redirect('Home/contact');
 					}else{
						 
						$form_name      = filter_var($this->security->xss_clean($this->input->post('form_name')), FILTER_SANITIZE_STRING);
						$form_email     = filter_var($this->security->xss_clean($this->input->post('form_email')), FILTER_SANITIZE_STRING); 
						$form_phone     = filter_var($this->security->xss_clean($this->input->post('form_phone')), FILTER_SANITIZE_STRING); 
						$form_subject   = filter_var($this->security->xss_clean($this->input->post('form_subject')), FILTER_SANITIZE_STRING); 
						$form_message   = filter_var($this->security->xss_clean($this->input->post('form_message')), FILTER_SANITIZE_STRING);  
					  
						$token          = getToken('support');
						 
						$data = array(
 							'name'        =>  $form_name,
							'email'       =>  $form_email,
							'phone'       =>  $form_phone,
							'subject'     =>  $form_subject,
							'message'     =>  $form_message ,
 							'Token'       =>  $token 
						); 
						//add
						if($this->cms_model->send_contact($data)){ 
						
								$this->load->library('email');

$this->email->from('info@masryinternational.com', 'masryinternational');
$this->email->to('info@masryinternational.com');
  $this->email->set_mailtype("html");

$this->email->subject('اتصل بنا');
 $message = $this->load->view('home/contact_mail',$data,true); 
$this->email->message($message );

$this->email->send();
							$this->session->set_flashdata('msg', '<div class="alert alert-success">'.lang('am_Success_save').'</div>');
 							redirect('Home/contact');
						} else { 
							$this->session->set_flashdata('msg', '<div class="alert alert-danger">'.lang('am_error_save').'</div>');
 							redirect('Home/contact');
						} 
						  
						
					  
					}
				
				}else{
					redirect('home');
				}
		        
    }
	/////set langauge
    public function set_lang()
 	{
		if ($_SERVER['REQUEST_METHOD'] === 'POST'  ) {
 		  $Lang = (int)$this->input->post('id');
  			  switch($Lang){
 				  case 1:
 					$this->session->set_userdata('language','arabic');
 					break;
 				  case 2:
 					$this->session->set_userdata('language','english');
 					 break;
 				  default:
 					$this->session->set_userdata('language','arabic');
 				  } 
  	    } 
	}
    public function insertIdea(){
        
 			if ($_SERVER['REQUEST_METHOD'] === 'POST'  ) {
					
					$this->form_validation->set_rules('project_name' , 'lang:project_name'  , 'required|min_length[1]|max_length[140]|xss_clean');
					
					$this->form_validation->set_rules('full_name' , 'lang:am_full_name'  , 'max_length[140]');
					$this->form_validation->set_rules('gender' , 'lang:am_gender'  , 'required'); 
 					$this->form_validation->set_rules('age' , 'lang:am_age'  , 'integer'); 
 					$this->form_validation->set_rules('Educational' , 'lang:am_Educational'  , 'max_length[350]');
				    $this->form_validation->set_rules('Graduation_Year' , 'lang:am_Graduation_Year'  , 'max_length[5]'); 
				    $this->form_validation->set_rules('recruitment' , 'lang:am_Position_recruitment'  , 'max_length[350]'); 
					 
					$this->form_validation->set_rules('Social_status' , 'lang:am_Social_status'  , 'integer'); 
					$this->form_validation->set_rules('Governorate' , 'lang:Governorate'  , 'integer'); 
					$this->form_validation->set_rules('adderss' , 'lang:adderss'  , 'max_length[250]'); 
					$this->form_validation->set_rules('mobile' , 'lang:mobile'  , 'max_length[11]'); 
					$this->form_validation->set_rules('email' , 'lang:email'  , ''); 
					$this->form_validation->set_rules('Current_Position' , 'lang:am_Current_Position'  , 'max_length[250]'); 
					 

 					
					if ($this->form_validation->run() == FALSE){  
						$validation =  validation_errors('<p style="color:red" class=" text-right">','</p>');
						$this->session->set_flashdata('msg', $validation );
							redirect('Home/idea');
					}else{
						$project_name= filter_var($this->security->xss_clean($this->input->post('project_name')), FILTER_SANITIZE_STRING); 
						$full_name      = filter_var($this->security->xss_clean($this->input->post('full_name')), FILTER_SANITIZE_STRING);
						$gender   = filter_var($this->security->xss_clean($this->input->post('gender')), FILTER_SANITIZE_STRING); 
						$age    = filter_var($this->security->xss_clean($this->input->post('age')), FILTER_SANITIZE_STRING); 
						$Educational = filter_var($this->security->xss_clean($this->input->post('Educational')), FILTER_SANITIZE_STRING); 
						$Graduation_Year     = filter_var($this->security->xss_clean($this->input->post('Graduation_Year')), FILTER_SANITIZE_STRING); 
					  $Position_recruitment          = filter_var($this->security->xss_clean($this->input->post('recruitment')), FILTER_SANITIZE_STRING);  
					   
					  
					    $Social_status  = filter_var($this->security->xss_clean($this->input->post('Social_status')), FILTER_SANITIZE_STRING);  
                                            $Governorate    = filter_var($this->security->xss_clean($this->input->post('Governorate')), FILTER_SANITIZE_STRING);    
					    $adderss        = filter_var($this->security->xss_clean($this->input->post('adderss')), FILTER_SANITIZE_STRING);  
					    $mobile         = filter_var($this->security->xss_clean($this->input->post('mobile')), FILTER_SANITIZE_STRING);  
					    $email          = filter_var($this->security->xss_clean($this->input->post('email')), FILTER_SANITIZE_STRING);  
					    $Current_Position          = filter_var($this->security->xss_clean($this->input->post('Current_Position')), FILTER_SANITIZE_STRING);  
					    $Monthly_Salary = filter_var($this->security->xss_clean($this->input->post('Monthly_Salary')), FILTER_SANITIZE_STRING);  
					  $company_owner          = filter_var($this->security->xss_clean($this->input->post('company_owner')), FILTER_SANITIZE_STRING);  
					   $achievements          = filter_var($this->security->xss_clean($this->input->post('achievements')), FILTER_SANITIZE_STRING);  
					  $try_achieve          = filter_var($this->security->xss_clean($this->input->post('try_achieve')), FILTER_SANITIZE_STRING);  
					   $thought          = filter_var($this->security->xss_clean($this->input->post('thought')), FILTER_SANITIZE_STRING);  
			  $thoughtOther= filter_var($this->security->xss_clean($this->input->post('thoughtOther')), FILTER_SANITIZE_STRING);  		 $targeted_people          = filter_var($this->security->xss_clean($this->input->post('targeted_people')), FILTER_SANITIZE_STRING);  
					  $required_project          = filter_var($this->security->xss_clean($this->input->post('required_project')), FILTER_SANITIZE_STRING);  
					  $preparation_project          = filter_var($this->security->xss_clean($this->input->post('preparation_project')), FILTER_SANITIZE_STRING);  
					  $apply_project          = filter_var($this->security->xss_clean($this->input->post('apply_project')), FILTER_SANITIZE_STRING);  
					 $Interest_project          = filter_var($this->security->xss_clean($this->input->post('Interest_project')), FILTER_SANITIZE_STRING);  
					  $Interest_project_Global          = filter_var($this->security->xss_clean($this->input->post('Interest_project_Global')), FILTER_SANITIZE_STRING);  
					 $project_Overview          = filter_var($this->security->xss_clean($this->input->post('project_Overview')), FILTER_SANITIZE_STRING);  
					  $project_seasonal          = filter_var($this->security->xss_clean($this->input->post('project_seasonal')), FILTER_SANITIZE_STRING);  
					  $project_success          = filter_var($this->security->xss_clean($this->input->post('project_success')), FILTER_SANITIZE_STRING);  
					 $project_Potential          = filter_var($this->security->xss_clean($this->input->post('project_Potential')), FILTER_SANITIZE_STRING);  
					  $num_Specializations          = filter_var($this->security->xss_clean($this->input->post('num_Specializations')), FILTER_SANITIZE_STRING);  
					  $think_project          = filter_var($this->security->xss_clean($this->input->post('think_project')), FILTER_SANITIZE_STRING);  
					   if(is_array($this->input->post('hidImg'))){
                       $hidImg          = filter_var($this->security->xss_clean( implode(",", $this->input->post('hidImg'))), FILTER_SANITIZE_STRING); 
			  }else{ $hidImg          =0;} 
						$token          = getToken('project');
						 
						$data['idea'] = array(
 							'project_name'      =>  $project_name,
 							'full_name'      =>  $full_name,
							'gender'          =>  $gender,
							'age'        =>  $age,
							'Educational'       =>  $Educational,
							'Graduation_Year'     =>  $Graduation_Year ,
							'Position_recruitment'     =>  $Position_recruitment          ,
							'recruitment'      =>  $Position_recruitment          , 
							'Social_status'      =>  $Social_status  , 
							'Governorate'      =>  $Governorate, 

							'adderss'       =>  $adderss,
							'mobile'     =>  $mobile ,
							'email'      =>  $email, 
							
							'Monthly_Salary'     =>  $Monthly_Salary,
                                                      'Current_Position'      =>  $Current_Position, 
							'Monthly_Salary'      =>  $Monthly_Salary, 
							'company_owner'      =>  $company_owner, 
							'achievements'      =>  $achievements, 
							'try_achieve'      =>  $try_achieve, 
							'thought'      =>  $thought, 
							
							'thoughtOther'      =>  $thoughtOther, 
                                                        'targeted_people'      =>  $targeted_people, 
							'required_project'      =>  $required_project, 
							'preparation_project'      =>  $preparation_project, 
							'apply_project'      =>  $apply_project, 
							'Interest_project'            =>  $Interest_project, 
							'Interest_project_Global'      =>  $Interest_project_Global, 
							'project_Overview'   =>  $project_Overview, 
							'project_seasonal'   =>  $project_seasonal, 
							'project_success'    =>  $project_success, 
							'project_Potential'  =>  $project_Potential, 
							'num_Specializations'=>  $num_Specializations, 
							'think_project'      =>  $think_project, 
							'attach'             =>  $hidImg, 
  							'Token'              =>  $token 
						); 
						//add
						if($this->home_model->insertIdea($data['idea'] )){ 
							$this->load->library('email');

$this->email->from('info@masryinternational.com', $full_name);
$this->email->to('Fekrety@MasryInternational.com');
  $this->email->set_mailtype("html");

$this->email->subject($project_name.' - '.'   فكره جديدة');
 $message = $this->load->view('home/idea_mail',$data,true); 
$this->email->message($message );

$this->email->send();
							$this->session->set_flashdata('msg', '<div class="alert alert-success">'.lang('am_Success_save').'</div>');
							redirect('Home/idea');
						} else {  
							$this->session->set_flashdata('msg', '<div class="alert alert-danger">'.lang('am_error_save').'</div>');
							  redirect('Home/idea');
						} 
						  
						
					  
					}
				
				}else{
					redirect('home');
				}
     } 



    public function insertProject(){
        
 			if ($_SERVER['REQUEST_METHOD'] === 'POST'  ) {
				    $this->form_validation->set_rules('full_name' , 'lang:am_full_name'  , 'required|min_length[1]|max_length[140]');
					$this->form_validation->set_rules('gender' , 'lang:am_gender'  , 'required'); 
 					$this->form_validation->set_rules('Educational' , 'lang:am_Educational'  , 'max_length[350]');
				    $this->form_validation->set_rules('Graduation_Year' , 'lang:am_Graduation_Year'  , 'max_length[350]'); 
 					$this->form_validation->set_rules('Governorate' , 'Governorate'  , 'required|integer'); 
					$this->form_validation->set_rules('adderss' , 'lang:adderss'  , 'max_length[240]'); 
					$this->form_validation->set_rules('mobile' , 'lang:mobile'  , 'required|min_length[11]|max_length[11]'); 
					$this->form_validation->set_rules('email' , 'lang:email'  , ''); 
 					$this->form_validation->set_rules('adderss' , 'lang:adderss'  , 'max_length[250]'); 
$this->form_validation->set_rules('achievements' , 'lang:Your_specialty'  , 'max_length[200]'); 
$this->form_validation->set_rules('achievements2' , 'lang:Your_Medical_Services'  , 'max_length[200]'); 
$this->form_validation->set_rules('achievements3' , 'lang:Add_other_certificates'  , 'max_length[200]'); 
// $this->form_validation->set_rules('achievements4' , 'lang:Add_different_types'  , 'max_length[200]');
 $this->form_validation->set_rules('Membership_No' , 'lang:EMS_Membership_No'  , 'max_length[200]'); 
 					
					if ($this->form_validation->run() == FALSE){
						$validation =  validation_errors('<p style="color:red" class=" text-right">','</p>');
						$this->session->set_flashdata('msg', $validation );
							redirect('Home/projects');
					}else{
 						$full_name      = filter_var($this->security->xss_clean($this->input->post('full_name')), FILTER_SANITIZE_STRING);
						$gender   = filter_var($this->security->xss_clean($this->input->post('gender')), FILTER_SANITIZE_STRING); 
						$age    = filter_var($this->security->xss_clean($this->input->post('age')), FILTER_SANITIZE_STRING); 
						$Educational = filter_var($this->security->xss_clean($this->input->post('Educational')), FILTER_SANITIZE_STRING); 
						$Graduation_Year     = filter_var($this->security->xss_clean($this->input->post('Graduation_Year')), FILTER_SANITIZE_STRING); 
					 
                                             $Governorate    = filter_var($this->security->xss_clean($this->input->post('Governorate')), FILTER_SANITIZE_STRING);    

					    $adderss        = filter_var($this->security->xss_clean($this->input->post('adderss')), FILTER_SANITIZE_STRING);  
					    $mobile         = filter_var($this->security->xss_clean($this->input->post('mobile')), FILTER_SANITIZE_STRING);  
					    $email          = filter_var($this->security->xss_clean($this->input->post('email')), FILTER_SANITIZE_STRING);  
 			 $Membership_No= filter_var($this->security->xss_clean($this->input->post('Membership_No')), FILTER_SANITIZE_STRING);  		
                                  $achievements          = filter_var($this->security->xss_clean($this->input->post('achievements')), FILTER_SANITIZE_STRING);  
$achievements2          = filter_var($this->security->xss_clean($this->input->post('achievements2')), FILTER_SANITIZE_STRING);  
$achievements3          = filter_var($this->security->xss_clean($this->input->post('achievements3')), FILTER_SANITIZE_STRING);  
$achievements4          = filter_var($this->security->xss_clean($this->input->post('achievements4')), FILTER_SANITIZE_STRING);  
 					    if(is_array($this->input->post('hidImg'))){
                       $hidImg          = filter_var($this->security->xss_clean( implode(",", $this->input->post('hidImg'))), FILTER_SANITIZE_STRING); 
			  }else{ $hidImg          =0;} 
						$token          = getToken('project');
						 
						$data = array(
 							'full_name'      =>  $full_name,
							'gender'          =>  $gender,
							'age'        =>  $age,
							'Educational'       =>  $Educational,
							'Graduation_Year'     =>  $Graduation_Year ,
  							'Governorate'      =>  $Governorate, 
							'adderss'       =>  $adderss,
							'mobile'     =>  $mobile ,
							'email'      =>  $email, 
 							
							'Membership_No'      =>  $Membership_No, 'achievements'      =>  $achievements,  
 							'achievements2'      =>  $achievements2,  
 							'achievements3'      =>  $achievements3,  
 							'achievements4'      =>  $achievements4,  
							'attach'             =>  $hidImg, 
 							'type'             => 1, 
  							'Token'              =>  $token 
						); 
						//add
						if($this->home_model->insertProject($data)){
							$this->load->library('email');

$this->email->from('info@masryinternational.com', $full_name );
$this->email->to('Aldoctor@masryinternational.com');
//$this->email->to('ana.amany89@gmail.com , Aldoctor@masryinternational.com');
  $this->email->set_mailtype("html");

$this->email->subject(  ' مشاريعنا'.' - '.$full_name );
 $message = $this->load->view('home/project_mail',$data,true); 
$this->email->message($message );

$this->email->send();
							$this->session->set_flashdata('msg', '<div class="alert alert-success">'.lang('am_Success_save_2').'</div>');
							redirect('Home/projects');
						} else {  
							$this->session->set_flashdata('msg', '<div class="alert alert-danger">'.lang('am_error_save').'</div>');
							redirect('Home/projects');
						} 
						  
						
					  
					}
				
				}else{
					redirect('home');
				}
     }

    public function insertPharmacy(){
        
 			if ($_SERVER['REQUEST_METHOD'] === 'POST'  ) {
 					$this->form_validation->set_rules('full_name' , 'lang:am_full_name'  , 'required|min_length[1]|max_length[140]');
					$this->form_validation->set_rules('gender' , 'lang:Pharmacy_owner'  , 'required'); 
 					 
 					$this->form_validation->set_rules('Educational' , 'lang:pharmacy_license'  , 'max_length[140]');
				    $this->form_validation->set_rules('Graduation_Year' , 'lang:Mobile_for_Application'  , 'max_length[11]'); 
 					$this->form_validation->set_rules('Governorate' , 'Governorate'  ,'integer'); 
					$this->form_validation->set_rules('adderss' , 'lang:City'  , 'max_length[250]'); 
 					$this->form_validation->set_rules('email' , 'lang:adderss'  , ''); 
 					$this->form_validation->set_rules('mobile' , 'lang:No_commercial_record'  , 'max_length[140]');
                                        $this->form_validation->set_rules('achievements' , 'lang:No_deliverymen'  , 'max_length[3]');
                                      
                                       $this->form_validation->set_rules('Membership_No' , 'lang:email'  , ''); 
 					
					if ($this->form_validation->run() == FALSE){ 
						$validation =  validation_errors('<p style="color:red" class=" text-right">','</p>');
						$this->session->set_flashdata('msg', $validation );
							redirect('Home/projects');
					}else{
 						$full_name      = filter_var($this->security->xss_clean($this->input->post('full_name')), FILTER_SANITIZE_STRING);
						$gender   = filter_var($this->security->xss_clean($this->input->post('gender')), FILTER_SANITIZE_STRING); 
 						$Educational = filter_var($this->security->xss_clean($this->input->post('Educational')), FILTER_SANITIZE_STRING); 
						$Graduation_Year     = filter_var($this->security->xss_clean($this->input->post('Graduation_Year')), FILTER_SANITIZE_STRING); 
					 
                                             $Governorate    = filter_var($this->security->xss_clean($this->input->post('Governorate')), FILTER_SANITIZE_STRING);    

					    $adderss        = filter_var($this->security->xss_clean($this->input->post('adderss')), FILTER_SANITIZE_STRING);  
					    $mobile         = filter_var($this->security->xss_clean($this->input->post('mobile')), FILTER_SANITIZE_STRING);  
					    $email          = filter_var($this->security->xss_clean($this->input->post('email')), FILTER_SANITIZE_STRING);  
 			 $Membership_No= filter_var($this->security->xss_clean($this->input->post('Membership_No')), FILTER_SANITIZE_STRING);  	
			 $achievements          = filter_var($this->security->xss_clean($this->input->post('achievements')), FILTER_SANITIZE_STRING); 	
			  if(is_array($this->input->post('hidImg'))){ 
                       $hidImg          = filter_var($this->security->xss_clean( implode(",", $this->input->post('hidImg'))), FILTER_SANITIZE_STRING); 
			  
			  }else{ $hidImg          =0;}
						$token          = getToken('project');
						 
						$data = array(  
 							'full_name'      =>  $full_name,
							'gender'          =>  $gender,
 							'Educational'       =>  $Educational,
							'Graduation_Year'     =>  $Graduation_Year ,
  							'Governorate'      =>  $Governorate, 
							'adderss'       =>  $adderss,
							'mobile'     =>  $mobile ,
							'email'      =>  $email, 
 							
							'Membership_No'      =>  $Membership_No, 
                                                        'achievements'      =>  $achievements,  
  							'attach'             =>  $hidImg        , 
							'type'             => 2, 
  							'Token'              =>  $token 
						); 
						//add
						if($this->home_model->insertProject($data)){
							$this->load->library('email');


$this->email->from('info@masryinternational.com', $full_name );
$this->email->to('Aldoctor@masryinternational.com');
//$this->email->to('ana.amany89@gmail.com , Aldoctor@masryinternational.com');
  $this->email->set_mailtype("html");

$this->email->subject(  ' مشاريعنا'.' - '.$full_name );
 
  $message = $this->load->view('home/Pharmacy_mail',$data,true); 
$this->email->message($message);
$this->email->send();
  
 

echo $this->email->print_debugger();






							$this->session->set_flashdata('msg', '<div class="alert alert-success">'.lang('am_Success_save_2').'</div>'); 
							 redirect('Home/projects');
						} else {   
							$this->session->set_flashdata('msg', '<div class="alert alert-danger">'.lang('am_error_save').'</div>');
							 redirect('Home/projects');
						} 
						  
						
					  
					}
				
				}else{
					redirect('home');
				}
     }



    public function insertLaboratory(){
        
 			if ($_SERVER['REQUEST_METHOD'] === 'POST'  ) {
 					$this->form_validation->set_rules('full_name' , 'lang:Laboratory_name'  , 'required|min_length[1]|max_length[140]');
					$this->form_validation->set_rules('gender' , 'lang:Laboratory_owner'  , 'required'); 
 					 
 					$this->form_validation->set_rules('Educational' , 'lang:Laboratory_license'  , 'max_length[140]');
				    $this->form_validation->set_rules('Graduation_Year' , 'lang:Mobile_for_Application'  , 'max_length[11]'); 
 					$this->form_validation->set_rules('Governorate' , 'Governorate'  , 'integer'); 
  					$this->form_validation->set_rules('adderss' , 'lang:City'  , ''); 
                                        $this->form_validation->set_rules('achievements' , 'lang:No_deliverymen'  , 'max_length[3]');
                                      
                                       $this->form_validation->set_rules('Membership_No' , 'lang:email'  , ''); 
 					
					if ($this->form_validation->run() == FALSE){
						$validation =  validation_errors('<p style="color:red" class=" text-right">','</p>');
						$this->session->set_flashdata('msg', $validation );
						 	redirect('Home/projects');
					}else{
 						$full_name      = filter_var($this->security->xss_clean($this->input->post('full_name')), FILTER_SANITIZE_STRING);
						$gender   = filter_var($this->security->xss_clean($this->input->post('gender')), FILTER_SANITIZE_STRING); 
 						$Educational = filter_var($this->security->xss_clean($this->input->post('Educational')), FILTER_SANITIZE_STRING); 
						$Graduation_Year     = filter_var($this->security->xss_clean($this->input->post('Graduation_Year')), FILTER_SANITIZE_STRING); 
					 
                                             $Governorate    = filter_var($this->security->xss_clean($this->input->post('Governorate')), FILTER_SANITIZE_STRING);    

					    $adderss        = filter_var($this->security->xss_clean($this->input->post('adderss')), FILTER_SANITIZE_STRING);  
					    $mobile         = filter_var($this->security->xss_clean($this->input->post('mobile')), FILTER_SANITIZE_STRING);  
					    $email          = filter_var($this->security->xss_clean($this->input->post('email')), FILTER_SANITIZE_STRING);  
 			 $Membership_No= filter_var($this->security->xss_clean($this->input->post('Membership_No')), FILTER_SANITIZE_STRING);  	
			 $achievements          = filter_var($this->security->xss_clean($this->input->post('achievements')), FILTER_SANITIZE_STRING); 	
			  
                       
                         $hidImg          = filter_var($this->security->xss_clean( implode(",", $this->input->post('hidImg[]'))), FILTER_SANITIZE_STRING);   
$Provided_services= filter_var($this->security->xss_clean( implode(",", $this->input->post('Provided_services'))), FILTER_SANITIZE_STRING); 
						$token          = getToken('project');
						 
						$data = array(
 							
 							'full_name'      =>  $full_name,
							'gender'          =>  $gender,
 							'Educational'       =>  $Educational,
							'Graduation_Year'     =>  $Graduation_Year ,
  							'Governorate'      =>  $Governorate, 
							'adderss'       =>  $adderss,
							'mobile'     =>  $mobile ,
							'email'      =>  $email, 
 							
							'Membership_No'      =>  $Membership_No, 
                                                        'achievements'      =>  $achievements,  
  							'attach'             =>  $hidImg          , 
							
  							'Provided_services'             =>  $Provided_services, 
                                                            'type'             => 3, 
  							'Token'              =>  $token 
						); 
						//add
						if($this->home_model->insertProject($data)){
							$this->load->library('email');


$this->email->from('info@masryinternational.com', $full_name );
$this->email->to('Aldoctor@masryinternational.com');
//$this->email->to('ana.amany89@gmail.com , Aldoctor@masryinternational.com');
  $this->email->set_mailtype("html");

$this->email->subject(  ' مشاريعنا'.' - '.$full_name );
 $message = $this->load->view('home/Laboratory_mail',$data,true); 
$this->email->message($message );

$this->email->send();
							$this->session->set_flashdata('msg', '<div class="alert alert-success">'.lang('am_Success_save_2').'</div>'); 
							 redirect('Home/projects');
						} else {  
							$this->session->set_flashdata('msg', '<div class="alert alert-danger">'.lang('am_error_save').'</div>');
							 redirect('Home/projects');
						} 
						  
						
					  
					}
				
				}else{
					redirect('home');
				}
     }




    public function insertRadiology(){
        
 			if ($_SERVER['REQUEST_METHOD'] === 'POST'  ) {
 					$this->form_validation->set_rules('full_name' , 'lang:Radiology_center_name'  , 'required|min_length[1]|max_length[140]');
					$this->form_validation->set_rules('gender' , 'lang:Radiology_center_owner'  , 'required'); 
 					 
 				$this->form_validation->set_rules('email' , 'lang:adderss'  , ''); 
 					 	$this->form_validation->set_rules('Educational' , 'lang:No_laboratory_license'  , 'max_length[140]');
				    $this->form_validation->set_rules('Graduation_Year' , 'lang:Mobile_for_Application'  , 'max_length[11]'); 
 					$this->form_validation->set_rules('Governorate' , 'Governorate'  , 'integer'); 
  					$this->form_validation->set_rules('adderss' , 'lang:City'  , ''); 
 					$this->form_validation->set_rules('mobile' , 'lang:No_commercial_record'  , 'max_length[11]');
                                        $this->form_validation->set_rules('achievements' , 'lang:No_deliverymen'  , 'max_length[3]');
                                      
                                       $this->form_validation->set_rules('Membership_No' , 'lang:email'  , ''); 
 					
					if ($this->form_validation->run() == FALSE){
 						$validation =  validation_errors('<p style="color:red" class=" text-right">','</p>');
						$this->session->set_flashdata('msg', $validation );
							redirect('Home/projects');
					}else{
 						$full_name      = filter_var($this->security->xss_clean($this->input->post('full_name')), FILTER_SANITIZE_STRING);
						$gender   = filter_var($this->security->xss_clean($this->input->post('gender')), FILTER_SANITIZE_STRING); 
 						$Educational = filter_var($this->security->xss_clean($this->input->post('Educational')), FILTER_SANITIZE_STRING); 
						$Graduation_Year     = filter_var($this->security->xss_clean($this->input->post('Graduation_Year')), FILTER_SANITIZE_STRING); 
					 
                                             $Governorate    = filter_var($this->security->xss_clean($this->input->post('Governorate')), FILTER_SANITIZE_STRING);    

					    $adderss        = filter_var($this->security->xss_clean($this->input->post('adderss')), FILTER_SANITIZE_STRING);  
					    $mobile         = filter_var($this->security->xss_clean($this->input->post('mobile')), FILTER_SANITIZE_STRING);  
					    $email          = filter_var($this->security->xss_clean($this->input->post('email')), FILTER_SANITIZE_STRING);  
 			 $Membership_No= filter_var($this->security->xss_clean($this->input->post('Membership_No')), FILTER_SANITIZE_STRING);  	
			 $achievements          = filter_var($this->security->xss_clean($this->input->post('achievements')), FILTER_SANITIZE_STRING); 	
			  
                       
                           if(is_array($this->input->post('hidImg'))){
                       $hidImg          = filter_var($this->security->xss_clean( implode(",", $this->input->post('hidImg'))), FILTER_SANITIZE_STRING); 
$Provided_services= filter_var($this->security->xss_clean( implode(",", $this->input->post('Provided_services'))), FILTER_SANITIZE_STRING); 
			  }else{ $hidImg          =0;} 
						$token          = getToken('project');
						
						$data = array( 
							'full_name'      =>  $full_name,
							'gender'          =>  $gender,
 							'Educational'       =>  $Educational,
							'Graduation_Year'     =>  $Graduation_Year ,
  							'Governorate'      =>  $Governorate, 
							'adderss'       =>  $adderss,
							'mobile'     =>  $mobile ,
							'email'      =>  $email, 
 							
							'Membership_No'      =>  $Membership_No, 
                                                        'achievements'      =>  $achievements,  
  							'attach'             =>  $hidImg          , 
  							'Provided_services'             =>  $Provided_services, 
							'type'             => 4, 
  							'Token'              =>  $token 
						);  
						//add
 						if($this->home_model->insertProject($data)){
							$this->load->library('email');


$this->email->from('info@masryinternational.com', $full_name );
$this->email->to('Aldoctor@masryinternational.com');
//$this->email->to('  Aldoctor@masryinternational.com');
  $this->email->set_mailtype("html");

$this->email->subject(  ' مشاريعنا'.' - '.$full_name );
 $message = $this->load->view('home/Radiology_mail',$data,true); 
$this->email->message($message );

$this->email->send();
							$this->session->set_flashdata('msg', '<div class="alert alert-success">'.lang('am_Success_save_2').'</div>');
							  redirect('Home/projects');
						} else {  
							$this->session->set_flashdata('msg', '<div class="alert alert-danger">'.lang('am_error_save').'</div>'); 
							 redirect('Home/projects');
						} 
						  
						
					  
					}
				
				}else{
					redirect('home');
				}
     }
    public function up_ax()
	{
		$this->data['albumID']   = (int)$this->input->post('albumID');
		$this->data['msg_type']           = '';
		$this->data['msg_upload']         = '';
		$this->data['base']               = base_url();
		$file_element_name                = 'file';
		if(empty($_FILES[$file_element_name]['name']))
          {
			  $this->data['msg_type']           = '0';
			  $this->data['msg_upload']         = 'File Empty ';
			  $this->output->set_content_type('application/json')->set_output(json_encode($this->data));
		  }	
         else
			{	
				 //START  File Upload 
					$config['upload_path']   = './upload/';
					$config['allowed_types'] = 'gif|jpg|png|jpeg';
					$config['encrypt_name']  = TRUE;
					$this->load->library('upload', $config);
					if (!$this->upload->do_upload($file_element_name))
					{  
					     $this->data['msg_type']           = '0';
		                 $this->data['msg_upload']         = $this->upload->display_errors();
						 $this->output->set_header('Content-Type: application/json; charset=utf-8');
					     $this->output->set_content_type('application/json')->set_output(json_encode($this->data));
					}
					else
					{
							$ext = pathinfo($_FILES[$file_element_name]['name'], PATHINFO_EXTENSION);
							$dataEx = array('jpeg','jpg','jpe','JPG','png','bmp','tiff','tif','gif'); 
							$data = array('upload_data' => $this->upload->data());
							if(in_array($ext, $dataEx))
							{
								//create largest dimension 480 px
								$config['image_library'] = 'gd2';
								$config['source_image'] = $data['upload_data']['full_path'];
								$config['create_thumb'] = FALSE;
								$config['maintain_ratio'] = TRUE; 
								$this->load->library('image_lib', $config);
								$this->image_lib->initialize($config);
								$this->image_lib->watermark();
								if (!$this->image_lib->resize()) {
								$error = $this->image_lib->display_errors();
								$this->data['msg_type']           = '0';
		                        $this->data['msg_upload']         = $error;
								$this->output->set_header('Content-Type: application/json; charset=utf-8');
					            $this->output->set_content_type('application/json')->set_output(json_encode($this->data));
								}
						   }
							   $upload_data                      = $this->upload->data();
							   $this->data['msg_type']           = '1';
							   $this->data['msg_upload']         = 'msg_sucsess_upload';
							   $this->data['img']                = $upload_data['file_name'];
							   $this->data['file_name']= $_FILES[$file_element_name]['name'];
							 
							    $this->output->set_header('Content-Type: application/json; charset=utf-8');
							    $this->output->set_content_type('application/json')->set_output(json_encode($this->data)); 
								  
					}
					   
			}//END  File Upload 
	}
 public function up_ax_file()
	{
		$this->data['albumID']   = (int)1;
		$this->data['msg_type']           = '';
		$this->data['msg_upload']         = '';
		$this->data['base']               = base_url();
		$file_element_name                = 'file';
		if(empty($_FILES[$file_element_name]['name']))
          {
			  $this->data['msg_type']           = '0';
			  $this->data['msg_upload']         = 'File Empty ';
			  $this->output->set_content_type('application/json')->set_output(json_encode($this->data));
		  }	
         else
			{	
				 //START  File Upload 
					$config['upload_path']   = './upload/';
					$config['allowed_types'] = 'docx|doc|pdf|txt|pptx|ppt|jpeg|jpg|png|txt|xls|xlsx';
					$config['encrypt_name']  = TRUE;
					$this->load->library('upload', $config);
					if (!$this->upload->do_upload($file_element_name))
					{  
					     $this->data['msg_type']           = '0';
		                 $this->data['msg_upload']         = $this->upload->display_errors();
						 $this->output->set_header('Content-Type: application/json; charset=utf-8');
					     $this->output->set_content_type('application/json')->set_output(json_encode($this->data));
					}
					else
					{
 							   $upload_data                      = $this->upload->data();
							   $this->data['msg_type']           = '1';
							   $this->data['msg_upload']         = 'msg_sucsess_upload';
							   $this->data['img']                = $upload_data['file_name'];
							   $this->data['file_name']= $_FILES[$file_element_name]['name'];
							 
							    $this->output->set_header('Content-Type: application/json; charset=utf-8');
							    $this->output->set_content_type('application/json')->set_output(json_encode($this->data)); 
								  
					}
					   
			}//END  File Upload 
	}
}





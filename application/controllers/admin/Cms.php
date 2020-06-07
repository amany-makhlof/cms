<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cms extends CI_Controller { 
        function __construct() {
            parent::__construct();
            $array_model = array('admin/cms_model','login_model');
            $this->load->model($array_model);
            $session = $this->session->userdata('sessionToken');
            if($this->login_model->chackSession($session) != 'U'){
                $this->session->sess_destroy();
                redirect('home');
            }
        }
     public function index($Token = null )
    { 
    }
    // view   getDep 
    public function getDep($Token = null )
    {   
	    $Token         = filter_var($this->security->xss_clean($Token), FILTER_SANITIZE_STRING);
        $data['Dep']   = $this->cms_model->getDepName($Token );
        $data['items'] = $this->cms_model->getDep($Token ); 
        $this->mainclass->admin_template('admin/cms/text/text_view',$data);
    }
    // view   get_contact 
    public function get_contact()
    {   
	    $Token         = 'rqwerewewdfstefe';
        $data['Dep']   = $this->cms_model->getDepName($Token );
        $this->mainclass->admin_template('admin/cms/contact/text_view',$data);
    }
    // view   getDep 
    public function getDep_image($Token = null )
    {   
	    $Token         = filter_var($this->security->xss_clean($Token), FILTER_SANITIZE_STRING);
        $data['Dep']   = $this->cms_model->getDepName($Token );
        $data['items'] = $this->cms_model->getDep($Token ); 
        $this->mainclass->admin_template('admin/cms/image/text_view',$data);
    }
    // view   getDep_ask 
    public function getDep_ask($Token = null )
    {   
	    $Token         = filter_var($this->security->xss_clean($Token), FILTER_SANITIZE_STRING);
        $data['Dep']   = $this->cms_model->getDepName($Token );
        $data['items'] = $this->cms_model->getDep($Token ); 
        $this->mainclass->admin_template('admin/cms/ask/text_view',$data);
    }
    // view   getDep_item 
    public function getDep_item($Token = null )
    {   
	    $Token         = filter_var($this->security->xss_clean($Token), FILTER_SANITIZE_STRING);
        $data['Dep']   = $this->cms_model->getDepName($Token );
        $data['items'] = $this->cms_model->getDep($Token ); 
        $this->mainclass->admin_template('admin/cms/item/text_view',$data);
    }
    
    // view getSocialMedia
    public function getSocialMedia( )
    {    
        $data['facebook']    = $this->cms_model->getItem('rqwerewewdfstefedfsaasfdfd8s9f7ds8f74d56s4fsd564f5d6sf' ); 
        $data['instagram'] = $this->cms_model->getItem('rqwerewsaftefedfsaasfdfd8s9f7ds8f74d56s4fsd564f5d6sf' ); 
        $data['youtube']   = $this->cms_model->getItem('rqwerewewdfsdstytfaasfdfd8s9f7ds8f74d56s4fsd564f5d6sf' ); 
        $data['twitter']     = $this->cms_model->getItem('rqwerewewdfswewtrfdfdfd8s9f7ds8f74d56s4fsd564f5d6sf' ); 
        $this->mainclass->admin_template('admin/cms/social_media/text_view',$data);
    }
    
     public function add($Token = null)
    {   
        $data['Dep'] = $this->cms_model->getDepName($Token );
        $this->mainclass->admin_template('admin/cms/text/add_item_view', $data);
    }
     public function add_image($Token = null)
    {   
        $data['Dep'] = $this->cms_model->getDepName($Token );
        $this->mainclass->admin_template('admin/cms/image/add_item_view', $data);
    }
     public function add_ask($Token = null)
    {   
        $data['Dep'] = $this->cms_model->getDepName($Token );
        $this->mainclass->admin_template('admin/cms/ask/add_item_view', $data);
    }
     public function add_item($Token = null)
    {   
        $data['Dep'] = $this->cms_model->getDepName($Token );
        $this->mainclass->admin_template('admin/cms/item/add_item_view', $data);
    }
    
    public function addNewItem(){
        
        $depToken = $this->input->post('depToken'); 
		$dep      = $this->cms_model->getDepName($depToken) ;
        if(!$dep == false ){
            $depID = $dep->ID; 
			if ($_SERVER['REQUEST_METHOD'] === 'POST'  ) {
					
					$this->form_validation->set_rules('title' , 'lang:title'  , 'required|min_length[3]|max_length[140]');
					$this->form_validation->set_rules('title_en' , 'lang:am_title_en'  , 'required|min_length[3]|max_length[140]'); 
 					$this->form_validation->set_rules('content' , 'lang:am_content'  , 'required|min_length[3]|max_length[350]'); 
 					$this->form_validation->set_rules('content_en' , 'lang:am_content_en'  , 'required|min_length[3]|max_length[350]');
					 $this->form_validation->set_rules('hidImg' , 'lang:am_image'  , 'required|min_length[3]|max_length[350]'); 
					 
					if ($this->form_validation->run() == FALSE){
						$validation =  validation_errors('<p style="color:red" class=" text-right">','</p>');
						$this->session->set_flashdata('msg', $validation );
						redirect('admin/cms/add');
					}else{
						 
						$title      = filter_var($this->security->xss_clean($this->input->post('title')), FILTER_SANITIZE_STRING);
						$title_en   = filter_var($this->security->xss_clean($this->input->post('title_en')), FILTER_SANITIZE_STRING); 
						$content    = $this->input->post('content');
						$content_en    = $this->input->post('content_en');
						$hidImg     = filter_var($this->security->xss_clean($this->input->post('hidImg')), FILTER_SANITIZE_STRING);  
					  
						$token          = getToken('cms_details');
						$UserData       = getUserData() ;
						$UserToken      = $UserData->Token;
						$data = array(
							'ContentTypeID'  =>  1,
							'MainSubID'      =>  $depID,
							'Title'          =>  $title,
							'Content'        =>  $content,
							'Title_en'       =>  $title_en,
							'Content_en'     =>  $content_en ,
							'ImagePath'      =>  $hidImg, 
							'IsSystem'       =>  0, 
							'TokenContact'   =>  $UserToken ,
							'Token'          =>  $token 
						); 
						//add
						if($this->cms_model->addNewItem($data)){
							$this->session->set_flashdata('msg', '<div class="alert alert-success">'.lang('am_Success_save').'</div>');
							redirect('admin/Cms/getDep/'.$depToken);
						} else {
							$this->session->set_flashdata('msg', '<div class="alert alert-danger">'.lang('am_error_save').'</div>');
							redirect('admin/Cms/getDep/'.$depToken);
						} 
						  
						
					  
					}
				
				}else{
					redirect('home');
				}
		}else{
                redirect('home');
            }
        
    }   public function addNewItem_image(){
        
        $depToken = $this->input->post('depToken'); 
		$dep      = $this->cms_model->getDepName($depToken) ;
        if(!$dep == false ){
            $depID = $dep->ID; 
			if ($_SERVER['REQUEST_METHOD'] === 'POST'  ) {
					
					$this->form_validation->set_rules('title' , 'lang:title'  , 'min_length[0]|max_length[240]');
					$this->form_validation->set_rules('title_en' , 'lang:am_title_en'  , 'min_length[0]|max_length[240]'); 
 					 
 					$this->form_validation->set_rules('content' , 'lang:am_Signature'  , 'min_length[0]|max_length[140]'); 
 					$this->form_validation->set_rules('content_en' , 'lang:am_Signature_en'  , 'min_length[0]|max_length[140]');
					 $this->form_validation->set_rules('hidImg' , 'lang:am_image'  , 'required|min_length[3]|max_length[350]'); 
					 
					if ($this->form_validation->run() == FALSE){
						$validation =  validation_errors('<p style="color:red" class=" text-right">','</p>');
						$this->session->set_flashdata('msg', $validation );
						redirect('admin/cms/add_image');
					}else{
						 
						$title      = filter_var($this->security->xss_clean($this->input->post('title')), FILTER_SANITIZE_STRING);
						$title_en   = filter_var($this->security->xss_clean($this->input->post('title_en')), FILTER_SANITIZE_STRING); 
						 
						$content    = $this->input->post('content');
						$content_en    = $this->input->post('content_en');
 						$hidImg     = filter_var($this->security->xss_clean($this->input->post('hidImg')), FILTER_SANITIZE_STRING);  
					  
						$token          = getToken('cms_details');
						$UserData       = getUserData() ;
						$UserToken      = $UserData->Token;
						$data = array(
							'ContentTypeID'  =>  1,
							'MainSubID'      =>  $depID,
							'Title'          =>  $title,
							'Content'        =>  $content,
							'Title_en'       =>  $title_en,
							'Content_en'     =>  $content_en ,
 							'ImagePath'      =>  $hidImg, 
							'IsSystem'       =>  0, 
							'TokenContact'   =>  $UserToken ,
							'Token'          =>  $token 
						); 
						//add
						if($this->cms_model->addNewItem($data)){
							$this->session->set_flashdata('msg', '<div class="alert alert-success">'.lang('am_Success_save').'</div>');
							redirect('admin/Cms/getDep_image/'.$depToken);
						} else {
							$this->session->set_flashdata('msg', '<div class="alert alert-danger">'.lang('am_error_save').'</div>');
							redirect('admin/Cms/getDep_image/'.$depToken);
						} 
						  
						
					  
					}
				
				}else{
					redirect('home');
				}
		}else{
                redirect('home');
            }
        
    }
    public function editItem($Token = null ){
		$Token               = filter_var($this->security->xss_clean($Token), FILTER_SANITIZE_STRING);
        $data['info']        = $this->cms_model->getItem($Token); 
        $this->mainclass->admin_template('admin/cms/edit_content_view',$data);
    }
    
    
    public function addNewItem_ask(){
        
        $depToken = $this->input->post('depToken'); 
		$dep      = $this->cms_model->getDepName($depToken) ;
        if(!$dep == false ){
            $depID = $dep->ID; 
			if ($_SERVER['REQUEST_METHOD'] === 'POST'  ) {
					
					$this->form_validation->set_rules('title' , 'lang:am_question'  , 'required|min_length[3]|max_length[140]');
					$this->form_validation->set_rules('title_en' , 'lang:am_question_en'  , 'required|min_length[3]|max_length[140]'); 
 					$this->form_validation->set_rules('content' , 'lang:am_answer'  , 'required|min_length[3]|max_length[1350]'); 
 					$this->form_validation->set_rules('content_en' , 'lang:am_answer_en'  , 'required|min_length[3]|max_length[1350]');
 					 
					if ($this->form_validation->run() == FALSE){
						$validation =  validation_errors('<p style="color:red" class=" text-right">','</p>');
						$this->session->set_flashdata('msg', $validation );
						redirect('admin/cms/add_ask/'.$depToken);
					}else{
						 
						$title      = filter_var($this->security->xss_clean($this->input->post('title')), FILTER_SANITIZE_STRING);
						$title_en   = filter_var($this->security->xss_clean($this->input->post('title_en')), FILTER_SANITIZE_STRING); 
						$content    = $this->input->post('content');
						$content_en    = $this->input->post('content_en');
 					  
						$token          = getToken('cms_details');
						$UserData       = getUserData() ;
						$UserToken      = $UserData->Token;
						$data = array(
							'ContentTypeID'  =>  1,
							'MainSubID'      =>  $depID,
							'Title'          =>  $title,
							'Content'        =>  $content,
							'Title_en'       =>  $title_en,
							'Content_en'     =>  $content_en ,
 							'IsSystem'       =>  0, 
							'TokenContact'   =>  $UserToken ,
							'Token'          =>  $token 
						); 
						//add
						if($this->cms_model->addNewItem($data)){
							$this->session->set_flashdata('msg', '<div class="alert alert-success">'.lang('am_Success_save').'</div>');
							redirect('admin/Cms/getDep_ask/'.$depToken);
						} else {
							$this->session->set_flashdata('msg', '<div class="alert alert-danger">'.lang('am_error_save').'</div>');
							redirect('admin/Cms/getDep_ask/'.$depToken);
						} 
						  
						
					  
					}
				
				}else{
					redirect('home');
				}
		}else{
                redirect('home');
            }
        
    } 
     
    public function addNewItem_item(){
        
        $depToken = $this->input->post('depToken'); 
		$dep      = $this->cms_model->getDepName($depToken) ;
        if(!$dep == false ){
            $depID = $dep->ID; 
			if ($_SERVER['REQUEST_METHOD'] === 'POST'  ) {
					
					$this->form_validation->set_rules('title' , 'lang:am_item'  , 'required|min_length[3]|max_length[140]');
					$this->form_validation->set_rules('title_en' , 'lang:am_item_en'  , 'required|min_length[3]|max_length[140]'); 
 					 
 					 
					if ($this->form_validation->run() == FALSE){
						$validation =  validation_errors('<p style="color:red" class=" text-right">','</p>');
						$this->session->set_flashdata('msg', $validation );
						redirect('admin/Cms/getDep_item/'.$depToken);
					}else{
						 
						$title      = filter_var($this->security->xss_clean($this->input->post('title')), FILTER_SANITIZE_STRING);
						$title_en   = filter_var($this->security->xss_clean($this->input->post('title_en')), FILTER_SANITIZE_STRING); 
						 
						$token          = getToken('cms_details');
						$UserData       = getUserData() ;
						$UserToken      = $UserData->Token;
						$data = array(
							'ContentTypeID'  =>  1,
							'MainSubID'      =>  $depID,
							'Title'          =>  $title,
 							'Title_en'       =>  $title_en,
  							'IsSystem'       =>  0, 
							'TokenContact'   =>  $UserToken ,
							'Token'          =>  $token 
						); 
						//add
						if($this->cms_model->addNewItem($data)){
							$this->session->set_flashdata('msg', '<div class="alert alert-success">'.lang('am_Success_save').'</div>');
							redirect('admin/Cms/getDep_item/'.$depToken);
						} else {
							$this->session->set_flashdata('msg', '<div class="alert alert-danger">'.lang('am_error_save').'</div>');
							redirect('admin/Cms/getDep_item/'.$depToken);
						} 
						  
						
					  
					}
				
				}else{
					redirect('home');
				}
		}else{
                redirect('home');
            }
        
    } 
    
    public function setItem(){
        $Token = $this->input->post('Token'); 
        if(!$this->cms_model->getItem($Token) == false ){
            if ($_SERVER['REQUEST_METHOD'] === 'POST'  ) {

				    $this->form_validation->set_rules('content'  , 'lang:am_content'   , 'required|min_length[9]|max_length[1050]');
				    $this->form_validation->set_rules('content_en' , 'lang:am_content_en'  , 'required|min_length[9]|max_length[1050]');
					 
                    if ($this->form_validation->run() == FALSE){
                        $validation =  validation_errors('<div class="alert alert-danger">','</div>');
                        $this->session->set_flashdata('msg', $validation );
                          redirect('admin/cms/editItem/' . $Token);
                    }else{

                   	      $content             =  $this->input->post('content');
                          $content_en          = $this->input->post('content_en');
						 $UserData            = getUserData() ;
						 $UserToken           = $UserData->Token;
						   
						 $data = array( 
							'Content'        =>  $content,
							'Content_en'     =>  $content_en, 
							'TokenContact'   =>  $UserToken
							 );  
							//update
							if($this->cms_model->setItem($Token,$data)){
							   $this->session->set_flashdata('msg', '<div class="alert alert-success">'.lang('am_Success_save').'</div>');
							   redirect('admin/Cms/editItem/' . $Token );
							} else {
							   $this->session->set_flashdata('msg', '<div class="alert alert-danger">'.lang('am_error_save').'</div>');
							   redirect('admin/Cms/editItem/' . $Token );
							}
					}
            }else{
                redirect('home');
            }
        }  
    }
    
    public function EditSocialMedia(){
         $facebook_Token   = $this->input->post('facebook_Token'); 
         $instagram_Token  = $this->input->post('instagram_Token'); 
         $twitter_Token   = $this->input->post('twitter_Token'); 
         $youtube_Token= $this->input->post('youtube_Token'); 
         if(!$this->cms_model->getItem($facebook_Token) == false &&  !$this->cms_model->getItem($instagram_Token) == false  ){
            if ($_SERVER['REQUEST_METHOD'] === 'POST'  ) {

				    $this->form_validation->set_rules('facebook_link'  , 'lang:am_facebook'   , 'max_length[500]');
 				    $this->form_validation->set_rules('instagram_link'  , 'lang:am_youtube'   , 'max_length[500]');
				    $this->form_validation->set_rules('twitter_link'  , 'lang:am_twitter'   , 'max_length[500]');
 				    $this->form_validation->set_rules('youtube_link'  , 'lang:am_youtube' , 'max_length[500]');
 					 
                    if ($this->form_validation->run() == FALSE){ 
                        $validation =  validation_errors('<div class="alert alert-danger">','</div>');
                        $this->session->set_flashdata('msg', $validation );
                          redirect('admin/cms/editItem/' . $Token);
                    }else{

                   	      $facebook_link             = filter_var($this->security->xss_clean($this->input->post('facebook_link')), FILTER_SANITIZE_URL	);
                          $twitter_link          = filter_var($this->security->xss_clean($this->input->post('twitter_link')), FILTER_SANITIZE_URL	);   
						  $instagram_link          = filter_var($this->security->xss_clean($this->input->post('instagram_link')), FILTER_SANITIZE_URL	);   
						  $youtube_link           = filter_var($this->security->xss_clean($this->input->post('youtube_link')), FILTER_SANITIZE_URL	);
						  $youtube_Token= filter_var($this->security->xss_clean($this->input->post('youtube_Token')), FILTER_SANITIZE_URL	); 
$instagram_Token= filter_var($this->security->xss_clean($this->input->post('instagram_Token')), FILTER_SANITIZE_URL	);
 $facebook_Token= filter_var($this->security->xss_clean($this->input->post('facebook_Token')), FILTER_SANITIZE_URL	); 
$twitter_Token= filter_var($this->security->xss_clean($this->input->post('twitter_Token')), FILTER_SANITIZE_URL	);

						 $UserData            = getUserData() ;
						 $UserToken           = $UserData->Token;
						   
						 $data_facebook = array( 
							'link'        =>  $facebook_link,
							'TokenContact'   =>  $UserToken
							 );     
						     
						 $data_twitter = array( 
							'link'        =>  $twitter_link  ,
							'TokenContact'   =>  $UserToken
							 );    
						 $data_instagram = array( 
							'link'        =>  $instagram_link,
							'TokenContact'   =>  $UserToken
							 );     
						     
						 $data_youtube = array( 
							'link'        =>  $youtube_link          ,
							'TokenContact'   =>  $UserToken
							 ); 
							//update
							if($this->cms_model->setItem($facebook_Token,$data_facebook)&& $this->cms_model->setItem($instagram_Token,$data_instagram) && $this->cms_model->setItem($youtube_Token,$data_youtube ) && $this->cms_model->setItem($twitter_Token,$data_twitter ) ){ 
							   $this->session->set_flashdata('msg', '<div class="alert alert-success">'.lang('am_Success_save').'</div>');
							   redirect('admin/Cms/getSocialMedia/'  );
							} else { 
							   $this->session->set_flashdata('msg', '<div class="alert alert-danger">'.lang('am_error_save').'</div>');
							   redirect('admin/Cms/getSocialMedia/'   );
							}
					}
            }else{
                redirect('home');
            }
        }  
    }
    
    
    public function Edit_image_text($Token = null ){
	$Token               = filter_var($this->security->xss_clean($Token), FILTER_SANITIZE_STRING);
        $data['info']        = $this->cms_model->getItem($Token); 
        $data['Dep']         = $this->cms_model->getDepName( $data['info']->subToken );
        $this->mainclass->admin_template('admin/cms/text_image/edit_item_view',$data);
    } 
    public function Edit($Token = null ){
		$Token               = filter_var($this->security->xss_clean($Token), FILTER_SANITIZE_STRING);
        $data['info']        = $this->cms_model->getItem($Token); 
        $data['Dep']         = $this->cms_model->getDepName( $data['info']->subToken );
        $this->mainclass->admin_template('admin/cms/text/edit_item_view',$data);
    }
    public function EditSub($Token = null ){
		$Token               = filter_var($this->security->xss_clean($Token), FILTER_SANITIZE_STRING);
        $data['Dep']         = $this->cms_model->getDepName( $Token);
        $this->mainclass->admin_template('admin/cms/sub_image/edit_item_view',$data);
    }
      
    public function EditContact(  ){
		$Token               = 'A3iUkjdSgvirUJjkkIdoqJrHqBff8YS88y480BhjWWuhFVb7qp';
        $data['info']        = $this->cms_model->getItem($Token); 
        $data['Dep']         = $this->cms_model->getDepName( $data['info']->subToken );
        $this->mainclass->admin_template('admin/cms/contact/edit_item_view',$data);
    }
      
    public function Edit_image($Token = null ){
		$Token               = filter_var($this->security->xss_clean($Token), FILTER_SANITIZE_STRING);
        $data['info']        = $this->cms_model->getItem($Token); 
        $data['Dep']         = $this->cms_model->getDepName( $data['info']->subToken );
        $this->mainclass->admin_template('admin/cms/image/edit_item_view',$data);
    }
    
    
    public function Edit_ask($Token = null ){
		$Token               = filter_var($this->security->xss_clean($Token), FILTER_SANITIZE_STRING);
        $data['info']        = $this->cms_model->getItem($Token); 
        $data['Dep']         = $this->cms_model->getDepName( $data['info']->subToken );
        $this->mainclass->admin_template('admin/cms/ask/edit_item_view',$data);
    }
    public function Edit_item($Token = null ){
		$Token               = filter_var($this->security->xss_clean($Token), FILTER_SANITIZE_STRING);
        $data['info']        = $this->cms_model->getItem($Token); 
        $data['Dep']         = $this->cms_model->getDepName( $data['info']->subToken );
        $this->mainclass->admin_template('admin/cms/item/edit_item_view',$data);
    }
    public function EditCmsItem(){
        $Token = $this->input->post('Token'); 
        if(!$this->cms_model->getItem($Token) == false ){
            if ($_SERVER['REQUEST_METHOD'] === 'POST'  ) { 
					$this->form_validation->set_rules('title' , 'lang:title'  , 'required|min_length[3]|max_length[140]');
					$this->form_validation->set_rules('title_en' , 'lang:am_title_en'  , 'required|min_length[3]|max_length[140]'); 
 					$this->form_validation->set_rules('content' , 'lang:am_content'  , 'required|min_length[3]|max_length[350]'); 
 					$this->form_validation->set_rules('content_en' , 'lang:am_content_en'  , 'required|min_length[3]|max_length[350]');
					$this->form_validation->set_rules('hidImg' , 'lang:am_image'  , 'required|min_length[3]|max_length[350]'); 
                 
                    if ($this->form_validation->run() == FALSE){
                        $validation =  validation_errors('<div class="alert alert-danger">','</div>');
                        $this->session->set_flashdata('msg', $validation );
                          redirect('admin/cms/Edit/' . $Token);
                    }else{

                   	    $title      = filter_var($this->security->xss_clean($this->input->post('title')), FILTER_SANITIZE_STRING);
						$title_en   = filter_var($this->security->xss_clean($this->input->post('title_en')), FILTER_SANITIZE_STRING); 
						$content    = $this->input->post('content');
						$content_en    = $this->input->post('content_en');
						$hidImg     = filter_var($this->security->xss_clean($this->input->post('hidImg')), FILTER_SANITIZE_STRING);  
					  

						 $UserData            = getUserData() ;
						 $UserToken           = $UserData->Token;
						   
						 $data = array(
							'ContentTypeID'  =>  1,
 							'Title'          =>  $title,
							'Content'        =>  $content,
							'Title_en'       =>  $title_en,
							'Content_en'     =>  $content_en ,
							'ImagePath'      =>  $hidImg, 
							'IsSystem'       =>  0, 
							'TokenContact'   =>  $UserToken
							 );  
							//update
							if($this->cms_model->updateItem($Token,$data)){
							   $this->session->set_flashdata('msg', '<div class="alert alert-success">'.lang('am_Success_save').'</div>');
							   redirect('admin/cms/Edit/' . $Token );
							} else {
							   $this->session->set_flashdata('msg', '<div class="alert alert-danger">'.lang('am_error_save').'</div>');
							   redirect('admin/cms/Edit/' . $Token );
							}
					}
            }else{
                redirect('home');
            }
        }  
    }
    public function EditCmsItem_contact(){
		$Token = $this->input->post('Token'); 
		 
        if(!$this->cms_model->getItem($Token) == false ){
            if ($_SERVER['REQUEST_METHOD'] === 'POST'  ) { 
					$this->form_validation->set_rules('title' , 'lang:title'  , 'required|min_length[3]|max_length[140]');
					$this->form_validation->set_rules('title_en' , 'lang:am_title_en'  , 'required|min_length[3]|max_length[140]'); 
 					$this->form_validation->set_rules('content' , 'lang:phone'  , 'required|min_length[3]|max_length[350]'); 
 					$this->form_validation->set_rules('content_en' , 'lang:mail'  , 'required|min_length[3]|max_length[350]');
					$this->form_validation->set_rules('hidImg' , 'lang:am_image'  , 'required|min_length[3]|max_length[350]'); 
					$this->form_validation->set_rules('hidImgSmall' , 'lang:am_image_cover'  , 'required|min_length[3]|max_length[350]'); 
                 
                    if ($this->form_validation->run() == FALSE){
                        $validation =  validation_errors('<div class="alert alert-danger">','</div>');
                        $this->session->set_flashdata('msg', $validation );
                          redirect('admin/cms/EditContact/' . $Token);
                    }else{

                   	    $title      = filter_var($this->security->xss_clean($this->input->post('title')), FILTER_SANITIZE_STRING);
						$title_en   = filter_var($this->security->xss_clean($this->input->post('title_en')), FILTER_SANITIZE_STRING); 
						$content    = $this->input->post('content');
						$content_en    = $this->input->post('content_en');
						$hidImg     = filter_var($this->security->xss_clean($this->input->post('hidImg')), FILTER_SANITIZE_STRING);  
						$hidImgSmall     = filter_var($this->security->xss_clean($this->input->post('hidImgSmall')), FILTER_SANITIZE_STRING);  
					  

						 $UserData            = getUserData() ;
						 $UserToken           = $UserData->Token;
						   
						 $data = array(
							'ContentTypeID'  =>  1,
 							'Title'          =>  $title,
							'Content'        =>  $content,
							'Title_en'       =>  $title_en,
							'Content_en'     =>  $content_en ,
							'ImagePath'      =>  $hidImg, 
							'ImagePathSmall'      =>  $hidImgSmall, 
							'IsSystem'       =>  0, 
							'TokenContact'   =>  $UserToken
							 );  
							//update
							if($this->cms_model->updateItem($Token,$data)){
							   $this->session->set_flashdata('msg', '<div class="alert alert-success">'.$this->db->last_q.lang('am_Success_save').'</div>');
							   redirect('admin/cms/EditContact/' . $Token );
							} else {
							   $this->session->set_flashdata('msg', '<div class="alert alert-danger">'.lang('am_error_save').'</div>');
							   redirect('admin/cms/EditContact/' . $Token );
							}
					}
            }else{
                redirect('home');
            }
        }   
    }
    public function EditCmsItemSub(){
        $Token = $this->input->post('Token'); 
        if(!$this->cms_model->getDepName($Token) == false ){ 
		            if ($_SERVER['REQUEST_METHOD'] === 'POST'  ) { 

					$this->form_validation->set_rules('hidImg' , 'lang:am_image'  , 'required|min_length[3]|max_length[350]'); 
                 
					$this->form_validation->set_rules('hidImgSmall' , 'lang:am_image'  , 'required|min_length[3]|max_length[350]'); 
                 
                    if ($this->form_validation->run() == FALSE){
                        $validation =  validation_errors('<div class="alert alert-danger">','</div>');
                        $this->session->set_flashdata('msg', $validation );
                          redirect('admin/cms/EditSub/' . $Token);
                    }else{

                   	    
						$hidImg     = filter_var($this->security->xss_clean($this->input->post('hidImg')), FILTER_SANITIZE_STRING);  
					  
						$hidImgSmall     = filter_var($this->security->xss_clean($this->input->post('hidImgSmall')), FILTER_SANITIZE_STRING);  

						 $UserData            = getUserData() ;
						 $UserToken           = $UserData->Token;
						   
						 $data = array( 
							'ImagePath'      =>  $hidImg, 
							'ImagePathSmall'       => $hidImgSmall, 
							'TokenContact'   =>  $UserToken
							 );  
							//update
							if($this->cms_model->updateItemSub($Token,$data)){
							   $this->session->set_flashdata('msg', '<div class="alert alert-success">'.lang('am_Success_save').'</div>');
							   redirect('admin/cms/EditSub/' . $Token );
							} else {
							   $this->session->set_flashdata('msg', '<div class="alert alert-danger">'.lang('am_error_save').'</div>');
							   redirect('admin/cms/EditSub/' . $Token );
							}
					}
            }else{
                redirect('home');
            }
        }  
    }
    
    public function EditCmsItem_image(){
        $Token = $this->input->post('Token'); 
        if(!$this->cms_model->getItem($Token) == false ){
            if ($_SERVER['REQUEST_METHOD'] === 'POST'  ) { 
					$this->form_validation->set_rules('title' , 'lang:title'  , 'min_length[0]|max_length[240]');
					$this->form_validation->set_rules('title_en' , 'lang:am_title_en'  , 'min_length[0]|max_length[240]'); 
 					 
 					$this->form_validation->set_rules('content' , 'lang:am_Signature'  , 'min_length[0]|max_length[140]'); 
 					$this->form_validation->set_rules('content_en' , 'lang:am_Signature_en'  , 'min_length[0]|max_length[140]');
					$this->form_validation->set_rules('hidImg' , 'lang:am_image'  , 'required|min_length[3]|max_length[350]'); 
                 
                    if ($this->form_validation->run() == FALSE){
                        $validation =  validation_errors('<div class="alert alert-danger">','</div>');
                        $this->session->set_flashdata('msg', $validation );
                          redirect('admin/cms/Edit_image/' . $Token);
                    }else{

                   	    $title      = filter_var($this->security->xss_clean($this->input->post('title')), FILTER_SANITIZE_STRING);
						$title_en   = filter_var($this->security->xss_clean($this->input->post('title_en')), FILTER_SANITIZE_STRING);  
						$content    = $this->input->post('content');
						$content_en    = $this->input->post('content_en');
						$hidImg     = filter_var($this->security->xss_clean($this->input->post('hidImg')), FILTER_SANITIZE_STRING);  
					  

						 $UserData            = getUserData() ;
						 $UserToken           = $UserData->Token;
						   
						 $data = array(
							'ContentTypeID'  =>  1,
 							'Title'          =>  $title,
							'Content'        =>  $content,
							'Title_en'       =>  $title_en,
							'Content_en'     =>  $content_en ,
 							'ImagePath'      =>  $hidImg, 
							'IsSystem'       =>  0, 
							'TokenContact'   =>  $UserToken
							 );  
							//update
							if($this->cms_model->updateItem($Token,$data)){
							   $this->session->set_flashdata('msg', '<div class="alert alert-success">'.lang('am_Success_save').'</div>');
							   redirect('admin/cms/Edit_image/' . $Token );
							} else {
							   $this->session->set_flashdata('msg', '<div class="alert alert-danger">'.lang('am_error_save').'</div>');
							   redirect('admin/cms/Edit_image/' . $Token );
							}
					}
            }else{
                redirect('home');
            }
        }  
    }

    public function EditCmsItem_image_text(){
        $Token = $this->input->post('Token'); 
        if(!$this->cms_model->getItem($Token) == false ){
            if ($_SERVER['REQUEST_METHOD'] === 'POST'  ) { 
					$this->form_validation->set_rules('title' , 'lang:title'  , 'min_length[0]|max_length[240]');
					$this->form_validation->set_rules('title_en' , 'lang:am_title_en'  , 'min_length[0]|max_length[240]'); 
 					 
 					$this->form_validation->set_rules('content' , 'lang:am_content'  , 'min_length[0]|max_length[1140]'); 
 					$this->form_validation->set_rules('content_en' , 'lang:am_content_en'  , 'min_length[0]|max_length[1140]');
					 
                 
                    if ($this->form_validation->run() == FALSE){
                        $validation =  validation_errors('<div class="alert alert-danger">','</div>');
                        $this->session->set_flashdata('msg', $validation );
                          redirect('admin/cms/Edit_image_text/' . $Token);
                    }else{

                   	                        $title      = filter_var($this->security->xss_clean($this->input->post('title')), FILTER_SANITIZE_STRING);
						$title_en   = filter_var($this->security->xss_clean($this->input->post('title_en')), FILTER_SANITIZE_STRING);  
						$content    = $this->input->post('content');
						$content_en    = $this->input->post('content_en');
						$hidImg     = filter_var($this->security->xss_clean($this->input->post('hidImg')), FILTER_SANITIZE_STRING);  
                                                $hidImg2     = filter_var($this->security->xss_clean($this->input->post('hidImg2')), FILTER_SANITIZE_STRING);  
					        $link = filter_var($this->security->xss_clean($this->input->post('link')), FILTER_SANITIZE_STRING);  
					  

						 $UserData            = getUserData() ;
						 $UserToken           = $UserData->Token;
						   
						 $data = array(
							'ContentTypeID'  =>  1,
 							'Title'          =>  $title,
							'Content'        =>  $content,
							'Title_en'       =>  $title_en,
							'Content_en'     =>  $content_en ,
 							'ImagePath'      =>  $hidImg, 
 							'ImagePath2'     =>  $hidImg2, 
 							'link'           =>  $link, 
							'IsSystem'       =>  0, 
							'TokenContact'   =>  $UserToken
							 );  
							//update
							if($this->cms_model->updateItem($Token,$data)){
							   $this->session->set_flashdata('msg', '<div class="alert alert-success">'.lang('am_Success_save').'</div>');
							   redirect('admin/cms/Edit_image_text/' . $Token );
							} else {
							   $this->session->set_flashdata('msg', '<div class="alert alert-danger">'.lang('am_error_save').'</div>');
							   redirect('admin/cms/Edit_image_text/' . $Token );
							}
					}
            }else{
                redirect('home');
            }
        }  
    }
    public function EditCmsItem_ask(){
        $Token = $this->input->post('Token'); 
        if(!$this->cms_model->getItem($Token) == false ){
            if ($_SERVER['REQUEST_METHOD'] === 'POST'  ) { 
					$this->form_validation->set_rules('title' , 'lang:am_question'  , 'required|min_length[3]|max_length[140]');
					$this->form_validation->set_rules('title_en' , 'lang:am_question_en'  , 'required|min_length[3]|max_length[140]'); 
 					$this->form_validation->set_rules('content' , 'lang:am_answer'  , 'required|min_length[3]|max_length[350]'); 
 					$this->form_validation->set_rules('content_en' , 'lang:am_answer_en'  , 'required|min_length[3]|max_length[350]');
                  
                    if ($this->form_validation->run() == FALSE){
                        $validation =  validation_errors('<div class="alert alert-danger">','</div>');
                        $this->session->set_flashdata('msg', $validation );
                          redirect('admin/cms/Edit_ask/' . $Token);
                    }else{

                   	    $title      = filter_var($this->security->xss_clean($this->input->post('title')), FILTER_SANITIZE_STRING);
						$title_en   = filter_var($this->security->xss_clean($this->input->post('title_en')), FILTER_SANITIZE_STRING); 
						$content    = $this->input->post('content');
						$content_en    = $this->input->post('content_en');
  					  

						 $UserData            = getUserData() ;
						 $UserToken           = $UserData->Token;
						   
						 $data = array(
							'ContentTypeID'  =>  1,
 							'Title'          =>  $title,
							'Content'        =>  $content,
							'Title_en'       =>  $title_en,
							'Content_en'     =>  $content_en ,
 							'IsSystem'       =>  0, 
							'TokenContact'   =>  $UserToken
							 );  
							//update
							if($this->cms_model->updateItem($Token,$data)){
							   $this->session->set_flashdata('msg', '<div class="alert alert-success">'.lang('am_Success_save').'</div>');
							   redirect('admin/cms/Edit_ask/' . $Token );
							} else {
							   $this->session->set_flashdata('msg', '<div class="alert alert-danger">'.lang('am_error_save').'</div>');
							   redirect('admin/cms/Edit_ask/' . $Token );
							}
					}
            }else{
                redirect('home');
            }
        }  
    }
   public function EditCmsItem_item(){
        $Token = $this->input->post('Token'); 
        if(!$this->cms_model->getItem($Token) == false ){
            if ($_SERVER['REQUEST_METHOD'] === 'POST'  ) { 
					$this->form_validation->set_rules('title' , 'lang:am_item'  , 'required|min_length[3]|max_length[140]');
					$this->form_validation->set_rules('title_en' , 'lang:am_item_en'  , 'required|min_length[3]|max_length[140]'); 
 					 
                  
                    if ($this->form_validation->run() == FALSE){
                        $validation =  validation_errors('<div class="alert alert-danger">','</div>');
                        $this->session->set_flashdata('msg', $validation );
                          redirect('admin/cms/Edit_item/' . $Token);
                    }else{

                   	    $title      = filter_var($this->security->xss_clean($this->input->post('title')), FILTER_SANITIZE_STRING);
						$title_en   = filter_var($this->security->xss_clean($this->input->post('title_en')), FILTER_SANITIZE_STRING); 
					 
 					  

						 $UserData            = getUserData() ;
						 $UserToken           = $UserData->Token;
						   
						 $data = array(
							'ContentTypeID'  =>  1,
 							'Title'          =>  $title,
 							'Title_en'       =>  $title_en,
  							'IsSystem'       =>  0, 
							'TokenContact'   =>  $UserToken
							 );  
							//update
							if($this->cms_model->updateItem($Token,$data)){ 
							   $this->session->set_flashdata('msg', '<div class="alert alert-success">'.lang('am_Success_save').'</div>');
							   redirect('admin/cms/Edit_item/' . $Token );
							} else {
							   $this->session->set_flashdata('msg', '<div class="alert alert-danger">'.lang('am_error_save').'</div>');
							   redirect('admin/cms/Edit_item/' . $Token );
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
                            if($this->cms_model->deleteCourse($id)){
                                $data_ajax['status'] = 1 ;
                                $this->output->set_content_type('application/json')->set_output(json_encode($data_ajax));
                            }
                        }

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
 public function up_ax_video()
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
					$config['allowed_types'] = 'mp4|mp3';
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



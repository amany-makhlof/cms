<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MainClass {	
    private  $CI   ;
	function __construct() 
 		{
			$this->CI =& get_instance();
			$this->CI->load->model(array('admin/cms_model'));
 			$this->CI->data['Lang'] = $this->CI->session->userdata('language');
			$allLangue = array('site','admin');
                        if($this->CI->data['Lang']== 'english'){
                                
				$this->CI->session->set_userdata('style_lang','ltr');
				$this->CI->lang->load($allLangue,'english'); 
			}
			else{
				$this->CI->session->set_userdata('style_lang','');
				$this->CI->lang->load($allLangue,'arabic');
			} 
		}

        public function home_template( $viewDate ,$dataArray  = NULL )
        {  
            $data['main_view']   =$viewDate;
            $data['dataArray']   =$dataArray;
            
	   $data['visitor']      =  $this->CI->cms_model->getvisitor( ); 
	   $data['facebook']    = $this->CI->cms_model->getItem('rqwerewewdfstefedfsaasfdfd8s9f7ds8f74d56s4fsd564f5d6sf' ); 
 	   $data['youtube']   = $this->CI->cms_model->getItem('rqwerewewdfsdstytfaasfdfd8s9f7ds8f74d56s4fsd564f5d6sf' );  
 	   $data['instagram']   = $this->CI->cms_model->getItem('rqwerewsaftefedfsaasfdfd8s9f7ds8f74d56s4fsd564f5d6sf' );  
 	   $data['twitter']   = $this->CI->cms_model->getItem('rqwerewewdfswewtrfdfdfd8s9f7ds8f74d56s4fsd564f5d6sf' );  

 

             $data['contact']     = $this->CI->cms_model->getItem('A3iUkjdSgvirUJjkkIdoqJrHqBff8YS88y480BhjWWuhFVb7qp'); 
            $this->CI->load->view('home/home_main_view',$data);
        }
        
        public function admin_template( $viewDate ,$dataArray  = NULL )
        {
            $data['main_view'] =$viewDate;
            $data['dataArray'] =$dataArray; 
            $this->CI->load->view('admin/admin_main_view',$data);
        }
}
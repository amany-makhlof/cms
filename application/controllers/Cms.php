<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cms extends CI_Controller { 
        function __construct() {
            parent::__construct();
            $array_model = array('admin/cms_model' );
            $this->load->model($array_model); 
        }
     public function index($Token = null )
    { 
    }
    // view   getDep 
    public function getList($Token = null )
    {   
	    $Token         = filter_var($this->security->xss_clean($Token), FILTER_SANITIZE_STRING);
        $data['Dep']   = $this->cms_model->getDepName($Token );
        $data['items'] = $this->cms_model->getDep($Token ); 
        $this->mainclass->home_template('home/cms/listView',$data);
    } 
	
    public function getItem($Token = null ){
		$Token               = filter_var($this->security->xss_clean($Token), FILTER_SANITIZE_STRING);
        $data['info']        = $this->cms_model->getItem($Token); 
        $this->mainclass->home_template('home/cms/item_view',$data);
    }
    
}



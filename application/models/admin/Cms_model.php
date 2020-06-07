<?php

class Cms_model extends CI_Model{
 	//getvisitor
    public function getvisitor(){
	    
         $this->db->select('count(ID) as visitorCount');
		 
        $this->db->from('visitor');
        $query = $this->db->get();
        return $query->row() ;
    }
 public function addvisitor(){
  $data = array(
            'dataNow' =>  date("Y-m-d") 
        );
        $result = $this->db->insert('visitor',$data);
        return  $result;
    }
 //getCourses  
    public function getItem($Token){
	    $data = array(
            'cms_details.Token' => $Token,
		    'cms_details.IsActive' =>  1 
        );
		if($this->session->userdata('language')=='english'){   
          $this->db->select('cms_details.* ,cms_main_sub.Name_en as Name ,cms_main_sub.Token as subToken');
		}else{
          $this->db->select('cms_details.* ,cms_main_sub.Name,cms_main_sub.Token as subToken ');
			}
        $this->db->from('cms_details');
        $this->db->join('cms_main_sub','cms_main_sub.ID = cms_details.MainSubID'); 
         $this->db->where($data);
        $query = $this->db->get();
        return $query->row() ;
    } 
     public function getDep($Token){
	    $data = array(
            'cms_main_sub.Token'    =>  $Token,
            'cms_main_sub.IsActive' =>  1,
		    'cms_details.IsSystem'  =>  0, 
            'cms_details.IsActive'  =>  1
        );
		if($this->session->userdata('language')=='english'){   
          $this->db->select('cms_details.* ,cms_main_sub.Name_en as Name ,cms_main_sub.Token as sub_Token ');
		}else{
          $this->db->select('cms_details.* ,cms_main_sub.Name ,cms_main_sub.Token as sub_Token');
			}
        $this->db->from('cms_details');
        $this->db->join('cms_main_sub','cms_main_sub.ID = cms_details.MainSubID'); 
        $this->db->where($data);
        $this->db->group_by('cms_details.ID');
        $query = $this->db->get();
        return $query->result() ;
        
    } 
	
    public function getDepName($Token){
	    $data = array(
             'cms_main_sub.Token'    =>  $Token,
             'cms_main_sub.IsActive' =>  1
        );
		if($this->session->userdata('language')=='english'){   
          $this->db->select('cms_main_sub.Token,cms_main_sub.Name_en as Name ,cms_main_sub.ID  ,cms_main_sub.ImagePath ,cms_main_sub.ImagePathSmall');
		}else{
          $this->db->select('cms_main_sub.Token,cms_main_sub.Name ,cms_main_sub.ID ,cms_main_sub.ImagePath ,cms_main_sub.ImagePathSmall');
			}
        $this->db->from('cms_main_sub');
         $this->db->where($data);
        $query = $this->db->get();
        return $query->row() ;
    }  
	//send_contact
    public function send_contact($data){
        $result = $this->db->insert('support',$data);
        return  $result;
    }
	//add
    public function addNewItem($data){
        $result = $this->db->insert('cms_details',$data);
        return  $result;
    }
	//update
    public function updateItem($Token,$data){
        $this->db->where('Token',$Token);
        $this->db->update('cms_details',$data);
        return TRUE ;
    }
	//update
    public function updateItemSub($Token,$data){
        $this->db->where('Token',$Token);
        $this->db->update('cms_main_sub',$data);
        return TRUE ;
    }
	//setItem
    public function setItem($token,$data){
        $this->db->where('Token',$token);
        $this->db->update('cms_details',$data);
        return TRUE ;
    }
	//delete
     public function deleteCourse($id){
        $this->db->where('ID',$id);
        $query = $this->db->get('cms_details');
        if($query->num_rows() > 0 ){
			$data =array('IsActive' => 0);
            $this->db->where('ID',$id);
            $this->db->update('cms_details',$data);
            return TRUE ;
        } else {
            return false;
        }
    }
}
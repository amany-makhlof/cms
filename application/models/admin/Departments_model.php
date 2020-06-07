<?php

class Departments_model extends CI_Model{
    //getRootDepartments
    public function getRootDepartments(){
	    $data = array(
           'ParentID = ' =>  0 ,
           'IsActive = ' =>  1 
        );
		if($this->session->userdata('language')=='english'){   
          $this->db->select('ID,ParentID,Name_en as Name,Content_en as Content,IsActive,Date,token');
		}else{
			 $this->db->select('ID,ParentID,Name,Content,IsActive,Date,token');
			}
        $this->db->order_by('ID','DESC');
        $this->db->from('courses_dep');
        $this->db->where($data);
        $query = $this->db->get();
        return $query->result() ;
    } 
	//getDepartments  
    public function getDepartments(){
	    $data = array(
            'IsActive = ' =>  1
        );
		if($this->session->userdata('language')=='english'){   
          $this->db->select('ID,ParentID,Name_en as Name,Content_en as Content ,IsActive,Date,token');
		}else{
			 $this->db->select('ID,ParentID,Name, Content,IsActive,Date,token');
			}
        $this->db->order_by('ID','DESC');
        $this->db->from('courses_dep');
        $this->db->where($data);
        $query = $this->db->get();
        return $query->result() ;
    }
	//getChild
     public function getChild($ID){
       if($this->session->userdata('language')=='english'){   
          $this->db->select('ID,ParentID,Name_en as Name ,Content_en as Content,IsActive,Date,token');
		}else{
			 $this->db->select('ID,ParentID,Name ,  Content,IsActive,Date,token');
			}
        $data = array(
           'ParentID'  => $ID,
           'IsActive = ' =>  1
        );
        $this->db->where($data);
        $this->db->from('courses_dep');
        $query = $this->db->get();
        if($query->num_rows() > 0 ){
            return $query->result() ;
        }else{
            return FALSE ;
        }
        
    }//getChildByToken
     public function getDepByToken($Token){
       if($this->session->userdata('language')=='english'){   
          $this->db->select('ID,ParentID,Name_en as Name ,IsActive,Date,token');
		}else{
			 $this->db->select('ID,ParentID,Name ,IsActive,Date,token');
			} 
        $data = array(
           'token'  => $Token,
           'IsActive = ' =>  1
        );
        $this->db->where($data);
        $this->db->from('courses_dep');
        $query = $this->db->get();
        if($query->num_rows() > 0 ){
            return $query->row_array() ;
        }else{
            return FALSE ;
        }
        
    }
    
     public function getOneDepartment($ID){
        $this->db->select('courses_dep.*');
        $data = array(
           'ID'  => $ID,
           'IsActive = ' =>  1
        );
        $this->db->where($data);
        $this->db->from('courses_dep');
        $query = $this->db->get();
        if($query->num_rows() > 0 ){
            return $query->row() ;
        }else{
            return FALSE ;
        }
        
    }
	//add
	
    public function addNewDepartment($data){
        $result = $this->db->insert('courses_dep',$data);
        return  $result;
    }
    public function updateDepartment($id,$data){
        $this->db->where('ID',$id);
        $this->db->update('courses_dep',$data);
        return TRUE ;
    }
     public function deleteDepartment($id){
        $this->db->where('ID',$id);
        $query = $this->db->get('courses_dep');
        if($query->num_rows() > 0 ){
			$data =array('IsActive' => 0);
            $this->db->where('ID',$id);
            $this->db->update('courses_dep',$data);
            return TRUE ;
        } else {
            return false;
        }
    }
}
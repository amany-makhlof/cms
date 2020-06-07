<?php

class Helper_model extends CI_Model{
    public function getUserData(){
		if($this->session->userdata('log_in')==true){
			$this->db->select('contact.*');
			$data = array(
			   'session_login.sessionToken'  => $this->session->userdata('sessionToken')
			);
			$this->db->from('contact');
			$this->db->join('session_login','session_login.contactID = contact.ID');
			$this->db->where($data);
			$query = $this->db->get();
			if($query->num_rows() > 0 ){
				return $query->row() ;
			}else{
				return FALSE ;
			}
		}
     }
    public function getToken($tableName){
         $dataInsert['Token']   = generateRandomString(50);
          /////check if exist 
          $this->db->select('ID');                            
          $this->db->where('Token',$dataInsert['Token']);
          $query = $this->db->get($tableName); 
          if($query->num_rows()==0){ 
              return  $dataInsert['Token'];        
            }else{
                 $this->check_token($tableName);                    
            }
    }
	 //// check_session_login
    public function check_token($tableName)
    {
          $dataInsert['Token']   = generateRandomString(50);
          /////check if exist 
          $this->db->select('ID');                            
          $this->db->where('Token',$dataInsert['Token']);
          $query = $this->db->get($tableName); 
          if($query->num_rows()==0){ 
              return  $dataInsert['Token'];        
            }else{
                 $this->check_token();                    
            }

    }   
 }
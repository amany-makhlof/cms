<?php

class Login_model extends CI_Model{
  
    public function check_login_user($email,$password){
        $this->db->where('Mail'     , $email);
        $this->db->where('Password' , $password);
        $this->db->limit('1');
        $result = $this->db->get('contact');
        if($result->num_rows() > 0 ){
                $dataInsert['contactID']      = $result->row()->ID;
                $dataInsert['sessionToken']   = $this->check_session_login();
                $this->db->insert('session_login', $dataInsert);
                
                $DataLogin['sessionToken']    = $dataInsert['sessionToken'];
                $DataLogin['type'] = $result->row()->Type;
                $DataLogin['token'] = $result->row()->Token;
                return $DataLogin;
        }else{
            return false;
        }
    }
    
    
    //// check_session_login
    public function check_session_login()
    {
          $dataInsert['sessionToken']   = generateRandomString(50);
          /////check if exist 
          $this->db->select('ID');                            
          $this->db->where('sessionToken',$dataInsert['sessionToken']);
          $query = $this->db->get('session_login'); 
          if($query->num_rows()==0){ 
              return  $dataInsert['sessionToken'];        
            }else{
                 $this->check_session_login();                    
            }

    }
    
    public function chackSession($session){
        $this->db->select('contact.Type,session_login.*');
        $this->db->from('contact');
        $this->db->join('session_login','session_login.contactID = contact.ID');
        $data = array(
            'sessionToken' => $session,
            'status'       => '0'
        );
        $this->db->where($data);
        $query = $this->db->get();
        if($query->num_rows() > 0 ){
            return $query->row()->Type ;
        }else{
            return false ;
        }
    }
    public function getToken(){
        $session = $this->session->userdata('sessionToken');
        $this->db->select('contact.Token');
        $this->db->from('contact');
        $this->db->join('session_login','session_login.contactID = contact.ID');
        $data = array(
            'sessionToken' => $session,
            'status'       => '0'
        );
        $this->db->where($data);
        $query = $this->db->get();
        if($query->num_rows() > 0 ){
            return $query->row()->Token ;
        }else{
            return false ;
        }
    }
 public function update_contact($data,$ID){
        $this->db->where('ID',$ID);
        $this->db->update('contact',$data);
        returnTRUE ;
    }
     public function edit_contact($session){
        $this->db->select('contact.*');
        $this->db->from('contact');
        $this->db->join('session_login','session_login.contactID = contact.ID');
        $data = array(
            'sessionToken' =>$session,
            'status'       => '0'
        );
        $this->db->where($data);
        $query = $this->db->get();
         if($query->num_rows() > 0 ){
            return $query->row()  ;
        }else{
            return false ;
        }
    } 
    public function LogOut($session){
        $this->db->where('sessionToken',$session);
        $result = $this->db->get('session_login');
        if($result->num_rows() > 0 ){
            $data = array( 'status' => '1' );
            $this->db->update('session_login',$data);
        }else{
            return FALSE ;
        }
        
        
    }
    
    
    public function getTokenForUser(){
         $dataInsert['sessionToken']   = generateRandomString(50);
          /////check if exist 
          $this->db->select('ID');                            
          $this->db->where('Token',$dataInsert['sessionToken']);
          $query = $this->db->get('contact'); 
          if($query->num_rows()==0){ 
              return  $dataInsert['sessionToken'];        
            }else{
                 $this->check_session_login();                    
            }
    }
    
    public function addNewUser($data){
        $result = $this->db->insert('contact',$data);
        return  $result;
    }
    
    
}
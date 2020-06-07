<?php

class Users_model extends CI_Model{
    
    public function getUsers($type){
        $this->db->select('contact.*,country.Name AS NameCountry ,NameEng');
        if($type == null ){
          $data = array(
           'Type != ' =>  "U"
          );  
        }else{
            $data = array(
           'Type' => $type
          ); 
        }
        
        $this->db->where($data);
        $this->db->join('country','country.ID = contact.Nationality_ID');
        $this->db->order_by('ID','DESC');
        $this->db->from('contact');
        $query = $this->db->get();
        return $query->result() ;
    }
     public function getOneUser($user_id){
        $this->db->select('contact.*');
        $data = array(
           'ID'  => $user_id
        );
        $this->db->where($data);
        $this->db->from('contact');
        $query = $this->db->get();
        if($query->num_rows() > 0 ){
            return $query->row() ;
        }else{
            return FALSE ;
        }
        
    }
    
     public function getOneUser_token($token = null){
        $this->db->select('contact.*');
        $data = array(
           'Token'  => $token
        );
        $this->db->where($data);
        $this->db->from('contact');
        $query = $this->db->get();
        if($query->num_rows() > 0 ){
            return $query->row() ;
        }else{
            return FALSE ;
        }
        
    }
    public function UpdateProfile($id,$data2,$old_password){
        $this->db->select('contact.*');
        $data = array(
           'ID'  => $id ,'Password'=>$old_password
        );
        $this->db->where($data);
        $this->db->from('contact');
        $query = $this->db->get();
            if($query->num_rows() > 0 ){
                $db_pass = $query->row()->Password;
                     $this->db->where('ID',$id);
                    $this->db->update('contact',$data2);
                    return TRUE ;
                
            }else{  
              return FALSE ;
            }
    }
    public function updateUser($id,$data){
        $this->db->where('ID',$id);
        $this->db->update('contact',$data);
        return TRUE ;
    }
     public function deleteUser($id){
        $this->db->where('ID',$id);
        $query = $this->db->get('contact');
        if($query->num_rows() > 0 ){
            $this->db->where('ID',$id);
            $this->db->delete('contact');
            return TRUE ;
        } else {
            return false;
        }
    }
}
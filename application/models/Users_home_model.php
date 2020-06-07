<?php

class Users_home_model extends CI_Model{
        public function get_info_user($token){
        $this->db->select('contact.*,country.Name AS NameCountry ,NameEng ');
        $data = array(
           'Type != ' =>  "U",
            'Token'   => $token
            
        );
        $this->db->where($data);
        $this->db->join('country','country.ID = contact.Nationality_ID');
        $this->db->from('contact');
        $query = $this->db->get();
        if($query->num_rows() > 0 ){
            return $query->row() ;
        }else{
            return FALSE ;
        }
        
    }
    
    public function getTokenFromSession($session){
        $this->db->select('contact.Token,session_login.*');
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
    
    public function updateUser($token,$data){
        $this->db->where('Token',$token);
        $this->db->update('contact',$data);
        return TRUE ;
    }
    
}
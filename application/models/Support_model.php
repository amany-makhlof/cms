<?php

class Support_model extends CI_Model{ 
    
    public function get_courses(){
        $result = $this->db->get('courses_dep');
        return $result->result() ;
    }
    
    public function addInterestsUsers($id,$tokenContact){
        //cahck courses ID frist add
        $this->db->where('ID',$id);
        $query = $this->db->get('courses_dep');
        if($query->num_rows() > 0 ){
            $data = array(
                'courses_depID' => $id,
                'TokenContact'  => $tokenContact
            );
            $this->db->insert('courses_dep_interest',$data);
        }else{
            return FALSE;
        }
    }
    
    public function getCountry(){
        $query = $this->db->get('country');
        return $query->result();
    }
    
}
  


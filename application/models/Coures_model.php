<?php
class Coures_model extends CI_Model{
    
    public function getOneCoures($token){
        $this->db->select('courses.*,contact.Name as NameUser ,contact.Img as ImgUser, contact.Name as Username,contact.Degree');
        $this->db->where('courses.token',$token);
        $this->db->join('contact','contact.Token = courses.instructorToken');
        $this->db->from('courses');
        $query = $this->db->get();
        
        if($query->num_rows() > 0 ){
            return $query->row();
        }else{
            return FALSE ;
        }
        
    }
    
    
    public function addSubscription($data){
        $result = $this->db->insert('courses_subscription',$data);
        return  $result;
    }
    
}


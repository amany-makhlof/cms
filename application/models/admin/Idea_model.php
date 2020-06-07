<?php

class Idea_model extends CI_Model{
 	//getCourses  
    public function getlst(){
	    
          $this->db->select(' full_name	 ,thought,Token,Date');
          $this->db->from('project');
          $query = $this->db->get();
          return $query->result() ;
    } 
	  public function getItem($Token){
	    $data = array(
            'Token' => $Token,
         );
        $this->db->select('*');
        $this->db->from('project');
        $this->db->where($data);
        $query = $this->db->get();
        return $query->row() ;
    } 
}
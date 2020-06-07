<?php

class Home_model extends CI_Model{ 
 
	//add
    public function insertIdea($data){
        $result = $this->db->insert('project',$data);
        return  $result;
    } public function insertProject($data){
        $result = $this->db->insert('project_app',$data);
        return  $result;
    }
}
  


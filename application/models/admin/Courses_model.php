<?php

class Courses_model extends CI_Model{
 	//getCourses  
    public function getCourses(){
	    $data = array(
           'courses.IsActive = ' =>  1
        );
		if($this->session->userdata('language')=='english'){   
          $this->db->select('courses.ID,courses.Name_en as Name, courses.course_price, courses.TokenContact, courses.from, courses.to ,courses.days , courses.instructorToken ,courses.language,courses.IsActive ,courses.Date,courses.token , contact.Name  as instructor, courses_dep.Name_en as courses_dep , count(lessons.ID) as countLesson,MAX(course_evaluation.evaluation) as evaluation');
		}else{
          $this->db->select('courses.ID,courses.Name, courses.course_price, courses.TokenContact, courses.from, courses.to ,courses.days , courses.instructorToken ,courses.language,courses.IsActive ,courses.Date,courses.token , contact.Name as instructor, courses_dep.Name as courses_dep, count(lessons.ID) as countLesson ,MAX(course_evaluation.evaluation) as evaluation');
			}
        $this->db->from('courses');
        $this->db->join('courses_dep','courses_dep.ID = courses.courses_depID');
        $this->db->join('lessons','courses.ID = lessons.coursesID','left');
        $this->db->join('course_evaluation','course_evaluation.CoursesID = courses.ID','left');
        $this->db->join('contact','contact.Token = courses.instructorToken');
        $this->db->group_by('courses.ID','DESC');
        $this->db->order_by('courses.ID','DESC');
        $this->db->where($data);
        $query = $this->db->get();
        return $query->result() ;
    } 
	
    
    public function addSubscription($data){
        $result = $this->db->insert('courses_subscription',$data);
        return  $result;
    }
    
     public function getInstructors(){
        $this->db->select('Name,Token');
        $data = array(
            'Type = '     =>  'C' ,
            'IsActive = ' =>  1
        );
        $this->db->where($data);
        $this->db->from('contact');
        $query = $this->db->get();
        if($query->num_rows() > 0 ){
            return $query->result() ;
        }else{
            return FALSE ;
        }
        
    } 
	public function getOneCourse($ID){
        $this->db->select('courses.*');
        $data = array(
           'ID'  => $ID,
           'IsActive = ' =>  1
        );
        $this->db->where($data);
        $this->db->from('courses');
        $query = $this->db->get();
        if($query->num_rows() > 0 ){
            return $query->row() ;
        }else{
            return FALSE ;
        }
        
    }
	//add
    public function addNewCourse($data){
        $result = $this->db->insert('courses',$data);
        return  $result;
    }
	//update
    public function updateCourse($id,$data){
        $this->db->where('ID',$id);
        $this->db->update('courses',$data);
        return TRUE ;
    }
	//delete
     public function deleteCourse($id){
        $this->db->where('ID',$id);
        $query = $this->db->get('courses');
        if($query->num_rows() > 0 ){
			$data =array('IsActive' => 0);
            $this->db->where('ID',$id);
            $this->db->update('courses',$data);
            return TRUE ;
        } else {
            return false;
        }
    }
}
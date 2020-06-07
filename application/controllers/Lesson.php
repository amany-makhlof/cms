<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lesson extends CI_Controller { 
    function __construct() {
        parent::__construct();
        
    }
    // view login page 
    public function index()
    {
        $this->mainclass->home_template('home/lessons/lesson_view');
    }
    
    
}




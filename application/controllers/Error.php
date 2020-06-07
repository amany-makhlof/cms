<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error extends CI_Controller {
	 public function index()
    {
        $this->mainclass->home_template('home/error_view');
    }
}
<?php

 function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
        return $randomString;
 }
 
 function getUserData($length = 10) {
    $CI = &get_instance();
	$CI->load->model('helper_model');
	return $CI->helper_model->getUserData();
	
 }
 function getToken($tableName){
	 if($tableName!=""){
	     	$CI = &get_instance();
			$CI->load->model('helper_model');
			return $CI->helper_model->getToken($tableName);
	 }else{
		 return false;
		 }
	
 }
 function getNameDay($dayID){
	 switch($dayID){
		case 1:
			echo lang('am_Saturday');		
			break;
		case 2:
			echo lang('am_Sunday');		
			break;
		case 3:
			echo lang('am_monday');		
			break;
		case 4:
			echo lang('am_Tuesday');		
			break;
		case 5:
			echo lang('am_Wednesday');		
			break;
		case 6:
			echo lang('am_Thursday');		
			break;
		case 7:
			echo lang('am_Friday');		
			break;
		default:
	 }
 }
 

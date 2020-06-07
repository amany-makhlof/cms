<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="QuillPro is multipurpose Bootstrap 4 Admin Dashboard Template that allows you build and launch your projects in the quickest time possible.">
	<meta name="author" content="Base5Builder">
	<link rel="icon" href="<?= base_url()?>assets/admin/img/favicon.png">

	<title><?=lang('am_site_name')?></title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700&amp;subset=latin-ext" rel="stylesheet">

	<!-- CSS - REQUIRED - START -->
	<!-- Batch Icons -->
        <link rel="stylesheet" href="<?= base_url()?>assets/admin/fonts/batch-icons/css/batch-icons.css">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="<?= base_url()?>assets/admin/css/bootstrap/bootstrap.min.css">
	<!-- Material Design Bootstrap -->
	<link rel="stylesheet" href="<?= base_url()?>assets/admin/css/bootstrap/mdb.min.css">
	<!-- Custom Scrollbar -->
	<link rel="stylesheet" href="<?= base_url()?>assets/admin/plugins/custom-scrollbar/jquery.mCustomScrollbar.min.css">
	<!-- Hamburger Menu -->
	<link rel="stylesheet" href="<?= base_url()?>assets/admin/css/hamburgers/hamburgers.css">

	<!-- CSS - REQUIRED - END -->

	<!-- CSS - OPTIONAL - START -->
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url()?>assets/admin/fonts/font-awesome/css/font-awesome.min.css">

	
    <link rel="stylesheet" href="<?= base_url()?>assets/admin/datatables/css/dataTables.bootstrap4.min.css">   
    <link rel="stylesheet" href="<?= base_url()?>assets/admin/plugins/datatables/css/responsive.bootstrap4.min.css">
    
	<!-- JVMaps -->
	<link rel="stylesheet" href="<?= base_url()?>assets/admin/plugins/jvmaps/jqvmap.min.css">
	<!-- CSS - OPTIONAL - END -->

	<link rel="stylesheet" href="<?= base_url()?>assets/admin/plugins/editor/editor.css">
	<!-- QuillPro Styles -->
	<link rel="stylesheet" href="<?= base_url()?>assets/admin/css/quillpro/style.css">
	<link rel="stylesheet" href="<?= base_url()?>assets/admin/css/quillpro/rtl.css">
        <!-- JQuery -->
	<script type="text/javascript" src="<?= base_url()?>assets/admin/js/jquery/jquery-3.1.1.min.js"></script>
</head>


<div class="container-fluid">
    <div class="row">
        <nav id="sidebar" class="px-0  bg-gradient sidebar">
                <ul class="nav nav-pills flex-column">
                        <li class="logo-nav-item">
                            <a class="navbar-brand" href="<?= site_url()?>">
                                        <img src="<?= base_url()?>assets/admin/img/logo.png" class="logo-img" alt="QuillPro">
                                </a>

                        </li>
                        <li>
                                <h6 class="nav-header">القائمة</h6>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($this->uri->segment(2) == 'dashborad'){ echo 'active'; } ?>" href="<?=site_url('admin/Dashborad')?>">
                                <i class="batch-icon batch-icon-browser-alt"></i>
                                <?=lang('home');?> <span class="sr-only">(current)</span>
                            </a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link <?php if($this->uri->segment(4) == 'rqwerewewdfdasfdfd8s9f7ds8f74d56s4fsd564f5d6sf64'){ echo 'active'; } ?>" href="<?=site_url('admin/Cms/editItem/rqwerewewdfdasfdfd8s9f7ds8f74d56s4fsd564f5d6sf64')?>">
                                <i class="batch-icon batch-icon-speech-bubble-right-tip-chat"></i>
                                 <?=lang('am_know_us');?> <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($this->uri->segment(4) == 'rqwerewewssdfdasfdfd8s9f7ds8f74d56s4fsd564f5d6sf'){ echo 'active'; } ?>" href="<?=site_url('admin/Cms/editItem/rqwerewewssdfdasfdfd8s9f7ds8f74d56s4fsd564f5d6sf')?>">
                                <i class="batch-icon batch-icon-star"></i>
                                 <?=lang('am_mission');?> <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($this->uri->segment(4) == 'rqwerewewdfdsgrasfdfd8s9f7ds8f74d56s4fsd564f5d6sf'){ echo 'active'; } ?>" href="<?=site_url('admin/Cms/editItem/rqwerewewdfdsgrasfdfd8s9f7ds8f74d56s4fsd564f5d6sf')?>">
                                <i class="batch-icon batch-icon-eye"></i>
                                 <?=lang('am_Our_vision');?> <span class="sr-only">(current)</span>
                            </a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link <?php if($this->uri->segment(4) == 'rqwerewewdfstefedfsaasfdfd8s9f7ds8f74d56s4fsd564f5d6sf'){ echo 'active'; } ?>" href="<?=site_url('admin/Cms/getDep_ask/rqwerewewdfstefedfsaasfdfd8s9f7ds8f74d56s4fsd564f5d6sf')?>">
                                <i class="batch-icon batch-icon-notes"></i>
                                 <?=lang('am_questions');?> <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($this->uri->segment(4) == 'rqwerewewdfstefedasfdfd8s9f7ds8f74d56s4fsd564f5d6sf'){ echo 'active'; } ?>" href="<?=site_url('admin/Cms/getDep_item/rqwerewewdfstefedasfdfd8s9f7ds8f74d56s4fsd564f5d6sf')?>">
                                <i class="batch-icon batch-icon-polaroid"></i>
                                 <?=lang('am_Submission');?> <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($this->uri->segment(4) == 'rqwerewewdfstefeyhutgds8f74d56s4fsd564f5d6sf'){ echo 'active'; } ?>" href="<?=site_url('admin/Cms/getDep_image/rqwerewewdfstefeyhutgds8f74d56s4fsd564f5d6sf')?>">
                                <i class="batch-icon batch-icon-image"></i>
                                 <?=lang('am_Banner');?> <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($this->uri->segment(3) == 'getSocialMedia'){ echo 'active'; } ?>" href="<?=site_url('admin/Cms/getSocialMedia')?>">
                                <i class="batch-icon batch-icon-users"></i>
                                 <?=lang('am_Social_Media');?> <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($this->uri->segment(3) == 'get_contact'){ echo 'active'; } ?>" href="<?=site_url('admin/Cms/get_contact')?>">
                                <i class="batch-icon batch-icon-users"></i>
                                 <?=lang('am_contact');?> <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($this->uri->segment(2) == 'Idea'){ echo 'active'; } ?>" href="<?=site_url('admin/Idea')?>">
                                <i class="batch-icon batch-icon-users"></i>
                                 <?=lang('am_idea');?> <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($this->uri->segment(4) == 'rqwerewe9f7dddsd56sedasfdff5d6sf22'){ echo 'active'; } ?>" href="<?=site_url('admin/Cms/edit_image_text/rqwerewe9f7dddsd56sedasfdff5d6sf22')?>">
                                <i class="batch-icon batch-icon-users"></i>
                                 <?=lang('am_Our_Projects');?> <span class="sr-only">(current)</span>
                            </a>
                        </li>
                       <li class="nav-item"  >
                               <?php 
                                  $token=$this->login_model->getToken();
                                ?>
                                <a class="nav-link" href="<?= site_url('admin/Users/EditProfile/'.$token)?>">
                                        <i class="batch-icon batch-icon-user"></i>
                                        <?=lang('edit_profile');?> 
                                </a>
                        
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="<?= site_url('login/logout')?>">
                                        <i class="batch-icon batch-icon-power"></i>
                                        <?=lang('logOut');?> 
                                </a>
                        
                        </li>  

                </ul>


        </nav>
        <div class="right-column">
                <nav class="navbar navbar-expand-lg navbar-light bg-white">
                        <button class="hamburger hamburger--slider" type="button" data-target=".sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle Sidebar">
                                <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                </span>
                        </button>

                        <div class="navbar-collapse" id="navbar-header-content">
                                 
                                <ul class="navbar-nav ml-5 navbar-profile">
                                        <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" id="navbar-dropdown-navbar-profile" data-toggle="dropdown" data-flip="false" aria-haspopup="true" aria-expanded="false">
                                                        <div class="profile-name">
                                                               <?php 
																   $UserData = getUserData() ;
																	echo lang('am_hello').' '.$UserData->Name;
																	$imgUser =  base_url().'upload/'.$UserData->Img;
																	if(!file_exists('./upload/'.$UserData->Img )||$UserData->Img==NULL){
																		$imgUser = base_url().'assets/admin/img/profile-pic.jpg';
																		}
  															   ?>
                                                        </div>
                                                        <div class="profile-picture bg-gradient bg-primary has-message float-right">
                                                                <img src="<?=$imgUser?>" width="44" height="44">
                                                        </div>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar-dropdown-navbar-profile">
                                                     
                                                        <li><a class="dropdown-item" href="<?= site_url('login/logout')?>"> <?=lang('logOut')?></a></li>
                                                </ul>
                                        </li>
                                </ul>
                              <!-- <ul class="navbar-nav navbar-language-translation mr-auto">
                                        <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" id="navbar-dropdown-menu-link" data-toggle="dropdown" data-flip="false" aria-haspopup="true" aria-expanded="false">
                                                        <i class="batch-icon batch-icon-book-alt-"></i>
                                                        English
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="navbar-dropdown-menu-link">
                                                        <li><a class="dropdown-item" href="#">Français</a></li>
                                                        <li><a class="dropdown-item" href="#">Deutsche</a></li>
                                                        <li><a class="dropdown-item" href="#">Español</a></li>
                                                </ul>--> 
                            <select id="setLang" class="navbar-nav navbar-language-translation mr-auto">
                             <option  
								  <?php if($this->session->userdata('language')=='arabic'){ ?> 
                                  selected                                                          
                                  <?php }?> value="1" >
                                  <?=lang('am_arabic');?>
                             </option>
                                                        
                             <option   
								  <?php if($this->session->userdata('language')=='english'){ ?> 
                                  selected 
                                  <?php }?>  value="2" >
                                  <?=lang('am_english');?>
                             </option>
                            </select>
                                        </li>
                                </ul>
                        </div>
                </nav>

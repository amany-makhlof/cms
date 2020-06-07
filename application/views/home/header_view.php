<!DOCTYPE html>
<html lang="en">

 <head>
	<meta charset="UTF-8">
	<title>Masry International -  TOGETHER TO GLOBAL</title>

	<!-- responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Despite difficult circumstances that Egyptians have gone through over ages, they have always exemplified the ability to overcome setbacks, obstacles, and challenges, in a way that stunned the world.">
    <meta name="keywords" content="Masry International,مصري انترناشونال,افكار جديدة,افكار, المنصورة,تطبيق الدكتور ,الشباب,أطباء, صيدليات, معامل تحاليل ,مراكز أشعة,Home care,راحتك تهمنا,توصيل خدمات طبية, medical, services, delivery,توصيل خدمات طبية , medical services delivery,Aldoctor Mobile App">
	<link rel="canonical" href="http://masryinternational.com" />
	<!-- master stylesheet -->
	<link rel="stylesheet" href="<?=base_url()?>assets/home/css/style.css">
    <?php if($this->session->userdata('language')!='english'){ ?> 
	<!-- master stylesheet -->
	<link rel="stylesheet" href="<?=base_url()?>assets/home/css/rtl.css">
    
    <?php }?>


	<!-- Responsive stylesheet -->
	<link rel="stylesheet" href="<?=base_url()?>assets/home/css/responsive.css">
    <!-- Favicon -->
    <link href="<?=base_url()?>assets/home/images/favicon.ico" rel="icon" type="image/x-icon" />

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="<?=base_url()?>assets/home/http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="<?=base_url()?>assets/home/js/html5shiv.js"></script>
    <![endif]-->
<!-- main jQuery -->
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
    
</head>
<body>

<!--Start Top bar area -->  
<section class="top-bar-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="flex-box-three">
                    <div class="top-left clearfix">
                        
                            <div class="header-upper-right clearfix">
                                <p><?=lang('am_stay_connect')?> </p>
                                <ul class="sociallinks-style-one">
                                     <?php
												   function checkUrl($link){  
if($link==""){
return false;
}else{
                                                		if(strpos($link, 'http')!== false ){ 
																return $link;
 															}else{ 
															   return 'https://'.$link;
																} }
													} 
													 
												if($facebook!=""){	
                                                                                                      $facebook    = checkUrl($facebook->link);
}
												if($twitter!=""){
                     	                                                                            $twitter     = checkUrl($twitter->link);
} 
												if($instagram!=""){	
                                                                                                     $instagram   = checkUrl($instagram->link);
                                                                                                   }
                                                                                               if($youtube!=""){
													$youtube= checkUrl($youtube->link);
                                                                                                  }
 												?> 
                                                         <?php if($facebook !=""){?>  <li><a href="<?=$facebook ;?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li><?php }?>
                                                <?php if($youtube!=""){?>  <li><a href="<?=$youtube;?>"><i class="fa fa-youtube" aria-hidden="true"></i></a></li><?php }?>
                                                 <?php if($instagram!=""){?>  <li><a href="<?=$instagram;?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li><?php }?>
                                                 <?php if($twitter!=""){?>   <li><a href="<?=$twitter;?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li><?php }?>
                                </ul>
                            </div>
						
                    </div>
                    <div class="top-right clearfix">
                        <div class="language-switcher float-right">
                            <div id="polyglotLanguageSwitcher"> 
                                        
                                 <select id="polyglot-language-options">
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
                             </div>
                        </div>
                    </div> 
                </div>    
            </div>
        </div>
    </div>
</section>
<!--End Top bar area --> 
 
<!--Start header area-->
<header class="header-area">
    <!--Start header upper-->
    <div class="header-upper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-content">
                        <div class="flex-box-three">
                            <div class="header-upper-left clearfix">
									<div class="logo">
										<a href="<?=site_url()?>">
											<img src="<?=base_url()?>assets/home/images/resources/logo.png" alt="Awesome Logo">
										</a>
									</div>
							</div>
                            <div class="header-upper-right clearfix">
                                <div class="state-box">
                                   
                                    <div class="state-content float-right">
                                        <!--Start single state-->
                                        <div class="state" id="value1">
                                            <ul class="clearfix">
                                                <li>
                                                    <div class="icon-box">
                                                        <span class="flaticon-technology"></span>    
                                                    </div>
                                                    <div class="text-box"> 
                                                        <p><?= substr($contact->Content, 0, 3) . " " . substr($contact->Content, 3,3)
 . " ".substr($contact->Content, 6,3 ).' '.substr($contact->Content,9);

?></p> 
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon-box">
                                                        <span class="flaticon-note"></span>    
                                                    </div>
                                                    <div class="text-box">
                                                        <p><?=$contact->Content_en?> </p>
                                                    </div>
                                                </li>
                                            </ul>    
                                        </div>
                                        <!--End single state-->
                                    </div>
                                </div>    
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End header upper-->
    <!--Start header lawer-->
    <div class="header-lower">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-lawer-content clearfix">
                        <div class="header-lower-right clearfix">
                            <nav class="main-menu clearfix">
                                <div class="navbar-header clearfix">   	
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
										 <li <?php if($this->uri->segment(1) == 'home' || $this->uri->segment(1) == '' ){ ?> class="current" <?php } ?>>
                                                        <a href="<?= site_url();?>"><?= lang('home');?></a></a></li>
										<li><a href="<?=site_url('Home/idea');?>">  <?=lang('am_idea');?>  </a></li>
										<li><a href="<?=site_url('Home/questions');?>"><?=lang('am_questions')?></a></li>
										<li><a href="<?=site_url('Home/projects');?>">    <?=lang('am_Our_Projects');?></a></li>
	<li><a href="<?=site_url('Home/contact');?>">    <?=lang('am_contact');?></a></li>
                                        <?php if(!$this->session->userdata('log_in')){ ?>
                                                   
                                                <?php }else{ ?>
									<li><a href="<?=site_url('admin/Dashborad');?>">   <?=lang('am_cpanel');?></a></li>
									<li><a href="<?=site_url('Login/logout');?>">   <?=lang('logOut');?></a></li>
                                    <?php }?>
                                    </ul>
                                </div>
                            </nav>

                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End header lawer-->
    <!---Start sticky header-->
    <div class="sticky-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="left-colum pull-left">
                        <div class="logo">
                            <a href="<?=site_url()?>">
                                <img src="<?=base_url()?>assets/home/images/resources/logo.png" alt="Awesome Logo">
                            </a>
                        </div>    
                    </div>
                    <div class="right-colum pull-right">
                        <nav class="main-menu clearfix">
                            <div class="navbar-header clearfix">   	
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
									<li><a href="<?=site_url();?>"><?= lang('home');?></a></li>
									<li><a href="<?=site_url('Home/idea');?>">    <?=lang('am_idea');?> </a></li>
									<li><a href="<?=site_url('Home/questions');?>"><?=lang('am_questions')?></a></li>
									<li><a href="<?=site_url('Home/projects');?>">    <?=lang('am_Our_Projects');?></a></li>
									<li><a href="<?=site_url('Home/contact');?>">   <?=lang('am_contact');?></a></li>
                                      <?php if(!$this->session->userdata('log_in')){ ?>
                                                   
                                                <?php }else{ ?>
									<li><a href="<?=site_url('admin/Dashborad');?>">   <?=lang('am_cpanel');?></a></li>
									<li><a href="<?=site_url('Login/logout');?>">   <?=lang('logOut');?></a></li>
                                    <?php }?>
                                </ul>
                            </div>
                        </nav>   
                    </div>
                </div>
            </div>    
        </div>
    </div>
										 
    <!---End sticky header-->
</header>  
<!--End header area-->      
   
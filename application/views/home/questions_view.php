<?php extract($dataArray); ?>
 <?php 
	   $Name="";
	   $sub_Token=""; 
	 	if($Dep){  
					$Name      = $Dep->Name;
					$sub_Token = $Dep->Token; 
		 }
	 ?>
<!--Start breadcrumb area-->     
<section class="breadcrumb-area"   <?php
								  $ImagePath = $Dep->ImagePath; 
							      $imgUser =  base_url().'upload/'.$ImagePath;
								  if(  file_exists('./upload/'.$ImagePath)&&$ImagePath!=''){
																								?> 
                                   style="background-image: url(<?=$imgUser?>);"
                                  <?php
								 	}else{?>
                                   style="background-image: url(<?=base_url()?>assets/home/images/resources/breadcrumb-bg.jpg);"
									<?php }
								  ?> >
	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
	            <div class="breadcrumbs">
	                <h1>  <?=$Name ;?> </h1>
	            </div>
	        </div>
	    </div>            
	</div>
	<div class="breadcrumb-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-content">
                        <div class="left pull-right">
                            <ul>
                                <li><a href="<?=site_url();?>"><?=lang('home');?></a></li>
                                <li><i class="fa fa-angle-left" aria-hidden="true"></i></li>
                                <li class="active">  <?=$Name ;?> </li>
                            </ul>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<!--Start Single service area-->
<section id="single-service-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 pull-left">
                <div class="content-box">
          
                    <!--Start offer content-->
                    <div class="offer-content">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="text-holder">
                                    <ul>
                                       <?php 
									     if($questions!=false){
									      foreach($questions as $item): ?>
                                        <li>
                                            <div class="iocn-box">
                                                <i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i>
                                            </div>
                                            <div class="text-box">
                                                <p><span>	 <?php
	     															 $CI = &get_instance();
                                                                     if($CI->session->userdata('language')=='english'){
																		   echo $item->Title_en ;
																	  }else{
																		   echo $item->Title ;
																		  }  
																	?></span>
                                                <br>
                                                <?php
                                                                      if($CI->session->userdata('language')=='english'){
																		   echo $item->Content_en ;
																	  }else{
																		   echo $item->Content ;
																		  }  
																	?>
                                                </p>    
                                            </div>
                                        </li>
                                         <?php
										   endforeach; 
										 }?>
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="img-holder">
                                  <?php
								  $ImagePath = $Dep->ImagePathSmall; 
							      $imgUser =  base_url().'upload/'.$ImagePath;
								  if(  file_exists('./upload/'.$ImagePath)&&$ImagePath!=''){
																								?> 
                                    <img src="<?=$imgUser?>" alt="<?=$imgUser?>">   
                                  <?php
								 	}
								  ?> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End offer content-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Single service area-->

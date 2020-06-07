<?php extract($dataArray); ?>


<!--Start Preloader -->
<div class="preloader">
        
        <div>
       <img src="<?=base_url()?>assets/home/images/loader.svg" alt="loader">
	<h2>TOGETHER TO GLOBAL
            <br>
           معاً الي العالمية
       </h2>
    </div>
</div>
<!--End Preloader -->  

<!--Start rev slider wrapper-->     
        <div class="container">
            <div class="row">
                <div class="col-md-12">
				<section class="rev_slider_wrapper">
									<div id="slider1" class="rev_slider"  data-version="5.0">
										<ul>
										
										   <?php
										    if($banner!=false){
										     foreach($banner as $item): ?>
											
											<li data-transition="fade">
                                                               <?php
																		 $ImagePath = $item->ImagePath; 
																	     $imgUser =  base_url().'upload/'.$ImagePath;
																		 	if(  file_exists('./upload/'.$ImagePath)||$ImagePath!=NULL){
																				?> 
                                                                                 <img src="<?=$imgUser?>" alt="" width="1920" height="480" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat"  data-bgparallax="1" >
																				<?php
																			}else{
																				?>
																				<img src="<?=base_url();?>assets/home/images/slides/7-ar.jpg" alt="" width="1920" height="480" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat"  data-bgparallax="1" >
																				<?php
																				}
																 ?>
												

												<div class="tp-caption  tp-resizeme" 
													data-x="left" data-hoffset="0" 
													data-y="top" data-voffset="370" 
													data-transform_idle="o:1;"         
													data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
													data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
													data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
													data-splitin="none" 
													data-splitout="none"
													data-responsive_offset="on"
													data-start="1500">

													<div class="slide-content left-slide">
														<div class="big-title"> 
                                                                 <?php
	     															 $CI = &get_instance();
                                                                     if($CI->session->userdata('language')=='english'){
																		   echo $item->Title_en ;
																	  }else{
																		   echo $item->Title ;
																		  }  
																	?>
                                                        </div>
														<div class="text">    
                                                                <?php
	     															 $CI = &get_instance();
                                                                     if($CI->session->userdata('language')=='english'){
																		   echo $item->Content_en ;
																	  }else{
																		   echo $item->Content ;
																		  }  
																	?>
                                                        </div>
													</div>
												</div>
											</li>
											<?php 
											 endforeach; 
											}?>
										</ul>
									</div>

				</section>	
		        </div>
			</div>	
		</div>	
<!--End rev slider wrapper--> 

<!--Start call to action area-->
<section class="callto-action-area sec-pd-one-ds">
    <div class="container">
        <div class="row">
           
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="bg-ds bg-3-ds">
                   <div class="content-in">
                        <h2>  
						  <?php
	     															 $CI = &get_instance();
                                                                     if($CI->session->userdata('language')=='english'){
																		   echo $message->Title_en ;
																	  }else{
																		   echo $message->Title ;
																		  }  
																	?>
						
				        </h2>
                        <p>
                        <?php
	     															 $CI = &get_instance();
                                                                     if($CI->session->userdata('language')=='english'){
																		   echo $message->Content_en ;
																	  }else{
																		   echo $message->Content ;
																		  }  
																	?>
                        </p>
                         
                         
                         
                        <!--<a class="readmore" href="#">قراءة المزيد <i class="fa fa-angle-double-left"></i></a>-->
                   </div>     
                </div>    
            </div>  
            
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="bg-ds bg-1-ds">
                   <div class="content-in">
                	<h2>
                    
						  <?php
	     															 $CI = &get_instance();
                                                                     if($CI->session->userdata('language')=='english'){
																		   echo $Vision->Title_en ;
																	  }else{
																		   echo $Vision->Title ;
																		  }  
																	?>
                    </h2>
                	<p> 
                     <?php
	     															 $CI = &get_instance();
                                                                     if($CI->session->userdata('language')=='english'){
																		   echo $Vision->Content_en ;
																	  }else{
																		   echo $Vision->Content ;
																		  }  
																	?>
                    </p>
                   </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="bg-ds bg-2-ds">
                   <div class="content-in">
                	<h2> 
					
						  <?php
	     															 $CI = &get_instance();
                                                                     if($CI->session->userdata('language')=='english'){
																		   echo $mission->Title_en ;
																	  }else{
																		   echo $mission->Title ;
																		  }  
																	?>
                    </h2>
                	<p>
                     <?php
	     															 $CI = &get_instance();
                                                                     if($CI->session->userdata('language')=='english'){
																		   echo $mission->Content_en ;
																	  }else{
																		   echo $mission->Content ;
																		  }  
																	?>
                    
                    </p>
                   </div>
                </div>    
            </div>  
            
            
        </div>
    </div>
</section>
<!--End call to action area-->

<!--Start call to action area-->
<section class="services-area sec-pd-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="callto-action-text">
                    <div class="title">
                        <h1> <?=lang('am_Submission');?> </h1>
                    </div>
                    <div class="text-holder">
                        <ul>
                        <?php
										    if($Conditions!=false){
										     foreach($Conditions as $item): ?>
											
                            <li><i class="fa fa-caret-left" aria-hidden="true"></i> 
                            <?php
	     															 $CI = &get_instance();
                                                                     if($CI->session->userdata('language')=='english'){
																		   echo $item->Title_en ;
																	  }else{
																		   echo $item->Title ;
																		  }  
																	?>
                            </li>
                    	<?php 
							                 endforeach; 
						                    }?>
                         </ul>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</section>
<!--End call to action area-->


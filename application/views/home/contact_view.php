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
<section class="breadcrumb-area" <?php
								  $ImagePath = $info->ImagePath; 
							      $imgUser =  base_url().'upload/'.$ImagePath;
								  if(  file_exists('./upload/'.$ImagePath)&&$ImagePath!=''){
																								?> 
                                   style="background-image: url(<?=$imgUser?>);"
                                  <?php
								 	}else{?>
                                   style="background-image: url(images/resources/breadcrumb-bg.jpg);"
									<?php }
								  ?>>
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
                                <li><a href="<?=site_url()?>"> <?=lang('home') ;?> </a></li>
                                <li><i class="fa fa-angle-left" aria-hidden="true"></i></li>
                                <li class="active">  <?=lang('am_contact') ;?> </li>
                            </ul>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<!--Start contact info area-->
<section class="contact-info-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xl-12">
                <div class="contact-author-info contact-info">
                    <div class="img-holder">
                    <?php 
								  $ImagePath = $info->ImagePathSmall; 
							      $imgUser =  base_url().'upload/'.$ImagePath;
								  if(  file_exists('./upload/'.$ImagePath)&&$ImagePath!=''){
																								?> 
                        <img src="<?=$imgUser?>" alt="Awesome Image">
                                  <?php
								 	}else{?>
 									<?php }
								  ?>
                     </div>
                    <div class=" owl-nav-style-one">
                        <!--Start single info box-->
                        <div class="single-info-box">
                            <div class="title">
                                <h3>   <?=lang('am_connect')?></h3>
                            </div>
                            <ul>
                                <li>
                                    <div class="icon-holder">
                                        <span class="flaticon-signs-1"></span>
                                    </div>
                                    <div class="text-holder">
										<p><span> <?= lang('adderss');?>:</span>   <?php if($this->session->userdata('language')=='english'){ ?> 
                                                         <?=$contact->Title_en?> 
<?}else{?>
                                                        <?=$contact->Title?> 

<?php }?> </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-holder">
                                        <span class="flaticon-technology-1"></span>
                                    </div>
                                    <div class="text-holder">
                                     	<p><span> <?= lang('phone');?>:</span> <span dir="ltr"><?= substr($contact->Content, 0, 3) . " " . substr($contact->Content, 3,3)
 . " ".substr($contact->Content, 6,3 ).' '.substr($contact->Content,9);

?></span></p>

                                      
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-holder">
                                        <span class="flaticon-multimedia"></span>
                                    </div>
                                    <div class="text-holder">
                                        <p><span>    <?= lang('email');?>   :</span><br><?=$info->Content_en?> </p>
                                    </div>
                                </li>
                            </ul>
                            <ul class="social-icon">
                                  <?php
												 
													$facebook    = checkUrl($facebook->link);
													$twitter     = checkUrl($twitter->link);
													$instagram   = checkUrl($instagram->link);
													$youtube= checkUrl($youtube->link);
												?>
                                                 <?php if($facebook !=""){?>  <li><a href="<?=$facebook ;?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li><?php }?>
                                                <?php if($youtube!=""){?>  <li><a href="<?=$youtube;?>"><i class="fa fa-youtube" aria-hidden="true"></i></a></li><?php }?>
                                                 <?php if($instagram!=""){?>  <li><a href="<?=$instagram;?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li><?php }?>
                                                 <?php if($twitter!=""){?>   <li><a href="<?=$twitter;?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li><?php }?>
                             </ul>
                        </div>
                        <!--Start single info box-->
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xl-12">
                <div class="google-map-box">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27347.642553473568!2d31.365330064594417!3d31.04142173784988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f79db7a9053547%3A0xf8dab3bbed766c97!2sMansoura%2C+Mansoura+Qism+2%2C+Mansoura%2C+Dakahlia+Governorate!5e0!3m2!1sen!2seg!4v1516362264558" width="100%" height="583" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>   
            </div>
            
        </div>
                        <div class="row">
                            <div class="col-md-12">
                               <div class="alert alert-danger alert-d-ds">
                                  <p><?=lang('am_connect_info')?></p>
                               </div>
                            </div>
                        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-form">
                    <div class="sec-title text-center">
                        <h1> <?=lang('QS')?></h1>
                    </div>
                    <form id="contact-form" name="contact_form" class="default-form"  action="<?= site_url('home/send_contact');?>"  method="post">
                        <div class="row">
                        
                                              <?php echo validation_errors('<div class="error">', '</div>'); ?>
											  <?php if($this->session->flashdata('msg')){  
                                                         echo $this->session->flashdata('msg');  
                                                    }?>
                            <div class="col-md-6">
                                <input type="text" name="form_name" value="" 
                                                                               data-validation="required  length" 
                                                                               data-validation-length="2-250"  placeholder="<?=lang('am_Your_Name')?>*" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="form_email" value="" 
                                                                               data-validation="required  email" 
                                                                               data-validation-length="3-140" placeholder="<?=lang('am_Your_Mail')?>*" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="form_phone" value=""
                                                                               data-validation="required  number length" 
                                                                               data-validation-length="5-140" placeholder="<?=lang('phone')?>*">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="form_subject" 
                                                                               data-validation="required  length" 
                                                                               data-validation-length="9-250" value="" placeholder="<?=lang('am_Subject')?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <textarea name="form_message"   data-validation="required  length"  data-validation-length="9-350" placeholder="<?=lang('am_Your_Message')?>" required></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                <button class="thm-btn bg-1" type="submit" data-loading-text="<?=lang('am_Please_wait')?>"><?=lang('am_send')?> </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End contact info area-->  
<script src="<?= base_url()?>assets/home/js/plugins/formValidator/jquery.form-validator.min.js" type="text/javascript"></script>
<script>
  $.validate({
	<?php if($this->session->userdata('language')=='english'){ ?> 
      lang : 'en',
	<?php }else{?>
      lang : 'ar',
	<?php }?>
    modules : ' date, security, file',
    
  });
</script>
<div class="imageSectionSource" style="display:none;">

    <div class="field-label">  <?=lang('am_attach_all')?>  </div>
                                <div class="field-input">
									<input type="file"  onChange="file_Upload( );" id="fileUploadall" >
                                      
														<span id="msg"  ></span>
														<div id="div_img">
														</div>
														<div id="div_loading_img">

															<div class="loading_div" id="loadingDiv" >
																<div class="progress-pa">
																	<div class="progress-co">
																		<div class="progress">
																			  <div class="progress-bar progress-bar-striped active" role="progressbar"
																			  aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">
																			   0%
																			  </div>
																		  </div>
																		</div>
																		<div class="progress_word"></div>	
																</div>
															 </div>
														</div>
                                </div>
</div>
    

<?php extract($dataArray); ?>

<!--Start breadcrumb area-->   
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
	                <h1><?=lang('am_Our_Projects')?> </h1>
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
                                <li><a href="<?=site_url()?>"><?=lang('home')?></a></li>
                                <li><i class="fa fa-angle-left" aria-hidden="true"></i></li>
                                <li class="active"> <?=lang('am_Our_Projects')?> </li>
                            </ul>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->


<section id="blog-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="blog-post">
                    <div class="single-blog-post">
 
<div class="clearfix"></div>
                        <div class="img-holder">


          <?php
																		 $ImagePath = $info->ImagePath; 
																	     $imgUser =  base_url().'upload/'.$ImagePath;
																		 	if(  file_exists('./upload/'.$ImagePath)||$ImagePath!=NULL){
																				?> 
                            <img src="<?=$imgUser;?>" alt="Awesome Image">
<?php  }?>
                        </div>
                        <div class="text-holder">
                          
                            <h3 class="blog-title"> 
                <?php
	     	 $CI = &get_instance();
                 if($CI->session->userdata('language')=='english'){
		     echo $info->Title_en ;
		   }else{
			echo $info->Title ;
																		  
                     }  ?>
															 
                            </h3> 
                            <div class="text">
                                <p class="mar-bottom" style="line-height: 32px;">
<?php
	     	 $CI = &get_instance();
                 if($CI->session->userdata('language')=='english'){
		     echo $info->Content_en ;
		   }else{
			echo $info->Content;
																		  
                     }  ?>

                                     </p>
                            </div>
   <?php if($info->link!=""){?>
<div style="margin-top:15px" class="embed-responsive embed-responsive-16by9">
<iframe class="embed-responsive-item" src="<?=$info->link?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
</div>
<?php }?>
<?php
								  $ImagePath = $info->ImagePath2; 
							      $imgUser =  base_url().'upload/'.$ImagePath;
								  if(  file_exists('./upload/'.$ImagePath)&&$ImagePath!=''){
																								?> 

<div style="margin-top:15px" align="center" class="embed-responsive embed-responsive-16by9">
    <video controls class="embed-responsive-item">
        <source src="<?=$imgUser?>" type="video/mp4">
    </video>
</div>
<?php }?>
			 <?php echo validation_errors('<div class="error">', '</div>'); ?>
											  <?php if($this->session->flashdata('msg')){  
                                                         echo $this->session->flashdata('msg');  
                                                    }?>		
					<div class="checkout-area" style="overflow: hidden;padding-top: 30px;">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="form billing-info">
										<div class="col-md-4">
											<div class="field-label"> <?=lang('registration_now')?>  *</div>
											<div class="field-input">
												<select onchange="otherCheck(this);" >
													 													<option disabled="" selected=""> <?=lang('am_choose')?> </option>

													<option value="1"><?=lang('doctors')?></option>
													<option value="2"><?=lang('Pharmacy')?></option>
													<option value="3"><?=lang('Laboratory')?></option>
													<option value="4"><?=lang('Radiology_center')?></option>
												</select>
											</div>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12" >
										    <a style="color:#f00" data-toggle="modal" data-target="#myModal" href="#"><?=lang('Privacy_policy')?></a> 

 
										</div>  
										<div  class="modal modal-dds fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                          <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                               <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel"><?=lang('Privacy_policy')?></h4>
                                              </div>
                                              <div class="modal-body">
                                                 <p><?=lang('Privacy_policy_intro')?></p>
                                                 <h4><?=lang('Privacy_policy_title1')?></h4>
                                                 <p><?=lang('Privacy_policy_text1')?></p> 
                                                 <h4><?=lang('Privacy_policy_title2')?></h4>
                                                 <p><?=lang('Privacy_policy_text2')?></p> 
                                                 <h4><?=lang('Privacy_policy_title3')?></h4>
                                                 <p><?=lang('Privacy_policy_text3')?></p> 
                                                 <h4><?=lang('Privacy_policy_title4')?></h4>
                                                 <p><?=lang('Privacy_policy_text4')?></p> 
                                                 <h4><?=lang('Privacy_policy_title5')?></h4>
                                                 <p><?=lang('Privacy_policy_text5')?></p> 
                                                 <h4><?=lang('Privacy_policy_title6')?></h4>
                                                 <p><?=lang('Privacy_policy_text6')?></p> 
                                              </div>
                                            </div>
                                          </div>
                                        </div>
								
							 </div>  

										<div class="clearfix"></div> 
							<div class="form billing-info anyform" id="Project" style="display: none">
							
							 
								<div class="sec-title">
									<h2><?=lang('registration_of_doctors')?></h2>
									<span class="border"></span>
								</div>
                                                    
                    <form method="post" action="<?= site_url('home/insertProject');?>" onsubmit="return validateForm()" >
								<div class="row">
										<div class="col-md-12 form-group">
                                                                                    <strong class="danger"> <?=lang('d_info_22')?> </strong>
                                                                                </div> 
										<div class="col-md-4">
											<div class="field-label"> <?=lang('am_full_name')?>  *</div>
											<div class="field-input">
												<input type="text" name="full_name" placeholder="" data-validation="required  length" data-validation-length="1-140">
											</div>
										</div>
										<div class="col-md-4">
											<div class="field-label"> <?=lang('am_gender')?> *</div>
											<div class="field-input">
												<select name="gender" data-validation="required  ">
													<option disabled="" selected=""> <?=lang('am_choose')?> </option>
													<option value="1"> <?=lang('am_female')?> </option>
													<option value="2"> <?=lang('am_male')?> </option>
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="field-label"> <?=lang('brithday')?>  *</div>
											<div class="field-input">
												<input type="text" name="age" placeholder="">
											</div>
										</div>

										<div class="clearfix"></div>
										 <div class="col-md-4">

											<div class="field-label"> <?=lang('am_Governorate')?>*</div>
											<div class="field-input">
												<select name="Governorate" data-validation="required  ">
													<option disabled selected><?=lang('am_choose')?> </option>
													<option value="1"> <?=lang('Alexandria')?></option>
													<option value="2">  <?=lang('Aswan')?></option>
													<option value="3">  <?=lang('Asyut')?></option>
													<option value="4">  <?=lang('Beheira')?></option>
													<option value="5">  <?=lang('Beni_Suef')?></option>
													<option value="6">  <?=lang('Cairo')?></option>
													<option value="7">  <?=lang('Dakahlia')?></option>
													<option value="8">  <?=lang('Damietta')?></option>
													<option value="9">  <?=lang('Faiyum')?></option>
													<option value="10">  <?=lang('Gharbia')?></option>
													<option value="11">  <?=lang('Giza')?></option>
													<option value="12">  <?=lang('Ismailia')?></option>
													<option value="13">  <?=lang('Kafr_Sheikh')?></option>
													<option value="14">  <?=lang('Luxor')?></option>
													<option value="15">  <?=lang('Matruh')?></option>

													<option value="16">  <?=lang('Minya')?></option>
													<option value="17">  <?=lang('Monufia')?></option>
													<option value="18">  <?=lang('New_Valley')?></option>
													<option value="19">  <?=lang('North_Sinai')?></option>
													<option value="20">  <?=lang('Port_Said')?></option>
													<option value="21">  <?=lang('Qalyubia')?></option>
													<option value="22">  <?=lang('Qena')?></option>
													<option value="23">  <?=lang('Red_Sea')?></option>
													<option value="24">  <?=lang('Sharqia')?></option>
													<option value="25">  <?=lang('Sohag')?></option>
													<option value="26">  <?=lang('South_Sinai')?></option>
													<option value="27">  <?=lang('Suez')?></option>
												</select>
											</div>
										</div>


										<div class="col-md-4">
											<div class="field-label"> <?=lang('adderss')?> *</div>
											<div class="field-input">
												<input type="text" name="adderss" placeholder="" data-validation="  length" 
																						   data-validation-length="max240">
											</div>
										</div>

										<div class="col-md-4">
											<div class="field-label"> <?=lang('email')?> *</div>
											<div class="field-input">
												<input type="text" name="email" placeholder=""   >
											</div>
										</div>

										<div class="clearfix"></div>


										<div class="col-md-4">
											<div class="field-label"><?=lang('mobile')?> *</div>
											<div class="field-input">
												<input type="text"  class="txtboxToFilter" name="mobile" placeholder="" data-validation="required number  length" 
																						   data-validation-length="11">
											</div>
										</div>

										<div class="col-md-4">
											<div class="field-label"> <?=lang('university')?> *</div>
											<div class="field-input">
												<input type="text" name="Educational" placeholder="" data-validation="    length" data-validation-length="max350">
											</div>
										</div>

										<div class="col-md-4">
											<div class="field-label"> <?=lang('am_Graduation_Year')?> *</div>
											<div class="field-input">
												<input type="text" class="txtboxToFilter"  name="Graduation_Year" placeholder="" data-validation="     length" 
																						   data-validation-length="max6">
											</div>
										</div>

										<div class="col-md-4">
											<div class="field-label"> <?=lang('EMS_Membership_No')?> *</div>
											<div class="field-input">
												<input type="text"  class="txtboxToFilter"  name="Membership_No" placeholder="" data-validation="   length" 
																						   data-validation-length="max200">
											</div>
										</div>

										<div class="clearfix"></div>

										<div class="col-md-6">
											<div class="field-label">  <?=lang('Your_specialty')?> *      </div>
											<div class="field-input">
												<textarea name="achievements" data-validation="   length" 
																						   data-validation-length="max200"></textarea>
											</div>
										</div>

										<div class="col-md-6">
											<div class="field-label">  <?=lang('Your_Medical_Services')?> * <i class="fa fa-info-circle" data-container="body" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?=lang('add_diseases')?>"></i> </div>
											<div class="field-input">
												<textarea name="achievements2" data-validation="   length" 
																						   data-validation-length="max200"></textarea>
											</div>
										</div>
										<div class="clearfix"></div>

										<div class="col-md-6">
											<div class="field-label">  <?=lang('Add_other_certificates')?> *      </div>
											<div class="field-input">
												<textarea name="achievements3" data-validation="    length" 
																						   data-validation-length="max200"></textarea>
											 </div>
   											<div class="imageSection"></div>
										</div>

										<div class="col-md-6" style="display:none">
											<div class="field-label">  <?=lang('Add_different_types')?> *   </div>
											<div class="field-input">
												<textarea name="achievements4" data-validation="    length" 
																						   data-validation-length="max200"></textarea>
											</div>
      
                            
                         		
										</div>


										<div class="clearfix"></div>
										<p class="danger"><?=lang('doctors_info')?> </p>
										
										<div class="clearfix"></div>

										<div class="clearfix"></div>
											<div class="col-md-12">
												<div class="placeorder-button text-auto-ds">
													<button class="thm-btn bg-clr1" type="submit"> <?=lang('am_Submit_now')?>  </button>
												</div>
											</div>
									</div>    
</form>
						 
						 
						 
							 </div>  
							 
							<div class="form billing-info anyform" id="Pharmacy" style="display: none" >
							
							 
								<div class="sec-title">
									<h2><?=lang('Pharmacy')?></h2>
									<span class="border"></span>
								</div>
								
							<form method="post" action="<?= site_url('home/insertPharmacy');?>" onsubmit="return validateForm()" >
								<div class="row">
									
										<div class="col-md-12 form-group">
                                                                                    <strong class="danger"> <?=lang('p_info_22')?> </strong>
                                                                                </div> 
										 
										<div class="col-md-4">
											<div class="field-label"> <?=lang('Pharmacy_name')?>  *</div>
											<div class="field-input">
												<input type="text" name="full_name" placeholder="" data-validation="required  length" data-validation-length="1-140">
											</div>
										</div>
									
										<div class="col-md-4">
											<div class="field-label"> <?=lang('Pharmacy_owner')?>  *</div>
											<div class="field-input">
												<input type="text" name="gender" placeholder="" data-validation="required  length" data-validation-length="1-140">
											</div>
										</div>
										 <div class="col-md-4">

											<div class="field-label"> <?=lang('am_Governorate')?> *</div>
											<div class="field-input">
												<select name="Governorate" data-validation="required   " >
													<option disabled selected><?=lang('am_choose')?> </option>
													<option value="1"> <?=lang('Alexandria')?></option>
													<option value="2">  <?=lang('Aswan')?></option>
													<option value="3">  <?=lang('Asyut')?></option>
													<option value="4">  <?=lang('Beheira')?></option>
													<option value="5">  <?=lang('Beni_Suef')?></option>
													<option value="6">  <?=lang('Cairo')?></option>
													<option value="7">  <?=lang('Dakahlia')?></option>
													<option value="8">  <?=lang('Damietta')?></option>
													<option value="9">  <?=lang('Faiyum')?></option>
													<option value="10">  <?=lang('Gharbia')?></option>
													<option value="11">  <?=lang('Giza')?></option>
													<option value="12">  <?=lang('Ismailia')?></option>
													<option value="13">  <?=lang('Kafr_Sheikh')?></option>
													<option value="14">  <?=lang('Luxor')?></option>
													<option value="15">  <?=lang('Matruh')?></option>
													<option value="16">  <?=lang('Minya')?></option>
													<option value="17">  <?=lang('Monufia')?></option>
													<option value="18">  <?=lang('New_Valley')?></option>
													<option value="19">  <?=lang('North_Sinai')?></option>
													<option value="20">  <?=lang('Port_Said')?></option>
													<option value="21">  <?=lang('Qalyubia')?></option>
													<option value="22">  <?=lang('Qena')?></option>
													<option value="23">  <?=lang('Red_Sea')?></option>
													<option value="24">  <?=lang('Sharqia')?></option>
													<option value="25">  <?=lang('Sohag')?></option>
													<option value="26">  <?=lang('South_Sinai')?></option>
													<option value="27">  <?=lang('Suez')?></option>
												</select>
											</div>
										</div>

										<div class="clearfix"></div>

										<div class="col-md-4">
											<div class="field-label"> <?=lang('City')?>  *</div>
											<div class="field-input">
												<input type="text" name="adderss" placeholder="" data-validation="   length" data-validation-length="max140">
											</div>
										</div>

										<div class="col-md-4">
											<div class="field-label"> <?=lang('adderss')?> *</div>
											<div class="field-input">
												<input type="text" name="email" placeholder="" data-validation="   length" 
																						   data-validation-length="max240">
											</div>
										</div>
										
										<div class="col-md-4">
											<div class="field-label"> <?=lang('No_commercial_record')?>  *</div>
											<div class="field-input">
												<input type="text" name="mobile" placeholder="" data-validation="   length" data-validation-length="max140">
											</div>
										</div>

										<div class="clearfix"></div>
										
										<div class="col-md-4">
											<div class="field-label"> <?=lang('pharmacy_license')?>  *</div>
											<div class="field-input">
												<input type="text" name="Educational" placeholder="" data-validation="   length" data-validation-length="max140">
											</div>
										</div>
										
										<div class="col-md-4">
											<div class="field-label"> <?=lang('Mobile_for_Application')?>  *</div>
											<div class="field-input">
												<input type="text" name="Graduation_Year" placeholder="" data-validation="   length" data-validation-length="11">
											</div>
										</div>

										<div class="col-md-4">
											<div class="field-label"> <?=lang('email')?> *</div>
											<div class="field-input">
												<input type="text" name="Membership_No" placeholder=""   >
											</div>
										</div>

										<div class="clearfix"></div>
										
										<div class="col-md-4">
											<div class="field-label"> <?=lang('No_deliverymen')?>  *</div>

											<div class="field-input">
												<input type="number" name="achievements" placeholder="" data-validation="   length" data-validation-length="max3">
											</div>
										</div>


										<div class="clearfix"></div>
										<p class="danger"><?=lang('pharmacy_info')?> </p>
										
										<div class="clearfix"></div>
										<div class="col-md-6" >
      
                                         <div class="imageSection"></div>
                         
											
										</div>
										
										<div class="clearfix"></div>
											<div class="col-md-12">
												<div class="placeorder-button text-auto-ds">
													<button class="thm-btn bg-clr1" type="submit"> <?=lang('am_Submit_now')?>  </button>
												</div>
											</div>
										
										
										
										
										
								</div>
							</form>	 
								
							 </div>  
							 
							<div class="form billing-info anyform" id="Laboratory"  style="display: none" >
							
							 
								<div class="sec-title">
									<h2><?=lang('Laboratory')?></h2>
									<span class="border"></span>

								</div>
								
							<form method="post" action="<?= site_url('home/insertLaboratory');?>" onsubmit="return validateForm()" >
								<div class="row">
									
										<div class="col-md-12 form-group">
                                                                                    <strong class="danger"> <?=lang('l_info_22')?> </strong>
                                                                                </div> 
										 
										<div class="col-md-4">
											<div class="field-label"> <?=lang('Laboratory_name')?>  *</div>
											<div class="field-input">
												<input type="text" name="full_name" placeholder="" data-validation="required  length" data-validation-length="1-140">
											</div>
										</div>
									
										<div class="col-md-4">
											<div class="field-label"> <?=lang('Laboratory_owner')?>  *</div>
											<div class="field-input">
												<input type="text" name="gender" placeholder="" data-validation="required  length" data-validation-length="1-140">
											</div>
										</div>
										 <div class="col-md-4">

											<div class="field-label"> <?=lang('am_Governorate')?> *</div>
											<div class="field-input">
												<select name="Governorate" data-validation="  ">
													<option disabled selected><?=lang('am_choose')?> </option>
													<option value="1"> <?=lang('Alexandria')?></option>
													<option value="2">  <?=lang('Aswan')?></option>
													<option value="3">  <?=lang('Asyut')?></option>
													<option value="4">  <?=lang('Beheira')?></option>
													<option value="5">  <?=lang('Beni_Suef')?></option>
													<option value="6">  <?=lang('Cairo')?></option>
													<option value="7">  <?=lang('Dakahlia')?></option>
													<option value="8">  <?=lang('Damietta')?></option>
													<option value="9">  <?=lang('Faiyum')?></option>
													<option value="10">  <?=lang('Gharbia')?></option>
													<option value="11">  <?=lang('Giza')?></option>
													<option value="12">  <?=lang('Ismailia')?></option>
													<option value="13">  <?=lang('Kafr_Sheikh')?></option>
													<option value="14">  <?=lang('Luxor')?></option>
													<option value="15">  <?=lang('Matruh')?></option>
													<option value="16">  <?=lang('Minya')?></option>
													<option value="17">  <?=lang('Monufia')?></option>
													<option value="18">  <?=lang('New_Valley')?></option>
													<option value="19">  <?=lang('North_Sinai')?></option>
													<option value="20">  <?=lang('Port_Said')?></option>
													<option value="21">  <?=lang('Qalyubia')?></option>
													<option value="22">  <?=lang('Qena')?></option>
													<option value="23">  <?=lang('Red_Sea')?></option>
													<option value="24">  <?=lang('Sharqia')?></option>
													<option value="25">  <?=lang('Sohag')?></option>
													<option value="26">  <?=lang('South_Sinai')?></option>
													<option value="27">  <?=lang('Suez')?></option>
												</select>
											</div>
										</div>

										<div class="clearfix"></div>

										<div class="col-md-4">
											<div class="field-label"> <?=lang('City')?>  *</div>
											<div class="field-input">
												<input type="text" name="adderss" placeholder="" data-validation="   length" data-validation-length="max140">
											</div>
										</div>

										<div class="col-md-4">
											<div class="field-label"> <?=lang('adderss')?> *</div>
											<div class="field-input">
												<input type="text" name="email" placeholder="" data-validation="   length" 
																						   data-validation-length="max240">
											</div>
										</div>
										
										<div class="col-md-4 " style="display:none">
											<div class="field-label"> <?=lang('No_commercial_record')?>  *</div>
											<div class="field-input">
												<input type="text" name="mobile" placeholder="" >
											</div>
										</div>

										
										<div class="col-md-4">
											<div class="field-label"> <?=lang('No_laboratory_license')?>  *</div>
											<div class="field-input">
												<input type="text" name="Educational" placeholder="" data-validation="   length" data-validation-length="max140">
											</div>
										</div>
										
										<div class="clearfix"></div>
										<div class="col-md-4">
											<div class="field-label"> <?=lang('Mobile_for_Application')?>  *</div>
											<div class="field-input">
												<input type="text" name="Graduation_Year" placeholder="" data-validation="   length" data-validation-length="11">
											</div>
										</div>

										<div class="col-md-4">
											<div class="field-label"> <?=lang('email')?> *</div>
											<div class="field-input">
												<input type="text" name="Membership_No" placeholder=""   >
											</div>
										</div>

										
										<div class="col-md-4">
											<div class="field-label"> <?=lang('No_deliverymen')?>  *</div>
											<div class="field-input">
												<input type="number" name="achievements" placeholder="" data-validation="   length" data-validation-length="max3">
											</div>
										</div>
										<div class="col-md-4">
											<div class="field-label"> <?=lang('Provided_services')?>  *</div>
											<div class="field-input">
												<textarea name="Provided_services" placeholder="" data-validation="   length" data-validation-length="max999"></textarea>
											</div>
										</div>


										<div class="clearfix"></div>
										<p class="danger"><?=lang('laboratory_info')?> </p>
										
										<div class="clearfix"></div>
										<div class="col-md-6">
								              <div class="imageSection"></div>
										</div>
										
											<div class="clearfix"></div>
											<div class="col-md-12">
												<div class="placeorder-button text-auto-ds">
													<button class="thm-btn bg-clr1" type="submit"> <?=lang('am_Submit_now')?>  </button>
												</div>
											</div>
										
										
										
										
										
								</div>
							</form>	 
								
							 </div>  
							 
							 
							<div class="form billing-info anyform" id="Radiology" style="display: none" >
							
							 
								<div class="sec-title">
									<h2><?=lang('Radiology_center')?></h2>
									<span class="border"></span>
								</div>
								
							<form method="post" action="<?= site_url('home/insertRadiology');?>" onsubmit="return validateForm()" >
								<div class="row">
									
										<div class="col-md-12 form-group">
                                                                                    <strong class="danger"> <?=lang('s_info_22')?> </strong>
                                                                                </div> 
										 
										<div class="col-md-4">
											<div class="field-label"> <?=lang('Radiology_center_name')?>  *</div>
											<div class="field-input">
												<input type="text" name="full_name" placeholder="" data-validation="required  length" data-validation-length="1-140">
											</div>
										</div>
									
										<div class="col-md-4">
											<div class="field-label"> <?=lang('Radiology_center_owner')?>  *</div>
											<div class="field-input">
												<input type="text" name="gender" placeholder="" data-validation="required  length" data-validation-length="1-140">
											</div>
										</div>
										 <div class="col-md-4">

											<div class="field-label"> <?=lang('am_Governorate')?> *</div>
											<div class="field-input">
												<select name="Governorate"  data-validation="  ">
													<option disabled selected><?=lang('am_choose')?> </option>
													<option value="1"> <?=lang('Alexandria')?></option>
													<option value="2">  <?=lang('Aswan')?></option>
													<option value="3">  <?=lang('Asyut')?></option>
													<option value="4">  <?=lang('Beheira')?></option>
													<option value="5">  <?=lang('Beni_Suef')?></option>
													<option value="6">  <?=lang('Cairo')?></option>
													<option value="7">  <?=lang('Dakahlia')?></option>
													<option value="8">  <?=lang('Damietta')?></option>
													<option value="9">  <?=lang('Faiyum')?></option>
													<option value="10">  <?=lang('Gharbia')?></option>
													<option value="11">  <?=lang('Giza')?></option>
													<option value="12">  <?=lang('Ismailia')?></option>
													<option value="13">  <?=lang('Kafr_Sheikh')?></option>
													<option value="14">  <?=lang('Luxor')?></option>
													<option value="15">  <?=lang('Matruh')?></option>
													<option value="16">  <?=lang('Minya')?></option>
													<option value="17">  <?=lang('Monufia')?></option>
													<option value="18">  <?=lang('New_Valley')?></option>
													<option value="19">  <?=lang('North_Sinai')?></option>
													<option value="20">  <?=lang('Port_Said')?></option>
													<option value="21">  <?=lang('Qalyubia')?></option>
													<option value="22">  <?=lang('Qena')?></option>
													<option value="23">  <?=lang('Red_Sea')?></option>
													<option value="24">  <?=lang('Sharqia')?></option>
													<option value="25">  <?=lang('Sohag')?></option>
													<option value="26">  <?=lang('South_Sinai')?></option>
													<option value="27">  <?=lang('Suez')?></option>
												</select>
											</div>
										</div>

										<div class="clearfix"></div>

										<div class="col-md-4">
											<div class="field-label"> <?=lang('City')?>  *</div>
											<div class="field-input">
												<input type="text" name="adderss" placeholder="" data-validation="   length" data-validation-length="max140">
											</div>
										</div>

										<div class="col-md-4">
											<div class="field-label"> <?=lang('adderss')?> *</div>
											<div class="field-input">
												<input type="text" name="email" placeholder="" data-validation="   length" 
																						   data-validation-length="max240">
											</div>
										</div>
										
										<div class="col-md-4">
											<div class="field-label"> <?=lang('No_commercial_record')?>  *</div>
											<div class="field-input">
												<input type="text" name="mobile" placeholder="" data-validation="   length" data-validation-length="max140">
											</div>
										</div>

										<div class="clearfix"></div>
										
										<div class="col-md-4">
											<div class="field-label"> <?=lang('No_laboratory_license')?>  *</div>
											<div class="field-input">
												<input type="text" name="Educational" placeholder="" data-validation="   length" data-validation-length="max140">
											</div>
										</div>
										
										<div class="col-md-4">
											<div class="field-label"> <?=lang('Mobile_for_Application')?>  *</div>
											<div class="field-input">
												<input type="text" name="Graduation_Year" placeholder="" data-validation="   length" data-validation-length="11">
											</div>
										</div>

										<div class="col-md-4">
											<div class="field-label"> <?=lang('email')?> *</div>
											<div class="field-input">
												<input type="text" name="Membership_No" placeholder=""   >
											</div>
										</div>

										<div class="clearfix"></div>
										
										<div class="col-md-4">
											<div class="field-label"> <?=lang('No_deliverymen')?>  *</div>
											<div class="field-input">
												<input type="number" name="achievements" placeholder="" data-validation="   length" data-validation-length="max3">
											</div>
										</div>
										<div class="col-md-4">
											<div class="field-label"> <?=lang('Provided_services')?>  *</div>
											<div class="field-input">
												<textarea name="Provided_services" placeholder="" data-validation="   length" data-validation-length="max999"></textarea>
											</div>
										</div>

										<div class="clearfix"></div>
										<p class="danger"><?=lang('Radiology_center_info')?> </p>
										
										<div class="clearfix"></div>
										<div class="col-md-6">
											<div class="imageSection"></div>
											
										</div>

										
										
									<div class="clearfix"></div>


											<div class="col-md-12">
												<div class="placeorder-button text-auto-ds">
													<button class="thm-btn bg-clr1" type="submit"> <?=lang('am_Submit_now')?>  </button>
												</div>
											</div>		
										
										
										
										
								</div>
							</form>	 
								
							 </div>  
							 
							 
						</div>
						
					</div>
                        </div> 

                    </div>
         

 
                </div>
            </div>

        </div>
    </div>
</section>
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

$(document).ready(function(e) {
	$(".imageSectionSource").hide();
	$("#loadingDiv").hide();
	$("#loadingDiv2").hide();
	$("#loadingDiv3").hide();
	$("#loadingDiv4").hide();
	$("#loadingDiv5").hide();

$(".txtboxToFilter").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
});

     	  function  file_Upload( ) { 
 					$(".imageSection #loadingDiv").show();
					var xhr    = new XMLHttpRequest();
					var data   = new FormData();  
					jQuery.each($('#fileUpload')[0].files, function(i, file) {data.append('file', file);});     
				 /*==============================================================================================*/
				 /*----------------------------------------------------------------------------*/
								$.ajax({
												xhr: function() {
												 var xhr = new window.XMLHttpRequest();
										
												// Upload progress
												xhr.upload.addEventListener("progress", function(evt){
													if (evt.lengthComputable) {
														var percentComplete = evt.loaded / evt.total;
														//Do something with upload progress
															$('.progress-bar').css('width',parseInt(percentComplete*100)+'%' );
															$('.progress-bar').attr('aria-valuenow',parseInt(percentComplete*100)+'%' );
															$('.progress-bar').html(parseInt(percentComplete*100)+' %');
															$('.progress_word').html($("#fileUpload").val()); 
																		//   $('#progress').val(percentComplete);$('#progresshtml').html(parseInt(percentComplete*100)+' %');
																		}
									   }, false);
								
									   // Download progress
												   xhr.addEventListener("progress", function(evt){
													   if (evt.lengthComputable) {
														   var percentComplete = evt.loaded / evt.total;
														   // Do something with download progress
															$('.progress-bar').css('width',parseInt(percentComplete*100)+'%'  );
															$('.progress-bar').attr('aria-valuenow',parseInt(percentComplete*100)+'%' );
															$('.progress-bar').html(parseInt(percentComplete*100)+' %');
															$('.progress_word').html($("#fileUpload").val()); 
														//   $('#progress').val(percentComplete);$('#progresshtml').html(parseInt(percentComplete*100)+' %');
													   }
												   }, false);
								
									   return xhr;
									}, 
										url: '<?php echo site_url('home/up_ax_file') ?>',
										 
										data: data,
										cache: false,
										contentType: false,
										processData: false,
										type: 'POST',
										beforeSend : function()
										{
											
										},  
										success: function(data){ 
 											$(".imageSection  #loadingDiv").hide();
											if(data.msg_type == 0 )
											{  
												$(".imageSection #msg").html(data.msg_upload) ;
 											}
											else if(data.msg_type == 1 )
											{ 
												var newImg = data.base+'upload/'+data.img;
												 

$('.imageSection').append('<input type="hidden" name="hidImg[]" id="hidImg_'+parseInt($('input[name="hidImg[]"]').length)+1+'" value="'+data.img+'">');

												$(".imageSection #msg").html('');
												$( ".imageSection #div_img" ).append('<div id="imgcon_'+parseInt($('input[name="hidImg[]"]').length)+1+'"><a href="'+newImg+'" > '+newImg+' </a><button class="uploadclose" onClick="delImgUp('+parseInt($('input[name="hidImg[]"]').length)+1+');" type="button">X</button></div>');
												
											  
											}
										}
						});
				/*==============================================================================================*/
             	}
 

  function otherCheck(that) {
	  
        $(".imageSection").html('');
        if (that.value == "1") {
              $(".anyform").hide();
              $("#Project .imageSection").html($(".imageSectionSource").html());
              $("#Project .imageSection #fileUploadall").attr('id','fileUpload'); 
              $("#Project").show();
        } else if (that.value == "2") {
            $(".anyform").hide();
              $("#Pharmacy .imageSection").html($(".imageSectionSource").html());
              $("#Pharmacy .imageSection #fileUploadall").attr('id','fileUpload'); 
            $("#Pharmacy").show();
         }  else if (that.value == "3") {
            
            $(".anyform").hide();
              $("#Laboratory .imageSection").html($(".imageSectionSource").html());
              $("#Laboratory .imageSection #fileUploadall").attr('id','fileUpload'); 
            $("#Laboratory").show(); 
        }  else if (that.value == "4") {
            
            $(".anyform").hide();
              $("#Radiology .imageSection").html($(".imageSectionSource").html());
              $("#Radiology .imageSection #fileUploadall").attr('id','fileUpload'); 
            $("#Radiology").show(); 
         }  
    }
function delImgUp(id){ 	
        $("#imgcon_"+id).remove();


	$("#hidImg_"+id).remove();
}  

function validateForm() { return true;/*
    var hidImg =$('[name="hidImg[]"]').length;
    if (hidImg <=0) {
        alert("المرفقات مطلوبة");
        return false;
    }*/
}
</script>



<style>
#msg ,#msg p{
	color:red;
	}
.loading_div {
     text-align: center;	
    height:200px;
    width:200px;
	}
.progress-pa {
    width: 300px;
   padding:5px ;
    display: inline-block;
    height: 100px;
    margin-top: 0px;
    position: absolute;
    top: 50%;
    right: 0px;
    left: 0px;
    margin-right: auto;
    margin-left: auto;
background:#efefef;
padding-top: 12px;
border-radius: 5px;
   
}
.loading_div .progress-co{
    width: 200px;
    display: inline-block;
    height: 22px;
    margin-top: 0px; 
    margin-right: auto;
    margin-left: auto;
	}

.loading_div .progress_word
{
   color:#000;
}

.loading_div .progress{
    height: 20px;
}



#msg2 ,#msg2 p{
	color:red;
	}
.loading_div2 {
     text-align: center;	
    height:200px;
    width:200px;
	}
.progress-pa2 {
    width: 300px;
   padding:5px ;
    display: inline-block;
    height: 100px;
    margin-top: 0px;
    position: absolute;
    top: 50%;
    right: 0px;
    left: 0px;
    margin-right: auto;
    margin-left: auto;
background:#efefef;
padding-top: 12px;
border-radius: 5px;
   
}
.loading_div2 .progress-co2{
    width: 200px;
    display: inline-block;
    height: 22px;
    margin-top: 0px; 
    margin-right: auto;
    margin-left: auto;
	}

.loading_div2 .progress_word2
{
   color:#000;
}

.loading_div2 .progress2{
    height: 20px;
}




#msg3 ,#msg3 p{
	color:red;
	}
.loading_div3 {
     text-align: center;	
    height:200px;
    width:200px;
	}
.progress-pa3 {
    width: 300px;
   padding:5px ;
    display: inline-block;
    height: 100px;
    margin-top: 0px;
    position: absolute;
    top: 50%;
    right: 0px;
    left: 0px;
    margin-right: auto;
    margin-left: auto;
background:#efefef;
padding-top: 12px;
border-radius: 5px;
   
}
.loading_div3 .progress-co3{
    width: 200px;
    display: inline-block;
    height: 22px;
    margin-top: 0px; 
    margin-right: auto;
    margin-left: auto;
	}

.loading_div3 .progress_word3
{
   color:#000;
}

.loading_div3 .progress3{
    height: 20px;
}


#msg4 ,#msg4 p{
	color:red;
	}
.loading_div4 {
     text-align: center;	
    height:200px;
    width:200px;
	}
.progress-pa4 {
    width: 300px;
   padding:5px ;
    display: inline-block;
    height: 100px;
    margin-top: 0px;
    position: absolute;
    top: 50%;
    right: 0px;
    left: 0px;
    margin-right: auto;
    margin-left: auto;
background:#efefef;
padding-top: 12px;
border-radius: 5px;
   
}
.loading_div4 .progress-co4{
    width: 200px;
    display: inline-block;
    height: 22px;
    margin-top: 0px; 
    margin-right: auto;
    margin-left: auto;
	}

.loading_div4 .progress_word4
{
   color:#000;
}

.loading_div4 .progress4{
    height: 20px;
}

#msg5 ,#msg5 p{
	color:red;
	}
.loading_div5 {
     text-align: center;	
    height:200px;
    width:200px;
	}
.progress-pa5 {
    width: 300px;
   padding:5px ;
    display: inline-block;
    height: 100px;
    margin-top: 0px;
    position: absolute;
    top: 50%;
    right: 0px;
    left: 0px;
    margin-right: auto;
    margin-left: auto;
background:#efefef;
padding-top: 12px;
border-radius: 5px;
   
}
.loading_div5 .progress-co5{
    width: 200px;
    display: inline-block;
    height: 22px;
    margin-top: 0px; 
    margin-right: auto;
    margin-left: auto;
	}

.loading_div5 .progress_word5
{
   color:#000;
}

.loading_div5 .progress5{
    height: 20px;
}
	p.danger {
		color:red
	}
.single-blog-post .text-holder {
    z-index:auto;
}	
.modal-dds h4 , .modal-dds p {
    line-height:40px;
}
.modal-dds .modal-body h4 ,.modal-dds h4 {
    color:#000;
}

</style>
<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>

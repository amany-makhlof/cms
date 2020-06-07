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
	                <h1><?=lang('am_idea')?> </h1>
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
                                <li class="active"> <?=lang('am_idea')?> </li>
                            </ul>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<!--Start Checkout area-->
<section class="checkout-area">
    <div class="container">

                    <form method="post" action="<?= site_url('home/insertIdea');?>" onsubmit="return validateForm()" >
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="form billing-info">
                    <div class="sec-title">
                        <h2><?=lang('am_Personal_data')?></h2>
                        <span class="border"></span>
                    </div>
                       
                                              <?php echo validation_errors('<div class="error">', '</div>');

?>
											  <?php if($this->session->flashdata('msg')){  
                                                         echo $this->session->flashdata('msg');  
                                                    }?>
                        <div class="row">

                            <div class="col-md-4">
                                <div class="field-label"> <?=lang('am_full_name')?><small> <?=lang('am_Quadrant')?> </small> *</div>
                                <div class="field-input">
                                    <input type="text" name="full_name"  value="<?php echo set_value('full_name'); ?>" data-validation="required  length" 
                                                                               data-validation-length="2-140">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="field-label"><?=lang('am_gender')?> *</div>
                                <div class="field-input">
                                    <select name="gender" data-validation="required">
                                        <option  disabled selected ><?=lang('am_choose')?> </option>
                                    	<option value="1"  <?php echo set_select('gender','1', !strcmp($gender,"1") ? TRUE : FALSE); ?>><?=lang('am_male')?> </option>
                                    	<option value="2" <?php echo set_select('gender','2', !strcmp($gender,"2") ? TRUE : FALSE); ?> ><?=lang('am_female')?> </option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="field-label"><?=lang('am_age')?>  *</div>
                                <div class="field-input">
                                    <input type="text" name="age" class="txtboxToFilter" data-validation="required number  length" 
                                                                               data-validation-length="1-5" value="<?php echo set_value('age'); ?>" >
                                </div>
                            </div>
                            <div class="clearfix"></div> 
                             
                            
                            <div class="col-md-4">
                                <div class="field-label"> <?=lang('am_Educational')?>  *</div>
                                <div class="field-input">
                                    <input type="text" name="Educational"  value="<?php echo set_value('Educational'); ?>"  data-validation="required    length" 
                                                                               data-validation-length="1-200">
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="field-label"> <?=lang('am_Graduation_Year')?>*</div>
                                <div class="field-input">
                                    <input type="text" name="Graduation_Year" class="txtboxToFilter"  value="<?php echo set_value('am_Graduation_Year'); ?>"  data-validation="required  number  length" 
                                                                               data-validation-length="3-5">
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="field-label">  <?=lang('am_Position_recruitment')?> *</div>
                                <div class="field-input">
                                    <input type="text" name="recruitment"  value="<?php echo set_value('am_Position_recruitment'); ?>"  data-validation="required  length" 
                                                                               data-validation-length="3-200" >  
                                </div>
                            </div>
                            <div class="clearfix"></div> 
                             
                            
                            <div class="col-md-4">

                                <div class="field-label"> <?=lang('am_Social_status')?>*</div>
                                <div class="field-input">
                                    <select name="Social_status" data-validation="required " >
                                        <option disabled selected><?=lang('am_choose')?> </option>
                                    	<option value="2" <?php echo set_select('Social_status','2', !strcmp($Social_status,"2") ? TRUE : FALSE); ?> > <?=lang('am_single')?></option>
                                    	<option value="1" <?php echo set_select('Social_status','1', !strcmp($Social_status,"1") ? TRUE : FALSE); ?>>  <?=lang('am_married')?></option>
                                    </select>
                                </div>
                            </div>
                             <div class="col-md-4">

                                <div class="field-label"> <?=lang('am_Governorate')?>*</div>
                                <div class="field-input">
                                    <select name="Governorate"  data-validation="required ">
                                        <option disabled selected><?=lang('am_choose')?> </option>
                                    	<option value="1" <?php echo set_select('Governorate','1', !strcmp($Governorate,"1") ? TRUE : FALSE); ?>> <?=lang('Alexandria')?></option>
                                    	<option value="2" <?php echo set_select('Governorate','2', !strcmp($Governorate,"2") ? TRUE : FALSE); ?>>  <?=lang('Aswan')?></option>
                                    	<option value="3"   <?php echo set_select('Governorate','3', !strcmp($Governorate,"3") ? TRUE : FALSE); ?>>  <?=lang('Asyut')?></option>
                                    	<option value="4" <?php echo set_select('Governorate','4', !strcmp($Governorate,"4") ? TRUE : FALSE); ?>>  <?=lang('Beheira')?></option>
                                    	<option value="5" <?php echo set_select('Governorate','5', !strcmp($Governorate,"5") ? TRUE : FALSE); ?>>  <?=lang('Beni_Suef')?></option>
                                    	<option value="6" <?php echo set_select('Governorate','6', !strcmp($Governorate,"6") ? TRUE : FALSE); ?>>  <?=lang('Cairo')?></option>
                                    	<option value="7" <?php echo set_select('Governorate','7', !strcmp($Governorate,"7") ? TRUE : FALSE); ?>>  <?=lang('Dakahlia')?></option>
                                    	<option value="8" <?php echo set_select('Governorate','8', !strcmp($Governorate,"8") ? TRUE : FALSE); ?>>  <?=lang('Damietta')?></option>
                                    	<option value="9" <?php echo set_select('Governorate','9', !strcmp($Governorate,"9") ? TRUE : FALSE); ?>>  <?=lang('Faiyum')?></option>
                                    	<option value="10" <?php echo set_select('Governorate','10', !strcmp($Governorate,"10") ? TRUE : FALSE); ?>>  <?=lang('Gharbia')?></option>
                                    	<option value="11" <?php echo set_select('Governorate','11', !strcmp($Governorate,"11") ? TRUE : FALSE); ?>>  <?=lang('Giza')?></option>
                                    	<option value="12" <?php echo set_select('Governorate','12', !strcmp($Governorate,"12") ? TRUE : FALSE); ?>>  <?=lang('Ismailia')?></option>
                                    	<option value="13" <?php echo set_select('Governorate','13', !strcmp($Governorate,"13") ? TRUE : FALSE); ?>>  <?=lang('Kafr_Sheikh')?></option>
                                    	<option value="14" <?php echo set_select('Governorate','14', !strcmp($Governorate,"14") ? TRUE : FALSE); ?>>  <?=lang('Luxor')?></option>
                                    	<option value="15" <?php echo set_select('Governorate','15', !strcmp($Governorate,"15") ? TRUE : FALSE); ?>>  <?=lang('Matruh')?></option>
                                    	<option value="16" <?php echo set_select('Governorate','16', !strcmp($Governorate,"16") ? TRUE : FALSE); ?>>  <?=lang('Minya')?></option>
                                    	<option value="17" <?php echo set_select('Governorate','17', !strcmp($Governorate,"17") ? TRUE : FALSE); ?>>  <?=lang('Monufia')?></option>
                                    	<option value="18" <?php echo set_select('Governorate','18', !strcmp($Governorate,"18") ? TRUE : FALSE); ?>>  <?=lang('New_Valley')?></option>
                                    	<option value="19" <?php echo set_select('Governorate','19', !strcmp($Governorate,"19") ? TRUE : FALSE); ?>>  <?=lang('North_Sinai')?></option>
                                    	<option value="20" <?php echo set_select('Governorate','20', !strcmp($Governorate,"20") ? TRUE : FALSE); ?>>  <?=lang('Port_Said')?></option>
                                    	<option value="21" <?php echo set_select('Governorate','21', !strcmp($Governorate,"21") ? TRUE : FALSE); ?>>  <?=lang('Qalyubia')?></option>
                                    	<option value="22" <?php echo set_select('Governorate','22', !strcmp($Governorate,"22") ? TRUE : FALSE); ?>>  <?=lang('Qena')?></option>
                                    	<option value="23" <?php echo set_select('Governorate','23', !strcmp($Governorate,"23") ? TRUE : FALSE); ?>>  <?=lang('Red_Sea')?></option>
                                    	<option value="24" <?php echo set_select('Governorate','24', !strcmp($Governorate,"24") ? TRUE : FALSE); ?>>  <?=lang('Sharqia')?></option>
                                    	<option value="25" <?php echo set_select('Governorate','25', !strcmp($Governorate,"25") ? TRUE : FALSE); ?>>  <?=lang('Sohag')?></option>
                                    	<option value="26" <?php echo set_select('Governorate','26', !strcmp($Governorate,"26") ? TRUE : FALSE); ?>>  <?=lang('South_Sinai')?></option>
                                    	<option value="27" <?php echo set_select('Governorate','27', !strcmp($Governorate,"27") ? TRUE : FALSE); ?>>  <?=lang('Suez')?></option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="field-label"> <?=lang('adderss')?> *</div>
                                <div class="field-input">
                                    <input type="text" name="adderss"  value="<?php echo set_value('adderss'); ?>"  data-validation="required  length" 
                                                                               data-validation-length="1-240">
                                </div>
                            </div>
                            <div class="clearfix"></div> 
                            
                            <div class="col-md-4">
                                <div class="field-label"><?=lang('mobile')?> *</div>
                                <div class="field-input">
                                    <input type="text" name="mobile" value="<?php echo set_value('mobile'); ?>" class="txtboxToFilter" data-validation="required number  length" 
                                                                               data-validation-length="6-15">
                                </div>
                            </div>
                             
                            
                            <div class="col-md-4">
                                <div class="field-label"> <?=lang('email')?> *</div>
                                <div class="field-input">
                                    <input type="text" name="email"  value="<?php echo set_value('email'); ?>"  data-validation="required   email" >
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="field-label">  <?=lang('am_Current_Position')?>  * <i class="fa fa-info-circle" data-container="body" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?=lang('am_idea_info_1')?>"></i></div>
                                <div class="field-input">
                                    <input type="text" name="Current_Position"  value="<?php echo set_value('Current_Position'); ?>"  data-validation="required   length" 
                                                                               data-validation-length="1-250">
                                </div>
                            </div>
                            <div class="clearfix"></div> 
                            
                            <div class="col-md-4">
                                <div class="field-label"> <?=lang('am_Monthly_Salary')?>    </div>
                                <div class="field-input">
                                    <input type="text" name="Monthly_Salary" class="txtboxToFilter" value="<?php echo set_value('Monthly_Salary'); ?>" >
                                </div>
                            </div>
                             
                            
                            <div class="col-md-4">
                                <div class="field-label"> <?=lang('am_company_owner')?> <i class="fa fa-info-circle" data-container="body" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?=lang('am_idea_info_2')?>"></i> </div>
                                <div class="field-input">
                                    <input type="text" name="company_owner"  value="<?php echo set_value('company_owner'); ?>">
                                </div>
                            </div>
                            
                            <div class="clearfix"></div>
                            
                            <div class="col-md-6">
                                <div class="field-label">  <?=lang('am_achievements')?>   </div>
                                <div class="field-input">
									<textarea name="achievements"><?php echo set_value('achievements'); ?></textarea>
                                </div>
                            </div>
                                                        
                            <div class="col-md-6">
                                <div class="field-label">  <?=lang('am_try_achieve')?>   </div>
                                <div class="field-input">
									<textarea name="try_achieve"><?php echo set_value('try_achieve'); ?></textarea>
                                </div>
                            </div>
                            
                            <div class="clearfix"></div>
                              
                        </div>    
                        
                 </div>    
            </div>
            
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="form billing-info">
                    <div class="sec-title">
                        <h2> <?=lang('am_my_idea')?>    </h2>
                        <span class="border"></span>
                    </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                 <p>   <?=lang('am_idea_info_3')?>  </p>
                            </div>  
                            
                            
                              
                            <div class="col-md-4">
                                <div class="field-label">  <?=lang('am_thought')?>  </div>
                                <div class="field-input">
									<select onchange="otherCheck(this);" name="thought">
                                                                                <option disabled selected><?=lang('am_choose')?> </option>
										<option value="1"  <?php echo set_select('thought','1', !strcmp($thought,"1") ? TRUE : FALSE); ?>><?=lang('am_Services')?>  </option>
										<option value="2" <?php echo set_select('thought','2', !strcmp($thought,"2") ? TRUE : FALSE); ?>><?=lang('am_Education')?>  </option>
										<option value="3" <?php echo set_select('thought','3', !strcmp($thought,"3") ? TRUE : FALSE); ?>><?=lang('am_environment')?>  </option>
										<option value="4" <?php echo set_select('thought','4', !strcmp($thought,"4") ? TRUE : FALSE); ?>><?=lang('am_energy')?>  </option>
										<option value="5" <?php echo set_select('thought','5', !strcmp($thought,"5") ? TRUE : FALSE); ?>><?=lang('am_Technology')?>  </option>
										<option value="6" <?php echo set_select('thought','6', !strcmp($thought,"6") ? TRUE : FALSE); ?>><?=lang('am_Other')?>  </option>
 									</select>
                                </div>
                            </div> 
                                     <div class="col-md-2">
                                <div class="field-label"> </br>  </div>

                                 <div class="field-input">
					 <input type="text" name="thoughtOther" style="display:none" id="thoughtOther" value="<?php echo set_value('thoughtOther'); ?>" data-validation="   length" 
                                                                               data-validation-length="0-215">
                                </div>
                            </div>   
<div class="col-md-4">
											<div class="field-label"> <?=lang('project_name')?>  *</div>
											<div class="field-input">
												 


<input type="text" name="project_name"  value="<?php echo set_value('project_name'); ?>" data-validation="required  length" 
                                                                               data-validation-length="2-140">

											</div>
										</div>
<div class="clearfix"></div>

                            <div class="col-md-4">
                                <div class="field-label">    <?=lang('am_targeted_people')?>  </div>
                                <div class="field-input">
									<input type="text" name="targeted_people"  value="<?php echo set_value('targeted_people'); ?>" data-validation="   length" 
                                                                               data-validation-length="0-215">
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="field-label">    <?=lang('am_required_project')?> </div>
                                <div class="field-input">
									<input type="text" name="required_project"  value="<?php echo set_value('required_project'); ?>"  data-validation="   length" 
                                                                               data-validation-length="0-215">
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="field-label"> <?=lang('am_preparation_project')?> </div>
                                <div class="field-input">
									<input type="text" name="preparation_project"    value="<?php echo set_value('preparation_project'); ?>" data-validation="   length" 
                                                                               data-validation-length="0-215">
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="field-label">  <?=lang('am_apply_project')?> </div>
                                <div class="field-input">
									<textarea name="apply_project"> <?php echo set_value('apply_project'); ?></textarea>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="field-label"> <?=lang('am_Interest_project')?> </div>
                                <div class="field-input">
									<textarea name="Interest_project"> <?php echo set_value('Interest_project'); ?></textarea>
                                </div>
                            </div>
                           
                            <div class="col-md-6">
                                <div class="field-label">   <?=lang('am_Interest_project_Global')?></div>
                                <div class="field-input">
									<textarea name="Interest_project_Global"> <?php echo set_value('Interest_project_Global'); ?></textarea>
                                </div>
                            </div>
                           
                            <div class="col-md-12">
                                <div class="field-label"><?=lang('am_project_Overview')?>  </div>
                                <div class="field-input">
									<textarea name="project_Overview"> <?php echo set_value('project_Overview'); ?></textarea>
                                </div>
                            </div>
                           
                            <div class="col-md-6">
                                <div class="field-label"><?=lang('am_project_seasonal')?>   </div>
                                <div class="field-input">
									<textarea name="project_seasonal"> <?php echo set_value('project_seasonal'); ?></textarea>
                                </div>
                            </div>
                           
                            <div class="col-md-6">
                                <div class="field-label">  <?=lang('am_project_success')?>  </div>
                                <div class="field-input">
									<textarea name="project_success"> <?php echo set_value('project_success'); ?></textarea>
                                </div>
                            </div>
                           
                            <div class="col-md-6">
                                <div class="field-label">  <?=lang('am_project_Potential')?>  </div>
                                <div class="field-input">
									<textarea name="project_Potential"><?php echo set_value('project_Potential'); ?></textarea>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="field-label">  <?=lang('am_num_Specializations')?> * </div>
                                <div class="field-input">
								 
                                    <input type="text" value="<?php echo set_value('num_Specializations'); ?>" 
name="num_Specializations"   class="txtboxToFilter"
data-validation="required   length" 
                                                                               data-validation-length="1-515" />
                                </div>
                            </div>
                            
                            
                            <div class="col-md-6">
                                <div class="field-label">    <?=lang('am_think_project')?></div>
                                <div class="field-input">
									<textarea name="think_project" ><?php echo set_value('think_project'); ?></textarea>
                                </div>
                            </div>
                            
                            <div class="col-md-12 form-group">
                                <div class="field-label">  <?=lang('am_attach_project')?>  </div>
                                <div class="field-input">
									<input type="file"  id="fileUpload" >
                                    <div class="imageSection"> 
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
                            </div>
                            
                            
                            <div class="col-md-12 at">
                                 <p>   <?=lang('am_idea_info_4')?>  </p>
                            </div>  
                            
                            <div class="col-md-12">
								<div class="placeorder-button text-left">
									<button class="thm-btn bg-clr1" type="submit"> <?=lang('am_Submit_now')?>   </button>
								</div>
                            </div>
                            
                            
                        </div>    
                        
                </div>    
            </div>
            
        </div>
        
                    </form>
    </div>
</section>         
<!--End Checkout area-->
	
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
	$("#loadingDiv").hide();
    	 $('#fileUpload').change(function(e) {   
					$("#loadingDiv").show();
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
											
											$("#loadingDiv").hide();
											if(data.msg_type == 0 )
											{  
												$("#msg").html(data.msg_upload) ; 
											}
											else if(data.msg_type == 1 )
											{ 
												var newImg = data.base+'upload/'+data.img;
												 

$('.imageSection ').append('<input type="hidden" name="hidImg[]" id="hidImg_'+parseInt($('input[name="hidImg[]"]').length)+1+'" value="'+data.img+'">');

												$(".imageSection #msg").html('');
												$( ".imageSection #div_img" ).append('<div id="imgcon_'+parseInt($('input[name="hidImg[]"]').length)+1+'"><a href="'+newImg+'" > '+newImg+' </a><button class="uploadclose" onClick="delImgUp('+parseInt($('input[name="hidImg[]"]').length)+1+');" type="button">X</button></div>');
											}
										}
						});
				/*==============================================================================================*/
                }); 

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
function delImgUp(id){ 	
        $("#imgcon_"+id).remove();
	$("#hidImg_"+id).remove();
}  
 
  function otherCheck(that) {
        if (that.value == "6") {
            
            document.getElementById("thoughtOther").style.display = "block";
        } else {
            document.getElementById("thoughtOther").style.display = "none";
        }
    }

function validateForm() {
    var hidImg =$('[name="hidImg[]"]').length;
    if (hidImg <=0) {
        alert("المرفقات مطلوبة");
        return false;
    }
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
</style>
<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>
<?php extract($dataArray);
  ?>

<main class="main-content p-5" role="main">
    <div class="row">
            <div class="col-md-12">
                    <h1><?=lang('am_idea')?> </h1>
            </div>
    </div>
    <div class="row mb-5">
            <div class="col-md-12">
                    <div class="card">
                            <div class="card-body">
                                    <div class="row">
                                    


                    <form method="post" action="<?= site_url('home/insertIdea');?>">
        
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="form billing-info">
                    <div class="sec-title">
                        <h2><?=lang('am_Personal_data')?></h2>
                        <span class="border"></span>
                    </div>
                       
                                              <?php echo validation_errors('<div class="error">', '</div>'); ?>
											  <?php if($this->session->flashdata('msg')){  
                                                         echo $this->session->flashdata('msg');  
                                                    }?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="field-label"> <?=lang('am_full_name')?><small> <?=lang('am_Quadrant')?> </small> *</div>
                                <div class="field-input">
                                   <?=$info->full_name?> 
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="field-label"><?=lang('am_gender')?> *</div>
                                <div class="field-input">
                                   <?php 
								   
								   switch($info->gender){
									   case 1:
									        echo lang('am_male');
									   		break;
									   case 2:
									        echo lang('am_female');
									   		break;
									  default:
									   }?>  
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="field-label"><?=lang('am_age')?>  *</div>
                                <div class="field-input">
                                    <?=$info->age?> 
                                 </div>
                            </div>
                            
                            <div class="clearfix"></div>
                            
                            <div class="col-md-12">
                                <div class="field-label"> <?=lang('am_Educational')?>  *</div>
                                <div class="field-input">
                                     <?=$info->Educational?> 
                                 </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="field-label"> <?=lang('am_Graduation_Year')?>*</div>
                                <div class="field-input">
                                     <?=$info->Graduation_Year?>  
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="field-label">  <?=lang('am_Position_recruitment')?> *</div>
                                <div class="field-input">
                                     <?=$info->Position_recruitment?>  
                                </div>
                            </div>
                            
                            <div class="clearfix"></div>
                            
                            <div class="col-md-12">

                                <div class="field-label"> <?=lang('am_Social_status')?>*</div>
                                <div class="field-input">
                                       <?php 
								   
								   switch($info->Social_status){
									   case 1:
									        echo lang('am_married');
									   		break;
									   case 2:
									        echo lang('am_single');
									   		break;
									  default:
									   }?>   
                                </div>
                            </div>
                            
                            <div class="col-md-12">

                                <div class="field-label"> <?=lang('Governorate')?>*</div>
                                <div class="field-input">
                                       <?php 
								   
								   switch($info->Governorate){
									   case 1:
									        echo lang('Alexandria');
									   		break;
									   case 2:
									        echo lang('Aswan');
									   		break;
									   case 3:
									        echo lang('Asyut');
									   		break;
									   case 4:
									        echo lang('Beni_Suef');
									   		break;
									   case 5:
									        echo lang('am_single');
									   		break;
									   case 6:
									        echo lang('Cairo');
									   		break;
									   case 7:
									        echo lang('Dakahlia');
									   		break;
									   case 8:
									        echo lang('Damietta');
									   		break;
									   case 9:
									        echo lang('Faiyum');
									   		break;
									   case 10:
									        echo lang('Gharbia');
									   		break;
									   case 11:
									        echo lang('Giza');
									   		break;
									   case 12:
									        echo lang('Ismailia');
									   		break;
									   case 13:
									        echo lang('Kafr_Sheikh');
									   		break;
									   case 14:
									        echo lang('Luxor');
									   		break;
									   case 15:
									        echo lang('Matruh');
									   		break;
									   case 16:
									        echo lang('Minya');
									   		break;
									   case 17:
									        echo lang('Monufia');
									   		break;
									   case 18:
									        echo lang('New_Valley');
									   		break;
									   case 19:
									        echo lang('North_Sinai');
									   		break;
									   case 20:
									        echo lang('Port_Said');
									   		break;
									   case 21:
									        echo lang('Qalyubia');
									   		break;
									   case 22:
									        echo lang('Qena');
									   		break;
									   case 23:
									        echo lang('Red_Sea');
									   		break;
									   case 24:
									        echo lang('Sharqia');
									   		break;
									   case 25:
									        echo lang('Sohag');
									   		break;
									   case 26:
									        echo lang('South_Sinai');
									   		break;
									   case 27:
									        echo lang('Suez');
									   		break; 
									  default:
									   }?>

   
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="field-label"> <?=lang('adderss')?> *</div>
                                <div class="field-input">
                                     <?=$info->adderss?>   
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="field-label"><?=lang('mobile')?> *</div>
                                <div class="field-input">
                                     <?=$info->mobile?>   
                                </div>
                            </div>
                            
                            <div class="clearfix"></div>
                            
                            <div class="col-md-12">
                                <div class="field-label"> <?=lang('email')?> *</div>
                                <div class="field-input">
                                     <?=$info->email?>   
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="field-label">  <?=lang('am_Current_Position')?>  *</div>
                                <div class="field-input">
                                     <?=$info->Current_Position?>    
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="field-label"> <?=lang('am_Monthly_Salary')?>    </div>
                                <div class="field-input">
                                     <?=$info->Monthly_Salary?>     
                                </div>
                            </div>
                            
                            <div class="clearfix"></div>
                            
                            <div class="col-md-12">
                                <div class="field-label"> <?=lang('am_company_owner')?>  </div>
                                <div class="field-input">
                                     <?=$info->company_owner?>      
                                </div>
                            </div>
                            
                            <div class="clearfix"></div>
                            
                            <div class="col-md-12">
                                <div class="field-label">  <?=lang('am_achievements')?>   </div>
                                <div class="field-input">
                                     <?=$info->achievements?>       
                                </div>
                            </div>
                                                        
                            <div class="col-md-12">
                                <div class="field-label">  <?=lang('am_try_achieve')?>   </div>
                                <div class="field-input">
                                     <?=$info->try_achieve?>       
                                 </div>
                            </div>
                            
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
                                <div class="field-label">  <?=lang('am_thought')?>  </div>
                                <div class="field-input"> 
                                  <?php 
								   
								   switch($info->thought){
									   case 1:
									        echo lang('am_Services');
									   		break;
									   case 2:
									        echo lang('am_Education');
									   		break;
									   case 3:
									        echo lang('am_environment');
									   		break;
									   case 4:
									        echo lang('am_energy');
									   		break;
									   case 5:
									        echo lang('am_Technology');
									   		break;
									   case 6:
									        echo lang('am_Other');
									   		break;
 									  default:
									   } if($thought==6){echo $thoughtOther;}?>    
                                </div>
                            </div> 
                                      
                            <div class="col-md-12">
                                <div class="field-label">    <?=lang('am_targeted_people')?>  </div>
                                <div class="field-input">
                                     <?=$info->targeted_people?>     
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="field-label">    <?=lang('am_required_project')?> </div>
                                <div class="field-input">
                                     <?=$info->required_project?>     
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="field-label"> <?=lang('am_preparation_project')?> </div>
                                <div class="field-input">
                                     <?=$info->preparation_project?>      
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="field-label">  <?=lang('am_apply_project')?> </div>
                                <div class="field-input">
                                     <?=$info->apply_project?>       
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="field-label"> <?=lang('am_Interest_project')?> </div>
                                <div class="field-input">
                                     <?=$info->Interest_project?>
                                 </div>
                            </div>
                           

                            <div class="col-md-12">
                                <div class="field-label">   <?=lang('am_Interest_project_Global')?></div>
                                <div class="field-input">
                                     <?=$info->Interest_project_Global?>
                                 </div>
                            </div>
                           
                            <div class="col-md-12">
                                <div class="field-label"><?=lang('am_project_Overview')?>  </div>
                                <div class="field-input">
                                     <?=$info->project_Overview?>
                                 </div>
                            </div>
                           
                            <div class="col-md-12">
                                <div class="field-label"><?=lang('am_project_seasonal')?>   </div>
                                <div class="field-input">
                                     <?=$info->project_seasonal?>
                                 </div>
                            </div>
                           
                            <div class="col-md-12">
                                <div class="field-label">  <?=lang('am_project_success')?>  </div>
                                <div class="field-input">
                                     <?=$info->project_success?>
                                 </div>
                            </div>
                           
                            <div class="col-md-12">
                                <div class="field-label">  <?=lang('am_project_Potential')?>  </div>
                                <div class="field-input">
                                     <?=$info->project_Potential?>
                                 </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="field-label">  <?=lang('am_num_Specializations')?> * </div>
                                <div class="field-input">
                                     <?=$info->num_Specializations?> 
                                </div>
                            </div>
                            
                            
                            <div class="col-md-12">
                                <div class="field-label">    <?=lang('am_think_project')?></div>
                                <div class="field-input">
                                     <?=$info->think_project?> 
                                 </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="field-label">  <?=lang('am_attach_project')?>  </div>
                                <div class="field-input">
                                     <?php
																						 $ImagePath = $info->attach; 
	 																					 $imgUser =  base_url().'upload/'.$ImagePath;
																							if(  file_exists('./upload/'.$ImagePath)&&$ImagePath!=NULL){
																								?> 
 																									<a href="<?=$imgUser?>" ><span class="fa fa-download"></span><?=$imgUser?></a>
																								  </div>
																								<?php
																							}
																				 ?>                       
                                </div>
                            </div>
                            
                            
                            
                            
                            
                        </div>    
                        
                </div>    
            </div>
            
        
                    </form>
   				 </div>
              </div>
   		 </div>
      </div>  
   </div> 
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
				    $( "#div_img" ).html('');
				    $("#hidImg").val(0);
					$("#saveBtn").prop('disabled', true);
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
										url: '<?php echo site_url('admin/cms/up_ax') ?>',
										 
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
											    $("#saveBtn").prop('disabled', true);
											}
											else if(data.msg_type == 1 )
											{ 
												var newImg = data.base+'upload/'+data.img;
												var hidImg       = $("#hidImg").val(data.img);
												$("#msg").html('');
												$( "#div_img" ).html('<div id="imgcon"><a href="'+newImg+'" ><img width="200px" src="'+newImg+'" /></a><button class="uploadclose" onClick="delImgUp();">X</button></div>');
												
											    $("#saveBtn").prop('disabled', false); 
											}
										}
						});
				/*==============================================================================================*/
                }); 
		  
});
function delImgUp(){
	$("#imgcon").remove();
	$("#hidImg").val(0);
} 
function checkImage(){
		  		if($("#hidImg").val()==0){
					$("#msg").html('+<?= lang('am_required');?>+') ;
					return false;
				}else{
					return true;
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
<?php extract($dataArray);
     $CI = &get_instance(); ?>
<main class="main-content p-5" role="main">
    <div class="row">
            <div class="col-md-12">
                    <h1> <?=  $Dep->Name ;
	     					  
						?>
                    	
                     </h1>
            </div>
    </div>
    <div class="row mb-5">
            <div class="col-md-12">
                    <div class="card">
                            <div class="card-body">
                                    <div class="row">
                                            <div class="col-lg-12">
                                              <?php echo validation_errors('<div class="error">', '</div>'); ?>
											  <?php if($CI->session->flashdata('msg')){  
                                                         echo $CI->session->flashdata('msg');  
                                                    }?>
                                                <form action="<?= site_url('admin/Cms/EditCmsItem_contact');?>" method="post" >
                                    			
                                                            <input name="Token" value="<?=$info->Token;?>" type="hidden" >
                                                        <div class="row">
                                                             <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                         <div class="form-group">
                                                                        <label><?=lang('am_title')?></label>
                                                                        <input 
                                                                               class="form-control "
                                                                               type="text" name="title" 
                                                                               data-validation="required  length" 
                                                                               data-validation-length="3-140"
                                                                               value="<?=$info->Title ;?>"
                                                                               >
                                                                </div>
                                                            </div>
                                                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                        <label><?=lang('am_title_en')?></label>
                                                                        <input 
                                                                               class="form-control "
                                                                               type="text" name="title_en" 
                                                                               data-validation="required  length" 
                                                                               data-validation-length="3-140"
                                                                               value="<?=$info->Title_en ;?>"
                                                                              >
                                                                </div>
                                                            </div>
                                                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                        <label><?=lang('phone')?></label>
                                                                        <input 
                                                                               class="form-control dir-ds"
                                                                               type="tel" name="content" 
                                                                               data-validation="required   length" 
                                                                               data-validation-length="5-140"
                                                                               value="<?=$info->Content ;?>"
                                                                              >
                                                                 
                                                                </div>
                                                            </div>
                                                            
                                                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                        <label><?=lang('email')?></label>
                                                                         <input 
                                                                               class="form-control "
                                                                               type="email" name="content_en" 
                                                                               data-validation="required  email" 
                                                                               data-validation-length="3-140"
                                                                               value="<?=$info->Content_en ;?>">
                                                                        
                                                            
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 file-upload">
                                                                  <label><?=lang('am_image');?></label>

                                                                 <div class="col-lg-12 file-upload-block" dir="rtl">
                                                                    <input type="file" id="fileUploadSmall" class="input03" />
                                                                    <label>upload image </label> <i class="fa fa-upload"></i>
																 </div>
                                                                  <div class="col-lg-12 ">                                                         
                                                                               <input  name ="hidImgSmall" id ="hidImgSmall" data-validation="required  length" 
                                                                               data-validation-length="9-250"  type="hidden" value="<?=$info->ImagePathSmall?>" />
                                                                            <span id="msgSmall"></span>
                                                                            <div id="div_imgSmall" class="row">
                                                                              <?php
																						 $ImagePath = $info->ImagePathSmall; 
																						 $imgUser =  base_url().'upload/'.$ImagePath;
																						 if(  file_exists('./upload/'.$ImagePath)&&$ImagePath!=''){
																								?> 
																								 <div class="images-upload" id="imgconSmall">
																								    <div class="profile-picture bg-gradient bg-primary has-message float-right">
																									<a href="<?=$imgUser?>" ><img src="<?=$imgUser?>" width="44" height="44"></a>
																									 </div>
																									
																									<button class="uploadclose" onClick="delImgUpSmall();">X</button>
																								  </div>
																								<?php
																							}
																				 ?>
                                                                      </div> 
                                                                  </div>
                                                                            <div id="div_loading_imgSmall">
                                                                            
                                                                                <div class="loading_divSmall" id="loadingDivSmall" >
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
                                                    
                                                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  file-upload">
                                                                  
                                                                  <label><?=lang('am_image_cover');?></label>
                                                                  <div class="col-lg-12 file-upload-block" dir="rtl">
																	 <input type="file" id="fileUpload" class="input03" />
																	 <label>upload image </label> <i class="fa fa-upload"></i>
                                                                 </div>
                                                                  <div class="col-lg-12">                                                                      
                                                                  <input name ="hidImg" id ="hidImg"  data-validation="required  length" data-validation-length="9-250"  type="hidden" value="<?=$info->ImagePath?>" />
                                                                            <span id="msg"  ></span>
                                                                            <div id="div_img" class="row">
                                                                              <?php  
																					 $ImagePath = $info->ImagePath; 
																				     $imgUser =  base_url().'upload/'.$ImagePath;
																					 if(  file_exists('./upload/'.$ImagePath)&&$ImagePath!=''){
																								?> 
                                                                                            
																								 <div id="imgcon"  class="images-upload">
																								 <div class="profile-picture bg-gradient bg-primary has-message float-right">
																									<a href="<?=$imgUser?>" ><img src="<?=$imgUser?>" width="44" height="44"></a>
																									</div>
																									<button class="uploadclose" onClick="delImgUp();">X</button>
																								  </div>
																								<?php
																					 }
																				 ?>
                                                                            </div>
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
                                                                
                                                          
                                                            <div class="form-group">
                                                                    <button class="btn btn-primary"   id="saveBtn" type="submit"> <?=lang('am_save');?> </button>
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
	$("#loadingDivSmall").hide();
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
												$( "#div_img" ).html('<div class="images-upload" id="imgcon"><div class="profile-picture bg-gradient bg-primary has-message float-right"><a href="'+newImg+'" ><img width="44px" height="44px" src="'+newImg+'" /></a></div><button class="uploadclose" onClick="delImgUp();">X</button></div>');
											    $("#saveBtn").prop('disabled', false); 
											}
										}
						});
				/*==============================================================================================*/
                }); 
    	 $('#fileUploadSmall').change(function(e) {
				    $( "#div_imgSmall" ).html('');
				    $("#hidImgSmall").val(0);
					$("#saveBtn").prop('disabled', true);
					$("#loadingDivSmall").show();
					var xhr    = new XMLHttpRequest();
					var data   = new FormData();
					jQuery.each($('#fileUploadSmall')[0].files, function(i, file) {data.append('file', file);});
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
											
											$("#loadingDivSmall").hide();
											if(data.msg_type == 0 )
											{  
												$("#msgSmall").html(data.msg_upload) ;
											    $("#saveBtn").prop('disabled', true);
											}
											else if(data.msg_type == 1 )
											{ 
												var newImg = data.base+'upload/'+data.img;
												var hidImg       = $("#hidImgSmall").val(data.img);
												$("#msgSmall").html('');
												$( "#div_imgSmall" ).html('<div class="images-upload" id="imgconSmall"><div class="profile-picture bg-gradient bg-primary has-message float-right"><a href="'+newImg+'" ><img width="44px" height="44px" src="'+newImg+'" /></a></div><button class="uploadclose" onClick="delImgUpSmall();">X</button></div>');
												
											    $("#saveBtn").prop('disabled', false); 
											}
										}
						});
				/*==============================================================================================*/
                }); 
		 $( "form" ).submit(function( event ) { 
		  		if($("#hidImg").val()==0||$("#hidImgSmall").val()==0){ 
					$("#msgAll").html('يجب ادخال جميع الصور') ;
					return false;
				}else{
					return true;
					}
		});
 
});
function delImgUp(){
	$("#imgcon").remove();
	$("#hidImg").val(0);
} 
function delImgUpSmall(){
	$("#imgconSmall").remove();
	$("#hidImgSmall").val(0);
} 
function checkImage(){
		  		
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
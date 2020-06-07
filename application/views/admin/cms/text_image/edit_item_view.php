<?php extract($dataArray); ?>
<main class="main-content p-5" role="main">
    <div class="row">
            <div class="col-md-12">
                    <h1> <?=  $Dep->Name.' / ';
	     					  $CI = &get_instance();
							  if($CI->session->userdata('language')=='english'){
								   echo $info->Title_en ;
							  }else{
 								   echo $info->Title ;
								  }  
						?>
                    	
                     </h1>
               

            </div>
    </div>
    <div class="row mb-5">
            <div class="col-md-12">
                    <div class="card">
                            <div class="card-body">
                                    <div class="row">
      <a class="btn btn-info" href="<?=site_url('admin/Cms/EditSub/rqwerewe9f7ds7548f74d56s4ا4wdfstefedasfdfd8sf5d6sf22')?>" ><?=lang('am_Edit_data').' '.lang('am_Our_Projects'); ?><span class="fa fa-edit"></span></a>
                                            <div class="col-lg-12">
                                              <?php echo validation_errors('<div class="error">', '</div>'); ?>
											  <?php if($CI->session->flashdata('msg')){  
                                                         echo $CI->session->flashdata('msg');  
                                                    }?>
                                                <form action="<?= site_url('admin/Cms/EditCmsItem_image_text');?>" method="post" >
                                    			
                                                            <input name="Token" value="<?=$info->Token;?>" type="hidden" >
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="row">
                                                              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                         <div class="form-group">
                                                                       <label><?=lang('am_title');?></label>
                                                                        <input 
                                                                               class="form-control "
                                                                               type="text" name="title" 
                                                                               value="<?=$info->Title ;?>"
                                                                               >
                                                                </div>
                                                            </div>
                                            				
                                                           <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                       <label><?=lang('am_title_en');?></label>
                                                                        <input 
                                                                               class="form-control "
                                                                               type="text" name="title_en" 
                                                                               value="<?=$info->Title_en ;?>"
                                                                              >
                                                                </div>
                                                            </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                         <div class="form-group">
                                                                       <label><?=lang('am_content');?></label>
                                                                        <textarea
                                                                               class="form-control "
                                                                              name="content"
                                                                                ><?=$info->Content;?></textarea>
                                                                </div>
                                                            </div>
                                            				
                                                           <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                       <label><?=lang('am_content_en');?></label>
                                                                       <textarea
                                                                               class="form-control "
                                                                              name="content_en"
                                                                                ><?=$info->Content_en;?></textarea>
                                                                </div>
                                                            </div> 
                                            				<div class="clearfix"></div>
                                                             <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                         <div class="form-group">
                                                         	           <label class="active"><?=lang('am_youtube');?>  </label>
                                                            		   <input 
                                                                               class="form-control "
                                                                               type="text" name="link"  
                                                                               value="<?=$info->link ;?>"
                                                                               >
                                                                </div>
                                                            </div> 

                                            				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  file-upload">
                                                                  
                                                                  <label class="col-lg-12" ><?=lang('am_image');?></label>
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
                                            			
                                                           <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  file-upload">
                                                                  
                                                                  <label class="col-lg-12" ><?=lang('am_file');?></label>
                                                                  <div class="col-lg-12 file-upload-block" dir="rtl">
																	 <input type="file" id="fileUpload2" class="input03" />
																	 <label>upload image </label> <i class="fa fa-upload"></i>
                                                                 </div>
                                                                  <div class="col-lg-12">                                                                      
                                                                  <input name ="hidImg2" id ="hidImg2"  data-validation="required  length" data-validation-length="9-250"  type="hidden" value="<?=$info->ImagePath2?>" />
                                                                            <span id="msg"  ></span>
                                                                            <div id="div_img" class="row">
                                                                              <?php  
																					 $ImagePath = $info->ImagePath2; 
																				     $imgUser =  base_url().'upload/'.$ImagePath;
																					 if(  file_exists('./upload/'.$ImagePath)&&$ImagePath!=''){
																								?> 
                                                                                            
																								 <div id="imgcon2"  class="images-upload">
																								 <div class="profile-picture bg-gradient bg-primary has-message float-right">
																									<a href="<?=$imgUser?>" ><img src="<?=$imgUser?>" width="44" height="44"></a>
																									</div>
																									<button class="uploadclose" onClick="delImgUp2();">X</button>
																								  </div>
																								<?php
																					 }
																				 ?>
                                                                            </div>
                                                                  </div> 
                                                                            <div id="div_loading_img2">
                                                                            
                                                                                <div class="loading_div2" id="loadingDiv2" >
                                                                                    <div class="progress-pa2">
                                                                                        <div class="progress-co2">
                                                                                            <div class="progress2">
                                                                                                  <div class="progress-bar2 progress-bar-striped active" role="progressbar"
                                                                                                  aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                                                                                                   0%
                                                                                                  </div>
                                                                                              </div>
                                                                                            </div>
                                                                                            <div class="progress_word2"></div>	
                                                                                    </div>
                                                                                 </div>
                                                                            </div>
                                                                </div>
                                                            <div class="col-lg-12">
                                                                    <button class="btn btn-primary" onclick="checkImage();" id="saveBtn" type="submit"> <?=lang('am_save');?> </button>
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
	$("#loadingDiv2").hide();
    	 $('#fileUpload').change(function(e) {
				    $( "#div_img" ).html('');
				    $("#hidImg").val(0); 
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
											}
											else if(data.msg_type == 1 )
											{ 
												var newImg = data.base+'upload/'+data.img;
												var hidImg       = $("#hidImg").val(data.img);
												$("#msg").html('');
												$( "#div_img" ).html('<div class="images-upload" id="imgcon"><div class="profile-picture bg-gradient bg-primary has-message float-right"><a href="'+newImg+'" ><img width="44px" height="44px" src="'+newImg+'" /></a></div><button class="uploadclose" onClick="delImgUp();">X</button></div>'); 
											}
										}
						});
				/*==============================================================================================*/
                }); 
    	 $('#fileUpload2').change(function(e) {
				    $( "#div_img2" ).html('');
				    $("#hidImg2").val(0); 
					$("#loadingDiv2").show();
					var xhr    = new XMLHttpRequest();
					var data   = new FormData();
					jQuery.each($('#fileUpload2')[0].files, function(i, file) {data.append('file', file);});
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
								$('.progress-bar2').css('width',parseInt(percentComplete*100)+'%' );
								$('.progress-bar2').attr('aria-valuenow',parseInt(percentComplete*100)+'%' );
								$('.progress-bar2').html(parseInt(percentComplete*100)+' %');
								$('.progress_word2').html($("#fileUpload2").val()); 
											//   $('#progress').val(percentComplete);$('#progresshtml').html(parseInt(percentComplete*100)+' %');
											}
									   }, false);
								
									   // Download progress
									   xhr.addEventListener("progress", function(evt){
										   if (evt.lengthComputable) {
											   var percentComplete = evt.loaded / evt.total;
											   // Do something with download progress
												$('.progress-bar2').css('width',parseInt(percentComplete*100)+'%'  );
												$('.progress-ba2r').attr('aria-valuenow',parseInt(percentComplete*100)+'%' );
												$('.progress-bar2').html(parseInt(percentComplete*100)+' %');
												$('.progress_word2').html($("#fileUpload2").val()); 
											//   $('#progress').val(percentComplete);$('#progresshtml').html(parseInt(percentComplete*100)+' %');
										   }
									   }, false);
								
									   return xhr;
									}, 
										url: '<?php echo site_url('admin/cms/up_ax_video') ?>',
										 
										data: data,
										cache: false,
										contentType: false,
										processData: false,
										type: 'POST',
										beforeSend : function()
										{
											
										},  
										success: function(data){
											
											$("#loadingDiv2").hide();
											if(data.msg_type == 0 )
											{  
												$("#msg2").html(data.msg_upload) ; 
											}
											else if(data.msg_type == 1 )
											{ 
												var newImg = data.base+'upload/'+data.img;
												var hidImg       = $("#hidImg2").val(data.img);
												$("#msg2").html('');
												$( "#div_img2" ).html('<div class="images-upload" id="imgcon2"><div class="profile-picture bg-gradient bg-primary has-message float-right"><video width="320" height="240" controls><source  src="'+newImg+'" ></video> </div><button class="uploadclose" onClick="delImgUp2();">X</button></div>');
											  
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
function delImgUp2(){
	$("#imgcon2").remove();
	$("#hidImg2").val(0);
} 
function checkImage(){
		  		 
					return true;
					 
} 
</script>



<style>
#msg ,#msg p,#msg2 ,#msg2 p{
	color:red;
	}
.loading_div ,.loading_div2{
     text-align: center;	
    height:200px;
    width:200px;
	}
.progress-pa ,.progress-pa2 {
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
.loading_div .progress-co,.loading_div2 .progress-co2{
    width: 200px;
    display: inline-block;
    height: 22px; 
    margin-top: 0px; 
    margin-right: auto;
    margin-left: auto;
	}

.loading_div .progress_word,.loading_div2 .progress_word2
{
   color:#000;
}

.loading_div .progress,.loading_div2 .progress2{
    height: 20px;
}
</style>
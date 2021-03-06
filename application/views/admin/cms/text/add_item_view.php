<?php extract($dataArray); ?>
<main class="main-content p-5" role="main">
    <div class="row">
            <div class="col-md-12">
                    <h1> <?=lang('am_add_item').$Dep->Name?> </h1>
            </div>
    </div>
    <div class="row mb-5">
            <div class="col-md-12">
                    <div class="card">
                            <div class="card-body">
                                    <div class="row">
                                            <div class="col-lg-12">
                                              <?php echo validation_errors('<div class="error">', '</div>'); ?>
											  <?php if($this->session->flashdata('msg')){  
                                                         echo $this->session->flashdata('msg');  
                                                    }?>
                                                <form action="<?= site_url('admin/Cms/addNewItem');?>" method="post" >
                                    			
                                                            <input name="depToken" value="<?=$Dep->Token;?>" type="hidden" >
                                                        <div class="row">
                                                            
                                                              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                         <div class="form-group">
                                                                        <input 
                                                                               class="form-control "
                                                                               type="text" name="title" 
                                                                               data-validation="required  length" 
                                                                               data-validation-length="3-140"
                                                                               placeholder="<?=lang('am_title');?> *"
                                                                               >
                                                                </div>
                                                            </div>
                                                           <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                        <input 
                                                                               class="form-control "
                                                                               type="text" name="title_en" 
                                                                               data-validation="required  length" 
                                                                               data-validation-length="3-140"
                                                                               placeholder="<?=lang('am_title_en');?> *"
                                                                              >
                                                                </div>
                                                            </div>
                                                             <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                        <textarea class="form-control "
                                                                               name="content" 
                                                                               data-validation="required  length" 
                                                                               data-validation-length="9-350"
                                                                               placeholder="<?=lang('am_content');?> *" > </textarea>
                                                                </div>
                                                            </div>
                                                           <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                        <textarea class="form-control "
                                                                               name="content_en" 
                                                                               data-validation="required  length" 
                                                                               data-validation-length="9-350"
                                                                               placeholder="<?=lang('am_content_en');?> *" > </textarea>
                                                            
                                                                </div>
                                                            </div>
                                                           <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                  <div class="col-lg-2" dir="rtl">
                                                                 <input type="file" id="fileUpload" class="input03"      />
                                                                  
                                                                 </div>
                                                                  <div class="col-lg-8">                                                                      <input name ="hidImg" id ="hidImg"
        
                                                                               data-validation="required  length" 
                                                                               data-validation-length="9-250"  type="hidden" value="0" />
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
                                                            <div class="col-lg-12">
                                                                    <button class="btn btn-primary" onclick="checkImage();" id="saveBtn" type="submit"> <?=lang('am_save');?> </button>
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
		 $( "form" ).submit(function( event ) {
		  		if($("#hidImg").val()==0){
					$("#msg").html('+<?= lang('am_required');?>+') ;
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
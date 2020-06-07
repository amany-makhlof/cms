<?php extract($dataArray); ?>
<main class="main-content p-5" role="main">
    <div class="row">
            <div class="col-md-12">
                    <h1> <?=lang('am_Social_Media');?></h1>
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
                                               <form action="<?= site_url('admin/Cms/EditSocialMedia');?>" method="post" >

                                                        <div class="row">
                                                              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">                                                            
                                                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                         <div class="form-group">
                                                         	           <label class="active"><?=lang('am_facebook');?>  </label>
                                                            <input name="facebook_Token" value="<?=$facebook->Token;?>" type="hidden" >

                                                                        <input 
                                                                               class="form-control "
                                                                               type="text" name="facebook_link" 
                                                                               data-validation="length" 
                                                                               data-validation-length="max500"
                                                                               value="<?=$facebook->link ;?>"
                                                                               >
                                                                </div>
                                                            </div> 
                                                               
                                                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                         <div class="form-group">
                                                         	            <label class="active"><?=lang('am_youtube');?>  </label>
 																		<input name="youtube_Token" value="<?=$youtube->Token;?>" type="hidden" >

																		 <input 
                                                                               class="form-control "
                                                                               type="text" name="youtube_link" 
                                                                               data-validation=" length" 
                                                                               data-validation-length="max500"
                                                                               value="<?=$youtube->link ;?>"
                                                                               >
                                                                </div>
                                                            </div> 
                                                          
                                                          
                                                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                         <div class="form-group">
                                                         	            <label class="active"><?=lang('am_instagram');?>  </label>
 																		<input name="instagram_Token" value="<?=$instagram->Token;?>" type="hidden" >

																		 <input 
                                                                               class="form-control "
                                                                               type="text" name="instagram_link" 
                                                                               data-validation=" length" 
                                                                               data-validation-length="max500"
                                                                               value="<?=$instagram->link ;?>"
                                                                               >
                                                                </div>
                                                            </div> 
                                                          
                                                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                         <div class="form-group">
                                                         	            <label class="active"><?=lang('am_twitter');?>  </label>
 																		<input name="twitter_Token" value="<?=$twitter->Token;?>" type="hidden" >

																		 <input 
                                                                               class="form-control "
                                                                               type="text" name="twitter_link" 
                                                                               data-validation=" length" 
                                                                               data-validation-length="max500"
                                                                               value="<?=$twitter->link ;?>"
                                                                               >
                                                                </div>
                                                            </div> 
                                                            <div class="col-lg-12">
                                                                    <button class="btn btn-primary"  type="submit"> <?=lang('am_save');?> </button>
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
</script> 
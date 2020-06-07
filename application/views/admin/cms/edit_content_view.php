<?php extract($dataArray); 
if($info){ ?>
<main class="main-content p-5" role="main">
    <div class="row">
            <div class="col-md-12">
                    <h1> <?= $info->Name?> </h1>
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
                                            
                                                
                                                <form action="<?= site_url('admin/Cms/setItem');?>" method="post" >
                                                    <input name="Token" value="<?=$info->Token;?>" type="hidden" >
                                                <div class="row"> 
                                                      
                                                     
                                                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
														<div class="form-group">
                                                       	    <label><?=lang('am_content');?> *</label>
																<textarea  class="form-control txtEditor" rows="30"
																	   name="content" 
																	   data-validation="required  length" 
																	   data-validation-length="9-1050"><?=$info->Content;?></textarea>
 														</div>
                                                    </div>
                                                   <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
														<div class="form-group">
                                                       	    <label><?=lang('am_content_en');?> *</label>
																<textarea  class="form-control txtEditor2" rows="30"
																	   name="content_en" 
																	   data-validation="required  length" 
																	   data-validation-length="9-1050" ><?=$info->Content_en;?></textarea>
 													
														</div>
                                                    </div>
													<div class="col-lg-12">
															<button class="btn btn-primary" type="submit"> <?=lang('am_save');?> </button>
													</div>
                                            </div>
                                                </form>
                                                <?php }else{ ?>
                                                    <h1>لا يوجد بيانات</h1>
                                                <?php } ?>
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

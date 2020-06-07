

<!--Start Checkout area-->
<section class="checkout-area">
    <div class="container">

        <div class="row">
            <div class="col-xl-12 col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
                <div class="form billing-info">
                    <div class="sec-title text-center">
                        <h2>  تسجيل الدخول </h2>
                        <span class="border" style="margin-right: auto;margin-left: auto;"></span>
                    </div>
                       
                        <div class="row">
                            
								<div role="form" class="form-in-wrapp login" id="form-in-wrapp-f1053-p976-o1" lang="en-US" dir="ltr">
                                                                        <?php if($this->session->flashdata('subscription')){ ?>
                                                                            <div class="alert text-center alert-danger"><?=$this->session->flashdata('subscription');?></div>
                                                                        <?php } ?>
                                                                        <div class="screen-reader-response"></div>
									<div id="note"></div>
									<div id="fields">
										<form  action="<?= site_url()?>/login/chackLogin" method="post"  id="registration-form"  >
                            <div class="col-md-12 name">
                                <div class="field-label"><?=lang('email');?> * </div>
                                <div class="field-input">
									<input class="reply-form__name"  type="text" name="email"  placeholder="" data-validation="required email ">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="field-label"><?=lang('password');?> *</div>
                                <div class="field-input your-email"> 
									<input class="reply-form__email" type="password" name="password" data-validation="required length" data-validation-length="min9">  
                                   
									<div class="help-block with-errors"></div>
									<?php if($this->session->flashdata('error_login')){ ?>
									<div style="color:red" class="danger text-right"><?=$this->session->flashdata('error_login')?></div>
											 <?php } ?>
                                </div>
                            </div>
							<div class="col-md-12">
										<button class="thm-btn bg-1 btn-block" id="login" type="submit" value=""> <?=lang('login')?>   </button>

							</div>
											</form>    
									</div>
								</div>
                            
                        </div>    
                        
                </div>    
            </div>
            
        </div>
        
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

</script>
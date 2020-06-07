<?php extract($dataArray); ?>

<main class="main-content p-5" role="main">
    <div class="row">
            <div class="col-md-12">
                    <h1> <?=lang('edit_profile')?> </h1>
            </div>
    </div>
    <div class="row mb-5">
            <div class="col-md-12">
                    <div class="card">
                            <div class="card-body">
                                    <div class="row">
                                            <div class="col-lg-12">
                                                <?php if($info){ ?>
                                                <?php   if($this->session->flashdata('validation_errors')){ echo $this->session->flashdata('validation_errors'); } ?>
                                                <form action="<?= site_url('admin/users/UpdateProfile');?>" method="post" >
                                                       <?php if($this->session->flashdata('error')){ ?>
                                                                            <div class="alert text-center alert-danger"><?=$this->session->flashdata('error');?></div>
                                                                        <?php } ?>
                                                       <?php if($this->session->flashdata('success')){ ?>
                                                                            <div class="alert text-center alert-success"><?=$this->session->flashdata('success');?></div>
                                                                        <?php } ?>
                                                    <input name="ID" value="<?=$info->ID;?>" type="hidden" >
                                                    <input name="Token" value="<?=$info->Token;?>" type="hidden" >
                                                    
                                                <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                        <div class="form-group">
                                                                        <label><?=lang('name');?></label>
                                                                        <input class="form-control "
                                                                                       type="text" name="name" 
                                                                                       data-validation="required  length" 
                                                                                       data-validation-length="min2"
                                                                                       placeholder="<?=lang('name');?> *"
                                                                                       value="<?=$info->Name;?>"
                                                                                       >
                                                                        </div></div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                        <label><?=lang('email');?></label>
                                                                        <div class="form-group">
                                                                            <div class="reply-form__box-04 your-email">
                                                                                    <input 
                                                                                           class="form-control"
                                                                                           type="email" name="email"  
                                                                                           data-validation="required email " 
                                                                                           placeholder=" <?=lang('email');?>  *"
                                                                                           value="<?=$info->Mail;?>"
                                                                                           >
                                                                            </div>
                                                                        </div></div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                        <div class="form-group">
                                                                        <div class="reply-form__box-04 your-password"><?=lang('old_password');?> *
                                                                                <input 
                                                                                       class="form-control"
                                                                                       type="password" name="old_password"  
                                                                                       data-validation-length="min9"
                                                                                       data-validation="required  " 
                                                                                       placeholder=""
                                                                                       value=""
                                                                                       >
                                                                        </div>
                                                                        </div></div>
                                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"> 
                                                                            <div class="form-group">
                                                                                <div class="reply-form__box-04 your-password"><?=lang('new_password');?>  *
                                                                                        <input 
                                                                                               class="form-control"
                                                                                               type="password" name="new_password"  
                                                                                               data-validation-length="min9"
                                                                                               data-validation="required  " 
                                                                                               placeholder=" "
                                                                                               value=""
                                                                                               >
                                                                                </div>
                                                                            </div> 
                                                                        </div>

                                                                       
                                                                          
                                                                                                          
                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
    lang : 'ar',
    modules : ' date, security, file',
    
  });

</script>

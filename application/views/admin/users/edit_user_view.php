<?php extract($dataArray); ?>
<main class="main-content p-5" role="main">
    <div class="row">
            <div class="col-md-12">
                    <h1> <?=lang('adduser')?> </h1>
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
                                                <form action="<?= site_url('admin/users/EditUser');?>" method="post" >
                                                    <input name="ID" value="<?=$info->ID;?>" type="hidden" >
                                                    <div class="form-group">
                                                                                <input 
                                                                                       class="form-control "
                                                                                       type="text" name="name" 
                                                                                       data-validation="required  length" 
                                                                                       data-validation-length="min9"
                                                                                       placeholder="<?=lang('name');?> *"
                                                                                       value="<?=$info->Name;?>"
                                                                                       >
                                                                        </div>

                                                                        <div class="reply-form__box-04 your-email">
                                                                                <input 
                                                                                       class="form-control"
                                                                                       type="email" name="email"  
                                                                                       data-validation="required email " 
                                                                                       placeholder=" <?=lang('email');?>  *"
                                                                                       value="<?=$info->Mail;?>"
                                                                                       >
                                                                        </div>
                                                                        
                                                                        <div class="form-group">
                                                                                <input 
                                                                                    class="form-control "
                                                                                    type="text"
                                                                                    name="date"
                                                                                    data-validation="required"
                                                                                    placeholder=" <?=lang('brithday');?>*"
                                                                                    value="<?=$info->brithDay;?>"
                                                                                    >
                                                                        </div>

                                                                        <div class="form-group">
                                                                                <input 
                                                                                    class="form-control"
                                                                                    type="text"
                                                                                    name="Degree" 
                                                                                    data-validation="required length"
                                                                                    data-validation-length="min4"
                                                                                    placeholder=" <?=lang('Degree');?> *"
                                                                                    value="<?=$info->Degree;?>"
                                                                                    >
                                                                        </div>

                                                                        <div class="form-group">
                                                                                <input 
                                                                                    class="form-control"
                                                                                    type="text" name="phone"
                                                                                    data-validation="required number"
                                                                                    placeholder=" <?=lang('phone');?>  *"
                                                                                    value="<?=$info->Phone;?>"
                                                                                    
                                                                                    >
                                                                        </div>

                                                                        <div class="form-group">
                                                                                <input 
                                                                                    class="form-control"
                                                                                    type="text" name="mobile"
                                                                                    data-validation="required number"
                                                                                    placeholder=" <?=lang('mobile');?> *"
                                                                                    value="<?=$info->Mobile;?>"
                                                                                    >
                                                                        </div>

                                                                        <div class="form-group">
                                                                                <input 
                                                                                    class="form-control"
                                                                                    type="text" name="mobile2"
                                                                                    data-validation="required number"
                                                                                    placeholder="  <?=lang('mobile2');?>  "
                                                                                    value="<?=$info->Mobile2;?>"
                                                                                    >
                                                                        </div>

                                                                        <div class="form-group">
                                                                                <select name="Country"
                                                                                        class="form-control" 
                                                                                        data-validation="required"
                                                                                        data-live-search="true"
                                                                                >
                                                                                        <option value="0" disabled selected>البلد</option>
                                                                                        <?php foreach($country as $c): ?>
                                                                                            <option <?php if($info->Nationality_ID == $c->ID ){ echo 'selected'; }?> value="<?=$c->ID;?>"><?=$c->Name?></option>
                                                                                        <?php endforeach; ?>
                                                                                </select>
                                                                        </div>
                                                                         <div class="form-group">
                                                                                <select name="type"
                                                                                        class="form-control" 
                                                                                        data-validation="required"
                                                                                >
                                                                                    <option value="0" disabled selected><?= lang('UserType')?></option>
                                                                                        <option <?php if($info->Type == 'S' ){ echo 'selected'; }?> value="S"><?= lang('Student')?></option>
                                                                                        <option <?php if($info->Type == 'C' ){ echo 'selected'; }?> value="C"><?= lang('trainer')?></option>
                                                                                </select>
                                                                        </div>

                                                                        <div class="form-group">
                                                                                <input 
                                                                                    class="form-control"
                                                                                    type="text" name="adderss"
                                                                                    data-validation="required length "
                                                                                    data-validation-length="min5"
                                                                                    placeholder="  <?=lang('adderss');?> "
                                                                                    value="<?=$info->Address;?>"
                                                                                    >
                                                                        </div>

                                                                                                          
                                                                        <div class="reply-form__box-04 text-center">
                                                                                <button class="btn-01 btn-block" type="submit"> <?=lang('sgin');?> </button>
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
</main>
<script src="<?= base_url()?>assets/home/js/plugins/formValidator/jquery.form-validator.min.js" type="text/javascript"></script>
<script>
  $.validate({
    lang : 'ar',
    modules : ' date, security, file',
    
  });

</script>

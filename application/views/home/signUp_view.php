
<?php extract($dataArray); ?>
<!-- datepicker style -->
<link rel="stylesheet" href="<?= base_url()?>assets/home/css/bootstrap-datepicker.css">

<!-- bootstrap-select style -->
<link rel="stylesheet" href="<?= base_url()?>assets/home/css/bootstrap-select.css">
<main class="content-row">
        <div class="page-title-wrapp">
                <div class="container">
                        <div class="row">
                                <div class="col-lg-12">
                                        <h4 class="page-title-01">تسجيل الدخول </h4>
                                </div>
                        </div>
                </div>
        </div>
        <div class="content-box-01 content-box-sign-up padding-top-33 padding-bottom-55">
                <div class="container">
                        <div class="row">
                                <div class="col-sm-6 col-md-6 col-lg-6 col-lg-offset-3 col-md-offset-3 col-sm-offset-3 ">
                                        <div class="reply-form">
                                                <div role="form" class="form-in-wrapp" id="form-in-wrapp-f1053-p976-o1" lang="en-US" dir="ltr">
                                                        <div class="screen-reader-response"></div>
                                                        <div id="note"></div>
                                                        <div id="fields">
                                                                <?php  if($this->session->flashdata('validation_errors')){ echo $this->session->flashdata('validation_errors'); } ?>
                                                                <form id="registration-form" action="<?= site_url()?>/login/signNew" method="post" novalidate class="reply-form__form">

                                                                        <div class="reply-form__box-04 name">
                                                                                <input 
                                                                                       class="reply-form__name form-in-wrapp-validates-as-required"
                                                                                       type="text" name="name" 
                                                                                       data-validation="required  length" 
                                                                                       data-validation-length="min9"
                                                                                       placeholder="<?=lang('name');?> *">
                                                                        </div>

                                                                        <div class="reply-form__box-04 your-email">
                                                                                <input 
                                                                                       class="reply-form__email form-in-wrapp-validates-as-required form-in-wrapp-validates-as-email"
                                                                                       type="email" name="email"  
                                                                                       data-validation="required email " 
                                                                                       placeholder=" <?=lang('email');?>  *"
                                                                                       onchange="chackEmail(this.value)"
                                                                                       >
                                                                        </div>
                                                                        <div class="reply-form__box-04 your-email">
                                                                                <input 
                                                                                       class="reply-form__email form-in-wrapp-validates-as-required form-in-wrapp-validates-as-email"
                                                                                       type="password" 
                                                                                       name="pass_confirmation" 
                                                                                       data-validation="strength" 
                                                                                       data-validation-strength="2"
                                                                                       placeholder=" <?=lang('password');?>  *">
                                                                        </div>
                                                                        <div class="reply-form__box-04 your-email">
                                                                                <input 
                                                                                       class="reply-form__email form-in-wrapp-validates-as-required form-in-wrapp-validates-as-email" 
                                                                                       type="password"   
                                                                                       name="pass" data-validation="confirmation"
                                                                                       placeholder=" <?=lang('re_password');?>  *">
                                                                        </div>
                                                                        <div class="reply-form__box-04 name">
                                                                                <input 
                                                                                    class="reply-form__name datepicker"
                                                                                    type="text"
                                                                                    name="date"
                                                                                    data-validation="required"
                                                                                    placeholder=" <?=lang('brithday');?>*">
                                                                        </div>

                                                                        <div class="reply-form__box-04 name">
                                                                                <input 
                                                                                    class="reply-form__name"
                                                                                    type="text"
                                                                                    name="Degree" 
                                                                                    data-validation="required length"
                                                                                    data-validation-length="min4"
                                                                                    placeholder=" <?=lang('Degree');?> *">
                                                                        </div>

                                                                        <div class="reply-form__box-02 name">
                                                                                <input 
                                                                                    class="reply-form__name"
                                                                                    type="text" name="phone"
                                                                                    data-validation="required number"
                                                                                    placeholder=" <?=lang('phone');?>  *"
                                                                                    >
                                                                        </div>

                                                                        <div class="reply-form__box-02 name">
                                                                                <input 
                                                                                    class="reply-form__name"
                                                                                    type="text" name="mobile"
                                                                                    data-validation="required number"
                                                                                    placeholder=" <?=lang('mobile');?> *">
                                                                        </div>

                                                                        <div class="reply-form__box-02 name">
                                                                                <input 
                                                                                    class="reply-form__name"
                                                                                    type="text" name="mobile2"
                                                                                    data-validation="required number"
                                                                                    placeholder="  <?=lang('mobile2');?>  ">
                                                                        </div>

                                                                        <div class="reply-form__box-02 name">
                                                                                <select name="Country"
                                                                                        class="selectpicker" 
                                                                                        data-validation="required"
                                                                                        data-live-search="true"
                                                                                >
                                                                                        <option value="0" disabled selected>البلد</option>
                                                                                        <?php foreach($country as $c): ?>
                                                                                            <option value="<?=$c->ID;?>"><?=$c->Name?></option>
                                                                                        <?php endforeach; ?>
                                                                                </select>
                                                                        </div>

                                                                        <div class="reply-form__box-04 name">
                                                                                <input 
                                                                                    class="reply-form__name"
                                                                                    type="text" name="adderss"
                                                                                    data-validation="required length "
                                                                                    data-validation-length="min5"
                                                                                    placeholder="  <?=lang('adderss');?> ">
                                                                        </div>

                                                                        <div class="reply-form__box-04 name">
                                                                            <select name="Interests[]" class="selectpicker" data-live-search="true" multiple placeholder="<?=lang('Interests');?>" >
                                                                                <option disabled ><?=lang('Interests');?></option>
                                                                                    <?php foreach ($courses as $c) : ?>
                                                                                        <option value="<?=$c->ID;?>"><?=$c->Name;?></option>
                                                                                    <?php endforeach; ?>
                                                                                </select>

                                                                        </div>
                                                                    
                                                                        <div class="reply-form__box-04 text-center">
                                                                                <button class="btn-01 btn-block" type="submit"> <?=lang('sgin');?> </button>
                                                                        </div>
                                                                </form>
                                                            
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</main>
<script src="<?= base_url()?>assets/home/js/plugins/formValidator/jquery.form-validator.min.js" type="text/javascript"></script>
<script>
   function chackEmail(email){
      if(validateEmail(email)){
         
            var data  = {'email' : email };

            $.ajax({

                        url: "<?= site_url();?>login/chackEmail",
                        type: 'POST',
                        data: data,
                        success : function(response){
                            
                            if(response == 0 ){
                                alert('email is exist');
                            }
                            if(response == 1 ){
                               alert('valid email'); 
                            }
                            
                            },
                        cache: false,
                            error: function(xhr, status, error) {
                              var err = eval("(" + xhr.responseText + ")");
                              alert(err.Message);
                            }

            }); 

      } 
   }
   //valid Email
  function validateEmail(sEmail) {
    var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
    if (filter.test(sEmail)) {
        return true;
    }
    else {
      return false;
    }
  }
  $.validate({
    lang : 'ar',
    modules : ' date, security, file',
    
  });

</script>
<!-- Superfish v1.7.9 -->
<script src="<?= base_url()?>assets/home/js/plugins/bootstrap-datepicker.js"></script>

<!-- Superfish v1.7.9 -->
<script src="<?= base_url()?>assets/home/js/plugins/bootstrap-select.js"></script>
	<script>
		$('.datepicker').datepicker();
		$('.selectpicker').selectpicker();
	</script>
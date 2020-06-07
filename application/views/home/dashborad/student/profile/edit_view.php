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
							<h4 class="page-title-01"> <?= lang('ed_profile');?> </h4>
						</div>
					</div>
				</div>
			</div>
                    <div class="content-box-01 padding-top-33 padding-bottom-55">
				<div class="container">
					<div class="row">
                                            <?php if($this->session->flashdata('validation_errors')){ ?>
                                                <?=$this->session->flashdata('validation_errors')?>
                                            <?php } ?>
						<div class="col-sm-9 col-md-9 col-lg-9">
							<div class="reply-form profile-edit-page">
								<div role="form" class="form-in-wrapp" id="form-in-wrapp-f1053-p976-o1" lang="en-US" dir="ltr">
									<div class="screen-reader-response"></div>
									<div id="note"></div>
									<div id="fields">
										<form  action="<?=site_url();?>dashborad/student/profile/updateInfo" method="post" class="reply-form__form">
                                                                                    <input type="hidden" name="token" value="<?=$info->Token;?>" >
                                                                                    <div class="reply-form__box-04 name">
                                                                                        <input 
                                                                                               class="reply-form__name form-in-wrapp-validates-as-required"
                                                                                               type="text" name="name" 
                                                                                               data-validation="required  length" 
                                                                                               data-validation-length="min9"
                                                                                               placeholder="<?=lang('name');?> *"
                                                                                               value="<?=$info->Name;?>"
                                                                                               >
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                    <div class="reply-form__box-04 name">
                                                                                            <input 
                                                                                                class="reply-form__name datepicker"
                                                                                                type="text"
                                                                                                name="date"
                                                                                                data-validation="required"
                                                                                                placeholder=" <?=lang('brithday');?>*"
                                                                                                value="<?=$info->brithDay;?>"
                                                                                                >
                                                                                    </div>
                                                                                    

                                                                                    <div class="reply-form__box-02 name">
                                                                                            <input 
                                                                                                class="reply-form__name"
                                                                                                type="text" name="mobile"
                                                                                                data-validation="required number"
                                                                                                placeholder=" <?=lang('mobile');?> *"
                                                                                                value="<?=$info->Mobile;?>"
                                                                                                >
                                                                                    </div>
                                                                                    <div class="reply-form__box-02 name">
                                                                                            <input 
                                                                                                class="reply-form__name"
                                                                                                type="text" name="mobile2"
                                                                                                data-validation="required number"
                                                                                                placeholder=" <?=lang('mobile2');?> *"
                                                                                                value="<?=$info->Mobile2;?>"
                                                                                                >
                                                                                    </div>

                                                                                    <div class="reply-form__box-02 name">
                                                                                            <input 
                                                                                                class="reply-form__name"
                                                                                                type="text" name="phone"
                                                                                                data-validation="required number"
                                                                                                placeholder="  <?=lang('phone');?>  "
                                                                                                value="<?=$info->Phone;?>"
                                                                                                >
                                                                                    </div>

                                                                                    <div class="reply-form__box-02 name">
                                                                                            <select name="Country"
                                                                                                    class="selectpicker" 
                                                                                                    data-validation="required"
                                                                                                    data-live-search="true"
                                                                                            >
                                                                                                <option value="0" disabled selected><?= lang('Country')?></option>
                                                                                                    <?php foreach($country as $c): ?>
                                                                                                        <option <?php if($info->Nationality_ID == $c->ID ){ echo 'selected'; } ?> value="<?=$c->ID;?>"><?=$c->Name?></option>
                                                                                                    <?php endforeach; ?>
                                                                                            </select>
                                                                                    </div>
                                                                                   
											<div class="reply-form__box-04 name">
												<input 
                                                                                                    class="reply-form__name"
                                                                                                    type="text" name="adderss"
                                                                                                    placeholder="  <?=lang('adderss');?> "
                                                                                                    data-validation="required length"
                                                                                                    data-validation-length="min4"
                                                                                                    value="<?=$info->Address;?>"
                                                                                                    >
											</div>
											<!--
											<div class="reply-form__box-04 name">
                                                                                            <select name="Interests[]" class="selectpicker" data-live-search="true" multiple placeholder="<?=lang('Interests');?>" >
                                                                                                <option disabled ><?=lang('Interests');?></option>
                                                                                                <?php foreach ($courses as $c) : ?>
                                                                                                    <option value="<?=$c->ID;?>"><?=$c->Name;?></option>
                                                                                                <?php endforeach; ?>
                                                                                            </select>
											</div>-->
                                                                                        
                                                                                        <div class="reply-form__box-04 name">
                                                                                            <textarea 
                                                                                                class="form-control"
                                                                                                type="text"
                                                                                                name="Biography" 
                                                                                                data-validation="required length"
                                                                                                data-validation-length="min4"
                                                                                                placeholder=" <?=lang('Biography');?> *"
                                                                                                rows="10"
                                                                                                ><?=$info->Biography;?></textarea>
                                                                                        </div>
                                                                                        
											<div class="reply-form__box-04 text-center">
                                                                                            <button class="btn-01 btn-block" type="submit"> <?= lang('updateInfo')?></button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-sm-3 col-md-3 col-lg-3 text-center">
							<div class="kv-avatar price-box-01">
								<div class="file-loading">
                                                                    <?php if($info->Img == ''){ ?>
                                                                    <img id="Img" src="<?= base_url()?>assets/home/img/default_avatar_male.jpg" >
                                                                    <?php  }else{ ?>
                                                                        <img id="Img" src="<?= base_url()?>upload/<?=$info->Img;?>" >
                                                                    <?php } ?>
                                                                        <img   id="loading" src="<?= base_url()?>assets/home/img/loading.gif" id="loadGif"  style="width: 18px !important;display: none;" >
								</div>
								<span class="price-btn btn-upload-img">
                                                                    <input id="file" multiple  type="file" onchange="uploadImg()"  required>
									<i class="fa fa-upload"></i>
								</span>
                                                                <div class="kv-avatar-hint"><small> <?= lang('add_img_pro');?> </small></div>
								
							</div>
						</div>
						
					</div>
				</div>
			</div>
			
		</main>



<script>
     
      function uploadImg(){
          
          var  data = new FormData();
          var img = jQuery.each(jQuery('#file')[0].files, function(i, file) { 
                data.append('userFiles', file);
                
                
                $.ajax({

                            url: "<?= site_url('dashborad/student/profile/uploadImg/' . $info->Token );?>",
                            type: 'POST',
                            data: data,
                            async: true,
                            enctype: 'multipart/form-data',
                            beforeSend: function() {
                                $('#loadGif').show();
                            },
                            success : function(response){
                                if(response.status == 0 ){
                                   alert(response.msg);
                                   $('#loadGif').hide();
                                }
                                if(response.status == 1 ){
                                    window.location = '<?= site_url('dashborad/student/profile/view/' . $info->Token );?>'
                                }
                                
                                
                                },
                            cache: false,
                            contentType: false,
                            processData: false,
                                error: function(xhr, status, error) {
                                  var err = eval("(" + xhr.responseText + ")");
                                  alert(err.Message);
                                }

                }); 
                
                
                
            }); 
            
      };
      


</script>

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
<!-- Superfish v1.7.9 -->
<script src="<?= base_url()?>assets/home/js/plugins/bootstrap-datepicker.js"></script>

<!-- Superfish v1.7.9 -->
<script src="<?= base_url()?>assets/home/js/plugins/bootstrap-select.js"></script>
<script>
        $('.datepicker').datepicker();
        $('.selectpicker').selectpicker();
</script>


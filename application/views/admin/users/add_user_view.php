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
                                                <?php   if($this->session->flashdata('validation_errors')){ echo $this->session->flashdata('validation_errors'); } ?>
                                                <form action="<?= site_url('admin/users/addNewUser');?>" method="post" >
                                    			<div class="row">
                                                   <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
														<div class="form-group">
																<input 
																	   class="form-control "
																	   type="text" name="name" 
																	   data-validation="required  length" 
																	   data-validation-length="min9"
																	   placeholder="<?=lang('name');?> *">
														</div>
                                                   	
                                                   </div>
                                                   <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                   		<div class="form-group">
																<input 
																	   class="form-control"
																	   type="email" name="email"  
																	   data-validation="required email " 
																	   placeholder=" <?=lang('email');?>  *"
																	   onchange="chackEmail(this.value)"
																	   >
														</div>
                                                   </div>                                                   
                                                   <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                   	    <div class="form-group">
																<input 
																	   class="form-control"
																	   type="password" 
																	   name="pass_confirmation" 
																	   data-validation="strength" 
																	   data-validation-strength="2"
																	   placeholder=" <?=lang('password');?>  *">
														</div>
                                                   </div>
                                                   <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                   		<div class="form-group">
																<input 
																	   class="form-control" 
																	   type="password"   
																	   name="pass" data-validation="confirmation"
																	   placeholder=" <?=lang('re_password');?>  *">
														</div>
                                                   </div>      
                                                   <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                   		<div class="form-group">
																<input 
																	class="form-control "
																	type="text"
																	name="date"
																	data-validation="required"
																	placeholder=" <?=lang('brithday');?>*">
														</div>
                                                   </div>
                                                   <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
 														<div class="form-group">
																<input 
																	class="form-control"
																	type="text"
																	name="Degree" 
																	data-validation="required length"
																	data-validation-length="min4"
																	placeholder=" <?=lang('Degree');?> *">
														</div>                                                  	
                                                   </div>      
                                                   <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
														<div class="form-group">
																<input 
																	class="form-control"
																	type="text" name="phone"
																	data-validation="required number"
																	placeholder=" <?=lang('phone');?>  *"
																	>
														</div>                                                   	
                                                   </div>
                                                   <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
														<div class="form-group">
																<input 
																	class="form-control"
																	type="text" name="mobile"
																	data-validation="required number"
																	placeholder=" <?=lang('mobile');?> *">
														</div>                                                   	
                                                   </div>   
                                                   <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
														<div class="form-group">
																<input 
																	class="form-control"
																	type="text" name="mobile2"
																	data-validation="required number"
																	placeholder="  <?=lang('mobile2');?>  ">
														</div>                                                   	
                                                   </div>
                                                   <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
														<div class="form-group">
																<select name="Country"
																		class="form-control" 
																		data-validation="required"
																		data-live-search="true"
																>
																		<option value="0" disabled selected>البلد</option>
																		<?php foreach($country as $c): ?>
																			<option value="<?=$c->ID;?>"><?=$c->Name?></option>
																		<?php endforeach; ?>
																</select>
														</div>                                                   	
                                                   </div>      
												   <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
														<div class="form-group">
																<select name="type"
																		class="form-control" 
																		data-validation="required"
																>
																	<option value="0" disabled selected><?= lang('UserType')?></option>
																		<option value="S"><?= lang('Student')?></option>
																		<option value="C"><?= lang('trainer')?></option>
																</select>
														</div>                                                   	
                                                   </div>
                                                   <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
														<div class="form-group">
																<input 
																	class="form-control"
																	type="text" name="adderss"
																	data-validation="required length "
																	data-validation-length="min5"
																	placeholder="  <?=lang('adderss');?> ">
														</div>                                                   	
                                                   </div>      

													<div class="col-lg-12">
															<button class="btn btn-primary" type="submit"> <?=lang('sgin');?> </button>
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
    lang : 'ar',
    modules : ' date, security, file',
    
  });

</script>

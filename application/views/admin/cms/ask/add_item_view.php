<?php extract($dataArray); ?>
     <?php 
	   $Name="";
	   $sub_Token=""; 
	 	if($Dep){  
					$Name      = $Dep->Name;
					$sub_Token = $Dep->Token; 
		 }
	 ?>
<main class="main-content p-5" role="main">
    <div class="row">
            <div class="col-md-12">
                    <h1> <?=lang('am_add_item')." ".$Name?> </h1>
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
                                                <form action="<?= site_url('admin/Cms/addNewItem_ask');?>" method="post" >
                                    			
                                                            <input name="depToken" value="<?=$sub_Token;?>" type="hidden" >
                                                        <div class="row">
                                                            
                                                              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                         <div class="form-group">
                                                                <label><?=lang('am_question');?> *</label>
                                                                        <input 
                                                                               class="form-control "
                                                                               type="text" name="title" 
                                                                               data-validation="required  length" 
                                                                               data-validation-length="3-140"
                                                                               placeholder="<?=lang('am_question');?> *"
                                                                               >
                                                                </div>
                                                            </div>
                                                           <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                <label><?=lang('am_question_en');?> *</label>
                                                                        <input 
                                                                               class="form-control "
                                                                               type="text" name="title_en" 
                                                                               data-validation="required  length" 
                                                                               data-validation-length="3-140"
                                                                               placeholder="<?=lang('am_question_en');?> *"
                                                                              >
                                                                </div>
                                                            </div>
                                                             <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                <label><?=lang('am_answer');?> *</label>
                                                                        <textarea class="form-control "
                                                                               name="content" 
                                                                               data-validation="required  length" 
                                                                               data-validation-length="9-1350" > </textarea>
                                                                </div>
                                                            </div>
                                                           <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                <label><?=lang('am_answer_en');?> *</label>
                                                                        <textarea class="form-control "
                                                                               name="content_en" 
                                                                               data-validation="required  length" 
                                                                               data-validation-length="9-1350"
                                                                               > </textarea>
                                                            
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-lg-12">
                                                                    <button class="btn btn-primary"   id="saveBtn" type="submit"> <?=lang('am_save');?> </button>
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
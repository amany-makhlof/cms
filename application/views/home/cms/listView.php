<?php extract($dataArray); ?>
     <?php 
	   $Name="";
	   $sub_Token=""; 
	 	if($Dep){  
					$Name      = $Dep->Name;
					$sub_Token = $Dep->Token; 
		 }
	 ?>
<main class="content-row">
			<div class="page-title-wrapp">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<h1 class="page-title-01"> <?= $Name?></h1>
						</div>
					</div>
				</div>
			</div>
			<div class="content-box-01 padding-top-50 padding-bottom-74">
				<div class="container">
					<div class="row margin-bottom-22">
                      <?php 
					  			if($items==false){
									echo lang('am_not_exist') ;
									}else{
					  			foreach($items as $item):                        	     
					             $CI = &get_instance();
								 $Title="";
								 $Content="";
                                 if($CI->session->userdata('language')=='english'){
										     $Title  = $item->Title_en ;
										     $Content= $item->Content_en ;
								  }else{
										     $Title  = $item->Title_en ;
										     $Content= $item->Content_en ;
							     }  
					 ?>

						<div class="col-sm-6 col-md-4 col-lg-4">
							<div class="services-wrapp services-wrapp-ds-co">
								<div class="services-content services-content-sc-v">
									<i class="fa fa-desktop"></i>
									<h3 class="services-content_title"> 
										<?=$Title?> </h3>
									<p class="services-text">
										<?=$Content?>
									</p>
									<a href="<?=site_url('Cms/getItem/'.$item->Token);?>"> <i class="fa fa-plus"></i> <?=lang('am_view')?></a>
								</div>
							</div>
						</div> 
                      <?php endforeach; 
								}?>
						
					</div>
				</div>
			</div>
			
		</main>
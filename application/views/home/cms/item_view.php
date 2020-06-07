<?php extract($dataArray); ?>     
  <?php 
					  			if($info==false){
									echo lang('am_not_exist') ;
									}else{
 					             $CI = &get_instance();
								 $Title="";
								 $Content="";
                                 if($CI->session->userdata('language')=='english'){
										     $Title  = $info->Title_en ;
										     $Content= $info->Content_en ;
								  }else{
										     $Title  = $info->Title_en ;
										     $Content= $info->Content_en ;
							     }  
					 ?>
<main class="content-row">
			<div class="page-title-wrapp">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<h1 class="page-title-01"> <?= $info->Name.' / '.$Title ?></h1>
						</div>
					</div>
				</div>
			</div>
			<div class="content-box-01 padding-top-50 padding-bottom-74">
				<div class="container">
					<div class="row margin-bottom-22">
                

						<div class="col-sm-6 col-md-12 col-lg-12">
							<div class="services-wrapp services-wrapp-ds-co">
								<div class="services-content services-content-sc-v">
									<i class="fa fa-desktop"></i>
									 
									<p class="services-text">
										<?=$Content?>
									</p>
                                     <?php
										  $ImagePath = $info->ImagePath; 
										  $imgUser =  base_url().'upload/'.$ImagePath;
										  if(  file_exists('./upload/'.$ImagePath)||$ImagePath!=NULL){
							      ?> 
 										   <a href="<?=$imgUser?>" ><img src="<?=$imgUser?>" width="200" alt="<?=$Title?> " ></a>
 								 	<?php
								 		}
									 	 ?>
  								</div>
							</div>
						</div> 
                      <?php  
								}?>
						
					</div>
				</div>
			</div>
			
		</main>
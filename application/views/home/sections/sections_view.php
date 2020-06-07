<?php extract($dataArray); ?>

<main class="content-row">
			<div class="page-title-wrapp">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<h1 class="page-title-01"> <?=lang('am_departments');?></h1>
						</div>
					</div>
				</div>
			</div>
			<div class="content-box-01 padding-top-50 padding-bottom-74">
				<div class="container">
					<div class="row margin-bottom-22">
                      <?php foreach($departments as $u): ?>

						<div class="col-sm-6 col-md-4 col-lg-4">
							<div class="services-wrapp services-wrapp-ds-co">
								<div class="services-content services-content-sc-v">
									<i class="fa fa-desktop"></i>
									<h3 class="services-content_title"> <?=$u->Name;?> </h3>
									<p class="services-text">
										 <?=$u->Content;?>
									</p>
									<a href="<?= site_url('subSections/index/'.$u->token);?>"> <i class="fa fa-plus"></i><?=lang('am_view_subjects')?></a>
								</div>
							</div>
						</div>
						 
                     <?php endforeach; ?>
					</div>
				</div>
			</div>
			
		</main>
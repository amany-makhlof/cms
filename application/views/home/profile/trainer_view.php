<?php extract($dataArray); ?>
		<!-- Content -->
		<main class="content-row">
			<div class="content-box-01 single-team profile-edit">
				<div class="container">
					<div class="row">
                                                <?php if($token === $info->Token ){ ?>
                                                    <div class="edit-profile col-sm-12 col-md-12 col-lg-12">
                                                            <a class="btn-01" href="<?=site_url();?>/profile/trainer/edit/<?=$info->Token;?>"> تعديل <i class="fa fa-edit"></i></a>
                                                    </div>
                                                <?php } ?>
						<div class="col-sm-4 col-md-4 col-lg-4">
							<figure class="single-team__img">
                                                            <img src="<?= base_url()?>upload/<?=$info->Img;?>" alt="">
							</figure>
						</div>
						<div class="col-sm-8 col-md-8 col-lg-8">
							<div class="single-team__info">
								<h3 class="single-team__info-title"> <?=$info->Name;?>  </h3>
								<ul class="single-team__info-list single-team__info-list_DS">
									<li>
                                                                            <span><?= lang('Country');?> :</span> <?=$info->NameCountry;?>
									</li>
									<li>
                                                                            <span> <?= lang('Degree');?> :</span> <?=$info->Degree;?>
									</li>
									<li>
										<span><?=lang('job')?> :</span>  <?=$info->job;?> 
									</li>
									<li>
                                                                            <span><?= lang('Experience');?> :</span> <?=$info->Experience;?> سنة
									</li>
									<li>
                                                                            <span><?= lang('S_Awards')?> :</span>  <?=$info->Scientific_Awards;?>
									</li>
									<li>
                                                                            <span><?= lang('phone')?> :</span> <?=$info->Phone;?>
									</li>
									<li>
                                                                            <span> <?= lang('email')?> :</span>
										<a href="mailto:example@edu.com"><?=$info->Mail;?></a>
									</li>
								</ul>
								<div class="clearfix"></div>
								<ul class="soc-list-01 soc-list-01-ds">
									<li>
										<a href="<?=$info->facebook;?>" class="facebook-style">
											<i class="fa fa-facebook" aria-hidden="true"></i>
										</a>
									</li>
									<li>
										<a href="<?=$info->twitter;?>" class="twitter-style">
											<i class="fa fa-twitter" aria-hidden="true"></i>
										</a>
									</li>
									<li>
										<a href="<?=$info->google;?>" class="google-style">
                                                                                    <i class="fa fa-google-plus" aria-hidden="true"></i>
										</a>
									</li>
									
								</ul>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
                                                    <h3 class="margin-bottom-17"><?= lang('Biography');?> </h3>
							<p><?=$info->Biography;?></p>
						
                                                        <h3 class="padding-top-10 margin-bottom-17"><?= lang('P_experienc');?> </h3>
							<p><?=$info->Personal_experiences;?></p>
					
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-12">
                                                    <h3 class="margin-bottom-20"> <?= lang('Languages');?></h3>
							<p><?=$info->Languages;?> </p>
						</div>
					</div>
				</div>
			</div>
		</main>

<?php extract($dataArray); ?>
		<!-- Content -->
		<main class="content-row">
			<div class="content-box-01 single-team profile-edit">
				<div class="container">
					<div class="row">
                                                
						<div class="edit-profile col-sm-12 col-md-12 col-lg-12">
							<a class="btn-01" href="<?=site_url();?>dashborad/student/profile/edit/<?=$info->Token;?>"> تعديل <i class="fa fa-edit"></i></a>
						</div>
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
                                                                        <span> <?= lang('phone');?> :</span> <?=$info->Phone;?>
                                                                    </li>
                                                                    <li>
                                                                        <span> <?= lang('brithday');?> :</span> <?=$info->brithDay;?>
                                                                    </li>
                                                                    <li>
                                                                        <span> <?= lang('email');?> :</span> <?=$info->Mail;?>
                                                                    </li>
								</ul>
								<div class="clearfix"></div>
								
							</div>
						</div>
                                            <div class="row">
						<div class="col-lg-12">
                                                    <h3 class="margin-bottom-17"><?= lang('Biography');?> </h3>
							<p><?=$info->Biography;?></p>
						</div>
					</div>
					</div>
					
				</div>
			</div>
		</main>

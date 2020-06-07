<?php extract($dataArray); ?>
		<!-- Content -->
		<main class="content-row">
			<div class="content-box-01 padding-top-33 padding-bottom-55">
				<div class="container">
					<div class="row">
						<div class="events-list">
							<div class="col-lg-9">
                                                            <?php if($this->session->flashdata('subscription')){ ?>
                                                            <div class="alert alert-success"><?=$this->session->flashdata('subscription');?></div>
                                                            <?php } ?>
								<figure class="events-list__img col-lg-4">
									<a href="single_event.htm">
										<img src="<?=base_url();?>assets/home/img\event\event_img_01.jpg" alt="">
									</a>
								</figure>
								<div class="events-list__content col-lg-8">
									<h4 class="events-list__content-title">
										<a href="single_event.htm"><?=$info->Name;?> </a>
									</h4>
									<p class="events-list__status">مجانا</p>
									<div class="events-list__content-text">
										<p>هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً .</p>
									</div>
								</div>
								
								<div class="clearfix"></div>
								
								<div class="events-list__content events-list__content_data col-lg-12">
									<h4 class="events-list__content-title">
										معلومات عن الدورة
									</h4>
									<div class="events-list__content-text">
										<p>هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً . هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً .</p>
									</div>
								</div>
								
								<div class="events-list__content events-list__content_data col-lg-12">
									<h4 class="events-list__content-title">
										لماذا تشترك في هذه الدورة
									</h4>
									<div class="events-list__content-text">
										<ul class="ul-list-01 offer-list">
											<li>هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ .</li>
											<li>هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو  .</li>
											<li>هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص .</li>
											<li>هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ .</li>
											<li>هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو  .</li>
											<li>هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص .</li>
										</ul>
									</div>
								</div>								
								<div class="events-list__content events-list__content_data col-lg-12">
									<h4 class="events-list__content-title">
										تعرف علي مقدمين الدورة
									</h4>
									<div class="events-list__content-text">	
									 <div class="col-lg-6">
                                                                             <a href="<?= site_url();?>dashborad/trainer/profile/view/<?=$info->instructorToken;?>">
										<div class="owl-theme-01__item owl-theme-01__item_ds">
											<figure class="owl-theme-01__item-img">
												<img src="<?=base_url('upload/' . $info->ImgUser);?>" alt="">
											</figure>
											<div class="owl-theme-01__item-header">
												<h3 class="owl-theme-01__item-title"><?=$info->Username;?> </h3>
												<p class="owl-theme-01__item-subtitle">المحاضر</p>
											</div>
											<div class="owl-theme-01__item-content">
												<p><?=$info->Degree?></p>
											</div>
										</div>
                                                                             </a>									 	
									 </div>		
									 						
									 							 									 
									 									 									 									 									 
									</div>
								</div>	
													
								<div class="events-list__content events-list__content_data add-course col-lg-12">
									<div class="events-list__content-text text-center ">
                                                                            <a href="<?= site_url();?>coures/subscription/<?=$info->token;?>" class="btn-01 text-center bg-gradient"> اشترك الان</a>
									</div>
								</div>		 
							</div>
							<div class="col-lg-3">

									<div class="events-list__info events-list__info-ds sticker">
									<a href="<?= site_url();?>coures/subscription/<?=$info->token;?>" class="btn-01 btn-block text-center bg-gradient"> اشترك الان</a>
										<p class="events-list__info-location"><span><i class="fa fa-clock-o"></i> المدة : </span> 6 اسبوع</p>
										<p class="events-list__info-location "><span><i class="fa fa-dashboard"></i> جدول الدورة : </span> 6 - 8 ساعات اسبوعيا  </p>
										<p class="events-list__info-location "><span><i class="fa fa-tag"></i> السعر : </span> مجانا  </p>
										<p class="events-list__info-location "><span><i class="fa fa-graduation-cap"></i> موضوع الدورة : </span> البرمجة  </p>
										
										<p class="events-list__info-location "><span><i class="fa fa-certificate"></i> المستوي : </span> المتوسط  </p>
										
										<p class="events-list__info-location "><span><i class="fa fa-language"></i> اللغة : </span> الانجليزية  </p>
									</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</main><!-- Superfish v1.7.9 -->
                <script src="<?= base_url()?>assets/home/js/plugins/jquery.sticky.js"></script>
	<!-- Main script -->
	<script>
	  $(document).ready(function(){
		$(".sticker").sticky({topSpacing:10});
	  });
	</script>

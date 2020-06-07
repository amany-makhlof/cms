<?php extract($dataArray); ?>
<link href="<?= base_url();?>assets/home/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css"/>
<script src="<?= base_url();?>assets/home/plugins/fullcalendar/lib/moment.min.js" type="text/javascript"></script> 
<script src="<?= base_url();?>assets/home/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>               
<script>

  $(document).ready(function() {

   $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,basicWeek,basicDay'
      },
      defaultDate: '2018-02-12',
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [
        {
          title: 'All Day Event',
          start: '2018-02-01'
        },
        {
          title: 'Long Event',
          start: '2018-02-07',
          end: '2018-02-10'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2018-02-09T16:00:00'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2018-02-16T16:00:00'
        },
        {
          title: 'Conference',
          start: '2018-02-11',
          end: '2018-02-13'
        },
        {
          title: 'Meeting',
          start: '2018-02-12T10:30:00',
          end: '2018-02-12T12:30:00'
        },
        {
          title: 'Lunch',
          start: '2018-02-12T12:00:00'
        },
        {
          title: 'Meeting',
          start: '2018-02-12T14:30:00'
        },
        {
          title: 'Happy Hour',
          start: '2018-02-12T17:30:00'
        },
        {
          title: 'Dinner',
          start: '2018-02-12T20:00:00'
        },
        {
          title: 'Birthday Party',
          start: '2018-02-13T07:00:00'
        },
        {
          title: 'Click for Google',
          url: 'http://google.com/',
          start: '2018-02-28'
        }
      ]
    });

  });

</script>
		<!-- Content -->
		<main class="content-row">
			<div class="content-box-01 single-team">
				<div class="container">
					<div class="row">
						<div class="col-sm-9 col-md-9 col-lg-9">
						
							<div class="row">
								<div class="col-sm-6 col-md-4 col-lg-4 text-center">
									<div class="price-box-02__header price-box-02__header_ds price-box-02__header_ds2">
										<h3 class="price-box-02__header-title">عدد الدورات</h3>
										<p class="price-box-02__header-price">
											50
											<span class="price-box-01__date"> دورة </span>
										</p>
									</div>
									<div class="text-right">
										<a class="btn-show-all" href="#"><i class="fa fa-eye"></i> مشاهدة كل الدورات </a>
									</div>

								</div>

								<div class="col-sm-6 col-md-4 col-lg-4 text-center">
									<div class="price-box-02__header price-box-02__header_ds price-box-02__header_ds2">
										<h3 class="price-box-02__header-title">عدد الطلاب  </h3>
										<p class="price-box-02__header-price">
											250
											<span class="price-box-01__date"> طالب </span>
										</p>
									</div>
									<div class="text-right">
										<a class="btn-show-all" href="#"><i class="fa fa-eye"></i> كل الطلاب </a>
									</div>
								</div>

								<div class="col-sm-6 col-md-4 col-lg-4 text-center">
									<div class="price-box-02__header price-box-02__header_ds price-box-02__header_ds2">
										<h3 class="price-box-02__header-title">عدد الفيديوهات  </h3>
										<p class="price-box-02__header-price">
											250
											<span class="price-box-01__date"> طالب </span>
										</p>
									</div>
									<div class="text-right">
										<a class="btn-show-all" href="#"><i class="fa fa-eye"></i> مشاهدة الكل  </a>
									</div>
								</div>
							</div>		 
								<hr>
							<div class="row">
                                                            <div id='calendar'></div>
								<div class="col-lg-12">
										<h3 class="title-02 title-02--mr-01"> 
											احدث الدورات
										</h3>
									<div class="row">
										<ul class="product-list product-list-ds">

											<li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
												<figure class="product-list__img">
													<a href="single_course.htm">
														<img src="<?= base_url()?>assets/home/img/product_list/product_img-01.jpg" alt="">
													</a>
												</figure>
												<div class="product-list__content">
													<a class="product-list__category" href="#">الاقتصاد</a>
													<h3 class="product-list__title">
														<a href="single_course.htm">اسم تجريبي للدورة </a>
													</h3>
													<ul class="product-list__star-list">
														<li>
															<a href="#">
																<i class="fa fa-star" aria-hidden="true"></i>
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-star" aria-hidden="true"></i>
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-star" aria-hidden="true"></i>
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-star" aria-hidden="true"></i>
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-star" aria-hidden="true"></i>
															</a>
														</li>
													</ul>
													<p class="product-list__price">$ 150</p>
												</div>
												<div class="product-list__item-info">
													<p class="item-info__text-01">35 درس</p>
													<p class="item-info__text-02">47  الاماكن الشاغرة</p>
												</div>
											</li>

											<li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
												<figure class="product-list__img">
													<a href="single_course.htm">
														<img src="<?= base_url()?>assets/home/img/product_list/product_img-06.jpg" alt="">
													</a>
												</figure>
												<div class="product-list__content">
													<a class="product-list__category" href="#">الاقتصاد</a>
													<h3 class="product-list__title">
														<a href="single_course.htm">اسم تجريبي للدورة </a>
													</h3>
													<ul class="product-list__star-list">
														<li>
															<a href="#">
																<i class="fa fa-star" aria-hidden="true"></i>
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-star" aria-hidden="true"></i>
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-star" aria-hidden="true"></i>
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-star" aria-hidden="true"></i>
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-star" aria-hidden="true"></i>
															</a>
														</li>
													</ul>
													<p class="product-list__price">$ 150</p>
												</div>
												<div class="product-list__item-info">
													<p class="item-info__text-01">35 درس</p>
													<p class="item-info__text-02">47  الاماكن الشاغرة</p>
												</div>
											</li>

											<li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
												<figure class="product-list__img">
													<a href="single_course.htm">
														<img src="<?= base_url()?>assets/home/img/product_list/product_img-02.jpg" alt="">
													</a>
												</figure>
												<div class="product-list__content">
													<a class="product-list__category" href="#">الاقتصاد</a>
													<h3 class="product-list__title">
														<a href="single_course.htm">اسم تجريبي للدورة </a>
													</h3>
													<ul class="product-list__star-list">
														<li>
															<a href="#">
																<i class="fa fa-star" aria-hidden="true"></i>
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-star" aria-hidden="true"></i>
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-star" aria-hidden="true"></i>
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-star" aria-hidden="true"></i>
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-star" aria-hidden="true"></i>
															</a>
														</li>
													</ul>
													<p class="product-list__price">$ 150</p>
												</div>
												<div class="product-list__item-info">
													<p class="item-info__text-01">35 درس</p>
													<p class="item-info__text-02">47  الاماكن الشاغرة</p>
												</div>
											</li>

											<li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
												<figure class="product-list__img">
													<a href="single_course.htm">
														<img src="<?= base_url()?>assets/home/img/product_list/product_img-03.jpg" alt="">
													</a>
												</figure>
												<div class="product-list__content">
													<a class="product-list__category" href="#">الاقتصاد</a>
													<h3 class="product-list__title">
														<a href="single_course.htm">اسم تجريبي للدورة </a>
													</h3>
													<ul class="product-list__star-list">
														<li>
															<a href="#">
																<i class="fa fa-star" aria-hidden="true"></i>
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-star" aria-hidden="true"></i>
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-star" aria-hidden="true"></i>
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-star" aria-hidden="true"></i>
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-star" aria-hidden="true"></i>
															</a>
														</li>
													</ul>
													<p class="product-list__price">$ 150</p>
												</div>
												<div class="product-list__item-info">
													<p class="item-info__text-01">35 درس</p>
													<p class="item-info__text-02">47  الاماكن الشاغرة</p>
												</div>
											</li>

											<li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
												<figure class="product-list__img">
													<a href="single_course.htm">
														<img src="<?= base_url()?>assets/home/img/product_list/product_img-04.jpg" alt="">
													</a>
												</figure>
												<div class="product-list__content">
													<a class="product-list__category" href="#">الاقتصاد</a>
													<h3 class="product-list__title">
														<a href="single_course.htm">اسم تجريبي للدورة </a>
													</h3>
													<ul class="product-list__star-list">
														<li>
															<a href="#">
																<i class="fa fa-star" aria-hidden="true"></i>
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-star" aria-hidden="true"></i>
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-star" aria-hidden="true"></i>
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-star" aria-hidden="true"></i>
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-star" aria-hidden="true"></i>
															</a>
														</li>
													</ul>
													<p class="product-list__price">$ 150</p>
												</div>
												<div class="product-list__item-info">
													<p class="item-info__text-01">35 درس</p>
													<p class="item-info__text-02">47  الاماكن الشاغرة</p>
												</div>
											</li>

											<li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
												<figure class="product-list__img">
													<a href="single_course.htm">
														<img src="<?= base_url()?>assets/home/img/product_list/product_img-05.jpg" alt="">
													</a>
												</figure>
												<div class="product-list__content">
													<a class="product-list__category" href="#">الاقتصاد</a>
													<h3 class="product-list__title">
														<a href="single_course.htm">اسم تجريبي للدورة </a>
													</h3>
													<ul class="product-list__star-list">
														<li>
															<a href="#">
																<i class="fa fa-star" aria-hidden="true"></i>
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-star" aria-hidden="true"></i>
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-star" aria-hidden="true"></i>
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-star" aria-hidden="true"></i>
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-star" aria-hidden="true"></i>
															</a>
														</li>
													</ul>
													<p class="product-list__price">$ 150</p>
												</div>
												<div class="product-list__item-info">
													<p class="item-info__text-01">35 درس</p>
													<p class="item-info__text-02">47  الاماكن الشاغرة</p>
												</div>
											</li>


										</ul>
									</div> 
								</div>
							</div>	
														
						</div>	
										
						<div class="col-sm-3 col-md-3 col-lg-3 single-team__img_profile">
							<figure class="single-team__img">
                                                                
								<img src="<?=base_url('upload/' . $info->Img );?>" alt="">
								<h5 class="single-team__info-title">  <?=$info->Name;?> </h5>
								<ul class="list-unstyled list-inline">
									<li><a href="<?=site_url();?>dashborad/student/profile/view/<?=$info->Token;?>"><i class="fa fa-user"></i> الملف الشخصي </a></li>
									<li><a href="<?=site_url();?>dashborad/student/profile/edit/<?=$info->Token;?>"><i class="fa fa-edit"></i> تعديل</a></li>
								</ul>
							</figure>
						</div>
						
					</div>
				</div>
			</div>
		</main>


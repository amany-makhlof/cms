<?php extract($dataArray);  ?>

<main class="content-row">
	<div class="page-title-wrapp">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-title-01">  <?=$Dep['Name'];?> </h1>
				</div>
			</div>
		</div>
	</div>
	<div class="content-box-01 padding-top-50 padding-bottom-74">
		<div class="container">
			<div class="row margin-bottom-22">

              <?php
			  if($departments==false){echo lang('am_not_exist');}else{
			   foreach($departments as $u): ?>
				<div class="col-sm-4 col-md-4 col-lg-4 text-center">
					<div class="price-box-02 supsection-ds-b">
						<div class="price-box-02__header">
							<p class="price-box-02__header-price">
								<?=$u->Name;?>
							</p>
						</div>
						<p><?=$u->Content;?></p>
						<button class="price-btn" type="button">عرض الدورات</button>
					</div>
				</div>
             <?php endforeach; }?>
			</div>
		</div>
	</div>

</main>
	


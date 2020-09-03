<section class="home">
	<!-- home bg -->
	<div class="owl-carousel home__bg">
		<div class="item home__cover" data-bg="img/home/home__bg.jpg"></div>
		<div class="item home__cover" data-bg="img/home/home__bg.jpg"></div>
		<div class="item home__cover" data-bg="img/home/home__bg.jpg"></div>
		<div class="item home__cover" data-bg="img/home/home__bg.jpg"></div>
		<div class="item home__cover" data-bg="img/home/home__bg.jpg"></div>
	</div>
	<!-- end home bg -->

	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="home__title">หนังใหม่</h1>

				<button class="home__nav home__nav--prev" type="button">
					<i class="icon ion-ios-arrow-round-back"></i>
				</button>
				<button class="home__nav home__nav--next" type="button">
					<i class="icon ion-ios-arrow-round-forward"></i>
				</button>
			</div>

			<div class="col-12">
				<div class="owl-carousel home__carousel">
					<!-- card -->
					<?php foreach ($new_movie_recom as $value) { ?>
						<?php
						$id = $value['movie_id'];
						$urlvideo = base_url('/page/video/id/' . $id . '/main');
						?>
						<div class="card card--big">
							<div class="card__cover">

								<img class="home-box" src='<?php echo $value['movie_picture']; ?>' alt="">
								<a href="<?php echo $urlvideo; ?>" class="card__play">
									<i class="icon ion-ios-play"></i>
								</a>
								<span class="card__rate card__rate--green">8.4</span>
							</div>
							<div class="card__content">
								<h3 class="card__title"><a href="#"><?php echo $value['movie_thname']; ?></a></h3>
								<span class="card__category">
									<a href="#"><?php echo strtoupper($value['movie_quality']); ?></a>

								</span>
							</div>
						</div>
					<?php  } ?>
					<!-- end card -->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end home -->

<!-- content กลาง -->
<section class="content">
	<div class="content__head">
		<div class="container">
			<div class="row">
				<diiv class="col-12">
				
					<ul class="nav nav-tabs content__tabs" id="content__tabs" role="tablist">
						

						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">หนังใหม่</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">หนัง Action</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">หนังดราม่า</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">หนังโรแมนติก</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">หนังผจญภัย</a>
						</li>
					</ul>
					<!-- end content tabs nav -->

					<!-- content mobile tabs nav -->
					<div class="content__mobile-tabs" id="content__mobile-tabs">
						<div class="content__mobile-tabs-menu dropdown-menu" aria-labelledby="mobile-tabs">
							<ul class="nav nav-tabs" role="tablist">
								<li class="nav-item"><a class="nav-link active" id="1-tab" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">หนังใหม่</a></li>
							</ul>
						</div>
					</div>
					<!-- end content mobile tabs nav -->
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-lg-2 col-md-3 col-xs-12 ">
				<div class="price d-none d-sm-block">
					<div class="price__item price__item--first "><span>หมวดหมู่หนัง</span></div>
					<?php foreach($category_id as $value){?>
					<div class="price__item"><span><?php echo $value['category_name'];?></span></div>
					<?php }?>
					<!-- <a href="#" class="price__btn">Choose Plan</a> -->
					
				</div>
			
				
					<?php foreach ($ads as $value) {
						if ($value['ads_position'] == "3") {
					?>
					<div class="slide-ads">
						<img class="mx-auto d-block" src='<?php echo  $backURL . "ads/" . $value['ads_picture']; ?>' style="padding-top: 10px;width: 100%;" alt="" title="">
					</div>
			<?php } else {
						}
					}
					?>
			</div>
			<div class="col-lg-10 col-md-9 col-xs-6">
				<!-- content tabs -->
				<div class="tab-content">
					<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab">
					<h2 class="content__title">รายการหนัง</h2>
						<div class="row">
						
							<!-- card -->
							<?php foreach ($list_video as $value) { ?>
								<?php
								$id = $value['movie_id'];
								$urlvideo = base_url('/page/video/id/' . $id . '/main');
								?>

								<div class="col-6 col-sm-4 col-md-4 col-xl-2">
									<div class="card">
										<div class="card__cover">
											<img class="home-box" src="<?php echo $value['movie_picture']; ?>" alt="">
											<a href="<?php echo $urlvideo; ?>" class="card__play">
												<i class="icon ion-ios-play"></i>
											</a>
											<span class="card__rate card__rate--green">7.1</span>
										</div>
										<div class="card__content">
											<h3 class="card__title"><a href="<?php echo $urlvideo; ?>"><?php echo $value['movie_thname']; ?></a></h3>
											<span class="card__category">
												<a href="<?php echo $urlvideo; ?>"><?php echo strtoupper($value['movie_quality']); ?></a>
											</span>
										</div>
									</div>
								</div>
							<?php } ?>
							<!-- end card -->

						</div>
						<!-- carousel -->
						<div class="col-12">
							<ul class="paginator">
								<li class="paginator__item paginator__item--prev">
									<a href="#"><i class="icon ion-ios-arrow-back"></i></a>
								</li>
								<li class="paginator__item"><a href="#">1</a></li>
								<li class="paginator__item paginator__item--active"><a href="#">2</a></li>
								<li class="paginator__item"><a href="#">3</a></li>
								<li class="paginator__item"><a href="#">4</a></li>
								<li class="paginator__item paginator__item--next">
									<a href="#"><i class="icon ion-ios-arrow-forward"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- <div class="col-lg-2 col-md-3 col-xs-12 ">
			</div> -->
		</div>
	</div>
</section>
<!-- /content กลาง  -->
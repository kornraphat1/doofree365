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
		<div class="header-single col-12">
			<h1 class="home__title title-single"> <?= $title ?> </h1>
		</div>
	</div>
</div>
</section>
<!-- end home -->

<!-- content กลาง -->
<section class="content">
	<div class="content__head">
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-2 col-md-3 col-xs-12 ">
				<div class="price d-none d-sm-block">
					<div class="price__item price__item--first "><span>หมวดหมู่</span></div>
					<?php foreach ($category_id as $value) {

						$category_name	=	urldecode(trim(str_replace(")", "", (str_replace("(", "", (str_replace(" ", "-", $value['category_name'])))))));
					?>
						<div class="price__item"><a href="<?php echo base_url() . '/categoty/' . $value['category_id'] . '/' . $category_name ?>" class="genres"><?php echo $value['category_name']; ?></a></div>

					<?php } ?>
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
							<?php

							if (!empty($list_video)) {
								foreach ($list_video as $value) { ?>
									<?php
									$id = $value['movie_id'];
									if ($value['movie_type'] == 'se') {

										$url_name =  urldecode(trim(str_replace(")", "", (str_replace("(", "", (str_replace(" ", "-", $value['movie_thname'])))))));
										$urlvideo = urldecode(base_url('/series/' . $id . '/' . $url_name));
									} else {
										$url_name =  urldecode(trim(str_replace(")", "", (str_replace("(", "", (str_replace(" ", "-", $value['movie_thname'])))))));
										$urlvideo = urldecode(base_url('/movie/' . $id . '/' . $url_name));
									}
									?>

									<div class="">
										<div class="card_movie">
											<div class="card__cover">
												<img class="home-img border_2" src="<?php echo $value['movie_picture']; ?>" alt="<?php echo $value['movie_thname']; ?>" title="<?php echo $value['movie_thname']; ?>" sizes="(max-width: 300px) 100vw, 300px">
												<a href="<?php echo $urlvideo; ?>" class="card__play">
													<i class="icon ion-ios-play"></i>
												</a>
												<span class="card__rate card__rate--green"><?php echo ($value['movie_ratescore']); ?></span>
											</div>
											<div class="card__content">
												<h3 class="card__title"><a href="<?php echo $urlvideo; ?>"><?php echo $value['movie_thname']; ?></a></h3>
												<div class="card-detail">
													<?php if (!empty($value['movie_quality'])) { ?>
														<span class="card__category card-hd">
															<?php echo strtoupper($value['movie_quality']); ?>
														</span>
													<?php } ?>
													<span class="card-view"><i class="fa fa-eye"></i> <?php echo ($value['movie_view']); ?></span>
												</div>
											</div>
										</div>
									</div>
							<?php }
							} else {


								echo "<h1 style='float:left;color:#fff;width:100%;'><center>ไม่พบหนังที่ค้นหา</center></h1>";
							}
							?>
							<!-- end card -->

						</div>
						<!-- carousel -->
						<div class="box" style="padding-top: 4rem;">
							<div class="navigation">
								<ul>
									<div class="topbar-filter">
										<div class="pagination2" style="text-align: center;">
											<?= pagination($paginate['page'], $paginate['total_page']); ?>
										</div>
									</div>
								</ul>
							</div>
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
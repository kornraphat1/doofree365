<style>
	.btn-twitter {
		position: relative;
		height: 20px;
		box-sizing: border-box;
		padding: 1px 8px 1px 6px;
		background-color: #1b95e0;
		color: #fff;
		border-radius: 3px;
		font-weight: 500;
		cursor: pointer;
	}

	.btn-twitter i {
		position: relative;
		top: 2px;
		display: inline-block;
		width: 14px;
		height: 14px;
		background: transparent 0 0 no-repeat;
		background-image: url(data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2072%2072%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h72v72H0z%22%2F%3E%3Cpath%20class%3D%22icon%22%20fill%3D%22%23fff%22%20d%3D%22M68.812%2015.14c-2.348%201.04-4.87%201.744-7.52%202.06%202.704-1.62%204.78-4.186%205.757-7.243-2.53%201.5-5.33%202.592-8.314%203.176C56.35%2010.59%2052.948%209%2049.182%209c-7.23%200-13.092%205.86-13.092%2013.093%200%201.026.118%202.02.338%202.98C25.543%2024.527%2015.9%2019.318%209.44%2011.396c-1.125%201.936-1.77%204.184-1.77%206.58%200%204.543%202.312%208.552%205.824%2010.9-2.146-.07-4.165-.658-5.93-1.64-.002.056-.002.11-.002.163%200%206.345%204.513%2011.638%2010.504%2012.84-1.1.298-2.256.457-3.45.457-.845%200-1.666-.078-2.464-.23%201.667%205.2%206.5%208.985%2012.23%209.09-4.482%203.51-10.13%205.605-16.26%205.605-1.055%200-2.096-.06-3.122-.184%205.794%203.717%2012.676%205.882%2020.067%205.882%2024.083%200%2037.25-19.95%2037.25-37.25%200-.565-.013-1.133-.038-1.693%202.558-1.847%204.778-4.15%206.532-6.774z%22%2F%3E%3C%2Fsvg%3E);
	}
</style>

<body class="body">
	<section class="section section--details section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">

				<div class="col-lg-12 col-lg-6">
					<div class=" card--details">
						<div class="row">
							<div class="col-lg-3 col-md-12">
								<div class="card__cover">
									<img src="<?php echo $video_data['movie_picture']; ?>" alt="">
									<span class="card__rate card__rate--green">8.4</span>
								</div>
								<!-- ADS2 -->
								<div class="ads">
									<?php foreach ($ads as $value) {
										if ($value['ads_position'] == "3") {
									?>
									<div class="slide-ads2">
											<img src='<?php echo  $backURL . "ads/" . $value['ads_picture']; ?>' style="padding-top: 10px;" alt="">
								</div>
								
								<?php } else {
										}
									} ?>
								</div>

								<!-- /ADS2 -->
							</div>
							<!-- player -->

							<div class="col-lg-8 col-md-12">
								<iframe class="if-size" src="<?= base_url('player/' . $video_data['movie_id'] . '/' . $feildplay) ?>" scrolling="no" frameborder="0"> </iframe>
								<h1 class="section__title bd-hd"><?php echo $video_data['movie_thname']; ?></h1>
								<div class="movie-single-ct main-content"><br>
									<a class="redbtn-alert" style=" float: right;">แจ้งหนังเสีย</a>
									<div class="row" style="display: inline-flex;">
										<div id="fb-root"></div>
										<div class="fb-share-button" data-href="https://www.your-domain.com/your-page.html" data-layout="button_count"></div>

										<div class="line-it-button" data-lang="en" data-type="share-a" data-ver="3" data-url="https://media.line.me/en/how_to_install" data-color="default" data-size="small" data-count="false" style="display: none;"></div>

										<a target="_blank" href="https://twitter.com/share?hashtags=ดูหนังออนไลน์,ดูหนังใหม่&text=ดูหนัง หนัง ดูหนังออนไลน์ หนังใหม่ ดูหนังฟรี 2020" class="btn-b" id="b"><i></i>
											<div class="btn-twitter" data-scribe="component:button" style="width: 65px;">
												<a target="_blank" href="https://twitter.com/share?hashtags=ดูหนังออนไลน์,ดูหนังใหม่&text=ดูหนัง หนัง ดูหนังออนไลน์ หนังใหม่ ดูหนังฟรี 2020" class="btn-b" id="b"><i></i>
													<span style="padding: 0px 0px 0px;" class="label" id="l">
														<font color="white" style="font-size: 11px;">Tweet</font>
													</span>
												</a>
											</div>

									</div><br><br>
									<div class="fb-comments col-xs-12 d-none d-sm-block" style="text-align: center;" data-href="<?= base_url(uri_string()) ?>" data-numposts="5" data-width=""></div>

								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- /ใส่ Video -->
	</section>
	<!-- end content -->


	<!-- Root element of PhotoSwipe. Must have class pswp. -->
	<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

		<!-- Background of PhotoSwipe. 
		It's a separate element, as animating opacity is faster than rgba(). -->
		<div class="pswp__bg"></div>

		<!-- Slides wrapper with overflow:hidden. -->
		<div class="pswp__scroll-wrap">

			<!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
			<!-- don't modify these 3 pswp__item elements, data is added later on. -->
			<div class="pswp__container">
				<div class="pswp__item"></div>
				<div class="pswp__item"></div>
				<div class="pswp__item"></div>
			</div>

			<!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
			<div class="pswp__ui pswp__ui--hidden">

				<div class="pswp__top-bar">

					<!--  Controls are self-explanatory. Order can be changed. -->

					<div class="pswp__counter"></div>

					<button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

					<button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

					<!-- Preloader -->
					<div class="pswp__preloader">
						<div class="pswp__preloader__icn">
							<div class="pswp__preloader__cut">
								<div class="pswp__preloader__donut"></div>
							</div>
						</div>
					</div>
				</div>

				<button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>

				<button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>

				<div class="pswp__caption">
					<div class="pswp__caption__center"></div>
				</div>
			</div>
		</div>
	</div>

	<!-- JS -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.mousewheel.min.js"></script>
	<script src="js/jquery.mCustomScrollbar.min.js"></script>
	<script src="js/wNumb.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.morelines.min.js"></script>
	<script src="js/plyr.min.js"></script>
	<script src="js/photoswipe.min.js"></script>
	<script src="js/photoswipe-ui-default.min.js"></script>
	<script src="js/main.js"></script>
</body>
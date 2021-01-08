<div id="content">
	<div id="secondseo">
		<h2>ดูหนังฟรีได้แบบไม่เสียเงินหรือเลือกดูหนังออนไลน์อัพเดตใหม่ก่อนใคร</h2>
		<h2>เลือกหนังที่จะดูได้ตามหมวดหมู่หรือเลือกดูหนังออนไลน์ที่อัพใหม่ได้ที่หน้าแรก</h2>
		<h2>เลือกดูหนังตามปีที่ฉาย</h2>
	</div>
	<div class="content-left">
		<div class="sidebar">
			<div class="sidebar-header">
				<p style="font-size: 18px; text-align: center;">
					ปีที่ฉาย
				</p>
			</div>
			<ul>
				<?php foreach ($listyear as $val) {
					// print_r($val['movie_year']); 
					if ($val['movie_year'] > '1988') { ?>

						<div class="col-xs-6">
							<li class="cat-item">
								<a href="<?php echo base_url('/page/year/' . $val['movie_year']); ?>"><?php echo $val['movie_year']; ?></a>
							</li>
						</div>
				<?php }
				} ?>
			</ul>
		</div>
	</div>
	<div class="content-main">
		<div class="box">
			<div class="box-header">
				<div class="title">
					<a href="#" title="Aladdin อะลาดิน" target="_blank" class="google-search">
					</a>
					<h1>
						<a>
							<?php echo $video_data['movie_thname']; ?>
							<!-- <div class="imdb-rating">
								<div class="imdb-rating-content">
									<span>7</span> /10
								</div>
							</div> -->
						</a>
					</h1>
				</div>
			</div>
			<?php //echo "<pre>"; print_r($video_data);
			?>
			<div class="movie-header">
				<div class="movie-thumbnail">
					<img src="<?php echo $video_data['movie_picture']; ?>" alt="<?php echo $video_data['movie_thname']; ?>">
				</div>
				<div class="movie-trailer">
					<?php
						$yb = explode('?v=', $video_data['movie_preview']);
						if(count($yb)>1){
							$url = "https://www.youtube.com/embed/" . $yb[1];
						}else{
							$url = "https://www.youtube.com/embed/" . $yb[0];
						}
					?>
					<iframe src="<?php echo $url; ?>" frameborder="0" allowfullscreen=""></iframe>
				</div>
			</div>
		</div>
		<!-- Banner ก่อน Video -->
		<!-- <div class="box">
			<a href="https://www.webdoonung.com/ads/redirect/19" target="_new">
				<img src="https://www.webdoonung.com/images/banners/r75oPuO5aYMV5RH1AcVATdw3bimi28u1200-450V9.gif" width="100%" alt="banner" style="border: none; height: auto;">
			</a>
		</div> -->
		<!-- Banner ก่อน Video -->

		<div class="box">
			<div class="filmicerik">
				<div class="movie-description">
					<div class="description align-left">

						<h2 style="color:#2ebf39">เรื่องย่อ</h2>

						<p style="font-size:100%;font-weight: normal;">

							<?php
								if( !empty($video_data['movie_description']) ){
									echo $video_data['movie_description'];
								}else{
									echo "-";
								}
							?>
						
						</p>

					</div>
				</div>
				
				<script>
					// Banner Video (โฆษณา Movie)
					// var player_0 = videojs("ads_movie_0");
					// player_0.src({
					// 	src: "https://www.webdoonung.com/images/banners/ooPSPVS1gPS69SKl4HyBiRg7onZMjxY4JEDsFP2aHza39niQfbwbHvMULXTNzDufa442th.mp4",
					// });

					// console.log("https://www.webdoonung.com/images/banners/ooPSPVS1gPS69SKl4HyBiRg7onZMjxY4JEDsFP2aHza39niQfbwbHvMULXTNzDufa442th.mp4");

					// player_0.on('displayClick', function(e) {
					// 	if (start_ads_0 >= 1) {
					// 		window.open("https://www.webdoonung.com/ads/redirect/18");
					// 	}
					// });

					// player_0.on('click', function(e) {
					// 	if (start_ads_0 >= 1) {
					// 		window.open("https://www.webdoonung.com/ads/redirect/18");
					// 	}
					// });
				</script>


				<!-- <div class="player_container" id="player_movie" style="display: none;"> -->
				<div style="display: block; padding: 15px;" class="movie_player">
					<!-- Movie source -->
					<!-- <iframe src="<?= base_url('player/' . $video_data['movie_id'] . '/' . $feildplay) ?>" id="player_iframe" style="width: 100%; height: 420px; border: none;/* position: relative; z-index: 2147483647*/" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" scrolling="no" __idm_id__="993216513"></iframe> -->

					<div class="video-info">
						<!-- 16:9 aspect ratio  -->

						
						<!-- Your share button code -->

						<!-- ********************* SOURCS MOVIES  ****************************  -->
						<div class="embed-responsive embed-responsive-16by9 video-embed-box" style=" margin-bottom: 10px;">
							<!-- <iframe src="https://freeball95.com/E/M07814.mp4" width="500px" class="embed-responsive-item"></iframe> -->
								<?php
							foreach ($video_data['name_ep'] as $key => $value) {
								$url_name =  urldecode(trim(str_replace(")", "", (str_replace("(", "", (str_replace(" ", "-", $video_data['movie_thname'])))))));
								$url_epname =  urldecode(trim(str_replace(")", "", (str_replace("(", "", (str_replace(" ", "-", $value)))))));
							?>


								<p class="series-list"><a href="<?php echo base_url() . '/series/' . $video_data['movie_id'] . '/' . $url_name . '/' . $key . '/' . $url_epname ?>"> <?php echo $video_data['movie_thname'] . ' - ' . $value ?> </a></p>
							<?php } ?>
						</div>
						<!-- ********************* SOURCS MOVIES  ****************************  -->
					</div>
					<!-- /Movie source -->
				</div>
				<!-- </div> -->


				<!-- <div id="sound_th" class="sound_container">
					<div class="player_ep">
						<div style="text-align: center">
							<button type="button" data-href="https://www.webdoonung.com/streaming/ZXlKcGRpSTZJazgzZEV4UGJXc3hSRlJsYjFWWlVVVm5YQzk1YTI5M1BUMGlMQ0oyWVd4MVpTSTZJbXh4TkN0dVFtRnNibkpsYjFCTFduRnJUbkZZZEZ3dllqSm9jbko1UWpNMU1VeHVTVGxqUVhwdGRHMUZNRFJsUVd0RUszVnNUbTQyU1cxbWFrZEVhbnBGSWl3aWJXRmpJam9pTkdGaE5HTTFOR1l5TVRneFlXVTJNRFppTkRBM056SmpZbVk0TnpJd1lUazRZbUl6T1dNeE1HTTJOamRpWWpoaFlUVTFOek0wTWpCaVl6bGlZVFZrWkNKOQ==" data-resolution="google_res" onclick="triggerAd()" class="btn btn-primary play-ep" style="color: #fff;margin-left: 0px;border-radius: 2px;border-bottom: 4px solid #127ba3;padding: 5px 10px;font-size: 13px;font-weight: 600;color: #fff;margin-right: 0px">
								<i class="fas fa-link"></i> หลัก
							</button>
							<br>
						</div>
					</div>
					<div id="google_res" class="resolution_path" style="text-align: right;display: block;">
					</div>
					<div id="openload_res" class="resolution_path" style="text-align: right;display: none">
					</div>
					<div id="streamango_res" class="resolution_path" style="text-align: right;display: none">
					</div>
				</div> -->
				<div id="sound_sub" class="sound_container" style="display: none">
					<div class="player_ep">
						<div style="text-align: center">
							<br>
						</div>
					</div>
					<div style="text-align: right" id="google_res_sub" class="resolution_path" style="display: block">
					</div>
					<div style="text-align: right" id="openload_res_sub" class="resolution_path" style="display: none">
					</div>
					<div style="text-align: right" id="streamango_res_sub" class="resolution_path" style="display: none;">
					</div>
				</div>

			
				<div style="text-align: right;margin-top: 20px;">
					<!-- <button class="btn" id="movie_refresh" style="background-color: #DB601E; color: white">
						รีเฟชหนังไม่เล่น
					</button> -->

				</div>
				<script>
					// jQuery(document).ready(function() {

					// 	jQuery(".play-ep").click(function() {
					// 		var ep = jQuery(this).attr('data-href'); // ค้นหา url ไฟล์
					// 		var resolution = jQuery(this).attr('data-resolution');
					// 		jQuery("#player_iframe").attr('src', ep); // เปลี่ยน ep ให้ iframe
					// 		jQuery(".play-ep").removeClass('btn-primary').addClass('btn-default'); // ลบ Active Button
					// 		jQuery(".play-ep").css({
					// 			'color': '#555',
					// 			'border-bottom': '4px solid #c3c3c3'
					// 		});
					// 		jQuery(this).removeClass('btn-default').addClass('btn-primary'); // ลบ Active Button
					// 		jQuery(this).css({
					// 			'border-bottom': '4px solid #127ba3',
					// 			'color': '#fff'
					// 		});
					// 		jQuery(".resolution_path").hide();
					// 		jQuery("#" + resolution).show();

					// 	});

					// 	jQuery(".episode_path").click(function() {
					// 		var ep = jQuery(this).attr('data-href'); // ค้นหา url ไฟล์
					// 		var name = jQuery(this).attr('data-ep-name');
					// 		jQuery("#player_iframe").attr('src', ep); // เปลี่ยน ep ให้ iframe
					// 		jQuery(".episode_path").css({
					// 			'background-color': '#5b5b5b'
					// 		});
					// 		jQuery(this).css({
					// 			'background-color': '#127ba3'
					// 		});
					// 	});

					// 	jQuery(".resolution").click(function() {
					// 		var ep = jQuery(this).attr('data-href'); // ดึง URL
					// 		jQuery("#player_iframe").attr('src', ep); // เปลี่ยน ep ให้ iframe

					// 		jQuery(".resolution").removeClass('btn-primary').addClass('btn-default'); // ลบ Active Button
					// 		jQuery(".resolution").css({
					// 			'color': '#555',
					// 			'border-bottom': '4px solid #c3c3c3'
					// 		});
					// 		jQuery(this).removeClass('btn-default').addClass('btn-primary'); // ลบ Active Button
					// 		jQuery(this).css({
					// 			'border-bottom': '4px solid #127ba3',
					// 			'color': '#fff'
					// 		});
					// 	});

					// 	jQuery(".sound_path").click(function() {

					// 		jQuery(".sound_path").removeClass('btn-primary').addClass('btn-default'); // ลบ Active Button
					// 		jQuery(".sound_path").css({
					// 			'color': '#555',
					// 			'border-bottom': '4px solid #c3c3c3'
					// 		});
					// 		jQuery(this).removeClass('btn-default').addClass('btn-primary'); // ลบ Active Button
					// 		jQuery(this).css({
					// 			'border-bottom': '4px solid #127ba3',
					// 			'color': '#fff'
					// 		});

					// 		jQuery(".sound_container").hide();

					// 		var path = jQuery(this).attr('data-sound');
					// 		var ep = jQuery(this).attr('data-href'); // ค้นหา url ไฟล์
					// 		jQuery("#player_iframe").attr('src', ep); // เปลี่ยน ep ให้ iframe
					// 		// console.log(path);
					// 		jQuery("#" + path).show();
					// 	});

					// 	//รีเฟสหนังไม่เล่น 
					// 	jQuery("#movie_refresh").click(function() {
					// 		var movie_url = jQuery('#player_iframe').attr('src');
					// 		jQuery("#player_iframe").attr('src', movie_url);
					// 	});

					// 	jQuery('#movie_fix').click(function() {
					// 		var request = "8818";
					// 		jQuery.ajax({
					// 			url: 'https://www.webdoonung.com/api/v1/moviecontact/' + request,
					// 			type: 'GET',
					// 			crossDomain: true,
					// 			cache: false,
					// 			success: function(data) {

					// 				// console.log(data);
					// 			}
					// 		});
					// 		alert('เราจะดำเนินการให้เร็วที่สุด')
					// 	});

					// });
				</script>
				<style>
					.resolution_path {
						margin-right: 20px;
					}

					.ads_movie {
						position: absolute;
						z-index: 98;
					}

					.movie_player {}

					.player_container {
						position: relative;
						width: 100%;
						height: 440px;
					}

					.player_ep {
						margin: 5px 0 10px 0;
					}

					.register-ads {
						position: absolute;
						z-index: 99;
						top: 20%;
						right: 0px;
						border-top-right-radius: 0;
						border-bottom-right-radius: 0;
						color: #fff;
						background-color: rgb(148, 13, 13);
						border-color: rgb(148, 13, 13);
						padding: 20px 21px 18px;
						line-height: 20px;
						font-size: 20px;
						opacity: .9;
						cursor: pointer;
					}

					.skip-ads {
						position: absolute;
						z-index: 99;
						top: 40%;
						right: 0px;
						border-top-right-radius: 0;
						border-bottom-right-radius: 0;
						color: #fff;
						background-color: #222;
						border-color: #151515;
						padding: 20px 21px 18px;
						line-height: 20px;
						font-size: 20px;
						opacity: .9;
					}

					.jw-controlbar {
						display: none;
					}
				</style>
				<script>
					// var ads_movie_0 = document.getElementById("ads_movie_0");
					// var ads_skip_0 = document.getElementById("skip_ads_0");
					// var ads_controller = document.getElementById("jw-controlbar");
					// var player_ads_0 = document.getElementById("player_ads_0");
					// var player_movie_0 = document.getElementById("player_movie_0");
					// var set_time_skip = document.getElementById("time_skip_0");
					// var start_ads_0 = 0;




					// // Videojs
					// // เมื่อเริ่มเล่น
					// player_0.on('play', function(e) {
					// 	start_ads_0++;
					// 	ads_skip_0.style.display = "block"; // แสดงปุ่มข้าม
					// 	var time_skip = parseInt(5);
					// 	set_time_skip.innerHTML = time_skip;
					// 	// ads_controller.style.display = "none";
					// 	// ads_controller.style.display = "none";
					// 	var count_down = setInterval(function() {
					// 		time_skip--;
					// 		set_time_skip.innerHTML = time_skip;
					// 	}, 1000); // นับถอยหลัง


					// 	// เปลี่ยนเวลาโฆษณา
					// 	setTimeout(function() {
					// 		clearInterval(count_down);
					// 		ads_skip_0.setAttribute("disabled", false);
					// 		ads_skip_0.innerHTML = "ข้ามโฆษณา";
					// 	}, 5000)

					// });

					// player_0.on('stop', function(e) {
					// 	// console.log('stop');
					// 	start_ads_0++;
					// 	ads_skip_0.style.display = "block"; // แสดงปุ่มข้าม
					// 	var time_skip = parseInt(1);
					// 	set_time_skip.innerHTML = time_skip;
					// 	// ads_controller.style.display = "none";
					// 	// ads_controller.style.display = "none";
					// 	var count_down = setInterval(function() {
					// 		time_skip--;
					// 		set_time_skip.innerHTML = time_skip;
					// 	}, 1000); // นับถอยหลัง

					// 	setTimeout(function() {
					// 		clearInterval(count_down);
					// 		ads_skip_0.setAttribute("disabled", false);
					// 		ads_skip_0.innerHTML = "ข้ามโฆษณา";
					// 	}, 5000)

					// });

					// player_0.on('pause', function(e) {

					// });

					// player_0.on('ended', function(e) {
					// 	player_ads_0.style.display = "none"; // ปิดโฆษณา
					// 	// ถ้าเป็น Ads ตัวสุดท้าย ให้แสดงหนัง
					// 	player_movie.style.display = "block"; // แสดงหนัง
					// 	// ถ้าไม่เป็น Ads ตัวสุดท้าย ให้แสดง Ads ถัดไป
					// });

					// // เมื้่อกดปุ่ม Skip
					// ads_skip_0.addEventListener("click", function() {
					// 	if (ads_skip_0.getAttribute("disabled") == "false") // เช็คว่า ads_skip ครบ 3 วิหรือไม่แล้วปุ่มได้ปิด disabled ยัง
					// 	{
					// 		player_0.pause(); // หยุดเล่นโฆษณา
					// 		player_ads_0.style.display = "none"; // ปิดโฆษณา
					// 		// ถ้าเป็น Ads ตัวสุดท้าย ให้แสดงหนัง
					// 		player_movie.style.display = "block"; // แสดงหนัง
					// 		// ถ้าไม่เป็น Ads ตัวสุดท้าย ให้แสดง Ads ถัดไป
					// 	}
					// });
				</script>
				<style>
					.btn-primary {
						color: #fff;
						background-color: #158cba;
						border-radius: 2px;
					}

					.play-ep {
						/* border-color: #127ba3; */
					}

					.btn {
						display: inline-block;
						margin-bottom: 0;
						text-align: center;
						vertical-align: middle;
						-ms-touch-action: manipulation;
						touch-action: manipulation;
						cursor: pointer;
						background-image: none;
						border: 1px solid transparent;
						white-space: nowrap;
						padding: 7px 12px;
						font-size: 14px;
						border-radius: 4px;
					}
				</style>
			</div>
		</div>


		<!-- <div class="box">
			<a href="https://www.webdoonung.com/ads/redirect/15" target="_new">
				<img src="https://www.webdoonung.com/images/banners/4LlD5JyjdH5eobYbUyX69zA3YYB4OGZ1000300ดูหนัง.gif" width="100%" alt="banner" style="border: none; height: auto;">
			</a>
		</div>
		<div class="box">
			<a href="https://www.webdoonung.com/ads/redirect/16" target="_new">
				<img src="https://www.webdoonung.com/images/banners/51O8eHNhzVRmlnZ25RNqrLaH3vCJTHO960240ดูหนังออนไลน์.gif" width="100%" alt="banner" style="border: none; height: auto;">
			</a>
		</div> -->
		<div class="actions">
		</div>
		<!-- <div class="box-content">
			<div class="content-tags">
				ป้ายกำกับ:
				<a href="https://www.webdoonung.com/tag/Aladdin-%E0%B8%AD%E0%B8%B0%E0%B8%A5%E0%B8%B2%E0%B8%94%E0%B8%B4%E0%B8%99" rel="tag">Aladdin อะลาดิน</a>
				<a href="http://webdoonung.com/" rel="tag">ดูหนังออนไลน์</a>
				<a href="http://webdoonung.com/" rel="tag">ดูหนัง HD</a>
				<div id="SC_TBlock_313538" class="SC_TBlock"></div>
			</div>
		</div> -->
		<div id="fb-root"></div>
		<script>
			(function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return;
				js = d.createElement(s);
				js.id = id;
				js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>

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
			.text-tw{
				color: #fff;
				font-size: 10px;
			}
		</style>
		<div style="display: inline-flex;">
			<!-- ปุ่มแชร์ facebook -->
			<div class="fb-share-button" data-href="<?= base_url(uri_string()) ?>" data-layout="button_count"></div>
			
			<!-- ปุ่มแชร์ไลน์ -->
			<div class="line-it-button" data-lang="en" data-type="share-a" data-ver="3" data-url="<?= base_url(uri_string()) ?>" data-color="default" data-size="small" data-count="false" style="display: none;"></div>
			<script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer"></script>
			<link rel="me" href="https://twitter.com/twitterdev" />
		
			<!-- ปุ่มแชร์ twitter -->
			<div class="btn-twitter navbar-right" data-scribe="component:button" style="width: 72px;">
				<a target="_blank" href="https://twitter.com/share?hashtags=ดูหนังออนไลน์,ดูหนังใหม่&text=ดูหนัง หนัง ดูหนังออนไลน์ หนังใหม่ ดูหนังฟรี 2020" class="btn-b" id="b"><i></i>
					<span style="padding: 0px 0px 0px;" class="label" id="l"><font color="white">Share</font></span>
				</a>
			</div>
		</div>
		<div id="fb-root"></div>
		<div class="box" style="position: relative;">
			<h3 style="font-color:#f2d45f;"> แสดงความคิดเห็น</h3>
			<div class="fb-comments" data-href="<?= base_url(uri_string()) ?>" data-colorscheme="dark" data-width="760" data-numposts="5"></div>
			<div id="fb-root"></div>
			<script>
				(function(d, s, id) {
					var js, fjs = d.getElementsByTagName(s)[0];
					if (d.getElementById(id)) return;
					js = d.createElement(s);
					js.id = id;
					js.src = 'https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v3.2&appId=254458338652270&autoLogAppEvents=1';
					fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));
			</script>
		</div>




		<!-- สุ่มหนัง ก่อน Footer -->
	
	</div>
	<!-- ADS ล่าง -->
	<div id="ads_fox_bottom">
		<div id="ads_fix_footer">
			<div style="text-align:center;">
				<div id="fix_footer">
					<?php foreach ($path_imgads as $value) {
						if (empty($value['ads_position'] == "4")) {
						} else { ?>
							<!-- ปุ่ม close ADS ล่าง -->
							<a href="javascript:void(0)" onclick="document.getElementById('ads_fox_bottom').style.display = 'none';" style="position:absolute;color:black;text-decoration:none;font-size:13px; font-weight:bold;font-family:tahoma,verdana,arial,sans-serif;border:0px solid white;padding:0px;z-index:999;margin-top: -10px;" data-wpel-link="internal"><img alt="close" title="close" src="https://4.bp.blogspot.com/-GXvKu86ra2Q/XWpNe4fvZNI/AAAAAAAACTk/j68WkcK79nYHrlCq67wd2l2gKj4FA9ZKgCLcBGAs/s1600/close.gif"></a>
					<?php }
					} ?>
				</div>
			</div>
			<?php
			foreach ($path_imgads as $value) {
				if ($value['ads_position'] == "4") {
			?>
					<div style="clear:both;"></div>
					<div id="fix_footer2" style="width:100%; display:block;  overflow:hidden; line-height:0px;">
						<div style="display:inline-block; width:100%; text-align:center;">
							<div class="textwidget custom-html-widget">
								<center><a onclick="onClickAds(<?= $value['ads_id'] ?>, <?= $branch ?>)" href="https://slotgame66.com" target="_blank" rel="noopener"><img alt="<?= $value['ads_name'] ?>" title="<?= $value['ads_name'] ?>" src="<?php echo  $backURL . "ads/" . $value['ads_picture']; ?>" width="70%"></a></center>
							</div>
						</div>
					</div>
					<div style="clear:both;"></div>
			<?php
				}
			}
			?>

		</div>
	</div>
	<!-- ADS ล่าง -->
	<!-- สุ่มหนัง ก่อน Footer -->
	<style>
		.movie-imdb b {
			background: url('https://www.webdoonung.com/images/icon-star.png') no-repeat 0;
			background-size: 11px 11px;
		}

		.imdb-rating {
			background: url(https://www.webdoonung.com/images/IMDb.png) no-repeat;
			background-size: 100% 100%;
			width: 160px;
			height: 36px;
			vertical-align: top;
			display: inline-block;
		}

		.description {
			padding: 10px;
			background-color: #2b2b2b;
			margin: 10px;
			border-radius: 4px;
			color: #f3f3f3;
		}

		.description p:first {
			font-size: 18px;
		}

		.description p:nth-child() {
			font-size: 14px;
			color: white;
		}
	</style>
	<div class="content-right">
		<div class="sidebar">
			<div class="sidebar-header">
				<p style="font-size: 18px; text-align: center;">
					หมวดหมู่
				</p>
			</div>
			<ul>

				<?php foreach ($category_id as $value) { ?>

					<li class="cat-item cat-left">
						<a href="<?php echo base_url('/page/categoty/id/' . $value['category_id'] . '/' . urlencode($value['category_name'])); ?>" title=<?= $value['category_name'] ?>>
							<?= $value['category_name'] ?> </a>
					</li>

				<?php } ?>

			</ul>
		</div>
	</div>
	<div class="clearfix"></div>
	<div style="display: none">
		<h3>ดูหนังตามหมวดหมู่เลือกหมวดหมู่ต่างๆเพื่อดูหนังออนไลน์</h3>
		<h3>ประเภทของหนัง ดูหนังต่างๆตามประเภทที่จัดไว้ คิกเพื่อดูหนังออนไลน์</h3>
	</div>



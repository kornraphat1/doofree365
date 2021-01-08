<div id="content">

    <div class="content-web">
        <h1 class="title-web"><span class="text-gold-linear">Doofree365</span></h1>
        <h2 class="title-description">หนังใหม่ ดูหนังออนไลน์ ครบทุกเรื่องทุกรสที่ Doofree365</h2>
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

                                <a href="<?php echo base_url('/year/' . $val['movie_year']); ?>"><?php echo $val['movie_year']; ?></a>

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
                <ul>
                    <li class="menu-item current-menu-item">
                        <h1><a>หนังใหม่</a></h1>
                    </li>
                </ul>
            </div>

            <?php foreach ($list_video as $value) {


                $id = $value['movie_id'];
              		 $s_replace = [
						")", "(", " ", '%'
					];
					$e_replace = [
						"", "", "-", '%25'
					];

					$url_name =  urldecode(trim(str_replace($s_replace, $e_replace,  $value['movie_thname'])));
					if ($value['movie_type'] == 'se') {

						$urlvideo = str_replace('%', '%25', urldecode(base_url('/series/' . $id . '/' . $url_name)));
					} else {

						$urlvideo = str_replace('%', '%25', urldecode(base_url('/movie/' . $id . '/' . $url_name)));
					}




					

            ?>

                <div class="movie">

                    <div class="movie-box">

                        <div class="movie-title">
                            <h2>
                                <a href='<?php echo $urlvideo; ?>'>
                                    <span class="movie-title-color"><?php echo $value['movie_thname']; ?></span>
                                </a>
                            </h2>
                        </div>

                        <div class="movie-imdb">
                            <b><span><?php echo $value['movie_ratescore']; ?></span></b>
                        </div>

                        <div class="movie-view">
                            <b style="word-wrap: break-word;">
                                <i class="fa fa-eye" aria-hidden="true"></i> 
                                <?php 
                                    if (empty($value['movie_view'])){ 
                                        echo "0"; 
                                    } else { 
                                        echo $value['movie_view'];
                                    } 
                                ?> คน
                            </b>
                        </div>

                        <?php

                        if ($value['movie_quality'] == "HD") {
                            $display = "red";
                        } else if ($value['movie_quality'] == "FullHD") {
                            $display = "red";
                        } else if ($value['movie_quality'] == "Zoom" || $value['movie_quality'] == "ZM") {
                            $display = "green";
                        } else if ($value['movie_quality'] == "4K") {
                            $display = "#e6be62";
                        } else {
                            $display = "green";
                        }

                        ?>

                        <div class="movie-corner movie-HD" style=" background-color: <?php echo $display; ?>;"><?php echo strtoupper($value['movie_quality']); ?></div>

                        <div class="movie-image">
                            <a href='<?php echo $urlvideo; ?>'>
                                <img src="<?php echo $value['movie_picture']; ?>" alt="<?php echo $value['movie_thname']; ?>" title="<?php echo $value['movie_thname']; ?>">
                            </a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

        <!-- Pagination -->

        <div class="box">
            <div class="navigation">
                <ul>
                    <div class="topbar-filter">
                        <div class="pagination2">
                            <?= pagination($paginate['page'], $paginate['total_page']); ?>
                        </div>
                    </div>
                </ul>
            </div>
        </div>

        <!-- /Pagination -->

    </div>





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
                        <h3 class="cate-name">
                            <a href="<?php echo base_url('/category/' . $value['category_id'] . '/' . urlencode(str_replace(' ','-',trim($value['category_name'])))); ?>" title=<?= $value['category_name'] ?>>
                                <?= $value['category_name'] ?> 
                            </a>
                        </h3>
                    </li>



                <?php } ?>



            </ul>

        </div>

    </div>

    <div class="clearfix"></div>

</div>


<div class="content-left">

    <div class="sidebar">

    </div>

</div>

<div class="content-main">

    <div class="box">

        <?php // echo "<pre>"; print_r($video_interest);die; 

        ?>

        <?php foreach ($video_interest as $value) {  ?>





            <div class="title-hd col-lg-12">

                <div class="box-header">
                    <ul>
                        <li class="menu-item current-menu-item">
                            <h3> <?php echo $value['category_name']; ?></h3>
                        </li>
                    </ul>

                    <ul style="float:right;">
                        <li class="menu-item current-menu-item">
                            <a class="pull-right" href="<?php echo "/category/" . $value['category_id'] . "/" . urlencode($value['category_name']); ?>" style="margin-right: 10px;">ดูทั้งหมด...</a>
                        </li>
                    </ul>

                </div>

            </div>





            <?php
            $movie = explode('|', $value['movie']);

            $check = '1';
            foreach ($movie as $val) {
           

                list($movie_id, $movie_thname, $score, $movie_view, $movie_type, $movie_quality, $movie_picture) = explode('{-}', $val);

                if ($check <= '4') {

                    $url_name =  urldecode(trim(str_replace(")", "", (str_replace("(", "", (str_replace(" ", "-", $movie_thname)))))));

                    if ($movie_type == 'se') {
                        $urlvideo = urldecode(base_url('/series/' . $movie_id . '/' . $url_name));
                    } else {
                        $urlvideo = urldecode(base_url('/movie/' . $movie_id . '/' . $url_name));
                    }

            ?>

                    <div class="movie">

                        <div class="movie-box">

                            <div class="movie-title">
                                <h2>
                                    <a href='<?php echo $urlvideo; ?>'>
                                        <span class="movie-title-color"><?php echo $movie_thname; ?></span>
                                    </a>
                                </h2>
                            </div>

                            <div class="movie-imdb">
                                <b><span><?php echo $score; ?></span></b>
                            </div>

                            <div class="movie-view">
                                <b style="word-wrap: break-word;">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                    <?php 
                                        if (empty($movie_view)){ 
                                            echo "0"; 
                                        } else { 
                                            echo $movie_view;
                                        } 
                                    ?> คน
                                </b>

                            </div>

                            <?php

                            if ($movie_quality == "hd") {

                                $display = "red";

                            } else if ($movie_quality == "sd") {

                                $display = "green";

                            } else {

                                $display = "green";

                            }

                            ?>

                            <div class="movie-corner movie-HD" style=" background-color: <?php echo $display; ?>;">
                                <?php echo strtoupper($movie_quality); ?>
                            </div>

                            <div class="movie-image">
                                <a href='<?php echo $urlvideo; ?>'>
                                    <img src="<?php echo $movie_picture; ?>" alt="<?php echo $movie_thname; ?>" title="?php echo $movie_thname; ?>">
                                </a>
                            </div>

                        </div>
                    </div>
        <?php
                }
                $check++;
            }
        }
        ?>

    </div>

</div>



<div class="content-right">

    <div class="sidebar">

    </div>

</div>


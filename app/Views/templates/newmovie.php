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

                <ul>

                    <li class="menu-item current-menu-item">

                        <a>หนังมาใหม่</a>

                    </li>

                </ul>

            </div>

            <?php foreach ($list_video_new as $value) {

                $id = $value['movie_id'];
                if ($value['movie_type'] == 'se') {

                    $url_name =  urldecode(trim(str_replace(")", "", (str_replace("(", "", (str_replace(" ", "-", $value['movie_thname'])))))));
                    $urlvideo = urldecode(base_url('/series/' . $id . '/' . $url_name));
                } else {
                    $url_name =  urldecode(trim(str_replace(")", "", (str_replace("(", "", (str_replace(" ", "-", $value['movie_thname'])))))));
                    $urlvideo = urldecode(base_url('/movie/' . $id . '/' . $url_name));
                }
            ?>

                <div class="movie">

                    <div class="movie-box">

                        <div class="movie-title">

                            <a href='<?php echo $urlvideo; ?>'>

                                <span class="movie-title-color"><?php echo $value['movie_thname']; ?></span>

                            </a>

                        </div>

                        <div class="movie-imdb">

                            <b><span><?php echo $value['movie_ratescore']; ?></span></b>



                            </h4>

                        </div>

                        <div class="movie-view">


                            <b style="word-wrap: break-word;"><i class="fa fa-eye" aria-hidden="true"></i> <?php if (empty($value['movie_view'])) {
                                                                                                                echo "0";
                                                                                                            } else {
                                                                                                                echo $value['movie_view'];
                                                                                                            } ?> คน</b>

                            </h4>

                        </div>

                        <?php

                        if ($value['movie_quality'] == "hd") {

                            $display = "red";
                        } else if ($value['movie_quality'] == "sd") {

                            $display = "green";
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

                    <div class="movie-footer">

                        <?php //echo $value['movie_sound']; 

                        ?>

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

                        <a href="<?php echo base_url('/page/categoty/id/' . $value['category_id'] . '/' . urlencode($value['category_name'])); ?>" title=<?= $value['category_name'] ?>>

                            <?= $value['category_name'] ?> </a>

                    </li>



                <?php } ?>



            </ul>

        </div>



        <style>
            .cat-left {

                /* background-image: url(https://www.movie2free.com/wp-content/themes/next/images/nav-bullet.gif);

                background-position: left center;

                background-repeat: no-repeat;

                padding: 6px 6px 6px 18px; */

            }
        </style>

    </div>

    <div class="clearfix"></div>

    <div style="display: none">

        <h3>ดูหนังตามหมวดหมู่เลือกหมวดหมู่ต่างๆเพื่อดูหนังออนไลน์</h3>

        <h3>ประเภทของหนัง ดูหนังต่างๆตามประเภทที่จัดไว้ คิกเพื่อดูหนังออนไลน์</h3>

    </div>

</div>



<!-- ADS2 -->

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

<!-- ADS2 -->

<div class="content-left">

    <div class="sidebar">

    </div>

</div>

<div class="content-main">

    <div class="box">

        <?php // echo "<pre>"; print_r($video_interest);die; 

        ?>

        <?php foreach ($video_interest as $value) {  ?>





            <div class="title-hd col-lg-12" style="padding-top:20px">

                <div class="box-header">

                    <ul>

                        <li class="menu-item current-menu-item">

                            <h2> <?php echo $value['category_name']; ?></h2>

                        </li>

                    </ul>

                    <ul style="float:right;">

                        <li class="menu-item current-menu-item">

                            <h2> <a class="pull-right" href="<?php echo "/page/categoty/id/" . $value['category_id'] . "/" . urlencode($value['category_name']); ?>" style="margin-right: 10px;">ดูทั้งหมด...</a></h2>

                        </li>

                    </ul>

                </div>

            </div>





            <?php

            $movie = explode('|', $value['movie']);

            $check = '1';

            foreach ($movie as $val) {

                list($movie_id, $movie_thname, $score, $movie_view, $movie_picture) = explode('{-}', $val);

                if ($check <= '4') {

                    $url_name =  urldecode(trim(str_replace(")", "", (str_replace("(", "", (str_replace(" ", "-", $movie_thname)))))));

                    $urlvideo = urldecode(base_url('/movie/' . $id . '/' . $url_name));


            ?>

                    <div class="movie">

                        <div class="movie-box">

                            <div class="movie-title">

                                <a href='<?php echo $urlvideo; ?>'>

                                    <span class="movie-title-color"><?php echo $movie_thname; ?></span>

                                </a>

                            </div>

                            <div class="movie-imdb">

                                <b><span><?php echo $score; ?></span></b>



                                </h4>

                            </div>

                            <div class="movie-view">



                                <b style="word-wrap: break-word;"><i class="fa fa-eye" aria-hidden="true"></i><?php echo $movie_view; ?> คน</b>

                                </h4>

                            </div>

                            <?php

                            // if ($value['movie_quality'] == "hd") {

                            //     $display = "red";

                            // } else if ($value['movie_quality'] == "sd") {

                            //     $display = "green";

                            // } else {

                            //     $display = "green";

                            // }

                            ?>

                            <div class="movie-corner movie-HD" style=" background-color: <?php //echo $display; 

                                                                                            ?>;"><?php //echo strtoupper($value['movie_quality']); 

                                                                                                    ?></div>

                            <div class="movie-image">

                                <a href='<?php echo $urlvideo; ?>'>

                                    <img src="<?php echo $movie_picture; ?>" alt="<?php echo $movie_thname; ?>">

                                </a>

                            </div>

                        </div>

                        <div class="movie-footer">

                            <?php //echo $value['movie_sound']; 

                            ?>

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
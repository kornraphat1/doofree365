<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="th" prefix="og: http://ogp.me/ns#">



<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <link rel="stylesheet" href='<?php echo base_url("/assets/css/style.min.css"); ?>'>

    <link rel="stylesheet" href='<?php echo base_url("/assets/css/stylesheet.css"); ?>'>

    <link rel="stylesheet" href='<?php echo base_url("/assets/css/sidebar.css"); ?>'>

    <link rel="stylesheet" href='<?php echo base_url("/assets/css/poster.css"); ?>'>

    <link rel="stylesheet" href='<?php echo base_url("/assets/css/navigation.css"); ?>'>

    <link rel="stylesheet" href='<?php echo base_url("/assets/css/single.css"); ?>'>

    <link rel="stylesheet" href='<?php echo base_url("/assets/css/font-manual.css"); ?>'>

    <link rel="stylesheet" href='<?php echo base_url("/assets/css/all.min.css"); ?>'>

    <link rel="stylesheet" href='<?php echo base_url("/assets/css/font-awesome.min.css"); ?>'>



    <title><?php echo $setting['setting_title']; ?></title>

    <link rel="canonical" href="#" />

    <?php if (!empty($setting['setting_header'])) {

        echo base64_decode($setting['setting_header']);
    }

    $logos = $setting['setting_logo'];

    ?>

    <meta charset="utf-8">

    <meta name="viewport" content="width=1000; user-scalable=1.5;" />
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->

    <title><?php echo $setting['setting_title']; ?></title>

    <meta name="description" content="<?php echo $setting['setting_description']; ?>" />

    <meta name="keywords" content=" <?php echo $setting['setting_keyword']; ?>" />

    <meta name="author" content="OrcasThemes">

    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />



    <?php

    if (("https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']) != ('https://' . $_SERVER['HTTP_HOST'] . '/')) {

        echo '<link rel="canonical" href="' . 'https://' . $_SERVER['HTTP_HOST'] . '' . '" />';
    }

    ?>

    <!-- TAG og facebook -->

    <meta property="og:type" content="website" />

    <meta property="og:url" content="<?php echo base_url(); ?>" />

    <meta property="og:title" content="<?php echo $setting['setting_title']; ?>" />

    <meta property="og:description" content="<?php echo  $setting['setting_description']; ?>" />

    <meta property="og:image" content="<?php echo $backURL . "setting/" . $logos; ?>" />





    <meta name="geo.region" content="TH" />

    <meta name="geo.position" content="14.897192;100.83273" />

    <meta name="ICBM" content="14.897192, 100.83273" />

    <link rel="icon" type="image/png" href='<?php echo $backURL . "setting/" . $setting['setting_icon']; ?>' />



    <style>
        .movie-imdb b {

            background: url(<?php echo base_url("assets/images/icon-star.png"); ?>) no-repeat 0;

            background-size: 11px 11px;

        }



        .mobile-only {

            display: none;

        }



        .fb-comments {

            padding: 1px;

        }



        .movie-title-color {

            color: #2ebf39;

            font-size: 12px;

        }





        .nav {

            background: #fff;

        }



        .nav li a {

            background: #fff;

        }



        li.active a {

            background-color: #262626
        }



        .sidebar-header {

            /* background: #c5ad00; */

            background: linear-gradient(to top, #116936, #15b317, #0fa706, #d2efd2);

            box-shadow: inset -11px -4px 6px 3px #1d7d05;

        }

        }



        ul li a:hover {

            color: #262626;

        }



        .movie-footer {

            background: #262626;

        }



        .box-header,

        .box h3 {

            background-color: #262626;

        }



        .header-search-button {

            background: linear-gradient(to top, #5f8870, #15b317, #33ca2a, #d2efd2);

            box-shadow: inset -9px -4px 6px -8px #4b921f;

            /* background: #262626; */

            /* background-image: -webkit-linear-gradient(top, #262626, #262626);

            background-image: -moz-linear-gradient(top, #262626, #262626);

            background-image: -ms-linear-gradient(top, #262626, #262626);

            background-image: -o-linear-gradient(top, #262626, #262626);

            background-image: linear-gradient(to bottom, #262626, #262626); */

        }



        .report-movie {

            background-color: red;

        }
    </style>

    <meta name="google-site-verification" content="4Slg2QhpVrOUmcX9cvY5MJL_mxemuI2peizyqfDvJw0" />

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-154899088-1"></script>

    <script>
        window.dataLayer = window.dataLayer || [];



        function gtag() {

            dataLayer.push(arguments);

        }

        gtag('js', new Date());



        gtag('config', 'UA-154899088-1');
    </script>

</head>



<body class="home blog" cfapps-selector="body">

    <div id="mainseo">

        <h1>ดูหนัง และ ดูหนังออนไลน์ หนังใหม่ชนโรงเต็มเรื่องได้ที่ doonungonline.com</h1>

    </div>

    <style>
        #mainseo {

            display: none;

        }

        #secondseo {

            display: none;

        }



        .header-font-1 {

            color: rgb(20 220 8);

        }



        .header-requestmovie-button {

            background: linear-gradient(to top, #5f8870, #15b317, #33ca2a, #d2efd2);

            box-shadow: inset -9px -4px 6px -8px #4b921f;

            border-radius: 4px;

        }



        #ads_fox_bottom {

            bottom: 0px;

            display: block;

            min-height: 40px;

            position: fixed;

            text-align: center;

            z-index: 50000;

            width: 100%;

        }



        #ads_fix_footer {

            width: 100%;

        }



        @media screen and (min-device-width: 1200px) {

            #ads_fox_bottom {

                bottom: 0px;

                display: block;

                min-height: 40px;

                position: fixed;

                text-align: center;

                z-index: 50000;

                width: 61%;

                padding-left: 14%;

            }



            #ads_fix_footer {

                width: 100%;

            }

        }
    </style>

    <div id="wrap">

        <div class="header">

            <div class="header-left">

                <div class="header-logo">

                    <a href="<?php echo base_url(); ?>">

                        <img src='<?php echo $backURL . "setting/" . $setting['setting_logo']; ?>' width="95%" alt="ดูหนังออนไลน์ ดู หนัง หนัง ออนไลน์ dooung8k ดูหนังออนไลน์ฟรีหนังใหม่ ได้ที่ dooung8k">

                    </a>

                </div>

            </div>

            <div class="header-right">

                <div class="header-title">

                    <div class="row" style="display: flex;">

                        <li>

                            <p class="header-font-1"><?php echo $setting['setting_title']; ?></p>
                            <?php if (!empty($setting['setting_fb'])) { ?>
                                <a target="_blank" href="<?php echo $setting['setting_fb']; ?>"><img id="icon-facebook" style="width: 6%;" src='<?php echo base_url("/assets/images/social-icon/facebook.png"); ?>'></a>
                            <?php } ?>
                            <?php if (!empty($setting['setting_line'])) { ?>
                                <a target="_blank" href="<?php echo $setting['setting_line']; ?>"><img id="icon-line" style="width: 6%; border-radius:5px" src='<?php echo base_url("/assets/images/social-icon/line.png"); ?>'></a>
                            <?php } ?>
                        </li>

                    </div>

                </div>

            </div>

        </div>



        <div class="navbar">

            <ul class="nav">

                <li class="nav-main-item  menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-28">

                    <a class="nav-main-link" href="<?php echo base_url(); ?>" style="font-size: 19px">หน้าหลัก</a>

                </li>
                <li class="cat-item">

                    <a href="<?php echo base_url('/page/new_movie'); ?>" title="New movie" style="font-size: 19px">

                        หนังมาใหม่

                    </a>

                </li>
                <li class="cat-item">

                    <a href="<?php echo base_url('/page/categoty/id/7/หนังฝรั่ง'); ?>" title="Inter Movie" style="font-size: 19px">

                        หนังฝรั่ง

                    </a>

                </li>

                <li class="cat-item">

                    <a href="<?php echo base_url('/page/categoty/id/6/หนังไทย'); ?>" title="Thai Movie" style="font-size: 19px">

                        หนังไทย

                    </a>

                </li>
                <li class="cat-item">

                    <a href="<?php echo base_url('/page/categoty/id/10/หนังการ์ตูน'); ?>" title="Animation" style="font-size: 19px">

                        หนังการ์ตูน

                    </a>

                </li>

                <li class="cat-item">

                    <a href="<?php echo base_url('/page/categoty/id/8/หนังเอเชีย'); ?>" title="Asia Movie" style="font-size: 19px">

                        หนังเอเชีย

                    </a>

                </li>

                <li class="cat-item">

                    <a href="<?php echo base_url('/page/categoty/series'); ?>" title=" series" style="font-size: 19px">

                       ซีรีย์ Netflix

                    </a>

                </li>

                <li class="cat-item" style="float: right;padding-top: 13px;display: flex;">

                    <button type="button" id="request" name="request" class="header-requestmovie-button" onclick="request_movie('<?= $branch ?>')">ขอหนัง</button>



                    <form id="formsearch" style="padding-left: 30px; padding-right: 10px;">

                        <input type="text" id="search" class="header-search-input" placeholder="หนังที่ต้องการค้นหา...." value="<?= $keyword_string ?>">

                        <button type="submit" class="header-search-button">ค้นหา</button>

                    </form>





                </li>

            </ul>

        </div>



        <!-- Banner 1 -->



        <div class="notice" style="z-index: 2147483647">

            <div style="width: 15%;float: left;">

                <?php

                $i = 0;

                if (!empty($path_imgads)) {

                    foreach ($path_imgads as $value) {

                        // echo $backURL . 'ads/' . $value['ads_picture'];

                        if ($value['ads_position'] == "2") {

                            $i++;

                ?>

                            <a onclick="onClickAds(<?= $value['ads_id']; ?>, <?= $branch ?>)" href="<?php echo $value['ads_url']; ?>" target="_blank">

                                <img alt="<?php echo $value['ads_url']; ?>" title="<?php echo $value['ads_url']; ?>" width="100%" src="<?php echo $backURL . 'banner/' . $value['ads_picture']; ?>" class="hoverimg">

                            </a>

                <?php

                        }
                    }
                } else {
                }

                ?>

            </div>



            <div style="width: 15%;float: right;">

                <?php



                $i = 0;

                if (!empty($path_imgads)) {

                    foreach ($path_imgads as $value) {

                        // echo $backURL . 'ads/' . $value['ads_picture'];

                        if ($value['ads_position'] == "3") {

                            $i++;

                ?>

                            <a onclick="onClickAds(<?= $value['ads_id']; ?>, <?= $branch ?>)" href="<?php echo $value['ads_url']; ?>" target="_blank">

                                <img alt="<?php echo $value['ads_url']; ?>" title="<?php echo $value['ads_url']; ?>" width="100%" src="<?php echo $backURL . 'banner/' . $value['ads_picture']; ?>" class="hoverimg">

                            </a>

                <?php

                        }
                    }
                } else {
                }

                ?>

            </div>





            <!-- <a href="https://www.webdoonung.com/ads/redirect/2" target="_new" style="z-index: 2147483647">

                <img src="/assets/images/banner/b1.jpg" width="70%" alt="banner" style="padding-bottom: 10px;">

            </a> -->



            <?php



            $i = 0;

            if (!empty($path_imgads)) {

                foreach ($path_imgads as $value) {

                    // echo $backURL . 'ads/' . $value['ads_picture'];

                    if ($value['ads_position'] == "1") {

                        $i++;

            ?>

                        <a onclick="onClickAds(<?= $value['ads_id']; ?>, <?= $branch ?>)" href="<?php echo $value['ads_url']; ?>" target="_blank">

                            <img alt="<?php echo $value['ads_url']; ?>" title="<?php echo $value['ads_url']; ?>" width="70%" src="<?php echo $backURL . 'banner/' . $value['ads_picture']; ?>" class="hoverimg">

                        </a>

            <?php

                    }
                }
            } else {
            }

            ?>



        </div>
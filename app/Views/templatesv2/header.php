<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?= base_url(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css?v=1" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= $document_root ?>/assets/css/navigation.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Custom fonts for this template-->
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> -->
    <!-- Custom styles for this template-->
    <link href="css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= $document_root ?>/assets/css/365.css">
    <script src="<?= base_url(); ?>/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
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
</head>
<header>
    <div class="menu-bar">
        <div class="header-logo">
            <a href="<?php echo base_url(); ?>">
                <img class="header-img" src="http://192.168.10.43:1002/public/assets/img/Doofree-365-LOGO.png" width="95%" alt="ดูหนังออนไลน์ ดู หนัง หนัง ออนไลน์ dooung8k ดูหนังออนไลน์ฟรีหนังใหม่ ได้ที่ dooung8k">
                <!-- <img  src='<?php echo $backURL . "setting/" . $setting['setting_logo']; ?>' width="95%" alt="ดูหนังออนไลน์ ดู หนัง หนัง ออนไลน์ dooung8k ดูหนังออนไลน์ฟรีหนังใหม่ ได้ที่ dooung8k"> -->
                <!-- <img class="header-img" src="http://192.168.10.43:1002/public/assets/img/Doofree-365-LOGO.png"  alt="img"> -->
            </a>
        </div>
        <ul>
            <li><a href="<?php echo base_url(); ?>">Home</a></li>
            <li><a href="<?php echo base_url('newmovie'); ?>">หนังใหม่</a></li>
            <li><a href="#">Anime</a></li>
            <li><a href="<?php echo base_url('contract'); ?>">ติดต่อ | ขอหนัง</a></li>
        </ul>
        <div class="search">
            <form id="formsearch" style="padding-left: 30px; padding-right: 10px;">
                <input class="search-text" type="text" id="search" name="search" placeholder="search">
                <i class="fas fa-search"></i>
            </form>
        </div>
    </div>
</header>
<section id="movie-banners" class="text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 ">
                <?php
                if (!empty($ads['pos1'])) {
                    foreach ($ads['pos1'] as $val) {
                        if (substr($val['ads_picture'], 0, 4) == 'http') {
                            $ads_picture = $val['ads_picture'];
                        } else {
                            $ads_picture = $path_ads . $val['ads_picture'];
                        }
                ?>
                        <a onclick="onClickAds(<?= $val['ads_id'] ?>, <?= $val['branch_id'] ?>)" href="<?= $val['ads_url'] ?>" alt="<?= $val['ads_name'] ?>" title="<?= $val['ads_name'] ?>">
                            <img class="banners" src="<?= $ads_picture ?>" alt="<?= $val['ads_name'] ?>" title="<?= $val['ads_name'] ?>">
                        </a>
                <?php
                    }
                }
                ?>
                <img class="banners" src="https://backend.doomovie-5g.com/public/banners/1607339579_6518d13361e4d6c3d29b.png" alt="test" title="test">
            </div>
        </div>
    </div>
</section>
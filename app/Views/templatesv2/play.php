<style>
    body {
        font-family: 'Kanit', sans-serif;
        background-color: gray;
        margin: 0;
        background: url('/public/assets/img/bg.png') #000000 center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        width: 100%;
    }

    body .container {
        width: 80%;
        margin: 1px auto;
        background-color: transparent;

    }

    body .content {
        margin-top: 1px;
        padding-left: 20px;
    }

    body .content:after {
        content: "";
        clear: both;
        display: table;
    }

    body .content .content-title {
        margin-bottom: 20px;
        vertical-align: bottom;
        display: flex;
        justify-content: space-between;
    }

    body .content .content-title .title {
        color: #38b349;
        font-weight: bold;
        font-size: 35px;
        display: inline-block;
        margin-right: 0px;
        padding-left: 5px;
    }

    body .content .content-title .filter {
        display: inline-block;
        font-size: 25px;
        font-weight: lighter;
        color: #ffffff;
        position: relative;
        margin-right: 18px;
        cursor: pointer;
        padding-left: 20px;
        line-height: 3;
    }

    body .content .content-title .filter.active:after,
    body .content .content-title .filter:hover:after {
        background-color: #fd9b38;
        content: "";
        width: 100%;
        height: 2px;
        position: absolute;
        left: 0;
    }

    body .content .content-grid {
        float: left;
        width: 100%;

    }

    body .content .content-grid .content-list {
        display: flex;
        flex-wrap: wrap;
    }

    body .content .content-grid .content-list .card-content {
        width: 30%;
        height: 270px;

        margin-bottom: 10px;
        background-size: cover;
        background-position: center center;
        position: relative;
    }

    body .content .content-grid .content-list .card-content .card-quality {
        top: 5px;
        right: 0px;
        position: absolute;
        width: 27%;
        height: 0;

    }

    body .content .content-grid .content-list .card-content .card-quality-style {
        width: 50px;
        background-color: black;
        color: white;
        text-align: center;
        border-radius: 0px;

    }

    body .content .content-grid .content-list .card-content .color-hd {
        background-color: red;
        width: max-content;
        padding: 0px 5px 0px 5px;
        margin: 2px 0px 0px -20px;
    }

    body .content .content-grid .content-list .card-content .color-star {
        background-color: black;
        width: max-content;
        padding: 0px 5px 0px 5px;
        margin: 10px 0px 0px 5px;
    }

    body .content .content-grid .content-list .card-content .card-quality span {
        color: #ffffff;
        font-size: 10px;
        transform: rotate(45deg);
        display: block;
        left: 26px;
        position: absolute;
        top: 7px;
    }



    body .content .content-grid .content-list .card-content .card-description .card-description-content {
        bottom: 18px;
        position: absolute;
        width: 100%;
    }

    body .content .content-grid .content-list .card-content .card-description .card-description-content .card-description-top {
        padding: 0 6px;
        display: block;
        position: relative;
    }

    body .content .content-grid .content-list .card-content .card-description .card-description-content .card-description-top:after {
        content: "";
        clear: both;
        display: table;
    }

    body .content .content-grid .content-list .card-content .card-description .card-description-content .card-description-top .card-description-rate {
        top: 50%;
        transform: translateY(-50%);
        position: absolute;
        font-size: 12px;
    }

    body .content .content-grid .content-list .card-content .card-description .card-description-content .card-description-top .card-description-rate:before {
        content: "\2605";
        color: #ff9a36;
        padding-right: 2px;
    }

    body .content .content-grid .content-list .card-content .card-description .card-description-content .card-description-top .card-description-type {
        float: right;
        font-weight: 300;
        background-color: #223f9a;
        padding: 0 8px;
        border-radius: 4px;
    }

    body .content .content-grid .content-list .card-content .card-description .card-description-content .card-description-nema {
        padding: 0 6px;
        font-size: 18px;
        font-weight: bold;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        text-align: center;
        background-color: #8e8f91;
        color: white;
        position: relative;
        transform: translate(0px, 20px);
    }

    body .content .content-grid .content-list .card-content .card-description .card-description-content .card-description-down {
        padding: 0px 6px 0px 0px;
        height: 40px;
        font-size: 20px;
        font-weight: bold;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        text-align: center;
        background-color: #242424;
        color: white;
        position: relative;
        transform: translate(0px, 19px);
    }

    body .content .content-grid .content-list .card-content {
        width: 18%;
        height: 270px;
        margin-right: 15px;
    }

    body .top-update {
        width: 96%;
        display: flex;
        justify-content: space-between;
    }

    body .page-style {
        font-size: 30px;
        padding: 6px 50px 3px 0px;
        color: #626c6a;
        font-weight: bold;
    }


    body .cate-group {
        border-left: 1px solid white;
        padding-left: 5px;
    }

    body .content-top {
        padding: 6px 50px 3px 0px;
        color: #fff;
        font-weight: bold;
        text-align: center;
    }

    body .content-top-title {
        font-size: 60px;
    }

    body .title-right {
        font-size: 20px;
        color: white;
        padding-top: 10px;
        padding-right: 100px;
    }

    body .content-top-body {
        font-size: 30px;
    }

    body .content-pa {
        padding-right: 100px;
        text-align: right;
    }

    .pagination {
        display: inline-block;
    }

    body .pagination a {
        color: green;
        float: left;
        padding: 0px 17px;
        text-decoration: none;
        transition: background-color .3s;
        border: 1px solid #ddd;
        border-radius: 8px;
        font-size: 22px;
        background-color: white;
        margin: 2px;
    }

    body .pagination a.active {
        background-color: #4CAF50;
        color: white;
        border: 1px solid #4CAF50;
    }


    body .pagination a:hover:not(.active) {
        background-color: #ddd;
    }

    @media (max-width: 1024) {

        #homepage .swiper-container .swiper-button-next,
        #homepage .swiper-container .swiper-button-prev {
            display: flex;
        }
    }

    @media screen and (min-device-width: 280px) and (max-device-width: 1024px) {
        body .content-top-title {
            font-size: 40px;
        }

        body .content-top {
            padding: 0px 0px 0px 0px;
            text-align: center;
        }

        body .content .content-grid .content-list .card-content .card-quality {
            top: 5px;
            right: 60px;
            position: absolute;
            width: 0;
            height: 0;
        }

        body .content .content-grid .content-list .card-content .card-quality-style {
            width: 50px;
            background-color: black;
            color: white;
            text-align: center;
            border-radius: 0px;
            font-size: 12px;

        }

        body .content .content-grid .content-list .card-content .color-hd {
            background-color: red;
            width: max-content;
            padding: 0px 5px 0px 5px;
            margin: 2px 0px 0px 0px;
        }

        body .container {
            width: 100%;

        }

        body .page-style {
            font-size: 20px;
            padding: 6px 50px 3px 0px;
            color: #626c6a;
            font-weight: bold;
        }

        body .content .content-title .title {
            font-size: 25px;
        }

        body .content .content-title .filter {
            font-size: 10px;
            margin-right: 0px;
            padding-left: 0px;
        }

        body .container {
            width: 100%;
        }

        body .content .content-grid {
            width: 100%;
        }

        body .cate-group {
            border-left: 0px solid white;
        }

        body .content .content-grid .content-list .card-content {
            width: 48%;
            height: 190px;
            margin-right: 5px;
        }

        body .content-pa {
            padding-right: 5px;
            text-align: right;
        }

        body .content-pa {
            padding-right: 5px;
            text-align: right;
        }

        body .title-right {
            font-size: 20px;
            color: white;
            padding-top: 0px;
            padding-right: 5px;
        }

        body .pagination a {
            color: green;
            float: left;
            padding: 0px 12px;
            text-decoration: none;
            transition: background-color .3s;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            background-color: white;
            margin: 2px;
        }

        body .content {
            margin-top: 1px;
            padding-left: 10px;
        }

        body .content .content-grid .content-list .card-content .card-description .card-description-content .card-description-down {
            height: 30px;
            font-size: 16px;
        }

        body .content .content-grid .content-list .card-content .card-description .card-description-content .card-description-nema {
            font-size: 14px;
        }
    }


    /*# sourceMappingURL=app.css.map */
</style>
<!-- play -->
<style>
    #play .container {

        margin: 1px auto;
        background-color: transparent;
        padding-top: 0px;
    }

    #play .content .content-title-play {
        margin-bottom: 20px;
        vertical-align: bottom;
        display: flex;
        justify-content: center;
    }



    #play .content .content-title-name {
        margin-bottom: 20px;
        vertical-align: bottom;
        display: flex;
        justify-content: space-between;
        font-size: 20px;
        color: white;
    }

    #play .content .content-title-play .title {
        color: #38b349;
        font-weight: bold;
        font-size: 35px;
        display: inline-block;
        margin-right: 0px;
        padding-left: 5px;
    }

    #play .content-video {
        color: white;
        font-size: 20px;
    }

    #play .content-video-display {
        display: flex;
        justify-content: space-between;
        font-size: 25px;
        color: white;
        margin: 30px 0px 30px 0px;
    }

    #play .player-style {
        text-align: center;
        width: 100%;
        height: 70%;
        font-size: 50px;
        background-color: black;
        margin-top: 30px;
    }

    #play .AD-style {
        text-align: center;
        width: 100%;
        height: max-content;
        font-size: 50px;
        padding: 30px 0px 30px 0px;
        background-color: black;
        margin-top: 30px;
    }

    #play .color-play:hover {
        border-bottom: 5px solid #39b24b;
        color: #39b24b;

    }

    #play .fa-style {
        font-size: 40px;
        line-height: 0;
    }

    #play .content-video-page {
        display: flex;
        justify-content: space-between;
        font-size: 25px;
        color: white;
        margin: 30px 0px 30px 0px;
    }

    #play .img-page {
        width: max-content;
        height: max-content;
        background-color: black;
        margin-right: 5px;
    }

    #play .img-text {
        position: absolute;
    font-size: 30px;
    text-align: center;
    padding: 130px 0px 0px 80px;
    }

    #play .content .content-grid .content-list {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    #play .content .content-title-show {
        margin-bottom: 20px;
        vertical-align: bottom;
        display: flex;
        justify-content: center;

    }

    #play .content-show-style {
        font-size: 25px;
        color: white;
        background-color: #3f3a3e;
        border-radius: 20px;
        padding: 10px 10px 10px 10px;
        border: none;
    }

    #play .content-fail-style {
        font-size: 25px;
        color: white;
        background-color: #38b14a;
        border-radius: 30px;
        padding: 5px 10px 5px 10px;
        border: none;
    }

    #play .content .content-grid .content-list .card-content {
        width: 23%;

    }

  

    #play .video-content {
        width: 66%;
        background-color: black;
    }

    #play .movie-trailer {
        width: 100%;
        height: 100%;
    }
    #play .img-vi{
            width:100%;
        }
    @media screen and (min-device-width: 280px) and (max-device-width: 1024px) {

        #play .player-style {
        width: 100%;
        height: 200px;

    }
        #play .content .content-grid .content-list .card-content {
            width: 48%;

        }

        #play .content {
            margin-top: 1px;
            padding-left: 5px;
            padding-right: 5px;
        }
        #play .content-video {
     
        font-size: 15px;
    }
        #play .content-video-display {
            font-size: 10px;
        }

        #play .fa-style {
            font-size: 15px;
        }

        #play .content-show-style {
            font-size: 15px;

        }

        #play .content-fail-style {
            font-size: 15px;
            padding: 5px 10px 5px 10px;

        }

        #play .content-video-page {
            font-size: 10px;
        }

        #play .content .content-title-play .title {
            font-size: 25px;
        }

        #play .content .content-title-name {
            justify-content: center;
            font-size: 20px;

        }

        #play .img-page {
           width: max-content;
        }
        #play .img-vi{
            width:100px;
        }
        #play .img-text {
        position: absolute;
        font-size: 30px;
        text-align: center;
        padding: 80px 0px 0px 30px;
    }
    }
</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Doofree 365</title>
    <link rel="shortcut icon" href="favicon.png">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- Custom fonts for this template-->
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> -->

    <!-- Custom styles for this template-->
    <link href="css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body id="homepage">
    <?php


    // echo '<pre>' . print_r($a, true) . '</pre>';


    ?>

    <div class="container" id="play">


        <div class="content">
            <div class="content-video">
                <div class="AD-style">
                    โฆษณา
                </div>
            </div>
            <div class="content-title-play">
                <div class="title vl"> <?php echo $a[0]['movie_thname']; ?></div>
            </div>
            <div class="container">
                <div class="content-title-name">
                    <div class="title vl"> ตัวอย่างหนัง <?php echo $a[0]['movie_thname']; ?></div>
                </div>
                <div class="content-video-display">
                    <div class="img-content"><img class="img-vi"src="https://api.vip-streaming.com/images/movie/SxfOrpx7IZWq3uwgQ45H7NNPuCjCLkiMV5BNDI3MDljMTQtYzBiYS00NDk2LTlhYzUtYmM0NWIyMmZkMDZkXkEyXkFqcGdeQXVyNjk5NDA3OTk@._V1_UY268_CR3,0,182,268_AL_.jpg">
                    </div>
                    <div class="video-content"> <iframe class="movie-trailer " src="https://www.youtube.com/embed/n4YXauObskA" frameborder="0" allowfullscreen=""></iframe>
                    </div>
                </div>
                <div class="content-video">
                    <div> ปีทีฉาย : 2020
                    </div>
                    <div> เสียง : <?php echo $a[0]['movie_sound']; ?> + <?php echo $a[0]['movie_quality']; ?> (T)
                    </div>
                    <div> IMDB :<?php echo $a[0]['movie_ratescore']; ?>
                    </div>
                    <div> เวลาฉาย : 1 H 55 MIN
                    </div>
                    <div> เรื่องย่อ :
                    </div>
                    <div> <?php echo $a[0]['movie_des']; ?>
                    </div>
                </div>
                <div class="content-video">
                    <div class="AD-style">
                        โฆษณา
                    </div>
                    <div class="player-style">
                        <iframe id="player" class="movie-trailer" class="player" src="http://localhost:1002/player/73/a" scrolling="no" frameborder="0" allowfullscreen="yes"></iframe>
                    </div>
                </div>

                <div class="content-video-display">
                    <div class="color-play"> <i class="fas fa-play"></i> ตัวเล่นหลัก
                    </div>
                    <div class="color-play"> <i class="fas fa-play"></i> ตัวเล่นสำรอง
                    </div>
                    <div></div>
                    <div></div>
                    <button class="content-fail-style">แจ้งเสีย</button>

                    <div class="fa-style"> <i class="fab fa-facebook-f"></i> <i class="fab fa-twitter"></i> <i class="fab fa-line"></i>
                    </div>
                </div>
                <div class="content-video-display">
                    <div class="color-play"> พากย์ไทย
                    </div>
                    <div class="color-play"> ซับไทย
                    </div>
                    <div class="color-play"> SOUNDTRACK
                    </div>
                    <div></div>
                    <div></div>
                    <div> หนังแอคชั่น,ผจญภัย,2020,ดราม่า
                    </div>
                </div>
                <div class="content-video-page">
                    <div class="img-page">
                        <div class="img-text">ตอนที่ 2</div><img style="width: 100%;" src="https://api.vip-streaming.com/images/movie/SxfOrpx7IZWq3uwgQ45H7NNPuCjCLkiMV5BNDI3MDljMTQtYzBiYS00NDk2LTlhYzUtYmM0NWIyMmZkMDZkXkEyXkFqcGdeQXVyNjk5NDA3OTk@._V1_UY268_CR3,0,182,268_AL_.jpg">

                    </div>
                    <div class="content-pege" style="width: 75%;">
                        <div> ปีทีฉาย : 2020
                        </div>
                        <div> เสียง : THAI + Soundtrack (T)
                        </div>
                        <div> IMDB 7.0
                        </div>
                        <div> เวลาฉาย : 1 H 55 MIN
                        </div>
                        <div> เรื่องย่อ :
                        </div>
                        <div> โหลดไวแบบไม่มีสะดุดภาพคมชัดระดับ HD FullHD 4k ครบทุกเรื่องทุกรสดูได้ทุกที่ทุกเวลาทั้งบนมือถือ
                            แท็บเล็ต เครื่องคอมพิวเตอร์ ระบบปฏิบัติการ Android และ IOS ดูอนิเมะใหม่ให้รับชมอีกมากมาย สามารถรับชมฟรีได้ทุกที่ทุกเวลาตลอด 24 ชั่วโมง
                        </div>
                    </div>
                </div>

                <div class="content-title-show">
                    <button class="content-show-style"><i class="fas fa-sync-alt"></i> Show more</button>
                </div>

                <div class="content">
                    <div class="content-title">
                        <div class="title vl">แนะนำหนัง</div>
                    </div>
                    <div class="content-grid">
                        <div class="content-list">
                            <a href="#" class="card-content" style="background-image: url('https://dummyimage.com/310x440/ffffff')">
                                <div class="card-quality">
                                    <div class="card-quality-style">
                                        HD
                                    </div>
                                    <div class="card-quality-style color-hd">
                                        <i class="fas fa-eye"></i> 123
                                    </div>
                                </div>
                                <div class="card-description">
                                    <div class="card-description-content">
                                        <div class="card-description-nema">JUJUTSU KAISEN</div>
                                        <div class="card-description-down">JUJUTSU KAISEN</div>
                                    </div>

                                </div>
                                <div class="card-quality-style color-star">
                                    6.5/10 <i class="fas fa-star"></i>
                                </div>
                            </a>
                            <a href="#" class="card-content" style="background-image: url('https://dummyimage.com/310x440/ffffff')">
                                <div class="card-quality">
                                    <div class="card-quality-style">
                                        HD
                                    </div>
                                    <div class="card-quality-style color-hd">
                                        <i class="fas fa-eye"></i> 123
                                    </div>
                                </div>
                                <div class="card-description">
                                    <div class="card-description-content">
                                        <div class="card-description-nema">JUJUTSU KAISEN</div>
                                        <div class="card-description-down">JUJUTSU KAISEN</div>
                                    </div>

                                </div>
                                <div class="card-quality-style color-star">
                                    6.5/10 <i class="fas fa-star"></i>
                                </div>
                            </a>

                            <a href="#" class="card-content" style="background-image: url('https://dummyimage.com/310x440/ffffff')">
                                <div class="card-quality">
                                    <div class="card-quality-style">
                                        HD
                                    </div>
                                    <div class="card-quality-style color-hd">
                                        <i class="fas fa-eye"></i> 123
                                    </div>
                                </div>
                                <div class="card-description">
                                    <div class="card-description-content">
                                        <div class="card-description-nema">JUJUTSU KAISEN</div>
                                        <div class="card-description-down">JUJUTSU KAISEN</div>
                                    </div>

                                </div>
                                <div class="card-quality-style color-star">
                                    6.5/10 <i class="fas fa-star"></i>
                                </div>
                            </a>
                            <a href="#" class="card-content" style="background-image: url('https://dummyimage.com/310x440/ffffff')">
                                <div class="card-quality">
                                    <div class="card-quality-style">
                                        HD
                                    </div>
                                    <div class="card-quality-style color-hd">
                                        <i class="fas fa-eye"></i> 123
                                    </div>
                                </div>
                                <div class="card-description">
                                    <div class="card-description-content">
                                        <div class="card-description-nema">JUJUTSU KAISEN</div>
                                        <div class="card-description-down">JUJUTSU KAISEN</div>
                                    </div>

                                </div>
                                <div class="card-quality-style color-star">
                                    6.5/10 <i class="fas fa-star"></i>
                                </div>
                            </a>

                        </div>

                    </div>
                    <div>
                    </div>

                </div>


            </div>
        </div>




        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script>

        </script>

</body>

</html>
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
        padding-top: 60px;
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
<style>

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

    <div class="container" id="JAV">

        <div class="content-top">
            <div class="content-top-title">DOOFREE365</div>
            <div class="content-top-body">DOOFREE365</div>
        </div>
        <div class="content">
            <div class="content-title">
                <div class="title vl">หนังใหม่</div>
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

        <div class="content-pa">
            <div class="pagination">
                <a href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#">&raquo;</a>
            </div>
        </div>


        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script>

        </script>

</body>

</html>
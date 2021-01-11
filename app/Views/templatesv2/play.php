

<!DOCTYPE html>
<html lang="en">

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
                    <a class="color-play"> <i class="fas fa-play"></i> ตัวเล่นหลัก
                    </a>
                    <a class="color-play"> <i class="fas fa-play"></i> ตัวเล่นสำรอง
                    </a>
                    <div></div>
                    <div></div>
                    <button class="content-fail-style">แจ้งเสีย</button>

                    <div class="fa-style"> <i class="fab fa-facebook-f"></i> <i class="fab fa-twitter"></i> <i class="fab fa-line"></i>
                    </div>
                </div>
                <div class="content-video-display">
                    <a class="color-play"> พากย์ไทย
                    </a>
                    <a class="color-play"> ซับไทย
                    </a>
                    <a class="color-play"> SOUNDTRACK
                    </a>
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
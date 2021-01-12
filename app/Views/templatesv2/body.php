<!DOCTYPE html>
<html lang="en">



<body id="homepage">

    <div class="container" id="JAV">

        <div class="content-top">
            <div class="content-top-title">DOOFREE365</div>
            <div class="content-top-body">หนังใหม่ ดูหนังออนไลน์ ครบทุกเรื่องทุกรสที่ Doofree365</div>
        </div>
        <div class="content">
            <div class="content-title">
                <div class="title vl">หนังใหม่</div>
            </div>
            <div class="content-grid">
                <div class="content-list">
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

                        <a href="<?php echo $urlvideo; ?>" onclick="countView('<?= $value['movie_id'] ?>')" class="card-content" style="background-image: url('<?php echo $value['movie_picture']; ?>')">
                            <div class="card-quality">
                                <div class="card-quality-style" style=" background-color: <?php echo $display; ?>;">
                                    <?php echo strtoupper($value['movie_quality']); ?>
                                </div>
                                <div class="card-quality-style color-hd">
                                    <i class="fas fa-eye"></i>
                                    <?php
                                    if (empty($value['movie_view'])) {
                                        echo "0";
                                    } else {
                                        echo $value['movie_view'];
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="card-description">
                                <div class="card-description-content">
                                    <div class="card-description-nema"><?php echo $value['movie_sound'] . ' ' . $value['movie_quality'] . ' ' . $value['movie_year']; ?></div>
                                    <div class="card-description-down"><?php echo $value['movie_thname']; ?></div>
                                </div>

                            </div>
                            <div class="card-quality-style color-star">
                                <?php echo $value['movie_ratescore']; ?>/10 <i class="fas fa-star"></i>
                            </div>
                        </a>
                    <?php } ?>


                </div>
                <div>
                </div>

            </div>
            <div class="content-main">
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
            </div>
            <?php foreach ($video_interest as $value) {  ?>
                <div class="content">
                    <div class="content-title">
                        <div class="title vl"><?php echo $value['category_name']; ?></div>
                        <a class="title-right" href="<?php echo "/category/" . $value['category_id'] . "/" . urlencode($value['category_name']); ?>">เพิ่มเติม</a>
                    </div>
                    <div class="content-grid">
                        <div class="content-list">
                            <?php
                            $movie = explode('|', $value['movie']);

                            $check = '1';
                            foreach ($movie as $val) {


                                list($movie_id, $movie_thname, $score, $movie_view, $movie_type, $movie_quality, $movie_picture) = explode('{-}', $val);

                                if ($check <= '5') {

                                    $url_name =  urldecode(trim(str_replace(")", "", (str_replace("(", "", (str_replace(" ", "-", $movie_thname)))))));

                                    if ($movie_type == 'se') {
                                        $urlvideo = urldecode(base_url('/series/' . $movie_id . '/' . $url_name));
                                    } else {
                                        $urlvideo = urldecode(base_url('/movie/' . $movie_id . '/' . $url_name));
                                    }

                            ?>
                                    <a href="<?php echo $urlvideo; ?>"  onclick="countView('<?= $movie_id ?>')" class="card-content" style="background-image: url('<?php echo $movie_picture; ?>')">

                                        <div class="card-quality">
                                            <div class="card-quality-style" style=" background-color: <?php echo $display; ?>;">
                                                <?php echo strtoupper($movie_quality); ?>
                                            </div>
                                            <div class="card-quality-style color-hd">
                                                <i class="fas fa-eye"></i>
                                                <?php
                                                if (empty($movie_view)) {
                                                    echo "0";
                                                } else {
                                                    echo $movie_view;
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="card-description">
                                            <div class="card-description-content">
                                               
                                                <div class="card-description-down"><?php echo $movie_thname; ?></div>
                                            </div>

                                        </div>
                                        <div class="card-quality-style color-star">
                                            <?php echo $score; ?>/10 <i class="fas fa-star"></i>
                                        </div>
                                    </a>
                            <?php
                                }
                                $check++;
                            }
                            ?>
                        </div>

                    </div>
                    <div>
                    </div>

                </div>
            <?php
            }
            ?>


            <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
            <script>
                var swiper = new Swiper('.swiper-container', {
                    slidesPerView: 'auto',
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                    breakpoints: {
                        1700: {
                            slidesPerView: 8,
                        },
                    }
                });
            </script>

</body>

</html>
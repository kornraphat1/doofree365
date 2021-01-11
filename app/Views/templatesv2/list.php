</style>
<!DOCTYPE html>
<html lang="en">



<body id="homepage">

    <div class="container" id="JAV">

        <div class="content-top">
            <div class="content-top-title">DOOFREE365</div>
            <div class="content-top-body">DOOFREE365</div>
        </div>
        <div class="content">
            <div class="content-title">
                <div class="title vl"><?= $title ?></div>
            </div>
            <div class="content-grid">
                <div class="content-list">
                    <?php

                    if (!empty($paginate['list'])) {
                        foreach ($paginate['list'] as $key => $value) {

                            $id = $value['movie_id'];
                            if ($value['movie_type'] == 'se') {

                                $url_name =  urldecode(trim(str_replace(")", "", (str_replace("(", "", (str_replace(" ", "-", $value['movie_thname'])))))));
                                $urlvideo = urldecode(base_url('/series/' . $id . '/' . $url_name));
                            } else {
                                $url_name =  urldecode(trim(str_replace(")", "", (str_replace("(", "", (str_replace(" ", "-", $value['movie_thname'])))))));
                                $urlvideo = urldecode(base_url('/movie/' . $id . '/' . $url_name));
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
                            <a href="<?php echo $urlvideo; ?>"  class="card-content" style="background-image: url('<?php echo $value['movie_picture']; ?>')"alt="<?php echo $value['movie_thname']; ?>" title="<?php echo $value['movie_thname']; ?>">
                                <div class="card-quality">
                                    <div class="card-quality-style" style=" background-color: <?php echo $display; ?>;">
                                        <?php echo strtoupper($value['movie_quality']); ?>
                                    </div>
                                    <div class="card-quality-style color-hd">
                                        <i class="fas fa-eye"></i>
                                        <?php if (empty($value['movie_view'])) {
                                            echo "0";
                                        } else {
                                            echo $value['movie_view'];
                                        } ?>
                                    </div>
                                </div>
                                <div class="card-description">
                                    <div class="card-description-content">
                                        <div class="card-description-nema"><?php echo $value['movie_sound'] . ' ' . $value['movie_quality'] . ' (' . $value['movie_year'].')'; ?></div>
                                        <div class="card-description-down"><?php echo $value['movie_thname']; ?></div>
                                    </div>

                                </div>
                                <div class="card-quality-style color-star">
                                    <?php echo $value['movie_ratescore']; ?>/10 <i class="fas fa-star"></i>
                                </div>
                            </a>
                    <?php
                        }
                    } else {
                        echo "<h4 style='float:left;color:#fff;width:100%;'><center>ไม่พบหนังที่ค้นหา</center></h4>";
                    }
                    ?>


                </div>

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


        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script>

        </script>

</body>

</html>
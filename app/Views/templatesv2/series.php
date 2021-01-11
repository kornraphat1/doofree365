
    <div class="container" id="play">


        <div class="content">


            
            <div class="content-title-play">
                <div class="title vl"><?php echo $video_data['movie_thname']; ?></div>
            </div>
            <div class="container">
                <div class="content-title-name">
                    <div class="title vl"> ตัวอย่างหนัง <?php echo $video_data['movie_thname']; ?></div>
                </div>
                <div class="content-video-display">

                    <?php
                        $searcharray = array(' ','!', '*', "'", "(", ")", ";", ":", "@", "&", "=", "+", "$", ",", "/", "?", "%", "#", "[", "]");
                        $replacearray = array('-','', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
                        $url_name = urlencode(str_replace($searcharray, $replacearray, $video_data['movie_thname']));
                        if (substr($video_data['movie_picture'], 0, 4) == 'http') {
                            $movie_picture = $video_data['movie_picture'];
                        } else {
                            $movie_picture = $path_thumbnail . $video_data['movie_picture'];
                        }
                    ?>
                    <div class="img-content"><img class="img-vi" alt="<?=$video_data['movie_thname']?>" src="<?=$movie_picture?>">
                    </div>

                    <?php
                        $yb = explode('embed', $video_data['movie_preview']);
                        if (count($yb) > 1) {
                            $urlyb = "https://www.youtube.com/embed/" . $yb[1];
                        } else {
                            $urlyb = "https://www.youtube.com/embed/" . $yb[0];
                        }
                    ?>
                    <div class="video-content"> <iframe class="movie-trailer " src="<?=$urlyb?>" frameborder="0" allowfullscreen=""></iframe>
                    </div>
                </div>
                <div class="content-video">
                    <div> ปีทีฉาย : <?php echo ( isset($video_data['movie_year']) ? $video_data['movie_year'] : "-"); ?>
                    </div>
                    <div> เสียง : 
                    <?php 
                        if (!empty($video_data['movie_sound'])) {
                            $sound = $video_data['movie_sound'];
                            if (strtolower($video_data['movie_sound'])=='th' || 
                            strtolower($video_data['movie_sound'])=='thai' ||
                            strpos(strtolower($video_data['movie_sound']),'thai')==true ||
                            strtolower($video_data['movie_sound'])=='ts') {
                                $sound = 'พากย์ไทย';
                            } else if (strtolower($video_data['movie_sound'])=='eng') {
                                $sound = 'SOUNDTRACK';
                            } else if (strtolower($video_data['movie_sound'])=='st' ||
                            strpos(strtolower($video_data['movie_sound']),'(t)')==true) {
                                $sound = 'ซับไทย';
                            }

                            echo $sound;
                        }else{
                            echo "-";
                        }
                    ?>
                    </div>
                    <div> IMDB : <?php echo $video_data['movie_ratescore']; ?>
                    </div>
                    <div> เรื่องย่อ :
                    </div>
                    <div> <?php echo ( !empty($video_data['movie_des']) ? $video_data['movie_des'] : "-"); ?>
                    </div>
                </div>
                <div class="content-video">
                    <div class="AD-style">
                        โฆษณา
                    </div>
                    <div class="player-style">
                        <?php
                            if(!empty($video_data['name_ep'])){
                                foreach ($video_data['name_ep'] as $key => $val) { 
                                    $url_nameep = urlencode(str_replace(' ', '-', $video_data['name_ep'][$key]));
                        ?>
                                    <a class="ep-link" href="<?=base_url('series/'.$video_data['movie_id'].'/'.$url_name.'/'.$key.'/'.$url_nameep)?>" tabindex="-1">
                                        <?= $video_data['movie_thname'] . '-' . $video_data['name_ep'][$key] ?>
                                    </a>
                        <?php
                                }
                            }
                        ?>
                    </div>
                </div>

                <div class="content-video-display">
                    <a href="<?=base_url('movie/'.$video_data['movie_id'].'/'.$url_name)?>" class="color-play"> <i class="fas fa-play"></i> ตัวเล่นหลัก
                    </a>
                    <div></div>
                    <div></div>
                    <button class="content-fail-style" onclick="get_Report();">แจ้งเสีย</button>

                    <div class="fa-style"> 
                        <a href="https://www.facebook.com/sharer/sharer.php?kid_directed_site=0&sdk=joey&u=<?= urlencode(base_url(uri_string())) ?>&display=popup&ref=plugin&src=share_button" target="_blank">
                            <i class="fab fa-facebook-f"></i> 
                        </a>

                        <a href="https://twitter.com/share?hashtags=ดูหนังออนไลน์,ดูหนังใหม่&text=<?= $url_name ?>" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                        
                        <a href="https://social-plugins.line.me/lineit/share?url=<?= urlencode(base_url(uri_string())) ?>" target="_blank"> 
                            <i class="fab fa-line"></i>
                        </a>
                    </div>
                </div>
                <div class="content-video-display">
                    <div class="color-play"> <?php echo ( !empty($sound) ? $sound : "-");?>
                    </div>
                    <div></div>
                    <div></div>
                    <div>
                        <?php
                            if(!empty($videocate)){
                                $numItems = count($videocate);
                                $i = 0;
                                foreach($videocate as $val){

                                    $searcharray = array(' ','!', '*', "'", "(", ")", ";", ":", "@", "&", "=", "+", "$", ",", "/", "?", "%", "#", "[", "]");
                                    $replacearray = array('-','', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
                                    $urlcate = urlencode(str_replace($searcharray, $replacearray, $val['category_name']));
                                    
                                    echo '<a href="'.base_url('category/'.$val['category_id'].'/'.$urlcate).'">'.$val['category_name'].'</a>';
                                    if(++$i != $numItems) { echo ", "; }
                                }
                            }
                        ?>
                    </div>
                </div>

                <div class="content">
                    <div class="content-title">
                        <div class="title vl">แนะนำหนัง</div>
                    </div>
                    <div class="content-grid">
                        <div class="content-list">

                        <?php
                            if(!empty($vdorandom)) {
                                foreach($vdorandom as $val) {

                            $searcharray = array(' ','!', '*', "'", "(", ")", ";", ":", "@", "&", "=", "+", "$", ",", "/", "?", "%", "#", "[", "]");
                            $replacearray = array('-','', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
                            $url_name = urlencode(str_replace($searcharray, $replacearray, $val['movie_thname']));
                            if (substr($val['movie_picture'], 0, 4) == 'http') {
                                $movie_picture = $val['movie_picture'];
                            } else {
                                $movie_picture = $path_thumbnail . $val['movie_picture'];
                            }
                        ?>

                            <a href="<?=base_url('movie/'.$val['movie_id'].'/'.$url_name)?>" class="card-content" style="background-image: url('<?=$movie_picture?>')">
                                <div class="card-quality">
                                    <div class="card-quality-style">
                                        <?=$val['movie_quality'];?>
                                    </div>
                                    <div class="card-quality-style color-hd">
                                        <i class="fas fa-eye"></i> <?=$val['movie_view'];?>
                                    </div>
                                </div>
                                <div class="card-description">
                                    <div class="card-description-content">
                                        <div class="card-description-nema"><?=$val['movie_thname'];?></div>
                                        <div class="card-description-down"><?=$val['movie_thname'];?></div>
                                    </div>

                                </div>
                                <div class="card-quality-style color-star">
                                    <?=$val['movie_ratescore'];?>/10 <i class="fas fa-star"></i>
                                </div>
                            </a>
                        
                        <?php
                                }
                            }
                        ?>
                            

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
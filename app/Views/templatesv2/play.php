
<div id="homepage">

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
                        <iframe id="player" class="movie-trailer" class="player" src="<?=base_url('player/'.$video_data['movie_id'].'/movie_thmain/'.$index)?>" scrolling="no" frameborder="0" allowfullscreen="yes"></iframe>
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
                    <div class="color-play"> <?=$sound?>
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

<script>
  function get_Report() {
    var movie_id = '<?= $video_data['movie_id'] ?>';
    var movie_name = '<?= $video_data['movie_thname'] ?>';
    var movie_ep_name = '';
    <?php if($video_data['movie_type']=='se'){ ?>
      movie_ep_name = '<?= $video_data['name_ep'][$index] ?>';
    <?php } ?>

    var report = prompt('แจ้งหนังเสืย');

    $.ajax({
      url: "<?= base_url('saveReport') ?>",
      data: {
        movie_id: movie_id,
        movie_name: movie_name,
        movie_ep_name: movie_ep_name,
        report: report
      },
      type: 'POST',
      async: false,
      success: function(data) {
        alert('แจ้งเรียบร้อยจะดำเนินการโดยเร็ว');
      }
    });
  }
</script>

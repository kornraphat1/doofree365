  <style>
    .form-control {
      border: 1px solid #000;

    }

    #movie-contract textarea,
    #movie-contract input {
      margin-bottom: 20px;
      /* text-align: center; */
    }

    #movie-contract .movie-btnrequest {

      background: #f22536;

      border: 3px solid #f22536;

    }

    #movie-contract .nav-pills .nav-link.active,
    #movie-contract .nav-pills .show>.nav-link {
      color: #000;
      background: transparent;
      border-radius: 0;
      border-bottom: 3px solid black;

    }

    #movie-contract .nav {
      width: 100%;
      justify-content: space-evenly;
      margin-left: 70px;
      margin-right: 70px;

    }

    label {
      display: inline-block;
      margin-bottom: .5rem;
      color: black;
      font-weight: 500;
    }

    .line-bottom {
      height: 50px;
      border-bottom: 2px solid black;
      width: 100%;
      text-align: right;
      padding-right: 20px;
      font-size: 30px;
    }

    .style-box {
      background-color: white !important;
      width: 60% !important;
    }
    #movie-contract .tab-content {
    margin: 0 auto;
    margin-top: 20px;
    margin-bottom: 20px;
    width: 60%;
    color: #fff;
    font-weight: 100;
}

    @media only screen and (max-width: 600px) {
      .style-box {
        background-color: white;
        width: 90%;
      }

      #movie-contract .nav-pills .nav-link {
        font-size: 16px;
      }

      #movie-contract .nav {

        margin-left: 10px;
        margin-right: 10px;
      }

      .tab-content>.active {
        padding: 0px;
      }
    }
  </style>
  <!-- Icons Grid -->
  <section>
    <div class="container style-box">
      <div id="movie-contract" class="row">
        <div class="line-bottom"></div>
        <ul class="nav nav-pills">
          <li class="nav-item">
            <a class="nav-link active " data-toggle="pill" href="#request">ขอหนัง</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " data-toggle="pill" href="#contract">ติดต่อลงโฆษณา</a>
          </li>
        </ul>

        <div class="tab-content" id="formrequest">
          <div id="request" class="tab-pane container active">
            <form class="movie-formcontract" novalidate method="POST" action="">
              <input id="request_text" name="request_text" type="text" class="form-control" required autocomplete="off" placeholder="ชื่อหนังที่ต้องการ">
              <center>
                <button type="submit" class="movie-btnrequest">ตกลง</button>
                <!-- <button  class="movie-btnrequest">ยกเลิก</button> -->
              </center>

            </form>
          </div>

          <div id="contract" class="tab-pane container fade">
            <form class="movie-formcontract" novalidate method="POST" action="">
              <label for="ads_con_name"> ชื่อ สกุล :</label>
              <input id="ads_con_name" name="ads_con_name" type="text" class="form-control" required autocomplete="off">
              <div class="invalid-feedback">
                กรุณากรอกชื่อ นามสกุล
              </div>
              <label for="ads_con_email"> Email :</label>
              <input id="ads_con_email" type="text" class="form-control" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,4}$" required autocomplete="off">
              <div class="invalid-feedback">
                กรุณากรอก Email เช่น " xxx@xxx.com "
              </div>
              <label for="ads_con_line"> Line ID :</label>
              <input id="ads_con_line" type="text" class="form-control" required autocomplete="off">
              <div class="invalid-feedback">
                กรุณากรอก Line ID
              </div>
              <label for="ads_con_tel"> เบอร์โทรศัพท์ :</label>
              <input id="ads_con_tel" type="text" class="form-control" required autocomplete="off" pattern="^0([8|9|6])([0-9]{8}$)">
              <div class="invalid-feedback">
                กรุณากรอก เบอร์โทรศัพท์ 10หลัก เช่น " 0600000000 "
              </div>

              <label id="ads_con_all_alt">**กรุณากรอกข้อมูลให้ครบทุกช่อง</label>

              <center><button type="submit" class="movie-btnrequest">ส่งข้อความ</button></center>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

<section id="movie-banners" class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-12 ">
        <?php
        if (!empty($ads['pos2'])) {
          foreach ($ads['pos2'] as $val) {

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
      </div>
    </div>
  </div>
</section>


<script type="text/javascript">
    $(function() {

      $(".movie-formcontract").on("submit", function() {

        var form = $(this)[0];
        var request_text = $.trim($("#request_text").val());
        var ads_con_name = $.trim($("#ads_con_name").val());
        var ads_con_email = $.trim($("#ads_con_email").val());
        var ads_con_line = $.trim($("#ads_con_line").val());
        var ads_con_tel = $.trim($("#ads_con_tel").val());
alert(request_text)
        if (form.checkValidity() === false) {

          event.preventDefault();

          event.stopPropagation();

        } else if (request_text) {

          $.ajax({
            url: "<?php echo base_url().'/save_requests'  ?>",
            type: 'POST',
            async: false,
            data: {
              request_text: request_text
            },
            success: function(data) {
              alert('ดำเนินการเรียบร้อยแล้วครับ')
              setInterval(function(){  window.location.href = "<?= base_url() ?>";}, 2000);
            
              return false;

            }
          });
          return false;

        } else {

          $.ajax({
            url: " <?php echo base_url() . '/con_ads' ?>",
            type: 'POST',
            data: {
              ads_con_name: ads_con_name,
              ads_con_email: ads_con_email,
              ads_con_line: ads_con_line,
              ads_con_tel: ads_con_tel,

            },
            success: function(data) {
              alert('ดำเนินการเรียบร้อยแล้วครับ')
              setInterval(function(){  window.location.href = "<?= base_url() ?>";}, 2000);
              return false;

            }
          });
          return false;

        }



        form.classList.add('was-validated');

      });

    });



    $(document).ready(function() {

      $("#ads_con_email_alt").hide();

    });
  </script>
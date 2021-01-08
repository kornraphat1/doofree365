
<!DOCTYPE html>
<html lang="en">

<body id="homepage">

    <div class="container" id="con">

        <div class="content-top">
            <div class="content-top-title">DOOFREE365</div>
            <div class="content-top-body">DOOFREE365</div>
        </div>

        <div class="content-cate">
            <div class="content" onclick="myFunction()">หนังใหม่</div>
            <div class="content" onclick="myFunction()">ประเภทหนัง</div>
        </div>
        <div class="content-cateall" id="movie">
            <div class="content">หนังใหม่</div>
            <div class="content">ผจญภัย</div>
            <div class="content">หนังตลก</div>
            <div class="content">แอนนิเมชั่น</div>
            <div class="content">หนังใหม่</div>
            <div class="content">ผจญภัย</div>
            <div class="content">หนังตลก</div>
            <div class="content">แอนนิเมชั่น</div>
            <div class="content">หนังใหม่</div>
            <div class="content">ผจญภัย</div>
            <div class="content">หนังตลก</div>
            <div class="content">แอนนิเมชั่น</div>
        </div>
        <div class="content-cateall" id="cate" style="display:none">
            <div class="content">debut</div>
            <div class="content">bukkake</div>
            <div class="content">Gokkun</div>
            <div class="content">เล่นน้ำกาม</div>
            <div class="content">debut</div>
            <div class="content">bukkake</div>
            <div class="content">Gokkun</div>
            <div class="content">เล่นน้ำกาม</div>
            <div class="content">debut</div>
            <div class="content">bukkake</div>
            <div class="content">Gokkun</div>
            <div class="content">เล่นน้ำกาม</div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script>
            function myFunction() {
                var x = document.getElementById("movie");
                var y = document.getElementById("cate");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
                if (y.style.display === "block") {
                    y.style.display = "none";
                } else {
                    y.style.display = "block";
                }
            }
        </script>

</body>

</html>
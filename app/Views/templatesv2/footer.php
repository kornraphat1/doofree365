<footer>

    <div class="footer-logo">
        <img class="footer-img" src="http://192.168.10.43:1002/public/assets/img/Doofree-365-LOGO.png" alt="img">
    </div>
    <div class="container">

        <span>ดูหนังออนไลน์</span> Doofree365 ดูหนัง ดูหนังซีรี่ส์ ฟรี โหลดไวแบบไม่มีสะดุดภาพคมชัดระดับ HD FullHD 4k ครบทุกเรื่องทุกรสดูได้ทุกที่ทุกเวลาทั้งบนมือถือ แท็บเล็ต เครื่องคอมพิวเตอร์ ระบบปฏิบัติการ Android และ IOS ดูหนังออนไลน์ หนังไทย หนังฝรั่ง หนังเอเชีย หนังการ์ตูน Netflix Movie หนังบู๊ หนังตลก หนังอาชญากรรม หนังดราม่า สยองขวัญ หนังผจญภัย และยังมี หนังใหม่ ให้รับชมอีกมากมาย
        สามารถรับชมฟรีได้ทุกที่ทุกเวลาตลอด 24 ชั่วโมงที่ Doofree365.com
</footer>
<script>
    $(document).ready(function() {


        $("#formsearch").submit(function(event) {
            // alert("Esad");
            if ($("#search").val()) {
                var url = "<?= base_url('/search') ?>" + '/' + jQuery("#search").val();
                window.location.href = url;

            } else {

                window.location.href = "<?= base_url(); ?>"

            }
            event.preventDefault();
        });
    });

    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.body.style.overflow = 'hidden'
        document.getElementById("overlay").style.display = "block";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.body.style.overflow = 'auto'
        document.getElementById("overlay").style.display = "none";
    }
    var swiper = new Swiper('#swp1', {
        pagination: '.swiper-pagination',
        slidesPerView: 'auto',
        paginationClickable: true,
        spaceBetween: 0
    });


    function myFunction(x) {
        x.classList.toggle("change");
        var x = document.getElementById("myLinks");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }

    function myFunctiontree() {
        document.getElementById("myDropdown").classList.toggle("show");
    }
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }

    function countView(id) {
        // alert(id);
        var base_url = '<?= base_url() ?>';
        $.ajax({

            url: base_url + "/movie_view_add/" + id,
            method: "GET",

            async: true,

            success: function(response) {

                console.log(response); // server response

            }


        });

    }
</script>
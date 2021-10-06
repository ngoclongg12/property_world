<script src="../framework/bootstrap/js/jquery.js" charset="utf-8"></script>
<script src="../framework/bootstrap/js/proper.min.js" charset="utf-8"></script>
<script src="../framework/bootstrap/js/boostrap.js" charset="utf-8"></script>
<script src="../framework/jquery/jquery.js" type="text/javascript"></script>
<script src="../framework/slick-main/slick.jquery.json"></script>
<script src="../framework/slick-main/slick/slick.min.js"></script>

<script>
    $(Document).ready(function() {
        $('.slider-product').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 4,
            autoplaySpeed: 1000,
            prevArrow: '<button class="btn-slick prev-slick" ><i class="fas fa-angle-left"></i></button>',
            nextArrow: '<button class="btn-slick next-slick" ><i class="fas fa-angle-right"></i></button>'
        });
        $(".methodopen").click(function() {
            $(".methodopen").hide();
            $(".methodclose").show();
            $(".methodinp").show();
            $(".methodswitch").show();
            $(".tg-abs").addClass("tg-abs-add");
        });
        $(".methodclose").click(function() {
            $(".methodinp").hide();
            $(".methodclose").hide();
            $(".methodswitch").hide();
            $(".methodopen").show();
            $(".tg-abs").removeClass("tg-abs-add");
        })
        $('.slide-news').slick({
            dots: true,
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 2,
            autoplaySpeed: 2000,
        });
        $('.options').click(function() {
            $(".option-logout-toggle").slideToggle();
        });
        $('.options').mouseleave(function() {
            $('.option-logout-toggle').mouseleave(function() {
                $(".option-logout-toggle").fadeOut();
            });
        });
        $('.tog-bar').click(function() {
            $(".house-world").slideToggle();
        });
        $(".set_admin").click(function() {
            $('.option-logout-toggle-admin').slideToggle();
        });
        $('.add-sp').ready(function() {
            $('.add-sp').fadeOut(3000);
        });
    });

    function product_del(){
        let conf = confirm('Bạn có chắc muốn xoá, thông tin sản phẩm sẽ không lấy lại được ?');
        return conf;
    }
</script>
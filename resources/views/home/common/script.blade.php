<a href="#" class="scroll_top" title="Scroll to Top" style="display: inline;">Scroll</a>

<!-- Script-->
<script type="text/javascript" src="{!! url('public/home') !!}/assets/lib/jquery/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="{!! url('public/home') !!}/assets/lib/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{!! url('public/home') !!}/assets/lib/select2/js/select2.min.js"></script>

<script type="text/javascript" src="{!! url('public/home') !!}/assets/lib/jquery.bxslider/jquery.bxslider.min.js"></script>

<script type="text/javascript" src="{!! url('public/home') !!}/assets/lib/owl.carousel/owl.carousel.min.js"></script>

<script type="text/javascript" src="{!! url('public/home') !!}/assets/lib/jquery.countdown/jquery.countdown.min.js"></script>

<script type="text/javascript" src="{!! url('public/home') !!}/assets/lib/jquery.elevatezoom.js"></script>

<script type="text/javascript" src="{!! url('public/home') !!}/assets/lib/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="{!! url('public/home') !!}/assets/js/jquery.actual.min.js"></script>
<script type="text/javascript" src="{!! url('public/home') !!}/assets/lib/fancyBox/jquery.fancybox.js"></script>
<script type="text/javascript" src="{!! url('public/home') !!}/assets/lib/jquery.elevatezoom.js"></script>
<script type="text/javascript" src="{!! url('public/home') !!}/assets/js/theme-script.js"></script>
<script>
    $("#search").click(function () {
        var key_search = $("input[name='key_search']").val();
        var cate_search = $("select[name='cate_search']").val();
        if(key_search == ''){
            alert("Mời bạn từ khóa muốn tìm kiếm!");
            $("input[name='key_search']").focus();
            return;
        }else{
            location = "{!! url() !!}/tim-kiem/"+cate_search+"-"+key_search+".html";
        }
    });
</script>

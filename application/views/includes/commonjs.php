<script type="text/javascript" src="<?= asset('js/commonJs.js') ?>"></script>
<script type="text/javascript" src="<?= asset('js/lightslider.min.js') ?>"></script>
<script src="<?= asset('js/animation.js') ?>"></script>

<script type="text/javascript" src="<?= asset('js/lazyload.min.js') ?>"></script>
<script type="text/javascript" src="<?= asset('js/additional-methods.js') ?>"></script>
<script type="text/javascript" src="<?= asset('js/custom.js') ?>"></script>
<script type="text/javascript" src="<?= asset('js/custom-validation.js') ?>"></script>
<script type="text/javascript" src="<?= asset('js/jquery.validate.min.js') ?>"></script>
<script type="text/javascript" src="<?= asset('js/toastr.min.js') ?>"></script>

<script type="text/javascript">
    $(function() {
        $("img[lazy]").lazyload();
    });
    $(window).on("load", function() {
        AOS.init({
            easing: "ease-in-out-sine",
            offset: 100,
            disable: window.innerWidth <= 991
        });
    });
</script>
<script type="text/javascript" src="<?= asset('js/main.js') ?>"></script>


<?php
echo "<!----copy-right---->
<script src='js/jquery.min.js'></script>
<script type='text/javascript' src='js/easing.js'></script>
<div class='copy-right text-center'>
    <div class='container'>
        <p><a href='#'>&#169 Glory House World Church 2016</a></p>
        <script type='text/javascript'>
                        $(document).ready(function() {

                            var defaults = {
                                  containerID: 'toTop', // fading element id
                                containerHoverID: 'toTopHover', // fading element hover id
                                scrollSpeed: 1200,
                                easingType: 'linear'
                             };

                            $().UItoTop({ easingType: 'easeOutQuart' });

                        });
        </script>
        <a href='#' id='toTop' style='display: block;'> <span id='toTopHover' style='opacity: 1;'> </span></a>
    </div>
</div>
<!---//copy-right---->


<script src='js/move-top.js'></script>
<script src='js/modernizr.js'></script>

<!---- start-smooth-scrolling---->
<script type='text/javascript'>
jQuery(document).ready(function($) {
    $('.scroll').click(function(event){
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
    });
});
</script>
<!---- end start-smooth-scrolling scripts---->
<!----start-top-nav-script---->
<script>
$(function() {
    var pull         = $('#pull');
        menu         = $('nav ul');
        menuHeight    = menu.height();
    $(pull).on('click', function(e) {
        e.preventDefault();
        menu.slideToggle();
    });
    $(window).resize(function(){
        var w = $(window).width();
        if(w > 320 && menu.is(':hidden')) {
            menu.removeAttr('style');
        }
    });
});
</script>

<!----//End-top-nav-script---->
<script src='js/script.js?v1.1'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
<script type='text/javascript' src='js/bootstrap.min.js'></script>
    <!--Script for header-video -->
<script>
$(document).ready(function() {
$('.header-video').each(function(i, elem) {
headerVideo = new HeaderVideo({
  element: elem,
  media: '.header-video__media',
  playTrigger: '.header-video__play-trigger',
  closeTrigger: '.header-video__close-trigger'
});
});
});
</script>
    <!--end header video script-->";
?>

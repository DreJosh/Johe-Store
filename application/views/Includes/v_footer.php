<script src="https://unpkg.com/bootstrap-table@1.21.4/dist/bootstrap-table.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script>
    (function($) {
        "use strict";

        $(function() {
            var header = $(".start-style");
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();

                if (scroll >= 10) {
                    header.removeClass('start-style').addClass("scroll-on");
                } else {
                    header.removeClass("scroll-on").addClass('start-style');
                }
            });
        });

        $(document).ready(function() {
            $('body.hero-anime').removeClass('hero-anime');
        });


        $('body').on('mouseenter mouseleave', '.nav-item', function(e) {
            if ($(window).width() > 750) {
                var _d = $(e.target).closest('.nav-item');
                _d.addClass('show');
                setTimeout(function() {
                    _d[_d.is(':hover') ? 'addClass' : 'removeClass']('show');
                }, 1);
            }
        });

        $("#switch").on('click', function() {
            if ($("body").hasClass("dark")) {
                $("body").removeClass("dark");
                $("#switch").removeClass("switched");
            } else {
                $("body").addClass("dark");
                $("#switch").addClass("switched");
            }
        });

    })(jQuery);
</script>
</body>

</html>
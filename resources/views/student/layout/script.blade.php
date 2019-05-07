  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Scrollable -->
    <script>
        var lastScrollTop = 0;

        $(window).scroll(function(event) {
            var scrollTop = $(this).scrollTop();

            if ($(document).scrollTop() > 150) {
                if (scrollTop > lastScrollTop) {
                    $("#header").fadeOut("slow");
                } else {
                    $("#header").fadeIn();
                }
                lastScrollTop = scrollTop;
            }

            if ($(document).scrollTop() > 500) {
                $('#scroll-top').fadeIn("slow");
            } else {
                $('#scroll-top').fadeOut("slow");
            }
        });

        $("#scroll-top").click(function() {
            $("html, body").animate({
                scrollTop: 0
            }, "slow");
        });
    </script>
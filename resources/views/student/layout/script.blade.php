  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Bootstrap JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- Scrollable -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>

  <script>
      $(window).scroll(function(event) {
          if ($(document).scrollTop() > $("#menu-hr").scrollTop() + 100) {
              $("#menu-hr").addClass("sticky");
          } else {
              $("#menu-hr").removeClass("sticky");
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

  
	<!-- Control Login/ Signup -->
    <script src="public/js/action.js"></script>
    <script src="public/js/actionStudent.js"></script>
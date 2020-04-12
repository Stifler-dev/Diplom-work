 <!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
  $('#menuShow').click (function () {
    if ($('#mobileMenu').is(':visible'))
      $('#mobileMenu').hide ();
    else
      $('#mobileMenu').show ();
  });


  $(document).scroll (function () {
    if ($(document).width () > 758){
      if ($(document).scrollTop () > $('header').height () + 10)
          $('nav').addClass('fixed');
      else
          $('nav').removeClass('fixed');
    }
  });

  window.onresize = function (event){
     $('#mobileMenu').hide ();
  }
</script>



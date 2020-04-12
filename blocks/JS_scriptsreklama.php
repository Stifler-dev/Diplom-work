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



<!--код  фиксированного меню-->
<script type="text/javascript">
function getTopOffset(e) { 
  var y = 0;
  do { y += e.offsetTop; } while (e = e.offsetParent);
  return y;
}
var block = document.getElementById('fixblock'); /* fixblock - значение атрибута id блока */
if ( null != block ) {
  var topPos = getTopOffset( block );
  window.onscroll = function() {
    var newcss = (topPos < window.pageYOffset) ? 
      'top:60px; width:426px; position: fixed;' : 'position:static;';
    block.setAttribute( 'style', newcss );
  }
}
</script>
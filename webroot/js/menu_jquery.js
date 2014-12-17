$( document ).ready(function() {
$(" ul li a ").click(
    function(){
      $(".active").removeClass("active");
      $(this).addClass("active");
      return true;
    })
});



		


/*Appelle du menu responsive*/
$(document).ready(function(){
    $('#menu').slicknav();
});


/*Auto scroll menu page CV */
$(document).ready(function(){
   $('a[href^="#"]').click(function(){  
    var the_id = $(this).attr("href");    
    $('html, body').animate({  
        scrollTop:$(the_id).offset().top  
    }, 'slow');  
    return false;  
}); 
});

/*Fixe sub-nav page CV haut de page */
 $(function(){
 $(document).ready(function(){
   $(window).scroll(function () {
      if ($(this).scrollTop() > 150) { 
          $('#nav-cv').addClass("fixNavigation"); 
          
      } else {
      $('#nav-cv').removeClass("fixNavigation");
      
      }
   });
 });
 });

/*Affichage du bouton retour en haut de page */
  $(document).ready(function(){
      $(window).scroll(function(){  
         posScroll = $(document).scrollTop();  
         if(posScroll >=150)   
         {
         	//$('#top_link').addClass('top_link') ;
             $('.top_link').fadeIn(600); 
         }
         else  
         {
              $('.top_link').fadeOut(600); 
          	//$('#top_link').removeClass('top_link') ;
      }

      });
         return false ;
      });  

 (function ($) {
          $(document).ready(function() {
          $("#show-title").click(function () {
             $('#arrow').toggleClass('expanded');
             // Do it afterwards as the operation is async
           
          });
      });
  })(jQuery);


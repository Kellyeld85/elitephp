
/*modal*/

		$('.js-accordion-trigger').on('click', function(e){
		  var mswap = $(".mobile-swap");
		  mswap.text() == mswap.data("text-swap") 
		    ? mswap.text(mswap.data("text-original")) 
		    : mswap.text(mswap.data("text-swap"));
		
		var swap = $(".swap");
		  swap.text() == swap.data("text-swap") 
		    ? swap.text(swap.data("text-original")) 
		    : swap.text(swap.data("text-swap"));

		//toggle the x and - on the submenu
		  jQuery(this).parent().find('.submenu').slideToggle('fast');      
		  jQuery(this).parent().toggleClass('is-expanded');
		  $('minus').toggle
		  e.preventDefault();

		});
/*main menu slide*/


  $("#menubutton").animatedModal();
  $("#menubuttonmodal").animatedModal();

/*before and after slide*/
	$(document).ready(function(){
  		$('.cocoen').cocoen();
	});


// javascrip flip modal over
	$(function(){

		        $(".card").flip({
								
		          trigger: 'manual'
		        });

		        $(".flip-btn").click(function(){
		          $(".card").flip(true);
				  $("#animatedModal").scrollTop(0);
		        });

				
		        $(".close-btn").click(function(){
					$.ajax({
						url: 'clear_form.php',
						success: function (response) {						
						}
					});						   
		          $(".card").flip(false);
		        });

		        
		});
		

//preloader

$(window).on('load', function() { // makes sure the whole site is loaded 
							  
  $('#status').fadeOut(); // will first fade out the loading animation 
  $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
  $('body').delay(350).css({'overflow':'visible'});
  
})
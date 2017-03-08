<!DOCTYPE html>
<html lang="en">


<head>
  <?php $theroyalparkspage = 1; include ('includes/meta.php') ?>
  
		<?php 
		
			if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 9.') !== FALSE)
					{
						include 'easy_contactie/inc/config.php'; 				
					} else {
						include 'easy_contact/inc/config.php';
					}
					
		?> 
		<?php 
		
			if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 9.') !== FALSE)
					{
						echo '<link href="easy_contactie/style/'.$contactTemplate.'.css" rel="stylesheet" type="text/css" /> ';					
					} else {
						echo '<link href="easy_contact/style/'.$contactTemplate.'.css" rel="stylesheet" type="text/css" /> '; 
					}
					
		?>

		<!--[if !IE]>
			<!--><script>if(/*@cc_on!@*/false){document.documentElement.className+=' ie10';}</script>
		<!--<![endif]-->

	<!--[if IE]>
	<link rel="stylesheet" href="assets/iefixes.css">
	<![endif]-->	


</head>

<body>
	  <?php include_once("analyticstrackingtwo.php") ?>
<!-- Preloader -->
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
  <header class="mobileheader">

  <!--Call your modal-->
      <div class="mobilemenubutton">
	      <a id="menubutton" href="#animatedModal">☰</a>
	  </div>
  </header>

	<?php include('includes/header.php') ?>

    <div class="container">

      <div class="project">

	  <section>
            <div class="image">
              <img src="img/clients/theroyalparksmain.jpg" alt="Each piece of crystal cleaned">

            </div>

            <div class="styledstrip">
	            <a href="corinthiahotel.php"><h3 class="previous"><img src="img/left-arrow.png" alt="Previous client Corinthia Hotel"></h3></a> 
	            <a href="westfieldlondon.php"> <h3 class="next"><img src="img/right-arrow.png" alt="Next client Westfield Shopping Center London"></h3></a> 
	        </div>
             <!-- <summary>The title of this page lorem</summary> -->

  		</section>

  		<div class="description">
		      	<h1>Regents Park Mosque</h1>
		      <p>The London Central Mosque also known as the Islamic Cultural Centre (ICC) or Regent's Park Mosque designed by Sir Frederick Gibberd, completed in 1978, with a very prominent dome and a minerat.</p>
		      <p>We brought back the beauty of the buildings enormous central chandelier located in the main prayer hall of the mosque.  Each crystal was hand polished and sparking clean.</p>
			  <h1>Testimonial</h1>
		      <p>"Elites under the guidance of Albert has been looking after our chandeliers for over 30 years and we have always found him and his staff professional and totally understandable to our needs as a place of worship "</p>

  		</div>

	</div>
 <div class="clearfix"></div>


	<section class="image-container">

	  <div class="clientcard">
		  <a href="img/clients/Large/theroyalparks01.jpg" data-lightbox="Chandelier at a Regents Park Mosque">
		  <img src="img/clients/theroyalparks01.jpg" alt="Cleaning of chandelier at The London Central Mosque">
		  </a>
	  </div>
	  <div class="clientcard">
		  <a href="img/clients/Large/theroyalparks02.jpg" data-lightbox="Chandelier at a Regents Park Mosque">
		  <img src="img/clients/theroyalparks02.jpg" alt="One of the biggest chandeliers Regents Park London">
		  </a>
	  </div>
	  <div class="clientcard">
		  <a href="img/clients/Large/theroyalparks03.jpg" data-lightbox="Chandelier at a Regents Park Mosque">
		  <img src="img/clients/theroyalparks03.jpg" alt="Carefully cleaning each piece of crystal">
		  </a>
	  </div>

	</section>

   <div class="clearfix"></div>


	<?php include('includes/footer.php') ?>

</div>
</body>
	<script src="js/lightbox.min.js"></script>
    <script src="js/cocoen.js"></script>

<script>
$(document).ready(function(){
 	var success = '<?php echo $success; ?>';
	 if (success == "no") {
	 $('.card').flip(true);
	 	id = $('body').find('#animatedModal'),
        idConc = '#'+id.attr('id');
        id.css({'opacity':'1','z-index':'9999'});
        id.addClass('zoomIn');
        id.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', '');
	 }
});
</script>

</html>

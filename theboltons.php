<!DOCTYPE html>
<html lang="en">


<head>
  <?php $theboltonspage = 1; include ('includes/meta.php') ?>
  
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
              <img src="img/clients/theboltonsmain.jpg" alt="chandelier in the luxary hall in the Boltons">

            </div>

            <div class="styledstrip">
	            <a href="westfieldlondon.php"><h3 class="previous"><img src="img/left-arrow.png" alt="previous client westfields shopping center"></h3></a> 
	            <a href="privateresident.php"> <h3 class="next"><img src="img/right-arrow.png" alt="Next client private resident"></h3></a>
	        </div>
             <!-- <summary>The title of this page lorem</summary> -->

  		</section>
  		<div class="description">
		      	<h1>Private Resident at The Boltons London</h1>
		      <p>This resident at the Bolton’s in Chelsea has magnificent regal reception rooms, redolent with crystal chandeliers, upon entering.  </p>
		      <p>This four story house has beautiful chandeliers and wall lamps across all floors each one carefully cleaned, polished and light bulbs replaced brining back their original beauty.</p>


  		</div>

	</div>
 <div class="clearfix"></div>


	<section class="image-container">

	  <div class="clientcard">
		  <a href="img/clients/Large/theboltons01.jpg" data-lightbox="Chandelier at The Boltons">
		  <img src="img/clients/theboltons01.jpg" alt="cleaned chandelier at the boltons in London">
		  </a>
	  </div>
	  <div class="clientcard">
		  <a href="img/clients/Large/theboltons02.jpg" data-lightbox="Chandelier at The Boltons">
		  <img src="img/clients/theboltons02.jpg" alt="Cleaned chandelier hanging in luxary hall">
		  </a>
	  </div>
	  <div class="clientcard">
		  <a href="img/clients/Large/theboltons03.jpg" data-lightbox="Chandelier at The Boltons">
		  <img src="img/clients/theboltons03.jpg" alt="long chandeiler cleaned in situ">
		  </a>
	  </div>

	   <div class="clientcard">
		   <a href="img/clients/Large/theboltons04.jpg" data-lightbox="Chandelier at The Boltons">
		   <img src="img/clients/theboltons04.jpg" alt="Wall lamps cleaned">
		   </a>
	  </div>
	  <div class="clientcard">
		  <a href="img/clients/Large/theboltons05.jpg" data-lightbox="Chandelier at The Boltons">
		  <img src="img/clients/theboltons05.jpg" alt="Conservatory chandelier cleaned">
		  </a>
	  </div>
	  <div class="clientcard">
		  <a href="img/clients/Large/theboltons06.jpg" data-lightbox="Chandelier at The Boltons">
		  <img src="img/clients/theboltons06.jpg" alt="Cleaned candle chandelier">
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

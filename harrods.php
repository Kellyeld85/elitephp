<!DOCTYPE html>
<html lang="en">


<head>
  <?php $harrodspage = 1; include ('includes/meta.php') ?>

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
              <img src="img/clients/harrodsmain.jpg" alt="Round chandelier at harrods store">

            </div>

            <div class="styledstrip">
		        <a href="heathrow.php"><h3 class="previous"><img src="img/left-arrow.png" alt="Previous client heathrow"></h3></a> 
	            <a href="privateresidentliverpool.php"> <h3 class="next"> <img src="img/right-arrow.png" alt="Next client private resident"></h3></a> 
            </div>
             <!-- <summary>The title of this page lorem</summary> -->

  		</section>


  		<div class="description">
		      	<h1>Harrods</h1>
		      <p>Cleaning of all chandeliers on ground floor of Harrods Store in London </p>
			  <h1>Testimonial</h1>
		      <p>"Elite has been looking after all the chandelier cleaning Harrods for over 25 years and in that time we have never had fault with elite and Alberts service thank you again "</p>

  		</div>

	</div>
 <div class="clearfix"></div>


	<section class="image-container">

	  <div class="clientcard">
		  <a href="img/clients/Large/harrods01.jpg" data-lightbox="Chandelier at Harrods">
		  <img src="img/clients/harrods01.jpg" alt="Chandelier in Hall">
		  </a>
	  </div>
	  <div class="clientcard">
		  <a href="img/clients/Large/harrods02.jpg" data-lightbox="Chandelier at Harrods">
		  <img src="img/clients/harrods02.jpg" alt="throughout the hall at Harrods">
		  </a>
	  </div>
	  <div class="clientcard">
		  <a href="img/clients/Large/harrods03.jpg" data-lightbox="Chandelier at Harrods">
		  <img src="img/clients/harrods03.jpg" alt="The stairwell chandelier at Harrods">
		  </a>
	  </div>

	   <div class="clientcard">
		   <a href="img/clients/Large/harrods04.jpg" data-lightbox="Chandelier at Harrods">
		   <img src="img/clients/harrods04.jpg" alt="Long rounded chandelier at Harrods">
		   </a>
	  </div>
	  <div class="clientcard">
		  <a href="img/clients/Large/harrods05.jpg" data-lightbox="Chandelier at Harrods">
		  <img src="img/clients/harrods05.jpg" alt="Crystal droplets chandelier at Harrods">
		  </a>
	  </div>
	  <div class="clientcard">
		  <a href="img/clients/Large/harrods06.jpg" data-lightbox="Chandelier at Harrods">
		  <img src="img/clients/harrods06.jpg" alt="Crystal droplets chandelier at Harrods">
		  </a>
	  </div>

	</section>

   <div class="clearfix"></div>


	<?php include('includes/footer.php') ?>

</div>
</body>
		<script src="js/lightbox.min.js"></script>
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

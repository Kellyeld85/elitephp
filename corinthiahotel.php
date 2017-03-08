<!DOCTYPE html>
<html lang="en">


<head>
  <?php $corinthiahotelpage = 1; include ('includes/meta.php') ?>
  
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

  		<section class="halfheroimagecocoen">
            <div class="cocoen">
              <img src="img/clients/corinthiabefore.jpg" alt="Moon Chandelier before Cleaning">
              <img src="img/clients/corinthiaafter.jpg" alt="Moon Chandelier After Cleaning">
            </div>

			<div class="styledstrip">
				<a href="privateresident.php"><h3 class="previous"><img src="img/left-arrow.png" alt="Previous Image"></h3>
				</a><a href="theroyalparks.php"> <h3 class="next"><img src="img/right-arrow.png" alt="Next Image"></h3></a> 
			</div>
             <!-- <summary>The title of this page lorem</summary> -->


  		</section>

  		<div class="description">
		      	<h1>Corinthia Hotel</h1>
		      <p>At the beautiful Corinthia Hotel in London, we clean all chandeliers including wall lamps in situ over two nights with four of our fully trained chandelier technicians.</p>
		      <p>Their beautiful Full Moon Chandelier is in the centre of their glass domed Lobby Lounge and is the main focal point, each and every single cut glass ball is cleaned by hand removing all the dust and 				dirt deposits; leaving the chandelier sparkling clean and looking beautiful. </p>

			  <h1>Testimonial</h1>
		      <p>"Thank you for every thing Albert the chandelier's  look beautiful everyone taking what a difference."</p>

  		</div>

	</div>
 <div class="clearfix"></div>


	<section class="image-container">

	  <div class="clientcard">
		  <a href="img/clients/Large/corinthia01.jpg" data-lightbox="Chandelier at a the Corinthia hotel">
		  <img src="img/clients/corinthia01.jpg" alt="">
		  </a>
	  </div>
	  <div class="clientcard">
		  <a href="img/clients/Large/corinthia02.jpg" data-lightbox="Chandelier at a the Corinthia hotel">
		  <img src="img/clients/corinthia02.jpg" alt="">
		  </a>
	  </div>
	  <div class="clientcard">
		  <a href="img/clients/Large/corinthia03.jpg" data-lightbox="Chandelier at a the Corinthia hotel">
		  <img src="img/clients/corinthia03.jpg" alt="">
		  </a>
	  </div>

	   <div class="clientcard">
		  <a href="img/clients/Large/corinthia04.jpg" data-lightbox="Chandelier at a the Corinthia hotel">
		  <img src="img/clients/corinthia04.jpg" alt="">
		  </a>
	  </div>
	  <div class="clientcard">
		  <a href="img/clients/Large/corinthia05.jpg" data-lightbox="Chandelier at a the Corinthia hotel">
		  <img src="img/clients/corinthia05.jpg" alt="">
		  </a>
	  </div>
	  <div class="clientcard">
		  <a href="img/clients/Large/corinthia06.jpg" data-lightbox="Chandelier at a the Corinthia hotel">
		  <img src="img/clients/corinthia06.jpg" alt="">
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

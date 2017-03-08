<!DOCTYPE html>
<html lang="en">


<head>
  <?php $privateresidentliverpoolpage = 1; include ('includes/meta.php') ?>
  
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
              <img src="img/clients/privateresidentliverpoolbefore.jpg" alt="Before crystal chandelier is cleaned">
              <img src="img/clients/privateresidentliverpoolafter.jpg" alt="After crystal chandelier is cleaned">
            </div>

			<div class="styledstrip">
				<a href="harrods.php"><h3 class="previous"><img src="img/left-arrow.png" alt="Previous client Harrods"></h3></a>
				<a href="corinthiahotel.php"> <h3 class="next"><img src="img/right-arrow.png" alt="Next client Corinthia Hotel"></h3></a> 
			</div>
             <!-- <summary>The title of this page lorem</summary> -->


  		</section>

  		<div class="description">
		      	<h1>Private Resident In Liverpool</h1>
		      <p>This resident in Liverpool has a beautiful extra large empire style antique chandelier hanging in their luxury staircase; our professional, fully trained team of technician’s load tested the chandelier, dismantled each part and hand cleans the chandelier yearly.</p>
			  <h1>Testimonial</h1>
		      <p>"Mary estate manger we have had the chandelier cleaned over the years by different companies as you came Recomened we thought we would give you a try, your staff cleaned arch and every single peice of crystal by hand and it looks out of this world we have never seen colour in the crystals before . Thank you so much an see you in June."</p>

  		</div>

	</div>
 <div class="clearfix"></div>


	<section class="image-container">

	  <div class="clientcard">
		  <a href="img/clients/Large/privateresidentliverpool01.jpg" data-lightbox="Chandelier Cleaning for a private resident">
		  <img src="img/clients/privateresidentliverpool01.jpg" alt="Chandelier Cleaned">
		  </a>
	  </div>
	  <div class="clientcard">
		<a href="img/clients/Large/privateresidentliverpool02.jpg" data-lightbox="Chandelier Cleaning for a private resident">
	  	<img src="img/clients/privateresidentliverpool02.jpg" alt="Closer look at the cleaned chandelier">
		</a>
	  </div>
	  <div class="clientcard">
	  	<a href="img/clients/Large/privateresidentliverpool03.jpg" data-lightbox="Chandelier Cleaning for a private resident">
	  	<img src="img/clients/privateresidentliverpool03.jpg" alt="Chandelier fully Cleaned">
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

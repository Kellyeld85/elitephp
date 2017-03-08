<!DOCTYPE html>
<html lang="en">


<head>
  <?php $privateresidentpage = 1; include ('includes/meta.php') ?>

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
              <img src="img/clients/privateresbefore.jpg" alt="Before cleaning of chandelier">
              <img src="img/clients/privateresafter.jpg" alt="Chandelier beautifully cleaned">
            </div>

			<div class="styledstrip">
				<a href="theboltons.php"><h3 class="previous"><img src="img/left-arrow.png" alt="Previous client at the Boltons"></h3></a> 
				<a href="banquetinghouse.php"> <h3 class="next"><img src="img/right-arrow.png" alt="Next client Banqueting House"></h3></a>
			</div>
             <!-- <summary>The title of this page lorem</summary> -->


  		</section>

  		<div class="description">
		      	<h1>Private Resident</h1>
		      <p>This resident has a beautiful crystal chandelier hanging in their luxury staircase.</p><p> Our professional, fully trained team of technician’s dismantles each part and hand cleans the chandelier yearly. </p>
			  <h1>Testimonial</h1>
		      <p>"Thank your staff for a wonderful job and nothing was a problem moving furniture , carpets etc and so polite you have a great team please book me for every 6 months."</p>


  		</div>

	</div>
 <div class="clearfix"></div>


	<section class="image-container">

	  <div class="clientcard">
		  <a href="img/clients/Large/privateresident01.jpg" data-lightbox="Chandelier at a private residents house">
		  <img src="img/clients/privateresident01.jpg" alt="Each arm hand cleaned">
		  </a>
	  </div>
	  <div class="clientcard">
		  <a href="img/clients/Large/privateresident02.jpg" data-lightbox="Chandelier at a private residents house">
		  <img src="img/clients/privateresident02.jpg" alt="Before cleaning of chandelier arm">
		  </a>
	  </div>
	  <div class="clientcard">
		  <a href="img/clients/Large/privateresident03.jpg" data-lightbox="Chandelier at a private residents house">
		  <img src="img/clients/privateresident03.jpg" alt="After cleaning of chandelier arm">
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

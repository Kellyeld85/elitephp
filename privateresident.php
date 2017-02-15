<!DOCTYPE html>
<html lang="en">
<?php include 'easy_contact/inc/config.php'; ?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Private Resident - Chandelier Cleaning</title>
    <link rel="stylesheet" href="assets/styles.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css">
    <link href="assets/lightbox.min.css" rel="stylesheet">
    <?php echo '<link href="easy_contact/style/'.$contactTemplate.'.css" rel="stylesheet" type="text/css" /> '; ?>

	
 <!-- jQuery Plugin -->
    <script src="js/jquery-1.12.3.min.js"></script>
    <script src="js/animatedModal.min.js"></script>
    <script src="js/customjs.js"></script> 
    <script src="js/flip.min.js"></script>

</head>

<body>
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
              <img src="img/clients/privateresbefore.jpg" alt="">
              <img src="img/clients/privateresafter.jpg" alt="">
            </div>

			<div class="styledstrip"><a href="harrods.php"><h3 class="previous">❮ </h3></a> <a href="corinthiahotel.php"> <h3 class="next"> ❯</h3></a></div>
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
		  <img src="img/clients/privateresident01.jpg" alt="">
		  </a>
	  </div>
	  <div class="clientcard">
		  <a href="img/clients/Large/privateresident02.jpg" data-lightbox="Chandelier at a private residents house">
		  <img src="img/clients/privateresident02.jpg" alt="">
		  </a>
	  </div>
	  <div class="clientcard">
		  <a href="img/clients/Large/privateresident03.jpg" data-lightbox="Chandelier at a private residents house">
		  <img src="img/clients/privateresident03.jpg" alt="">
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

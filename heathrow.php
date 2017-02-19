<!DOCTYPE html>
<html lang="en">
<?php include 'easy_contact/inc/config.php'; ?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Heathrow VIP Lounges - Chandelier Cleaning</title>
    <link rel="stylesheet" href="assets/styles.css">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <link href="assets/lightbox.min.css" rel="stylesheet">
    <?php echo '<link href="easy_contact/style/'.$contactTemplate.'.css" rel="stylesheet" type="text/css" /> '; ?>
	 <!-- jQuery Plugin -->
    <script src="js/jquery-1.12.3.min.js"></script>
    <script src="js/animatedModal.min.js"></script>
    <script src="js/customjs.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/flip.min.js"></script>

</head>

<body>
	<?php include_once("analyticstracking.php") ?>
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
              <img src="img/clients/heathrowbefore.jpg" alt="">
              <img src="img/clients/heathrowafter.jpg" alt="">
            </div>

            <div class="styledstrip"><a href="banquetinghouse.php"><h3 class="previous">❮ </h3></a><a href="harrods.php"> <h3 class="next"> ❯</h3></a> </div>
             <!-- <summary>The title of this page lorem</summary> -->

  		</section>

  		<div class="description">
		      	<h1>Heathrow Terminals</h1>

		      <p>Terminals 3 and 5, at Heathrow are first class lounges dedicated to premium travellers. </p>
			  <p>Our experienced, fully trained staff carefully hand clean all parts and replace any blown bulbs of the Swarovski crystal chandeliers lighting the gold bar in the galleries first lounge, three 					Gallery Club Lounges, wine gallery and the grand chandelier at the front entrance comprising of more than 53,000 individual Austrian crystals, the chandelier was made by a British company based in 				Shropshire.</p>
			  <h1>Testimonial</h1>
		      <p>"Albert your new dedicated team have completed the task of cleaning every individual peice of the crystals by hand and they look fantastic also all our unique light fixtures .
Please pass on my comment to them all ."</p>

  		</div>

	</div>
 <div class="clearfix"></div>


	<section class="image-container">

	  <div class="clientcard">
		  <a href="img/clients/Large/heathrow01.jpg" data-lightbox="heathrow01">
		  	<img src="img/clients/heathrow01.jpg" alt="">
		  </a>
	  </div>
	  <div class="clientcard">
		  <a href="img/clients/Large/heathrow02.jpg" data-lightbox="heathrow01">
		  	<img src="img/clients/heathrow02.jpg" alt="">
		  </a>
	  </div>
	  <div class="clientcard">
		  <a href="img/clients/Large/heathrow03.jpg" data-lightbox="heathrow01">
		  	<img src="img/clients/heathrow03.jpg" alt="">
		  </a>
	  </div>

	   <div class="clientcard">
		   <a href="img/clients/Large/heathrow04.jpg" data-lightbox="heathrow01">
		   	  <img src="img/clients/heathrow04.jpg" alt="">
		   </a>
	  </div>
	  <div class="clientcard">
		  <a href="img/clients/Large/heathrow05.jpg" data-lightbox="heathrow01">
		  	<img src="img/clients/heathrow05.jpg" alt="">
		  </a>
	  </div>
	  <div class="clientcard">
		  <a href="img/clients/Large/heathrow06.jpg" data-lightbox="heathrow01">
		  	<img src="img/clients/heathrow06.jpg" alt="">
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

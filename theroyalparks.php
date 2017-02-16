<!DOCTYPE html>
<html lang="en">
<?php include 'easy_contact/inc/config.php'; ?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Regents Park Mosque - London</title>
    <link rel="stylesheet" href="assets/styles.css">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css">
	<link href="assets/lightbox.min.css" rel="stylesheet">
    <?php echo '<link href="easy_contact/style/'.$contactTemplate.'.css" rel="stylesheet" type="text/css" /> '; ?>

	 <!-- jQuery Plugin -->
    <script src="js/jquery-1.12.3.min.js"></script>
    <script src="js/animatedModal.min.js"></script>
    <script src="js/customjs.js"></script>
    <script src="js/flip.min.js"></script>
    <script src="js/modernizr.js"></script>
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

	  <section>
            <div class="image">
              <img src="img/clients/theroyalparksmain.jpg" alt="">

            </div>

            <div class="styledstrip"><a href="corinthiahotel.php"><h3 class="previous">❮ </h3></a> <a href="westfieldlondon.php"> <h3 class="next"> ❯</h3></a> </div>
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
		  <img src="img/clients/theroyalparks01.jpg" alt="">
		  </a>
	  </div>
	  <div class="clientcard">
		  <a href="img/clients/Large/theroyalparks02.jpg" data-lightbox="Chandelier at a Regents Park Mosque">
		  <img src="img/clients/theroyalparks02.jpg" alt="">
		  </a>
	  </div>
	  <div class="clientcard">
		  <a href="img/clients/Large/theroyalparks03.jpg" data-lightbox="Chandelier at a Regents Park Mosque">
		  <img src="img/clients/theroyalparks03.jpg" alt="">
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

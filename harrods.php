<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Harrods - Chandelier Cleaning</title>
    <link rel="stylesheet" href="assets/styles.css">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <link href="assets/lightbox.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
	<link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon">

	<script src="js/jquery-1.12.3.min.js"></script>
	<script src="js/jquery-migrate-1.4.1.min.js"></script>
    <script src="js/animatedModal.min.js"></script>
    <script src="js/customjs.js"></script>
    <script src="js/flip.min.js"></script>

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

		<!--[if IE]>
	<link rel="stylesheet" href="assets/iefixes.css">
	<![endif]-->
	
	 <!-- jQuery Plugin -->
    <script src="js/jquery-1.12.3.min.js"></script>
    <script src="js/animatedModal.min.js"></script>
    <script src="js/customjs.js"></script>
    <script src="js/cocoen.js"></script>
    <script src="js/flip.min.js"></script>
        <script src="js/modernizr.js"></script>

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

  		<section>
            <div class="image">
              <img src="img/clients/harrodsmain.jpg" alt="">

            </div>

            <div class="styledstrip">
		        <a href="heathrow.php"><h3 class="previous"><img src="img/left-arrow.png"></h3></a> 
	            <a href="privateresident.php"> <h3 class="next"> <img src="img/right-arrow.png"></h3></a> 
            </div>
             <!-- <summary>The title of this page lorem</summary> -->

  		</section>


  		<div class="description">
		      	<h1>Harrods</h1>
		      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas quam, totam, animi qui est necessitatibus dolores nesciunt, molestias hic ad ut eaque quaerat, accusantium reprehenderit eveniet! Accusamus, molestiae optio! Repudiandae!</p>
			  <h1>Testimonial</h1>
		      <p>"Elite has been looking after all the chandelier cleaning Harrods for over 25 years and in that time we have never had fault with elite and Alberts service thank you again "</p>

  		</div>

	</div>
 <div class="clearfix"></div>


	<section class="image-container">

	  <div class="clientcard">
		  <a href="img/clients/Large/harrods01.jpg" data-lightbox="Chandelier at Harrods">
		  <img src="img/clients/harrods01.jpg" alt="">
		  </a>
	  </div>
	  <div class="clientcard">
		  <a href="img/clients/Large/harrods02.jpg" data-lightbox="Chandelier at Harrods">
		  <img src="img/clients/harrods02.jpg" alt="">
		  </a>
	  </div>
	  <div class="clientcard">
		  <a href="img/clients/Large/harrods03.jpg" data-lightbox="Chandelier at Harrods">
		  <img src="img/clients/harrods03.jpg" alt="">
		  </a>
	  </div>

	   <div class="clientcard">
		   <a href="img/clients/Large/harrods04.jpg" data-lightbox="Chandelier at Harrods">
		   <img src="img/clients/harrods04.jpg" alt="">
		   </a>
	  </div>
	  <div class="clientcard">
		  <a href="img/clients/Large/harrods05.jpg" data-lightbox="Chandelier at Harrods">
		  <img src="img/clients/harrods05.jpg" alt="">
		  </a>
	  </div>
	  <div class="clientcard">
		  <a href="img/clients/Large/harrods06.jpg" data-lightbox="Chandelier at Harrods">
		  <img src="img/clients/harrods06.jpg" alt="">
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

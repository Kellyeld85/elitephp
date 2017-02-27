<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Westfield's in London - Chandelier Cleaning</title>
    <link rel="stylesheet" href="assets/styles.css">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css">
    <link href="assets/lightbox.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
	<link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon">

<!-- jQuery Plugin -->
	<script src="js/jquery-1.12.3.min.js"></script>
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
		
				<!--[if !IE]>
			<!--><script>if(/*@cc_on!@*/false){document.documentElement.className+=' ie10';}</script>
		<!--<![endif]-->

    	<!--[if IE]>
	<link rel="stylesheet" href="assets/iefixes.css">
	<![endif]-->	

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
              <img src="img/clients/westfieldmain.jpg" alt="">

            </div>

            <div class="styledstrip">
	            <a href="theroyalparks.php"><h3 class="previous"><img src="img/left-arrow.png"></h3></a> 
	            <a href="theboltons.php"> <h3 class="next"><img src="img/right-arrow.png"></h3></a> 
	        </div>
             <!-- <summary>The title of this page lorem</summary> -->

  		</section>

  		<div class="description">
		      	<h1>Westfield - London</h1>
		      <p>Westfield has 35 world-class luxury stores at The Village, The beautiful chandeliers hanging from the ceiling add to the beauty and luxury style of the shopping centre.  </p>
		      <p>Due to the size and height of the chandeliers a bespoke cleaning procedure is put in place, scheduled in at night and a lift boom is used to gain access and clean every part.</p>
			  <h1>Testimonial</h1>
		      <p>"Thank you for organising the large task to clean our chandeliers, See you next year."</p>

  		</div>

	</div>
 <div class="clearfix"></div>


	<section class="image-container">

	  <div class="clientcard">
		  <a href="img/clients/Large/westfield01.jpg" data-lightbox="Cleaning the Clandeliers at Westfields">
		  <img src="img/clients/westfield01.jpg" alt="Westfields cleaning">
		  </a>
	  </div>
	  <div class="clientcard">
		  <a href="img/clients/Large/westfield02.jpg" data-lightbox="Cleaning the Clandeliers at Westfields">
		  <img src="img/clients/westfield02.jpg" alt="Westfields cleaning">
		  </a>
	  </div>
	  <div class="clientcard">
		  <a href="img/clients/Large/westfield03.jpg" data-lightbox="Cleaning the Clandeliers at Westfields">
		  <img src="img/clients/westfield03.jpg" alt="Westfields cleaning">
		  </a>
	  </div>

	   <div class="clientcard">
		   <a href="img/clients/Large/westfield04.jpg" data-lightbox="Cleaning the Clandeliers at Westfields">
		   <img src="img/clients/westfield04.jpg" alt="Westfields cleaning">
		   </a>
	  </div>
	  <div class="clientcard">
		  <a href="img/clients/Large/westfield05.jpg" data-lightbox="Cleaning the Clandeliers at Westfields">
		  <img src="img/clients/westfield05.jpg" alt="Westfields cleaning">
		  </a>
	  </div>
	  <div class="clientcard">
		  <a href="img/clients/Large/westfield06.jpg" data-lightbox="Cleaning the Clandeliers at Westfields">
		  <img src="img/clients/westfield06.jpg" alt="Westfields cleaning">
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

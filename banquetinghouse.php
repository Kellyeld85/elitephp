<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Banqueting House - Chandelier Cleaning</title>
     <link rel="stylesheet" href="assets/styles.css">
     <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css">
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
              <img src="img/clients/banquetmain.jpg" alt="">

            </div>

            <div class="styledstrip">
	            <a href="heathrow.php"> <h3 class="next"><img src="img/right-arrow.png"></h3></a> 
	         </div>
             <!-- <summary>The title of this page lorem</summary> -->

  		</section>

  		<div class="description">
			<h1>Banqueting House</h1>
		      <p>The wonderful painted ceiling is lit by 4 beautiful brass chandeliers, each chandelier is taken down, carefully dismantled, hand cleaned and polished; restoring them back to their former glory.</p>
			  <h1>Testimonial</h1>
		      <p>"Thank you Albert for all your help and the wonderful job of our chandelier , I'm so pleased you talked us into repolishing the brass Flemish chandeliers rather than regilt them what a finish every on comenting on how the look comlpletely different"</p>

  		</div>

	</div>
 <div class="clearfix"></div>


	<section class="image-container">

	  <div class="clientcard">
		  <a href="img/clients/Large/banquet01.jpg" data-lightbox="Chandelier at Banquet house">
		  	<img src="img/clients/banquet01.jpg" alt="">
		  </a>
	  </div>
	  <div class="clientcard">
		  <a href="img/clients/Large/banquet02.jpg" data-lightbox="Chandelier at Banquet house">
		  <img src="img/clients/banquet02.jpg" alt="">
		  </a>
	  </div>
	  <div class="clientcard">
		  <a href="img/clients/Large/banquet03.jpg" data-lightbox="Chandelier at Banquet house">
		  <img src="img/clients/banquet03.jpg" alt="">
		  </a>
	  </div>

	  
	  <div class="clientcard">
		  <a href="img/clients/Large/banquet04.jpg" data-lightbox="Chandelier at Banquet house">
		  	<img src="img/clients/banquet04.jpg" alt="">
		  </a>
	  </div>
	  <div class="clientcard">
		  <a href="img/clients/Large/banquet05.jpg" data-lightbox="Chandelier at Banquet house">
		  <img src="img/clients/banquet05.jpg" alt="">
		  </a>
	  </div>
	  <div class="clientcard">
		  <a href="img/clients/Large/banquet06.jpg" data-lightbox="Chandelier at Banquet house">
		  <img src="img/clients/banquet06.jpg" alt="">
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

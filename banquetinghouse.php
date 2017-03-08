<!DOCTYPE html>
<html lang="en">


<head>
  <?php $banquetinghousepage = 1; include ('includes/meta.php') ?>

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
              <img src="img/clients/banquetmain.jpg" alt="Chandeliers at Banqueting House">

            </div>

            <div class="styledstrip">
	            <a href="heathrow.php"> <h3 class="next"><img src="img/right-arrow.png" alt="Next Image"></h3></a> 
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
		  	<img src="img/clients/banquet01.jpg" alt="wonderful painted ceiling is lit by 4 beautiful brass chandeliers">
		  </a>
	  </div>
	  <div class="clientcard">
		  <a href="img/clients/Large/banquet02.jpg" data-lightbox="Chandelier at Banquet house">
		  <img src="img/clients/banquet02.jpg" alt="Chandeliers liting the Banqueting Hall">
		  </a>
	  </div>
	  <div class="clientcard">
		  <a href="img/clients/Large/banquet03.jpg" data-lightbox="Chandelier at Banquet house">
		  <img src="img/clients/banquet03.jpg" alt="Load Testing at Banqueting house">
		  </a>
	  </div>

	  
	  <div class="clientcard">
		  <a href="img/clients/Large/banquet04.jpg" data-lightbox="Chandelier at Banquet house">
		  	<img src="img/clients/banquet04.jpg" alt="Banqueting House Chandelier Cleaning">
		  </a>
	  </div>
	  <div class="clientcard">
		  <a href="img/clients/Large/banquet05.jpg" data-lightbox="Chandelier at Banquet house">
		  <img src="img/clients/banquet05.jpg" alt="Restored back to beauty">
		  </a>
	  </div>
	  <div class="clientcard">
		  <a href="img/clients/Large/banquet06.jpg" data-lightbox="Chandelier at Banquet house">
		  <img src="img/clients/banquet06.jpg" alt="hand cleaned and polished">
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

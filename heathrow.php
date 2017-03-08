<!DOCTYPE html>
<html lang="en">


<head>
  <?php $heathrowpage = 1; include ('includes/meta.php') ?>
  
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
              <img src="img/clients/heathrowbefore.jpg" alt="Before image cleaning chandelier at terminal 5">
              <img src="img/clients/heathrowafter.jpg" alt="After image cleaning chandelier at terminal 5">
            </div>

            <div class="styledstrip">
	            <a href="banquetinghouse.php"><h3 class="previous"><img src="img/left-arrow.png" alt="Previous Client Banqueting House"> </h3></a>
	            <a href="harrods.php"> <h3 class="next"><img src="img/right-arrow.png" alt="Next Client Harrods"></h3></a> 
	        </div>
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
		  	<img src="img/clients/heathrow01.jpg" alt="cleaned chandelier on terminal 5 Heathrow London">
		  </a>
	  </div>
	  <div class="clientcard">
		  <a href="img/clients/Large/heathrow02.jpg" data-lightbox="heathrow01">
		  	<img src="img/clients/heathrow02.jpg" alt="cleaning chandelier on terminal 5 VIP Lounges at Heathrow">
		  </a>
	  </div>
	  <div class="clientcard">
		  <a href="img/clients/Large/heathrow03.jpg" data-lightbox="heathrow01">
		  	<img src="img/clients/heathrow03.jpg" alt="cleaning chandelier on terminal 5 VIP Lounges at Heathrow">
		  </a>
	  </div>

	   <div class="clientcard">
		   <a href="img/clients/Large/heathrow04.jpg" data-lightbox="heathrow01">
		   	  <img src="img/clients/heathrow04.jpg" alt="cleaning chandelier on terminal 3 VIP Lounges at Heathrow">
		   </a>
	  </div>
	  <div class="clientcard">
		  <a href="img/clients/Large/heathrow05.jpg" data-lightbox="heathrow01">
		  	<img src="img/clients/heathrow05.jpg" alt="After cleaning chandelier at the first Lounge at Heathrow London">
		  </a>
	  </div>
	  <div class="clientcard">
		  <a href="img/clients/Large/heathrow06.jpg" data-lightbox="heathrow01">
		  	<img src="img/clients/heathrow06.jpg" alt="cleaning chandelier at the first Lounge at Heathrow close up">
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

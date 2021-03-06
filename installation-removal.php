<!DOCTYPE html>
<html lang="en">


<head>
  <?php $installationpage = 1; include ('includes/meta.php') ?>
  
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

<div class="services">
<div class="services-area align">
<h1>Installation &amp; Removal</h1>
<p>You have valuable pieces in a property that need to be dismantled, packed and/or
installed, and you don’t want to take a risk in mishandling the goods and mismanaging the
process.</p>
<p>Whether you are relocating, renovating your home or in charge of transforming a
commercial property, trust that we can safely remove and fit your chandelier securely back
to its dedicated spot or install it in its new home.</p>
<p>No matter the size, weight and elevation we can make provisions to ensure that your
hanging centrepiece is well looked after.</p>
</div>
<div class="services-area"> <img class="hidden" src="img/install01.jpg" alt="Rewiring of chandelier"></div>

</div>

<div class="services blue">
  <div class="services-area"> <img class="image" src="img/install02.jpg" alt="Chandelier ready for installation"></div>
<div class="services-area">
<ul>
  <li>☑ Load safety testing</li>
  <li>☑ Load safety test certificate</li>
  <li>☑ Removal and installation</li>
  <li>☑ Packing and crating</li>
  <li>☑ A team of qualified chandelier operatives</li>
</ul>
</div>
</div>

<div class="clearfix"></div>

<div class="services">


<?php $installation = 1; include('includes/accordion.php') ?>


</div>

<div class="clearfix"></div>

        <?php include('includes/footer.php') ?>


    </div>

</body>

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
<script src="js/accordion.js"></script>
</html>

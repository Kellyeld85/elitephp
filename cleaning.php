<!DOCTYPE html>
<html lang="en">

<head>
 <?php $cleaningpage = 1; include ('includes/meta.php') ?>

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
		<h1>Cleaning Services</h1>
		<p>Your chandelier hangs there for a reason: To Dazzle.</p>
		<p>If the crystal or glass pieces look glazed, have spots on them and no longer reflect light as
		they used to, it’s time to get them cleaned.</p>
		<p>Note that the frequency of chandelier cleaning depends on certain factors such as its age,
		shape, size, height and location.</p>
		<p> Whether you require a deep clean or a shallow clean, trust that your prized chandelier will
		be handled with care by our team of electricians and technical restorers.</p>
	</div>
	
	<div class="services-area"> <img class="hidden" src="img/cleaning01.jpg" alt="Chandelier Cleaning Service"></div>
		 
</div>


<div class="services blue">
	
  <div class="services-area"> <img class="image" src="img/cleaning02.jpg" alt="Cleaning Chandelier Service"></div>
<div class="services-area">
<ul>
  <li>☑ Removal of dirt and dust deposits</li>
  <li>☑ Buffing of body, frame and metal pieces</li>
  <li>☑ Replacement of light bulbs</li>
  <li>☑ Cleaning materials and equipment</li>
  <li>☑ On-site service</li>
</ul>
</div>
</div>

<div class="clearfix"></div>

<div class="services">


<?php $cleaning = 1; include('includes/accordion.php') ?>


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

<!DOCTYPE html>
<html lang="en">


<head>
  <?php $restorepage = 1; include ('includes/meta.php') ?>
  
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
<div class="services-area align restore">
<h1>Restore, Repair, Rewire</h1>
<p>Your chandelier is damaged, broken or dulled and you want to know whether it can be
restored it to its former glory.</p>
<p>If intricate pieces and metal parts are loose, chipped, cracked, twisted, missing or
damaged by natural wearing, give us a call.</p>
<p>Every little accessory that make up your chandelier contributes to its grandeur and we are
proud to have a team of highly-qualified craftsmen skilled in the production and replication
of pieces such as glassblowing and cutting, metal fabrication and other restoration
methods.</p>
<p>If the electric wires on your chandelier are damaged by environmental forces such as
water, humidity or fire, we can provide a test and rewire as necessary. You will be provided
with a new certificate.</p>
</div>
<div class="services-area"> <img class="hidden"  src="img/restore01.jpg" alt="before and after restoration"></div>

</div>

<div class="services blue">
  <div class="services-area"> <img class="image" src="img/restore02.jpg" alt="Before and after crystal chandelier is restored"></div>
<div class="services-area">
<ul>
  <li>☑ Broken and damaged chandeliers</li>
  <li>☑ Smoke and water-damaged antiques</li>
  <li>☑ Crystal and glassware repair</li>
  <li>☑ Replacement of old or damaged wiring</li>
  <li>☑ Test certificate on completion</li>
  <li>☑ Re-pinning of broken crystals</li>
  <li>☑ Metal polishing in your required finish</li>
</ul>
</div>
</div>

<div class="clearfix"></div>

<div class="services">


<?php $restore = 1; include('includes/accordion.php') ?>


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

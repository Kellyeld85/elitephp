<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chandelier Load Testing Service</title>
    <link rel="stylesheet" href="assets/styles.css">
     <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css">
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
    <script src="js/flip.min.js"></script>
    <script src="js/customjs.js"></script>
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
<div class="services-area"> <img class="hidden"  src="img/restore01.jpg"></div>

</div>

<div class="services blue">
  <div class="services-area"> <img class="image" src="img/restore02.jpg"></div>
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

<!DOCTYPE html>
<html lang="en">


<head>
  <?php $winchtestingpage = 1; include ('includes/meta.php') ?>
  
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
<h1>Winch Testing</h1>
<p>A winch system is a technique designed to make high-elevation objects become easily
accessible by allowing the chandelier to be lowered, lifted and adjusted by a wire rope.</p>
<p>This eliminates the need for using hazardous ladders and expensive scaffolding when
maintaining and servicing chandeliers.</p>
<p> This system affords you convenience, safety and peace of mind.</p>
<p> We are up-to-date and compliant with the Lifting Operation and Lifting Equipment
Regulations under the Health and Safety Executive (UK).</p>
</div>
<div class="services-area"> <img class="hidden" src="img/about.png" alt="Chandelier winch testing service"></div>

</div>

<div class="services blue">
  <div class="services-area"> <img class="image" src="img/winch02.jpg" alt="Winching system installed"></div>
<div class="services-area">
<ul>
  <li>☑ Motorised chandelier lift system provided</li>
  <li>☑ Motorised chandelier lift system installed</li>
  <li>☑ A team of qualified chandelier operatives</li>
</ul>
</div>
</div>

<div class="clearfix"></div>

<div class="services">


<?php $winch = 1; include('includes/accordion.php') ?>


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

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
<div class="services-area"> <img class="hidden" src="img/about.png" alt="Chandelier Winch Service"></div>

</div>

<div class="services blue">
  <div class="services-area"> <img class="image" src="img/winch02.jpg" alt="Winching System Service"></div>
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

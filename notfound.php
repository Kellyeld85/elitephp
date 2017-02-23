

<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page Not Found  - Elite Chandelier Services</title>
    <link rel="stylesheet" href="assets/styles.css">
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


    <section class="container">

        <div class="blankspace">
          <h1>Woops!  </h1>
		  <p>Looks like this page does exist anymore - Please use the links below to navigate to the main site.</h1>
	                 
        </div>
		
		<div class="clearfix"></div>
			
		<div class="services">
			
			<?php include('includes/accordion.php') ?>
		
		</div>
	


        <!--<div class="wrapper-for-content-outside-of-footer">
   Uncomment this whole section for a sticky footer. The content of the page should be inside of this .wrapper-for-content-outside-of-footer
</div>-->


<?php include('includes/footer.php') ?>

    </section>

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

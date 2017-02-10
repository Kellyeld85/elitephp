<?php include 'easy_contact/inc/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>testing the grid</title>
    <link rel="stylesheet" href="assets/styles.css">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <?php echo '<link href="easy_contact/style/'.$contactTemplate.'.css" rel="stylesheet" type="text/css" /> '; ?>

</head>

<body>
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


	<section class="service">
		
		<div class="service-section">
			
			<div class="sectionone">
				<p>Text here</p>
			</div>
			<div class="sectiontwo">
				<img src="img/1910_image.jpg" alt="1910_image">
			</div>
			
		</div>
		
		<div class="service-section">
				
			<div class="sectionone">
				<img src="img/1910_image.jpg" alt="1910_image">			
			</div>
			<div class="sectiontwo">
				<p>Text here</p>
			</div>
			
		</div>
		
	</section>
	
	<section class="clientport">
		<div class="clientportimg">
			<img src="img/1910_image.jpg" alt="1910_image">
			<img src="img/1933_image.png" alt="1933_image">
			<img src="img/1933_image.png" alt="1933_image">
		</div>
	</section>
	
	<section class="other-services">
		
	</section>

   <div class="clearfix"></div>

        
	<?php include('includes/footer.php') ?>
	
	</div>
</body>

 <!-- jQuery Plugin -->
    <script src="js/jquery-1.12.3.min.js"></script>
    <script src="js/animatedModal.min.js"></script>
    <script src="js/customjs.js"></script> 
    <script src="js/cocoen.js"></script>
    <script src="js/flip.min.js"></script>

</html>

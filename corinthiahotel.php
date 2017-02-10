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

      <div class="project">

  		<section class="halfheroimagecocoen">
            <div class="cocoen">
              <img src="img/clients/corinthiabefore.jpg" alt="">
              <img src="img/clients/corinthiaafter.jpg" alt="">
            </div>

      <div class="styledstrip"><a href="privateresidentliverpool.php"><h3 class="previous">❮</h3></a> <a href="heathrow.php"> <h3 class="next">❯</h3></a> </div>
             <!-- <summary>The title of this page lorem</summary> -->


  		</section>

  		<div class="description">
		      	<h1>Corinthia Hotel</h1>
		      <p>The Corinthia Hotel is one of the top 5 star hotels in London, they paid over a £100,000 for their Baccarat chandelier.</p>

			  <p>We clean each and ever single cut glass ball by hand removing all the dust and dirt deposits leaving sparkling clean over two nights with four of our fully trained chandelier technicians. </p>

			  <p>We were called in after a company could not complete the task.  This cleaning program takes two days</p>

  		</div>

	</div>
 <div class="clearfix"></div>


	<section class="image-container">

	  <div class="clientcard">
	  	<img src="img/clients/corinthia01.jpg" alt="">
	  </div>
	  <div class="clientcard">
	  	<img src="img/clients/corinthia02.jpg" alt="">
	  </div>
	  <div class="clientcard">
	  	<img src="img/clients/corinthia03.jpg" alt="">
	  </div>

	   <div class="clientcard">
	  	<img src="img/clients/corinthia04.jpg" alt="">
	  </div>
	  <div class="clientcard">
	  	<img src="img/clients/corinthia05.jpg" alt="">
	  </div>
	  <div class="clientcard">
	  	<img src="img/clients/corinthia06.jpg" alt="">
	  </div>

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

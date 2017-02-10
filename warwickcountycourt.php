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
              <img src="img/before.jpg" alt="">
              <img src="img/after.jpg" alt="">
            </div>

            <div class="next"><h1>Next  </h1> </div>
             <!-- <summary>The title of this page lorem</summary> -->
             
  		</section>
  		
  		<div class="description">
		      	<h1>Name</h1>
		      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas quam, totam, animi qui est necessitatibus dolores nesciunt, molestias hic ad ut eaque quaerat, accusantium reprehenderit eveniet! Accusamus, molestiae optio! Repudiandae!</p>
			  <h1>Testimonal</h1>
		      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas quam, totam, animi qui est necessitatibus dolores nesciunt, molestias hic ad ut eaque quaerat, accusantium reprehenderit eveniet! Accusamus, molestiae optio! Repudiandae!</p>
		      
  		</div>

	</div>
 <div class="clearfix"></div>


	<section class="image-container">
	
	  <div class="clientcard">
	  	<img src="img/500x500.jpg" alt="">
	  </div>
	  <div class="clientcard">
	  	<img src="img/500x500.jpg" alt="">
	  </div>
	  <div class="clientcard">
	  	<img src="img/500x500.jpg" alt="">
	  </div>
	
	   <div class="clientcard">
	  	<img src="img/500x500.jpg" alt="">
	  </div>
	  <div class="clientcard">
	  	<img src="img/500x500.jpg" alt="">
	  </div>
	  <div class="clientcard">
	  	<img src="img/500x500.jpg" alt="">
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

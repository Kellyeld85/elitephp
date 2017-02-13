<!DOCTYPE html>
<html lang="en">
<?php include 'easy_contact/inc/config.php'; ?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Private Resident at The Boltons London</title>
    <link rel="stylesheet" href="assets/styles.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css">
    <?php echo '<link href="easy_contact/style/'.$contactTemplate.'.css" rel="stylesheet" type="text/css" /> '; ?>

	 <!-- jQuery Plugin -->
    <script src="js/jquery-1.12.3.min.js"></script>
    <script src="js/animatedModal.min.js"></script>
    <script src="js/customjs.js"></script> 
    <script src="js/flip.min.js"></script>
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
	      
  		<section>
            <div class="image">
              <img src="img/clients/theboltonsmain.jpg" alt="">
              
            </div>

            <div class="styledstrip"><a href="westfieldlondon.php"><h3 class="previous">❮ </h3></a> <a href="privateresidentliverpool.php"> <h3 class="next"> ❯</h3></a> </div>
             <!-- <summary>The title of this page lorem</summary> -->
             
  		</section>  		
  		<div class="description">
		      	<h1>Private Resident at The Boltons London</h1>
		      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas quam, totam, animi qui est necessitatibus dolores nesciunt, molestias hic ad ut eaque quaerat, accusantium reprehenderit eveniet! Accusamus, molestiae optio! Repudiandae!</p>
			  <h1>Testimonal</h1>
		      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas quam, totam, animi qui est necessitatibus dolores nesciunt, molestias hic ad ut eaque quaerat, accusantium reprehenderit eveniet! Accusamus, molestiae optio! Repudiandae!</p>
		      
  		</div>

	</div>
 <div class="clearfix"></div>


	<section class="image-container">
	
	  <div class="clientcard">
	  	<img src="img/clients/theboltons01.jpg" alt="">
	  </div>
	  <div class="clientcard">
	  	<img src="img/clients/theboltons02.jpg" alt="">
	  </div>
	  <div class="clientcard">
	  	<img src="img/clients/theboltons03.jpg" alt="">
	  </div>
	
	   <div class="clientcard">
	  	<img src="img/clients/theboltons04.jpg" alt="">
	  </div>
	  <div class="clientcard">
	  	<img src="img/clients/theboltons05.jpg" alt="">
	  </div>
	  <div class="clientcard">
	  	<img src="img/clients/theboltons06.jpg" alt="">
	  </div>
	
	</section>

   <div class="clearfix"></div>

        
	<?php include('includes/footer.php') ?>
	
</div>
</body>

<script src="js/cocoen.js"></script>
    
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
</html>

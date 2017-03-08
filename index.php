<!DOCTYPE html>
<html lang="en">

<head>
	<?php $homepage = 1; include ('includes/meta.php') ?>
	
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

        <div class="wholeheroimagelowtitle">
	        <div class="ie9">
	            <img class="logomobileimage" src="img/logomobile.png" alt="elite logo">
	            <h1 class="logomobiletext">elite chandelier services</h1>
	            <h2 >cleaning and servicing chandeliers since 1910</h2>
	
	            <a href="services.php"><button>Explore Our Services</button></a>
	        </div>
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
</html>

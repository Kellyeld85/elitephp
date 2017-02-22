<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge;" />
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elite Chandelier Services</title>
    <link rel="stylesheet" href="assets/styles.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css">
	<?php include 'easy_contact/inc/config.php'; ?>
	<?php echo '<link href="easy_contact/style/'.$contactTemplate.'.css" rel="stylesheet" type="text/css" /> '; ?>
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

<!DOCTYPE html>
<html lang="en">

<head>
	<?php $contactpage = 1; include ('includes/meta.php') ?>
	
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
	   	<div class="card narrow">
	        <div class="ie9">
	            <?php include 'easy_contactie/inc/form.php'; ?>
	        </div>
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

<!DOCTYPE html>
<html lang="en">


<head>
  <?php $storagepage = 1; include ('includes/meta.php') ?>
  
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
<h1>Secure Storage</h1>
<p>Short-term and long-term storage for high value items is available in our secure facility.</p>
<p>Our capable teams appreciate your concerns in relocating your prized possessions and
your trust in our brand is of paramount importance to us. This is why Elite Chandelier
Services is fully security cleared.</p>
<p> If you’d like to know more about this service or have specific storage requirements, do
give us a call. We’re always happy to help.</p>
</div>
<div class="services-area"> <img class="hidden" src="img/store01.jpg" alt="Secure Storage boxes"></div>

</div>

<div class="services blue">
  <div class="services-area"> <img class="image" src="img/store02.jpg" alt="Chandelier secured and ready for storage"></div>
<div class="services-area">
<ul>
  <li>☑ Careful removal and dismantling of the chandelier</li>
  <li>☑ Safe packaging of the chandelier’s parts and pieces</li>
  <li>☑ Safe and secure facility</li>
  <li>☑ Trained and qualified team</li>
  <li>☑ Long-term and short-term storage</li>
</ul>
</div>
</div>

<div class="clearfix"></div>

<div class="services">


<?php $secure = 1; include('includes/accordion.php') ?>


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

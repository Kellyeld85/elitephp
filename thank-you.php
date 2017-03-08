<!DOCTYPE html>
<html lang="en">


<head>
  <?php $thankyoupage = 1; include ('includes/meta.php') ?>
  
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


    <section class="container">

        <div class="blankspace">
           <h1>Message Sent</h1>
	    <p>Thank you for contacting Elite Chandelier Services, Your message has been sent, We aim to get back to you within the next 24 hours.</p>	                 
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

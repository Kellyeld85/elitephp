<!DOCTYPE html>
<html lang="en">


<head>
  <?php $loadtestingpage = 1; include ('includes/meta.php') ?>
  
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
<h1>Load Testing</h1>
<p>Load testing is performed to determine the optimum strength of the ceiling material
against the weight of the hanging object. This is a requirement in England when installing
or changing the design of the chandelier.</p>
<p>In addition to the weight of the chandelier itself, the weight of the chandelier chain must
be taken into account when doing this test. It is therefore crucial that you enlist the help of
professionals.</p>
<p> A certificate of this test will be given to you on completion and we will advise you on when
you might need to do another test to guarantee the safety of your chandelier.</p>
</div>
<div class="services-area"> <img class="hidden" src="img/loadtesting01.jpg" alt="Load Tested Chandelier"></div>

</div>

<div class="services blue">
  <div class="services-area"> <img class="image" src="img/loadtesting02.jpg" alt="Load Testing Chandelier"></div>
<div class="services-area">
<ul>
  <li>☑ Load safety test performed</li>
  <li>☑ Load safety test certificate</li>
  <li>☑ Cleaning service while load test is performed</li>
  <li>☑ Cleaning materials and equipment</li>
  <li>☑ A team of qualified chandelier operatives</li>
</ul>
</div>
</div>

<div class="clearfix"></div>

<div class="services">


<?php $loadtest = 1; include('includes/accordion.php') ?>


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

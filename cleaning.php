<!DOCTYPE html>
<html lang="en">
<?php include 'easy_contact/inc/config.php'; ?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chandelier Load Testing Service</title>
    <link rel="stylesheet" href="assets/styles.css">
     <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css">
	<?php echo '<link href="easy_contact/style/'.$contactTemplate.'.css" rel="stylesheet" type="text/css" /> '; ?>

	<!-- jQuery Plugin -->
    <script src="js/jquery-1.12.3.min.js"></script>
    <script src="js/animatedModal.min.js"></script>
    <script src="js/flip.min.js"></script>
    <script src="js/customjs.js"></script>
    <script src="js/modernizr.js"></script>
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

<div class="services">
<div class="services-area align">
<h1>Cleaning Services</h1>
<p>Your chandelier hangs there for a reason: To Dazzle.</p>
<p>If the crystal or glass pieces look glazed, have spots on them and no longer reflect light as
they used to, it’s time to get them cleaned.</p>
<p>Note that the frequency of chandelier cleaning depends on certain factors such as its age,
shape, size, height and location.</p>
<p> Whether you require a deep clean or a shallow clean, trust that your prized chandelier will
be handled with care by our team of electricians and technical restorers.</p>
</div>
<div class="services-area"> <img class="hidden" src="img/cleaning01.jpg" alt="Chandeleir Cleaning Service"></div>

</div>

<div class="services blue">
  <div class="services-area"> <img class="image" src="img/cleaning02.jpg" alt="Cleaning Chandelier Service"></div>
<div class="services-area">
<ul>
  <li>☑ Removal of dirt and dust deposits</li>
  <li>☑ Buffing of body, frame and metal pieces</li>
  <li>☑ Replacement of light bulbs</li>
  <li>☑ Cleaning materials and equipment</li>
  <li>☑ On-site service</li>
</ul>
</div>
</div>

<div class="clearfix"></div>

<div class="services">


<?php $cleaning = 1; include('includes/accordion.php') ?>


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

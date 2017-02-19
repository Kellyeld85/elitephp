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
<h1>Secure Storage</h1>
<p>Short-term and long-term storage for high value items is available in our secure facility.</p>
<p>Our capable teams appreciate your concerns in relocating your prized possessions and
your trust in our brand is of paramount importance to us. This is why Elite Chandelier
Services is fully security cleared.</p>
<p> If you’d like to know more about this service or have specific storage requirements, do
give us a call. We’re always happy to help.</p>
</div>
<div class="services-area"> <img class="hidden" src="img/store01.jpg" alt="Secure Storage Service"></div>

</div>

<div class="services blue">
  <div class="services-area"> <img class="image" src="img/store02.jpg" alt="Chandelier Storage Service"></div>
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

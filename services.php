<!DOCTYPE html>
<html lang="en">
<?php include 'easy_contact/inc/config.php'; ?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Services - Elite Chandelier Services</title>
    <link rel="stylesheet" href="assets/styles.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css">
    <?php echo '<link href="easy_contact/style/'.$contactTemplate.'.css" rel="stylesheet" type="text/css" /> '; ?>

    <!-- jQuery Plugin -->
    <script src="js/jquery-1.12.3.min.js"></script>
    <script src="js/animatedModal.min.js"></script>
    <script src="js/customjs.js"></script>
    <script src="js/flip.min.js"></script>
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

    <section class="container">

        <div class="halfheroimagelowtitle">
            <img src="img/services/serviceoverview.png" alt="serviceoverview">
            <summary>Our Expert Services</summary>
        </div>

  <div class="side-image">
    <img class="margin-top" src="img/services/cleaningserviceimg.jpg" alt="Chandelier Cleaning Service">
    <div class="side-image-content">
      <h1>cleaning service</h1>
      <p>If the crystal or glass pieces in your chandelier look cloudy, have spots on them and no
longer reflect light as they used to, it’s time to get them cleaned.
      </p>
      <a href="cleaning.php"><button>more details</button></a>
  </div>
</div>

<div class="side-image">
  <img src="img/services/installserviceimg.png" alt="Chandelier installation Service">
    <div class="side-image-content">
      <h1>installation &amp; removal</h1>
      <p>Whether you are renovating your home, relocating, or in charge of transforming a
commercial property, trust that we can securely dismantle and/or fit your chandelier safely
in its place.
    </p>
      <a href="installation-removal.php"><button>more details</button></a>
  </div>
</div>


<div class="side-image ">
  <img src="img/services/resorerepairserviceimg.png" alt="Chandelier Restore and Repair Service">
    <div class="side-image-content">
      <h1>restore &amp; rewire</h1>
      <p>Bring your chandelier back to its original beauty. If intricate pieces, metal parts and electric
wires are loose, chipped, cracked, twisted, missing or damaged by natural wearing or
environmental forces such as water, humidity or fire, get in touch to find out how we can
help.
    </p>
  <a href="restore-repair.php"><button>more details</button></a>
  </div>
</div>


<div class="side-image">
  <img src="img/services/loadtestserviceimg.jpg" alt="Chandelier Load Testing Service">
    <div class="side-image-content">
      <h1>load testing</h1>
      <p>Load testing is performed to determine the optimum strength of the ceiling material
against the weight of the hanging object. This is a safety requirement in England and
could be done easily the help of professionals.
      </p>
        <a href="load-testing.php"><button>more details</button></a>
  </div>
</div>


<div class="side-image ">
  <img src="img/services/winchserviceimg.png" alt="Chandelier Winch Testing Service">
    <div class="side-image-content">
      <h1>winch testing</h1>
      <p>A winch system is a technique designed to make high-elevation objects become easily
accessible. This system allows the chandelier to be lowered and lifted by a wire rope,
eliminating the need for using hazardous ladders and expensive scaffolding.
    </p>
    <a href="winch-testing.php"><button>more details</button></a>
  </div>
</div>

<div class="side-image flex">
  <img src="img/services/storageserviceimg.png" alt="Chandelier Secure Storage Service">
    <div class="side-image-content">
      <h1>secure storage</h1>
      <p>Short-term and long-term storage for high value items is available in our secure facility. Do
speak to us if you’d like to know more about this service or have specific storage
requirements.
    </p>
    <a href="secure-storage.php"><button>more details</button></a>
  </div>

</div>

        </div>

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

</html>

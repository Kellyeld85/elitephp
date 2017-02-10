<?php include 'easy_contact/inc/config.php'; ?>

<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>testing the grid</title>
    <link rel="stylesheet" href="assets/styles.css">
    <?php echo '<link href="easy_contact/style/'.$contactTemplate.'.css" rel="stylesheet" type="text/css" /> '; ?>

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


    <section class="container">
	    <div class="halfheroimagelowtitle">
          <p>some thing here
        </div>


        <div class="halfheroimagelowtitle">
          <h1>Message Sent</h1>
	    <p>Thank you for contacting Elite Chandelier Services, Your message has been sent, We am to get back to you with in the next 24 hours.</p>
        </div>


	<div class="other-services">
		<p>Other Services here</p>
    </div>

       <div class="clearfix"></div>
</div>


        <!--<div class="wrapper-for-content-outside-of-footer">
   Uncomment this whole section for a sticky footer. The content of the page should be inside of this .wrapper-for-content-outside-of-footer
</div>-->


<?php include('includes/footer.php') ?>

    </section>

</body>
<!-- jQuery Plugin -->
    <script src="js/jquery-1.12.3.min.js"></script>
    <script src="js/animatedModal.min.js"></script>
    <script src="js/customjs.js"></script>
    <script src="js/flip.min.js"></script>


</html>

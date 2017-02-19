

<!DOCTYPE html>
<html lang="en">
<?php include 'easy_contact/inc/config.php'; ?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our History Est.1910 - Elite Chandelier Services</title>
    <link rel="stylesheet" href="assets/styles.css">
    <?php echo '<link href="easy_contact/style/'.$contactTemplate.'.css" rel="stylesheet" type="text/css" /> '; ?>
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
          <img src="img/about.png" alt="">
            <summary>Our Historical Story</summary>
        </div>


<div class="aboutus">
		<div class="historycontent">
      <h1>chandelier specialists for over 100 years</h1>
	                  <p>Elite Chandelier Services has been providing a professional chandelier cleaning service since 1910 and are proud to be one of the longest established companies of chandelier, brass cleaners, and restorers in the world. </p>

        </div>

        <div class="clearfix"></div>

		<div class="line"></div>

				<div class="timeline">
				  <ul>
				    <li>
				      <div>
                <time>1910</time>
					    <img src="img/1910_image.jpg" alt="1910 image">

						<h2>In the beginning...</h2>
				        <p>My great grandfather (Albert Ernest Nelson) worked in a glass factory in East Belfast, He gave his son (My grandad; James William Nelson) the idea of going to stately homes to clean the chandeliers. </p>
                <p>So he did and the company Elite Crystal Services was born.<p>
				      </div>
				    </li>

				    <li>
				      <div>
                <time>1933</time>
					    <img src="img/1933_image.png" alt="1933_image">
              <h2>Growth of our business..</h2>
				        <p>During this time Elite Crystal Services went from strength to strength employing more people gaining more clients than ever. We saw unprecedented growth as our small business was suddenly in high demand.</p>
				      </div>
				    </li>

				     <li>
				      <div>
                <time>1957</time>
					    <img src="img/1957_image.jpg" alt="1957 image">
              <h2>Inspired by my grandfathers stories</h2>
				        <p>When I was 5 my grandad would tell me the stories of visiting the stately homes and grand manor houses all over Ireland. </p>
                <p>This inspired me to want to learn the trade to continue our chandelier cleaning company.</p>
				      </div>
				    </li>

				     <li>
				      <div>
                <time>1966</time>
					     <img src="img/1966_outside-theatre.jpg" alt="1966 outside-theatre">
               <h2>Learning a trade at a young age</h2>
				        <p>At 14 I went on my first chandelier cleaning job at a large country manor house, this only went to increase my enthusiasm for our chandelier business. </p>
                <p>The sight of that large manor house was enough to keep me inspired for a lifetime.</p>
				      </div>
				    </li>

				     <li>
				      <div>
                <time>1968</time>
					    <img src="img/1968_image.png" alt="1968_image">
						<h2>Renaming the Company</h2>
				        <p>I took over the family business Elite Crystal Services and decided to rebrand giving the company a more descriptive name; Elite Chandelier Services. </div>
				    </li>

				     <li>
				      <div>
                <time>1973</time>
					    <img src="img/1973_image.jpg" alt="1973_image">
                 <h2>now in London</h2>
				        <p>On the 26th September I brought Elite to London where with all our chandelier knowledge and experience, expanded our services to load testing, installation, winch systems and restoration.</p>
				      </div>
				    </li>

				     <li>
				      <div>
					    <time>1979</time>
					    <img src="img/1979_image.jpg" alt="1979 image">
              <h2>Gaining Life Long Contracts</h2>
				        <p>One of the many contracts is the Fortnum and Mason in Piccadilly; all chandeliers were cleaned and restored throughout the five floors to this day.</p>
				      </div>
				    </li>

				     <li>
				      <div>
                <time>1986</time>
					    <img src="img/1986_image.jpg" alt="1986_image">
              <h2>Growing and training staff</h2>
				        <p>Our fully trained staff cleaned and restored chandeliers in thousands of private residents, stately homes, Manors, government builds, ships and others</p>
				      </div>
				    </li>

				     <li>
				      <div>
                <time>2016</time>
					    <img src="img/2016_image.png" alt="2016_image">
              <h2>The Rebrand</h2>
				        <p>I rebranded Elite, bringing it into the 21st century and keeping all our history.  </p>
				        <p>With the centuries of past down knowledge we continue to grow and provide the best possible service getting the best results every time. </p>
						</p>
				      </div>
				    </li>

				    <!-- more list items here -->
				  </ul>
				</div>
<div class="clearfix"></div>
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
</html>

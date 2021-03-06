<!DOCTYPE html>
<html lang="en">


<head>
<?php $clientpage = 1; include ('includes/meta.php') ?>
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

    <div class="container ">

        <div class="cards section group">

	        <div class="card1 col span_1_of_3">
		        <a href="banquetinghouse.php">
		          <div class="card-image">
		            <img src="img/clients/box_bg_banquethouse.jpg" alt="Banquet House">
		            <div class="logoover">
		            <img src="img/clients/banquetinghouse-logo.png" alt="Banquet House Logo">
		            <button>find out more</button>
		            </div>
		          </div>
		        </a>

	        </div>

		    <div class="card1 col span_1_of_3">
			    <a href="heathrow.php">
		          <div class="card-image">
		            <img src="img/clients/box_bg_heathrow.png" alt="Heathrow Terminal">
		            <div class="logoover">
		            <img src="img/clients/heathrow-logo.png" alt="Heathrow Logo">
		            <button>find out more</button>
		            </div>
		          </div>
			    </a>
	        </div>

	        <div class="card1 col span_1_of_3">
		        <a href="harrods.php">
		          <div class="card-image">
		            <img src="img/clients/box_bg_harrods.jpg" alt="Harrods">
		            <div class="logoover">
		            <img src="img/clients/harrods-logo.png" alt="Harrods Logo">
		            <button>find out more</button>
		            </div>
		          </div>
		        </a>
	      </div>
      </div>

    <div class="cards section group">

	    	<div class="card1 col span_1_of_3">
				<a href="privateresidentliverpool.php">
				 <div class="card-image">
		            <img src="img/clients/box_bg_privateresidentliverpool.jpg" alt="Private Resident In Liverpool">
		            <div class="logoover">
		            <img src="img/clients/privateresident-logo.png" alt="Private Resident In Liverpool">
		            <button>find out more</button>
		            </div>
		          </div>
				</a>
	        </div>


	        <div class="card1 col span_1_of_3">
		      <a href="corinthiahotel.php">
		          <div class="card-image">
		            <img src="img/clients/box_bg_corinthia.png" alt="Corinthia Hotel">
		            <div class="logoover">
		            <img src="img/clients/corinthia-logo.png" alt="Corinthia Hotel Logo">
		            <button>find out more</button>
		            </div>
		          </div>
		      </a>
	        </div>


	        <div class="card1 col span_1_of_3">
		        <a href="theroyalparks.php">
		          <div class="card-image">
		            <img src="img/clients/box_bg_regentpark.jpg" alt="Regent Park">
		            <div class="logoover">
		            <img src="img/clients/regentpark-logo.png" alt="Regent Park Logo">
		            <button>find out more</button>
		            </div>
		          </div>
		        </a>
	      </div>
      </div>

	      <div class="cards section group">

	        <div class="card1 col span_1_of_3">
		        <a href="westfieldlondon.php">
		          <div class="card-image">
		            <img src="img/clients/box_bg_westfield.jpg" alt="Heathrow Terminal">
		            <div class="logoover">
		            <img src="img/clients/westfield-logo.png" alt="Heathrow Logo">
		            <button>find out more</button>
		            </div>
		          </div>
		        </a>
	        </div>

	        <div class="card1 col span_1_of_3">
		        <a href="theboltons.php">
		          <div class="card-image">
		            <img src="img/clients/box_bg_boltons.png" alt="The Boltons London">
		            <div class="logoover">
		            <img src="img/clients/boltons-logo.png" alt="The Boltons London logo">
		            <button>find out more</button>
		            </div>
		          </div>
		        </a>
	        </div>

	        <div class="card1 col span_1_of_3">
		        <a href="privateresident.php">
		          <div class="card-image">
		            <img src="img/clients/box_bg_privateresident.jpg" alt="Private Resident">
		            <div class="logoover">
		            <img src="img/clients/privateresident-logo.png" alt="Private Resident">
		            <button>find out more</button>
		            </div>
		          </div>
		        </a>
	      </div>
      </div>

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
</html>



<!DOCTYPE html>
<html lang="en">


<head>
  <?php $privacypage = 1; include ('includes/meta.php') ?>
  
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
	    
	    <div class="privacy">

         <h2><strong>Privacy Policy</strong></h2>
    <p>This Privacy Policy governs the manner in which Elite Chandelier Services collects, uses, maintains and discloses information collected from users (each, a &quot;User&quot;) of the www.elitechandelier.com website (&quot;Site&quot;). This privacy policy applies to the Site and all products and services offered by Elite Chandelier Services.</p>
    <p><strong>Personal identification information</strong></p>
    <p>We may collect personal identification information from Users in a variety of ways, including, but not limited to, when Users visit our site, fill out a form, and in connection with other activities, services, features or resources we make available on our Site.. Users may visit our Site anonymously. We will collect personal identification information from Users only if they voluntarily submit such information to us. Users can always refuse to supply personally identification information, except that it may prevent them from engaging in certain Site related activities.</p>
    <p><strong>Non-personal identification information</strong></p>
    <p>We may collect non-personal identification information about Users whenever they interact with our Site. Non-personal identification information may include the browser name, the type of computer and technical information about Users means of connection to our Site, such as the operating system and the Internet service providers utilized and other similar information.</p>
    <p><strong>Web browser cookies</strong></p>
    <p>Our Site may use &quot;cookies&quot; to enhance User experience. User's web browser places cookies on their hard drive for record-keeping purposes and sometimes to track information about them. User may choose to set their web browser to refuse cookies, or to alert you when cookies are being sent. If they do so, note that some parts of the Site may not function properly.</p>
    <p><strong>How we use collected information</strong></p>
    <p>Elite Chandelier Services may collect and use Users personal information for the following purposes:</p>
    <p>- To improve customer service<br />
      Information you provide helps us respond to your customer service requests and support needs more efficiently.<br />
      - To personalize user experience<br />
      We may use information in the aggregate to understand how our Users as a group use the services and resources provided on our Site.<br />
      - To improve our Site<br />
      We may use feedback you provide to improve our products and services.<br />
      - To send periodic emails<br />
      We may use the email address to respond to their inquiries, questions, and/or other requests. </p>
    <p><strong>How we protect your information</strong></p>
    <p>We adopt appropriate data collection, storage and processing practices and security measures to protect against unauthorized access, alteration, disclosure or destruction of your personal information, username, password, transaction information and data stored on our Site.</p>
    <p><strong>Sharing your personal information</strong></p>
    <p>We do not sell, trade, or rent Users personal identification information to others. We may share generic aggregated demographic information not linked to any personal identification information regarding visitors and users with our business partners, trusted affiliates and advertisers for the purposes outlined above.</p>
    <p><strong>Compliance with children's online privacy protection act</strong></p>
    <p>Protecting the privacy of the very young is especially important. For that reason, we never collect or maintain information at our Site from those we actually know are under 13, and no part of our website is structured to attract anyone under 13.</p>
    <p><strong>Changes to this privacy policy</strong></p>
    <p>Elite Chandelier Services has the discretion to update this privacy policy at any time. When we do, we will revise the updated date at the bottom of this page. We encourage Users to frequently check this page for any changes to stay informed about how we are helping to protect the personal information we collect. You acknowledge and agree that it is your responsibility to review this privacy policy periodically and become aware of modifications.</p>
    <p><strong>Your acceptance of these terms</strong></p>
    <p>By using this Site, you signify your acceptance of this policy. If you do not agree to this policy, please do not use our Site. Your continued use of the Site following the posting of changes to this policy will be deemed your acceptance of those changes.</p>
    <p><strong>Contacting us</strong></p>
    <p>If you have any questions about this Privacy Policy, the practices of this site, or your dealings with this site, please contact us at:</p>
    <p><br />
      Elite Chandelier Services<br />
      www.elitechandelier.com<br />
      Unit 14<br />
      Palm Trees<br />
      Fourth Avenue<br />
      Eastchurch<br />
      Kent<br />
      ME12 4EW <br />
      0208 442 9119<br />
      info@elitechandelier.com</p>
    <p>This document was last updated on June 03, 2014</p>
    <p>Privacy policy created by http://www.generateprivacypolicy.com</p>
    
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

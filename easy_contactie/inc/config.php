<?php
/*******************************************************************
* Copyright 2015 Codeadik All rights reserved.
* Item: Easy PHP Contact Form Script
******************************************************************/

	include dirname(__FILE__) . '/class/EasyContact.class.php';


	/* ======  SETTINGS FOR CONTACT FORM ===== */

	/* Put your email here.  Ex: yoursiteemail@domain.com */
	$yourEmail = 'kelly@kellyswebdesign.co.uk';

	$contactTemplate = 'elitecontact';

	$autoResponder = true;

	$defaultSubject = 'Elite Chandelier Services';


	/* =====  Redirection Configuration after Successful Submission - (Uses Javascript) ===== */
	//If $enableRedirection is true, it redirects to specific URL specify in $redirectToURL.
	//If $enableRedirection is false, it will display ($successMessage) on the same page of contact form.
	$enableRedirection = true;

	$redirectToURL = 'http://www.elitechandelier.com/thank-you.php';

	$successMessage = 'Thank you, your message has been sent';




	/* =====  Error Message Configuration  ===== */
	$emptyField = 'This field is required';

	$invalidEmail  = 'Invalid email address format!';

	$invalidCaptcha = 'Please enter the correct captcha code!';

	$maxAllowedCharacter = 'Maximum allowed character is ';

	$invalidFileExtension = 'file extension is not allowed';

	$maxAllowedFileSize = 'The file size exceeds more than ';

	$invalidPhoneNumber = 'Invalid phone number, only accepts digits and phone characters';




	/* Settings for SMTP Authentication - See Documentation for more Details*/
	/* Set to true if you want SMTP Authentication for sending email.
	/* Set to false if you want to use the default PHP mail() for sending email */
	$smtpEnable = false;

	/* If you enable the SMTP authentication, you must configure the data below */
	$smtpServer = 'server.mailexample.com';
	$smtpPort = 465;
	$smtpUsername = 'admin@codeadik.com';
	$smtpPassword = 'PaSSwOrdHere';
	$smtpEncryption = 'ssl';
	/* End of SMTP Authentication configuration */







	/* =====  Our Easy PHP Contact Form class  ===== */
	$easyForm = new EasyContact;

	/* =====  Customize your form below. See the documentation included  ===== */
	/* =====  Add many fields as you want  ===== */
	/* =====  They are displayed according to their arrangement here  ===== */



	$easyForm->createTextBox('Name', 'Full Name', 'Name', true, 70 );
	$easyForm->createEmail('Email', 'Email', 70);

	$easyForm->createPhone('Tel', 'Tel. Number', false, 20);

	//byte size conversion: 1000 bytes = 1kb, 1000000 bytes = 1mb, 1000000000 = 1gb
	$easyForm->createFileUpload('imgfile', 'Upload File', false, 1500000, array('png', 'jpg', 'jpeg', 'gif') );
	$easyForm->showFileUploadDescription('imgfile', 'Accepted Extension: png, jpg, jpeg, gif and up to 1.5mb');



	/* END OF CREATING FIELDS */



	/* =====  Our Easy PHP Contact Form class  ===== */
	$easyForm2 = new EasyContact;

	/* =====  Customize your form below. See the documentation included  ===== */
	/* =====  Add many fields as you want  ===== */
	/* =====  They are displayed according to their arrangement here  ===== */


	$easyForm2->createTextArea('Message', 'Message', true, 5000);
	$easyForm2->createCaptcha('Enter Captcha Code', 'image');


	/* END OF CREATING FIELDS */










	/* Note: Don't change the configuration below */
	session_start();
	$validFormDisplay = true;
	include dirname(__FILE__) . '/class/class.phpmailer.php';
	$phpMailer = new PHPMailer();
	if ($smtpEnable)
		$phpMailer->isSMTP();
	$phpMailer->Host = $smtpServer;
	$phpMailer->Port = $smtpPort;
	$phpMailer->SMTPSecure = $smtpEncryption;
	$phpMailer->SMTPAuth = true;
	$phpMailer->Username = $smtpUsername;
	$phpMailer->Password = $smtpPassword;
	$phpMailer->isHTML(true);
	$phpMailer->CharSet = 'UTF-8';

	$formEnctype = '';
	if ($easyForm->hasFileUpload)
		$formEnctype = 'enctype="multipart/form-data"';

	include dirname(__FILE__) . '/autoresponder.php';
	include dirname(__FILE__) . '/process.php';
?>

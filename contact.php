<?php

//If a user has submitted the form, process this block of code.
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	
	//trim function trims whitespace, hard returns, etc off of variables.
	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$message = trim($_POST['message']);
	
	//form validation
	//Email Header Injection Exploit code snippet provided courtesy- nyphp.org/phundamentals/8_Preventing-Email-Header-Injection
	foreach ($_POST as $value ) {
		if ( stripos($value, 'Content-Type:') !== FALSE) {
			echo "There was a problem with the information you entered.";
			exit;
		}	
	}
	//thwarting malicious comments attack - SPAM HONEYPOT technique
	if ($_POST['address'] != "") {
		echo "Your form submission has an error.";
		exit;
	}
	if ($name == "") {
		//if name is blank redirect back to contact form with error message
		header("Location: contact.php?namefield=invalid");
		exit();
	}
	if ($email == "" || !filter_var($email, FILTER_VALIDATE_EMAIL))
	{
		//if email address is not valid or blank redirect back to contact form with error message
		header("Location: contact.php?emailfield=invalid");
		exit();	
		
	}
	$email_body = "";
	// used newline character for formatting in plain text emails.
	$email_body = $email_body . "Name: " . $name . "<br />";
	$email_body = $email_body . "Email: " . $email . "<br />";
	$email_body = $email_body . "Message: " . $message . "<br />";
	echo $email_body;
	
	// Send Email - using third-party library PHPMailer - http://code.google.com/a/apache-extras.org/p/phpmailer/
	require 'phpmailer/PHPMailerAutoload.php';

	//Create a new PHPMailer instance
	$mail = new PHPMailer();
	//Set who the message is to be sent from
	$mail->setFrom($email, $name);
	//Set who the message is to be sent to
	$mail->addAddress('superdesigngirl@mac.com', 'Katherine Hambley');
	//Set the subject line
	$mail->Subject = 'My MiniFig Store Form Submission | '. $name;
	//Read an HTML message body from an external file, convert referenced images to embedded,
	//convert HTML into a basic plain-text alternative body
	$mail->msgHTML($email_body);
	//Replace the plain text body with one created manually
	//$mail->AltBody = 'This is a plain-text message body';
	//Attach an image file
	//$mail->addAttachment('images/phpmailer_mini.png');
	
	//send the message, check for errors
	if (!$mail->send()) {
		echo "Mailer Error: " . $mail->ErrorInfo;
		exit;
	}
	// We need to do a redirect after we send the email along with a query string "status" variable
	header("Location: contact.php?status=confirm");
	exit;
}
?>
<?php 
$pageTitle = "Contact Me";
$section = "contact";
include('header.php'); ?>

<div class="section page">
<div class="wrapper">
	<h1>Contact Me</h1>
  <?php 
		// check status of form submission to determine if the form is displayed or the thank you message. 
		if (isset($_GET['status']) && $_GET['status'] == "confirm") { ?>
    	<!--If status equals confirm then display thank you message-->
			<p>Thanks for the message! I&rsquo;ll be in touch shortly.</p>
			<?php } else { ?>
  					<p>I&rsquo;d love to hear from you!<br />Fill out the form below to send me an email!</p>
  
  <form method="POST" action="contact.php">
  <table>
  <!-- Setting label "for" attribute important for accessibility screen readers & autocomplete  -->
  		<tr> <!--Table Row-->
        <th> <!--Table Row Header-->
          <label for="name">Name: </label>
        </th>
        <td> <!--Table Row Data-->
        	<input type="text" name="name" id="name" value="<?php if(isset($name)) { echo $name; } ?>" />
            <?php if (isset($_GET['namefield']) && $_GET['namefield'] == "invalid") { ?>
            	<span style="color: red;">Your name is required.</span>
            <?php } ?>
        </td>
      </tr>
      <tr> <!--Table Row-->
        <th> <!--Table Row Header-->
          <label for="email">Email: </label>
        </th>
        <td> <!--Table Row Data-->
        	<input type="text" name="email" id="email" value="<?php if(isset($email)) { echo $email; } ?>" />
            <?php if (isset($_GET['emailfield']) && $_GET['emailfield'] == "invalid") { ?>
            	<span style="color: red;">A valid email address is required.</span
            ><?php } ?>
        </td>
      </tr>
      <tr> <!--Table Row-->
        <th> <!--Table Row Header-->
          <label for="message">Message: </label>
        </th>
        <td> <!--Table Row Data-->
        	<textarea name="message" id="message"><?php if(isset($message)) { echo $message; } ?></textarea>
        </td>
      </tr>
      <tr style="display: none;"> <!--Table Row-->
        <th> <!--Table Row Header-->
          <label for="address">Address: </label>
        </th>
        <td> <!--Table Row Data-->
        	<input type="text" name="address" id="address" />
            <p>Humans: Leave this field blank.</p>
        </td>
      </tr>  
  </table>
  <input type="submit" value="Send" />
  </form>
</div>
</div>
<?php } ?>
<?php include('footer.php'); ?>
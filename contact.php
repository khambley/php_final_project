<?php

//If a user has submitted the form, process this block of code.
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$email_body = "";
	
	// used newline character for formatting in plain text emails.
	$email_body = $email_body . "Name: " . $name . "\n";
	$email_body = $email_body . "Email: " . $email . "\n";
	$email_body = $email_body . "Message: " . $message . "\n";
	echo $email_body;
	
	// TODO: Send Email
	
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
        	<input type="text" name="name" id="name" />
        </td>
      </tr>
      <tr> <!--Table Row-->
        <th> <!--Table Row Header-->
          <label for="email">Email: </label>
        </th>
        <td> <!--Table Row Data-->
        	<input type="text" name="email" id="email" />
        </td>
      </tr>
      <tr> <!--Table Row-->
        <th> <!--Table Row Header-->
          <label for="message">Message: </label>
        </th>
        <td> <!--Table Row Data-->
        	<textarea name="message" id="message"></textarea>
        </td>
      </tr>   
  </table>
  <input type="submit" value="Send" />
  </form>
</div>
</div>
<?php } ?>
<?php include('footer.php'); ?>

<?php
	
	// Contact subject
	$subject ="website email"; 

	// Details
	$message="$messege";


	// Mail of sender
	$mail_from="$email"; 

	// From 
	$header="from: $name <$mail_from>";

	// Enter your email address
	$to ='luamfessehazion@gmail.com';
	$send_contact=mail($to,$subject,$message,$header);

	// Check, if message sent to your email 
	// display message "We've recived your information"
	if($send_contact){
		$success = "I'll get back to you shortly!";
		echo "<script type='text/javascript'>alert('$success');</script>";
		// header('Location: http://luamyemane.com');
	}
	else {
		echo "ERROR";
	}
?>
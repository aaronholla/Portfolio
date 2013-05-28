<?php
//start the session
session_start();

//////////////////////////////////////////////////////
// Begin variables to be written out by RapidWeaver //
//////////////////////////////////////////////////////

//set the return URL
$return_url = "../contact.php";

//set the users email address
$email = "RoboSharks1612@gmail.com";

//array of fields in form. (In the format "field_name" => "field_label")
$form_fields = array(
"element0" => 'Your Name:',
"element1" => 'Your Email:',
"element2" => 'Subject:',
"element3" => 'Message:',
"element4" => 'Please check before sending:'
);

$required_fields = array("element0", "element1", "element2", "element3", "element4");

$mail_from_name 	= "element0";
$mail_from_email 	= "element1";
$mail_subject 		= "element2";

//uses the email address defined above as the from email.
$send_from_users_email = false;

//sets the PHP setting 'sendmail_from' for use on a windows server.
$windows_server = false;

// Set up the error and success messages.
$message_success = 'Thank you, your email has been sent.';
$message_unset_fields = "Fields marked with * are required.";

////////////////////////////////////////////////////
// End variables to be written out by RapidWeaver //
////////////////////////////////////////////////////

// Check key variable from form against session key.
if ( ! isset($_POST['form_token']) || $_POST['form_token'] !== $_SESSION['security_token']) {
	// Set a fixed error message if the keys don't match.
	$_SESSION['formMessage'] = "We cannot verify that you are trying to send an email from this form. Please try again.";
	// If they don't match, send back to form.
	header("Location: ".$return_url);
	exit;
}

// SPAM checking. If the "comment" form field has been filled out, 
// send back to form asking to remove content and exit the script.
if ($_POST['comment']) {
	$_SESSION['formMessage'] = "Please remove content from the last textarea before submitting the form again. This is to protect against SPAM abuse.";
	header("Location: ".$return_url);
	exit;
}

/////////////////////////
// PROCESS FORM FIELDS //
/////////////////////////
foreach($_POST['form'] as $key => $value) {
	$_SESSION['form'][$key] = $value;
}

///////////////////////////
// CHECK REQUIRED FIELDS //
///////////////////////////

// If any of the required fields are empty
if (check_required_fields($required_fields) === false) {
	
	//set the error message
	$_SESSION['formMessage'] = $message_unset_fields;
	
	//then send back to form
	header("Location: ".$return_url);
	
	//and exit the script
	exit;
	
	//else they have filled in all required fields
} else {
	
	///////////////////////////////////
	// ALL IS OK, SETUP GLOBAL VAR'S //
	///////////////////////////////////
	
	//check email address
	if ( ! check_email($email)) unset($email);
	
	//set mime boundry. Needed to send the email. Mixed seperates text from attachments. 
	$mixed_mime_boundary = "rms-mix-x".md5(mt_rand())."x";
	//alt seperates html from plain text.
	$alt_mime_boundary = "rms-alt-x".md5(mt_rand())."x";
	
	//set the from address if user supplied email is invalid use form owners.
	$submitted_email = '';
	if (isset($_SESSION['form'][$mail_from_email])) {
		$submitted_email = $_SESSION['form'][$mail_from_email];
	}
	
	if (check_email($submitted_email) && $send_from_users_email === false) {
		$from = $reply_to = $_SESSION['form'][$mail_from_name]."<".$submitted_email.">";
	} else {
		$from = "<".$email.">";
		$reply_to = check_email($submitted_email) ? "<".$submitted_email.">" : $from;
	}
	
	//set the email subject
	$subject = '';
	if (isset($_SESSION['form'][$mail_subject])) {
		$subject = $_SESSION['form'][$mail_subject];
	}
	
	//Email headers
	$headers = "From: $from\n";
	$headers .= "Reply-to: $reply_to\n";
	$headers .= "MIME-Version: 1.0\n"."Content-Type: multipart/mixed; ";
	$headers .= "boundary=$mixed_mime_boundary";
	
	
	
	////////////////////////////
	// CONSTRUCT HTML CONTENT //
	////////////////////////////
	
	//Construct HTML email content, looping through each form element
	
	//Note: When you get to a file attachment you need to use $_FILES['form_element']['name']
	//This will just output the name of the file. The files will actually be attached at the end of the message.
	
	//Set a variable for the message content
	$html_content = "<html>\n<head>\n<title>".safe_escape_string($subject)."</title>\n</head>\n<body>\n<p>\n";
	
	////////////////////////////
	// CONSTRUCT TEXT CONTENT //
	////////////////////////////
	
	//Construct a plain text version of the email.
	$text_content = '';
	
	//build a message from the reply for both HTML and text in one loop.
	foreach($form_fields as $field => $label) {
		$html_content .= '<b>'.safe_escape_string($label).'</b> ';
		$text_content .= $label." ";
		if (isset($_FILES[$field])) {
			$string = (isset($_FILES[$field]['name'])) ? safe_escape_string($_FILES[$field]['name']) : "";
		} else {
			$string = (isset($_SESSION['form'][$field])) ? safe_escape_string($_SESSION['form'][$field]) : "";
		}
		$html_content .= $string."<br /><br />\n";
		$text_content .= $string."\n\n";
	}
	
	//close the HTML content.
	$html_content .= "</p>\n</body>\n</html>";
	
	/////////////////////////////
	// CONSTRUCT EMAIL MESSAGE //
	/////////////////////////////
	
	//Now we combine both HTML and plain text version of the email into one.
	//Creating the message body which contains a Plain text version and an HTML version, users email client will decide which version to display
	$message = 	"\n" . "--$mixed_mime_boundary\n" . 
	"Content-Type: multipart/alternative; boundary=$alt_mime_boundary\n\n" .
	"--$alt_mime_boundary\n" .
	"Content-Type: text/plain; charset=UTF-8; format=flowed\n" . 
	"Content-Transfer-Encoding: Quoted-printable\n\n" .
	"$text_content\n\n" . 
	"--$alt_mime_boundary\n" . 
	"Content-Type: text/html; charset=UTF-8\n" . 
	"Content-Transfer-Encoding: Quoted-printable\n\n" . 
	"$html_content\n\n" .
	"--$alt_mime_boundary--\n\n" .
	"\n\n--$mixed_mime_boundary";	
	
	
	//////////////////////
	// FILE ATTACHMENTS //
	//////////////////////
	
	//IMPORTANT: Only add this if an attachment is added to the form.
	
	//Loop through the $_FILES global array and add each attachment to the form.
	if (isset($_FILES)) {
		foreach ($_FILES as $attachment) {
			//if the file exists
			if (file_exists($attachment['tmp_name'])){
				//if the file has been uploaded
				if (is_uploaded_file($attachment['tmp_name'])){
					$file = fopen($attachment['tmp_name'],'rb');
					$data = fread($file,filesize($attachment['tmp_name']));
					fclose($file);
					$data = chunk_split(base64_encode($data));
					
					$message .= "\nContent-Type: application/octet-stream; " . " name=".$attachment['name']."\n"."Content-Disposition: attachment; "." filename=".$attachment['name']."\n"."Content-Transfer-Encoding: base64\n\n".$data."\n\n--$mixed_mime_boundary";
				} else { //else there was an error uploading the file
					$_SESSION['formMessage'] = "There has been an error uploading the attachments, please try again.\n"; //set error message
					header("Location: ".$return_url); //send back to form
					exit; //exit script
				}
			} 
		}
	}
	
	
	//finish off message
	$message .= "--";
	
	//for windows users.
	if ($windows_server == true) {
		ini_set('sendmail_from', $email);
	}
	
	//if the mail sending works
	if (@mail($email, $subject, $message, $headers)) {
		//set the success message
		$_SESSION["formMessage"] = $message_success;
		unset($_SESSION['form']);
	} else { //if mail sending fails
		$_SESSION["formMessage"] = "I'm sorry, there seems to have been an error trying to send your email. Please try again.";
	}
	
	//redirect to the form
	header("Location: " . $return_url);
}

//////////////////////
// GLOBAL FUNCTIONS //
//////////////////////	

// Function to escape data inputted from users. This is to protect against embedding
// of malicious code being inserted into the HTML email.
// Sample code: safe_escape_string($_POST['form_field'])
function safe_escape_string($string) {
	return htmlspecialchars($string, ENT_QUOTES);
}

// Function to check the validity of email address.
function check_email($email) {
	return (bool) preg_match('/^([a-z0-9_]|\-|\.)+@(([a-z0-9_]|\-)+\.)+[a-z]{2,4}$/i', $email);
}

// Function to check the required fields are filled in.
function check_required_fields($required_fields) {
	foreach($required_fields as $field) {
		if (( ! isset($_SESSION['form'][$field]) || empty($_SESSION['form'][$field])) && 
			( ! isset($_FILES[$field]) || empty($_FILES[$field]['name']))) {
			return false;
		}
	}
	return true;
}

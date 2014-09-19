<?php
    
	
	$fname_lnameErr = $mailErr = "";
	$fname_lname = $mail = $subject = $message =  "";
	
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
			if (empty($_POST["fname_lname"])) {
			    $fname_lnameErr = "Ein name Wird benötigt";
			  } else {
			    $fname_lname = test_input($_POST["fname_lname"]);
			    // check if name only contains letters and whitespace
			    if (!preg_match("/^[a-zA-Z ]*$/",$fname_lname)) {
			      $fname_lnameErr = "Nur Buchstaben und Leerzeichen Erlaubt"; 
		    }
	  }
		
		if (empty($_POST["mail"])) {
		    $mailErr = "Emailadresse wird Benötigt";
		  } else {
		    $mail = test_input($_POST["mail"]);
		    // check if e-mail address is well-formed
		    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
		      $mailErr = "Ungültige E-Mailadresse"; 
		    }
		  }
		
		$subject = test_input($_POST["subject"]);
		$message = test_input($_POST["message"]);
		
		if ($fname_lnameErr =="" && $mailErr == "") {
			
			$header = 'From: webmaster@hausaufgabe.de' . "\r\n" .
					    'Reply-To: webmaster@hausaufgabe.de' . "\r\n" .
					    'X-Mailer: PHP/' . phpversion();
			
			
			echo $mail."  ".$subject."  ".$message;
			$erfolg=mail($mail, $subject, wordwrap("Hallo".$fname_lname."hier deine Nachricht:".$message, 70),$header);
			echo "Versendet:_".$erfolg;
		}else{
		echo "FEHLER---".$fname_lnameErr."---".$mailErr."---";}
		
		
		
		header("Location: site_hw.php"."?"."failname={$fname_lnameErr}"."&"."mailfail={$mailErr}"."&"."sent={$erfolg}"."#kontakt");
		}
		function test_input($data) {
		   $data = trim($data);
		   $data = stripslashes($data);
		   $data = htmlspecialchars($data);
	   	return $data;
		}
		
		
		
		
	
?>
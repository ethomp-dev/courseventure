 <?php									//$user_name -> firstName, lastName?
    require("phpmailer/class.phpmailer.php");
    $mail = new PHPMailer();
	

		$user_email = filter_input(INPUT_POST, 'user_email');
		$user_name = filter_input(INPUT_POST, 'user_name');
		$message = filter_input(INPUT_POST, 'message');

    // ---------- SMTP Stuff ---------------------------------------
      $mail->SMTPDebug  = 2;                     		// enables SMTP debug information (for testing)
      $mail->SMTPAuth   = true;                  		// enable SMTP authentication
      $mail->SMTPSecure = "ssl";               		// sets the prefix to the servier
      $mail->Host       = "smtp.gmail.com";      	// sets GMAIL as the SMTP server
      $mail->Port       = 465;   							// set the SMTP port for the GMAIL server
      $mail->SMTPKeepAlive = true;
      $mail->Mailer = "smtp";
      $mail->Username   = "cventure87@gmail.com";  		// Gmail username technically for sending email
      $mail->Password   = "courseventure";          				// Gmail password for above account
      $mail->AddAddress("cventure87@gmail.com", "Course Venture administrator");			//NOTE: You will need to turn on access for less secure apps
      $mail->SetFrom($user_email, $user_name);
      $mail->Subject = 'Course Venture user ' . $user_name . ' requests help.';
      $mail->AltBody = 'To view the message, please use an HTML compatible email viewer.'; 	// optional - MsgHTML will create an alternate automatically
      $mail->MsgHTML($message);
      $mail->Send();
	  header("Location: helpSubmit.php");
    ?>
<!--$user_name=guy
$user_email=tpprufer@gmail.com-->
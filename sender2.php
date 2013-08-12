<html>
<head>
	<title>Sender</title>
</head>
<body>

	<?php 
	if(isset($_REQUEST['submit'])){

			       require_once "Mail.php";

        $from = "<mail.supremecluster.com ";
        $to = $_REQUEST['email'];
        $subject = "Email Verification";
        $body = "Thank you for your registration. \n Please Click on the link to verify your email \n  http://192.168.1.103/exam/verify.php?email=$email&vercode=$vercode";

        $host = "mail.freehostia.com";
        $port = "25";
        $username = "jeremejazz@sstlaptops.co.cc";
        $password = "jereme";

        $headers = array ('From' => $from,
          'To' => $to,
          'Subject' => $subject);
        $smtp = Mail::factory('smtp',
          array ('host' => $host,
            'port' => $port,
            'auth' => true,
            'username' => $username,
            'password' => $password));

        $mail = $smtp->send($to, $headers, $body);

        if (PEAR::isError($mail)) {
          echo("<p>" . $mail->getMessage() . "</p>");
         } else {
          echo("<p>Message successfully sent!</p>");
         }

			}
		
		echo "registration complete for $email. You will be sent a verication on your email ";
		mysql_close($con);
			}
	?>
	<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	Message: <input type = "text" name = "message" />
	    Recipient: <INPUT TYPE="TEXT" NAME="email"><BR> 
      Subject: <INPUT TYPE="TEXT" NAME="subject"><BR> 
      Content: <TEXTAREA NAME="content"></TEXTAREA> 
	<input type = "submit" name = "submit" value = "submit" />
	
	
	</form>
</body>
</html>
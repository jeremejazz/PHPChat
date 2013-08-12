<html>
<head>
	<title>Sender</title>
</head>
<body>

	<?php 
	if(isset($_REQUEST['submit'])){

		require_once 'lib/swift_required.php';

//Create the Transport
$transport = Swift_SmtpTransport::newInstance('ssl://smtp.gmail.com', 465)
  ->setUsername('ojtpupt2010@gmail.com')
  ->setPassword('50ftr1663r')
  ;

/*
You could alternatively use a different transport such as Sendmail or Mail:

//Sendmail
$transport = Swift_SendmailTransport::newInstance('/usr/sbin/sendmail -bs');

//Mail
$transport = Swift_MailTransport::newInstance();
*/

//Create the Mailer using your created Transport
$mailer = Swift_Mailer::newInstance($transport);

//Create a message
$message = Swift_Message::newInstance('Wonderful Subject')
  ->setFrom(array('ojtpupt2010@gmail.com' => 'Jereme'))
  ->setTo(array($_REQUEST['email'], 'other@domain.org' => 'A name'))
  ->setBody('Here is the message itself')
  ;
  
//Send the message
$result = $mailer->send($message);

/*
You can alternatively use batchSend() to send the message

$result = $mailer->batchSend($message);
*/

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
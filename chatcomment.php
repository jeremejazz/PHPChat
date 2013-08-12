<?php
/**
 * @name chatcomment.php
 * @version 1.0
 * @author jermejazz
 * Date Started: August 5, 2010 
 * 
 */
?>
<html>
<head>
	<title>Chatroom Comment</title>
    <link href="meatloaf.ico" rel="icon" type="image/vnd.microsoft.icon" />
	<style>
	body{
	background:url(coffeestain.gif) 90% 90% no-repeat fixed #fff;
	}
	</style>
</head>
<body>
<?php
if(!$_REQUEST['submit']){



?>
<form action = "<?php echo $_SERVER['PHP_SELF'];?>" method = "POST">
<table align = "center" valign = "top" border = "1" width = "450">
<tr>
	<td colspan = "2"><h2 align = "center">Feedback Form</h2>
	This app is still under development. I would like to hear(actually 'read') some of your comments and suggestions to make 
it better.
	</td>
</tr>
	<tr>
	<td width = "16%" align = "right">
	Name: 
	</td>
	<td width = "70%">
	<input type = "text" name = "name" id = "name" size = "20"/>
	</td>
	</tr>
	
	<tr>
		<td width = "16%" align = "right">
		Email:
		</td>
		<td width = "70%">
		<input type = "text" name = "email" id = "email" size = "20"/>
		</td>
	</tr>
		
	<tr>
		<td width = "16%" align = "right">
		Rating:
		</td>
		<td width = "70%">
		
			<select name = "rating" size = "2">
				<option selected = "selected" value = "positive">Positive</option>
				<option value = "negative">Negative</option>
			</select>
		</td>
	</tr>
	<tr>
		<td width = "16%" align = "right">
		Message:
		</td>
		<td width = "70%">
		<textarea name = "comment" id = "comment" cols = "18" rows = "4"></textarea>
		</td>
	</tr>
	<tr >
		<td colspan = "2" align = "center"><input type = "submit" name = "submit" value = "submit"/> &nbsp; <input type = "reset" value = "Reset"/></td>
	</tr>
</table>
</form>
<?php
}else{
	if(!$_REQUEST['name']){ //|| !$_REQUEST['message']){
	echo '<div align = "center" style = "background-color:red; color: yellow;">Incomplete Form Data</div>';
	return;
	}
	$target_file = 'comments.txt';
	$sent = $_REQUEST['name']. " " .$_SERVER['REMOTE_ADDR']. " " . $_REQUEST['email']. " ". $_REQUEST['rating']. " ". $_REQUEST['message'];
	
	$fp = fopen($target_file,'a')
	or die('Could not open chat history');
	fwrite($fp, $sent . "\n")
	or die('unable to recieve message');
	fclose($fp);
	echo "Your Message has been submitted.<br/>";
	?>
	<a href = "chat.php" name = "back">Back to chat</a>
	<?php
}
?>
	
</body>
</html>
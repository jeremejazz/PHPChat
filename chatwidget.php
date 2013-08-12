<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Chatroom v1.0(beta) by jeremejazz</title>
		<meta name = "author" content = "jeremejazz"/>
		<meta name = "keywords" content = "chatroom, chat, jeremejazz, messenger, guestbook, avatar"/>
        
		<link href="meatloaf.ico" rel="icon" type="image/vnd.microsoft.icon"/>
		<script type = "text/javascript" src = "chatscript.js" >
		</script>	
		<style>
		body{
		background-color:rgb(204,255,204);
		}
		</style>
	</head>
	<body>
	<form action = "chatview.php#pagebottom" target = "chatview"  method = "POST" id = "chatform" ><!-- onsubmit = "return validateForm();" > -->
	<table align = "center" border = "2" width = "200">
		<tr valign = "top">
		<td  colspan = "2" align = "center">
	
		<iframe src = "chatview.php" width = "200" height = "240" name = "chatview" onload ="clearMsg();">
		</iframe> 
		<div align = "right"><input type = "submit" value = "Refresh" name = "refresh" onclick = "clearMsg();"/>&nbsp;</div>

		</td>
		</tr>
		<tr valign = "top">
		<!--Text box -->
		<td width = "30" >Username: </td> <td><input type = "text" name = "avatar" id = "avatar" size = "13"/></td>
		</tr>
		<tr valign = "top">
		<td width = "30" >Message: </td> <td><textarea name = "message" id = "message" cols = "10" rows = "4" ></textarea></td>
		
		</tr>
		<tr>
		<td colspan = "2" align = "center">
		<input type = "submit" name = "submitted" value = "send" id = "submitted" onclick = "return validateForm();" accesskey = "g" /> &nbsp; 
		<input type = "reset" value = "reset" id = "reset" accesskey = "r"/>
		<input type = "hidden" value = "<?php echo $_SERVER['REMOTE_ADDR']; //or 'REMOTE_HOST' ?>" name = "sender" />
		</td>
		</tr>
		<tr>
		<td colspan = "2" align = "center">
		<small>	<a  onclick = "popup();" href = "#about" name = "about">About</a> | <a href = "chatcomment.php">Send Feedback</a> | <a href = "#" title = "just kidding :p">Donate</a></small>
		</td>
		</tr>
	</table>
	</form>
	
	</body>
</html>

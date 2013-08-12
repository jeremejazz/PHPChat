<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
		<title>Log in</title>
		<style type = "text/css">
		#loginform{
		
		width:245px;
		height: 100px;
		display:block;
		margin-right:auto;
		margin-left:auto;
		margin-top:56px;
		}
		#logo{
		display:block;
		margin-top:34px;
		margin-right:auto;
		margin-left:auto;
		}
		#submitwrapper{
		padding-top:3px;
		
		}
		.loginform{
		text-align:center;
		
		}
		</style>
</head>
	
<body>
<img src = "logo.png" id = "logo">
<div id = "loginform">
	<form name = "" action="chat.php" method = "post">
	<div class = "loginform"><input type = "text" name = "uname" id="uname" size = "40"/></div>
	<div class = "loginform" id = "submitwrapper"><input type = "image" value = "submit" src="login.png" name = "submit" id = "submit"/></div>
	</form>
</div>
</body>
</html>
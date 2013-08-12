<?php 
if(!isset($_REQUEST['uname'])){

header('Location:index.php');
}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Chatroom v1.0(beta) by jeremejazz</title>
		<meta name = "author" content = "jeremejazz"/>
		<meta name = "keywords" content = "chatroom, chat, jeremejazz, messenger, guestbook, avatar"/>
        
		<link href="meatloaf.ico" rel="icon" type="image/vnd.microsoft.icon"/>
		<script type = "text/javascript" src = "chatscript.js" >
		</script>
		<script type = "text/javascript" src = "jquery.js"></script>
		<script type = "text/javascript" src = "jquery.min.js"></script>
		<style>
		body{
		background:url(coffeestain.gif) 90% 90% no-repeat fixed #fff;
		}
		
		#content{
		position:relative;
		left:130px;
		width:700px;
		display:block;
		}
		
		#chatview{
		text-align:left;
		height:355px;
		overflow:auto;
		width:400px;
		background-color:#e5e5e5;
		float:left;
		}
		
		#formwrapper{
		position: relative;
		left:15px;
		
		}
		</style>
		<script type = "text/javascript">
		$(document).ready(function () {
		loadMessages();
		$("#btnsend").click(function(){
			var txt = $.trim($("#message").val());
			var av = $("#avatar").val();
				$.post("ccontent.php",{submitted:" ",avatar:av,message:txt},function(result){
				$("#chatview").html(result);
			  });
		});
		
		$("#message").keyup(function(event){
		  if(event.keyCode == 13){
		  var cbox = $("#chatview");
			$("#btnsend").click();
			$(this).val('');
			//cbox.animate({scrollTop: "77px"}, 800);
		  }
		});
		
		});
		</script>
	</head>
	<body>
	
<img src = "logo.png" style = "margin-left:auto;margin-right:auto;display:block; height:100px;"/>	
	<!-- onsubmit = "return validateForm();" > -->
	
	
	
		<!--<iframe src = "chatview.php" width = "100%" height = "350" name = "chatview" onload ="clearMsg();">
		</iframe>  -->
		<div id = "content"> 
			<div id = "chatview"></div>
			<div id="formwrapper">
			<form action = "chatview.php#pagebottom" target = "chatview"  method = "POST" id = "chatform" >
			<div>
			Name: <input readonly type = "text" name = "avatar" id = "avatar" size = "40" value = "<?php echo $_REQUEST['uname'];?>"/>
			</div>
			<div>
			Message: <textarea name = "message" id = "message" cols = "30" rows = "4" ></textarea>
			</div>		
				
				<input type = "button" name = "submitted" value = "send" id = "btnsend" accesskey = "g" /> &nbsp; 
				<input type = "reset" name = "clear" value = "clear" />
				<input type = "hidden" value = "<?php echo $_SERVER['REMOTE_ADDR']; //or 'REMOTE_HOST' ?>" name = "sender" />
				</form>
			</div>

			</div>
				<div class = "footer" style = "display:none;">
					<a  onclick = "popup();" href = "#about" name = "about">About</a> | <a href = "chatcomment.php">Send Feedback</a> | <a href = "#" title = "just kidding :p">Donate</a>
			</div>	
			
	</body>
</html>
//validates form data
		function validateForm(){
		  
		var uname = document.getElementById('avatar').value;
		var msg = document.getElementById('message').value;
		
		if(uname == '' || msg == ''){
        
		alert('Please complete the form');
        
		return false;
        
		}
		
		var invalidStuffs = new Array(">","<");
		if (msg.indexOf(invalidStuffs[0]) >= 0 || msg.indexOf(invalidStuffs[1]) >= 0)
		{
		alert('Message contains some invalid characters');
		return false;
		}
		
		return true;	
		}
        
		//clear textarea
		function clearMsg(){
		document.getElementById('message').value = '';
        
		//window.focus("#pagebottom");
		}
		
	function popup()
    {
        window.open("about.htm","AboutWindow",
        'width=250,height=300,scrollbars=no, status=no resizable=no');
		return;
    }
	
	function loadMessages(){
			$.ajax({
		url : "ccontent.php",
		success : function (data) {
		$("#chatview").html(data);
		}
		});
		var scrollval = $("#chatview").height();
		$("#chatview").animate({scrollTop: scrollval }, 1000);
		
		//setTimeout("loadMessages()", 300);
	
	}
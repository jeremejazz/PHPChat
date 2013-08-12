<html>
<head><title>Chat admin</title>
<script>
	function verifyDelete(){		
	return confirm('Are you sure you want to delete the following items');
	}
</script>
</head>
<body>
<h2>Chat History</h2>

<form action = "<?php echo $_SERVER['PHP_SELF'];?>" method = "POST" name = "chatlist" id = "chatlist">

<table cellpadding = "1" align = "center">
<?php
#action: delete	
if($_REQUEST['action'] == 'Delete'){

	$in_file = 'hist.txt';
	$source = file($in_file);   #include validation on next edit
	$marked = $_REQUEST['chatgroup'];
	$fp = fopen($in_file,'w') or die('Could not open chat history');
		if (is_array($marked)){
		foreach($marked as $chatentry){
		if(is_numeric($chatentry))
		$source[$chatentry] = null;
		}
		/*for($x = 0; $x < count($source);$x++){
		if($source[$x] == null){
			continue;
		}else{
		//fwrite($fp, $source[$x]) or die('unable to save');
		
		
		}*/
		}
		file_put_contents('hist.txt',$source);
	fclose($fp);
	}




if(file_exists('hist.txt')){
$chathist = file('hist.txt');
		?>
		<tr> <td>&nbsp;</td>
		<td  width = "600">Actions<input type = "submit" name = "action" value = "Delete" onclick = "return verifyDelete();"/></td>
		</tr>
		<?php
		#just an experiment... not very efficient yet{
		$rgb[0] = 'rgb(204,255,204)';
		$rgb[1] ='rgb(255,255,255)';
		$trans = 0;
		# }
		$ctr = 0;
		foreach($chathist as $lines){
		
		echo '<tr>';
		echo '<td><input type = "checkbox" name = "chatgroup[]" value = "'. $ctr .'" /></td>' . "\n";
		echo '<td  style = "background-color:'. $rgb[$trans] .';">' . $lines . '</td>' . "\n";
		
		echo '</tr>' . "\n";
			if($trans == 0){
			$trans = 1;
			}else if($trans == 1){
			$trans = 0;
			}
		$ctr++;
		}
}

?>
</table>
</form>
</body>
</html>
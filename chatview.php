<?php
/**
 * @name chatview.php
 * @version 1.0
 * @author jermejazz
 * Date Started: August 5, 2010 
 * 
 */
?>
<html>
<head>
	<title>Chatroom Window</title>
	<meta name = "author" content = "jeremejazz"/>
    <style>
	table{
	font-size:13;
	}
	</style>
	<meta http-equiv="refresh" content="20; url=chatview.php#pagebottom" />
</head>

<body >

<?php
if($_REQUEST['submitted']){


	$target_file = 'hist.txt';
	$sent = '<b>' . $_REQUEST['avatar'].'</b>('.$_SERVER['REMOTE_ADDR'].'): '. $_REQUEST['message'] . '<br/>';
	
	$fp = fopen($target_file,'a') or die('Could not open chat history');
    fwrite($fp, $sent . "\n")
	or die('unable to recieve message');
	fclose($fp);
	
}

if(file_exists('hist.txt')){
$chathist = file('hist.txt');

	echo '<table border = "0" width = "100%">';
	if ((sizeof($chathist)) >= 27){
		
	for($ctr = 15; $ctr >= 0; $ctr--)
	echo $chathist[sizeof($chathist) - $ctr];
	}else{
		$rgb[0] = 'rgb(204,255,204)';
		$rgb[1] ='rgb(255,255,255)';
		$trans = 0;
		foreach($chathist as $lines){
		echo '<tr>';
		echo '<td style = "background-color:'. $rgb[$trans] .';">'.$lines . '</td>';
		echo '</tr>';
			if($trans == 0){
			$trans = 1;
			}else if($trans == 1){
			$trans = 0;
			}
			}
	}
	echo '</table>';
}

?>
<a name = "pagebottom"></a>
</body>

</html>
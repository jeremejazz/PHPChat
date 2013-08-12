<?php
if($_REQUEST['submitted']){

	include('filter.php');
	$target_file = 'hist.txt';
	$archive_file = 'archive.txt';
	$sent = '<b>' . strip_tags($_REQUEST['avatar']).'</b>: '. ReplaceBadWords(strip_tags($_REQUEST['message']),$my_badwords,'***') . '<br/>';
	$sent2 =  $_REQUEST['avatar'].' ('.$_SERVER['REMOTE_ADDR'].'): '. ReplaceBadWords(strip_tags($_REQUEST['message']),$my_badwords,'***') . '';
	$fp = fopen($target_file,'a') or die('Could not open chat history');
	$fp2 = fopen($archive_file,'a') or die('Could not open chat history');
    fwrite($fp, $sent . "\n")
	or die('unable to recieve message');
	fwrite($fp2, $sent2 . "\n")
	or die('unable to recieve message');
	
	fclose($fp);
	fclose($fp2);
}

if(file_exists('hist.txt')){
$chathist = file('hist.txt');

	echo '<table border = "0" width = "100%">';
	if ((sizeof($chathist)) >= 25){
		$limit = 20;
		$ctr = 0;
		foreach(array_slice($chathist,count($chathist)-$limit) as $lines){
		$ctr++;
		echo $lines;
		if ($ctr >= $limit) break;
			}
	}
	else{
		foreach($chathist as $lines){
		echo $lines;
			}
	}

}

?>
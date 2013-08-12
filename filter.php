<?php
$my_badwords = array("fuck", "shit","gago","puta","tanga", "dick");

function ReplaceBadWords($str, $bad_words, $replace_str){
    if (!is_array($bad_words)){ $bad_words = explode(',', $bad_words); }
    for ($x=0; $x < count($bad_words); $x++){
        $fix = isset($bad_words[$x]) ? $bad_words[$x] : '';
        $_replace_str = $replace_str;
        if (strlen($replace_str)==1){ 
            $_replace_str = str_pad($_replace_str, strlen($fix), $replace_str);
        }
        $str = preg_replace('/'.$fix.'/i', $_replace_str, $str);
    }
    return $str;
}
?>
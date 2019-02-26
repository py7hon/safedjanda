<?php

//    FUNction
//    Homepage: https://anime.bakaa.me
//    Email: iqbalrifai@waifu.club

error_reporting(E_ERROR | E_PARSE);
// decrypte
function decrypte($string,$key){
    $returnString = "";
    $charsArray = str_split("e7NjchMCEGgTpsx3mKXbVPiAqn8DLzWo_6.tvwJQ-R0OUrSak954fd2FYyuH~1lIBZ");
    $charsLength = count($charsArray);
    $keyArray = str_split(hash('sha256',$key));
    $stringArray = str_split(substr($string,($charsLength*2)+64));
    $sha256 = substr($string,($charsLength*2),64);
    $randomKeyArray = str_split(substr($string,0,$charsLength*2));
    $randomKeyDec = array();
	if(count($randomKeyArray) < 132) return false;
    for ($a = 0; $a < $charsLength*2; $a+=2){
        $numeric = array_search($randomKeyArray[$a],$charsArray) * $charsLength;
        $numeric += array_search($randomKeyArray[$a+1],$charsArray);
        $numeric -= ord($keyArray[floor($a/2)%count($keyArray)]);
        $randomKeyDec[] = chr($numeric);
    }
    for ($a = 0; $a < count($stringArray); $a+=2){
        $numeric = array_search($stringArray[$a],$charsArray) * $charsLength;
        $numeric += array_search($stringArray[$a+1],$charsArray);
        $numeric -= ord($randomKeyDec[floor($a/2)%$charsLength]);
        $returnString .= chr($numeric);
    }
    if(hash('sha256',$returnString) != $sha256){
        return false;
    }else{
        return $returnString;
    }
}
$lk_en = $_GET['id1'].$_GET['id2'].$_GET['id3'].$_GET['id4'].$_GET['id5'].$_GET['id6'].$_GET['id7'];
$title = $_GET['title'];
$safe = decrypte($lk_en, 'hashv1.00');
if($lk_en and $title) {
	header('location: '.$safe.'&title='.$title);
} elseif($lk_en) {
	header('location: '.$safe);
}
?>
<?php 
$str = " hayat ullah 12 12 12 rahnamoon how are you hayat ";
$met = " hayat ";
$hayat = preg_match("/ 12 /",$str);
$count = str_word_count($hayat);
echo $count;
?>
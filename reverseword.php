<?php
//Created by egarifs25@gmail.com

$string = "I am A Great human";

$reversed = "";
$tmp = "";
// $word = "";
for($i = 0; $i < strlen($string); $i++) {
    if($string[$i] == " ") {
        $reversed .= $tmp . " ";
        $tmp = "";
        continue;
    }
    $tmp = $string[$i] . $tmp;
}


$reversed .= $tmp;
$strl = strtolower($reversed);
$strU = ucwords($strl);
print $strU . PHP_EOL;

?>
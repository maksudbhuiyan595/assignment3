<?php
$text ="The quick brown fox jumps over the lazy dog";

function textConvert($text){

    $replace=str_replace($text,'brown','red');
    $lower=strtolower($replace);
    echo $lower;
}
textConvert($text);

?>

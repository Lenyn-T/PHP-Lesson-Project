<?php

$gr1 = $_GET['gr1'];
$gr2 = $_GET['gr2'];
$gr3 = $_GET['gr3'];

$res = ($gr1 + $gr2 + $gr3) / 3;

if($res >= 7){
    echo "Final grade ".$res.", graduated.";
}else if($res < 7 && $res > 3){
    echo "Current grade ".$res.", requires final test.";
}else{
    echo "Final grade ".$res.", grade failed.";
}
?>
<?php
    $fact = $_GET['fact'];
    $res = 1;
    
    for ($i=1; $i <= $fact; $i++) { 
        $res *= $i;
    }
    echo "Your number factored: ".$res;
?>
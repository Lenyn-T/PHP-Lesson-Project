<?php
    $sale = $_GET['sale'];

    if ($sale < 0) {
        echo "Please input a positive value.";
        return 0;
    }
    else if ($sale < 200) {
        $profit = $sale * 0.45;
    }else {
        $profit = $sale * 0.30;
    }
    echo "Sale with profit added: ".($sale + $profit);
?>
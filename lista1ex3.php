<?php
    $nome = $_GET['nome'];
    $sexo = $_GET['sexo'];
    $idade = $_GET['idade'];

    if ($sexo == "F" && $idade < 25) {
        echo "ACEITA";
    }else {
        echo "NÂO ACEITA";
    }
?>
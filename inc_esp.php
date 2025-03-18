<?php
    $servidor='localhost';
    $usuario='root';
    $senha='';
    $db='clinica';
    $con =mysqli_connect($servidor, $usuario, $senha, $db);
    if (!$con) {
        print("Erro na conexão com MySQL");
        print("Erro: ".mysqli_connect_error());
        exit;
    }

    $nome = $_POST['nome'];
    $sigla = $_POST['sigla'];
    include ('conexao.php');

    $query= "INSERT INTO especialidade (descricao, sigla) 
    VALUES ('$nome', '$sigla')"; 
    $resu= mysqli_query($con, $query);
    If (mysqli_insert_id ($con)) {
        echo "<br><font color=blue> Inclusão realizada com sucesso !!</font>";    
    }else{
        echo "<br><font color=red> ERRO: Inclusão não realizada!!</font>";
    }
    mysqli_close($con);
?>
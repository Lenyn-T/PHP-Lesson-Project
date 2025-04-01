<?php
    $nome = $_GET['exa_nome'];
    $sigla = $_GET['exa_sigla'];
    $preco = $_GET['exa_preco'];
    $obs = $_GET['exa_obs'];

    include ('conexao.php');

    $query= "INSERT INTO exames (nome, sigla, preco_exame, observacao) VALUES ('$nome', '$sigla', '$preco', '$obs')"; 
    $resu= mysqli_query($con, $query);
    If (mysqli_insert_id ($con)) {
        echo "<br><font color=blue> Inclusão realizada com sucesso !!</font>";    
    }else{
        echo "<br><font color=red> ERRO: Inclusão não realizada!!</font>";
    }
    mysqli_close($con);
?>
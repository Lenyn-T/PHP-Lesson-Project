<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include('conexao.php');

        $nome = $_POST["nome"];
        $cpf = $_POST["cpf"];
        $endereco = $_POST["endereco"];
        $numero = $_POST["numero"];
        $bairro = $_POST["bairro"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];
        $crm = $_POST["crm"];
        $salario = $_POST["salario"];
        $celular = $_POST["celular"];
        $cod_esp = $_POST["cod_esp"];

        $query = "INSERT INTO medico (nome, cpf, endereco, numero, bairro, 
        cidade, estado, crm, salario, celular, cod_esp)
        VALUES ('$nome','$cpf','$endereco','$numero','$bairro',
        '$cidade','$estado','$crm','$salario','$celular','$cod_esp')";

        $resu = mysqli_query($con, $query);
        
        if (mysqli_insert_id($con)) {
            echo "Inclusão realizada com sucesso.";
        } else {
            echo "ERRO ao inserir dados. :".mysqli_connect_error();
        }
        mysqli_close($con);
    }
?>
<!DOCTYPE html
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Especialidades Médicas</title>
</head>
<body>
    <h1>Inclusão</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include('conexao.php');

        $nome = $_POST["nome"];
        $sigla = $_POST["sigla"];
        
        $query= "INSERT INTO especialidade (descricao, sigla) 
        VALUES ('$nome', '$sigla')";
        
        $resu= mysqli_query($con, $query);
        
        if (mysqli_insert_id($con)) {
            echo "Inclusão realizada com sucesso !!"; 
        }else{
            echo "ERRO ao inserir os dados :".mysqli_connect_error();
        }
        mysqli_close($con);
    }
    ?>
    <form method="POST">
        <label>Descrição da especialidade:</label>
        <input type="text" name="nome" maxlength="100" required>
        <p><label>Sigla:</label>
        <input type="text" name="sigla" maxlength="3" required>
        <p><input type="submit" value="Enviar">
        <input type="reset" value="Limpar">
    </form>
</body>
</html>
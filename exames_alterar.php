<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Alteração de Especialidades Médicas</title>
    </head>
    <body>
        <h1>Alteração</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" 
        && isset($_POST['atualizar'])) {
            include('conexao.php');

        $id = $_POST['id'];
        $nome = $_POST['exa_nome'];
        $sigla = $_POST['exa_sigla'];
        $preco = $_POST['exa_preco'];
        $obs = $_POST['exa_obs'];

        $query= "UPDATE exames 
        SET nome='$nome', sigla='$sigla', preco_exame=$preco, observacao='$obs'
        WHERE id_exame=$id";

        $resu= mysqli_query($con, $query);

        if ($resu) {
            echo "Atualização realizada com sucesso!";
        } else {
            echo "ERRO ao atualizar os dados: " . mysqli_error($con);
        }

        mysqli_close($con);
        header("Location: exames_consultar.php");
        }elseif ($_SERVER["REQUEST_METHOD"] == "POST" 
        && isset($_POST['cancelar'])) {
            header("Location: exames_consultar.php");
        }
        ?>

        <?php
        if (isset($_GET['id'])) {
            include('conexao.php');
            $id = $_GET['id'];
            
            $query = "SELECT * FROM exames WHERE id_exame = $id";
            $result = mysqli_query($con, $query);
            $row = mysqli_fetch_assoc($result);
        ?>
        <form method="POST">
            <input type="hidden" name="id" value="<?php echo $row['id_exame']; ?>">
            <label>Descrição da especialidade: </label>
            <input type="text" name="exa_nome" size="100" maxlength="80" required value="<?php echo $row['nome']; ?>">
            <p><label>Sigla:</label>
            <input type="text" name="exa_sigla" size="6" maxlength="4" required value="<?php echo $row['sigla']; ?>">
            <label>Preco:</label>
            <input type="number" name="exa_preco" required value="<?php echo $row['preco_exame']; ?>">
            <p></p><label>Observações:</label>
            <input type="text" name="exa_obs" size="120" maxlength="200" required value="<?php echo $row['observacao']; ?>">

            <p><input type="submit" name="atualizar" value="Atualizar">
            <input type="submit" name="cancelar" value="Cancelar">
        </form>
        <?php
        }
        ?>
    </body>
</html>
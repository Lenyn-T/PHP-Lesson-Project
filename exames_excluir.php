<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exclusão de Especialidades Médicas</title>
    </head>
    <body>
        <h1>Exclusão</h1>
        <?php
        if (isset($_GET['id'])) {
            include('conexao.php');
            $id = $_GET['id'];
            
            $query = "SELECT * FROM exames WHERE id_exame = $id";
            $result = mysqli_query($con, $query);
            $row = mysqli_fetch_assoc($result);

            if ($row) {
                echo "<p>ID: " . $row['id_exame'] . "</p>";
                echo "<p>Descrição: " . $row['nome'] . "</p>";
                echo "<p>Sigla: " . $row['sigla'] . "</p>"; 
                echo "<p>Confirma a exclusão?</p>";
                echo "<form method='POST'>";
                    echo "<input type='hidden' name='id' value='" . $row['id_exame'] . "'>";
                    echo "<input type='submit' name='cancelar' value='Não'>  ";
                    echo "<input type='submit' name='confirmar' value='Sim'>";
                echo "</form>";
            } else {
                echo "Exame não encontrado.";
            }
        
        } else {
            echo "ID do exame não especificado.";
        }
        ?>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['confirmar'])) {
            include('conexao.php');
            $id = $_POST['id'];
            $query = "DELETE FROM exames WHERE id_exame = $id";
            $result = mysqli_query($con, $query);
        
            if ($result) {
                echo "Exame excluído com sucesso!";
            } else {
                echo "ERRO ao excluir a especialidade: " . mysqli_error($con);
            }
            mysqli_close($con);
            header ("Location: exames_consultar.php");
        } elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['cancelar'])) {
            header("Location: exames_consultar.php");
            exit;
        }
        ?>
    </body>
</html>
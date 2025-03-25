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
            
            $query = "SELECT * FROM especialidade WHERE id = $id";
            $result = mysqli_query($con, $query);
            $row = mysqli_fetch_assoc($result);

            if ($row) {
                echo "<p>ID: " . $row['id'] . "</p>";
                echo "<p>Descrição: " . $row['descricao'] . "</p>";
                echo "<p>Sigla: " . $row['sigla'] . "</p>"; 
                echo "<p>Confirma a exclusão?</p>";
                echo "<form method='POST'>";
                    echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
                    echo "<input type='submit' name='cancelar' value='Não'>  ";
                    echo "<input type='submit' name='confirmar' value='Sim'>";
                echo "</form>";
            } else {
                echo "Especialidade não encontrada.";
            }
        
        } else {
            echo "ID da especialidade não especificado.";
        }
        ?>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['confirmar'])) {
            include('conexao.php');
            $id = $_POST['id'];
            $query = "DELETE FROM especialidade WHERE id = $id";
            $result = mysqli_query($con, $query);
        
            if ($result) {
                echo "Especialidade excluída com sucesso!";
            } else {
                echo "ERRO ao excluir a especialidade: " . mysqli_error($con);
            }
            mysqli_close($con);
            header ("Location: consulta_especialidade.php");
        } elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['cancelar'])) {
            header("Location: consulta_especialidade.php");
            exit;
        }
        ?>
    </body>
</html>
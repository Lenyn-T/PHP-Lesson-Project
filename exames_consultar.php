
<html>
    <head>
        <meta charset="UTF-8"> 
        <title> Consulta Especialidades médicas </title>
    </head>
    <body>
        <form method="POST" >
        <p><center><h1> Especialidades médicas </center></h1> <table border="1" width="100%">
        <?php
            include('conexao.php');
            $query="SELECT * FROM exames ORDER BY nome";
            $resu=mysqli_query($con, $query) or die(mysqli_connect_error());
            echo "<tr><td><b> Descrição    </td><td><b> Sigla </td></tr>";
            while ($reg = mysqli_fetch_array($resu)) {
                echo "<tr><td>" . $reg['nome'] . "</td>";
                echo "<td>".$reg['sigla'] . "</td>";
                echo "<td><a href='exames_alterar.php?id=". $reg['id_exame']."'>Editar</a></td>";
                echo "<td> <a href='exames_excluir.php?id=". $reg['id_exame']."'>Excluir </a></td></tr>";
            }
        ?>
        </table>
        </form>
        <?php
            mysqli_close($con);
        ?>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista 1</title>
</head>

<body>
    <form method="get">
        <label>Tamanho do array <input type="number" name="arraySize"></label><br>
        <input type="submit"><br><br>
        <?php
            $arraySize = $_GET['arraySize'];
            for ($i=0; $i < $arraySize; $i++) { 
                $numArray[$i] = rand(10,100);
            }

            $quantidadePares = 0;
            $somaMultiplosDe3 = 0;
            for ($i=0; $i < $arraySize; $i++) { 
                if ($numArray[$i] %2 == 0) {
                    $quantidadePares++;
                }
                if ($numArray[$i] %3 == 0) {
                    $somaMultiplosDe3 += $numArray[$i];
                }
            }
            echo "Array: | ";
            for ($i=0; $i < $arraySize; $i++) { 
                echo $numArray[$i]." | ";
            }
            echo "<br>";
            echo "Quantidade de números pares: ". $quantidadePares ."<br>";
            echo "Soma dos múltiplos de 3: ". $somaMultiplosDe3 . "<br>";

        ?>
    </form>
    
</body>
</html>
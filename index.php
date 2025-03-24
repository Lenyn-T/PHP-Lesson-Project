<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Start</title>
</head>
<body>
    <h1 align="center">Input 3 test results to grade</h1>
    <form method="get" action="activity_grade.php">
        <label> Grade 1 <input type="number" name="gr1"></label><br>
        <label> Grade 2 <input type="number" name="gr2"></label><br>
        <label> Grade 3 <input type="number" name="gr3"></label><br>
        <input type="reset"><input type="submit">
    </form>

    <h1 align="center">Calculate profit percentage</h1>
    <form action="activity_profit.php" method="get">
        <h6>Profit at 45% under 200$, 30% otherwise.</h6>
        <label> Input sale value <input type="number" name="sale"></label><br>
        <input type="submit">
    </form>

    <h1 align="center">Calculate factorial</h1>
    <form method="get" action="activity_factorial.php">
        <label>Input an integer value <input type="number" name="fact"></label><br>
        <input type="submit">
    </form>

    <h1 align="center">Convert month number to word</h1>
    <form method="get" action="activity_months.php">
        <label>Input a month in number <input type="number" name="month"></label><br>
        <input type="submit">
    </form>

    <h1 align="center">Simple calculator</h1>
    <form action="activity_calc.php" method="get">
        <label>Number 1 <input type="number" name="num1"></label><br>
        <label>Number 2 <input type="number" name="num2"></label><br>
        <label>Operation <select name="calcOpr">
            <option value="sum">+</option>
            <option value="sub">-</option>
            <option value="div">÷</option>
            <option value="mul">*</option>
            <option value="sqr">√</option>
        </select></label>
        <input type="submit">
    </form>

    <h1 align="center">Operações com banco de dados</h1>
    <p><h2>Inclusão: Especialidade médica</h2></p> 
    <form method="POST" action="inc_esp.php">
        <div>                
            <p><label> Descrição da especialidade: </label>
            <input type="text" name="nome" maxlength="100" required>
        </div>
        <div>
            <p><label> Sigla: </label>
            <input type="text" name="sigla" maxlength="3" required>
        </div>
        <div>
            <input type="submit">
            <input type="reset">
        </div>
    </form>

    <h2>Inclusão: Médico</h2>
    <form method="post" action="inc_medic.php">
        <label> Nome: <input type="text" name="nome" maxlenght="100" size="40" required></label>
        <label> CPF: <input type="text" name="cpf" maxlenght="11" required></label><br><br>
        <label> Endereco: <input type="text" name="endereco" maxlenght="100" size="40" required></label>
        <label> Numero: <input type="text" name="numero" maxlenght="10" size="10"></label>
        <label> Bairro: <input type="text" name="bairro" maxlenght="60" required></label><br><br>
        <label> Cidade: <input type="text" name="cidade" maxlenght="80" required></label>
        <label> Estado: <select name="estado">
            <option value="">XX</option>
            <option value="AC">AC</option>
            <option value="AL">AL</option>
            <option value="AP">AP</option>
            <option value="AM">AM</option>
            <option value="BA">BA</option>
            <option value="CE">CE</option>
            <option value="DF">DF</option>
            <option value="ES">ES</option>
            <option value="GO">GO</option>
            <option value="MA">MA</option>
            <option value="MS">MS</option>
            <option value="MT">MT</option>
            <option value="MG">MG</option>
            <option value="PA">PA</option>
            <option value="PB">PB</option>
            <option value="PR">PR</option>
            <option value="PE">PE</option>
            <option value="PI">PI</option>
            <option value="RJ">RJ</option>
            <option value="RN">RN</option>
            <option value="RS">RS</option>
            <option value="RO">RO</option>
            <option value="RR">RR</option>
            <option value="SC">SC</option>
            <option value="SP">SP</option>
            <option value="SE">SE</option>
            <option value="TO">TO</option>
        </select></label><br><br>
        <label> CRM: <input type="text" name="crm" maxlenght="20" required></label>
        <label> Salario: <input type="number" name="salario" min="0" max="30000" step="100" required></label>
        <label> Celular: <input type="tel" name="celular" maxlenght="15" required></label><br><br>
        <label> Especialidade: 
            <select name="cod_esp">
                <?php
                    include("conexao.php");
                    $query = 'SELECT * FROM especialidade ORDER BY descricao';
                    $resu = mysqli_query($con, $query) or die(mysqli_connect_error());
                    while ($reg = mysqli_fetch_array($resu)) {
                ?>
                <option value="<?php echo $reg['id'];?>">
                    <?php echo $reg['descricao'];?>
                </option>
                <?php
                    }
                    mysqli_close($con);
                ?>
            </select></label><br><br>
        <input type="submit">
        <input type="reset">
    </form>

    <br><br><br><br>
</body>
</html>
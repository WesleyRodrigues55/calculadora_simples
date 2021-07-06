<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>


<div class="container" style="padding: 20px; box-shadow: 0 2px 5px black; margin-top: 20px">
    <h1>Calculadora - passo a passo</h1>
    <div class="row">
        <div class="col-md-6">
            <!--------------- SOMANDO --------------->
            <form name="somar" method="post" class="row" style="height: 280px;">
                <div class="col-md-11">
                    <h3>Testando php - somando</h3><br>
                    <input type="text" class="form-control" name="n1" placeholder="Digite um número...">
                    <b>+</b>
                    <input type="text" class="form-control" name="n2" placeholder="Digite um número...">
                    <input type="submit" class="btn btn-primary" value="Calcular" style="margin: 20px 10px">
                    <input type="reset" class="btn btn-danger" value="limpar campos" style="margin: 20px 10px">
                </div>
                <!-- somar -->
                <?php
                if (isset($_POST['n1'])) {
                    $n1 = $_POST['n1'];
                    $n2 = $_POST['n2'];
                    $result = $n1 + $n2;
                    echo"O resultado da sua soma é: $result";
                }
                ?>
            </form>
        </div>

        <div class="col-md-6">
            <!--------------- SUBTRAINDO --------------->
            <form name="subtrair" method="post" class="row" style="height: 280px;">
            <div class="col-md-11">
                <h3>Testando php - subtrair</h3><br>
                <input type="text" class="form-control" name="num1" placeholder="Digite um número...">
                <b>-</b>
                <input type="text" class="form-control" name="num2" placeholder="Digite um número...">
                <input type="submit" class="btn btn-primary" value="Calcular" style="margin: 20px 10px">
                <input type="reset" class="btn btn-danger" value="limpar campos" style="margin: 20px 10px">
            </div>
                <!-- subtrair -->
                <?php
                if (isset($_POST['num1'])) {
                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];
                    $res = $num1 - $num2;
                    echo"O resultado da sua subtração é: $res";
                }
                ?>
            </form>
        </div>

        <div class="col-md-6">
            <!--------------- MULTIPLICANDO --------------->
            <form name="Multiplicar" method="post" class="row" style="height: 280px;">
                <div class="col-md-11">
                    <h3>Testando php - multiplicando</h3><br>
                    <input type="text" class="form-control" name="nu1" placeholder="Digite um número...">
                    <b>*</b>
                    <input type="text" class="form-control" name="nu2" placeholder="Digite um número...">
                    <input type="submit" class="btn btn-primary" value="Calcular" style="margin: 20px 10px">
                    <input type="reset" class="btn btn-danger" value="limpar campos" style="margin: 20px 10px">
                </div>
                <!-- multiplicar -->
                <?php
                if (isset($_POST['nu1'])) {
                    $nu1 = $_POST['nu1'];
                    $nu2 = $_POST['nu2'];
                    $calc = $nu1 * $nu2;
                    echo"O resultado da sua multiplicação é: $calc";
                }
                ?>
            </form>
        </div>

        <div class="col-md-6">
            <!--------------- DIVIDINDO --------------->
            <form name="dividir" method="post" class="row" style="height: 280px;">
                <div class="col-md-11">
                    <h3>Testando php - divisão</h3><br>
                    <input type="text" class="form-control" name="number1" placeholder="Digite um número...">
                    <b> / </b>
                    <input type="text" class="form-control" name="number2" placeholder="Digite um número...">
                    <input type="submit" class="btn btn-primary" value="Calcular" style="margin: 20px 10px">
                    <input type="reset" class="btn btn-danger" value="limpar campos" style="margin: 20px 10px">
                </div>
                <!-- divisão -->
                <?php
                if (isset($_POST['number1'])) {
                    $number1 = $_POST['number1'];
                    $number2 = $_POST['number2'];
                    $mult = $number1 / $number2;
                    echo"O resultado da sua divisão é: $mult";
                }
                ?>
            </form>
        </div>

        <div class="col-md-6">
            <!--------------- TENTANDO FAZER CALCULADORA + - * / --------------->
            <form name="CALCULADORA" method="post" class="row" style="height: 280px;">
                <div class="col-md-11">
                    <h3>Testando php - calculadora</h3><br>
                    <input type="text" class="form-control" name="primeiroCampo" placeholder="Digite o primeiro número...">
                    <input type="text" class="form-control" name="segundoCampo" placeholder="Digite o segundo número...">
                    <select name="op" class="form-control">
                        <option value="soma">Somar</option>
                        <option value="subtrair">Subtrair</option>
                        <option value="multiplicar">Multiplicar</option>
                        <option value="dividir">Dividir</option>
                    </select>
                    <input type="submit" class="btn btn-primary" value="Calcular" style="margin: 20px 10px">
                </div>
                <!-- calculadora -->
                <?php
                    if (isset($_POST['primeiroCampo']) && ($_POST['segundoCampo'])) {
                    $a = $_POST['primeiroCampo'];
                    $b = $_POST['segundoCampo'];
                    $op = $_POST['op'];
                    $c = [];

                    if ($op == "soma") {
                        $c = $a + $b;
                        echo"O resultado da soma é: $c";
                    }

                    else if ($op == "subtrair") {
                        $c = $a - $b;
                        echo"O resultado da subtração é: $c";
                    }

                    else if ($op == "multiplicar") {
                        $c = $a * $b;
                        echo"O resultado da multiplicação é: $c";
                    }

                    else if ($op == "dividir") {
                        $c = $a / $b;
                        echo"O resultado da divisão é: $c";
                    }

                    else if ($op != "soma" || $op != "subtrair" || $op != "multiplicar" || $op != "dividir")
                        echo"<br>Digite da maneira correta, exemplo(soma, subtrair, multiplicar ou dividir)";
                    }
                ?>
            </form>
        </div>
    </div>
</div>

<?php
//somar

?>

</body>
</html>
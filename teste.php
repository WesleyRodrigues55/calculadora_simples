<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testes</title>
</head>
<body>

<div style="border: 1px solid black; width: 650px; padding: 20px; color: black; background: #A9A9A9; font-family: verdana; margin: 0 auto;">

<!--------------- SOMANDO --------------->
<form name="somar" method="post">
<h3>Testando php - somando</h3>
<br>
<input type="text" name="n1" placeholder="Digite um número...">
<b>+</b>
<input type="text" name="n2" placeholder="Digite um número...">
<input type="submit" value="Calcular">
<input type="reset" value="limpar campos">
</form><br><br>

<?php
if (isset($_POST['n1'])) {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $result = $n1 + $n2;
    echo"O resultado da sua soma é: $result";
}
?>


<!--------------- SUBTRAINDO --------------->
<form name="subtrair" method="post">
<h3>Testando php - subtrair</h3>
<br>
<input type="text" name="num1" placeholder="Digite um número...">
<b>-</b>
<input type="text" name="num2" placeholder="Digite um número...">
<input type="submit" value="Calcular">
<input type="reset" value="Limpar campos">
</form><br><br>

<?php
if (isset($_POST['num1'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $res = $num1 - $num2;
    echo"O resultado da sua subtração é: $res";
}
?>

<!--------------- MULTIPLICANDO --------------->
<form name="Multiplicar" method="post">
<h3>Testando php - multiplicando</h3>
<br>
<input type="text" name="nu1" placeholder="Digite um número...">
<b>*</b>
<input type="text" name="nu2" placeholder="Digite um número...">
<input type="submit" value="Calcular">
<input type="reset" value="Limpar campos">
</form><br><br>

<?php
if (isset($_POST['nu1'])) {
    $nu1 = $_POST['nu1'];
    $nu2 = $_POST['nu2'];
    $calc = $nu1 * $nu2;
    echo"O resultado da sua multiplicação é: $calc";
}
?>

<!--------------- DIVIDINDO --------------->
<form name="dividir" method="post">
<h3>Testando php - divisão</h3>
<br>
<input type="text" name="number1" placeholder="Digite um número...">
<b> / </b>
<input type="text" name="number2" placeholder="Digite um número...">
<input type="submit" value="Calcular">
<input type="reset" value="Limpar campos">
</form><br><br>

<?php
if (isset($_POST['number1'])) {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $mult = $number1 / $number2;
    echo"O resultado da sua multiplicação é: $mult";
}
?>

<!--------------- CALCULADORA + - * / --------------->
<form name="CALCULADORA" method="post">
<h3>Testando php - calculadora</h3>
<br>
<input type="text" name="a" placeholder="Digite um número...">
<input type="text" name="b" placeholder="Digite um número...">
<input type="operação" name="op" placeholder="Qual é a operação?">
<input type="submit" value="Calcular">
</form>

<?php
if (isset($_POST['a'])) {
$a = $_POST['a'];
$b = $_POST['b'];
$op = $_POST['op'];
$c = [];


if ($op == "soma") {
    $c = $a + $b;
    echo"$c";
}

else if ($op == "subtrair") {
    $c = $a - $b;
    echo"$c";
}

else if ($op == "multiplicar") {
    $c = $a * $b;
    echo"$c";
}

else if ($op == "dividir") {
    $c = $a / $b;
    echo"$c";
}

else if ($op != "soma" || $op != "subtrair" || $op != "multiplicar" || $op != "dividir")
    echo"<br>Digite da maneira correta, exemplo(soma, subtrair, multiplicar ou dividir)";
}

?>

</div>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Atividades PHP</title>
</head>
<body>

<h1>Atividades PHP</h1>

<!-- 1 -->
<h2>1. Operações Matemáticas</h2>
<form method="post">
    <input type="number" name="n1" placeholder="Número 1" required>
    <input type="number" name="n2" placeholder="Número 2" required>
    <button name="atv1">Calcular</button>
</form>
<?php if(isset($_POST['atv1'])) echo "Soma: ".($_POST['n1']+$_POST['n2'])." | Subtração: ".($_POST['n1']-$_POST['n2'])." | Multiplicação: ".($_POST['n1']*$_POST['n2'])." | Divisão: ".($_POST['n1']/$_POST['n2']); ?>

<hr>

<!-- 2 -->
<h2>2. Média de Dois Números</h2>
<form method="post">
    <input type="number" name="a" required>
    <input type="number" name="b" required>
    <button name="atv2">Calcular</button>
</form>
<?php if(isset($_POST['atv2'])) echo "Média: ".(($_POST['a']+$_POST['b'])/2); ?>

<hr>

<!-- 3 -->
<h2>3. Média de Três Notas</h2>
<form method="post">
    <input type="number" step="0.01" name="n1" required>
    <input type="number" step="0.01" name="n2" required>
    <input type="number" step="0.01" name="n3" required>
    <button name="atv3">Calcular</button>
</form>
<?php if(isset($_POST['atv3'])) echo "Média: ".(($_POST['n1']+$_POST['n2']+$_POST['n3'])/3); ?>

<hr>

<!-- 5 -->
<h2>5. IMC</h2>
<form method="post">
    <input type="number" step="0.01" name="peso" placeholder="Peso" required>
    <input type="number" step="0.01" name="altura" placeholder="Altura" required>
    <button name="atv5">Calcular</button>
</form>
<?php if(isset($_POST['atv5'])) echo "IMC: ".number_format($_POST['peso']/($_POST['altura']*$_POST['altura']),2); ?>

<hr>

<!-- 6 -->
<h2>6. Perímetro do Círculo</h2>
<form method="post">
    <input type="number" step="0.01" name="raio" required>
    <button name="atv6">Calcular</button>
</form>
<?php if(isset($_POST['atv6'])) echo "Perímetro: ".number_format(2*pi()*$_POST['raio'],2); ?>

<hr>

<!-- 7 -->
<h2>7. Área do Círculo</h2>
<form method="post">
    <input type="number" step="0.01" name="raio" required>
    <button name="atv7">Calcular</button>
</form>
<?php if(isset($_POST['atv7'])) echo "Área: ".number_format(pi()*pow($_POST['raio'],2),2); ?>

<hr>

<!-- 8 -->
<h2>8. Bhaskara</h2>
<form method="post">
    <input type="number" name="a" placeholder="A" required>
    <input type="number" name="b" placeholder="B" required>
    <input type="number" name="c" placeholder="C" required>
    <button name="atv8">Calcular</button>
</form>
<?php
if(isset($_POST['atv8'])){
    $d=($_POST['b']*$_POST['b'])-(4*$_POST['a']*$_POST['c']);
    echo "X1 = ".((-$_POST['b']+sqrt($d))/(2*$_POST['a']));
    echo " | X2 = ".((-$_POST['b']-sqrt($d))/(2*$_POST['a']));
}
?>

<hr>

<!-- 9 -->
<h2>9. Retângulo</h2>
<form method="post">
    <input type="number" name="l" placeholder="Largura" required>
    <input type="number" name="c" placeholder="Comprimento" required>
    <button name="atv9">Calcular</button>
</form>
<?php if(isset($_POST['atv9'])) echo "Perímetro: ".(2*($_POST['l']+$_POST['c']))." | Área: ".($_POST['l']*$_POST['c']); ?>

<hr>

<!-- 10 -->
<h2>10. Triângulo</h2>
<form method="post">
    <input type="number" name="a" placeholder="Lado A" required>
    <input type="number" name="b" placeholder="Lado B" required>
    <input type="number" name="c" placeholder="Lado C" required>
    <input type="number" name="h" placeholder="Altura" required>
    <button name="atv10">Calcular</button>
</form>
<?php if(isset($_POST['atv10'])) echo "Perímetro: ".($_POST['a']+$_POST['b']+$_POST['c'])." | Área: ".(($_POST['b']*$_POST['h'])/2); ?>

</body>
</html>


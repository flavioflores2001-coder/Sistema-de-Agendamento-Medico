<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Atividades 31 a 40</title>
<style>
body{
    font-family:Arial;
    background:#f2f2f2;
    padding:20px;
}
h2{
    background:#333;
    color:#fff;
    padding:10px;
}
form{
    background:#fff;
    padding:15px;
    margin-bottom:20px;
    border-radius:8px;
}
input{
    padding:8px;
    margin:5px;
}
button{
    padding:8px 15px;
}
.resultado{
    color:blue;
    font-weight:bold;
    margin-top:10px;
}
</style>
</head>
<body>

<h1>Atividades 31 a 40</h1>

<!-- 31 -->
<form method="post">
<h2>31 - Aprovação em cada prova</h2>
<input type="number" step="0.1" name="n31a" placeholder="Nota 1">
<input type="number" step="0.1" name="n31b" placeholder="Nota 2">
<button name="at31">Executar</button>
<?php
if(isset($_POST['at31'])){
echo "<div class='resultado'>";
echo "Prova 1: ".($_POST['n31a']>=6?"Aprovado":"Reprovado")."<br>";
echo "Prova 2: ".($_POST['n31b']>=6?"Aprovado":"Reprovado");
echo "</div>";
}
?>
</form>

<!-- 32 -->
<form method="post">
<h2>32 - Média das provas</h2>
<input type="number" step="0.1" name="n32a">
<input type="number" step="0.1" name="n32b">
<button name="at32">Executar</button>
<?php
if(isset($_POST['at32'])){
$media=($_POST['n32a']+$_POST['n32b'])/2;
echo "<div class='resultado'>Média: $media<br>";
echo $media>=6?"Aprovado":"Reprovado";
echo "</div>";
}
?>
</form>

<!-- 33 -->
<form method="post">
<h2>33 - Soma divisível por 5</h2>
<input type="number" name="a33">
<input type="number" name="b33">
<input type="number" name="c33">
<button name="at33">Executar</button>
<?php
if(isset($_POST['at33'])){
$s=$_POST['a33']+$_POST['b33']+$_POST['c33'];
echo "<div class='resultado'>".($s%5==0?"Divisível por 5":"Não divisível por 5")."</div>";
}
?>
</form>

<!-- 34 -->
<form method="post">
<h2>34 - Soma positiva, negativa ou zero</h2>
<input type="number" name="a34">
<input type="number" name="b34">
<input type="number" name="c34">
<button name="at34">Executar</button>
<?php
if(isset($_POST['at34'])){
$s=$_POST['a34']+$_POST['b34']+$_POST['c34'];
if($s>0) $r="Positiva";
elseif($s<0) $r="Negativa";
else $r="Zero";
echo "<div class='resultado'>$r</div>";
}
?>
</form>

<!-- 35 -->
<form method="post">
<h2>35 - Maior e menor número</h2>
<input type="number" name="a35">
<input type="number" name="b35">
<input type="number" name="c35">
<button name="at35">Executar</button>
<?php
if(isset($_POST['at35'])){
$nums=[$_POST['a35'],$_POST['b35'],$_POST['c35']];
echo "<div class='resultado'>";
echo "Maior: ".max($nums)."<br>";
echo "Menor: ".min($nums);
echo "</div>";
}
?>
</form>

<!-- 36 -->
<form method="post">
<h2>36 - Idades</h2>
<input type="number" name="i1">
<input type="number" name="i2">
<input type="number" name="i3">
<button name="at36">Executar</button>
<?php
if(isset($_POST['at36'])){
$idades=[$_POST['i1'],$_POST['i2'],$_POST['i3']];
$maiores=0;
foreach($idades as $i){
if($i>=18)$maiores++;
}
echo "<div class='resultado'>";
if($maiores==3)
echo "Todas são maiores de idade.";
elseif($maiores==0)
echo "Todas são menores de idade.";
else
echo "Existe pelo menos uma pessoa maior de idade.";
echo "</div>";
}
?>
</form>

<!-- 37 -->
<form method="post">
<h2>37 - Triângulo</h2>
<input type="number" name="l1">
<input type="number" name="l2">
<input type="number" name="l3">
<button name="at37">Executar</button>
<?php
if(isset($_POST['at37'])){
$a=$_POST['l1'];
$b=$_POST['l2'];
$c=$_POST['l3'];
echo "<div class='resultado'>";
echo ($a+$b>$c && $a+$c>$b && $b+$c>$a)?"Pode formar triângulo":"Não pode formar triângulo";
echo "</div>";
}
?>
</form>

<!-- 38 -->
<form method="post">
<h2>38 - Apto a votar</h2>
<input type="number" name="ano38" placeholder="Ano de nascimento">
<button name="at38">Executar</button>
<?php
if(isset($_POST['at38'])){
$idade=date("Y")-$_POST['ano38'];
echo "<div class='resultado'>".($idade>=16?"Está apto a votar":"Não está apto a votar")."</div>";
}
?>
</form>

<!-- 39 -->
<form method="post">
<h2>39 - Obrigatoriedade do voto</h2>
<input type="number" name="idade39">
<button name="at39">Executar</button>
<?php
if(isset($_POST['at39'])){
$i=$_POST['idade39'];
echo "<div class='resultado'>";
if($i<16)
echo "Não pode votar.";
elseif(($i>=16 && $i<=17)||$i>=70)
echo "Voto facultativo.";
else
echo "Voto obrigatório.";
echo "</div>";
}
?>
</form>

<!-- 40 -->
<form method="post">
<h2>40 - Situação do aluno</h2>
<input type="number" step="0.1" name="n1">
<input type="number" step="0.1" name="n2">
<input type="number" step="0.1" name="n3">
<button name="at40">Executar</button>
<?php
if(isset($_POST['at40'])){
$m=($_POST['n1']+$_POST['n2']+$_POST['n3'])/3;
echo "<div class='resultado'>Média: ".number_format($m,1)."<br>";
if($m>=7)
echo "Aprovado";
elseif($m<4)
echo "Reprovado";
else
echo "Recuperação";
echo "</div>";
}
?>
</form>

</body>
</html>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Atividades 41 a 50</title>
<style>
body{
    font-family:Arial;
    background:#f2f2f2;
    padding:20px;
}
h2{
    background:#333;
    color:#fff;
    padding:10px;
}
form{
    background:#fff;
    padding:15px;
    margin-bottom:20px;
    border-radius:8px;
}
input{
    padding:8px;
    margin:5px;
}
button{
    padding:8px 15px;
}
.resultado{
    color:blue;
    font-weight:bold;
    margin-top:10px;
}
</style>
</head>
<body>

<h1>Atividades 41 a 50</h1>

<!-- 41 -->
<form method="post">
<h2>41 - Dia útil ou fim de semana</h2>
<input type="text" name="dia41" placeholder="Digite o dia da semana">
<button name="at41">Executar</button>

<?php
if(isset($_POST['at41'])){
$dia=strtolower(trim($_POST['dia41']));

echo "<div class='resultado'>";

if($dia=="segunda"||$dia=="terça"||$dia=="terca"||$dia=="quarta"||$dia=="quinta"||$dia=="sexta")
echo "Dia útil";
elseif($dia=="sábado"||$dia=="sabado"||$dia=="domingo")
echo "Fim de semana";
else
echo "Dia inválido";

echo "</div>";
}
?>

</form>

<!-- 42 -->
<form method="post">
<h2>42 - IMC</h2>

<input type="number" step="0.01" name="peso">
<input type="number" step="0.01" name="altura">

<button name="at42">Executar</button>

<?php
if(isset($_POST['at42'])){

$imc=$_POST['peso']/($_POST['altura']*$_POST['altura']);

echo "<div class='resultado'>";
echo "IMC: ".number_format($imc,2)."<br>";

if($imc<18.5)
echo "Abaixo do peso";
elseif($imc<25)
echo "Peso normal";
elseif($imc<30)
echo "Sobrepeso";
elseif($imc<40)
echo "Obesidade";
else
echo "Obesidade grave";

echo "</div>";

}
?>

</form>

<!-- 43 -->
<form method="post">

<h2>43 - Divisível por 3 e por 5</h2>

<input type="number" name="num43">

<button name="at43">Executar</button>

<?php

if(isset($_POST['at43'])){

$n=$_POST['num43'];

echo "<div class='resultado'>";

echo ($n%3==0 && $n%5==0)?"É divisível por 3 e por 5":"Não é divisível por 3 e por 5";

echo "</div>";

}

?>

</form>

<!-- 44 -->
<form method="post">

<h2>44 - Faixa etária</h2>

<input type="number" name="idade44">

<button name="at44">Executar</button>

<?php

if(isset($_POST['at44'])){

$i=$_POST['idade44'];

echo "<div class='resultado'>";

if($i<=12)
echo "Criança";
elseif($i<=17)
echo "Adolescente";
elseif($i<=59)
echo "Adulto";
else
echo "Idoso";

echo "</div>";

}

?>

</form>

<!-- 45 -->

<form method="post">

<h2>45 - Divisível</h2>

<input type="number" name="n45a">

<input type="number" name="n45b">

<button name="at45">Executar</button>

<?php

if(isset($_POST['at45'])){

$a=$_POST['n45a'];
$b=$_POST['n45b'];

echo "<div class='resultado'>";

if($b==0)
echo "Não é possível dividir por zero.";
else
echo ($a%$b==0)?"O primeiro é divisível pelo segundo":"O primeiro não é divisível pelo segundo";

echo "</div>";

}

?>

</form>

<!-- 46 -->

<form method="post">

<h2>46 - Números de 1 a 10</h2>

<button name="at46">Executar</button>

<?php

if(isset($_POST['at46'])){

echo "<div class='resultado'>";

for($i=1;$i<=10;$i++){

echo $i." ";

}

echo "</div>";

}

?>

</form>

<!-- 47 -->

<form method="post">

<h2>47 - Números de 1 a 100</h2>

<button name="at47">Executar</button>

<?php

if(isset($_POST['at47'])){

echo "<div class='resultado'>";

for($i=1;$i<=100;$i++){

echo $i." ";

}

echo "</div>";

}

?>

</form>

<!-- 48 -->

<form method="post">

<h2>48 - Pares de 1 a 100</h2>

<button name="at48">Executar</button>

<?php

if(isset($_POST['at48'])){

echo "<div class='resultado'>";

for($i=2;$i<=100;$i+=2){

echo $i." ";

}

echo "</div>";

}

?>

</form>

<!-- 49 -->

<form method="post">

<h2>49 - Pares de 1 a 50 e Ímpares de 51 a 100</h2>

<button name="at49">Executar</button>

<?php

if(isset($_POST['at49'])){

echo "<div class='resultado'>";

for($i=2;$i<=50;$i+=2){

echo $i." ";

}

echo "<br><br>";

for($i=51;$i<=100;$i+=2){

echo $i." ";

}

echo "</div>";

}

?>

</form>

<!-- 50 -->

<form method="post">

<h2>50 - Tabuada</h2>

<input type="number" name="tabuada">

<button name="at50">Executar</button>

<?php

if(isset($_POST['at50'])){

$n=$_POST['tabuada'];

echo "<div class='resultado'>";

for($i=1;$i<=10;$i++){

echo "$n x $i = ".($n*$i)."<br>";

}

echo "</div>";

}

?>

</form>

</body>
</html>
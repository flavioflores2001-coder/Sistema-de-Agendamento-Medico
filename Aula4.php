<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Atividades 16 a 30</title>
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

<h1>Atividades 16 a 30</h1>

<!-- 16 -->
<form method="post">
<h2>16 - Concatenar duas palavras</h2>
<input type="text" name="p1" placeholder="Palavra 1">
<input type="text" name="p2" placeholder="Palavra 2">
<button name="at16">Executar</button>
<?php
if(isset($_POST['at16'])){
echo "<div class='resultado'>Resultado: ".$_POST['p1'].$_POST['p2']."</div>";
}
?>
</form>

<!-- 17 -->
<form method="post">
<h2>17 - Exibir cada letra</h2>
<input type="text" name="pal17">
<button name="at17">Executar</button>
<?php
if(isset($_POST['at17'])){
$pal=$_POST['pal17'];
echo "<div class='resultado'>";
for($i=0;$i<strlen($pal);$i++) echo $pal[$i]."<br>";
echo "</div>";
}
?>
</form>

<!-- 18 -->
<form method="post">
<h2>18 - Trocar "a" por "e"</h2>
<input type="text" name="frase18">
<button name="at18">Executar</button>
<?php
if(isset($_POST['at18'])){
echo "<div class='resultado'>".str_replace(["a","A"],["e","E"],$_POST['frase18'])."</div>";
}
?>
</form>

<!-- 19 -->
<form method="post">
<h2>19 - Nome começa com A?</h2>
<input type="text" name="nome19">
<button name="at19">Executar</button>
<?php
if(isset($_POST['at19'])){
echo "<div class='resultado'>".(strtoupper($_POST['nome19'][0])=="A"?"Começa com A":"Não começa com A")."</div>";
}
?>
</form>

<!-- 20 -->
<form method="post">
<h2>20 - Palíndromo</h2>
<input type="text" name="pal20">
<button name="at20">Executar</button>
<?php
if(isset($_POST['at20'])){
$p=strtolower(str_replace(" ","",$_POST['pal20']));
echo "<div class='resultado'>".($p==strrev($p)?"É palíndromo":"Não é palíndromo")."</div>";
}
?>
</form>

<!-- 21 -->
<form method="post">
<h2>21 - Anagrama</h2>
<input type="text" name="a1" placeholder="Palavra 1">
<input type="text" name="a2" placeholder="Palavra 2">
<button name="at21">Executar</button>
<?php
if(isset($_POST['at21'])){
$x=str_split(strtolower($_POST['a1']));
$y=str_split(strtolower($_POST['a2']));
sort($x);
sort($y);
echo "<div class='resultado'>".($x==$y?"É anagrama":"Não é anagrama")."</div>";
}
?>
</form>

<!-- 22 -->
<form method="post">
<h2>22 - Primeiro nome</h2>
<input type="text" name="nome22">
<button name="at22">Executar</button>
<?php
if(isset($_POST['at22'])){
$n=explode(" ",trim($_POST['nome22']));
echo "<div class='resultado'>".$n[0]."</div>";
}
?>
</form>

<!-- 23 -->
<form method="post">
<h2>23 - Quantidade de espaços</h2>
<input type="text" name="frase23">
<button name="at23">Executar</button>
<?php
if(isset($_POST['at23'])){
echo "<div class='resultado'>Espaços: ".substr_count($_POST['frase23']," ")."</div>";
}
?>
</form>

<!-- 24 -->
<form method="post">
<h2>24 - Quantidade de vogais</h2>
<input type="text" name="pal24">
<button name="at24">Executar</button>
<?php
if(isset($_POST['at24'])){
preg_match_all('/[aeiouAEIOU]/',$_POST['pal24'],$v);
echo "<div class='resultado'>Vogais: ".count($v[0])."</div>";
}
?>
</form>

<!-- 25 -->
<form method="post">
<h2>25 - Sobrenome primeiro</h2>
<input type="text" name="nome25">
<button name="at25">Executar</button>
<?php
if(isset($_POST['at25'])){
$n=explode(" ",trim($_POST['nome25']));
$ultimo=array_pop($n);
echo "<div class='resultado'>".$ultimo." ".implode(" ",$n)."</div>";
}
?>
</form>

<!-- 26 -->
<form method="post">
<h2>26 - Maior de idade</h2>
<input type="number" name="idade">
<button name="at26">Executar</button>
<?php
if(isset($_POST['at26'])){
echo "<div class='resultado'>".($_POST['idade']>=18?"Maior de idade":"Menor de idade")."</div>";
}
?>
</form>

<!-- 27 -->
<form method="post">
<h2>27 - Maior entre dois números</h2>
<input type="number" name="n1">
<input type="number" name="n2">
<button name="at27">Executar</button>
<?php
if(isset($_POST['at27'])){
echo "<div class='resultado'>Maior: ".max($_POST['n1'],$_POST['n2'])."</div>";
}
?>
</form>

<!-- 28 -->
<form method="post">
<h2>28 - Maior entre três números</h2>
<input type="number" name="a">
<input type="number" name="b">
<input type="number" name="c">
<button name="at28">Executar</button>
<?php
if(isset($_POST['at28'])){
echo "<div class='resultado'>Maior: ".max($_POST['a'],$_POST['b'],$_POST['c'])."</div>";
}
?>
</form>

<!-- 29 -->
<form method="post">
<h2>29 - Par ou Ímpar</h2>
<input type="number" name="num29">
<button name="at29">Executar</button>
<?php
if(isset($_POST['at29'])){
echo "<div class='resultado'>".($_POST['num29']%2==0?"Par":"Ímpar")."</div>";
}
?>
</form>

<!-- 30 -->
<form method="post">
<h2>30 - Positivo, Negativo ou Zero</h2>
<input type="number" name="num30">
<button name="at30">Executar</button>
<?php
if(isset($_POST['at30'])){
if($_POST['num30']>0)
echo "<div class='resultado'>Positivo</div>";
elseif($_POST['num30']<0)
echo "<div class='resultado'>Negativo</div>";
else
echo "<div class='resultado'>Zero</div>";
}
?>
</form>

</body>
</html>
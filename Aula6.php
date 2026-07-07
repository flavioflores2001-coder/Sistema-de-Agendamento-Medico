<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Atividades 52 a 56</title>

<style>
body{
    font-family:Arial;
    background:#f2f2f2;
    padding:20px;
}
h1{
    text-align:center;
}
h2{
    background:#333;
    color:white;
    padding:10px;
}
form{
    background:white;
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
    margin-top:10px;
    color:blue;
    font-weight:bold;
}
</style>

</head>
<body>

<h1>Atividades 52 a 56</h1>

<!-- ==================== 52 ==================== -->

<form method="post">

<h2>52 - Soma de 1 até N</h2>

<input type="number" name="n52" placeholder="Digite N">

<button type="submit" name="at52">Executar</button>

<?php

if(isset($_POST["at52"])){

$n=$_POST["n52"];

$soma=0;

for($i=1;$i<=$n;$i++){

$soma+=$i;

}

echo "<div class='resultado'>A soma é: $soma</div>";

}

?>

</form>

<!-- ==================== 53 ==================== -->

<form method="post">

<h2>53 - Soma dos números pares de 1 a 100</h2>

<button type="submit" name="at53">Executar</button>

<?php

if(isset($_POST["at53"])){

$soma=0;

for($i=2;$i<=100;$i+=2){

$soma+=$i;

}

echo "<div class='resultado'>Soma = $soma</div>";

}

?>

</form>

<!-- ==================== 54 ==================== -->

<form method="post">

<h2>54 - Potência utilizando repetição</h2>

<input type="number" name="base" placeholder="Base">

<input type="number" name="expoente" placeholder="Expoente">

<button type="submit" name="at54">Executar</button>

<?php

if(isset($_POST["at54"])){

$base=$_POST["base"];

$expo=$_POST["expoente"];

$resultado=1;

for($i=1;$i<=$expo;$i++){

$resultado*=$base;

}

echo "<div class='resultado'>$base<sup>$expo</sup> = $resultado</div>";

}

?>

</form>

<!-- ==================== 55 ==================== -->

<form method="post">

<h2>55 - Número Primo</h2>

<input type="number" name="num55" placeholder="Digite um número">

<button type="submit" name="at55">Executar</button>

<?php

if(isset($_POST["at55"])){

$n=$_POST["num55"];

$primo=true;

if($n<2){

$primo=false;

}else{

for($i=2;$i<$n;$i++){

if($n%$i==0){

$primo=false;

break;

}

}

}

echo "<div class='resultado'>";

if($primo)

echo "O número $n é primo.";

else

echo "O número $n não é primo.";

echo "</div>";

}

?>

</form>

<!-- ==================== 56 ==================== -->

<form method="post">

<h2>56 - Primos menores que N</h2>

<input type="number" name="num56" placeholder="Digite N">

<button type="submit" name="at56">Executar</button>

<?php

if(isset($_POST["at56"])){

$n=$_POST["num56"];

echo "<div class='resultado'>";

echo "Primos menores que $n:<br><br>";

for($i=2;$i<$n;$i++){

$primo=true;

for($j=2;$j<$i;$j++){

if($i%$j==0){

$primo=false;

break;

}

}

if($primo){

echo $i." ";

}

}

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
<title>Atividades 57 a 60</title>

<style>
body{
    font-family:Arial;
    background:#f2f2f2;
    padding:20px;
}
h1{
    text-align:center;
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

<h1>Atividades 57 a 60</h1>

<!-- ===================== 57 ===================== -->

<form method="post">

<h2>57 - Primeiros N números primos</h2>

<input type="number" name="n57" placeholder="Digite N">

<button type="submit" name="at57">Executar</button>

<?php

if(isset($_POST["at57"])){

$qtd=$_POST["n57"];

$contador=0;
$num=2;

echo "<div class='resultado'>";

while($contador<$qtd){

$primo=true;

for($i=2;$i<$num;$i++){

if($num%$i==0){

$primo=false;
break;

}

}

if($primo){

echo $num." ";
$contador++;

}

$num++;

}

echo "</div>";

}

?>

</form>

<!-- ===================== 58 ===================== -->

<form method="post">

<h2>58 - Primeiros N números primos (novamente)</h2>

<input type="number" name="n58" placeholder="Digite N">

<button type="submit" name="at58">Executar</button>

<?php

if(isset($_POST["at58"])){

$qtd=$_POST["n58"];

$contador=0;
$num=2;

echo "<div class='resultado'>";

while($contador<$qtd){

$primo=true;

for($i=2;$i<$num;$i++){

if($num%$i==0){

$primo=false;
break;

}

}

if($primo){

echo $num." ";
$contador++;

}

$num++;

}

echo "</div>";

}

?>

</form>

<!-- ===================== 59 ===================== -->

<form method="post">

<h2>59 - Números entre A e B</h2>

<input type="number" name="a59" placeholder="Número A">

<input type="number" name="b59" placeholder="Número B">

<button type="submit" name="at59">Executar</button>

<?php

if(isset($_POST["at59"])){

$a=$_POST["a59"];
$b=$_POST["b59"];

echo "<div class='resultado'>";

if($a<$b){

for($i=$a+1;$i<$b;$i++){

echo $i." ";

}

}elseif($a>$b){

for($i=$a-1;$i>$b;$i--){

echo $i." ";

}

}else{

echo "Os números são iguais.";

}

echo "</div>";

}

?>

</form>

<!-- ===================== 60 ===================== -->

<form method="post">

<h2>60 - Soma dos números positivos</h2>

<p>Digite vários números separados por espaço. O cálculo para no primeiro número negativo.</p>

<input type="text" name="lista60" placeholder="Ex.: 10 5 8 2 -1 9">

<button type="submit" name="at60">Executar</button>

<?php

if(isset($_POST["at60"])){

$numeros=explode(" ",trim($_POST["lista60"]));

$soma=0;

foreach($numeros as $n){

$n=(int)$n;

if($n<0){

break;

}

$soma+=$n;

}

echo "<div class='resultado'>";

echo "Soma dos positivos: ".$soma;

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
<title>Atividades 61 a 71</title>

<style>
body{
    font-family:Arial;
    background:#f2f2f2;
    padding:20px;
}
h1{
    text-align:center;
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

<h1>Atividades 61 a 71</h1>

<!-- 61 -->

<form method="post">

<h2>61 - Sequência de Fibonacci</h2>

<input type="number" name="num61" placeholder="Digite um número">

<button name="at61">Executar</button>

<?php

if(isset($_POST["at61"])){

$n=$_POST["num61"];

$a=0;
$b=1;

echo "<div class='resultado'>";

while($a<=$n){

echo $a." ";

$c=$a+$b;
$a=$b;
$b=$c;

}

echo "</div>";

}

?>

</form>

<!-- 62 -->

<form method="post">

<h2>62 - Média até encontrar zero</h2>

<p>Digite vários números separados por espaço. O cálculo termina quando encontrar 0.</p>

<input type="text" name="lista62" placeholder="10 5 8 3 0">

<button name="at62">Executar</button>

<?php

if(isset($_POST["at62"])){

$numeros=explode(" ",trim($_POST["lista62"]));

$soma=0;
$qtd=0;

foreach($numeros as $n){

$n=(float)$n;

if($n==0)
break;

$soma+=$n;
$qtd++;

}

echo "<div class='resultado'>";

if($qtd>0)
echo "Média = ".($soma/$qtd);
else
echo "Nenhum número válido.";

echo "</div>";

}

?>

</form>

<!-- 64 -->

<form method="post">

<h2>64 - Quantidade de Vogais</h2>

<input type="text" name="frase64">

<button name="at64">Executar</button>

<?php

if(isset($_POST["at64"])){

preg_match_all("/[aeiouAEIOUáàãâéêíóôõú]/u",$_POST["frase64"],$v);

echo "<div class='resultado'>";

echo "Quantidade de vogais: ".count($v[0]);

echo "</div>";

}

?>

</form>

<!-- 65 -->

<form method="post">

<h2>65 - Frase ao contrário</h2>

<input type="text" name="frase65">

<button name="at65">Executar</button>

<?php

if(isset($_POST["at65"])){

echo "<div class='resultado'>";

echo strrev($_POST["frase65"]);

echo "</div>";

}

?>

</form>

<!-- 66 -->

<form method="post">

<h2>66 - Palíndromo</h2>

<input type="text" name="texto66">

<button name="at66">Executar</button>

<?php

if(isset($_POST["at66"])){

$txt=strtolower(str_replace(" ","",$_POST["texto66"]));

echo "<div class='resultado'>";

if($txt==strrev($txt))
echo "É um palíndromo.";
else
echo "Não é um palíndromo.";

echo "</div>";

}

?>

</form>

<!-- 67 -->

<form method="post">

<h2>67 - Divisores de um número</h2>

<input type="number" name="num67">

<button name="at67">Executar</button>

<?php

if(isset($_POST["at67"])){

$n=$_POST["num67"];

echo "<div class='resultado'>";

for($i=1;$i<=$n;$i++){

if($n%$i==0)
echo $i." ";

}

echo "</div>";

}

?>

</form>

<!-- 68 -->

<form method="post">

<h2>68 - MMC entre dois números</h2>

<input type="number" name="a68">

<input type="number" name="b68">

<button name="at68">Executar</button>

<?php

if(isset($_POST["at68"])){

$a=$_POST["a68"];
$b=$_POST["b68"];

$maior=max($a,$b);

while(true){

if($maior%$a==0 && $maior%$b==0){

$mmc=$maior;
break;

}

$maior++;

}

echo "<div class='resultado'>MMC = $mmc</div>";

}

?>

</form>

<!-- 71 -->

<form method="post">

<h2>71 - Soma dos elementos do vetor</h2>

<p>Digite números separados por espaço.</p>

<input type="text" name="vetor71" placeholder="1 2 3 4 5">

<button name="at71">Executar</button>

<?php

if(isset($_POST["at71"])){

$vetor=explode(" ",trim($_POST["vetor71"]));

$soma=0;

foreach($vetor as $n){

$soma+=(int)$n;

}

echo "<div class='resultado'>";

echo "Soma = ".$soma;

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
<title>Atividades 72 a 81</title>

<style>
body{
    font-family:Arial;
    background:#f2f2f2;
    padding:20px;
}
h1{text-align:center;}
h2{
    background:#333;
    color:white;
    padding:10px;
}
form{
    background:white;
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

<h1>Atividades 72 a 81</h1>

<!--72-->

<form method="post">

<h2>72 - Maior elemento do vetor</h2>

<input type="text" name="vet72" placeholder="1 5 9 3">

<button name="at72">Executar</button>

<?php
if(isset($_POST["at72"])){

$vet=explode(" ",trim($_POST["vet72"]));

echo "<div class='resultado'>Maior: ".max($vet)."</div>";

}
?>

</form>

<!--73-->

<form method="post">

<h2>73 - Média do vetor</h2>

<input type="text" name="vet73">

<button name="at73">Executar</button>

<?php
if(isset($_POST["at73"])){

$vet=explode(" ",trim($_POST["vet73"]));

echo "<div class='resultado'>Média = ".array_sum($vet)/count($vet)."</div>";

}
?>

</form>

<!--74-->

<form method="post">

<h2>74 - Soma de dois vetores</h2>

<input type="text" name="v1" placeholder="1 2 3">

<input type="text" name="v2" placeholder="4 5 6">

<button name="at74">Executar</button>

<?php

if(isset($_POST["at74"])){

$a=explode(" ",trim($_POST["v1"]));
$b=explode(" ",trim($_POST["v2"]));

echo "<div class='resultado'>";

for($i=0;$i<count($a);$i++){

echo ($a[$i]+$b[$i])." ";

}

echo "</div>";

}

?>

</form>

<!--75-->

<form method="post">

<h2>75 - Vetor em ordem crescente</h2>

<input type="text" name="vet75">

<button name="at75">Executar</button>

<?php

if(isset($_POST["at75"])){

$vet=explode(" ",trim($_POST["vet75"]));

$ok=true;

for($i=0;$i<count($vet)-1;$i++){

if($vet[$i]>$vet[$i+1]){

$ok=false;
break;

}

}

echo "<div class='resultado'>";

echo $ok?"Está em ordem crescente":"Não está em ordem crescente";

echo "</div>";

}

?>

</form>

<!--76-->

<form method="post">

<h2>76 - Vetor invertido</h2>

<input type="text" name="vet76">

<button name="at76">Executar</button>

<?php

if(isset($_POST["at76"])){

$vet=array_reverse(explode(" ",trim($_POST["vet76"])));

echo "<div class='resultado'>";

foreach($vet as $v){

echo $v." ";

}

echo "</div>";

}

?>

</form>

<!--77-->

<form method="post">

<h2>77 - Segundo maior elemento</h2>

<input type="text" name="vet77">

<button name="at77">Executar</button>

<?php

if(isset($_POST["at77"])){

$vet=explode(" ",trim($_POST["vet77"]));

rsort($vet);

echo "<div class='resultado'>Segundo maior: ".$vet[1]."</div>";

}

?>

</form>

<!--78-->

<form method="post">

<h2>78 - Quantidade de ocorrências</h2>

<input type="text" name="vet78" placeholder="1 2 2 3 2">

<input type="number" name="num78" placeholder="Número">

<button name="at78">Executar</button>

<?php

if(isset($_POST["at78"])){

$vet=explode(" ",trim($_POST["vet78"]));

$qtd=0;

foreach($vet as $v){

if($v==$_POST["num78"])
$qtd++;

}

echo "<div class='resultado'>";

echo "Aparece $qtd vez(es).";

echo "</div>";

}

?>

</form>

<!--79-->

<form method="post">

<h2>79 - Multiplicação de vetores</h2>

<input type="text" name="va">

<input type="text" name="vb">

<button name="at79">Executar</button>

<?php

if(isset($_POST["at79"])){

$a=explode(" ",trim($_POST["va"]));
$b=explode(" ",trim($_POST["vb"]));

echo "<div class='resultado'>";

for($i=0;$i<count($a);$i++){

echo ($a[$i]*$b[$i])." ";

}

echo "</div>";

}

?>

</form>

<!--80-->

<form method="post">

<h2>80 - Todos são pares?</h2>

<input type="text" name="vet80">

<button name="at80">Executar</button>

<?php

if(isset($_POST["at80"])){

$vet=explode(" ",trim($_POST["vet80"]));

$pares=true;

foreach($vet as $v){

if($v%2!=0){

$pares=false;
break;

}

}

echo "<div class='resultado'>";

echo $pares?"Todos são pares":"Nem todos são pares";

echo "</div>";

}

?>

</form>

<!--81-->

<form method="post">

<h2>81 - Soma da diagonal principal (3x3)</h2>

<p>Digite os 9 números separados por espaço.</p>

<input type="text" name="mat81" placeholder="1 2 3 4 5 6 7 8 9">

<button name="at81">Executar</button>

<?php

if(isset($_POST["at81"])){

$m=explode(" ",trim($_POST["mat81"]));

$soma=$m[0]+$m[4]+$m[8];

echo "<div class='resultado'>";

echo "Soma da diagonal principal = ".$soma;

echo "</div>";

}

?>

</form>

</body>
</html>
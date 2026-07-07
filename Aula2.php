

<?php
    # cuidado ao criar varaveis vazias
    $nome = "Renato";
    #$nome = " ";
    echo $nome;
    # define a variavel como global (essa cariavel pode ser acessada que qualquer lugar do codigo)
    $GLOBALS['nome'] = "Renato";
    echo $GLOBALS['nome'];


    # cria constantes (Não podem ser modificadas)
    const novonome = "Renato";
    define($nome, "Renato");


    /************************
     * Operadores matemáticos
    ************************
    Adição -> +
    Subtração -> -
    Divisão -> /
    Multiplação -> *
    Resto de divisão -> %
    Exponenciação -> **


    */
    echo "<hr>";
    $a = 10;
    $b = 5;


    echo "Valor:", $a;
    echo "<hr>";
    echo "Valor:", $b;


    # soma
    $c = $a + $b;
    echo "<hr>";
    echo "Resultado:", $c;


    # subtração
    $c = $a - $b;
    echo "<hr>";
    echo "Resultado:", $c;
     
    # multiplicação
    $c = $a * $b;
    echo "<hr>";
    echo "Resultado:", $c;


    # divisao
    $c = $a / $b;
    echo "<hr>";
    echo "Resultado:", $c;
    echo "<hr>";
    # Arrays
    # Os arrays são coleções de dados ou estruturas de dados
    $Nomes = ["Diego", "Vitor", "Leonardo", "Joao", "Joarez"];


    echo $Nomes[2];
   


echo "<hr>";
$numeros = ["347390", "308662130", "34362349"];


    echo $numeros[0];
    echo "<hr>";
   
 
    $idade = 17;


    if ($idade >= 18) {
        print "Você é maior de idade.";
    } else {
        print "Você é menor de idade.";
    }
    echo "<hr>";


    $idade = 17;
if ($idade >= 18) {
    print "voce é maior de idade";
}
if ($idade < 18) {
    print "vocé é menor de idade";
}
echo "<hr>";


$frutas = [
    "banana" => "estragado",
    "maça" => "nova",
    "abacaxi" => "estragando",
];


foreach ($frutas as $chave => $valor) {
    Print $chave . ": " . $valor . "<br>";
}
echo "<hr>";


print "by F4S1N.dll";

#TESTE DE LOGIN REALIZADO POR MIM
$usuario = "admin";
$senha = "12345";


echo "<hr>";


if ($usuario == "admin") {


    if ($senha == "12345") {
        echo "Login realizado com sucesso!";
    } else {
        echo "Senha incorreta";
    }


} else {
    echo "Usuário incorreto";
}

echo "<hr>";

######## testando varias condições usando elseif #######
    # quando queremos varias condições
    echo "<hr>";
    $Nota = 7.5;

    if($Nota >= 9){
        Echo "Excelente";
    }

    elseif($Nota >= 7){
        echo "Aprovado";
    }

    elseif($Nota >= 5){
        echo "Recuperação";
    }

    else{
        echo "Reprovado";
    }

    # usando swith para validar varias condições
    $dia = 6;
    echo "<hr>";
    switch ($dia) {
        case 1: # bloco que é executado conforme a variavel
            echo "Domingo";
            break;  # para a execução

        case 2:
            echo "Segunda-feira";
            break;

        case 3:
            echo "Terça-feira";
            break;  
       
        # 1. Sera executado sempre se não haver break
        # 2. Se o valor estiver fora dos case
        default:    
            echo "Dia invalido";
    }  
   
    $usuario = "admin";
    $senha = "1234";

    echo "<hr>";

    if($usuario == "admin"){
        if($senha == "1234"){
            echo "Bem vindo";
        }else{
            echo "Senha errada";
        }
    }else{
        echo "Usuario errado";
    }

    echo "<hr>";
    # logica ou - um numero somado com ele mesmo e ele mesmo
    # ou
    if($usuario == "admin" || $senha == "1234"){
        echo "Bem vindo";
    }else{
        echo "Usuario ou senha errado";
    }
    # logica ou - um numero multiplicado por zero e zero
    # and
    echo "<hr>";
    if($usuario == "admin" && $senha == "1234"){
        echo "Bem vindo";
    }else{
        echo "Usuario ou senha errado";
    }
   
    echo "<hr>";
    # negação
    $Interruptor = true;
    echo $Interruptor;
   
    # porta logica not
    echo !($Interruptor);
print "day one";
    echo "<hr>";


?> 
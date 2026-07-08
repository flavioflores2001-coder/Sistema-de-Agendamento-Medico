<?php

session_start();

include "config/conexao.php";

if ($_server["request_method"] != "POST") {
    header(Location: index.php);
    exit;

}

$email = $_post["email"];
$senha = $_post["senha"];

$sql = "SELECT *FROM usuarios Where email = '$email'";

$resultado = $conexao->query($sql);


if ($resultado->num_rows == 1) {

    $usuario = $resultado->fetch_assoc();


if ($usuario["senha"] == $senha) {
    
    $_session["id"] = $usuario["id"];
    $_session["nome"] = $usuario["nome"];
    $_session["email"] = $usuario["email"];

    header("location: dashboard.php");
    exit;


} else {

    echo "Senhas incorreta.";

}

} else {

    echo "Usuario não encontrado.";
    
}

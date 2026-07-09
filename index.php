<?php
/*
|--------------------------------------------------------------------------
| Página: index.php
|--------------------------------------------------------------------------
| Objetivo:
| Exibir a tela de login.
|
| Responsabilidades:
| - Iniciar a sessão.
| - Verificar se o usuário já está autenticado.
| - Exibir mensagens de erro do login.
|--------------------------------------------------------------------------
*/

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

if (isset($_SESSION["id"])) {
    header("Location: dashboard.php");
    exit;
}

if (isset($_SESSION["erro"])) {

    echo "<p style='color:red'>" . $_SESSION["erro"] . "</p>";

    unset($_SESSION["erro"]);

}


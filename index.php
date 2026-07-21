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

?>

<!-- layout temporario para teste -->

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Login - Sistema de Agendamento</title>
</head>

<body>

<h1>Login</h1>

<!-- nao apague a linha abaixo codigo de apresentação de erro -->

<?php
if (isset($_SESSION["erro"])) {

    echo "<p style='color:red'>" . $_SESSION["erro"] . "</p>";

    unset($_SESSION["erro"]);

}

?>

<!-- layout temporario para teste -->
<form action="login.php" method="POST">

    <label>E-mail:</label><br>
    <input type="email" name="email" required>

    <br><br>


    <label>Senha:</label><br>
    <input type="password" name="senha" required>


    <br><br>


    <button type="submit">
        Entrar
    </button>


</form>


</body>

</html>
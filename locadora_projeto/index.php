<?php
session_start();
if (!empty($_SESSION['usuario_id'])) {
    header('Location: view/filme/home.php');
} else {
    header('Location: view/auth/login.php');
}
exit;

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Enviar Email</title>
</head>
<body>

<h2>Enviar Email</h2>

<form action="enviar.php" method="POST">
    <label>Nome:</label><br>
    <input type="text" name="nome" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Mensagem:</label><br>
    <textarea name="mensagem" required></textarea><br><br>

    <button type="submit">Enviar</button>
</form>

</body>
</html>
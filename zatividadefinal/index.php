<?php session_start(); ?>

<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body { background:#f5f6fa; font-family:Arial; }
.card-box {
    background:white;
    padding:25px;
    border-radius:12px;
    box-shadow:0px 5px 15px rgba(0,0,0,0.1);
}
</style>
</head>

<body>

<div class="container" style="max-width:400px; margin-top:100px;">
<div class="card-box">

<h3 class="text-center mb-4">🔐 Login</h3>

<form action="Services/login.php" method="post">
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control">
    </div>

    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="senha" class="form-control">
    </div>

    <button class="btn btn-primary w-100">Entrar</button>
</form>

<a href="cadastro_usuario.php" class="btn btn-success w-100 mt-2">Criar conta</a>

</div>
</div>

</body>
</html>
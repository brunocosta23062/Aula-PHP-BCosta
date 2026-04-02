<?php
session_start();
if (empty($_SESSION['usuario_id'])) {
    header('Location: ../view/auth/login.php'); exit;
}
require_once __DIR__ . '/../controller/FilmeController.php';
$ctrl = new FilmeController();
$ctrl->atualizar();

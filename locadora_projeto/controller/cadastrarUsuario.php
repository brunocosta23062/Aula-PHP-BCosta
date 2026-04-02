<?php
session_start();
require_once __DIR__ . '/../controller/UsuarioController.php';
$ctrl = new UsuarioController();
$ctrl->cadastrar();

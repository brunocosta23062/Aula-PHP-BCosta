<?php
require_once __DIR__ . '/../dao/UsuarioDAO.php';

/**
 * Controller: AuthController
 * Responsável pelo login e logout do sistema.
 */
class AuthController {
    private UsuarioDAO $usuarioDAO;

    public function __construct() {
        $this->usuarioDAO = new UsuarioDAO();
    }

    /** Processa o formulário de login */
    public function login(): void {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->redirecionar('../view/auth/login.php');
            return;
        }

        $email = trim($_POST['email'] ?? '');
        $senha = $_POST['senha'] ?? '';

        // Validações básicas
        if (empty($email) || empty($senha)) {
            $_SESSION['erro'] = 'Preencha todos os campos.';
            $this->redirecionar('../view/auth/login.php');
            return;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['erro'] = 'E-mail inválido.';
            $this->redirecionar('../view/auth/login.php');
            return;
        }

        try {
            $usuario = $this->usuarioDAO->buscarPorEmail($email);

            if ($usuario === null || !password_verify($senha, $usuario->getSenha())) {
                $_SESSION['erro'] = 'E-mail ou senha incorretos.';
                $this->redirecionar('../view/auth/login.php');
                return;
            }

            // Registra a sessão
            $_SESSION['usuario_id']   = $usuario->getId();
            $_SESSION['usuario_nome'] = $usuario->getNome();
            $_SESSION['usuario_email']= $usuario->getEmail();
            $_SESSION['sucesso']      = 'Bem-vindo, ' . $usuario->getNome() . '!';

            $this->redirecionar('../view/filme/home.php');

        } catch (Exception $e) {
            $_SESSION['erro'] = 'Erro interno: ' . $e->getMessage();
            $this->redirecionar('../view/auth/login.php');
        }
    }

    /** Encerra a sessão e redireciona para o login */
    public function logout(): void {
        session_unset();
        session_destroy();
        header('Location: ../view/auth/login.php');
        exit;
    }

    /** Helper de redirecionamento */
    private function redirecionar(string $caminho): void {
        header("Location: {$caminho}");
        exit;
    }
}

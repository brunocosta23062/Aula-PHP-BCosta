<?php
require_once __DIR__ . '/../dao/UsuarioDAO.php';
require_once __DIR__ . '/../model/Usuario.php';

/**
 * Controller: UsuarioController
 * Responsável pelo cadastro de usuários e envio de e-mail de confirmação.
 */
class UsuarioController {
    private UsuarioDAO $usuarioDAO;

    public function __construct() {
        $this->usuarioDAO = new UsuarioDAO();
    }

    /** Processa o formulário de cadastro de usuário */
    public function cadastrar(): void {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->redirecionar('../view/usuario/cadastro.php');
            return;
        }

        $nome     = trim($_POST['nome']     ?? '');
        $email    = trim($_POST['email']    ?? '');
        $senha    = $_POST['senha']         ?? '';
        $confirma = $_POST['confirma_senha'] ?? '';
        $telefone = trim($_POST['telefone'] ?? '');

        try {
            // Validações
            if (empty($nome) || empty($email) || empty($senha) || empty($telefone)) {
                throw new RuntimeException('Todos os campos são obrigatórios.');
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                throw new RuntimeException('E-mail inválido.');
            }
            if ($senha !== $confirma) {
                throw new RuntimeException('As senhas não coincidem.');
            }
            if (strlen($senha) < 6) {
                throw new RuntimeException('A senha deve ter no mínimo 6 caracteres.');
            }
            if ($this->usuarioDAO->emailExiste($email)) {
                throw new RuntimeException('Este e-mail já está cadastrado.');
            }

            // Cria o model
            $usuario = new Usuario();
            $usuario->setNome($nome);
            $usuario->setEmail($email);
            $usuario->setSenha($senha);
            $usuario->setTelefone($telefone);

            // Persiste no banco
            if (!$this->usuarioDAO->inserir($usuario)) {
                throw new RuntimeException('Não foi possível cadastrar o usuário. Tente novamente.');
            }

            // Envia e-mail de confirmação
            $this->enviarEmailConfirmacao($email, $nome);

            $_SESSION['sucesso'] = 'Cadastro realizado com sucesso! Verifique seu e-mail e faça o login.';
            $this->redirecionar('../view/auth/login.php');

        } catch (Exception $e) {
            $_SESSION['erro'] = $e->getMessage();
            $this->redirecionar('../view/usuario/cadastro.php');
        }
    }

    /**
     * Envia e-mail de confirmação de cadastro.
     * Em produção, configure um servidor SMTP (ex.: PHPMailer + Gmail/SendGrid).
     * Aqui usamos a função nativa mail() do PHP.
     */
    private function enviarEmailConfirmacao(string $email, string $nome): void {
        $assunto  = '=?UTF-8?B?' . base64_encode('Bem-vindo à Locadora de Filmes!') . '?=';
        $mensagem = "
        <html>
        <head><meta charset='UTF-8'></head>
        <body style='font-family:Arial,sans-serif;background:#1a1a2e;color:#eee;padding:30px;'>
          <div style='max-width:560px;margin:auto;background:#16213e;border-radius:12px;padding:30px;'>
            <h2 style='color:#e94560;'>🎬 Locadora de Filmes</h2>
            <p>Olá, <strong>{$nome}</strong>!</p>
            <p>Seu cadastro foi realizado com sucesso. Agora você pode acessar o sistema com seu e-mail e senha.</p>
            <a href='http://localhost/locadora_projeto/view/auth/login.php'
               style='display:inline-block;margin-top:15px;padding:12px 24px;background:#e94560;
                      color:#fff;text-decoration:none;border-radius:8px;'>
               Acessar o Sistema
            </a>
            <p style='margin-top:20px;font-size:12px;color:#aaa;'>Se você não criou esta conta, ignore este e-mail.</p>
          </div>
        </body>
        </html>";

        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=UTF-8\r\n";
        $headers .= "From: Locadora de Filmes <noreply@locadora.com>\r\n";

        // Tenta enviar; falha silenciosamente (não bloqueia o cadastro)
        @mail($email, $assunto, $mensagem, $headers);
    }

    private function redirecionar(string $caminho): void {
        header("Location: {$caminho}");
        exit;
    }
}

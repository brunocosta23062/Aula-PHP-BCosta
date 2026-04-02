<?php
/**
 * Model: Usuario
 * Todas as propriedades são privadas com Getters e Setters
 */
class Usuario {
    private ?int    $id        = null;
    private string  $nome      = '';
    private string  $email     = '';
    private string  $senha     = '';
    private string  $telefone  = '';
    private ?string $criadoEm  = null;

    // ── Getters ────────────────────────────────────────
    public function getId(): ?int      { return $this->id; }
    public function getNome(): string  { return $this->nome; }
    public function getEmail(): string { return $this->email; }
    public function getSenha(): string { return $this->senha; }
    public function getTelefone(): string { return $this->telefone; }
    public function getCriadoEm(): ?string { return $this->criadoEm; }

    // ── Setters ────────────────────────────────────────
    public function setId(?int $id): void { $this->id = $id; }

    public function setNome(string $nome): void {
        $nome = trim($nome);
        if (empty($nome)) throw new InvalidArgumentException('O nome não pode ser vazio.');
        $this->nome = $nome;
    }

    public function setEmail(string $email): void {
        $email = trim($email);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException('E-mail inválido.');
        }
        $this->email = $email;
    }

    public function setSenha(string $senha): void {
        if (strlen($senha) < 6) {
            throw new InvalidArgumentException('A senha deve ter pelo menos 6 caracteres.');
        }
        $this->senha = $senha;
    }

    public function setTelefone(string $telefone): void {
        $telefone = trim($telefone);
        if (empty($telefone)) throw new InvalidArgumentException('O telefone não pode ser vazio.');
        $this->telefone = $telefone;
    }

    public function setCriadoEm(?string $criadoEm): void { $this->criadoEm = $criadoEm; }

    // Cria uma instância a partir de array (resultado do banco)
    public static function fromArray(array $data): self {
        $u = new self();
        $u->setId((int)$data['id']);
        $u->setNome($data['nome']);
        $u->setEmail($data['email']);
        $u->senha    = $data['senha']; // hash, não valida tamanho
        $u->setTelefone($data['telefone']);
        $u->setCriadoEm($data['criado_em'] ?? null);
        return $u;
    }
}

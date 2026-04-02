<?php
require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../model/Usuario.php';

/**
 * DAO: UsuarioDAO
 * Centraliza todas as instruções SQL relacionadas a usuários.
 */
class UsuarioDAO {
    private PDO $pdo;

    public function __construct() {
        $this->pdo = Database::getInstance()->getConnection();
    }

    /** Insere um novo usuário no banco */
    public function inserir(Usuario $usuario): bool {
        $sql  = "INSERT INTO usuarios (nome, email, senha, telefone) VALUES (:nome, :email, :senha, :telefone)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            ':nome'     => $usuario->getNome(),
            ':email'    => $usuario->getEmail(),
            ':senha'    => password_hash($usuario->getSenha(), PASSWORD_BCRYPT),
            ':telefone' => $usuario->getTelefone(),
        ]);
    }

    /** Busca usuário por e-mail */
    public function buscarPorEmail(string $email): ?Usuario {
        $sql  = "SELECT * FROM usuarios WHERE email = :email LIMIT 1";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':email' => $email]);
        $row  = $stmt->fetch();
        return $row ? Usuario::fromArray($row) : null;
    }

    /** Busca usuário por ID */
    public function buscarPorId(int $id): ?Usuario {
        $sql  = "SELECT * FROM usuarios WHERE id = :id LIMIT 1";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':id' => $id]);
        $row  = $stmt->fetch();
        return $row ? Usuario::fromArray($row) : null;
    }

    /** Verifica se e-mail já está cadastrado */
    public function emailExiste(string $email): bool {
        $sql  = "SELECT COUNT(*) FROM usuarios WHERE email = :email";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':email' => $email]);
        return (int)$stmt->fetchColumn() > 0;
    }

    /** Lista todos os usuários */
    public function listarTodos(): array {
        $sql  = "SELECT * FROM usuarios ORDER BY nome ASC";
        $stmt = $this->pdo->query($sql);
        $rows = $stmt->fetchAll();
        return array_map([Usuario::class, 'fromArray'], $rows);
    }
}

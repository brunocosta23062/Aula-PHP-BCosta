<?php
/**
 * Classe de conexão ao banco de dados (Singleton)
 * Utiliza PDO para conexão segura com MySQL
 */
class Database {
    private static $instance = null;
    private $connection;

    // Configurações privadas de conexão
    private $host     = 'localhost';
    private $dbname   = 'locadora';
    private $username = 'root';
    private $password = '';
    private $charset  = 'utf8mb4';

    // Construtor privado (Singleton)
    private function __construct() {
        $dsn = "mysql:host={$this->host};dbname={$this->dbname};charset={$this->charset}";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        try {
            $this->connection = new PDO($dsn, $this->username, $this->password, $options);
        } catch (PDOException $e) {
            die(json_encode(['erro' => 'Falha na conexão com o banco de dados: ' . $e->getMessage()]));
        }
    }

    // Retorna a instância única da classe
    public static function getInstance(): Database {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    // Retorna o objeto PDO de conexão
    public function getConnection(): PDO {
        return $this->connection;
    }

    // Impede clonagem e deserialização
    private function __clone() {}
    public function __wakeup() {}
}

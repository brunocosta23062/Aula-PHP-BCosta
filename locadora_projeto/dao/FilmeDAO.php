<?php
require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../model/Filme.php';

/**
 * DAO: FilmeDAO
 * Centraliza todas as instruções SQL relacionadas a filmes.
 */
class FilmeDAO {
    private PDO $pdo;

    public function __construct() {
        $this->pdo = Database::getInstance()->getConnection();
    }

    /** Lista todos os filmes */
    public function listarTodos(): array {
        $sql  = "SELECT * FROM filmes ORDER BY titulo ASC";
        $stmt = $this->pdo->query($sql);
        $rows = $stmt->fetchAll();
        return array_map([Filme::class, 'fromArray'], $rows);
    }

    /** Busca filme por ID */
    public function buscarPorId(int $id): ?Filme {
        $sql  = "SELECT * FROM filmes WHERE id = :id LIMIT 1";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':id' => $id]);
        $row  = $stmt->fetch();
        return $row ? Filme::fromArray($row) : null;
    }

    /** Insere um novo filme */
    public function inserir(Filme $filme): bool {
        $sql = "INSERT INTO filmes (titulo, ano, genero, classificacao, diretor, sinopse, pessoa_alugou, status)
                VALUES (:titulo, :ano, :genero, :classificacao, :diretor, :sinopse, :pessoa_alugou, :status)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            ':titulo'        => $filme->getTitulo(),
            ':ano'           => $filme->getAno(),
            ':genero'        => $filme->getGenero(),
            ':classificacao' => $filme->getClassificacao(),
            ':diretor'       => $filme->getDiretor(),
            ':sinopse'       => $filme->getSinopse(),
            ':pessoa_alugou' => $filme->getPessoaAlugou(),
            ':status'        => $filme->getStatus(),
        ]);
    }

    /** Atualiza um filme existente */
    public function atualizar(Filme $filme): bool {
        $sql = "UPDATE filmes SET
                    titulo        = :titulo,
                    ano           = :ano,
                    genero        = :genero,
                    classificacao = :classificacao,
                    diretor       = :diretor,
                    sinopse       = :sinopse,
                    pessoa_alugou = :pessoa_alugou,
                    status        = :status
                WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            ':titulo'        => $filme->getTitulo(),
            ':ano'           => $filme->getAno(),
            ':genero'        => $filme->getGenero(),
            ':classificacao' => $filme->getClassificacao(),
            ':diretor'       => $filme->getDiretor(),
            ':sinopse'       => $filme->getSinopse(),
            ':pessoa_alugou' => $filme->getPessoaAlugou(),
            ':status'        => $filme->getStatus(),
            ':id'            => $filme->getId(),
        ]);
    }

    /** Remove um filme pelo ID */
    public function deletar(int $id): bool {
        $sql  = "DELETE FROM filmes WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([':id' => $id]);
    }

    /** Pesquisa filmes por título */
    public function pesquisarPorTitulo(string $termo): array {
        $sql  = "SELECT * FROM filmes WHERE titulo LIKE :termo ORDER BY titulo ASC";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':termo' => "%{$termo}%"]);
        $rows = $stmt->fetchAll();
        return array_map([Filme::class, 'fromArray'], $rows);
    }
}

<?php
require_once __DIR__ . '/../dao/FilmeDAO.php';
require_once __DIR__ . '/../model/Filme.php';

/**
 * Controller: FilmeController
 * Responsável pelo CRUD de filmes.
 */
class FilmeController {
    private FilmeDAO $filmeDAO;

    public function __construct() {
        $this->filmeDAO = new FilmeDAO();
    }

    /** Lista todos os filmes */
    public function listar(): array {
        try {
            return $this->filmeDAO->listarTodos();
        } catch (Exception $e) {
            $_SESSION['erro'] = 'Erro ao carregar filmes: ' . $e->getMessage();
            return [];
        }
    }

    /** Busca filmes por título */
    public function pesquisar(string $termo): array {
        try {
            return $this->filmeDAO->pesquisarPorTitulo($termo);
        } catch (Exception $e) {
            $_SESSION['erro'] = 'Erro na pesquisa: ' . $e->getMessage();
            return [];
        }
    }

    /** Cadastra um novo filme */
    public function cadastrar(): void {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->redirecionar('../view/filme/cadastro.php');
            return;
        }

        try {
            $filme = $this->montarFilmeDoPost();
            if (!$this->filmeDAO->inserir($filme)) {
                throw new RuntimeException('Não foi possível cadastrar o filme. Tente novamente.');
            }
            $_SESSION['sucesso'] = 'Filme cadastrado com sucesso!';
            $this->redirecionar('../view/filme/home.php');
        } catch (Exception $e) {
            $_SESSION['erro'] = $e->getMessage();
            $this->redirecionar('../view/filme/cadastro.php');
        }
    }

    /** Carrega um filme para edição */
    public function carregarParaEdicao(int $id): ?Filme {
        try {
            $filme = $this->filmeDAO->buscarPorId($id);
            if ($filme === null) {
                $_SESSION['erro'] = 'Filme não encontrado.';
            }
            return $filme;
        } catch (Exception $e) {
            $_SESSION['erro'] = 'Erro ao carregar filme: ' . $e->getMessage();
            return null;
        }
    }

    /** Atualiza um filme */
    public function atualizar(): void {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->redirecionar('../view/filme/home.php');
            return;
        }

        $id = (int)($_POST['id'] ?? 0);
        if ($id <= 0) {
            $_SESSION['erro'] = 'ID inválido para edição.';
            $this->redirecionar('../view/filme/home.php');
            return;
        }

        try {
            $filme = $this->montarFilmeDoPost();
            $filme->setId($id);

            if (!$this->filmeDAO->atualizar($filme)) {
                throw new RuntimeException('Não foi possível atualizar o filme.');
            }
            $_SESSION['sucesso'] = 'Filme atualizado com sucesso!';
            $this->redirecionar('../view/filme/home.php');
        } catch (Exception $e) {
            $_SESSION['erro'] = $e->getMessage();
            $this->redirecionar("../view/filme/editar.php?id={$id}");
        }
    }

    /** Remove um filme */
    public function deletar(int $id): void {
        try {
            if ($id <= 0) throw new RuntimeException('ID inválido.');
            if (!$this->filmeDAO->deletar($id)) {
                throw new RuntimeException('Não foi possível excluir o filme.');
            }
            $_SESSION['sucesso'] = 'Filme excluído com sucesso!';
        } catch (Exception $e) {
            $_SESSION['erro'] = $e->getMessage();
        }
        $this->redirecionar('../view/filme/home.php');
    }

    /** Monta objeto Filme a partir do $_POST */
    private function montarFilmeDoPost(): Filme {
        $campos = ['titulo', 'ano', 'genero', 'classificacao', 'diretor', 'sinopse', 'status'];
        foreach ($campos as $campo) {
            if (empty(trim($_POST[$campo] ?? ''))) {
                throw new RuntimeException("O campo '{$campo}' é obrigatório.");
            }
        }

        $status = $_POST['status'];
        $pessoa = trim($_POST['pessoa_alugou'] ?? '');
        if ($status === 'alugado' && empty($pessoa)) {
            throw new RuntimeException("Informe quem alugou o filme quando o status for 'Alugado'.");
        }

        $filme = new Filme();
        $filme->setTitulo($_POST['titulo']);
        $filme->setAno((int)$_POST['ano']);
        $filme->setGenero($_POST['genero']);
        $filme->setClassificacao($_POST['classificacao']);
        $filme->setDiretor($_POST['diretor']);
        $filme->setSinopse($_POST['sinopse']);
        $filme->setPessoaAlugou($status === 'alugado' ? $pessoa : null);
        $filme->setStatus($status);
        return $filme;
    }

    private function redirecionar(string $caminho): void {
        header("Location: {$caminho}");
        exit;
    }
}

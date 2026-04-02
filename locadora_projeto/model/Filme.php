<?php
/**
 * Model: Filme
 * Todas as propriedades são privadas com Getters e Setters
 */
class Filme {
    private ?int    $id            = null;
    private string  $titulo        = '';
    private int     $ano           = 0;
    private string  $genero        = '';
    private string  $classificacao = '';
    private string  $diretor       = '';
    private string  $sinopse       = '';
    private ?string $pessoaAlugou  = null;
    private string  $status        = 'disponivel'; // 'disponivel' | 'alugado'
    private ?string $criadoEm      = null;
    private ?string $atualizadoEm  = null;

    // ── Getters ────────────────────────────────────────
    public function getId(): ?int              { return $this->id; }
    public function getTitulo(): string        { return $this->titulo; }
    public function getAno(): int              { return $this->ano; }
    public function getGenero(): string        { return $this->genero; }
    public function getClassificacao(): string { return $this->classificacao; }
    public function getDiretor(): string       { return $this->diretor; }
    public function getSinopse(): string       { return $this->sinopse; }
    public function getPessoaAlugou(): ?string { return $this->pessoaAlugou; }
    public function getStatus(): string        { return $this->status; }
    public function getCriadoEm(): ?string     { return $this->criadoEm; }
    public function getAtualizadoEm(): ?string { return $this->atualizadoEm; }

    // ── Setters ────────────────────────────────────────
    public function setId(?int $id): void { $this->id = $id; }

    public function setTitulo(string $titulo): void {
        $titulo = trim($titulo);
        if (empty($titulo)) throw new InvalidArgumentException('O título não pode ser vazio.');
        $this->titulo = $titulo;
    }

    public function setAno(int $ano): void {
        $anoAtual = (int)date('Y');
        if ($ano < 1888 || $ano > $anoAtual + 5) {
            throw new InvalidArgumentException("Ano inválido: {$ano}.");
        }
        $this->ano = $ano;
    }

    public function setGenero(string $genero): void {
        $genero = trim($genero);
        if (empty($genero)) throw new InvalidArgumentException('O gênero não pode ser vazio.');
        $this->genero = $genero;
    }

    public function setClassificacao(string $classificacao): void {
        $classificacao = trim($classificacao);
        if (empty($classificacao)) throw new InvalidArgumentException('A classificação não pode ser vazia.');
        $this->classificacao = $classificacao;
    }

    public function setDiretor(string $diretor): void {
        $diretor = trim($diretor);
        if (empty($diretor)) throw new InvalidArgumentException('O diretor não pode ser vazio.');
        $this->diretor = $diretor;
    }

    public function setSinopse(string $sinopse): void {
        $sinopse = trim($sinopse);
        if (empty($sinopse)) throw new InvalidArgumentException('A sinopse não pode ser vazia.');
        $this->sinopse = $sinopse;
    }

    public function setPessoaAlugou(?string $pessoa): void {
        $this->pessoaAlugou = ($pessoa !== null && trim($pessoa) !== '') ? trim($pessoa) : null;
    }

    public function setStatus(string $status): void {
        $validos = ['disponivel', 'alugado'];
        if (!in_array($status, $validos, true)) {
            throw new InvalidArgumentException("Status inválido: {$status}.");
        }
        $this->status = $status;
    }

    public function setCriadoEm(?string $criadoEm): void     { $this->criadoEm = $criadoEm; }
    public function setAtualizadoEm(?string $at): void        { $this->atualizadoEm = $at; }

    // Cria instância a partir de array do banco
    public static function fromArray(array $data): self {
        $f = new self();
        $f->setId((int)$data['id']);
        $f->setTitulo($data['titulo']);
        $f->setAno((int)$data['ano']);
        $f->setGenero($data['genero']);
        $f->setClassificacao($data['classificacao']);
        $f->setDiretor($data['diretor']);
        $f->setSinopse($data['sinopse']);
        $f->setPessoaAlugou($data['pessoa_alugou'] ?? null);
        $f->setStatus($data['status']);
        $f->setCriadoEm($data['criado_em'] ?? null);
        $f->setAtualizadoEm($data['atualizado_em'] ?? null);
        return $f;
    }
}

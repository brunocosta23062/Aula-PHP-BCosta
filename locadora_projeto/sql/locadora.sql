-- ============================================
-- Sistema de Locadora de Filmes
-- Banco de Dados: locadora_filmes
-- ============================================

CREATE DATABASE IF NOT EXISTS locadora_filmes
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

USE locadora_filmes;

-- Tabela de Usuários
CREATE TABLE IF NOT EXISTS usuarios (
    id          INT AUTO_INCREMENT PRIMARY KEY,
    nome        VARCHAR(100)  NOT NULL,
    email       VARCHAR(150)  NOT NULL UNIQUE,
    senha       VARCHAR(255)  NOT NULL,
    telefone    VARCHAR(20)   NOT NULL,
    criado_em   DATETIME      DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tabela de Filmes
CREATE TABLE IF NOT EXISTS filmes (
    id                  INT AUTO_INCREMENT PRIMARY KEY,
    titulo              VARCHAR(200)  NOT NULL,
    ano                 YEAR          NOT NULL,
    genero              VARCHAR(80)   NOT NULL,
    classificacao       VARCHAR(10)   NOT NULL,
    diretor             VARCHAR(150)  NOT NULL,
    sinopse             TEXT          NOT NULL,
    pessoa_alugou       VARCHAR(150)  DEFAULT NULL,
    status              ENUM('disponivel','alugado') NOT NULL DEFAULT 'disponivel',
    criado_em           DATETIME      DEFAULT CURRENT_TIMESTAMP,
    atualizado_em       DATETIME      DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Usuário admin padrão  (senha: admin123)
INSERT INTO usuarios (nome, email, senha, telefone) VALUES
('Administrador', 'admin@locadora.com',
 '$2y$12$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
 '(00) 00000-0000');

-- Filmes de exemplo
INSERT INTO filmes (titulo, ano, genero, classificacao, diretor, sinopse, pessoa_alugou, status) VALUES
('O Poderoso Chefão', 1972, 'Drama / Crime', '16', 'Francis Ford Coppola',
 'A saga da família Corleone, uma das mais poderosas famílias da máfia americana, liderada pelo patriarca Vito Corleone.',
 NULL, 'disponivel'),
('Interestelar', 2014, 'Ficção Científica', '10', 'Christopher Nolan',
 'Um grupo de astronautas viaja por um buraco de minhoca em busca de um novo lar para a humanidade.',
 'João Silva', 'alugado'),
('Clube da Luta', 1999, 'Drama / Thriller', '18', 'David Fincher',
 'Um homem insatisfeito com sua vida monótona forma um clube de luta clandestino com um carismático vendedor de sabão.',
 NULL, 'disponivel');

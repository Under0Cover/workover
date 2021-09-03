-- Criando uma nova Tabela
-- Sintaxe da Criação das Tabelas
CREATE TABLE table_name (
    field1 datatype,
    field2 datatype,
    field3 datatype
)

CREATE TABLE Clientes (
    codigo INT,
    nome VARCHAR (100),
    endereco VARCHAR (200),
    bairro VARCHAR (100),
    cidade VARCHAR (100),
    estado VARCHAR (50)
)

INSERT INTO Clientes 
    (codigo, nome, endereco, bairro, cidade, estado)
VALUES (1, 'José Maria', 'Rua das Margaridas, 350', 'De Lourdes', 'Uberaba', 'Minas Gerais')


-------------------------------------------------------------------------------------------------
-- Apagando uma Tabela
-- Sintaxe do Apagar
DROP TABLE table_name

DROP TABLE Clientes

-------------------------------------------------------------------------------------------------
-- Alterando uma Tabela
-- Sintaxe do Alterar
ALTER TABLE table_name
RENAME TO new_table_name


ALTER TABLE Clientes
RENAME TO MeusClientes

-- Alterando a Tabela para adicionar um novo campo
-- Sintaxe para Adicionar
ALTER TABLE table_name
ADD field datatype

ALTER TABLE MeusClientes
ADD cep VARCHAR (10)

-- Alterando a Tabela para remover uma coluna
-- Sintaxe para Remover
ALTER TABLE table_name
DROP COLUMN field

ALTER TABLE MeusClientes
DROP COLUMN cep

-- SQLIte não suporta o Remover a coluna

-------------------------------------------------------------------------------------------------
--> CHAVE PRIMÁRIA

CREATE TABLE Clientes (
    codigo INT PRIMARY KEY,
    nome VARCHAR (100),
    endereco VARCHAR (200),
    bairro VARCHAR (100),
    cidade VARCHAR (100),
    estado VARCHAR (50)
)

-------------------------------------------------------------------------------------------------
--> AUTO INCREMENTO
    https://sqlite.org/autoinc.html

CREATE TABLE Clientes (
    codigo INTEGER PRIMARY KEY AUTOINCREMENT,
    nome VARCHAR (100),
    endereco VARCHAR (200),
    bairro VARCHAR (100),
    cidade VARCHAR (100),
    estado VARCHAR (50)
)

-------------------------------------------------------------------------------------------------
--> FORMAS DE RELCIONAR TABELAS:
    * WHERE

    SELECT * FROM albums, artists
    WHERE albums.ArtistId = artists.ArtistId

    -- MELHORANDO A QUERY
    SELECT albums.Title, artists.Name FROM albums, artists
    WHERE albums.ArtistId = artists.ArtistId

    -- UTILIZANDO O APELIDO
    SELECT AB.Title, ART.Name FROM albums as AB, artists as ART
    WHERE AB.ArtistId = ART.ArtistId

    --Sintaxe do WHERE
    SELECT * FROM table1, table2 
    WHERE table1.field = table2.field


    * JOINS

    -- CONSULTE A DOCUMENTAÇÃO
    -- DOCUMENTAÇÃO SQLite:         https://sqlite.org/syntax/join-operator.html
    SELECT * FROM albums
    JOIN artists ON
    artists.ArtistId = albums.ArtistId

    -- MELHORANDO A QUERY
    SELECT AL.Title, AR.Name FROM albums as AL
    JOIN artists as AR ON
    AL.ArtistId = AR.ArtistId

    -- Sintaxe do JOIN
    SELECT * FROM table1 JOIN table2
    ON table1.field = table2.field


    * LEFT OUTER JOIN

    -- Preparando o Ambiente
    UPDATE albums SET ArtistId = 276
    WHERE AlbumId = 1

    -- Rodando a mesma query do JOIN
    SELECT AL.Title, AR.Name FROM albums as AL
    JOIN artists as AR ON
    AL.ArtistId = AR.ArtistId
    
    /*
    Como nos colocamos um Album relacionado a um artista que não existe
    Existe a opção de trazer o Album, mesmo sem ter relação com o Artista
    Ou seja, trazer o Album mesmo sem Artista
    Para isso, usamos LEFT OUTER JOIN
    */

    SELECT AL.Title, AR.Name FROM albums as AL
    LEFT OUTER JOIN artists as AR ON
    AL.ArtistId = AR.ArtistId

    -- Nós não vamos fazer nenhuma das outras opções
    -- Sintaxe do LEFT OUTER JOIN
    SELECT * FROM table1
    LEFT OUTER JOIN table2 ON
    table1.field = table2.field


-------------------------------------------------------------------------------------------------
--> CHAVE ESTRANGEIRA (FK)
    -- Criando uma nova Base
    CREATE TABLE 'profissoes' (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        nome VARCHAR (50)
    )

    CREATE TABLE 'Clientes' (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        nome VARCHAR (60),
        profissoes_id INTEGER
        FOREIGN KEY (profissoes_id) REFERENCES profissoes(id)
    )

    -- Inserindo dados na tabela profissoes
    INSERT INTO profissoes (nome)
    VALUES ('Advogado')

    INSERT INTO profissoes (nome)
    VALUES ('Médico')

    INSERT INTO profissoes (nome)
    VALUES ('Analistas')

    -- Inserindo dados na tabela Clientes
    INSERT INTO Clientes (nome, profissoes_id)
    VALUES ('João', 1)

    INSERT INTO Clientes (nome, profissoes_id)
    VALUES ('José', 2)

    INSERT INTO Clientes (nome, profissoes_id)
    VALUES ('Ciclano', 5)
    -- No caso do SQLite
    -- O banco de dados permite a inserção
    -- Para ativar a chave estrangeira, rodar:
    PRAGMA foreign_keys = ON

    INSERT INTO Clientes (nome, profissoes_id)
    VALUES ('Fulano', 6)
    -- A query acima apresentará erro

    -- FK no SQLite             https://sqlite.org/foreignkeys.html

    -- Sintaxe do FOREIGN KEY
    FOREIGN KEY (field)
    REFERENCES table (field)

-------------------------------------------------------------------------------------------------
--> CHAVE ESTRANGEIRA
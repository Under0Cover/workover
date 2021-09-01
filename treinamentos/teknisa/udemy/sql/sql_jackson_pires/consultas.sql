-------------------------------------------------------------------------------------------------
-- Comandos utilizados durante a execução no site: http://sqlfiddle.com
SELECT * FROM CLIENTES


-------------------------------------------------------------------------------------------------
---- Comandos utilizandos durante a execução no site: https://www.w3schools.com/sql/trysql.asp?filename=trysql_select_all
--- cláusula SELECT
SELECT * FROM Customers
SELECT CustomerName FROM Customers
SELECT CustomerName, Address, City FROM Customers

-- Sintaxe do SELECT
SELECT <fields> FROM <table>

-------------------------------------------------------------------------------------------------
--- cláusula WHERE
SELECT * FROM Customers WHERE CustomerID > 50
SELECT * FROM Customers WHERE CustomerID >= 50

-- Sintaxe do WHERE
SELECT <field1, field2> FROM <table> WHERE <condition>

-------------------------------------------------------------------------------------------------
-- Operadores Relacionais
SELECT * FROM Customers WHERE CustomerID < 50
SELECT * FROM Customers WHERE CustomerID <= 50
SELECT * FROM Customers WHERE CustomerID = 23

-------------------------------------------------------------------------------------------------
-- Operadores Lógicos (AND, OR, NOT)
SELECT * FROM Customers WHERE CustomerID = 23 OR CustomerID = 44
SELECT * FROM Customers WHERE Country = "Mexico" AND CustomerID > 3
SELECT * FROM Customers WHERE Country = "Mexico" OR CustomerID > 3
SELECT * FROM Customers WHERE NOT Country = "Mexico" AND CustomerID > 3

-------------------------------------------------------------------------------------------------
-- Cláusula Between
SELECT * FROM Customers WHERE CustomerID > 10 AND CustomerID < 20

-- Sintaxe do Between
SELECT <field1, field2> FROM <table> WHERE field BETWEEN value1 AND value2

-- Cláusula Between Aplicada
SELECT * FROM Customers WHERE CustomerID BETWEEN 10 AND 20

-------------------------------------------------------------------------------------------------
-- Cláusula Like
-- Coringas do LIKE:
    -- Nenhuma, uma ou mais letras: "%"
    -- Única letra: "_"
SELECT * FROM Customers WHERE City = "Madrid"
SELECT * FROM Customers WHERE Country LIKE "S%"
SELECT * FROM Customers WHERE Country LIKE "%S%"
SELECT * FROM Customers WHERE Country LIKE "%A"
SELECT * FROM Customers WHERE Address LIKE "__ %"

-- Sintaxe do Like
SELECT <field1, field2> FROM <table> WHERE field LIKE pattern

-------------------------------------------------------------------------------------------------
-- Palavra Chave ORDER BY
SELECT * FROM Customers WHERE CustomerName LIKE "A%"
SELECT * FROM Customers ORDER BY Country
SELECT * FROM Customers ORDER BY Country ASC
SELECT * FROM Customers ORDER BY Country DESC
SELECT * FROM Customers ORDER BY Country, Address

-- Sintaxe do Order By
SELECT <field1, field2> FROM <table> ORDER BY field1, field2 ASC|DESC

-------------------------------------------------------------------------------------------------
-- Comando SELECT DISTINCT
SELECT Country FROM Customers
SELECT DISTINCT Country FROM Customers
SELECT DISTINCT Country FROM Customers ORDER BY Country
SELECT City FROM Customers ORDER BY City
SELECT DISTINCT City FROM Customers ORDER BY City

-- Sintaxe do SELECT DISTINCT
SELECT DISTINCT <field1, field2> FROM <table>

-------------------------------------------------------------------------------------------------
-- Aliases (Apelidos)
SELECT * FROM Customers
SELECT CustomerID, CustomerName FROM Customers
SELECT CustomerID AS 'Código', CustomerName AS 'Nome do cliente' FROM Customers

-- Sintaxe do Aliases
SELECT field1 AS alias_name FROM <table>

-------------------------------------------------------------------------------------------------
-- Obs: 'Read' do CRUD já foi realizado
-- 'Create' do CRUD
INSERT INTO Customers (CustomerID, CustomerName, ContactName, Address, City, PostalCode, Country) 
VALUES (92, 'Jackson Pires', 'José Neves', 'Rua Tal, 35', 'Recife', '00001', 'Brazil')

-- Sintaxe do INSERT
INSERT INTO table_name (field1, field2)
VALUES (value1, value2)

-- 'Update' do CRUD
UPDATE Customers SET CustomerName = 'João da Silva'
WHERE CustomerID = '92'

UPDATE Customers SET Address = 'Rua da Consolação, 92'
WHERE CustomerID = '92'

UPDATE Customers SET PostalCode = '44875-090'
WHERE CustomerID = '92'

-- Sintaxe do UPDATE
UPDATE table_name SET <field1> = <value1>, <field2> = <value2> WHERE <condition>

-- 'Delete' do CRUD
DELETE FROM Customers WHERE CustomerID = '92'

-- Sintaxe do DELTE
DELETE FROM table_name WHERE <condition>
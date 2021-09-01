-- Exercícios práticos
-- 1) Faça um SQL que retorne todos os Nomes dos Clientes (CustomerName) da tabela Customers ordenados de forma inversa (Z-A)
SELECT CustomerName AS 'Nome do Cliente' FROM Customers ORDER BY CustomerName DESC

-- 2) Faça um SQL que msotre todos os campos das pessoas (Customers) que moram no Brazil e que estejam compreendidos entre o CustomerID 10 e 34 (inclusos 10 e 34)
SELECT * FROM Customers WHERE Country = 'Brazil' AND CustomerID BETWEEN 10 AND 34

-- 3) Faça um SQL que mostre o nome das pessoas (CustomerName) que moram no Mexico, que comecem com a letra A, ordene-os de forma inversa (Z-A) e altere o nome da coluna para 'Nome do Cliente'
SELECT CustomerName as 'Nome do Cliente'
FROM Customers 
WHERE Country = 'Mexico' 
AND CustomerName LIKE 'A%' 
ORDER BY CustomerName DESC
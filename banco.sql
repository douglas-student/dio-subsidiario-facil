CREATE TABLE empresas_subsidiarias (
    ID int AUTO_INCREMENT PRIMARY KEY,
    NomeFantasia varchar(50),
    CNPJ varchar(18) UNIQUE
);

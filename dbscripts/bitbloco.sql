/*
Criação do banco de dados do bitbloco
*/
CREATE SCHEMA_NAME bitbloco;



/* Comando para designar qual diretório que será realizado o script */
USE bitbloco;



/* Criação das tabelas */
CREATE TABLE usuario
(
cd_usurio integer NOT NULL AUTO_INCREMENT PRIMARY KEY,
cd_carteira int,
nm_usuario varchar(40),
dt_email varchar(50),
nu_telefone int,
nu_senha varchar(50)
);

CREATE TABLE carteira
(
cd_carteira int NOT NULL AUTO_INCREMENT PRIMARY KEY,
cd_usuario int,
qt_bitcoin int
);

CREATE TABLE blockchain
(
cd_bloco int NOT NULL AUTO_INCREMENT PRIMARY KEY,
cd_emissor int,
cd_remetente int,
qt_bitcoin int,
nu_no int
);


/* Designando as chaves estrangeiras */
ALTER TABLE 'usuario' ADD CONSTRAINT '





create table homologado
(

cd_fornecedor int,

nm_fornecedor varchar(50),

nu_cnpj int,

nm_contato varchar(50),

nm_email varchar(50),

nu_telefone int

);




insert into test1.homologado (cd_fornecedor, nm_fornecedor, nu_cnpj, nm_contato, nm_email, nu_telefone) values (
1, 'teste', 123, 'matheus', 'teste@teste', 11);



select * from test1.homologado where cd_fornecedor = 1;

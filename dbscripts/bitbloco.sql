create schema bitbloco;



use bitbloco;


create table usuario
(
cd_usurio int primary key,
cd_carteira int secundary key,
nm_usuario varchar(40),
dt_email varchar(50),
nu_telefone int,
nu_senha varchar(50)
);

create table carteira
(
cd_carteira int primary key,
cd_usuario int secundary key,
qt_bitcoin int
);

create table blockchain
(
cd_bloco int primary key,
cd_emissor int,
cd remetente int,
qt_bitcoin int,
nu_no int
);





















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

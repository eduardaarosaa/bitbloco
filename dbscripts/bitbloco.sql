/*
Criação do banco de dados do bitbloco
*/

CREATE DATABASE bitbloco;





/* Comando para designar qual diretório que será realizado o script */

USE bitbloco;





/* Criação das tabelas */

CREATE TABLE usuario
(

cd_usurio int NOT NULL AUTO_INCREMENT PRIMARY KEY,

cd_carteira int NOT NULL,

nm_usuario varchar(40) NOT NULL,

ds_email varchar(50) NOT NULL,

nu_telefone int NOT NULL,

nu_senha varchar(50) NOT NULL 

);
 


CREATE TABLE carteira
(

cd_carteira int NOT NULL AUTO_INCREMENT PRIMARY KEY,

cd_usuario int NOT NULL,

nm_usuario varchar(50) NOT NULL,

qt_bitcoin int NOT NULL

);



CREATE TABLE blockchain
(

cd_bloco int NOT NULL AUTO_INCREMENT PRIMARY KEY,

cd_emissor int NOT NULL,

cd_remetente int NOT NULL,

qt_bitcoin int NOT NULL,

nu_no int 

);




/* Designando as chaves estrangeiras */


ALTER TABLE `usuario` ADD CONSTRAINT `fk_cd_carteira` FOREIGN KEY (`cd_carteira`) REFERENCES `carteira`(`cd_carteira`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `carteira` ADD CONSTRAINT `fk_cd_usuario` FOREIGN KEY (`cd_usuario`) REFERENCES `usuario`(`cd_usurio`) ON DELETE RESTRICT ON UPDATE RESTRICT;
/*
ALTER TABLE carteira ADD CONSTRAINT fk_cd_usuario FOREIGN KEY usuario(cd_usuario) REFERENCES usuario;

ALTER TABLE carteira ADD CONSTRAINT fk_nm_usuario FOREIGN KEY usuario(nm_usuario) REFERENCES usuario;
*/
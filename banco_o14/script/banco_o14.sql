/* mysql -u root -p Comando de acesso ao mysql 
SHOW DATABASES; Comando para visualizar bancos*/

CREATE DATABASE banco_o14;
USE banco_o14;

CREATE TABLE bairro(
    cod_bairro INT NOT NULL AUTO_INCREMENT,
    nome_bairro VARCHAR(45) NOT NULL,
    PRIMARY KEY(cod_bairro)
    );

CREATE TABLE usuario(
    cod_usuario INT NOT NULL AUTO_INCREMENT,
    nome_usuario VARCHAR(45) NOT NULL,
    bairro_usuario INT NOT NULL,
    PRIMARY KEY(cod_usuario),
    FOREIGN KEY(bairro_usuario) REFERENCES bairro(cod_bairro)
    );

    INSERT INTO bairro(nome_bairro) VALUES ('Asa sul'),('Asa norte'),('Lago sul'),('Lago norte');

    INSERT INTO usuario(nome_usuario,bairro_usuario) VALUES ('Oto',2),('Anna',4),('Gorety',1),('Odety',1);

    SELECT nome_usuario, nome_bairro FROM usuario INNER JOIN bairro ON bairro_usuario=cod_bairro;

    SELECT * FROM bairro;
create database db_restaurante;
use db_restaurante;

CREATE TABLE pratos (
  id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  nome varchar(255) NOT NULL,
  preco int NOT NULL,
  apimentado int NOT NULL
);

CREATE TABLE cliente (
	id int not NULL PRIMARY KEY AUTO_INCREMENT,
    nome varchar(50) not null,
    email varchar(50) not null,
    telefone int not null
);

INSERT INTO pratos (id, nome, preco, apimentado) VALUES
(1, 'Salmão Executivo', 50, 0),
(2, 'Filé à Parmeggiana', 30, 0),
(3, 'Salmão Executivo', 40, 0),
(4, 'Filé à Parmegiana', 26, 0),
(5, 'Frango à Milanesa', 25, 0),
(6, 'Sopa de Frango', 20, 1),
(7, 'Salada Caesar', 25, 0),
(8, 'Salada Mexicana', 35, 1);


CREATE TABLE scoobyburg.cliente (
	senha varchar(20) NOT NULL,
	nome varchar(50) NOT NULL,
	email varchar(50) NOT NULL PRIMARY KEY
);

CREATE TABLE scoobyburg.hamburguer (
	nome varchar(30) NOT NULL,
	descricao varchar(100) NOT NULL,
	id int PRIMARY KEY AUTO_INCREMENT,
	foto binary NOT NULL,
	preco float4 NOT NULL
);

CREATE TABLE scoobyburg.bebida (
	nome varchar(30) NOT NULL,
	descricao varchar(100) NOT NULL,
	id int PRIMARY KEY AUTO_INCREMENT,
	foto binary NOT NULL,
	preco float4 NOT NULL
);

CREATE TABLE scoobyburg.compra (
	id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
	local varchar(50) NOT NULL,
	forma_pagamento char(1) NOT NULL,
	dt_hora timestamp NOT NULL,
	CONSTRAINT compra_pk PRIMARY KEY (id)
);

CREATE TABLE scoobyburg.cliente (
	senha varchar(20) NOT NULL,
	nome varchar(50) NOT NULL,
	email varchar(50) NOT NULL,
	CONSTRAINT cliente_pk PRIMARY KEY (email)
);

CREATE TABLE scoobyburg.hamburger (
	nome varchar(30) NOT NULL,
	decricao varchar(100) NOT NULL,
	id int NOT NULL,
	column1 bytea NOT NULL,
	preco float4 NOT NULL
	CONSTRAINT hamburger_pk PRIMARY KEY (id)
);

CREATE TABLE scoobyburg.bebida (
	nome varchar(30) NOT NULL,
	descricao varchar(100) NOT NULL,
	id int NOT NULL,
	foto bytea NOT NULL,
	preco float4 NOT NULL
);

CREATE TABLE scoobyburg.compra (
	id int NOT NULL,
	"local" varchar(50) NOT NULL,
	forma_pagamento char(1) NOT NULL,
	dt_hora timestamp NOT NULL,
	CONSTRAINT compra_pk PRIMARY KEY (id)
);

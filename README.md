# ProjetoWebServidor

## Ruhan Daniel Kremes
- Controllers, Models e Views envolvidas com Logins de usuarios/admin.
- Autorizações e estilização.

## Kauê Ruppel Q. da Silva 

- Controllers, Models e Views envolvidos com Carrinho de Compras
- Documentação.

## Julia Raquel Rocha Costa
### Atividades desenvolvidas

- Controllers, Models e Views envolvidos com os produtos.
- Criação e manipulação do DB produtos e DB produtos excluídos.
- Associação da sessão ao crud dos admin e estilização da página de produtos.

## Requisitos do Sistema/ Instalação
    * PHP 8+;
    * Nosso projeto se utiliza da ferramenta XAMPP, o qual deve ser instalado.
    * Instalar XAMPP caso necessário: https://www.apachefriends.org/pt_br/index.html
    * Ativar o Apache no painel de controle do XAMPP.

##



## BANCO DE DADOS

User: Postgres
Pass: admin

CREATE DATABASE abakoos;

CREATE TABLE adress(
	adress_pcode SERIAL CONSTRAINT pk_adress_id PRIMARY KEY,
	adress_state CHAR(2) NOT NULL,
	adress_street VARCHAR(100),
	adress_neighborhood VARCHAR(50),
	adress_number INT NOT NULL
);

CREATE TABLE users (
	user_id SERIAL CONSTRAINT pk_user_id PRIMARY KEY,
	user_name VARCHAR(100) NOT NULL,
	user_mail VARCHAR(100) NOT NULL,
	user_password VARCHAR(100) NOT NULL,
	adress_pcode INT,
	CONSTRAINT fk_adress FOREIGN KEY(adress_pcode) REFERENCES adress(adress_pcode)
	
);

CREATE TABLE product(
	product_id SERIAL CONSTRAINT pk_products_id PRIMARY KEY,
	product_name VARCHAR(100) NOT NULL,
	product_price DECIMAL(10,2) NOT NULL,
	product_quantity INT NOT NULL,
	product_description VARCHAR(200)
);

CREATE TABLE product_deleted(
	product_deleted_id SERIAL CONSTRAINT pk_product_delected_id PRIMARY KEY,
	product_deleted_name VARCHAR(100) NOT NULL,
	product_delected_price DECIMAL(10,2) NOT NULL,
	product_delected_quantity INT NOT NULL,
	product_delected_user_session VARCHAR(100) NOT NULL,
	product_delected_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
	product_id INT,
	CONSTRAINT fk_product_delected FOREIGN KEY(product_id) REFERENCES product(product_id)	
);

CREATE TABLE session_data (
	session_data_id SERIAL CONSTRAINT pk_session_data PRIMARY KEY,
	session_data_date TIMESTAMP NOT NULL,
	session_data_ip VARCHAR(45),
	user_id INT,
	CONSTRAINT fk_user_id FOREIGN KEY(user_id) REFERENCES users(user_id)
);


CONEXÃO COM O BANCO DE DADOS

Foi escolhido usar PDO ao invés da função postgres do PHP

Motivos:

1- Suporte a SQL injection
2- Portabilidade do código, pois oferece serviço a outros bancos de dados

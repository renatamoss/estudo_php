###   CONECTANDO O BANCO DE DADOS AO ARQUIVO SQL DO PROJETO PHP:

### 1o. CRIAR O BANCO DE DADOS
- [X] Acessar *http://localhost/phpmyadmin/* -> tela de phpMyAdmin;
- [x] Importar -> escolher o arquivo -> *estrutura_do_banco.sql* -> executar;

*Exemplo de um arquivo SQL para criação de um banco de dados:*
~~~~sql
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS `crud` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `crud`;

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `produtos` (`id`, `produto`, `descricao`) VALUES
~~~~

<hr>

### 2o. REALIZAR CONEXÃO PHP X BANCO DE DADOS:
- [x] Criar um objeto *config.php* e fazer um *require* no arquivo *index.php*;

*Objeto config.php*:
~~~php
<?php

$mysql = new mysqli('localhost', 'root', 'senha do mysql', 'crud');
$mysql->set_charset('utf8');

if($mysql == false) {
    echo 'Erro na conexão';
}

require 'config.php';

~~~

<hr>

*Anotações feitas no Curso de PHP e MySQL: Introdução a uma webapp - Alura* </br>
*O projeto deste curso está na pasta php_mysql_banco-web deste mesmo repositório.*

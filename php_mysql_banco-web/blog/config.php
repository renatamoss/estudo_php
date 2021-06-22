<?php

$mysql = new mysqli('localhost', 'root', 'senha mysql', 'blog');
$mysql->set_charset('utf8');

if($mysql == false) {
    echo 'Erro na conexão';
}
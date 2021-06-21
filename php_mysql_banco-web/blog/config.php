<?php

$mysql = new mysqli('localhost', 'root', '130819Ren@', 'blog');
$mysql->set_charset('utf8');

if($mysql == false) {
    echo 'Erro na conexão';
}
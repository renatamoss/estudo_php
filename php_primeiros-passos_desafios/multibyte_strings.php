<?php

$string = 'Testes de integração com PHP';

//função strlen conta nº de bytes, sendo que ç e ã tem 2x bites: 30
echo strlen($string) . PHP_EOL; 

//função strtoupper transforma caracteres em uppercase(menos ç e ã)
echo strtoupper($string) , PHP_EOL;

//função mb_strlen conta número de caracteres: 28
echo mb_strlen($string) . PHP_EOL;

//função strtmb_strtoupper transforma todos caracteres em uppercase
echo mb_strtoupper($string) . PHP_EOL;

//função mb_strtolower transforma todos caracteres em lowercase
echo mb_strtolower($string) . PHP_EOL;

//função mb_convert_case transforma somente primeira letra em uppercase
echo mb_convert_case($string, MB_CASE_TITLE) . PHP_EOL;

//função mb: trabalha com caracteres multibytes( ç, ã ...)

//documentação oficial: https://www.php.net/manual/pt_BR/book.mbstring.php



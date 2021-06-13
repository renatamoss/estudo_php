<?php

spl_autoload_register(
    function(string $namespaceClasse):void {
        $caminho = "/src";
        $diretorio_classe = str_replace("\\",DIRECTORY_SEPARATOR, $namespaceClasse);
        include_once getcwd().$caminho.DIRECTORY_SEPARATOR."{$diretorio_classe}.php";
   }   
);

//O autoload reduz o nosso código, pois fazemos o autoloading de classes uma vez e seguimos 
//uma convenção, enquanto seria necessário fazermos um require por classe.
//O autoload em si só é suficiente, no máximo, utilizamos um require para o próprio autoloader.

//https://www.php-fig.org/psr/psr-4/
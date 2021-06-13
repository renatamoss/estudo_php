<?php

namespace Alura;

$nomes = "Renata, Samuel, Sara, Bruce";
$array_nomes = explode(", ", $nomes);

foreach($array_nomes as $nome){
    echo "<p> Olá $nome! </p>";
}

$string_nomes = implode(", ", $array_nomes);
echo "Esses são os nomes na string: $string_nomes.";

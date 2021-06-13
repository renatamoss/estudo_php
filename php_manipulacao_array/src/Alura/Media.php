<?php

namespace Alura;

class Media
{

    public function calculaMedia(array $notas): ?float //return null ou float
    {
        $quantidadeNotas = sizeof($notas);

        if ( $quantidadeNotas > 0 ){
            $soma = 0;
            for ($i = 0; $i < $quantidadeNotas; $i++) {
                $soma = $soma += $notas[$i]; //$soma += $notas[$i]
            }
    
            $media = $soma / $quantidadeNotas;
    
            return $media;
        } else {
            return null;
        }
      
    }
}




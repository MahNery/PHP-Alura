<?php

namespace Alura;

class Calculadora
{
    public function calculoMedia(array $notas): ?float
    {
        if (sizeof($notas) >0){
            $soma=0;
            for ($i=0;$i<sizeof($nota);$i++){
                $soma = $soma+$nota[$i];
            };
            $media = ($soma)/count($nota);
            return $media;
        } else {
            return null;
        }
        
    }
}
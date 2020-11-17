<?php

declare (strict_types=1);

class ArrayUtil
{
    public static function remover(string $elemento, array &$array)
    {
        $posicao = array_search($elemento, $array, true);

        if(is_int($posição)){
            unset($array[$posicao]);
        } else {
            echo "<p>O item não foi encontrado no array.</p>";
        }
        
    }
}
<?php

/* Variáveis são declaradas por cifrões '$'*/
$vari;

/* Tipos de variáveis:*/

// Inteiros
$int1 = 1;

// Decimais
$float = 0.0;

// Letras ou palavras
$string = 'a';

// Letras, palavras ou números
$vari_array = array('este', 'eh', 'o', 'curso', 'de', 'php laravel');

//echo "$vari_array[0]". "$vari_array[1]". "$vari_array[2]";

for($i=0; $i<6; $i++)
{
    echo $vari_array[$i];
    echo" ";
}
?>
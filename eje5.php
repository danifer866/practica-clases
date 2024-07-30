<?php

function contarPalabras($texto) {
    $palabras = str_word_count($texto, 1);
    return count($palabras);
}

function contarCaracteres($texto) {
    return strlen($texto);
}

function contarLetras($texto) {
    $texto = strtolower($texto);
    $letras = count_chars($texto, 1);
    $frecuencia = [];
    
    foreach ($letras as $cadaletra => $frecuenciaLetra) {
        $letra = chr($cadaletra);
        if (ctype_alpha($letra)) {
            $frecuencia[$letra] = $frecuenciaLetra;
        }
    }
    
    return $frecuencia;
}
$texto =$_GET['texto'];

$frecuenciaLetras = contarLetras($texto);
echo "Frecuencia de letras:\n";
foreach ($frecuenciaLetras as $letra => $frecuencia) {
    echo $letra . ": " . $frecuencia . "<br>";
}
$numPalabras = contarPalabras($texto);
echo "Número de palabras: $numPalabras<br>";
$numCaracteres = contarCaracteres($texto);
echo "Número de caracteres: $numCaracteres<br>";

?>
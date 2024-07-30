<?php
$cliente="Juan Pérez";
//saber el tamaño de la cadena
print(strlen($cliente));
echo "<br>";
var_dump($cliente);
//limpiar espacios en blanco
$texto="Juan perez";
var_dump($texto);
$texto2=strlen (trim($cliente));
echo $texto2."<br>";
//convertir mayusculas y minusculas
echo(strtolower($cliente)); //minuscula
echo"<br>";
echo(strtoupper($texto)); //mayuscula
var_dump(strtolower($cliente)===strtolower($texto));
//reemplazar
echo"<br>";
echo str_replace("jose","juan",$cliente);
//buscar posicion
echo"<br>";
echo strpos($cliente, "Perez");
//buscar 
echo substr_count($cliente,"se");
//dividir cadena
$cadena=explode("e",$texto);
var_dump($cadena);
//unir cadena
echo"<br>";
$cadena=implode("e",$cadena);
var_dump($cadena);
?>
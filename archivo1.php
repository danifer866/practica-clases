<?php
$carpeta="prueba/";
$archivo="prueba/texto.txt";
echo(file_exists($carpeta.$archivo))?"archivo existente":"archivo no existe <br>";
echo (is_file($archivo))?"archivo existe":"archivo no existe<br>";
echo (is_dir($carpeta))?"carpeta existe":"carpeta no existe<br>";
$archivo2="img.jpg";
if (file_exists($carpeta.$archivo2)) {
   $size=filesize($carpeta.$archivo2);
   $kb=$size/1024;
   $mb=$kb/1024;
   $creado=filectime($carpeta.$archivo2);
   $creado_fecha=date("d/m/Y H:i:s", $creado);
   $modificado=filemtime($carpeta.$archivo2);
   echo "tamaño".$size."<br>";
   echo "creado".$creado_fecha."<br>";
   echo "modificado".$modificado;
}
else{
    echo "archivo no existe";
}
?>
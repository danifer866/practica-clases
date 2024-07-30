<?php
$nombre="yanet";
$talla=1.55;
$peso=58;
$musica=array ("taricanto ","cantares");
$bandera=true;
print("nombre:".$nombre."<br>");
printf("talla:".$talla."<br>");
print_r("peso:".$peso."<br>");
echo("bandera:".$bandera."<br>");
var_dump($musica);
/*operadores*/
$a=$_GET['a'];
$b=$_GET['b'];

echo("el resulltado de la suma es: ".$a+$b."<br>");
echo("el resulltado de la resta es: ".$a-$b."<br>");
echo("el resulltado de la multiplicacion es: ".$a*$b."<br>");
echo("el resulltado de la division es: ".$a/$b."<br>");
echo("el resulltado de modulos es: ".$a%$b."<br>");
/*Comparativos*/
var_dump($a>$b);
echo "<br>";
var_dump($a>=$b);
echo "<br>";
var_dump($a<$b);
echo "<br>";
var_dump($a<=$b);
echo "<br>";
var_dump($a==$b);
echo "<br>";
var_dump($a===$b);
echo "<br>";
var_dump($a<=>$b);
echo "<br>";

?>

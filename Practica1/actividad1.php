<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

//EJERCICIO 1
//Conversion Euros Yenes y Dolares
    $euro = 10;
    $dollar = 0.88*$euro;
    $yen = 0.0077*$euro;

    echo "<div>$euro € equivalen a $dollar Dolares. Y a $yen Yenes";
   
    echo '<br>';

//Ejercicio 2
//Conversion tiempo
    $segundos = 94764;
    $minuto = $segundos/60;
    $hora = 3600/$segundos;

    echo "<div>$segundos son $minuto minutos, y $hora horas.";

//Ejercicio 3
//Ecuacion de segundo grado
echo '<br>';

$v = array(1, -5, 6);
    echo 'De una ecuación de segundo grado cuyos coeficientes son: 1, -5 y 6';
    echo '<br>';

	echo 'El primer resultado es: '.(-($v[1])+(sqrt((pow($v[1], 2)-(4*$v[0]*$v[2])))))/(2*$v[0]).'<br>';
	echo 'El segundo resultado es:  '.(-($v[1])-(sqrt((pow($v[1], 2)-(4*$v[0]*$v[2])))))/(2*$v[0]);


//Ejercicio 4
//Circunferencia

    $radio=3.5;
    $longitud= 2 * $radio * M_PI;
    $area= $radio * $radio * M_PI;

    echo "<div> La circunferencia con radio de $radio cm, tiene una longitud de $longitud y un área de $area";


//Ejercicio 5
//Crea una tabla

define("tam",20/4);
define("tan",20);
$n = 1;

echo"<table>";
for($i=0;$i<tan;$i++){
    echo"<tr>";
    for($j=0;$j<tam;$j++){

    $m= $n+1;
    $r = $n+2;
    $e = $n+3;

    echo"<td style='background-color:yellow'>$n</td>";
    echo"<td style='background-color:red'>$m</td>";
    echo"<td style='background-color:green'>$r</td>";
    echo"<td style='background-color:orange'>$e</td>";


    $n+=4;
    }
    echo "</tr>";
} echo"</table>";

    

    ?>
</body>
</html>
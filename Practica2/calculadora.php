<?php
echo "<h1> CALCULADORA </h1>";

$operador1 = $_POST["op1"];
$operador2 = $_POST["op2"];
$operacion = $_POST["operacion"];

try{
            if($operacion == "suma"){
                $resultado = $operador1 + $operador2;
            }

            else if($operacion == "resta"){
                $resultado = $operador1 - $operador2;

            }

            else if($operacion == "multiplicacion"){
                $resultado = $operador1 * $operador2;
            }

            else if($operacion == "division"){
                $resultado = $operador1 / $operador2;  
                echo "esto es una division";              
            }   

            
        }catch (Exception $e){
            
            echo "creo que en esta dimensión, esa operacion no es posible";
        }
        echo "<h3> El resultado es: $resultado </h3>";
    
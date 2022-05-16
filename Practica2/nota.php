<?php

$evaluacion = $_POST["nota"];

            if($evaluacion <= 4.99){
                echo "suspenso";
            }
            else if($evaluacion <= 5.00 && $evaluacion <= 6.99){
                echo "Aprobado";
            }
            else if($evaluacion <= 7.00 && $evaluacion <= 8.99){
                echo "notable";
            }
            else if($evaluacion <= 9.00 && $evaluacion <= 9.99){
                echo "Excelente";              
            }   
            else if($evaluacion <= 10.00){
                echo "Matrícula de Honor";              
            }   
            else{
                echo "no es una nota posible, tiene que ser entre 0 y 10.";
            }
            
        
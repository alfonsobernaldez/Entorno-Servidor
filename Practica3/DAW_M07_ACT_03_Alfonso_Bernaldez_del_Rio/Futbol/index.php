<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <form action="index.php" method="get">
            <h2>Ficha ténica de Portero</h2>
            <div>

                Nombre:<input type="text" name="nombre">
            </div>
            <div>

                Dorsal:<input type="number" name="dorsal">
            </div>
            <div>

                Goles: <input type="number" name="goles">
            </div>
            <div>
                Paradas: <input type="number" name="paradas"> 
            </div>
            <div>
                <input type="submit">
            </div>
        </form>
        
    </div>
    <div>
        <form action="index.php" method="get">
            <h2>Ficha ténica de Jugador de Campo</h2>
            <div>

                Nombre:<input type="text" name="nombre">
            </div>
            <div>

                Dorsal:<input type="number" name="dorsal">
            </div>
            <div>

                Goles: <input type="number" name="goles">
            </div>
            <div>

                Pases: <input type="number" name="pases">
            </div>
            <div>

                Recuperaciones: <input type="number" name="recuperaciones">
            </div>
            <div>

                <input type="submit">
            </div>
        </form>
    </div>


</body>


<?php

use jugador as GlobalJugador;
use Portero as GlobalPortero;

session_start();

if(isset($_GET["nombre"])){

    $nombre = $_GET["nombre"];
}

if(isset($_GET["paradas"])){

    $paradas = intval($_GET["paradas"]);
}

if(isset($_GET["dorsal"])){

    $dorsal = intval($_GET["dorsal"]);
}

if(isset($_GET["goles"])){

    $goles = intval($_GET["goles"]);
}


$equipo = $_SESSION["equipo"];




class Portero{
    public $nombre;
    public $dorsal;
    public $goles;
    public $paradas;

    function __construct($nombre, $dorsal,$goles, $paradas)
    {
        $this -> $nombre = $nombre; 
        $this -> $dorsal = $dorsal;
        $this -> $goles = $goles;
        $this -> $paradas = $paradas;

    }
    
    function valoracion($paradas, $goles){

        $varParadas = $paradas * 5;
        $varGol = $goles * 30;

        $valoracion = $varGol+$varParadas;
        return $valoracion ;
    }
    function __toString(){
        return "Portero:<br/>".
                " | Nombre: ".$this->nombre.
                " | Dorsal: ".$this->dorsal.
                " | Y una valoración de: ".$this -> paradas*5 + $this-> goles*30;
    }
}




if(isset($_GET["nombre"])){

    $nombre = $_GET["nombre"];
}

if(isset($_GET["paradas"])){

    $paradas = intval($_GET["paradas"]);
}

if(isset($_GET["dorsal"])){

    $dorsal = intval($_GET["dorsal"]);
}

if(isset($_GET["goles"])){

    $goles = intval($_GET["goles"]);
}
if(isset($_GET["recuperaciones"])){

    $goles = intval($_GET["recuperaciones"]);
}


class jugador{
    public $nombre;
    public $dorsal;
    public $goles;
    public $pases;
    public $recuperaciones;

    function __construct($nombre, $dorsal,$goles,$pases,$recuperaciones)
    {
        $this -> $nombre = $nombre; 
        $this -> $dorsal = $dorsal;
        $this -> $goles = $goles;
        $this -> $pases = $pases;
        $this -> $recuperaciones = $recuperaciones;

    }

    function valoracion($pases,$recuperaciones, $goles){

        $varPases = $pases * 2;
        $varRecus = $recuperaciones * 3;
        $varGol = $goles * 30;

        $valoracion = $varGol+$varPases+$varRecus;

        return $valoracion;
    }
    function __toString(){
        return "Jugador:<br/>".
                " | Nombre: ".$this->nombre.
                " | Dorsal: ".$this->dorsal.
                " | Y una valoración de: ".$this -> valoracion;
    }
}

$equipo = array();

function __toString(){

    $GLOBALS["equipo"];
}
var_dump($equipo);

?>

</html>
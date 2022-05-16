<?php
session_start();

$nombre = $_GET["nombre"];
$goles = intval($_GET["goles"]);
$dorsal = intval($_GET["dorsal"]);
$paradas = intval($_GET["paradas"]);

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
                " | Y una valoración de: ".$this -> valoracion;
    }
}

$equipo[] = new Portero($nombre = $_GET["nombre"],
$goles = intval($_GET["goles"]),
$dorsal = intval($_GET["dorsal"]),
$paradas = intval($_GET["paradas"]),
);


?>
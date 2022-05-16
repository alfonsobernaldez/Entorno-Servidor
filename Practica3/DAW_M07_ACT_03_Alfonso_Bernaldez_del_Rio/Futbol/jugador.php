<?php
session_start();
$nombre = $_GET["nombre"];
$goles = intval($_GET["goles"]);
$dorsal = intval($_GET["dorsal"]);
$pases = intval($_GET["pases"]);
$recuperaciones = intval($_GET["recuperaciones"]);



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

<?php
session_start();

require_once("lib/nusoap.php");
$client = new soapclient("http://localhost:8012/Practicas/Practica5/servidorPractica5.php?wsdl");

echo "<h3>Funciones en el servidor</h3>";
$functions = $client->__getFunctions();
foreach($functions as $function){
	echo "<p>$function</p>";
}
echo "<br/>";


echo "<table border='1'>";
foreach ($result as $categoria) {
	$array = json_decode(json_encode($categoria), true);
	echo "<h2>Tabla de Categorias</h2>";
	echo "<tr>";
	echo "<td>".$array["identificador"]."</td>";
	echo "<td>".$array["nombre"]."</td>";
	echo "</tr>";
}
echo "</table>";
echo "<h2>Tabla Productos</h2>";
foreach ($result as $producto) {
	$array = json_decode(json_encode($producto), true);
	echo "<h2>Tabla de Categorias</h2>";
	echo "<tr>";
	echo "<td>".$array["identificador"]."</td>";
	echo "<td>".$array["nombre"]."</td>";
	echo "<td>".$array["categoria"]."</td>";
	echo "</tr>";
}
?>
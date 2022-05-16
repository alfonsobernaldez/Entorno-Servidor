<?php
session_start();

require_once("lib/nusoap.php");
$namespace = "http://localhost/Practicas/Practica5/servidorPractica5.php";
$server = new soap_server();
$server->configureWSDL("Practica5", $namespace);
$server->schemaTargetNamespace = $namespace;
$server->soap_defencoding = 'UTF-8';


//FUNCIONES

//LLAMADA A BASE DE DATOS
if(isset($_POST['categorias'])){
    function listaCategoria(){
        require_once("conexionPractica5.php");
        $misCategorias = array();
        $con = mysqli_connect($host, $user, $password, $db_name);
        $query = "select identificador, nombre from producto";
        $categorias = mysqli_query($con, $query);
        while($categoria=mysqli_fetch_assoc($categorias)){
            $misCategorias[] = $categoria;
        }
        mysqli_close($con);
        return $misCategorias;
    }

}else{

function listaProductos(){
	require_once("conexionPractica5.php");
	$misProductos = array();
	$con = mysqli_connect($host, $user, $password, $db_name);
	$query = "select identificador, nombre, categoria, categoria from producto where categoria = identificador";
	$productos = mysqli_query($con, $query);
	while($producto=mysqli_fetch_assoc($productos)){
		$misProductos[] = $producto;
	}
	mysqli_close($con);
	return $misProductos;
}
}



//REGISTRO DE FUNCIONES
$server->wsdl->addComplexType(
	'ArrayCategorias',
	'complexType',
	'array',	
	'sequence',
	'',
    'SOAP-ENC:Array',
    array(),
	array(array(
		'identificador' => array('name'=>'identificador', 'type'=>'xsd:int'),
		'nombre' => array('name'=>'nombre', 'type'=>'xsd:string'))
		
    ));

$server->wsdl->addComplexType(
    'Producto',
    'complexType',
    'array',
    '',
    array(
        'iddentificador' => array('name'=>'iddentificador', 'type'=>'xsd:int'),
        'nombre' => array('name'=>'nombre', 'type'=>'xsd:string'),
        'categoria' => array('name'=>'categoria', 'type'=>'xsd:int'))
    );
    $server->register(
		'listaCategoria',
		array(),
		array('return'=>'tns:listaCategoria'),
		$namespace,
		false,
		'rpc',
		'encoded',
		'Función que devuelve un array con los datos de las categorias de productos almacenadas en la base de datos.'
);


$server->service(file_get_contents("php://input"));

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2>Juego de la lotería</h2>
    <form action="comprobacion.php" method="get" name="numero">
        <p>Introduce un número entre 1 y 100</p><input type="number" name="num">
        <input type="submit">
    </form>


    <?php
    session_start();

    $loteria = rand(1, 100);
    $_SESSION["loteria"] = $loteria;
    echo "Shhh, no se lo digas a nadie pero este es el numero: ".$loteria;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2>Comprobacion del Juego de la lotería</h2>
    <form action="comprobacion.php" method="get" name="numero">
        <p>Introduce un número entre 1 y 100</p><input type="number" name="num">
        <input type="submit">
    </form>


    <?php
    session_start();

    $loteria = intval($_SESSION["loteria"]);

    if(isset($_GET['num'])){

        $num = $_GET['num'];
    }

    if ($num == $loteria) {
        echo " Has acertado enhorabuena";
    } elseif ($num > $loteria) {

        echo " tu número es mayor.";
    } elseif ($num < $loteria) {

        echo " tu número es menor.";
    } else {
        echo " ERROR FATAL, prueba a reiniciar el programa y escribir un número entero entre 1 y 100";
    }
    ?>

</body>

</html>
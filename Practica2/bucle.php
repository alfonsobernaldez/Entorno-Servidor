<?php

$bucle = "los bucles son faciles.";
$veces = $_POST["repeticiones"];
$repeticiones = intval($bucle) * intval($veces);
    echo "<h3>$repeticiones Se acabó </h3>";

?> 
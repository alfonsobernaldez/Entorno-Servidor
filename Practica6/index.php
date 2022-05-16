<?php
session_start();


echo "<form method='post' action='maps.php'>
<h2>¿Que tabla desea ver?</h2>
    Dependiendo del tipo de local<input type='radio' name='local' id='tipo'><br />
    Dependiendo de la poblacion<input type='radio' name='local' id='poblacion' ><br />
    <input type='submit' value='Enviar'>
    </form>";
?>
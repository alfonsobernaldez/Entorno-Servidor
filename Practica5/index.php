<?php
session_start();

echo "<form method ='post' action='servidorPractica5.php'>
<h2>¿Que tabla desea ver?</h2>
	Categorias<input type='radio' name='categorias'><br/>
	Productos<input type='radio' name='productos'><br/>
	<input type='submit' value='Enviar'>
	</form>";
?>
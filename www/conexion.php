<?php

#Conectamos con MySQL
$conexion = mysql_connect("trabajocreativo.com","root5","garfield") or die ("Fallo en el establecimiento de la conexi�n");

#Seleccionamos la base de datos a utilizar
mysql_select_db("kids") or die("Error en la selecci�n de la base de datos");

?>
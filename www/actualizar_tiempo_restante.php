<?php
include("conexion.php");

@$tiempo_restante = $_GET['tiempo_restante'];
@$id_usuario = $_GET["id_usuario"];

mysql_query ("UPDATE usuarios set tiempo_restante='".$tiempo_restante."' where id_usuario='$id_usuario'");
?>
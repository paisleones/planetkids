<?php
include("conexion.php");

@$lista_series = $_GET['lista_series'];
@$id_usuario = "1";

mysql_query ("UPDATE usuarios set series='".$lista_series."' where id_usuario='".$id_usuario."'");
?>

<script>
mensaje_aviso();
</script>
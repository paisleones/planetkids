<?php
include("conexion.php");

@$id_usuario = $_GET["id_usuario"];
@$lista_series = $_GET['lista_series'];

mysql_query ("UPDATE usuarios set series='".$lista_series."' where id_usuario='$id_usuario'");
?>

<script>
mensaje_aviso();
</script>
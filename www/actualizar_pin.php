<?php
include("conexion.php");

@$nuevo_pin = $_GET['nuevo_pin'];
@$id_usuario = "1";

mysql_query ("UPDATE usuarios set clave='".$nuevo_pin."' where id_usuario='".$id_usuario."'");
?>

<script>
mensaje_aviso();
</script>
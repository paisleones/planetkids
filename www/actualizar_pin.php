<?php
include("conexion.php");

@$id_usuario = $_GET["id_usuario"];
@$nuevo_pin = $_GET['nuevo_pin'];
@$nuevo_email = $_GET['nuevo_email'];

mysql_query ("UPDATE usuarios set clave='".$nuevo_pin."', email='".$nuevo_email."' where id_usuario='$id_usuario'");
?>

<script>
mensaje_aviso();
</script>
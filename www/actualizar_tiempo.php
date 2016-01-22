<?php
include("conexion.php");

@$nuevo_pin = $_GET['nuevo_pin'];
@$id_usuario = "1";

mysql_query ("UPDATE usuarios set tiempo='".$tiempo."', tiempo_activo='".$tiempo_activo."' where id_usuario='".$id_usuario."'");
?>


<script>
mensaje_aviso();
</script>

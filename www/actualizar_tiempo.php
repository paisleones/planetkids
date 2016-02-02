<?php
include("conexion.php");

@$tiempo = $_GET['tiempo'];
@$tiempo_activo = $_GET['tiempo_activo'];
@$id_usuario = "1";

mysql_query ("UPDATE usuarios set tiempo='".$tiempo."', tiempo_activo='".$tiempo_activo."' where id_usuario='".$id_usuario."'");
?>

<script>
localStorage.setItem("tiempo_restante", "<?php echo $tiempo ?>");
mensaje_aviso();
iniciar_contador();
</script>

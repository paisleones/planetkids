<?php
include("conexion.php");

@$id_usuario = $_GET["id_usuario"];
@$tiempo = $_GET['tiempo'];
@$tiempo_activo = $_GET['tiempo_activo'];

mysql_query ("UPDATE usuarios set tiempo='".$tiempo."', tiempo_activo='".$tiempo_activo."' where id_usuario='$id_usuario'");
?>

<script>
localStorage.setItem("tiempo_restante", "<?php echo $tiempo ?>");
mensaje_aviso();
iniciar_contador();
</script>

<?php
include("conexion.php");

@$tiempo = $_GET['tiempo'];
@$tiempo_activo = $_GET['tiempo_activo'];
@$id_usuario = "1";

mysql_query ("UPDATE usuarios set (tiempo='".$tiempo."', tiempo_activo='".$tiempo_activo."') where id_usuario='".$id_usuario."'");
?>


<script>
 navigator.notification.confirm(
                ("Se han actualizado las variables de tiempo. Ahora te llevaremos de vuelta a la pantalla principal."), // message
                alerta_guardar, // callback
                'Mensaje de Kids PLANET', // title
                'ACEPTAR' // buttonName
        );


	
	 function alerta_guardar(button){

        if(button=="1" || button==1)
        {	
$( "#siteloader_capitulos" ).html('');
cargardatos('lista_series.php','siteloader_menu');
        }
	 }

</script>

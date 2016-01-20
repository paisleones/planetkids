<?php
include("conexion.php");

@$lista_series = $_GET['lista_series'];
@$id_usuario = "1";

mysql_query ("UPDATE usuarios set series='".$lista_series."' where id_usuario='".$id_usuario."'");
?>

<script>
 navigator.notification.confirm(
                ("Se ha actualizado la información de las series. Ahora te llevaremos de vuelta a la pantalla principal."), // message
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
<script>
document.location.href="#arriba";
</script>


<!DOCTYPE HTML>

<html lang="es-ES">

<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui"/>
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<meta http-equiv='cache-control' content='no-cache'>
<meta http-equiv='expires' content='0'>
<meta http-equiv='pragma' content='no-cache'>

<!-- The main styles for the checkradios plugin to provide default styles -->
<link rel="stylesheet" href="css/jquery.checkradios.min.css" type="text/css"/>

<script type="text/javascript" src="js/jquery.js"></script>

<!-- Checkradios plugin -->
<script src="js/jquery.checkradios.min.js"></script>

<style>
.custom{   
vertical-align: middle;
	font-size:20px;
    color:#ff4b42;
	border:2px solid #ff4b42;
	margin-right: 10px;
	
	-webkitbox-shadow:inset 0 0.1em 0.1em rgba(0,0,0,0.0);
	 -moz-box-shadow:inset 0 0.1em 0.1em rgba(0,0,0,0.0);
	   box-shadow:inset 0 0.1em 0.1em rgba(0,0,0,0.0);
}

.custom.focus{
	-webkit-box-shadow:inset 0 0.1em 0.1em rgba(0,0,0,0.0), 0px 0px 3px rgba(255,0,132,0.0);
	-moz-box-shadow:inset 0 0.1em 0.1em rgba(0,0,0,0.0), 0px 0px 3px rgba(255,0,132,0.0);
	box-shadow:inset 0 0.1em 0.1em rgba(0,0,0,0.0), 0px 0px 3px rgba(255,0,132,0.0);
	border-color:#ff4b42;
	vertical-align: middle;
	margin-right: 10px;
}
</style>


<!-- CheckRadios Usage Examples -->
<script>
$(document).ready(function(){

    //Default 
	$('.checkradios').checkradios();
	
	//Custom Icon Examples (fontawsome) Different Icons
	$('.checkradios-fontawesome').checkradios({
	
	    checkbox: {		
		   iconClass:'fa fa-check-circle'		
		},		
		radio: {		
		   iconClass:'fa fa-star'		
		}
	});
	

	$('#callback-checkbox').checkradios({	
	    onChange: function(checked, $element, $realElement){	
		   if(checked){
		       $('.status').html('Checked').css('color', 'green');		   
		   }else{		   
		       $('.status').html('Not Checked').css('color', 'red');
		   }		
		}
	});
});
</script>
</head>


<body>

<div style="width: 100%; background: #ffffff; padding: 10px;">

<?php
setlocale(LC_ALL,"es_ES@euro","es_ES","esp");

ini_set("buffering ","0"); // desactivando el buffer a salida estandar
ob_implicit_flush(true); 
header("cache-control: no-cache");
ignore_user_abort(true);
set_time_limit(0);

include("conexion.php")
?>



<?php

@$id_usuario = "1";

@$result = mysql_query ("SELECT * from usuarios where id_usuario='$id_usuario'") or die("Error en la consulta SQL");
while( $row = mysql_fetch_array ( $result ))
{
@$clave = $row['CLAVE'];
@$filtro = $row['FILTRO'];
@$nombre = $row['NOMBRE'];
@$series = $row['SERIES'];
@$email = $row['EMAIL'];
@$tiempo = $row['TIEMPO'];
@$tiempo_activo = $row['TIEMPO'];
}
?>


<?php
@$result = mysql_query ("SELECT * from series where idioma='ES'") or die("Error en la consulta SQL1");
while( $row = mysql_fetch_array ( $result )) 
{
@$id = $row['ID'];
@$edad = $row['EDAD'];
@$idioma = $row['IDIOMA'];
@$nombre = $row['NOMBRE'];
@$enlace = $row['ENLACE'];
@$thumb = $row['THUMB'];
?>
<div style="width: 100%; height: 50px; padding: 10px; background: #f0f0f0; margin-bottom: 10px;">
<h4 style="color: #666666; font-weight: 200; font-size: 15px;"><input type="checkbox" class="checkradios custom" checked/> <?php echo $nombre ?></h4>
</div>
<?php
}
?>
</div>

</body>
</html>
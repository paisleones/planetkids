<a name="arriba"></a>
<script>
document.location.href="#arriba";
</script>

<html lang="es-ES">




<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui"/>
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<meta http-equiv='cache-control' content='no-cache'>
<meta http-equiv='expires' content='0'>
<meta http-equiv='pragma' content='no-cache'>


<?php
setlocale(LC_ALL,"es_ES@euro","es_ES","esp");

ini_set("buffering ","0"); // desactivando el buffer a salida estandar
ob_implicit_flush(true); 
header("cache-control: no-cache");
ignore_user_abort(true);
set_time_limit(0);

function extraer($TheStr, $sLeft, $sRight, $Sensitive=false){ 
$TheStrMin = $Sensitive ? $TheStr : strtolower ($TheStr); 
$pleft = strpos ($TheStrMin, $sLeft, 0); 
if ($pleft!==false){ 
$pright=strpos ($TheStrMin, $sRight, $pleft + strlen ($sLeft)); 
if ($pright!==false){ 
$Encontrado = (substr ($TheStr, $pleft + strlen ($sLeft), ($pright - ($pleft + strlen ($sLeft))))); 
$Resto = substr ($TheStr, 0,$pleft).substr ($TheStr, ($pright+strlen ($sRight))); 
//return array ($Encontrado,$Resto); 
$Encontrado=str_replace('"','',$Encontrado); 
//$Encontrado=str_replace(':','',$Encontrado);
$Encontrado=str_replace(',','',$Encontrado);
$Encontrado=str_replace("'",'',$Encontrado);
return $Encontrado; 
} 
} 
return ''; 
}

#Conectamos con MySQL
$conexion = mysql_connect("trabajocreativo.com","root5","garfield") or die ("Fallo en el establecimiento de la conexión");

#Seleccionamos la base de datos a utilizar
mysql_select_db("kids") or die("Error en la selección de la base de datos");


@$enlace = $_GET["enlace"];
@$titulo = $_GET["titulo"];

@$enlace="http://www.piraminetlab.com/enlaces.php?url_original=" . @$enlace;

@$codigo_lista =  file_get_contents($enlace);
@$codigo_lista = str_replace('"', "'",@$codigo_lista);

@$video = extraer(@$codigo_lista,"http://mvod.lvlt.rtve.e",".mp4");
@$video = "http://mvod.lvlt.rtve.e" . @$video . ".mp4";
@$fotograma = extraer(@$codigo_lista,"img src=","width");

?>

<script type="text/javascript" src="js/jquery.js"></script>
<script src="js/video.js"></script>


<div style="padding: 20px;">

<h2 style="line-height: 22px; padding-bottom: 0px; margin: 0px; padding: 0px; padding-bottom: 10px; position: relative; top: 0px; font-size: 20px; font-weight: 100; color: #666666; text-align: left; margin-bottom: 0px;">
<?php echo $titulo ?>
</h2>
<div id="div_video" style="margin: 0px; padding: 0px; width: 100%; height: 100%; min-height: 190px; background: url(images/cargando1.gif); background-repeat: no-repeat;background-position: center; position: relative; float: left; margin-bottom: 0px;">
</div>
</div>

<script>
    jwplayer("div_video").setup({
        file: "<?php echo @$video ?>",
		image: "<?php echo @$fotograma ?>",
		//logo: {
		//margin: '10',
		//file: 'images/logo1.png',
		//position: 'bottom-right',
		//link: ''
	//},
        primary: "html5",
        skin: "vapor",
		autostart: 'true',
		controlbar: "over",
      aspectratio: "16:9",
	  width: "100%",
	  stretching: "exactfit",
	controlbar: "bottom"
    });
    jwplayer().onDisplayClick(function() { jwplayer().setFullscreen(true); });
</script>




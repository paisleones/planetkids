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

<script type="text/javascript">
document.addEventListener("backbutton", onBackKeyDown, false)

function onBackKeyDown(){
cargardatos('lista_series.php','siteloader');
return false;
}

function onBackKeyDown1() {
        navigator.notification.confirm(
    'Desea salir de la aplicacion?',
    onConfirm,
    'Salir',
        'Cancelar,Salir'
        );
    }
    function onConfirm(button) {
       if (button==2){
       navigator.app.exitApp();
      }
    }
</script>


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

@$enlace = $_GET["enlace"];
@$titulo = $_GET["titulo"];

@$enlace="http://www.piraminetlab.com/enlaces.php?url_original=" . @$enlace;

@$codigo_lista =  file_get_contents($enlace);
@$codigo_lista = str_replace('"', "'",@$codigo_lista);

@$video = extraer(@$codigo_lista,"http://mvod.lvlt.rtve.e",".mp4");
@$video = "http://mvod.lvlt.rtve.e" . @$video . ".mp4";
@$fotograma = extraer(@$codigo_lista,"img src=","width");

?>

<script>
var videoUrl = "<?php echo @$video ?>";

  // Just play a video
  window.plugins.streamingMedia.playVideo(videoUrl);

  // Play a video with callbacks
  var options = {
    bgImageScale: "fit",
	isStreaming: "true",
    initFullscreen: true, // true(default)/false iOS only
  };
  window.plugins.streamingMedia.playVideo(videoUrl, options);
  </script>
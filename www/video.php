<html lang="es-ES">

<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui"/>
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<meta http-equiv='cache-control' content='no-cache'>
<meta http-equiv='expires' content='0'>
<meta http-equiv='pragma' content='no-cache'>

<script language="javascript" type="text/javascript">
//document.getElementById("siteloader_video").style.width = "100%";
//document.getElementById("siteloader_video").style.height = "100%";
</script>


<script>
$.modal.impl.close();
</script>


<?php
setlocale(LC_ALL,"es_ES@euro","es_ES","esp");


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
@$origen = $_GET["origen"];

if (@$origen=='clanrtve')
{
@$enlace="http://www.piraminetlab.com/enlaces.php?url_original=" . @$enlace;
@$codigo_lista =  file_get_contents($enlace);
@$codigo_lista = str_replace('"', "'",@$codigo_lista);
@$video = extraer(@$codigo_lista,"http://mvod.lvlt.rtve.e",".mp4");
@$video = "http://mvod.lvlt.rtve.e" . @$video . ".mp4";
@$fotograma = extraer(@$codigo_lista,"img src=","width");
}

if (@$origen=='vimeo')
{
@$enlace_video = str_replace("[-]","&",@$enlace);	
$enlace="https://savedeo.com/download?url=" . $enlace_video;
@$codigo_lista =  file_get_contents($enlace);

@$video = extraer(@$codigo_lista,"<a data-event","rel");
@$video = explode("href=",$video);
@$video = $video[1];
}

if (@$origen=='youtube')
{
@$enlace_video = str_replace("[-]","&",@$enlace);	
$enlace="http://keepvid.com/?url=" . $enlace_video;
@$codigo_lista =  file_get_contents($enlace);

@$video = extraer(@$codigo_lista,"http://redirector.googlevideo.com",">");
@$video = "http://redirector.googlevideo.com" . $video;
}
?>



<div id="div_video" style="margin: 0px; padding: 0px; width: 100%; height: 100%; min-height: 190px; background: url(http://kids.trabajocreativo.com/images/cargando1.gif); background-repeat: no-repeat;background-position: center; position: relative; float: left; margin-bottom: 0px;">
</div>

<script>
var videoUrl = "<?php echo @$video ?>";

  // Just play a video
  //window.plugins.streamingMedia.playVideo(videoUrl);

  // Play a video with callbacks
  var options = {
    bgImageScale: "fit",
	isStreaming: "true",
    initFullscreen: true, // true(default)/false iOS only
  };
  window.plugins.streamingMedia.playVideo(videoUrl, options);
  </script>
 
  

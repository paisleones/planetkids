<a name="top_of_page_capitulos" id="top_of_page_capitulos"></a>

<style>
#header_abajo {
    position: absolute;
    z-index: 2;
    top: 0;
    left: 0;
    width: 100%;
    background: #248DC1;
    padding: 0;
    color: #eee;
    font-size: 14px;
    line-height: 45px;
    text-align: center;
    height: 50px;
}
</style>

<script>
document.location.href="#arriba";

function mostrarseries() {
document.getElementById("top_menu1").style.display = 'none';
document.getElementById("top_menu").style.display = 'block';
$( "#siteloader_capitulos" ).html('');
document.location.href="#arriba";
$( "#siteloader_menu" ).show();
showmenu();
}
</script>


<!DOCTYPE HTML>

<html lang="es-ES">
<meta http-equiv="content-type" content="text/html;charset=ISO-8859-1" />

<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui"/>
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<meta http-equiv='cache-control' content='no-cache'>
<meta http-equiv='expires' content='0'>
<meta http-equiv='pragma' content='no-cache'>

<style>
.message {
  background: #248dc1;
  color: #FFF;
  position: absolute;
  top: -50px;
  left: 0;
  width: 100%;
  height: 50px;
  padding: 0px;
  transition: top 300ms cubic-bezier(0.17, 0.04, 0.03, 0.94);
  overflow: hidden;
  box-sizing: border-box;
}

.message h1 {
  color: #FFF;
}
</style>

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

include("conexion.php");

@$id_serie = $_GET["id_serie"];

@$result = mysql_query ("SELECT * from series where id='$id_serie';") or die("Error en la consulta SQL1");
while( $row = mysql_fetch_array ( $result )) 
{
@$edad = $row['EDAD'];
@$nombre = $row['NOMBRE'];
@$nombre = utf8_decode(@$nombre);
@$thumb_error = $row['THUMB'];
@$origen = $row['ORIGEN'];
}

?>


<script>
$( "#top_menu" ).show();
</script>



<style>
#content
{
-webkit-overflow-scrolling: touch;
}
</style>



<div id="content" role="main" style="text-align: center;" class="container">
<br>

<?php
@$contador = 0;


if (@$origen=="clanrtve")
{

@$enlace = "http://www.rtve.es/drmn/iso/catalog/?&col=3&extended=S&de=N&ll=N&ctx=INF&n1=Todos&c1=TEM&i1=" . $id_serie . "&t1=VID&f1=N&o1=FP&e1&q1=&csel=1";
@$codigo_lista =  file_get_contents($enlace);
@$codigo_lista = str_replace('"', "'",@$codigo_lista);

@$cadena = explode("linkElemento mainLink",$codigo_lista); 

for($i=1;$i<count($cadena);$i++)
{

@$elemento = $cadena[$i];

@$enlace = extraer(@$elemento,"href=","title");
@$titulo = extraer(@$elemento,"alt=","data");
@$titulo = strip_tags(@$titulo);

@$duracion = extraer(@$elemento,"<span class='dur'>","</span>");
@$thumb = extraer(@$elemento,"http://img.rtve.es/i","alt");
@$thumb = "http://img.rtve.es/i" . @$thumb;

@$resumen = extraer(@$elemento,"<!-- sumary -->","</div>");
@$resumen = strip_tags($resumen);

if (@$resumen=='')
{
@$resumen = @$titulo;
}

@$contador ++;


?>

<style>
#fondoajustable<?php echo $i ?> { 
	background-color: rgba(255,255,255,0.2); background: url(<?php echo $thumb ?>)  no-repeat center;
	background-position: center center;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
	height: 160px;
}
</style>

<a href="javascript: cargarvideo('video.php?enlace=<?php echo $enlace ?>&titulo=<?php echo $titulo ?>&origen=<?php echo $origen ?>','siteloader_video')">


<article id="post-46" class="post-46 post type-post status-publish format-standard hentry category-uncategorized bordes_redondeados" style="border: 0px; background: none;">

<header class="entry-header">
<div class="entry-thumbnail sombra">

<div class="images sombra bordes_redondeados" style="width: 100%; min-height: 100px; max-height: 160px; background-color: rgba(255,255,255,0.2); background-image: url(images/loading.gif); background-repeat: no-repeat;background-position: center; position: relative; float: left; margin-bottom: 0px;">

<img src="<?php echo $thumb ?>" class="imagenes bordes_redondeados" onerror="this.src='<?php echo @$thumb_error ?>';" style="width: 100%; min-height: 100px; max-height: 160px;"> 

</div>


</div>

<h2 style="line-height: 22px; padding-bottom: 0px; margin: 0px; padding: 0px; padding-bottom: 0px; position: relative; top: 10px; font-size: 18px; font-weight: 100; color: #ffffff; text-align: left;">
<?php echo $titulo ?>
    <br>
    <span class="date" style="font-size: 14px;"><strong><?php echo $duracion ?></strong> min.</span>
</h2>
	</header><!-- .entry-header -->
    </article>
    </a>

<?php
}
}

if (@$origen=="youtube")
{
	
@$result = mysql_query ("SELECT * from capitulos_youtube where activado='si'") or die("Error en la consulta SQL1");
while( $row = mysql_fetch_array ( $result )) 
{

@$titulo = $row['NOMBRE'];
@$duracion = $row['DURACION'];
@$enlace = $row['ENLACE'];
@$thumb = $row['THUMB'];
@$origen = $row['ORIGEN'];

@$enlace = str_replace("&","[-]",@$enlace);

@$contador ++;
?>


<a href="javascript: cargarvideo('video.php?enlace=<?php echo $enlace ?>&titulo=<?php echo $titulo ?>&origen=<?php echo $origen ?>','siteloader_video')">


<article id="post-46" class="post-46 post type-post status-publish format-standard hentry category-uncategorized bordes_redondeados" style="border: 0px; background: none;">

<header class="entry-header">
<div class="entry-thumbnail sombra">

<div class="images sombra bordes_redondeados" style="width: 100%; min-height: 100px; max-height: 160px; background-color: rgba(255,255,255,0.2); background-image: url(images/loading.gif); background-repeat: no-repeat;background-position: center; position: relative; float: left; margin-bottom: 0px;">

<img src="<?php echo $thumb ?>" class="imagenes bordes_redondeados" onerror="this.src='<?php echo @$thumb_error ?>';" style="width: 100%; min-height: 100px; max-height: 160px;"> 

</div>


</div>

<h2 style="line-height: 22px; padding-bottom: 0px; margin: 0px; padding: 0px; padding-bottom: 0px; position: relative; top: 10px; font-size: 18px; font-weight: 100; color: #ffffff; text-align: left;">
<?php echo $titulo ?>
    <br>
    <span class="date" style="font-size: 14px;"><strong><?php echo $duracion ?></strong> min.</span>
</h2>
	</header><!-- .entry-header -->
    </article>
    </a>


<?php
}
}


if (@$contador == 0)
{
?>
<style>
.rotar{
	-webkit-transform: rotateZ(15deg);
	-moz-transform: rotateZ(15deg);
	-o-transform: rotateZ(15deg);
}
</style>
<div style="width: 270px; height: 291px; margin: 0 auto; text-align: center; margin-top: 50px; background: url(images/robot-broken.png); background-size: 270px; background-repeat: no-repeat;">
<div style="width: 92px; height: 56px; padding: 0px; margin: 0px; background: none; position: relative; left: 150px; top: 30px;">
<font style="font-size: 14px; color: #ff4b42; line-height: 100%; font-weight: 400;">
<STRONG>UPS!</STRONG> ESTOS VIDEOS SE HAN ROTO ...</font>
</div>
<div class="load rotar" style="position: relative; top: 92px; left: -31px; z-index: 9999; width: 80px;">

</div>
</div>
<?php
}
?>


<script>
document.getElementById("top_menu").style.display = 'none';
$( "#header1" ).html('<h1 class="sectionTitle" style="height: 50px; background: #248dc1; color: #ffffff; padding-left: 0px; font-weight: 200; font-size: 17px;"><a href="javascript: mostrarseries();"><div style="width: 50px; height: 50px; background: #ff4b42; float: left; padding: 8px; margin-right: 20px;"><img src="images/atras.png" style="margin-top: 4px; height: 30px; vertical-align: middle;"></div></a><div style="padding-top: 4px;"><?php echo $nombre ?></div></h1>');
document.getElementById("top_menu1").style.display = 'block';
</script>


<br>

<br><br><br><br><br><br>

</div>



<div style="width: 40px; height: 40px; position: fixed; bottom: 10; right: 10px; padding: 0px; margin: 0px;">
<a href="#top_of_page_capitulos" >
<img src="http://kids2.trabajocreativo.com/images/up.png">
</a>
</div>



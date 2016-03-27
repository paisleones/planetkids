<script>
document.location.href="#arriba";
</script>


<a name="top_of_page_series" id="top_of_page_series"></a>


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



#simplemodal-overlay {
  background: rgba(0, 0, 0, 1);
}
#simplemodal-container {
  border: 10px solid #fff;
  background: #ffffff;
  padding: 0px;
  max-width: 90%;
  max-height: 80%;
  border-radius: 10px 10px 10px 10px;
-moz-border-radius: 10px 10px 10px 10px;
-webkit-border-radius: 10px 10px 10px 10px;
border: 0px solid #000000;
height: auto;
margin-top: -50px;

  -webkit-box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);
box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);
}
#simplemodal-container a.modalCloseImg {
  background:url(images/cerrar.png) no-repeat;
  width:62px;
  height:62px;
  display:inline;
  z-index:3200;
  position:absolute;
  top:-20px;
  right:-20px;
  cursor:pointer;
}

#principal:
{
border: 0px; margin: 0p; padding: 0px;
}
</style>

<script>

function showmenu()
{
document.getElementById("top_menu").style.display = 'block';
document.getElementById("top_menu1").style.display = 'none';
}

</script>


<!DOCTYPE HTML>

<html lang="es-ES">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
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

include("conexion.php");

?>



<style>
#content
{
-webkit-overflow-scrolling: touch;
}
</style>

<br>

<div id="content" role="main" style="text-align: center;">


<?php
@$result = mysql_query ("SELECT * from mensajes where activado='SI'") or die("Error en la consulta SQL");
while( $row = mysql_fetch_array ( $result ))
{
@$mensaje = $row['MENSAJE'];
@$fecha = $row['FECHA'];
@$color = $row['COLOR'];
}

if (@$mensaje <> '')
{
?>

<script>
function modalboxmensaje(ancho,alto)
{
$.modal('<div style="width: "' + ancho + '"px; height: "' + alto + '"px; max-width: 90%; max-height: 300px; z-index:9999; background: #ffffff; overflow-y: scroll; text-align: center; padding: 20px;"><h4 style="padding: 30px; color: #666666; font-weight: 400"><?php echo @$mensaje ?></h4></div>', {
	closeClass: "modalClose",
	containerCss:{
		padding:0,
		width:ancho,
		height:alto
	},
	overlayClose:true,
	autoResize:true,
	autoPosition:true,
	opacity:60,
	maxHeight: 500,
	minHeight: 50
	
});
}

setTimeout(function(){ modalboxmensaje(500,100); }, 6500);

</script>


<?php
}


$id_usuario = $_GET["id_usuario"];

@$result = mysql_query ("SELECT * from usuarios where id_usuario='$id_usuario'") or die("Error en la consulta SQL");
while( $row = mysql_fetch_array ( $result ))
{
@$clave = $row['CLAVE'];
@$filtro = $row['FILTRO'];
@$nombre = $row['NOMBRE'];
@$series = "," . $row['SERIES'];
@$email = $row['EMAIL'];
}

@$result = mysql_query ("SELECT * from series where idioma='ES' and activado='si' order by destacada desc") or die("Error en la consulta SQL1");
while( $row = mysql_fetch_array ( $result )) 
{
@$id = $row['ID'];
@$edad = $row['EDAD'];
@$idioma = $row['IDIOMA'];
@$nombre = $row['NOMBRE'];
@$enlace = $row['ENLACE'];
@$thumb = $row['THUMB'];
@$origen= $row['ORIGEN'];
@$destacada = $row['DESTACADA'];


$pos = strpos(@$excepciones, @$id);

@$cadena_buscada = @$id . ",";


@$encuentra = strpos(@$series, @$cadena_buscada);
if (@$encuentra <> false)
{
?>

<style>
#fondoajustable<?php echo $id ?> { 
	background-color: rgba(255,255,255,0.2); background: url(<?php echo $thumb ?>)  no-repeat center;
	background-position: center center;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
	height: 160px;
	
}
</style>


<a href="javascript: cargarcapitulos('lista_capitulos.php?id_serie=<?php echo @$id ?>','siteloader_capitulos','ESTOY CARGANDO CAPITULOS')">
<article id="post-46" class="post-46 post type-post status-publish format-standard hentry category-uncategorized bordes_redondeados" style="border: 0px; background: none;">

    <header class="entry-header">
				<div class="entry-thumbnail sombra">
                
                
                
                
<div class="images sombra bordes_redondeados" style="width: 100%; min-height: 100px; max-height: 160px; background-color: rgba(255,255,255,0.2); background-image: url(images/loading.gif); background-repeat: no-repeat;background-position: center; position: relative; float: left; margin-bottom: 0px;">

<?php
if (@$destacada == "si")
{
?>
<img src="http://kids2.trabajocreativo.com/images/destacada.png" style="position: absolute; top: -4px; left: -4px; width: 40px;">
<?php
}
?>


<img src="<?php echo $thumb ?>" class="imagenes bordes_redondeados" style="width: 100%; min-height: 100px; max-height: 160px;"> 

</div>	
        
           
            
            </div>
		
<h2 style="line-height: 22px; padding-bottom: 0px; margin: 0px; padding: 0px; padding-bottom: 10px; position: relative; top: 10px; font-size: 18px; font-weight: 100; color: #ffffff; text-align: left;">
			<?php echo $nombre ?>
		</h2>
				
	</header><!-- .entry-header -->
    </article>
    </a>

<?php  
}

}
?>



<br><br><br><br><br>


</div>

<script>
document.getElementById("top_menu").style.display = 'block';
document.getElementById("top_menu1").style.display = 'none';
</script>



<div style="width: 40px; height: 40px; position: fixed; bottom: 10; right: 10px; padding: 0px; margin: 0px;">
<a href="#top_of_page_series" >
<img src="http://kids2.trabajocreativo.com/images/up.png">
</a>
</div>



<script>
document.location.href="#arriba";
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

<br>

<div id="content" role="main" style="text-align: center;">

<?php

@$result = mysql_query ("SELECT * from opciones") or die("Error en la consulta SQL");
while( $row = mysql_fetch_array ( $result ))
{
@$excepciones = $row['EXCEPCIONES'];
}

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

@$result = mysql_query ("SELECT * from series where idioma='ES'") or die("Error en la consulta SQL1");
while( $row = mysql_fetch_array ( $result )) 
{
@$id = $row['ID'];
@$edad = $row['EDAD'];
@$idioma = $row['IDIOMA'];
@$nombre = $row['NOMBRE'];
@$enlace = $row['ENLACE'];
@$thumb = $row['THUMB'];

$pos = strpos(@$excepciones, @$id);

if ($pos === false && $edad>$filtro)
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


<a href="javascript: cargarcapitulos('lista_capitulos.php?id_serie=<?php echo @$id ?>','siteloader_capitulos')">
<article id="post-46" class="post-46 post type-post status-publish format-standard hentry category-uncategorized bordes_redondeados" style="border: 0px; background: none;">

    <header class="entry-header">
				<div class="entry-thumbnail sombra">
                
                
                
                
<div class="images sombra bordes_redondeados" style="width: 100%; min-height: 100px; max-height: 160px; background-color: rgba(255,255,255,0.2); background-image: url(images/loading.gif); background-repeat: no-repeat;background-position: center; position: relative; float: left; margin-bottom: 0px;">

<img src="<?php echo $thumb ?>" class="imagenes bordes_redondeados" style="width: 100%; min-height: 100px; max-height: 160px;"> 

</div>	
        
           
            
            </div>
		
<h2 style="line-height: 22px; padding-bottom: 0px; margin: 0px; padding: 0px; padding-bottom: 10px; position: relative; top: 10px; font-size: 20px; font-weight: 100; color: #ffffff; text-align: left;">
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



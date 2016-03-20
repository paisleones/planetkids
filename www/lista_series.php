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
document.getElementById("header").style.display = 'block';
document.getElementById("header_abajo").style.display = 'none';
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
<img src="http://kids.trabajocreativo.com/images/destacada.png" style="position: absolute; top: -4px; left: -4px; width: 40px;">
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
$( "#top_menu" ).html('<div id="header" style="text-align: left; width: 100%; display: block;" class="sombra"><h1 class="sectionTitle" style="color: #ffffff; padding-left: 0px; font-weight: 100; font-size: 18px;"><a class="button" href="#" id="menu"><div style="width: 50px; height: 50px; background: #ff4b42; float: left; padding: 8px; margin-right: 20px;"><img src="images/menu.png" style="margin-top: 4px; height: 30px; vertical-align: middle;"></div></a><div style="padding-top: 4px;">Kids PLANET</div></h1></div><div id="header_abajo" style="text-align: left; width: 100%; display: block;" class="sombra">1234</div>');

document.getElementById("header").style.display = 'block';
document.getElementById("header_abajo").style.display = 'none';
</script>

<script>
var _0xc02a=["\x6F\x6E\x74\x6F\x75\x63\x68\x73\x74\x61\x72\x74","\x74\x6F\x75\x63\x68\x73\x74\x61\x72\x74","\x63\x6C\x69\x63\x6B","\x62\x6F\x72\x64\x65\x72\x52\x61\x64\x69\x75\x73","\x72\x65\x6D\x6F\x76\x65\x43\x6C\x61\x73\x73","\x23\x68\x65\x61\x64\x65\x72","\x69\x6E\x61\x63\x74\x69\x76\x65","\x68\x61\x73\x43\x6C\x61\x73\x73","\x64\x69\x76\x2E\x63\x6F\x6E\x74\x65\x6E\x74","\x61\x64\x64\x43\x6C\x61\x73\x73","\x66\x6C\x61\x67","\x6C\x69","\x76\x69\x73\x69\x62\x6C\x65","\x65\x61\x63\x68","\x6F\x6E","\x61\x2E\x62\x75\x74\x74\x6F\x6E","\x69\x6E\x61\x63\x74\x69\x76\x65\x20\x66\x6C\x61\x67","\x6C\x69\x20\x61"];if(_0xc02a[0] in window){var click=_0xc02a[1];} else {var click=_0xc02a[2];} ;$(_0xc02a[15])[_0xc02a[14]](click,function (){$(_0xc02a[5])[_0xc02a[4]](_0xc02a[3]);if(!$(_0xc02a[8])[_0xc02a[7]](_0xc02a[6])){$(_0xc02a[8])[_0xc02a[9]](_0xc02a[6]);setTimeout(function (){$(_0xc02a[8])[_0xc02a[9]](_0xc02a[10]);} ,100);var _0x7767x2=0;$[_0xc02a[13]]($(_0xc02a[11]),function (_0x7767x3,_0x7767x4){_0x7767x2=40*_0x7767x3;setTimeout(function (){$(_0x7767x4)[_0xc02a[9]](_0xc02a[12]);} ,_0x7767x2);} );} ;} );function closeMenu(){$(_0xc02a[5])[_0xc02a[9]](_0xc02a[3]);$(_0xc02a[8])[_0xc02a[4]](_0xc02a[16]);setTimeout(function (){$(_0xc02a[11])[_0xc02a[4]](_0xc02a[12]);} ,300);} ;$(_0xc02a[8])[_0xc02a[14]](click,function (){if($(_0xc02a[8])[_0xc02a[7]](_0xc02a[10])){closeMenu();} ;} );$(_0xc02a[17])[_0xc02a[14]](click,function (_0x7767x6){closeMenu();} );
</script>





<div style="width: 40px; height: 40px; position: fixed; bottom: 10; right: 10px; padding: 0px; margin: 0px;">
<a href="#top_of_page_series" >
<img src="http://kids.trabajocreativo.com/images/up.png">
</a>
</div>





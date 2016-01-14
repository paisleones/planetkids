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



<style>
@-webkit-keyframes 
click-wave { 0% {
 width: 40px;
 height: 40px;
 opacity: 0.35;
 position: relative;
}
 100% {
 width: 200px;
 height: 200px;
 margin-left: -80px;
 margin-top: -80px;
 opacity: 0.0;
}
}
@-moz-keyframes 
click-wave { 0% {
 width: 40px;
 height: 40px;
 opacity: 0.35;
 position: relative;
}
 100% {
 width: 200px;
 height: 200px;
 margin-left: -80px;
 margin-top: -80px;
 opacity: 0.0;
}
}
@-o-keyframes 
click-wave { 0% {
 width: 40px;
 height: 40px;
 opacity: 0.35;
 position: relative;
}
 100% {
 width: 200px;
 height: 200px;
 margin-left: -80px;
 margin-top: -80px;
 opacity: 0.0;
}
}
@keyframes 
click-wave { 0% {
 width: 40px;
 height: 40px;
 opacity: 0.35;
 position: relative;
}
 100% {
 width: 200px;
 height: 200px;
 margin-left: -80px;
 margin-top: -80px;
 opacity: 0.0;
}
}

.option-input {
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  -o-appearance: none;
  appearance: none;
  position: relative;
  top: 0px;
  width: 40px;
  height: 40px;
  -webkit-transition: all 0.15s ease-out 0;
  -moz-transition: all 0.15s ease-out 0;
  transition: all 0.15s ease-out 0;
  background: #cbd1d8;
  border: none;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  outline: none;
  position: relative;
  margin-right: 0.5rem;
  z-index: 1000;
  vertical-align: middle;
}

.option-input:hover { background: #9faab7; }

.option-input:checked { background: #40e0d0; }

.option-input:checked::before {
  width: 40px;
  height: 40px;
  position: absolute;
  content: '\2716';
  display: inline-block;
  font-size: 26.66667px;
  text-align: center;
  line-height: 40px;
}

.option-input:checked::after {
  -webkit-animation: click-wave 0.65s;
  -moz-animation: click-wave 0.65s;
  animation: click-wave 0.65s;
  background: #40e0d0;
  content: '';
  display: block;
  position: relative;
  z-index: 100;
}

.option-input.radio { border-radius: 50%; }

.option-input.radio::after { border-radius: 50%; }
</style>


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
@$result = mysql_query ("SELECT * from series where idioma='ES' order by edad asc") or die("Error en la consulta SQL1");
while( $row = mysql_fetch_array ( $result )) 
{
@$id = $row['ID'];
@$edad = $row['EDAD'];
@$idioma = $row['IDIOMA'];
@$nombre = $row['NOMBRE'];
@$enlace = $row['ENLACE'];
@$thumb = $row['THUMB'];
?>
<div style="width: 100%; height: 60px; padding: 10px; background: #f0f0f0; margin-bottom: 10px; border-bottom: 1px solid #e1e0e0;">
<h4 style="color: #666666; font-weight: 200; font-size: 15px;"><input id="<?php echo $id ?>" type="checkbox" class="option-input checkbox" style="float: left;"checked/> <strong><?php echo $nombre ?></strong><br>hasta <?php echo $edad ?> años</h4>
</div>
<?php
}
?>
<br><br><br>
</div>


</body>
</html>
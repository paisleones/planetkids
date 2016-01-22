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

<!-- Comentar este bloque antes de subir
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/style5152.css">
<link rel="stylesheet" type="text/css" href="css/default.css" />
<script type="text/javascript" src="js/jquery.js"></script>
<!-- Has aqui --->



<script>

function seleccionar_edad(edad)
{
var marcado = $("#selectall").prop("checked");

if( marcado === true )
{
$(".option_"+edad).each(function() { //loop through each checkbox
$(".option_"+edad).prop("checked", true);    
            });
}
else 
{
$('.option_'+edad).each(function() { //loop through each checkbox
$(".option_"+edad).prop("checked", false);                     
            });   
}
}

function seleccionar_todas_edades()
{
var marcado = $("#selectall").prop("checked");

if( marcado === true )
{
$(".todas").each(function() { //loop through each checkbox
$(".todas").prop("checked", true);    
            });
}
else 
{
$(".todas").each(function() { //loop through each checkbox
$(".todas").prop("checked", false);                     
            });   
}
}


function filtrar_edad(edad)
{
$('.todos').hide();
$( "#check_selectall" ).html('<h4 style="color: #666666; font-weight: 200; font-size: 15px;"><input type="checkbox" class="option-input checkbox" onclick="seleccionar_edad(' + edad + ');" id="selectall" style="float: left;"/> <strong>Seleccionar todas las series</strong><br>Hasta ' + edad + '  años</h4>');
$( '.filtro_' + edad ).show();
toggle('submenu');
}


function sin_filtro()
{
$( "#check_selectall" ).html('<h4 style="color: #666666; font-weight: 200; font-size: 15px;"><input type="checkbox" class="option-input checkbox" onclick="seleccionar_todas_edades();" id="selectall" style="float: left;"/> <strong>Seleccionar todas las series</strong><br>Todas las edades</h4>');
$('.todos').show();
toggle('submenu');
}


function guardar_series()
{
	var checkboxValues = "";
$('input[name="que_serie"]:checked').each(function() {
	checkboxValues += $(this).val() + ",";
});
$("#actualizar_series").load("actualizar_series.php?lista_series=" + checkboxValues);
}


function guardar_tiempo()
{
var tiempo_activo = $("#s2").prop("checked");
var tiempo_de_visionado = $('#tiempo_de_visionado').val();
localStorage.setItem("tiempo_de_visionado", tiempo_de_visionado);
localStorage.setItem("tiempo_activo", tiempo_activo);
$("#actualizar_tiempo").load("http://kids.trabajocreativo.com/actualizar_tiempo.php?tiempo=" + tiempo_de_visionado + "&tiempo_activo=" + tiempo_activo);
//actualizardatos("actualizar_tiempo.php?tiempo=" + tiempo_de_visionado + "&tiempo_activo=" + tiempo_activo ,"actualizar_tiempo");
}

function guardar_pin()
{
var nuevo_pin = $('#nuevo_pin').val();
localStorage.setItem("clavee", nuevo_pin);
$("#actualizar_pin").load("http://kids.trabajocreativo.com/actualizar_tiempo.php?nuevo_pin=" + nuevo_pin);
//actualizardatos("actualizar_tiempo.php?tiempo=" + tiempo_de_visionado + "&tiempo_activo=" + tiempo_activo ,"actualizar_tiempo");
}



function toggle(id) {
    var element = document.getElementById(id);

    if (element) {
        var display = element.style.display;

        if (display == "none") {
            element.style.display = "block";
        } else {
            element.style.display = "none";
        }
    }
}

</script>



<style>
.dropdown {
color: #555;
imargin: 3px -22px 0 0;
position: relative;
text-align: right;
height: 17px;
text-align:left;
color: #ffffff;
}
.submenu
{
padding: 10px;
background: #ffffff;
position: absolute;
top: 34px;
left: 3px;
z-index: 99999;
width: 200px;
display: none;
margin-left: 10px;
padding: 0px 0 0px;
border-radius: 0px;
-webkit-box-shadow: 0px 2px 2px 2px rgba(0,0,0,0.2);
-moz-box-shadow: 0px 2px 2px 2px rgba(0,0,0,0.2);
box-shadow: 0px 2px 2px 2px rgba(0,0,0,0.2);
text-align: left;
}

.pp_top {
   height: 20px; \\ default 20
}

.opciones
{
padding: 14px;
border-bottom: 1px solid #f0f0f0;
color: #666666;
font-size: 14px;
}

</style>



   <link type="text/css" rel="stylesheet" href="css/jquery.pwstabs.min.css">

   <script src="js/jquery.pwstabs.min.js"></script>

  

    <script>
    jQuery(document).ready(function ($) {
        $('.tabset2').pwstabs({
            effect: 'none',
            defaultTab: 1,
            containerWidth: '100%'
        });      

        // Colors Demo
        $('.pws_demo_colors a').click(function (e) {
            e.preventDefault();
            $('.pws_tabs_container').removeClass('pws_theme_cyan pws_theme_grey pws_theme_violet pws_theme_green pws_theme_yellow pws_theme_gold pws_theme_orange pws_theme_red pws_theme_purple pws_theme_dark_cyan pws_theme_dark_grey pws_theme_dark_violet pws_theme_dark_green pws_theme_dark_yellow pws_theme_dark_gold pws_theme_dark_orange pws_theme_dark_red pws_theme_dark_purple').addClass('pws_theme_'+$(this).attr('data-demo-color') );
        });

    });
    </script>



<style>
.slider-v1 + label {
  position: relative;
  display: block;
  width: 5.5em;
  height: 3em;
  cursor: pointer;
  border-radius: 1.5em;
  background: #f0f0f0;
  box-shadow: 0 0.07em 0.1em -0.1em rgba(0, 0, 0, 0.2) inset, 0 0.05em 0.08em -0.01em rgba(255, 255, 255, 0.5);
}

.slider-v1 + label::before {
  position: absolute;
  content: '';
  width: 2em;
  height: 2em;
  top: 0.5em;
  left: 0.5em;
  border-radius: 50%;
  transition: 250ms ease-in-out;
  background: #9bd7d5;
  box-shadow: 0 0.1em 0.01em -0.01em rgba(255, 255, 255, 0.2) inset, 0 0.2em 0.2em -0.1em rgba(0, 0, 0, 0.1);
}

.slider-v1 + label::after {
  position: absolute;
  content: '';
  width: 1em;
  height: 1em;
  top: 1em;
  left: 6em;
  border-radius: 50%;
  transition: 250ms ease-in;
  background: linear-gradient(rgba(0, 0, 0, 0.07), rgba(255, 255, 255, 0.1)), #ddd;
  box-shadow: 0 0.08em 0.15em -0.1em rgba(0, 0, 0, 0.5) inset, 0 0.05em 0.08em -0.01em rgba(255, 255, 255, 0.7), -7.25em 0 0 -0.25em rgba(0, 0, 0, 0.3);
}

.slider-v1:checked + label::after {
  background: linear-gradient(rgba(0, 0, 0, 0.07), rgba(255, 255, 255, 0.1)), #4c6;
  box-shadow: 0 0.08em 0.15em -0.1em rgba(0, 0, 0, 0.5) inset, 0 0.05em 0.08em -0.01em rgba(255, 255, 255, 0.7), -7.25em 0 0 -0.25em rgba(0, 0, 0, 0.12);
}

.slider-v1:checked + label::before {
  left: 3em;
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

.option-input:checked { background: #9bd7d5; }

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



.option-input.radio { border-radius: 50%; }

.option-input.radio::after { border-radius: 50%; }


*, *:before, *:after {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

select {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  border-radius: 0;
}

label[for=favcity] {
  position: relative;
  display: block;
  width: 100%;
  overflow: hidden;
  cursor: pointer;
}

label[for=favcity]::after {
  content: ' ';
  position: absolute;
  right: 0;
  top: 0;
  width: 34px;
  height: 32px;
  display: block;
  background: #ff4b42 url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAOBAMAAAGq7RFVAAAAJ1BMVEX///////////////////////////////////////////////////9Ruv0SAAAADHRSTlMACAoREoKDt7y9zc5qtZoyAAAAcklEQVQIHQXBsQnCUAAFwFOCCKbIABaWERzi1yaFAzmEpHYEC8GUKVQEkbyhvOOkZqdWt0/QYKqLzQeF7dv6y/RLwa2wYtk4Xxxe+t8yd1WuM/rcUc2gYHEeoP02umSgTR50ybBPRuiSZAS6ZAQ4jgCAPyjYJiRH4fymAAAAAElFTkSuQmCC') no-repeat center center;
  pointer-events: none;
  margin: 2px;
}

label[for=favcity] select {
  border: 0px solid #eeeeee;
  background: white;
  padding: 7px 20px 7px 20px;
  width: 100%;
  font-size: 14px;
  color: #666666;
  font-family: Tahoma;
  cursor: pointer;
}

label[for=favcity] select::-ms-expand {
    display: none;
}

label[for=favcity] :-moz-any(select) {
  width: 110%;
}

label[for=favcity].ie9 select {
  width: 110%;
}

label[for=favcity] select:focus {
  outline: 1px dotted #A9A9A9;
}


.pws_tab_active
{
	border: 1px solid #9bd7d5;
	border-bottom: 0px;
	background: #ffffff;
	color: #666666;
}



.slider {
  width: 100%;
  max-width: 320px;
}

input[type="range"] {
  -webkit-appearance: none !important;
  width: 100%;
  height: 15px;
  background: #f0f0f0;
  border-top: 1px solid #e1e0e0;
  border-radius: 10px;
  margin: auto;
  transition: all 0.3s ease;
}
input[type="range"]:hover {
  background-color: #f0f0f0;
}

input[type="range"]::-webkit-slider-thumb {
  -webkit-appearance: none !important;
  width: 24px;
  height: 24px;
  background-color: #9bd7d5;
  border-radius: 60px;
  box-shadow: 0 0.1em 0.01em -0.01em rgba(255, 255, 255, 0.2) inset, 0 0.2em 0.2em -0.1em rgba(0, 0, 0, 0.1);
  transition: all 0.5s ease;
}
input[type="range"]::-webkit-slider-thumb:hover {
  background-color: #457d66;
}
input[type="range"]::-webkit-slider-thumb:active {
  box-shadow: 0px 0px 1px #3c6d59;
}

#rangevalue {
  text-align: center;
  font-size: 18px;
  display: block;
  margin: auto;
  padding: 10px 0px;
  width: 100%;
  font-weight: 100;
  color: #248dc1;
}
</style>


</head>


<body>


<div class="headerBack" style="position: fixed; top: 0px; left: 0px; z-index: 99999;">
<div id="header" style="text-align: left;">

<h1 class="sectionTitle" style="color: #ffffff; padding-left: 0px; font-weight: 100">
<a href="javascript: mostrarmenu();">
<div style="width: 50px; height: 50px; background: #ff4b42; float: left; padding: 8px; margin-right: 20px;">
<img src="images/atras.png" style="margin-top: 4px; height: 30px; vertical-align: middle;">
</div>
</a>
Zona Padres
</h1>

</div>
</div>

<div style="width: 100%; background: #ffffff; padding: 10px;">

<?php
setlocale(LC_ALL,"es_ES@euro","es_ES","esp");

include("conexion.php");


@$id_usuario = "1";


@$result = mysql_query ("SELECT * from opciones") or die("Error en la consulta SQL");
while( $row = mysql_fetch_array ( $result ))
{
@$excepciones = $row['EXCEPCIONES'];
}


@$result = mysql_query ("SELECT * from usuarios where id_usuario='$id_usuario'") or die("Error en la consulta SQL");
while( $row = mysql_fetch_array ( $result ))
{
@$clave = $row['CLAVE'];
@$filtro = $row['FILTRO'];
@$nombre = $row['NOMBRE'];
@$series = $row['SERIES'];
@$email = $row['EMAIL'];
@$tiempo = $row['TIEMPO'];
@$tiempo_activo = $row['TIEMPO_ACTIVO'];

if (@$tiempo == "")
{
@$tiempo = "60";
}

if (@$tiempo_activo == "" or @$tiempo_activo == "false")
{
@$checked_tiempo = "";
}
else
{
@$checked_tiempo = "checked";
}

}
?>


      <div class="tabset2" style="padding: 0px; margin: 0px;">
         <div data-pws-tab="tab11" data-pws-tab-name="Series" style="width: 100%;">
<hr>


 <div class="dropdown" style="position: relative; top: 10px; height: 40px;">
	<a href="javascript: toggle('submenu');" class="boton" style="padding-right: 10px; color: #ffffff;">
    FILTRO POR EDAD ▼
	</a>
    
	<div id="submenu" class="submenu  sombradebajo" style="display: none; padding: 10px; margin: 0px; padding-bottom: 0px;">

<aside id="recent-comments-1" class="widget widget_recent_comments">
<ul>

<li class="opciones">
<a href="javascript: sin_filtro();"><span class="comment-author-link" style="color: #666666;"><strong>TODAS LAS SERIES</strong><span></a>
</li>
<li class="opciones">
<a href="javascript: filtrar_edad('4');"><span class="comment-author-link" style="color: #666666;">HASTA <strong>4 AÑOS</strong><span></a>
</li>
<li class="opciones">
<a href="javascript: filtrar_edad('5');"><span class="comment-author-link" style="color: #666666;">HASTA <strong>5 AÑOS</strong></span></a>
</li>
<li class="opciones">
<a href="javascript: filtrar_edad('7');"><span class="comment-author-link" style="color: #666666;">HASTA <strong>7 AÑOS</strong></span></a>
</li>
<li class="opciones">
<a href="javascript: filtrar_edad('8');"><span class="comment-author-link" style="color: #666666;">HASTA <strong>8 AÑOS</strong></span></a>
</li>

</ul>
</aside>


	</div>
	</div>
<form name="lista_de_series" id="lista_de_series">

    <a href="javascript: guardar_series();" class="boton_verde" style="width: 90px; color: #ffffff; position: absolute; right: 20px; top: 21px;">
    GUARDAR
	</a>
<hr>

<div style="width: 100%; height: 60px; padding: 10px; background: #e3fefd; margin-bottom: 10px; border-bottom: 1px solid #c3edec;" id="check_selectall">
<h4 style="color: #666666; font-weight: 200; font-size: 15px;"><input type="checkbox" class="option-input checkbox" onclick="seleccionar_todas_edades();" id="selectall" style="float: left;"/> <strong>Seleccionar todas las series</strong><br>Todas las edades</h4>
</div>

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

@$cadena_buscada = @$id . ",";
@$encuentra = strpos(@$series, @$cadena_buscada);

@$encuentra_excepciones = strpos(@$excepciones, @$cadena_buscada);

if ($encuentra_excepciones === false)
{

if ($encuentra === false)
{
@$encontrado = "";
}
else
{
@$encontrado = "checked";
}
?>
<div style="width: 100%; height: 60px; padding: 10px; background: #f0f0f0; margin-bottom: 10px; border-bottom: 1px solid #e1e0e0;" class="todos filtro_<?php echo @$edad ?>">
<h4 style="color: #666666; font-weight: 200; font-size: 15px;">
<input name="que_serie" value="<?php echo $id ?>" id="<?php echo $id ?>" type="checkbox" class="todas option_<?php echo @$edad ?> option-input checkbox" style="float: left;" <?php echo @$encontrado ?>/> 
<strong><?php echo $nombre ?></strong><br>hasta <?php echo $edad ?> años</h4>
</div>
<?php
}
}
?>
</form>

<div style="padding: 0px; margin: 0px; width: 0px; height: 0px; position: relative;" id="actualizar_series">   
</div>

         </div>
         <div data-pws-tab="tab22" data-pws-tab-name="Tiempo" style="text-align: justify; min-height: 400px;">
         <hr>
<font style="color: #666666;">         
La opción "<strong>control del tiempo</strong>" ayuda a la supervision del uso del telefono. Solo tiene que especificar el tiempo de uso de la aplicación y automaticamente se cerrara la aplicación cuando llegue la hora ( maximo 2 horas ).
            </font>
  <br><br>          
            
<h4>Activar control de tiempo</h4>
<br>
  <input type="checkbox" class="slider-v1" id="s2" <?php echo @$checked_tiempo ?> style="display: none;" name="tiempo_activado"/>
  <label for="s2"></label>
  <br>
  <h4>Tiempo de visionado (minutos)</h4>
<br>


  
  <div class="slider">
  <input type = "range" min="5" max="120" onchange="rangevalue.value=value" name="tiempo_de_visionado" id="tiempo_de_visionado"/>
	<output id="rangevalue" style="float: left;"><?php echo @$tiempo ?> </output>
  </div>
  
<br><br>
<hr>
<br>

<a href="javascript: guardar_tiempo();" class="boton_verde" style="padding-left: 20px; padding-right: 20px;">
<font style="font-weight: 200; font-size: 16px; color: #ffffff;">GUARDAR</font>
</a>

<div style="padding: 0px; margin: 0px; width: 0px; height: 0px; position: relative;" id="actualizar_tiempo">   
</div>
<br><br>

            
         </div>
         <div data-pws-tab="tab33" data-pws-tab-name="Seguridad" style="text-align: justify;">
         <hr>
         <font style="color: #666666;"> 
            Donec pellentesque placerat mi, at rutrum metus tempor posuere. Nunc ut pellentesque purus. Nam auctor, magna eget elementum maximus, ligula augue ornare massa, id varius magna mi vel diam. Cras vel pharetra risus. Suspendisse eu varius nisl, a laoreet est. Proin vitae erat metus. Curabitur dictum elit in ante feugiat cursus.

<br>
<hr>
<style> 
#nuevo_pin
{
font-family: 'Quicksand';
font-weight: 100;
width: 200px; 
border: 1px solid #f0f0f0; 
padding: 10px;
text-align: center;
font-size: 60px;
height: 80px;
color: #ff4b42;
} 
</style>
 
<form name="cambiar_pin" id="cambiar_pin">    
<input maxlength="4" id="nuevo_pin" name="nuevo_pin" type="tel">
<p>
<br><br>
 <a href="javascript: guardar_pin();" class="boton_verde" style="padding-left: 20px; padding-right: 20px;">
<font style="font-weight: 200; font-size: 16px; color: #ffffff;">GUARDAR</font>
</a>
</form>   
<br><br><br>    
<div style="padding: 0px; margin: 0px; width: 0px; height: 0px; position: relative;" id="actualizar_pin">   
</div>
            
            </font>
            
         </div>
      </div><!-- tabset2 -->

<br><br><br>
</div>


</body>
</html>
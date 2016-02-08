<script>
document.location.href="#arriba";
</script>


<?php
@$id_usuario = $_GET["id_usuario"];
@$nueva = $_GET["nueva"];
?>

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
$( "#boton_series" ).html('<img src="http://kids.trabajocreativo.com/images/cargando1.gif" style="position: absolute; right: 60px; top: 25px;">');
var checkboxValues = "";
$('input[name="que_serie"]:checked').each(function() {
	checkboxValues += $(this).val() + ",";
});
actualizardatos("actualizar_series.php?id_usuario=<?php echo @$id_usuario ?>&lista_series=" + checkboxValues ,"actualizar_series");
//$("#actualizar_series").load("actualizar_series.php?lista_series=" + checkboxValues);
}

function cerrar_sesion()
{
$( "#boton_cerrar_sesion" ).html('<img src="http://kids.trabajocreativo.com/images/cargando1.gif" style="position: relative; left: 40px; top: 5px;">');

localStorage.removeItem('id_usuario');
localStorage.removeItem('clave');
localStorage.removeItem('email');
localStorage.removeItem('tiempo_de_visionado');
localStorage.removeItem('tiempo_restante');
localStorage.removeItem('tiempo_activo');

actualizardatos("actualizar_tiempo_restante.php?id_usuario=<?php echo @$id_usuario ?>&tiempo_restante=" + tiempo_restante ,"actualizar_pin");

document.getElementById("contador").style.display = 'none';
parar_cronometro();
 
document.getElementById("siteloader_cuenta").style.display = 'block';
actualizardatos('crear_cuenta.php','siteloader_cuenta');
$( '#siteloader_capitulos' ).html('');
}

function preguntar_cerrar_sesion()
{
 navigator.notification.confirm(
                ("Realmente quieres cerrar la sesión?"), // message
                alert_exit, // callback
                'Mensaje de Kids PLANET', // title
                'ACEPTAR,CANCELAR' // buttonName
        );

    }
	
	 function alert_exit(button){

        if(button=="1" || button==1)
        {

            cerrar_sesion()
        }

}



function guardar_tiempo()
{
$( "#boton_tiempo" ).html('<img src="http://kids.trabajocreativo.com/images/cargando1.gif" style="position: relative; left: 40px; top: 5px;">');
var tiempo_activo = $("#s2").prop("checked");
var tiempo_de_visionado = $('#rangeslider').val();
localStorage.setItem("tiempo_de_visionado", tiempo_de_visionado);
localStorage.setItem("tiempo_activo", tiempo_activo);
localStorage.setItem("tiempo_restante", tiempo_de_visionado);
//$("#actualizar_tiempo").load("http://kids.trabajocreativo.com/actualizar_tiempo.php?tiempo=" + tiempo_de_visionado + "&tiempo_activo=" + tiempo_activo);
actualizardatos("actualizar_tiempo.php?id_usuario=<?php echo @$id_usuario ?>&tiempo=" + tiempo_de_visionado + "&tiempo_activo=" + tiempo_activo + "&tiempo_restante=" + tiempo_activo ,"actualizar_tiempo");
}

function guardar_pin()
{
$( "#boton_pin" ).html('<img src="http://kids.trabajocreativo.com/images/cargando1.gif" style="position: relative; left: 40px; top: 5px;">');
var nuevo_email = $('#nuevo_email').val();
var nuevo_pin = $('#nuevo_pin').val();
localStorage.setItem("clave", nuevo_pin);
//$("#actualizar_pin").load("http://kids.trabajocreativo.com/actualizar_tiempo.php?nuevo_pin=" + nuevo_pin);
actualizardatos("actualizar_pin.php?id_usuario=<?php echo @$id_usuario ?>&nuevo_pin=" + nuevo_pin + "&nuevo_email=" + nuevo_email,"actualizar_pin");
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

 #tabs {
    overflow: hidden;
    width: 100%;
    margin: 0;
    padding: 0;
    list-style: none;
  }

  #tabs li {
    float: left;
    margin: 0 -15px 0 0;
	height: 30px;
  }

  #tabs a {
    float: left;
    position: relative;
    padding: 0 20px;
    height: 0;
    line-height: 40px;
    text-transform: uppercase;
    text-decoration: none;
    color: #fff;      
    border-right: 20px solid transparent;
    border-bottom: 40px solid #3D3D3D;
    border-bottom-color: #777\9;
    opacity: .3;
    filter: alpha(opacity=20);      
  }

  #tabs a:hover,
  #tabs a:focus {
    border-bottom-color: #2ac7e1;
    opacity: 1;
    filter: alpha(opacity=100);
  }

  #tabs a:focus {
    outline: 0;
  }

  #tabs #current {
    z-index: 3;
    border-bottom-color: #248dc1;
    opacity: 1;
    filter: alpha(opacity=100);      
  }

  /* ----------- */
  #contenido {
      background: #fff;
      border-top: 1px solid #248dc1;
      padding: 2em;
      /*height: 220px;*/
  }

  #contenido h2,
    #contenido h3,
    #contenido p {
      margin: 0 0 0px 0;
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



.can-toggle {
  position: relative;
}
.can-toggle *, .can-toggle *:before, .can-toggle *:after {
  -moz-box-sizing: border-box;
       box-sizing: border-box;
}
.can-toggle input[type="checkbox"] {
  opacity: 0;
  position: absolute;
  top: 0;
  left: 0;
}
.can-toggle input[type="checkbox"][disabled] ~ label {
  pointer-events: none;
}
.can-toggle input[type="checkbox"][disabled] ~ label .can-toggle__switch {
  opacity: 0.4;
}
.can-toggle input[type="checkbox"]:checked ~ label .can-toggle__switch:before {
  content: attr(data-unchecked);
  left: 0;
}
.can-toggle input[type="checkbox"]:checked ~ label .can-toggle__switch:after {
  content: attr(data-checked);
}
.can-toggle label {
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  position: relative;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
}
.can-toggle label .can-toggle__label-text {
  -webkit-flex: 1;
      -ms-flex: 1;
          flex: 1;
  padding-left: 32px;
}
.can-toggle label .can-toggle__switch {
  position: relative;
}
.can-toggle label .can-toggle__switch:before {
  content: attr(data-checked);
  position: absolute;
  top: 0;
  text-transform: uppercase;
  text-align: center;
}
.can-toggle label .can-toggle__switch:after {
  content: attr(data-unchecked);
  position: absolute;
  z-index: 5;
  text-transform: uppercase;
  text-align: center;
  background: white;
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
}
.can-toggle input[type="checkbox"][disabled] ~ label {
  color: rgba(119, 119, 119, 0.5);
}
.can-toggle input[type="checkbox"]:focus ~ label .can-toggle__switch, .can-toggle input[type="checkbox"]:hover ~ label .can-toggle__switch {
  background-color: #c0c0c0;
}
.can-toggle input[type="checkbox"]:focus ~ label .can-toggle__switch:after, .can-toggle input[type="checkbox"]:hover ~ label .can-toggle__switch:after {
  color: #5e5e5e;
}
.can-toggle input[type="checkbox"]:hover ~ label {
  color: #6a6a6a;
}
.can-toggle input[type="checkbox"]:checked ~ label:hover {
  color: #55bc49;
}
.can-toggle input[type="checkbox"]:checked ~ label .can-toggle__switch {
  background-color: #9db53d;
}
.can-toggle input[type="checkbox"]:checked ~ label .can-toggle__switch:after {
  color: #4fb743;
}
.can-toggle input[type="checkbox"]:checked:focus ~ label .can-toggle__switch, .can-toggle input[type="checkbox"]:checked:hover ~ label .can-toggle__switch {
  background-color: #9db53d;
}
.can-toggle input[type="checkbox"]:checked:focus ~ label .can-toggle__switch:after, .can-toggle input[type="checkbox"]:checked:hover ~ label .can-toggle__switch:after {
  color: #47a43d;
}
.can-toggle label .can-toggle__label-text {
  -webkit-flex: 1;
      -ms-flex: 1;
          flex: 1;
}
.can-toggle label .can-toggle__switch {
  -webkit-transition: background-color 0.3s cubic-bezier(0, 1, 0.5, 1);
          transition: background-color 0.3s cubic-bezier(0, 1, 0.5, 1);
  background: #c0c0c0;
}
.can-toggle label .can-toggle__switch:before {
  color: rgba(255, 255, 255, 0.5);
}
.can-toggle label .can-toggle__switch:after {
  -webkit-transition: -webkit-transform 0.3s cubic-bezier(0, 1, 0.5, 1);
  transition: transform 0.3s cubic-bezier(0, 1, 0.5, 1);
  color: #777;
}
.can-toggle input[type="checkbox"]:focus ~ label .can-toggle__switch:after, .can-toggle input[type="checkbox"]:hover ~ label .can-toggle__switch:after {
  box-shadow: 0 3px 3px rgba(0, 0, 0, 0.4);
}
.can-toggle input[type="checkbox"]:checked ~ label .can-toggle__switch:after {
  -webkit-transform: translate3d(65px, 0, 0);
          transform: translate3d(65px, 0, 0);
}
.can-toggle input[type="checkbox"]:checked:focus ~ label .can-toggle__switch:after, .can-toggle input[type="checkbox"]:checked:hover ~ label .can-toggle__switch:after {
  box-shadow: 0 3px 3px rgba(0, 0, 0, 0.4);
}
.can-toggle label {
  font-size: 18px;
  font-weight: 800;
}
.can-toggle label .can-toggle__switch {
  height: 32px;
  -webkit-flex: 0 0 134px;
      -ms-flex: 0 0 134px;
          flex: 0 0 134px;
  border-radius: 2px;
}
.can-toggle label .can-toggle__switch:before {
  left: 67px;
  font-size: 12px;
  line-height: 36px;
  width: 67px;
  padding: 0 12px;
}
.can-toggle label .can-toggle__switch:after {
  top: 2px;
  left: 2px;
  border-radius: 2px;
  width: 65px;
  line-height: 32px;
  font-size: 12px;
}
.can-toggle label .can-toggle__switch:hover:after {
  box-shadow: 0 3px 3px rgba(0, 0, 0, 0.4);
}





#input-wrapper {
 width: 100%;
  max-width: 320px;
  margin: 0px;
  padding: 0px;
  position: relative;
  padding-top: 10px;
  padding-bottom: 10px;
  overflow: hidden;
}

#rangeslider {
  display: block;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  outline: none;
  height: 5px;
  width: 100%;
  background: #f0f0f0;
}

#rangeslider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  cursor: pointer;
  height: 5px;
  width: 54px;
  position: relative;

}

#rangeslider::-webkit-slider-thumb:after {
  content: '< >';
  word-spacing: 20px;
  text-align: center;
  background: #9bd7d5;
  font-weight: 200;
  font-size: 18px;
  color: white;
  width: 54px;
  height: 25px;
  position: absolute;
  top: -10px;
  left: 0;
  color: transparent;
  -webkit-transition: color 0.25s;
  transition: color 0.25s;
  
}

#rangeslider::-webkit-slider-thumb:before {
  content: '';
  height: 5px;
  width: 400px;
  position: absolute;
  top: 0;
  right: 0;
  background: #9bd7d5;
  pointer-events: none;
}

#reel {
  width: 0px;
  height: 0px;
  overflow: hidden;
  position: absolute;
  top: 0; 
  opacity: 0;
  -webkit-transition: opacity 0.25s;
  transition: opacity 0.25s;
}

#rn {
  background: -webkit-linear-gradient(hsl(0, 80%, 70%), #9bd7d5));
  background: linear-gradient(hsl(0, 80%, 70%),  #9bd7d5));
  -webkit-transition: all 0.25s;
  transition: all 0.25s; 
}



#static-output {
   word-spacing: 20px;
  text-align: center;
  background: #9bd7d5;
  font-weight: 800;
  font-size: 18px;
  color: white;
  position: absolute;
  margin-top: -10px;
  margin-left: -36px;
  pointer-events: none;
  -webkit-transition: color 0.25s;
  transition: color 0.25s;
}

.active #reel { opacity: 1; }

.active #static-output { color: transparent; }

.active #rangeslider::-webkit-slider-thumb:after {
  color: white;
}


.bordes_cuadrados
{
border-radius: 0px;
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

@$result = mysql_query ("SELECT * from usuarios where id_usuario='$id_usuario'") or die("Error en la consulta SQL");
while( $row = mysql_fetch_array ( $result ))
{
@$clave = $row['CLAVE'];
@$edad = $row['EDAD'];
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
 

 <ul id="tabs" style="position: relative; top: 10px; left: 0px;z-index: 99999;">
      <li style="height: 40px;"><a href="#" name="#tab1">Series</a></li>
      <li><a href="#" name="#tab2">Tiempo</a></li>
      <li><a href="#" name="#tab3">Datos</a></li>
   
  </ul>

  <div id="contenido" style="position: relative; top: 10px; padding: 0px;">
  
      <div id="tab1">
   
<hr>

 <div class="dropdown" style="position: relative; top: 10px; height: 40px;">
	<a href="javascript: toggle('submenu');" class="boton bordes_cuadrados" style="padding-right: 10px; color: #ffffff;">
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

<div id="boton_series">

<a href="javascript: guardar_series();" class="boton_verde bordes_cuadrados" style="width: 117px; padding-left: 20px; padding-right: 20px; position: absolute; right: 00px; top: 21px;">
<font style="font-weight: 200; font-size: 16px; color: #ffffff;">GUARDAR</font>
</a>
</div>

<hr>

<?php
if (@$nueva == 1)
{
?>
<div style="width: 100%; padding: 10px; background: #f0f0f0; text-align: justify; border-bottom: 1px solid #e1e0e0;">
<font style="color: #666666;">
Bienvenido a la <strong>ZONA PADRES</strong>, hemos ajustado las opciones automaticamente para la edad del niño/a (<?php echo @$edad ?> años). Ahora puedes cambiar lo que consideres necesario.
</font>
</div>
<hr>

<?php
}
?>

<div style="width: 100%; height: 60px; padding: 10px; background: #e3fefd; margin-bottom: 10px; border-bottom: 1px solid #c3edec;" id="check_selectall">
<h4 style="color: #666666; font-weight: 200; font-size: 15px;"><input type="checkbox" class="option-input checkbox" onclick="seleccionar_todas_edades();" id="selectall" style="float: left;"/> <strong>Seleccionar todas las series</strong><br>Todas las edades</h4>
</div>

<?php
@$result = mysql_query ("SELECT * from series where idioma='ES' and activado='si'") or die("Error en la consulta SQL1");
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
?>
</form>

<div style="padding: 0px; margin: 0px; width: 0px; height: 0px; position: relative;" id="actualizar_series">   
</div>

 
   
   
      </div>
      
      <div id="tab2">


<hr>
<font style="color: #666666;">         
La opción "<strong>control del tiempo</strong>" ayuda a la supervision del uso del telefono. Solo tiene que especificar el tiempo de uso de la aplicación y automaticamente se cerrara la aplicación cuando llegue la hora ( maximo 2 horas ).
            </font>
  <br><br>          
         

            
<h4>Activar control de tiempo</h4>
<br>
<div class="can-toggle" style="width: 134px; height: 24px;">
  <input id="s2" type="checkbox" <?php echo @$checked_tiempo ?>>
  <label for="s2" style="cursor: pointer;">
    <div class="can-toggle__switch" data-checked="SI" data-unchecked="NO"></div>
  </label>
</div>
  <br>
  <br>
  <h4>Tiempo de visionado (minutos)</h4>
<br>


  
<div id="input-wrapper">
  <input type="range" id="rangeslider" min="15" max="120" value="<?php echo @$tiempo ?>" step="1" 
         oninput="updateOutput(value, true)" 
         onchange="deactivate()" 
         onmouseup="deactivate()" 
  >
  <div id="reel">
    <div id="rn"></div>
  </div>
  <div id="static-output"></div>
</div>
<script>
//lets populate reel numbers
var min = $("#rangeslider").attr("min");
var max = $("#rangeslider").attr("max");

var rn = "";
for(var i = min; i <= max; i++)
	rn += "<span>"+i+"</span>";
$("#rn").html(rn);

//triggering updateOutput manually
updateOutput($("#rangeslider").val(), false);

var rfigure, h, v;
//lets display the static output now
function updateOutput(figure, activate) {
	//if activate then add .active to #input-wrapper to help animate the #reel
	if(activate)
		$("#input-wrapper").addClass("active");
	
	//because of the step param the slider will return values in multiple of 0.05 so we have to round it up
	rfigure = Math.round(figure);
	//displaying the static output
	$("#static-output").html(rfigure);
	
	//positioning #static-output and #reel
	//horizontal positioning first
	h = figure/max*($("#input-wrapper").width()-$("#reel").width()) + 'px';
	//vertical positioning of #rn
	v = rfigure*$("#reel").height()*-1 + 'px';
	
	//applying the positions
	$("#static-output, #reel").css({left: h});
	//#rn will be moved using transform+transitions for better animation performance. The false translateZ triggers GPU acceleration for better performance.
	$("#rn").css({transform: 'translateY('+v+') translateZ(0)'});
}
function deactivate() {
	//remove .active from #input-wrapper
	$("#input-wrapper").removeClass("active");
}

</script>
  
<br><br>

<br>

<div id="boton_tiempo">
<a href="javascript: guardar_tiempo();" class="boton_verde bordes_cuadrados" style="padding-left: 20px; padding-right: 20px;">
<font style="font-weight: 200; font-size: 16px; color: #ffffff;">GUARDAR</font>
</a>
</div>

<div style="padding: 0px; margin: 0px; width: 0px; height: 0px; position: relative;" id="actualizar_tiempo">   
</div>
<br><br><br><br>


   
      </div>
      
      <div id="tab3">
         
         
 <hr>
         <font style="color: #666666;"> 
En este apartado se puede cambiar la clave de acceso y  la cuenta de correo asociada (se utiliza en caso de olvido de la clave)
</font>
<br>
<style> 
#nuevo_pin, #nuevo_email
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

 <br>
  <h4>Introduce nueva clave:</h4>
<br>
<input maxlength="4" id="nuevo_pin" name="nuevo_pin" type="tel" style="width: 120px; border: 1px solid #c0c0c0; height: 52px; font-size: 34px;" value="<?php echo @$clave ?>">
<p>
<br><br>

  <h4>Correo eléctronico:</h4>
<br>
<input id="nuevo_email" name="nuevo_email" style="width: 80%; border: 1px solid #c0c0c0; height: 52px; font-size: 20px;" value="<?php echo @$email ?>">
<p>
<br>


<br><br>

<div id="boton_pin">
 <a href="javascript: guardar_pin();" class="boton_verde bordes_cuadrados" style="padding-left: 20px; padding-right: 20px;">
<font style="font-weight: 200; font-size: 16px; color: #ffffff;">GUARDAR</font>
</a>
</div>

</form>   
<br>
<hr>
<h4>Cerrar sesión:</h4>
<br>
<font style="color: #666666;"> 
Si eliges esta opcion, se cerrara la sesión del niño/a y te llevaremos a la pantalla para que entres con otro usuario y contraseña. Esta opción es util si otro niño/a diferente va a entrar en la aplicacion.
</font>
<br><br><br>
<div id="boton_cerrar_sesion">
 <a href="javascript: preguntar_cerrar_sesion();" class="boton bordes_cuadrados" style="padding-left: 20px; padding-right: 20px;">
<font style="font-weight: 200; font-size: 16px; color: #ffffff;">CERRAR SESION</font>
</a>
</div>
<p>
<br>
<br><br><br><br><br>    
<div style="padding: 0px; margin: 0px; width: 0px; height: 0px; position: relative;" id="actualizar_pin">   
</div>
            
            </font>
        
    
         
      </div>
      
  </div>
  

  <script>
    function resetTabs(){
        $("#contenido > div").hide(); //Hide all content
        $("#tabs a").attr("id",""); //Reset id's      
    }

    var myUrl = window.location.href; //get URL
    var myUrlTab = myUrl.substring(myUrl.indexOf("#")); // For localhost/tabs.html#tab2, myUrlTab = #tab2     
    var myUrlTabName = myUrlTab.substring(0,4); // For the above example, myUrlTabName = #tab

    (function(){
        $("#contenido > div").hide(); // Initially hide all content
        $("#tabs li:first a").attr("id","current"); // Activate first tab
        $("#contenido > div:first").show(); // Show first tab content
        
        $("#tabs a").on("click",function(e) {
            e.preventDefault();
            if ($(this).attr("id") == "current"){ //detection for current tab
             return       
            }
            else{             
            resetTabs();
            $(this).attr("id","current"); // Activate this
            $($(this).attr('name')).show(); // Show content for current tab
            }
        });

        for (i = 1; i <= $("#tabs li").length; i++) {
          if (myUrlTab == myUrlTabName + i) {
              resetTabs();
              $("a[name='"+myUrlTab+"']").attr("id","current"); // Activate url tab
              $(myUrlTab).show(); // Show url tab content        
          }
        }
    })()
  </script>


</body>
</html>
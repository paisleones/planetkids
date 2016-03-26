<a name="top_of_page_zona_padres" id="top_of_page_zona_padres"></a>

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
document.location.href="#arriba";

function mostrarseries() {
document.getElementById("top_menu").style.display = 'block';
document.getElementById("top_menu1").style.display = 'none';	
$( "#siteloader_capitulos" ).html('');
document.location.href="#arriba";
$( "#siteloader_menu" ).show();
showmenu();
}
</script>

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
$( "#top_menu_capitulos" ).hide();
$( "#top_menu_zona_padres" ).hide();
$( "#top_menu" ).show();
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
var tiempo_activo = $("#s2").prop("value");
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










.bordes_cuadrados
{
border-radius: 0px;
}
</style>


</head>


<body>


<script>
//$( "#top_menu" ).hide();
//document.getElementById("top_menu").style.display = "none";

//$( "#header" ).html('<h1 class="sectionTitle" style="color: #ffffff; padding-left: 0px; font-weight: 100; font-size: 17px;"><a href="javascript: mostrarmenu();"><div style="width: 50px; height: 50px; background: #ff4b42; float: left; padding: 8px; margin-right: 20px;"><img src="images/atras.png" style="margin-top: 4px; height: 30px; vertical-align: middle;"></div></a><div style="padding-top: 4px;">Zona Padres</div></h1>');
</script>




<div id="top_menu_zona_padres" style="z-index: 51; position: fixed; top: 0px; left: 0px; display: inline; visibility: visible;">
<div id="header" style="text-align: left;" class="sombra">

<h1 class="sectionTitle" style="color: #ffffff; padding-left: 0px; font-weight: 100; font-size: 17px;">
<a href="javascript: mostrarmenu();">
<div style="width: 50px; height: 50px; background: #ff4b42; float: left; padding: 8px; margin-right: 20px;">
<img src="images/atras.png" style="margin-top: 4px; height: 30px; vertical-align: middle;">
</div>
</a>
<div style="padding-top: 4px;">
Zona Padres
</div>

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

}
?>
 

 <ul id="tabs" style="position: relative; top: 10px; left: 0px;z-index: 99999;">
      <li style="height: 40px;"><a href="#" name="#tab1">Series</a></li>
      <li><a href="#" name="#tab2">Tiempo</a></li>
      <li><a href="#" name="#tab3">Datos</a></li>
   
  </ul>
  
  <style>
#contenido
{
-webkit-overflow-scrolling: touch;
}
</style>

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
@$result = mysql_query ("SELECT * from series where idioma='ES' and activado='si' order by destacada desc") or die("Error en la consulta SQL1");
while( $row = mysql_fetch_array ( $result )) 
{
@$id = $row['ID'];
@$edad = $row['EDAD'];
@$idioma = $row['IDIOMA'];
@$nombre = $row['NOMBRE'];
@$enlace = $row['ENLACE'];
@$thumb = $row['THUMB'];
@$destacada = $row['DESTACADA'];

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

<?php
if (@$destacada == "si")
{
?>
<img src="http://kids.trabajocreativo.com/images/destacada.png" style="position: absolute; margin-top: -30px; right: 6px; width: 32px;">
<?php
}
?>

</div>
<?php
}
?>
<div style="width: 100%; height: 70px;">

</div>
</form>

<div style="width: 40px; height: 40px; position: fixed; bottom: 10; right: 10px; padding: 0px; margin: 0px;">
<a href="#top_of_page_zona_padres" >
<img src="http://kids.trabajocreativo.com/images/up.png">
</a>
</div>

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

<style>
section {
  float: left;
  min-width: 150px;
  width: 33.33%;
  padding: 10px 0;
  height: 60px;
}

/*=====================*/
.checkbox {
  position: relative;
  display: inline-block;
}
.checkbox:after, .checkbox:before {
  font-family: FontAwesome;
  -webkit-font-feature-settings: normal;
          font-feature-settings: normal;
  -webkit-font-kerning: auto;
          font-kerning: auto;
  -webkit-font-language-override: normal;
          font-language-override: normal;
  font-stretch: normal;
  font-style: normal;
  font-synthesis: weight style;
  font-variant: normal;
  font-weight: normal;
  text-rendering: auto;
}
.checkbox label {
  width: 90px;
  height: 42px;
  background: #ccc;
  position: relative;
  display: inline-block;
  border-radius: 46px;
  -webkit-transition: 0.4s;
  transition: 0.4s;
}
.checkbox label:after {
  content: '';
  position: absolute;
  width: 50px;
  height: 50px;
  border-radius: 100%;
  left: 0;
  top: -5px;
  z-index: 2;
  background: #fff;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
  -webkit-transition: 0.4s;
  transition: 0.4s;
}
.checkbox input {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  z-index: 5;
  opacity: 0;
  cursor: pointer;
}
.checkbox input:hover + label:after {
  box-shadow: 0 2px 15px 0 rgba(0, 0, 0, 0.1), 0 3px 8px 0 rgba(0, 0, 0, 0.1);
}
.checkbox input:checked + label:after {
  left: 40px;
}


.model-4 .checkbox label {
  background: #bbb;
  height: 25px;
  width: 75px;
}
.model-4 .checkbox label:after {
  background: #fff;
  top: -8px;
  width: 38px;
  height: 38px;
}
.model-4 .checkbox input:checked + label {
  background: #f0f0f0;
}
.model-4 .checkbox input:checked + label:after {
  background: #9bd7d5;
  left: 40px;
}

    </style>



  
  
  <?php
if (@$tiempo_activo == "" or @$tiempo_activo == "false")
{
@$selected_tiempo_si = "";
@$selected_tiempo_no = "selected";
}
else
{
@$selected_tiempo_si = "selected";
@$selected_tiempo_no = "";
}
?>
  
  <select id="s2" name="s2" style="border: 1px solid #c0c0c0; width: 70px; height: 46px; font-size: 15px; background: #ffffff; color: #666666; padding: 10px; cursor: pointer;">
  
  <option value="true" <?php echo @$selected_tiempo_si ?>>SI</option> 
  <option value="false" <?php echo @$selected_tiempo_no ?>>NO</option> 
  </select>
  

  <br>
  <br><br>
  <h4>Tiempo de visionado (minutos)</h4>
<br>

<select id="rangeslider" style="border: 1px solid #c0c0c0; width: 230px; height: 46px; font-size: 15px; background: #ffffff; color: #666666; padding: 10px; cursor: pointer;">

<?php
for ($i = 3; $i <= 24; $i++) {
	
@$valor_tiempo = $i*5;

if (@$valor_tiempo == @$tiempo)
{
@$selected = "selected";
}
else
{
@$selected = "";
}


?>
<option value="<?php echo @$i*5 ?>" <?php echo @$selected ?>><?php echo @$i*5 ?> minutos</option> 
<?php    
}
?>
</select>
  

  
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
<input id="nuevo_email" name="nuevo_email" style="text-align: left; width: 80%; border: 1px solid #c0c0c0; height: 52px; font-size: 20px;" value="<?php echo @$email ?>">
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
  
  <script>
document.getElementById("top_menu").style.display = 'none';
$( "#header1" ).html('<h1 class="sectionTitle" style="background: #248dc1; color: #ffffff; padding-left: 0px; height: 50px; font-weight: 200; font-size: 17px;"><a href="javascript: mostrarseries();"><div style="width: 50px; height: 50px; background: #ff4b42; float: left; padding: 8px; margin-right: 20px;"><img src="images/atras.png" style="margin-top: 4px; height: 30px; vertical-align: middle;"></div></a><div style="padding-top: 4px;">Zona padres</div></h1>');
document.getElementById("top_menu1").style.display = 'block';
</script>


</body>
</html>
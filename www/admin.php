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
  background: linear-gradient(rgba(0, 0, 0, 0.07), rgba(255, 255, 255, 0)), #ddd;
  box-shadow: 0 0.07em 0.1em -0.1em rgba(0, 0, 0, 0.4) inset, 0 0.05em 0.08em -0.01em rgba(255, 255, 255, 0.7);
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
  background: linear-gradient(#f5f5f5 10%, #eeeeee);
  box-shadow: 0 0.1em 0.15em -0.05em rgba(255, 255, 255, 0.9) inset, 0 0.5em 0.3em -0.1em rgba(0, 0, 0, 0.25);
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

@$series = "1582,1586,1657,1696,30890,32232,32238,32239,32240,32241,32242,35350,35450,35890,38371,38372,38373,";
?>


      <div class="tabset2" style="padding: 0px; margin: 0px;">
         <div data-pws-tab="tab11" data-pws-tab-name="Series" style="width: 100%;">
<hr>
<label for="favcity" style="margin-top: 6px; width: 200px;">
    <select id="tipo" name="tipo" style="padding-left: 5px; border: 1px solid #c0c0c0; height: 36px;">

  <option value="3">Hasta 3 años</option>
  <option value="5">De 3 a 5 años</option>
  <option value="7" selected>De 5 a 7 años</option>
  <option value="8">Hasta 8 años</option>
  <option value="todas">Todas las series</option>

    </select>
  </label>
<hr>

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
if ($encuentra === false)
{
@$encontrado = "";
}
else
{
@$encontrado = "checked";
}
?>
<div style="width: 100%; height: 60px; padding: 10px; background: #f0f0f0; margin-bottom: 10px; border-bottom: 1px solid #e1e0e0;">
<h4 style="color: #666666; font-weight: 200; font-size: 15px;">
<input id="<?php echo $id ?>" type="checkbox" class="option-input checkbox" style="float: left;" <?php echo @$encontrado ?>/> 
<strong><?php echo $nombre ?></strong><br>hasta <?php echo $edad ?> años</h4>
</div>
<?php
}
?>
         </div>
         <div data-pws-tab="tab22" data-pws-tab-name="Tiempo" style="text-align: justify; min-height: 400px;">
         <hr>
<font style="color: #666666;">         
La opción "control del tiempo" ayuda a la supervision del uso del telefono. Solo tiene que especificar el tiempo de uso de la aplicación y automaticamente se cerrara la aplicación cuando llegue la hora ( maximo 2 horas ).
            </font>
  <br><br>          
            
<h4>Activar control de tiempo</h4>
<br>
  <input type="checkbox" class="slider-v1" id="s2" checked="" style="display: none;" name="tiempo_activado"/>
  <label for="s2"></label>
  <br>
  <h4>Tiempo de visionado</h4>
<br>



<label for="favcity" style="margin-top: 6px; width: 200px;">
    <select id="tipo" name="tipo" style="padding-left: 5px; border: 1px solid #c0c0c0; height: 36px;">

	<option value="15">15 minutos</option>
  <option value="30">30 minutos</option>
  <option value="45">45 minutos</option>
  <option value="60" selected>60 minutos</option>
  <option value="75">1 hora y 15 minutos</option>
  <option value="90">1 hora y 30 munutos</option>
  <option value="105">1 hora y 45 muntos</option>
  <option value="120">2 horas (maximo)</option>

    </select>
  </label>
  
<hr style="padding-bottom: 6px;">

<a href="javascript:menu('2');" class="boton" style="padding-left: 20px; padding-right: 20px;">
<font style="font-weight: 200; font-size: 16px;">GUARDAR</font>
</a>

            
         </div>
         <div data-pws-tab="tab33" data-pws-tab-name="Seguridad" style="text-align: justify;">
         <hr>
         <font style="color: #666666;"> 
            Donec pellentesque placerat mi, at rutrum metus tempor posuere. Nunc ut pellentesque purus. Nam auctor, magna eget elementum maximus, ligula augue ornare massa, id varius magna mi vel diam. Cras vel pharetra risus. Suspendisse eu varius nisl, a laoreet est. Proin vitae erat metus. Curabitur dictum elit in ante feugiat cursus.
            </font>
            
         </div>
      </div><!-- tabset2 -->

<br><br><br>
</div>


</body>
</html>
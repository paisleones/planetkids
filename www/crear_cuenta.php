<!DOCTYPE HTML>

<html lang="es-ES">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui"/>
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<meta http-equiv='cache-control' content='no-cache'>
<meta http-equiv='expires' content='0'>
<meta http-equiv='pragma' content='no-cache'>

<!-- jQuery 
<link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/style5152.css">
<link rel='stylesheet' id='writter-responsive-style-css'  href='css/writter-responsive5152.css?ver=1.0' type='text/css' media='all' />
<script src="js/jquery.js"></script>
<!-- jQuery easing plugin --> 

<script>
jQuery.easing.jswing=jQuery.easing.swing;jQuery.extend(jQuery.easing,{def:"easeOutQuad",swing:function(e,f,a,h,g){return jQuery.easing[jQuery.easing.def](e,f,a,h,g)},easeInQuad:function(e,f,a,h,g){return h*(f/=g)*f+a},easeOutQuad:function(e,f,a,h,g){return -h*(f/=g)*(f-2)+a},easeInOutQuad:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f+a}return -h/2*((--f)*(f-2)-1)+a},easeInCubic:function(e,f,a,h,g){return h*(f/=g)*f*f+a},easeOutCubic:function(e,f,a,h,g){return h*((f=f/g-1)*f*f+1)+a},easeInOutCubic:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f*f+a}return h/2*((f-=2)*f*f+2)+a},easeInQuart:function(e,f,a,h,g){return h*(f/=g)*f*f*f+a},easeOutQuart:function(e,f,a,h,g){return -h*((f=f/g-1)*f*f*f-1)+a},easeInOutQuart:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f*f*f+a}return -h/2*((f-=2)*f*f*f-2)+a},easeInQuint:function(e,f,a,h,g){return h*(f/=g)*f*f*f*f+a},easeOutQuint:function(e,f,a,h,g){return h*((f=f/g-1)*f*f*f*f+1)+a},easeInOutQuint:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f*f*f*f+a}return h/2*((f-=2)*f*f*f*f+2)+a},easeInSine:function(e,f,a,h,g){return -h*Math.cos(f/g*(Math.PI/2))+h+a},easeOutSine:function(e,f,a,h,g){return h*Math.sin(f/g*(Math.PI/2))+a},easeInOutSine:function(e,f,a,h,g){return -h/2*(Math.cos(Math.PI*f/g)-1)+a},easeInExpo:function(e,f,a,h,g){return(f==0)?a:h*Math.pow(2,10*(f/g-1))+a},easeOutExpo:function(e,f,a,h,g){return(f==g)?a+h:h*(-Math.pow(2,-10*f/g)+1)+a},easeInOutExpo:function(e,f,a,h,g){if(f==0){return a}if(f==g){return a+h}if((f/=g/2)<1){return h/2*Math.pow(2,10*(f-1))+a}return h/2*(-Math.pow(2,-10*--f)+2)+a},easeInCirc:function(e,f,a,h,g){return -h*(Math.sqrt(1-(f/=g)*f)-1)+a},easeOutCirc:function(e,f,a,h,g){return h*Math.sqrt(1-(f=f/g-1)*f)+a},easeInOutCirc:function(e,f,a,h,g){if((f/=g/2)<1){return -h/2*(Math.sqrt(1-f*f)-1)+a}return h/2*(Math.sqrt(1-(f-=2)*f)+1)+a},easeInElastic:function(f,h,e,l,k){var i=1.70158;var j=0;var g=l;if(h==0){return e}if((h/=k)==1){return e+l}if(!j){j=k*0.3}if(g<Math.abs(l)){g=l;var i=j/4}else{var i=j/(2*Math.PI)*Math.asin(l/g)}return -(g*Math.pow(2,10*(h-=1))*Math.sin((h*k-i)*(2*Math.PI)/j))+e},easeOutElastic:function(f,h,e,l,k){var i=1.70158;var j=0;var g=l;if(h==0){return e}if((h/=k)==1){return e+l}if(!j){j=k*0.3}if(g<Math.abs(l)){g=l;var i=j/4}else{var i=j/(2*Math.PI)*Math.asin(l/g)}return g*Math.pow(2,-10*h)*Math.sin((h*k-i)*(2*Math.PI)/j)+l+e},easeInOutElastic:function(f,h,e,l,k){var i=1.70158;var j=0;var g=l;if(h==0){return e}if((h/=k/2)==2){return e+l}if(!j){j=k*(0.3*1.5)}if(g<Math.abs(l)){g=l;var i=j/4}else{var i=j/(2*Math.PI)*Math.asin(l/g)}if(h<1){return -0.5*(g*Math.pow(2,10*(h-=1))*Math.sin((h*k-i)*(2*Math.PI)/j))+e}return g*Math.pow(2,-10*(h-=1))*Math.sin((h*k-i)*(2*Math.PI)/j)*0.5+l+e},easeInBack:function(e,f,a,i,h,g){if(g==undefined){g=1.70158}return i*(f/=h)*f*((g+1)*f-g)+a},easeOutBack:function(e,f,a,i,h,g){if(g==undefined){g=1.70158}return i*((f=f/h-1)*f*((g+1)*f+g)+1)+a},easeInOutBack:function(e,f,a,i,h,g){if(g==undefined){g=1.70158}if((f/=h/2)<1){return i/2*(f*f*(((g*=(1.525))+1)*f-g))+a}return i/2*((f-=2)*f*(((g*=(1.525))+1)*f+g)+2)+a},easeInBounce:function(e,f,a,h,g){return h-jQuery.easing.easeOutBounce(e,g-f,0,h,g)+a},easeOutBounce:function(e,f,a,h,g){if((f/=g)<(1/2.75)){return h*(7.5625*f*f)+a}else{if(f<(2/2.75)){return h*(7.5625*(f-=(1.5/2.75))*f+0.75)+a}else{if(f<(2.5/2.75)){return h*(7.5625*(f-=(2.25/2.75))*f+0.9375)+a}else{return h*(7.5625*(f-=(2.625/2.75))*f+0.984375)+a}}}},easeInOutBounce:function(e,f,a,h,g){if(f<g/2){return jQuery.easing.easeInBounce(e,f*2,0,h,g)*0.5+a}return jQuery.easing.easeOutBounce(e,f*2-g,0,h,g)*0.5+h*0.5+a}});
</script>

<script>
function paso1()
{
//document.getElementById('div_iniciar_sesion').style.display = 'none'
//document.getElementById('div_paso1').style.display = 'block'


$( "#div_iniciar_sesion" ).fadeOut( "slow");
$( "#div_paso1" ).fadeIn( "slow");

}

function atras_paso1()
{
$( "#div_paso1" ).fadeOut( "slow");
$( "#div_iniciar_sesion" ).fadeIn( "slow");
}

function paso2()
{
$( "#div_paso1" ).fadeOut( "slow");
$( "#div_paso2" ).fadeIn( "slow");
}

function atras_paso2()
{
$( "#div_paso2" ).fadeOut( "slow");
$( "#div_paso1" ).fadeIn( "slow");
}


function guardar_nuevos_datos()
{
var crear_nombre = $('#crear_nombre').val();
var crear_edad = $('#crear_edad').val();
var crear_email = $('#crear_email').val();
var crear_clave = $('#crear_clave').val();
var numeroLetras_clave = crear_clave.length;
var buscar1 = ".";
var buscar2 = "@";

if (crear_nombre =="")
{
document.getElementById("crear_nombre").style.borderColor = "#ff4b42";
var validar1 = 0;
}
else
{
document.getElementById("crear_nombre").style.borderColor = "#cccccc";
var validar1 = 1;
}

if (crear_edad =="")
{
document.getElementById("crear_edad").style.borderColor = "#ff4b42";
var validar2 = 0;
}
else
{
document.getElementById("crear_edad").style.borderColor = "#cccccc";
var validar2 = 1;
}

if (crear_email =="" || crear_email.indexOf("@")== -1 || crear_email.indexOf(".")== -1)
{
document.getElementById("crear_email").style.borderColor = "#ff4b42";
var validar3 = 0;
}
else
{
document.getElementById("crear_email").style.borderColor = "#cccccc";
var validar3 = 1;
}

if (numeroLetras_clave!=4)
{
document.getElementById("crear_clave").style.borderColor = "#ff4b42";
var validar4 = 0;
}
else
{
document.getElementById("crear_clave").style.borderColor = "#cccccc";
var validar4 = 1;
}

if(validar1==1 && validar2 == 1 && validar3==1 && validar4 == 1)
{
actualizardatos("crear_nueva_cuenta.php?crear_nombre=" + crear_nombre + "&crear_edad=" + crear_edad + "&crear_email=" + crear_email + "&crear_clave=" + crear_clave,"crear_nueva_cuenta");
}

}




function iniciar_sesion()
{
var email_sesion = $('#email_sesion').val();
var clave_sesion = $('#clave_sesion').val();

if (email_sesion =="")
{
document.getElementById("email_sesion").style.borderColor = "#ff4b42";
var validar5 = 0;
}
else
{
document.getElementById("email_sesion").style.borderColor = "#cccccc";
var validar5 = 1;
}

if (clave_sesion =="")
{
document.getElementById("clave_sesion").style.borderColor = "#ff4b42";
var validar6 = 0;
}
else
{
document.getElementById("clave_sesion").style.borderColor = "#cccccc";
var validar6 = 1;
}

if(validar5==1 && validar6 == 1)
{
actualizardatos("iniciar_sesion.php?email_sesion=" + email_sesion + "&clave_sesion=" + clave_sesion,"crear_nueva_cuenta");
}
}
</script>

<style>
* {
margin: 0;
padding: 0;
}
.div_completo {
width: 100%;
height: 100%;
top: 0px;
left: 0px;
z-index: 99999;
background: linear-gradient(rgba(196, 102, 0, 0.2), rgba(155, 89, 182, 0.2));  background: url(http://kids.trabajocreativo.com/images/cuenta.jpg); no-repeat center; background-position: center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; overflow-x: hidden;
}

/*form styles*/
#msform {
max-width: 400px;
margin: 50px auto;
text-align: center;
position: relative;
top: 50px;
}
#msform fieldset {
background: white;
border: 0 none;
border-radius: 6px;
box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
padding: 20px 30px;
box-sizing: border-box;
width: 80%;
margin: 0 10%;
/*stacking fieldsets above each other*/
position: absolute;
}
/*Hide all except first fieldset*/
#msform fieldset:not(:first-of-type) {
display: none;
}
/*inputs*/
#msform input, #msform textarea {
padding: 15px;
border: 1px solid #ccc;
border-radius: 3px;
margin-bottom: 10px;
width: 100%;
box-sizing: border-box;
color: #2C3E50;
font-size: 13px;
}
/*buttons*/
#msform .action-button {
box-shadow: 0px 4px 0px 0px #899f33;
background-color: #9db53d;
color: #fff;
margin: 10px
border-radius: 0px;
border: 0px;
padding:10px;
width: 110px;
cursor: pointer;
text-align: center;
font-size: 14px;
}

.border-input
{
font-family: 'Quicksand';
font-weight: 100;
border: 1px solid #c0c0c0;
margin-top: 6px;
color: #ff4b42;
font-size: 20px;
font-weight: 400;
}

/*headings*/
.fs-title {
font-size: 17px;
font-weight: 800;
text-transform: uppercase;
color: #2ac7e1;
margin-bottom: 10px;
}
.fs-subtitle {
font-weight: bold;
font-size: 14px;
color: #666;
margin: 0px;
padding: 0px;
}

.formulario_input
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


<div class="div_completo">


<!-- multistep form -->
<form id="msform" name="msform">
<!-- progressbar -->

<!-- fieldsets -->
<fieldset id="div_iniciar_sesion">
<h2 class="fs-title">Iniciar sesión</h2>
<h3 class="fs-subtitle">Si ya tienes una cuenta creada</h3>
<hr>
<div style="text-align: left; color: #666666;">
<h3 class="fs-subtitle">Correo electrónico:</h3>
<input type="text" name="email_sesion" id="email_sesion" class="border-input" style="height: 52px; font-size: 20px; color: #ff4b42;"/>
<br>
<h3 class="fs-subtitle">Clave (4 dígitos):</h3>
<input type="tel" name="clave_sesion" id="clave_sesion" class="border-input" maxlength="4" style="height: 52px; font-size: 34px; color: #ff4b42;"/>
</div>
<hr>
<input type="button" id="submit_iniciar" class="action-button" value="ENTRAR" onclick="iniciar_sesion();"/>
<input type="button" name="next" class="next action-button" value="NUEVA >" onclick="paso1();"/>
</fieldset>

<fieldset id="div_paso1">
<h2 class="fs-title" style="color: #ff4b42">Crear una cuenta</h2>
<h3 class="fs-subtitle"><strong>1 de 2</strong> - Datos del niño/a</h3>
<hr>
<div style="text-align: left; color: #666666;">
<h3 class="fs-subtitle">Nombre:</h3>
<input type="text" name="crear_nombre" id="crear_nombre" class="border-input" style="font-size: 20px; color: #ff4b42; height: 52px;"/>
<br>
<h3 class="fs-subtitle">Edad:</h3>
<input type="tel" name="crear_edad" id="crear_edad" class="border-input"  style="font-size: 20px; color: #ff4b42; height: 52px;"/>
</div>
<hr>
<input type="button" name="previous" class="previous action-button" value="< ATRAS" onclick="atras_paso1();"/>
<input type="button" name="next" class="next action-button" value="SIGUIENTE >" onclick="paso2();"/>
</fieldset>


<fieldset id="div_paso2">
<h2 class="fs-title" style="color: #ff4b42">Datos de seguridad</h2>
<h3 class="fs-subtitle"><strong>2 de 2</strong> - Datos de los padres</h3>
<hr>
<div style="text-align: left; color: #666666;;">
<h3 class="fs-subtitle">Correo eléctronico:</h3>
<input type="text" name="crear_email" id="crear_email" class="border-input" style="font-size: 20px; color: #ff4b42; height: 52px;"/>
<br>
<h3 class="fs-subtitle">Clave (4 dígitos):</h3>
<input type="tel" name="crear_clave" id="crear_clave" class="border-input" maxlength="4" style="height: 52px; font-size: 34px; color: #ff4b42;"/>
</div>

<hr>
<input type="button" name="previous" class="previous action-button" value="< ATRAS" onclick="atras_paso2();"/>
<input type="button" name="submit" class="submit action-button" value="GUARDAR" onclick="guardar_nuevos_datos();"/>
</fieldset>
<fieldset>
</form>

</div>



<div style="padding: 0px; margin: 0px; width: 0px; height: 0px; position: relative;" id="crear_nueva_cuenta">   
</div>
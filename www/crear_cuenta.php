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

actualizardatos("crear_nueva_cuenta.php?crear_nombre=" + crear_nombre + "&crear_edad=" + crear_edad + "&crear_email=" + crear_email + "&crear_clave=" + crear_clave,"crear_nueva_cuenta");

}
</script>

<style>
* {
margin: 0;
padding: 0;
}
.div_completo {
width: 100%;
height: 500px;
top: 0px;
left: 0px;
z-index: 99999;
background: linear-gradient(rgba(196, 102, 0, 0.2), rgba(155, 89, 182, 0.2));  background: url(http://kids.trabajocreativo.com/images/fondo_menu.jpg); no-repeat center; background-position: center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; overflow-x: hidden;
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
border-radius: 3px;
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
border: 1px solid #c0c0c0;
margin-top: 6px;
}

/*headings*/
.fs-title {
font-size: 15px;
text-transform: uppercase;
color: #2C3E50;
margin-bottom: 10px;
}
.fs-subtitle {
font-weight: normal;
font-size: 13px;
color: #666;
margin: 0px;
padding: 0px;
}
</style>


<div class="div_completo">


<!-- multistep form -->
<form id="msform" name="msform">
<!-- progressbar -->

<!-- fieldsets -->
<fieldset>
<h2 class="fs-title">Crear una cuenta</h2>
<h3 class="fs-subtitle"><strong>1 de 2</strong> - Datos del niño/a</h3>
<hr>
<div style="text-align: left; color: #666666;">
<h3 class="fs-subtitle">Nombre:</h3>
<input type="text" name="crear_nombre" id="crear_nombre" class="border-input" placeholder="" />
<br>
<h3 class="fs-subtitle">Edad:</h3>
<input type="text" name="crear_edad" id="crear_edad" class="border-input" placeholder="" />
</div>
<hr>
<input type="button" name="next" class="next action-button" value="SIGUIENTE" />
</fieldset>
<fieldset>
<h2 class="fs-title">Datos de seguridad</h2>
<h3 class="fs-subtitle"><strong>2 de 2</strong> - Datos de los padres</h3>
<hr>
<div style="text-align: left; color: #666666;;">
<h3 class="fs-subtitle">Correo eléctronico:</h3>
<input type="text" name="crear_email" id="crear_email" class="border-input" placeholder="" />
<br>
<h3 class="fs-subtitle">Clave (4 dígitos):</h3>
<input type="password" name="crear_clave" id="crear_clave" class="border-input" placeholder="" maxlength="4"/>
</div>

<hr>
<input type="button" name="previous" class="previous action-button" value="ATRAS" />
<input type="button" name="submit" class="submit action-button" value="GUARDAR" />
</fieldset>
<fieldset>
</form>

</div>


<script>
$(function() {

//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'transform': 'scale('+scale+')'});
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".submit").click(function(){
	guardar_nuevos_datos();
})

});
</script>

<div style="padding: 0px; margin: 0px; width: 0px; height: 0px; position: relative;" id="crear_nueva_cuenta">   
</div>
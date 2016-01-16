<!DOCTYPE html><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="content-type" content="text/x-component">
    <title>Seguridad</title>

<?php
@$clave = "1234";
?>


<script type="text/javascript">
function addCode(key){
	var code = document.forms[0].code;
	if(code.value.length < 4){
		code.value = code.value + key;
	}
}

function submitForm(){
	document.forms[0].submit();
}

function emptyCode(){
	document.forms[0].code.value = "";
}

function enviar(){
	var valor_clave=document.getElementById("code").value;
	if (valor_clave == "1234")
			{
			$.modal.impl.close();
            cargarcapitulos('admin.php','siteloader_capitulos');
			}
			else
			{
				alert("ERROR DE VALIDACION");
			}
}
</script>


<style>

.dialpad .number
{
	position:relative;z-index:2;padding:10px;color:#ff4b42;font-weight:300;font-size:80px;margin: 0px;background:#fff;text-align: center; height:100px;

}

.dialpad .dials
{margin:-1px 0 0 -1px;background:#ffffff;cursor:pointer}

.dialpad .dials:before,.dialpad .dials:after
{content:"\0020";display:block;height:0;overflow:hidden}

.dialpad .dials:after
{clear:both}

.dialpad .dials .digits
{float:left;width:33.33%}

.digits p
{
box-shadow: 0px 4px 0px 0px #b5b6ba;
background-color: #e4e4e6;
color: #fff;
margin: 5px 5px 5px 0px;
border-radius: 5px;
padding:4px;
cursor: pointer;
text-align: center;
font-size: 14px;
}

.pad-action p
{
box-shadow: 0px 4px 0px 0px #899f33;
background-color: #9db53d;
color: #fff;
margin: 5px 5px 5px 0px;
border-radius: 5px;
padding:4px;
cursor: pointer;
text-align: center;
font-size: 14px;
font-weight: 300;
}

.dialpad .dials .digits p strong
{font-size:50px;margin-right:8px;color:#666}

.dialpad .dials .digits:active
{	
color: #ffffff;
}

.compact .dials .digits p
{padding:12px; height: 60px;}

.compact .dials .digits p strong
{font-size:30px}

.compact .dials .digits p sup
{text-transform:uppercase;color:#c1c1c1}

li{
list-style-image: none;
list-style-type: none;
}

.display {
	width:100%; 
	margin:0px; 
	background-color:#ffffff; 
	color:#ff4b42; 
	font-weight: 200;
	font-size:60px; 
	border: 0px solid #f0f0f0;
	text-align: center;
	padding: 0px;
}
</style>

</head>
<body>


<form method="get">
<div id="wrapper" style="padding: 10px;">
<font style="color: #666666;">
<h3>INTRODUCE EL PIN:</h3>
</font>
    <div class="dialpad compact">
        <div class="number" id="clave" style="margin: 0px; padding: 0px;">
        <input type="text" name="code" id="code" value="" maxlength="4" class="display" readonly />
        </div>
        <div class="dials" style="margin: 0px; padding: 0px;">
            <ul style="margin: 0px; padding: 0px;">
                <li class="digits" onClick="addCode('1');"><p><strong>1</strong></p></li>
                <li class="digits" onClick="addCode('2');"><p><strong>2</strong></p></li>
                <li class="digits" onClick="addCode('3');"><p><strong>3</strong></p></li>
                <li class="digits" onClick="addCode('4');"><p><strong>4</strong></p></li>
                <li class="digits" onClick="addCode('5');"><p><strong>5</strong></p></li>
                <li class="digits" onClick="addCode('6');"><p><strong>6</strong></p></li>
                <li class="digits" onClick="addCode('7');"><p><strong>7</strong></p></li>
                <li class="digits" onClick="addCode('8');"><p><strong>8</strong></p></li>
                <li class="digits" onClick="addCode('9');"><p><strong>9</strong></p></li>
                <li class="digits" onClick="addCode('0');"><p><strong>0</strong></p></li>
                <li class="digits" onclick="emptyCode();"><p style="font-size: 16px; color: #666666; padding-top: 20px; font-weight: 800">BORRAR</p></li>
                <li class="digits pad-action" onclick="enviar();"><p style="font-size: 16px; color: #ffffff; padding-top: 20px; font-weight: 800">ENTRAR</p></li>
            </ul>
        </div>
    </div>
</div>
</form>


</body>
</html>
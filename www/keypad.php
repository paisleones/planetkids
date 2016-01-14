<!DOCTYPE html><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="content-type" content="text/x-component">
    <title>Jq-dialpad</title>

<script type="text/javascript" src="js/jquery.js"></script>

<?php
@$id_usuario = "1";

include("conexion.php");

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

</style>

</head>
<body>



<div id="wrapper" style="padding: 10px;">
<font style="color: #666666;">
<h3>INTRODUCE EL PIN:</h3>
</font>
    <div class="dialpad compact">
        <div class="number" id="clave" style="margin: 0px; padding: 0px;"></div>
        <div class="dials">
            <ol>
                <li class="digits"><p><strong>1</strong></p></li>
                <li class="digits"><p><strong>2</strong></p></li>
                <li class="digits"><p><strong>3</strong></p></li>
                <li class="digits"><p><strong>4</strong></p></li>
                <li class="digits"><p><strong>5</strong></p></li>
                <li class="digits"><p><strong>6</strong></p></li>
                <li class="digits"><p><strong>7</strong></p></li>
                <li class="digits"><p><strong>8</strong></p></li>
                <li class="digits"><p><strong>9</strong></p></li>
                <li class="digits"><p><strong>0</strong></p></li>
                <li class="digits"><p style="font-size: 16px; color: #666666; padding-top: 20px; font-weight: 800">BORRAR</p></li>
                <li class="digits pad-action"><p style="font-size: 16px; color: #ffffff; padding-top: 20px; font-weight: 800">ENTRAR</p></li>
            </ol>
        </div>
    </div>
</div>

<script>
/* ==========================================================================
   main.js
   ========================================================================== */
var $j = jQuery.noConflict();

$j(function(){

    var dials = $j(".dials ol li");
    var index;
    var number = $j(".number");
    var total;
	var numero = 0;

    dials.click(function(){

        index = dials.index(this);

        if(index == 9){
			numero ++;
			if (numero<=4)
		{
            number.append("0");
		}

        }else if(index == 9){

            number.append("0");

        }else if(index == 11){

			valor_clave = $("#clave").html();
			if (valor_clave == "<?php echo $clave; ?>")
			{
			$.modal.impl.close();
            cargardatos('admin.php','siteloader');
			}
			else
			{
				alert("ERROR");
			}

        }else if(index == 10){	
		
			numero = 0;
            number.empty();

        }else if(index == 13){

            number.append("-");

        }else if(index == 14){


        }else{ 
		numero ++;
		if (numero<=4)
		{
		number.append(index+1);
		}
				}
    });

    $j(document).keydown(function(e){

        switch(e.which){

            case 96:
				
				numero ++;
                number.append("0");
                break;


            case 97:
		
				numero ++;
                number.append("1");
                break;

            case 98:
				numero ++;
                number.append("2");
                break;

            case 99:
				numero ++;
                number.append("3");
                break;

            case 100:
				numero ++;
                number.append("4");
                break;

            case 101:
				numero ++;
                number.append("5");
                break;

            case 102:
				numero ++;
                number.append("6");
                break;

            case 103:
				numero ++;
                number.append("7");
                break;

            case 104:
				numero ++;
                number.append("8");
                break;

            case 105:
				numero ++;
                number.append("9");
                break;


            case 27:

                number.empty();
                break;

            case 106:
				numero ++;
                number.append("0");
                break;

            case 13:

                $('.pad-action').click();
                break;

            default: return;
        }

        e.preventDefault();
    });
});
</script>

</body>
</html>
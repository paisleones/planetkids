<?php
include("conexion.php");

@$email_sesion = $_GET['email_sesion'];
@$clave_sesion = $_GET['clave_sesion'];
@$compara_email_sesion = strtoupper(@$email_sesion);


@$result=mysql_query("SELECT * from usuarios where upper(email)='$compara_email_sesion'") or die (mysql_error());  
while( $row = mysql_fetch_array ( $result ))
{
@$id_usuario = $row['ID_USUARIO'];
@$clave = $row['CLAVE'];
@$email = $row['EMAIL'];
@$tiempo_de_visionado = $row['TIEMPO'];
@$tiempo_activo = $row['TIEMPO_ACTIVO'];
@$tiempo_restante = $row['TIEMPO_RESTANTE'];
} 

if (@$clave == @$clave_sesion)
{
?>

<script>
$( '#siteloader_cuenta' ).html('');
document.getElementById("siteloader_cuenta").style.display = 'none';

document.getElementById("top_menu").style.display = 'block';
cargardatos('lista_series.php','siteloader_menu');

localStorage.setItem("id_usuario", "<?php echo $id_usuario ?>");
localStorage.setItem("clave", "<?php echo $clave ?>");
localStorage.setItem("email", "<?php echo $email ?>");
localStorage.setItem("tiempo_activo", "<?php echo $tiempo_activo ?>");
localStorage.setItem("tiempo_restante", "<?php echo $tiempo_restante ?>");
localStorage.setItem("tiempo_de_visionado", "<?php echo $tiempo_de_visionado ?>");

</script>

<?php
}
else
{
?>
<script>
mensaje_error_inicio_sesion();
</script>

<?php
}
?>

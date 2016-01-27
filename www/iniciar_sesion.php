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
} 

if (@$clave == @$clave_sesion)
{
?>

<script>
localStorage.setItem("id_usuario", "<?php echo $id_usuario ?>");
localStorage.setItem("clave", "<?php echo $clave ?>");
localStorage.setItem("email", "<?php echo $email ?>");

mensaje_aviso();
</script>

<?php
}
else
{
?>
<script>
mensaje_aviso_cuenta();
</script>

<?php
}
?>

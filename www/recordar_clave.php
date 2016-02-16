<?php
include("conexion.php");

@$email_cuenta = $_GET['email_cuenta'];
@$compara_email = strtoupper(@$email_cuenta);


$resultado=mysql_query("SELECT * from usuarios where upper(email)='$compara_email'") or die (mysql_error());  
while( $row = mysql_fetch_array ( $resultado )) 
{
@$email = $row['EMAIL'];
@$clave = $row['CLAVE'];
}

if (mysql_num_rows($resultado) == 0)  
{ 
?>
<script>
navigator.notification.alert("Los sentimos pero esa cuenta de correo no existe ... ", null, "Mensaje de Kids PLANET", "Aceptar")
</script>
<?php
exit;
}
else
{

require("class.phpmailer.php");
require("class.smtp.php");

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPSecure = "ssl";
$mail->SMTPAuth = true;
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;

$mail->Username = "paisleones@gmail.com";
$mail->Password = "garfield123456";
$mail->From = "info@trabajocreativo.com";
$mail->FromName = "Kids PLANET";
	
	$mail->Subject = "Recordatorio nueva clave de Kids PLANET";
	$mail->AltBody = "";

$mail->MsgHTML(file_get_contents("http://kids.trabajocreativo.com/email.php?clave=$clave"));
$mail->AddAddress($email_cuenta, $email_cuenta);
$mail->IsHTML(true);
$mail->Send();
}
?>
<script>
$.modal.impl.close();
navigator.notification.alert("La clave ha sido enviada a tu email. Comprueba la bandeja de entrada ... ", null, "Mensaje de Kids PLANET", "Aceptar");
</script>
<?php
include("conexion.php");

@$crear_nombre = $_GET['crear_nombre'];
@$crear_edad = $_GET['crear_edad'];
@$crear_email = $_GET['crear_email'];
@$compara_email = strtoupper(@$crear_email);
@$crear_clave = $_GET['crear_clave'];


$resultado=mysql_query("SELECT * from usuarios where upper(email)='$compara_email'") or die (mysql_error());  
if (mysql_num_rows($resultado) == 0)  
{  


$resultado_series=mysql_query("SELECT * from series where edad<='$crear_edad'") or die (mysql_error());  
while( $row = mysql_fetch_array ( $resultado_series ))
{
@$id_serie = $row['ID'];
@$cadena_series = $cadena_series . @$id_serie . ",";
}
@$tiempo_activo = "false";
@$tiempo_de_visionado = "60";
@$tiempo_restante = "60";


mysql_query ("INSERT INTO USUARIOS (NOMBRE, EDAD, EMAIL, CLAVE, SERIES, TIEMPO, TIEMPO_ACTIVO, TIEMPO_RESTANTE) VALUES ('$crear_nombre', '$crear_edad', '$crear_email', '$crear_clave', '$cadena_series', '$tiempo_de_visionado', '$tiempo_activo', '$tiempo_restante')");

@$result = mysql_query ("SELECT * from usuarios where email='$crear_email'") or die("Error en la consulta SQL");
while( $row = mysql_fetch_array ( $result ))
{
@$id_usuario = $row['ID_USUARIO'];
}
?>

<script>
localStorage.removeItem('id_usuario');
localStorage.removeItem('clave');
localStorage.removeItem('email');
localStorage.removeItem('tiempo_de_visionado');
localStorage.removeItem('tiempo_restante');
localStorage.removeItem('tiempo_activo');

localStorage.setItem("id_usuario", "<?php echo $id_usuario ?>");
localStorage.setItem("clave", "<?php echo $crear_clave ?>");
localStorage.setItem("email", "<?php echo $crear_email ?>");
localStorage.setItem("tiempo_activo", "<?php echo $tiempo_activo ?>");
localStorage.setItem("tiempo_de_visionado", "<?php echo $tiempo_de_visionado ?>");
localStorage.setItem("tiempo_restante", "<?php echo $tiempo_restante ?>");


var id_usuario = localStorage.getItem('id_usuario');
var clave = localStorage.getItem('clave');
var email = localStorage.getItem('email');
var tiempo_de_visionado = localStorage.getItem('tiempo_de_visionado');
var tiempo_activo = localStorage.getItem('tiempo_activo');
var tiempo_restante = localStorage.getItem('tiempo_restante');


mensaje_crear_nueva_cuenta();
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

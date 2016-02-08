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
@$cadena_series = @$cadena_series . @$id_serie . ",";
}


mysql_query ("INSERT INTO USUARIOS (NOMBRE, EDAD, EMAIL, CLAVE, SERIES) VALUES ('$crear_nombre', '$crear_edad', '$crear_email', '$crear_clave', '@$cadena_series')");

@$result = mysql_query ("SELECT * from usuarios where email='$crear_email'") or die("Error en la consulta SQL");
while( $row = mysql_fetch_array ( $result ))
{
@$id_usuario = $row['ID_USUARIO'];
}
?>

<script>
localStorage.setItem("id_usuario", "<?php echo $id_usuario ?>");
localStorage.setItem("clave", "<?php echo $crear_clave ?>");
localStorage.setItem("email", "<?php echo $crear_email ?>");

mensaje_crear_cuenta();
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

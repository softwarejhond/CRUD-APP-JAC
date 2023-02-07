<?php
include 'conexion.php';
//START--  save information in variable get the inputs 
$tipoIdentificacion = $_POST["tipoIdentificacion"];
$numeroIdentificacion = $_POST["numeroIdentificacion"];
$lugarExpedicionDoc = $_POST["lugarExpedicionDoc"]; 
$nombre = $_POST["nombre"]; 
$apellidos = $_POST["apellidos"];
$fechaNacimiento = $_POST["fechaNacimiento"];
$edad = $_POST["edad"];
$genero = $_POST["genero"];
$direccion = $_POST["direccion"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$actividades = $_POST["actividades"];
$dataTime = date("Y-m-d H:i:s");
//END--  save information in variable get the inputs 
$sql = "INSERT INTO estudents(,tipoIdentificacion,numeroIdentificacion,lugarExpedicionDoc,nombre,apellidos,fechaNacimiento,edad,genero,direccion,telefono,email,actividades,fechaCreacionEst) VALUES ('$tipoIdentificacion','$numeroIdentificacion','$lugarExpedicionDoc','$nombre','$apellidos','$fechaNacimiento','$edad','$genero','$direccion','$telefono','$email','$actividades','$dataTime')";					
$result=mysqli_query($conexion,$sql);

if($result){
    echo 'Datos insertados';
}else{
    echo 'Error al guardar los datos';
}
?>
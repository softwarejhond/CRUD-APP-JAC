<?php
include 'conexion.php';
//START--  save information in variable get the inputs 
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$direccion = $_POST["direccion"]; 

$dataTime = date("Y-m-d H:i:s");
//END--  save information in variable get the inputs 
$sql = "INSERT INTO estudents(tipoIdentificacion,numeroIdentificacion,lugarExpedicionDoc,nombre,apellidos,fechaNacimiento,edad,genero,direccion,telefono,email,actividades,fechaCreacionEst) VALUES ('$nombre','$correo','$direccion','$nombre','$apellidos','$fechaNacimiento','$edad','$genero','$direccion','$telefono','$email','$actividades','$dataTime')";					
$result=mysqli_query($conexion,$sql);

if($result){
    echo 'Datos insertados';
}else{
    echo 'Error al guardar los datos';
}
?>
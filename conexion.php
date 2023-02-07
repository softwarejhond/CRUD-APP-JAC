<?php
$hostname="157.90.91.29";
$username="agenciae";
$password="q294g.#PwM9SYy";
$database="agenciae_cartasJAC";
$conexion=new mysqli($hostname,$username,$password,$database);
mysqli_set_charset($conexion, 'utf8'); //Muy importante esta linea, guardara el contenido que contenga acentos de manera correcta configurando la bd con el UTF-8 spanis ci
if($conexion->connect_errno){
    echo 'El sistema esta presentando problemas';
}
?>
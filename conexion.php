<?php
$hostname="157.90.91.29";
$username="agenciae";
$password="q294g.#PwM9SYy";
$database="agenciae_cartasJAC";
$conexion=new mysqli($hostname,$username,$password,$database);
if($conexion->connect_errno){
    echo 'El sistema esta presentando problemas';
}
?>
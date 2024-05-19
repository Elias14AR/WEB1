<?php

$user_db="if0_36150760";
$pass_db="EhWU6kFfQWUvuJ";
$db_name="if0_36150760_pweb";
$host_db="sql101.infinityfree.com";
$conexion = new mysqli($host_db,$user_db,$pass_db,$db_name);

if($conexion-> conect_error){
    die("La conexion peto".$conexion->conect_error);
}else{
    echo "conexion con exito";
}

?>
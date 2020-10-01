<?php

include('../app/config/config.php');
$nombre_laboratorio = $_POST['nombre_laboratorio'];
$user_creacion = $_POST['user_creacion'];

date_default_timezone_set("America/Caracas");
$fyh_creacion = date('Y-m-d h:i:s');
$estado = "1";

$sentencia = $pdo->prepare("INSERT INTO tb_laboratorio
                                     (nombre_laboratorio,user_creacion,fyh_creacion,estado)
VALUES(:nombre_laboratorio,:user_creacion,:fyh_creacion,:estado)");

$sentencia->bindParam('nombre_laboratorio', $nombre_laboratorio);
$sentencia->bindParam('user_creacion', $user_creacion);
$sentencia->bindParam('fyh_creacion', $fyh_creacion);
$sentencia->bindParam('estado', $estado);


if ($sentencia->execute()) {
   // echo "Usuario registrado correctamente";
    header('Location: ' . $URL . '/almacen/registro_medicamento.php');
} else {
    echo "No se registro correctamente";
}


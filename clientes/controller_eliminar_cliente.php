<?php
include('../app/config/config.php');

$user_eliminacion = $_POST['user_creacion'];
$id_cliente = $_GET['id_cliente'];
date_default_timezone_set("America/Caracas");
$fyh_eliminacion = date('Y-m-d h:i:s');
$estado = "0";
$sentencia = $pdo->prepare("UPDATE  tb_clientes SET
                                     
                                     user_eliminacion=:user_eliminacion,
                                     fyh_eliminacion =:fyh_eliminacion,
                                     estado = :estado
                               WHERE id_cliente =:id_cliente");



$sentencia->bindParam(':user_eliminacion',$user_eliminacion);
$sentencia->bindParam(':fyh_eliminacion',$fyh_eliminacion);
$sentencia->bindParam(':estado',$estado);
$sentencia->bindParam(':id_cliente',$id_cliente);


if ($sentencia->execute()){
    // echo "Registro de medicamento correctamente";
    header('Location: '.$URL.'/clientes/');
}
else {
    echo "NO SE ELIMINO CORRECTAMENTE EL CLIENTE";
}


?>
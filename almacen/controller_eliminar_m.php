<?php
include('../app/config/config.php');

$user_eliminacion = $_POST['user_creacion'];
$id_medicamento = $_GET['id_medicamento'];
date_default_timezone_set("America/Caracas");
$fyh_eliminacion = date('Y-m-d h:i:s');
$estado = "0";
$sentencia = $pdo->prepare("UPDATE  tb_reg_medicamentos SET
                                     
                                     user_eliminacion=:user_eliminacion,
                                     fyh_eliminacion =:fyh_eliminacion,
                                     estado = :estado
                               WHERE id_medicamento =:id_medicamento");



$sentencia->bindParam(':user_eliminacion',$user_eliminacion);
$sentencia->bindParam(':fyh_eliminacion',$fyh_eliminacion);
$sentencia->bindParam(':estado',$estado);
$sentencia->bindParam(':id_medicamento',$id_medicamento);


if ($sentencia->execute()){
    // echo "Registro de medicamento correctamente";
    header('Location: '.$URL.'/almacen/');
}
else {
    echo "No se Actualizo correctamente el medicamento";
}


?>
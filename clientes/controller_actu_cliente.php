<?php
include('../app/config/config.php');


$id_cliente = $_POST['id_cliente'];
$nombres = $_POST['nombres'];
$apellido_p = $_POST['apellido_p'];
$apellido_m = $_POST['apellido_m'];
$ci_nit = $_POST['ci_nit'];

$user_actualizacion = $_POST['user_creacion'];

date_default_timezone_set("America/Caracas");
$fyh_actualizacion = date('Y-m-d h:i:s');
$estado = "1";


$sentencia = $pdo->prepare("UPDATE  tb_clientes SET
                                     
                                     nombres=:nombres,
                                     apellido_p =:apellido_p,
                                     apellido_m =:apellido_m,
                                     ci_nit=:ci_nit,                                  
                                     user_actualizacion=:user_actualizacion,
                                     fyh_actualizacion =:fyh_actualizacion
                               WHERE id_cliente =:id_cliente");


$sentencia->bindParam(':id_cliente',$id_cliente);
$sentencia->bindParam(':nombres',$nombres);
$sentencia->bindParam(':apellido_p',$apellido_p);
$sentencia->bindParam(':apellido_m',$apellido_m);
$sentencia->bindParam(':ci_nit',$ci_nit);

$sentencia->bindParam(':user_actualizacion',$user_actualizacion);
$sentencia->bindParam(':fyh_actualizacion',$fyh_actualizacion);





if ($sentencia->execute()){
    // echo "Registro de medicamento correctamente";
    header('Location: '.$URL.'/clientes/');
}
else {
    echo "No se Actualizo correctamente el medicamento";
}


?>

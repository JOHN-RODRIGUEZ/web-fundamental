<?php
include('../app/config/config.php');


$codigo = $_POST['codigo'];
$nombre_comercial = $_POST['nombre_comercial'];
$nombre_generico = $_POST['nombre_generico'];
$laboratorio = $_POST['laboratorio'];
$presentacion = $_POST['presentacion'];
$cantidad_cajas = $_POST['cantidad_cajas'];
$cantidad_unidades= $_POST['cantidad_unidades'];
$cantidad_total = $_POST['cantidad_total'];
$precio_real_caja = $_POST['precio_real_caja'];
$precio_real_unitario = $_POST['precio_real_unitario'];
$precio_real_total = $_POST['precio_real_total'];
$precio_venta_caja = $_POST['precio_venta_caja'];
$precio_venta_unitario = $_POST['precio_venta_unitario'];
$precio_venta_total = $_POST['precio_venta_total'];
$accion_para_que_sirve = $_POST['accion_para_que_sirve'];
$fecha_entrega_medicamento = $_POST['fecha_entrega_medicamento'];
$fecha_vencimineto = $_POST['fecha_vencimineto'];
$stock_maximo_cajas = $_POST['stock_maximo_cajas'];
$stock_maximo_unidades = $_POST['stock_maximo_unidades'];
$stock_minimo_cajas = $_POST['stock_minimo_cajas'];
$stock_minimo_unidades = $_POST['stock_minimo_unidades'];
$user_actualizacion = $_POST['user_creacion'];
$id_medicamento = $_POST['id_medicamento'];
date_default_timezone_set("America/Caracas");
$fyh_actualizacion = date('Y-m-d h:i:s');
$estado = "1";


$sentencia = $pdo->prepare("UPDATE  tb_reg_medicamentos SET
                                     codigo=:codigo,
                                     nombre_comercial=:nombre_comercial,
                                     nombre_generico =:nombre_generico,
                                     laboratorio =:laboratorio,
                                     presentacion=:presentacion,
                                     cantidad_cajas=:cantidad_cajas,
                                     cantidad_unidades=:cantidad_unidades,
                                     cantidad_total=:cantidad_total, 
                                     precio_real_caja =:precio_real_caja,
                                     precio_real_unitario=:precio_real_unitario,
                                     precio_real_total=:precio_real_total,
                                     precio_venta_caja=:precio_venta_caja,
                                     precio_venta_unitario=:precio_venta_unitario,
                                     precio_venta_total=:precio_venta_total,
                                     accion_para_que_sirve=:accion_para_que_sirve,
                                     fecha_entrega_medicamento=:fecha_entrega_medicamento,
                                     fecha_vencimineto=:fecha_vencimineto,
                                     stock_maximo_cajas=:stock_maximo_cajas,
                                     stock_maximo_unidades=:stock_maximo_unidades,
                                     stock_minimo_cajas=:stock_minimo_cajas,
                                     stock_minimo_unidades=:stock_minimo_unidades,
                                     user_actualizacion=:user_actualizacion,
                                     fyh_actualizacion =:fyh_actualizacion
                               WHERE id_medicamento =:id_medicamento");


$sentencia->bindParam(':codigo',$codigo);
$sentencia->bindParam(':nombre_comercial',$nombre_comercial);
$sentencia->bindParam(':nombre_generico',$nombre_generico);
$sentencia->bindParam(':laboratorio',$laboratorio);
$sentencia->bindParam(':presentacion',$presentacion);
$sentencia->bindParam('cantidad_cajas', $cantidad_cajas);
$sentencia->bindParam('cantidad_unidades', $cantidad_unidades);
$sentencia->bindParam('cantidad_total', $cantidad_total);
$sentencia->bindParam(':precio_real_caja',$precio_real_caja);
$sentencia->bindParam(':precio_real_unitario',$precio_real_unitario);
$sentencia->bindParam(':precio_real_total',$precio_real_total);
$sentencia->bindParam(':precio_venta_caja',$precio_venta_caja);
$sentencia->bindParam(':precio_venta_unitario',$precio_venta_unitario);
$sentencia->bindParam(':precio_venta_total',$precio_venta_total);
$sentencia->bindParam(':accion_para_que_sirve',$accion_para_que_sirve);
$sentencia->bindParam(':fecha_entrega_medicamento',$fecha_entrega_medicamento);
$sentencia->bindParam(':fecha_vencimineto',$fecha_vencimineto);
$sentencia->bindParam(':stock_maximo_cajas',$stock_maximo_cajas);
$sentencia->bindParam(':stock_maximo_unidades',$stock_maximo_unidades);
$sentencia->bindParam(':stock_minimo_cajas',$stock_minimo_cajas);
$sentencia->bindParam(':stock_minimo_unidades',$stock_minimo_unidades);
$sentencia->bindParam(':user_actualizacion',$user_actualizacion);
$sentencia->bindParam(':fyh_actualizacion',$fyh_actualizacion);
$sentencia->bindParam(':id_medicamento',$id_medicamento);




if ($sentencia->execute()){
    // echo "Registro de medicamento correctamente";
    header('Location: '.$URL.'/almacen/registro_medicamento.php/');
}
else {
    echo "No se Actualizo correctamente el medicamento";
}


?>
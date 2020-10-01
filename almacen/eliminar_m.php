<?php
$id_m =$_GET['id_m'];
include('../app/config/config.php');
session_start();
if (isset($_SESSION['u_usuario'])) {
    $email_sesion = $_SESSION['u_usuario'];
    $query_sesion = $pdo->prepare("SELECT * FROM tb_usuarios WHERE email='$email_sesion' AND estado='1'");
    $query_sesion->execute();
    $sesion_usuarios = $query_sesion->fetchAll(PDO::FETCH_ASSOC);
    foreach ($sesion_usuarios as $sesion_usuario) {
        $id_sesion = $sesion_usuario['id'];
        $nombres_sesion = $sesion_usuario['nombres'];
        $apellido_p_sesion = $sesion_usuario['apellido_p'];
        $apellido_m_sesion = $sesion_usuario['apellido_m'];
        $ci_sesion = $sesion_usuario['ci'];
        $fecha_nacimiento_sesion = $sesion_usuario['fecha_nacimiento'];
        $foto_perfil_sesion = $sesion_usuario['foto_perfil'];
        $sexo_sesion = $sesion_usuario['sexo'];
        $email_sesion = $sesion_usuario['email'];
        $password_sesion = $sesion_usuario['password'];
        $cargo_sesion = $sesion_usuario['cargo'];
        $celular_sesion = $sesion_usuario['celular'];

    }

    ?>
    <!DOCTYPE html>
    <html lang="es">

    <head>

        <?php include ("../layout/head.php");?>
        <title>Sistema-Farmacia-Eliminacion deMedicamentos</title>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">


        <!--menu derecha -->
        <?php include ("../layout/menu.php");?>

        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    SISTEMA DE FARMACIA-Eliminacion de Medicamentos

                </h1>

            </section>

            <!-- PRINCIPAL -->
            <section class="content">

                <div class="panel panel-danger">
                    <div class="panel-heading">Desea Eliminar el  Medicamento? </div>
                    <div class="panel-body">
                        <?php
                        $query_medicamento = $pdo->prepare("SELECT * FROM tb_reg_medicamentos WHERE  id_medicamento = '$id_m' AND estado='1'");
                        $query_medicamento->execute();
                        $medicamentos = $query_medicamento->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($medicamentos as $medicamento) {
                            $id_medicamento = $medicamento['id_medicamento'];
                            $codigo = $medicamento['codigo'];
                            $nombre_comercial = $medicamento['nombre_comercial'];
                            $nombre_generico = $medicamento['nombre_generico'];
                            $laboratorio = $medicamento['laboratorio'];
                            $presentacion = $medicamento['presentacion'];
                            $cantidad_cajas = $medicamento['cantidad_cajas'];
                            $cantidad_unidades = $medicamento['cantidad_unidades'];
                            $cantidad_total = $medicamento['cantidad_total'];
                            $precio_real_caja = $medicamento['precio_real_caja'];
                            $precio_real_unitario = $medicamento['precio_real_unitario'];
                            $precio_real_total = $medicamento['precio_real_total'];
                            $precio_venta_caja = $medicamento['precio_venta_caja'];
                            $precio_venta_unitario = $medicamento['precio_venta_unitario'];
                            $precio_venta_total = $medicamento['precio_venta_total'];
                            $accion_para_que_sirve = $medicamento['accion_para_que_sirve'];
                            $fecha_entrega_medicamento = $medicamento['fecha_entrega_medicamento'];
                            $fecha_vencimineto = $medicamento['fecha_vencimineto'];
                            $stock_maximo_cajas = $medicamento['stock_maximo_cajas'];
                            $stock_maximo_unidades = $medicamento['stock_maximo_unidades'];
                            $stock_minimo_cajas = $medicamento['stock_minimo_cajas'];
                            $stock_minimo_unidades = $medicamento['stock_minimo_unidades'];
                            $user_creacion = $medicamento['user_creacion'];
                        }
                        ?>


                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Codigo</label>
                                        <input type="text" class="form-control" name="codigo" value="<?php echo $codigo;?>" disabled>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Nombre Comercial</label>
                                        <input type="text" class="form-control" name="nombre_comercial" value="<?php echo $nombre_comercial;?>"disabled>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Nombre Generico</label>
                                        <input type="text" class="form-control"name="nombre_generico" value="<?php echo $nombre_generico;?>"disabled>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Laboratorio</label>

                                        <select name="laboratorio" id="" class="form-control" disabled>
                                            <option value=""><?php echo $laboratorio;?></option>
                                            <?php
                                            $query_lab = $pdo->prepare("SELECT * FROM tb_laboratorio WHERE  estado='1'");
                                            $query_lab->execute();
                                            $laboratorios = $query_lab->fetchAll(PDO::FETCH_ASSOC);
                                            foreach ($laboratorios as $laboratorio)
                                            {
                                                $id_laboratorio=$laboratorio['id_laboratorio'];
                                                $nombre_laboratorio =$laboratorio['nombre_laboratorio'];
                                                ?>
                                                <option value="<?php echo $nombre_laboratorio?>"><?php echo $nombre_laboratorio?></option>>
                                                <?php

                                            }
                                            ?>

                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Presentacion</label>

                                        <select name="presentacion" id="" class="form-control" disabled>
                                            <option value=""><?php echo $presentacion;?></option>
                                            <?php
                                            $query_pres = $pdo->prepare("SELECT * FROM tb_presentacion WHERE  estado='1'");
                                            $query_pres->execute();
                                            $presentaciones = $query_pres->fetchAll(PDO::FETCH_ASSOC);
                                            foreach ($presentaciones as $presentacion)
                                            {
                                                $id_precentacion =$presentacion['id_presentacion'];
                                                $presentacion =$presentacion['presentacion'];
                                                ?>
                                                <option value="<?php echo $presentacion?>"><?php echo $presentacion?></option>>
                                                <?php

                                            }
                                            ?>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Cantidad en Cajas</label>
                                        <input type="text" class="form-control"name="cantidad_cajas" value="<?php echo $cantidad_cajas;?>"disabled>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Cantidad En Unidades </label>
                                        <input type="text" class="form-control"name="cantidad_unidades" value="<?php echo $cantidad_unidades;?>"disabled>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Cantidad Total</label>
                                        <input type="text" class="form-control"name="cantidad_total" value="<?php echo $cantidad_total;?>"disabled>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Precio real en caja</label>
                                        <input type="text" class="form-control"name="precio_real_caja" value="<?php echo $precio_real_caja;?>"disabled>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Precio real en unidades</label>
                                        <input type="text" class="form-control"name="precio_real_unitario"value="<?php echo $precio_real_unitario;?>"disabled>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Precio de Venta Caja</label>
                                        <input type="text" class="form-control"name="precio_venta_caja" value="<?php echo $precio_venta_caja;?>"disabled>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Precio de Venta Unidad</label>
                                        <input type="text" class="form-control"name="precio_venta_unitario"value="<?php echo $precio_venta_unitario;?>"disabled>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Accion medicamento</label>
                                        <input type="text" class="form-control"name="accion_para_que_sirve" value="<?php echo $accion_para_que_sirve;?>"disabled>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Fecha de Entrega del Medicamento</label>
                                        <input type="date" class="form-control"name="fecha_entrega_medicamento" value="<?php echo $fecha_entrega_medicamento;?>"disabled>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Fecha de Vencimiento del Medicamento</label>
                                        <input type="date" class="form-control"name="fecha_vencimineto" value="<?php echo $fecha_vencimineto;?>"disabled>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Cantidad Maximo en Cajas</label>
                                        <input type="text" class="form-control"name="stock_maximo_cajas" value="<?php echo $stock_maximo_cajas;?>"disabled>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Cantidad Maximo en Unidades</label>
                                        <input type="text" class="form-control"name="stock_maximo_unidades" value="<?php echo $stock_maximo_unidades;?>"disabled>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Cantidad Minima en Cajas</label>
                                        <input type="text" class="form-control"name="stock_minimo_cajas" value="<?php echo $stock_minimo_cajas;?>"disabled>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Cantidad Minima en Unidades</label>
                                        <input type="text" class="form-control"name="stock_minimo_unidades" value="<?php echo $stock_minimo_unidades;?>"disabled>
                                    </div>
                                </div>

                                <input type="text"  value="<?php echo $email_sesion;?>" name="user_creacion" hidden>
                                <input type="text"  value="<?php echo $id_medicamento;?>" name="id_medicamento" hidden>

                            </div>

                    </div>
                    <div class="row">
                        <br>
                        <div class="col-md-12">
                            <center>
                                <a href="index.php" class="btn-default btn-lg">Cancelar</a>
                                <a href="controller_eliminar_m.php?id_medicamento=<?php echo $id_medicamento;?> &&user_creacion=<?php echo $email_sesion;?>"class="btn btn-danger btn-lg">
                                 Eliminar medicamento
                                </a>

                            </center>

                        </div>
                    </div>


                </div>
        </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <?php include ("../layout/footer.php");?>
    </footer>


    </div>
    <?php include ("../layout/footer_link.php");?>
    </body>
    </html>



    <?php
}else{
    echo "NO EXISTE SESION";
    header('Location'.$URL.'/login');
}





?>


<!-- Modal laboratorio-->
<div class="modal fade" id="myModal_laboratorio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <form action="controller_reg_laboratorio.php" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Registro de Laboratorio</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <label>Ingrese Nombre del Labotorio</label>
                        <input type="text" class="form-control" name="nombre_laboratorio">
                        <input type="text" value="<?php echo $email_sesion;?>"name="user_creacion" hidden>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </form>

    </div>
</div>
<!-- Modal presentacion-->
<div class="modal fade" id="myModal_presentacion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <form action="controller_reg_presentacion.php" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Registro de Presentacion</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <label>Ingrese Nombre de Presentacion</label>
                        <input type="text" class="form-control" name="presentacion">
                        <input type="text" value="<?php echo $email_sesion;?>"name="user_creacion" hidden>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </form>

    </div>
</div>
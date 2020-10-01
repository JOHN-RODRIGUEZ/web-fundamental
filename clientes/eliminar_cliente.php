<?php
$id_c =$_GET['id_c'];
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
        <title>Sistema-Farmacia-Eliminacion CLIENTE</title>
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
                    SISTEMA DE FARMACIA-Eliminacion de CLIENTE

                </h1>

            </section>

            <!-- PRINCIPAL -->
            <section class="content">

                <div class="panel panel-danger">
                    <div class="panel-heading">Desea Eliminar el  CLIENTE? </div>
                    <div class="panel-body">
                        <?php
                        $query_cliente = $pdo->prepare("SELECT * FROM tb_clientes WHERE id_cliente = '$id_c'AND estado='1'");
                        $query_cliente->execute();
                        $clientes = $query_cliente->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($clientes as $cliente) {
                            $id_cliente = $cliente['id_cliente'];
                            $nombres = $cliente['nombres'];
                            $apellido_p = $cliente['apellido_p'];
                            $apellido_m = $cliente['apellido_m'];
                            $ci_nit = $cliente['ci_nit'];
                            $user_creacion = $cliente['user_creacion'];
                        }
                        ?>


                        <div class="row">

                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input type="text" class="form-control" name="nombres" value="<?php echo $nombres;?>" disabled>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Apellido Paterno</label>
                                        <input type="text" class="form-control"name="apellido_p" value="<?php echo $apellido_p;?>" disabled>
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Apellido Materno</label>
                                        <input type="text" class="form-control"name="apellido_m" value="<?php echo $apellido_m;?>"disabled>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Carnet Identidad || NIT. </label>
                                        <input type="text" class="form-control"name="ci_nit" value="<?php echo $ci_nit;?>"disabled>
                                    </div>
                                </div>

                            <input type="text"  value="<?php echo $email_sesion;?>" name="user_creacion" hidden>
                            <input type="text"  value="<?php echo $id_cliente;?>" name="id_cliente" hidden>

                        </div>

                    </div>
                    <div class="row">
                        <br>
                        <div class="col-md-12">
                            <center>
                                <a href="" class="btn-default btn-lg">Cancelar</a>
                                <a href="controller_eliminar_cliente.php?id_cliente=<?php echo $id_c;?> &&user_creacion=<?php echo $email_sesion;?>"class="btn btn-danger btn-lg">
                                    Eliminar Cliente
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
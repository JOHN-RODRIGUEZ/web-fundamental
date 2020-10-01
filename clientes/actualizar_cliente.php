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
        <title>Sistema-Farmacia-Actualizacion CLIENTE</title>
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
                    SISTEMA DE FARMACIA-Actualizacion Cliente

                </h1>

            </section>

            <!-- PRINCIPAL -->
            <section class="content">

                <div class="panel panel-success">
                    <div class="panel-heading">Datos del Cliente </div>
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

                        <form action="controller_actu_cliente.php" method="post">
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input type="text" class="form-control" name="nombres" value="<?php echo $nombres;?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Apellido Paterno</label>
                                        <input type="text" class="form-control"name="apellido_p" value="<?php echo $apellido_p;?>">
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Apellido Materno</label>
                                        <input type="text" class="form-control"name="apellido_m" value="<?php echo $apellido_m;?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Carnet Identidad || NIT. </label>
                                        <input type="text" class="form-control"name="ci_nit" value="<?php echo $ci_nit;?>">
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
                                <a href="index.php" class="btn-default btn-lg">Cancelar</a>
                                <input type="submit" class="btn btn-success btn-lg" value="Actualizar Cliente">
                            </center>

                        </div>
                    </div>
                    </form>

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

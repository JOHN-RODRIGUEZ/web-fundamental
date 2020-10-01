<?php
include ("../app/config/config.php");
session_start();
if (isset($_SESSION['u_usuario'])) {
    $email_sesion = $_SESSION['u_usuario'];
    $query_sesion = $pdo->prepare("SELECT * FROM tb_usuarios WHERE email='$email_sesion' AND estado='1'");
    $query_sesion->execute();
    $sesion_usuarios = $query_sesion->fetchAll(PDO::FETCH_ASSOC);}
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
    <title>Sistema-Farmacia-Cliente</title>
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
                SISTEMA DE FARMACIA CREACION DE CLIENTE

            </h1>

        </section>

        <!-- PRINCIPAL -->
        <section class="content">


            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">CREACION DE CLIENTE</h3>
                        </div>
                        <div class="panel-body">
                            <form action="controller_clientes.php" method="post" enctype="multipart/form-data">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for=""><i class="glyphicon glyphicon-user"></i> Nombres</label>
                                        <input type="text" class="form-control" name="nombres" required>
                                    </div>
                                    <div class="form-group">
                                        <label for=""><i class="glyphicon glyphicon-user"></i> Apellido materno</label>
                                        <input type="text" class="form-control" name="apellido_m">
                                    </div>


                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for=""><i class="glyphicon glyphicon-user"></i> Apellido paterno</label>
                                        <input type="text" class="form-control" name="apellido_p" required>
                                    </div>
                                    <div class="form-group">
                                        <label for=""><i class="glyphicon glyphicon-list-alt"></i> Carnet de Identidad || NIT </label>
                                        <input type="text" class="form-control" name="ci_nit" required>
                                    </div>


                                </div>
                                <div class="row">
                                    <br>
                                    <div class="col-md-12">
                                        <center>
                                            <a href="" class="btn-default btn-lg">Cancelar</a>
                                            <input type="submit" class="btn btn-primary btn-lg" value="Registrar">
                                        </center>

                                    </div>
                                </div>
                            </form>
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




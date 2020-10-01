<?php
include('./app/config/config.php');
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

        <?php include ("./layout/head.php");?>
        <title>Sistema-Farmacia-Usuario</title>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">


        <!--menu derecha -->
        <?php include ("./layout/menu.php");?>

        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    SISTEMA DE FARMACIA USUARIOS

                </h1>

            </section>

            <!-- PRINCIPAL -->
            <section class="content">

                <div class="panel panel-primary">
                    <div class="panel-heading">Datos Personales</div>
                    <div class="panel-body">
                        <table border="1">
                            <tr>
                                <td>Nombre Completo</td>
                                <td><?php echo $nombres_sesion." ".$apellido_p_sesion." ".$apellido_m_sesion; ?></td>
                            </tr>
                            <tr>
                                <td>Ci</td>
                                <td><?php echo $ci_sesion; ?></td>
                            </tr>
                            <tr>
                                <td>Fecha de Nacimiento</td>
                                <td><?php echo $fecha_nacimiento_sesion; ?></td>
                            </tr>
                            <tr>
                                <td>Celular</td>
                                <td><?php echo $celular_sesion; ?></td>
                            </tr>
                            <tr>
                                <td>Foto de Perfil</td>
                                <td><?php echo $foto_perfil_sesion; ?></td>
                            </tr>
                            <tr>
                                <td>Sexo</td>
                                <td><?php echo $sexo_sesion; ?></td>
                            </tr>
                            <tr>
                                <td>Correo</td>
                                <td><?php echo $email_sesion; ?></td>
                            </tr>
                            <tr>
                                <td>Cargo</td>
                                <td><?php echo $cargo_sesion; ?></td>
                            </tr>



                        </table>

                    </div>
                </div>

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <?php include ("./layout/footer.php");?>
        </footer>


    </div>
    <?php include ("./layout/footer_link.php");?>
    </body>
    </html>



<?php
        //echo "Bienvenido Usuario";




 ?>
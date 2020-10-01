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
    <title>Sistema-Farmacia-Usuario</title>
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
                SISTEMA DE FARMACIA USUARIOS

            </h1>

        </section>

        <!-- PRINCIPAL -->
        <section class="content">

            <div class="panel panel-primary">
                <div class="panel-heading">Listado de Usuarios Activos</div>
                <div class="panel-body">
                    <table class="table table-bordered table-hover table-condensed">
                        <th>Nro </th>
                        <th>Nombre Completo </th>
                        <th>Carnet de Identidad </th>
                        <th>Fecha de Nacimiento </th>
                        <th>Celular </th>
                        <th>Foto de Perfil </th>
                        <th>Sexo </th>
                        <th>@Email </th>
                        <th>Cargo </th>
                        <th>User Creacion </th>
                        <th>Fecha de cracion </th>
                        <?php
                        $contador_usuario = 0;
                        $query_usuarios = $pdo->prepare("SELECT * FROM tb_usuarios");
                        $query_usuarios->execute();
                        $usuarios = $query_usuarios->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($usuarios as $usuario){
                            $id = $usuario['id'];
                            $nombres = $usuario['nombres'];
                            $apellido_p = $usuario['apellido_p'];
                            $apellido_m = $usuario['apellido_m'];
                            $ci = $usuario['ci'];
                            $fecha_nacimiento = $usuario['fecha_nacimiento'];
                            $celular = $usuario['celular'];
                            $foto_perfil = $usuario['foto_perfil'];
                            $sexo = $usuario['sexo'];
                            $email = $usuario['email'];
                            $password = $usuario['password'];
                            $cargo = $usuario['cargo'];
                            $user_creacion = $usuario['user_creacion'];
                            $fyh_creacion = $usuario['fyh_creacion'];
                            $contador_usuario = $contador_usuario + 1;
                            ?>

                            <tr>
                                <td><center><?php echo $contador_usuario; ?></center></td>
                                <td><?php echo $nombres." ".$apellido_p." ".$apellido_m; ?></td>
                                <td><?php echo $ci;?></td>
                                <td><?php echo $fecha_nacimiento;?></td>
                                <td><?php echo $celular; ?></td>
                                <td>
                                    <?php
                                    $caracter_buscar = ".";
                                    $buscar = strpos($foto_perfil,$caracter_buscar);
                                        if($buscar == true)
                                            {?>
                                                <center>
                                                    <img src="<?php echo $URL ?>/usuarios/update_usuarios/<?php echo $foto_perfil;?>" width="100px" alt="" >

                                                </center>
                                                <?php
                                            }

                                         else{
                                                if ($sexo == "Masculino")
                                                    {?>
                                                        <center>
                                                            <img src="<?php echo $URL ?>/usuarios/update_usuarios/hombre.jpg" width="100px" alt="" >
                                                        </center>

                                                     <?php
                                                    }

                                                else{?>
                                                        <center>
                                                            <img src="<?php echo $URL ?>/usuarios/update_usuarios/mujer.jpg" width="100px" alt="" >
                                                        </center>

                                    <?php
                                                     }
                                            }


                                    ?>
                                </td>
                                <td><?php echo $sexo;?></td>
                                <td><?php echo $email;?></td>
                                <td><?php echo $cargo;?></td>
                                <td><?php echo $user_creacion;?></td>
                                <td><?php echo $fyh_creacion;?></td>

                            </tr>
                        <?php
                        }
                        ?>
                        <tr>

                        </tr>

                    </table>
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
<?php
include('../app/config/config.php');
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
    <!-- DataTables -->
    <link rel="stylesheet" href="../app/templeites/plugins/datatables/dataTables.bootstrap.css">
    <title>Sistema-Farmacia-Registro Clientes</title>
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
                SISTEMA DE FARMACIA-Listado de Clientes

            </h1>

        </section>

        <!-- PRINCIPAL -->
        <section class="content">

            <div class="panel panel-primary">
                <div class="panel-heading"> Lista de Clientes</div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Nro</th>
                                <th>Nombre Completo</th>
                                <th>Carnet de Identidad || NIT.</th>
                                <th>Fecha de Creacion</th>
                                <th>User Creacion</th>
                                <th>Modificar</th>
                            </tr>
                            </thead>
                            <tbody>


                            <?php
                            $contador_cliente = 0;
                            $query_cliente = $pdo->prepare("SELECT * FROM tb_clientes WHERE estado='1'");
                            $query_cliente->execute();
                            $clientes = $query_cliente->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($clientes as $cliente){
                                $id_cliente = $cliente['id_cliente'];
                                $nombres = $cliente['nombres'];
                                $apellido_p = $cliente['apellido_p'];
                                $apellido_m = $cliente['apellido_m'];
                                $ci_nit = $cliente['ci_nit'];
                                $fyh_creacion = $cliente['fyh_creacion'];
                                $user_creacion = $cliente['user_creacion'];
                                $contador_cliente =  $contador_cliente + 1;


                                ?>
                                <tr>
                                    <td align="center" ><?php echo $contador_cliente;?></td>
                                    <td align="center" ><?php echo $nombres ."".$apellido_p." ".$apellido_m;?></td>
                                    <td align="center" ><?php echo $ci_nit;?></td>
                                    <td align="center" ><?php echo $fyh_creacion ;?></td>
                                    <td align="center" ><?php echo $user_creacion;?></td>

                                    <td>
                                        <a href="actualizar_cliente.php?id_c=<?php echo $id_cliente?>" class="btn btn-success"><i class="fa fa-pencil"></i> Editar</a>
                                        <a href="eliminar_cliente.php?id_c=<?php echo $id_cliente;?>" class="btn btn-danger"><i class="fa fa-pencil"></i> Eliminar</a>
                                    </td>
                                </tr>

                                <?php
                            }
                            ?>
                            </tfoot>
                        </table>

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
<?php// include ("../layout/footer_link.php");?>
<!-- jQuery 2.2.3 -->
<script src="../app/templeites/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../app/templeites/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../app/templeites/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../app/templeites/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../app/templeites/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../app/templeites/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../app/templeites/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../app/templeites/dist/js/demo.js"></script>
<!-- page script -->

<script>
    $(function () {
        $('#example1').DataTable( {
            "responsive": true,
            "autoWidth": false,
            "pageLength": 5,
            "language" :{
                "decimal": "",
                "emptyTable":     "No hay información",
                "info":           "Mostrando _START_ a _END_ de _TOTAL_ Clientes",
                "infoEmpty":      "Mostrando  0 a 0 de 0 Clientes",
                "infoFiltered":   "(Filtro de MAX total  Clientes)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu":     "Mostrar_MENU_Clientes",
                "loadingRecords": "Cargando...",
                "processing":     "Procesando...",
                "search":         "Buscador de Clientes:",
                "zeroRecords":    "Sin resultados encontrados",
                "paginate": {
                    "first":      "Primero",
                    "last":       "Ultimo",
                    "next":       "Siguiente",
                    "previous":   "Anterior"
                }
            }
        });
    });
</script>
</body>
</html>


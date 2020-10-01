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
    <title>Sistema-Farmacia-Registro Medicamentos</title>
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
                SISTEMA DE FARMACIA-Listado de Medicamentos

            </h1>

        </section>

        <!-- PRINCIPAL -->
        <section class="content">

            <div class="panel panel-primary">
                <div class="panel-heading"> Lista de Medicamentos</div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Nro</th>
                                <th>Codigo</th>
                                <th>Nombre Comercial</th>
                                <th>Nombre Generico</th>
                                <th>Laboratorio</th>
                                <th>Presentacion</th>
                                <th>Cantidad En Cajas</th>
                                <th>Cantidad Unidades</th>
                                <th>Cantidad Total</th>
                                <th>Precio Real en Caja</th>
                                <th>Precio Real en Unidad</th>
                                <th>Precio Real Total</th>
                                <th>Precio de Venta Caja</th>
                                <th>Precio de Venta Unidad</th>
                                <th>Precio de Venta Total</th>
                                <th>Accion del Medicamento</th>
                                <th>Fecha de Entrega</th>
                                <th>Fecha de Vencimiento</th>
                                <th>Cantidad Maximo en Caja</th>
                                <th>Cantidad Maximo en Unidad</th>
                                <th>Cantidad Minimo en Caja</th>
                                <th>Cantidad Minimo en Unidad</th>
                                <th>Usuario Registrado</th>
                                <th>Accion</th>
                            </tr>
                            </thead>
                            <tbody>


                            <?php
                            $sumar_cantidad = 0;
                            $sumar_precio_real_total =0;
                            $sumar_precio_venta_total=0;
                            $utilidad_total=0;
                            $contador_medicamento = 0;
                            $query_medicamento = $pdo->prepare("SELECT * FROM tb_reg_medicamentos WHERE estado='1'");
                            $query_medicamento->execute();
                            $medicamentos = $query_medicamento->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($medicamentos as $medicamento){
                                $id_medicamento = $medicamento['id_medicamento'];
                                $codigo = $medicamento['codigo'];
                                $nombre_comercial = $medicamento['nombre_comercial'];
                                $nombre_generico = $medicamento['nombre_generico'];
                                $laboratorio = $medicamento['laboratorio'];
                                $presentacion = $medicamento['presentacion'];
                                $cantidad_cajas = $medicamento['cantidad_cajas'];
                                $cantidad_unidades = $medicamento['cantidad_unidades'];
                                $cantidad_total= $medicamento['cantidad_total'];
                                $precio_real_caja= $medicamento['precio_real_caja'];
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
                                $contador_medicamento =  $contador_medicamento + 1;
                                $sumar_cantidad = $sumar_cantidad +$cantidad_total;
                                $sumar_precio_real_total = $sumar_precio_real_total +$precio_real_total;
                                $sumar_precio_venta_total = $sumar_precio_venta_total +$precio_venta_total;
                                $utilidad_total = $sumar_precio_venta_total-$sumar_precio_real_total;

                                ?>
                                <tr>
                                    <td align="center" ><?php echo $contador_medicamento;?></td>
                                    <td align="center" ><?php echo $codigo;?></td>
                                    <td align="center" ><?php echo $nombre_comercial;?></td>
                                    <td align="center" ><?php echo $nombre_generico;?></td>
                                    <td align="center" ><?php echo $laboratorio;?></td>
                                    <td align="center" ><?php echo $presentacion;?></td>
                                    <td align="center" ><?php echo $cantidad_cajas;?></td>
                                    <td align="center" ><?php echo $cantidad_unidades;?></td>
                                    <td align="center" ><?php echo $cantidad_total;?></td>
                                    <td align="center" ><?php echo $precio_real_caja;?></td>
                                    <td align="center" ><?php echo $precio_real_unitario;?></td>
                                    <td align="center" ><?php echo $precio_real_total;?></td>
                                    <td align="center" ><?php echo $precio_venta_caja;?></td>
                                    <td align="center" ><?php echo $precio_venta_unitario;?></td>
                                    <td align="center" ><?php echo $precio_venta_total;?></td>
                                    <td align="center" ><?php echo $accion_para_que_sirve;?></td>
                                    <td align="center" ><?php echo $fecha_entrega_medicamento;?></td>
                                    <td align="center" ><?php echo $fecha_vencimineto;?></td>
                                    <td align="center" ><?php echo $stock_maximo_cajas;?></td>
                                    <td align="center" ><?php echo $stock_minimo_cajas;?></td>
                                    <td align="center" ><?php echo $stock_minimo_cajas;?></td>
                                    <td align="center" ><?php echo $stock_minimo_unidades;?></td>
                                    <td align="center" ><?php echo $user_creacion;?></td>
                                    <td>
                                        <a href="actualizar_m.php?id_m=<?php echo $id_medicamento;?>" class="btn btn-success"><i class="fa fa-pencil"></i> Editar</a>
                                        <a href="eliminar_m.php?id_m=<?php echo $id_medicamento;?>" class="btn btn-danger"><i class="fa fa-pencil"></i> Eliminar</a>
                                    </td>
                                </tr>

                                <?php
                            }
                            ?>
                            </tfoot>
                        </table>

                    </div>
                    <div class="row container">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">TOTAL | CANTIDAD</label>
                                <input type="text" value="<?php echo $sumar_cantidad;?>" class="form-control" disabled>

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">TOTAL |  INVENTARIO $ </label>
                                <input type="text" value="<?php echo $sumar_precio_real_total." Bs ";?>" class="form-control" disabled>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">TOTAL | INVENTARIO VENTA $</label>
                                <input type="text" value="<?php echo $sumar_precio_venta_total." Bs"?>" class="form-control" disabled>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">TOTAL | UTILIDAD $</label>
                                <input type="text" value="<?php echo $utilidad_total." Bs"?>" class="form-control" disabled>
                            </div>

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
                "info":           "Mostrando _START_ a _END_ de _TOTAL_ Medicamentos",
                "infoEmpty":      "Mostrando 0 a 0 de 0 Medicamentos",
                "infoFiltered":   "(Filtro de MAX total Medicamentos)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu":     "Mostrar_MENU_Medicamentos",
                "loadingRecords": "Cargando...",
                "processing":     "Procesando...",
                "search":         "Buscador de Medicamentos:",
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

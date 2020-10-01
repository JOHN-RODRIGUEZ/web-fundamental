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
                SISTEMA DE FARMACIA CREACION DE USUARIOS

            </h1>

        </section>

        <!-- PRINCIPAL -->
        <section class="content">


            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">CREACION DE USUARIO</h3>
                        </div>
                        <div class="panel-body">
                           <form action="controller_create.php" method="post" enctype="multipart/form-data">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for=""><i class="glyphicon glyphicon-user"></i> Nombres</label>
                                      <input type="text" class="form-control" name="nombres" required>
                                  </div>
                                  <div class="form-group">
                                      <label for=""><i class="glyphicon glyphicon-user"></i> Apellido materno</label>
                                      <input type="text" class="form-control" name="apellido_m">
                                  </div>
                                  <div class="form-group">
                                      <label for=""><i class="glyphicon glyphicon-calendar"></i>Fecha de nacimiento</label>
                                      <input type="date" class="form-control" name="fecha_nacimiento" required>
                                  </div>
                                  <div class="form-group">
                                      <label for=""><i class="glyphicon glyphicon-picture"></i> Foto de Perfil</label>
                                      <input type="file" class="form-control" id="file" name="file">
                                      <center>
                                          <br>
                                          <output id="list" style="margin-top: 0px"></output>
                                      </center>
                                  </div>
                              </div>
                               <div class="col-md-6">
                                   <div class="form-group">
                                       <label for=""><i class="glyphicon glyphicon-user"></i> Apellido paterno</label>
                                       <input type="text" class="form-control" name="apellido_p" required>
                                   </div>
                                   <div class="form-group">
                                       <label for=""><i class="glyphicon glyphicon-list-alt"></i> Carnet de Identidad</label>
                                       <input type="text" class="form-control" name="ci" required>
                                   </div>
                                   <div class="form-group">
                                       <label for=""><i class="glyphicon glyphicon-earphone"></i> Celular</label>
                                       <input type="text" class="form-control" name="celular" required>
                                   </div>
                                   <div class="form-group">
                                       <label for="">Sexo</label>
                                       <select name="sexo" id="" class="form-control" required>
                                           <option value="Masculino">Masculino</option>
                                           <option value="Femenino">Femenino</option>
                                       </select>
                                   </div>

                                   <div class="form-group">
                                       <label for=""><i class="glyphicon glyphicon-calendar"></i> @Email</label>
                                       <input type="email" class="form-control" name="email" required>
                                   </div>
                                   <div class="form-group">
                                       <label for=""><i class="glyphicon glyphicon-eye-close"></i> Password</label>
                                       <input type="password" class="form-control" name="password" required>
                                   </div>
                                   <div class="form-group">
                                       <label for=""><i class="glyphicon glyphicon-eye-close"></i> Confirmar password</label>
                                       <input type="password" class="form-control" required>
                                   </div>
                                   <div class="form-group">
                                       <label for=""><i class="glyphicon glyphicon-briefcase"></i> Cargo</label>
                                       <select name="cargo" id="" class="form-control" required>
                                           <option value="Administrador">Administrador</option>
                                           <option value="Empleado">Empleado</option>
                                       </select>
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
    <!-- CODIGO PARA ABRIR LAS IMAGENES del 1 -->
    <script>
        function archivo(evt) {
            var files = evt.target.files; // FileList object
            // Obtenemos la imagen del campo "file".
            for (var i = 0, f; f = files[i]; i++) {
                //Solo admitimos imágenes.
                if (!f.type.match('image.*')) {
                    continue;
                }
                var reader = new FileReader();
                reader.onload = (function (theFile) {
                    return function (e) {
                        // Insertamos la imagen
                        document.getElementById("list").innerHTML = ['<img class="thumb thumbnail" src="',e.target.result, '" width="200px" title="', escape(theFile.name), '"/>'].join('');
                    };
                })(f);
                reader.readAsDataURL(f);
            }
        }
        document.getElementById('file').addEventListener('change', archivo, false);
    </script>




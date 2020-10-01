<?php
?>
<header class="main-header">

    <!-- Logo -->
    <a href="<?php echo $URL;?>" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>S</b>F</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Sistema </b>de Farmacia</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?php  echo $URL;?>/usuarios/update_usuarios/<?php echo $foto_perfil_sesion;?>" class="user-image" alt="User Image">
                        <span class="hidden-xs"><?php echo $nombres_sesion;?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="<?php  echo $URL;?>/usuarios/update_usuarios/<?php echo $foto_perfil_sesion;?>" class="img-circle" alt="User Image">

                            <p>
                                <?php echo $nombres_sesion."-".$cargo_sesion;?>
                                <small><?php echo $email_sesion;?></small>
                            </p>
                        </li>

                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Perfil</a>
                            </div>
                            <div class="pull-right">
                                <a href="<?php echo $URL;?>/login/controller_cerrar_sesion.php" class="btn btn-default btn-flat">Cerrar Secion</a>
                            </div>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>

    </nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php  echo $URL;?>/usuarios/update_usuarios/<?php echo $foto_perfil_sesion;?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $nombres_sesion;?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header" style="color: #f0f0f0">MENU DE NAVEGACION -<?php echo $cargo_sesion;?></li>
            <?php
                    if($cargo_sesion == "Administrador" )
                    {?>

                                    <li class="active treeview">
                                        <a href="#">
                                            <i class="fa fa-users"></i> <span>Usuarios</span>
                                            <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li><a href="<?php echo $URL?>/usuarios/"><i class="fa fa-users"></i> Lista de usuarios</a></li>
                                            <li class="active"><a href="<?php echo $URL?>/usuarios/create.php""><i class="fa fa-user"></i>Creacion de usuario</a></li>
                                        </ul>
                                    </li>

                        <li class="active treeview">
                            <a href="#">
                                <i class="fa fa-users"></i> <span>Clientes</span>
                                <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo $URL?>/clientes/index.php"><i class="fa fa-users"></i> Lista de Clientes</a></li>
                                <li class="active"><a href="<?php echo $URL?>/clientes/create_cliente.php"><i class="fa fa-user"></i>Creacion de cliente</a></li>
                            </ul>
                        </li>


                        <li class="active treeview">
                            <a href="#">
                                <i class="glyphicon glyphicon-shopping-cart"></i> <span>Ventas</span>
                                <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo $URL?>/ventas/"><i class="glyphicon glyphicon-usd"> Registrar Venta</i> </a></li>
                                <li class="active"><a href="<?php echo $URL?>/ventas/""><i class="glyphicon glyphicon-list-alt"> Lista de Ventas</i></a></li>
                            </ul>
                        </li>

                        <li class="active treeview">
                        <a href="#">
                            <i class="glyphicon glyphicon-tasks"></i> <span>Almacen</span>
                            <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo $URL?>/almacen/"><i class="glyphicon glyphicon-folder-open"> Ver Inventario</i> </a></li>
                            <li class="active"><a href="<?php echo $URL?>/almacen/registro_medicamento.php""><i class="glyphicon glyphicon-list-alt"></i>Registro de Medicamentos</a></li>
                        </ul>
                        </li>



                                    </li>
                                    <li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
                                    <li class="header">REPORTES</li>
                          <?php
                             }

                    if ($cargo_sesion == "Empleado")
                        {?>

                            <li class="active treeview">
                                <a href="#">
                                    <i class="glyphicon glyphicon-shopping-cart"></i> <span>Ventas</span>
                                    <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="<?php echo $URL?>/ventas/"><i class="glyphicon glyphicon-usd"> Registrar Venta</i> </a></li>
                                    <li class="active"><a href="<?php echo $URL?>/ventas/""><i class="glyphicon glyphicon-list-alt"> Lista de Ventas</i></a></li>
                                </ul>
                            </li>
                        <?php
                        }
                          ?>


            ?>



        </ul>
    </section>

    <!-- /.sidebar -->

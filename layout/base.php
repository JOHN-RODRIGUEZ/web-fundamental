<?php
include ("../app/config/config.php");

?>
<!DOCTYPE html>
<html>

<head>

    <?php include ("../layout/head.php");?>
    <title>Sistema-Farmacia-nombre de la vista</title>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

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
                            <img src="<?php  echo $URL;?>/app/templeites/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                            <span class="hidden-xs"><?php echo $nombres_sesion;?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="<?php  echo $URL;?>/app/templeites/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                <p>
                                    NOMBRE DE USUARIO - CARGO
                                    <small>Email</small>
                                </p>
                            </li>

                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Perfil</a>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn btn-default btn-flat">Cerrar Secion</a>
                                </div>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>

        </nav>
    </header>
    <!--menu derecha -->
    <?php include ("../layout/menu.php");?>

    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                SISTEMA DE FARMACIA -

            </h1>

        </section>

        <!-- PRINCIPAL -->
        <section class="content">
            el codigo empieza aki


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


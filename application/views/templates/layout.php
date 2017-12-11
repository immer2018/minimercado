<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>{page_title}</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="shortcut icon" href="<?php echo base_url() ?>public/IconoImmer.ico">

        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="<?= base_url() ?>public/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?= base_url() ?>public/bower_components/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="<?= base_url() ?>public/bower_components/Ionicons/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?= base_url() ?>public/dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?= base_url() ?>public/dist/css/skins/_all-skins.min.css">
        <!-- Morris chart -->
        <link rel="stylesheet" href="<?= base_url() ?>public/bower_components/morris.js/morris.css">
        <!-- jvectormap -->
        <link rel="stylesheet" href="<?= base_url() ?>public/bower_components/jvectormap/jquery-jvectormap.css">
        <!-- Date Picker -->
        <link rel="stylesheet" href="<?= base_url() ?>public/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="<?= base_url() ?>public/bower_components/bootstrap-daterangepicker/daterangepicker.css">
        <!-- bootstrap wysihtml5 - text editor -->
        <link rel="stylesheet" href="<?= base_url() ?>public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
        <style>
            .resaltar{
                color: rgb(255,255,250);  
            }

            #tsm{height: 1px;
                 width: 2px;      }
            #categoria1:active{
                color: rgb(0,153,51);

            }
            .categoria1:hover{
                background-color:rgb(220,102,51);
                color: rgb(255,251,255);

            }
        </style>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>

    <body class="hold-transition  sidebar-mini">
        <div class="wrapper">

            <header class="main-header">
                <!-- Logo -->
                <a href="<?= base_url() ?>Welcome" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini">M</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><img src="<?= base_url() ?>public/img/logoimmerv2.png" alt="logoImmer"></span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="<?= base_url() ?>welcome" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Messages: style can be found in dropdown.less-->

                            <!-- Notifications: style can be found in dropdown.less -->
                            <li class="dropdown notifications-menu">
                                <a href="<?= base_url() ?>#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bell-o"></i>
                                    <span class="label label-warning">{totalNotificaciones}</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">Usted tiene {totalNotificaciones} notificaciones</li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li>
                                                <a href="<?= base_url() ?>#">
                                                    <i class="fa fa- fa-calendar-times-o text-gray"></i> <span class="label label-default">{vencidos}</span> productos vencidos
                                                </a>
                                            </li>

                                            <li>
                                                <a href="<?= base_url() ?>#">
                                                    <i class="fa fa-calendar-minus-o text-info"></i> <span class="label label-info">{porVencerse}</span> productos por vencerse
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?= base_url() ?>#">
                                                    <i class="fa fa-battery-empty text-red"></i> <span class="label label-danger">{agotados}</span> productos agotados
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?= base_url() ?>#">
                                                    <i class="fa fa-battery-1 text-orange"></i><span class="label label-warning">{porAgotarse}</span> productos  por agotarse
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="<?= base_url() ?>#"></a></li>
                                </ul>
                            </li>

                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="<?= base_url() ?>#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?= base_url() ?>public/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                    <span class="hidden-xs">{perfil}</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="<?= base_url() ?>public/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                        <p>
                                            {perfil} - ROL
                                            <small></small>
                                        </p>
                                    </li>
                                    <!-- Menu Body -->
                                    <li class="user-body">
                                        <div class="row">
                                            <div class="col-xs-4 text-center">
                                                <a href="<?= site_url('habilita') ?>">Habilitar Colaborador</a>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <a href="#"></a>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <a href="<?= site_url('registro') ?>">Registrar Colaborador</a>
                                            </div>
                                        </div>
                                        <!-- /.row -->
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="<?= site_url('perfiladmin') ?>" class="btn btn-default btn-flat">Perfil</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="<?= site_url('salir') ?>" class="btn btn-default btn-flat">Cerrar sesiòn</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- Control Sidebar Toggle Button -->
                            <li>
                                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
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
                            <img src="<?= base_url() ?>public/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p>{perfil}</p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">

                            <span class="input-group-btn">

                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu" data-widget="tree">

                        <li class="treeview">
                            <a href="<?= base_url() ?>#">
                                <i class="fa fa-briefcase text-orange"></i> <span>Categoría</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu skin-green">
                                <li class="active" id="categoria1" ><a data-toggle="modal" data-target="#basicExample" href="#"><i class="fa fa-plus text-orange"></i> Nueva</a></li>
                                <li><a href="<?php echo site_url('categoria'); ?>"><i class="fa fa-search text-orange"></i> Listar</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-files-o text-orange"></i>
                                <span>Producto</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo site_url('nuevoProducto'); ?>"><i class="fa fa-plus text-orange"></i> Nuevo</a></li>
                                <li><a href="<?php echo site_url('producto'); ?>"><i class="fa fa-search text-orange"></i> Consultar</a></li>

                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-pie-chart text-orange"></i>
                                <span>Proveedor</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo site_url('proveedor/NuevoProveedor'); ?>"><i class="fa fa-plus text-orange"></i> Crear</a></li>
                                <li><a href="<?php echo site_url('proveedor'); ?>"><i class="fa fa-search text-orange"></i> Consultar</a></li>

                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="<?= base_url() ?>#">
                                <i class="fa fa-folder text-orange"></i>
                                <span>Inventario</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left  pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="treeview">
                                    <a href=""><i class="fa fa-circle-o text-orange"></i> Orden Entrada
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="<?php echo site_url('Entrada'); ?>"><i class="fa fa-plus text-orange"></i> Registrar</a></li>
                                        <li class="treeview">
                                            <a href="<?php echo site_url('Consultar'); ?>"><i class="fa fa-search text-orange"></i> Consultar

                                            </a>

                                        </li>
                                    </ul>
                                </li>
                                <li class="treeview">
                                    <a href=""><i class="fa fa-circle-o text-orange"></i> Orden Salida
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="<?php echo site_url('nuevaSalida'); ?>"><i class="fa fa-plus text-orange"></i> Registrar</a></li>
                                        <li class="treeview">
                                            <a href="<?php echo site_url('BuscadorController/index'); ?>"><i class="fa fa-search text-orange"></i> Consultar

                                            </a>

                                        </li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo site_url('ReporteController/mostrarreporte'); ?>"><i class="fa fa-archive text-orange"></i> Reportes</a></li>

                            </ul>

                        </li>
                        <li>
                            <a href="<?php echo site_url('recuperadato'); ?>">
                                <i class="fa fa-th text-orange"></i> <span>Restauraciòn</span>
                                <span class="pull-right-container">
                                    <small class="label pull-right bg-orange-active">Datos</small>
                                </span>
                            </a>
                        </li>

                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
            <!--modal categoria-->
            <div class="modal fade" id="basicExample" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <!--Content-->
                    <div class="modal-content">
                        <!--Header-->
                        <div class="modal-header box-header">
                            <h4 class="modal-title box-header w-100  resaltar" id="myModalLabel"><i class="fa fa-archive"></i><span> Nueva Categoria </span>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button></h4>

                        </div>
                        <!--Body-->
                        <div class="modal-body">

                            <div class="flex-center">
                                <div style="height: 5vh"></div>
                                <?php if ($this->session->flashdata('correcto')): ?>
                                    <div class="alert alert-success" role="alert" /> <?= $this->session->flashdata('correcto') ?> </div>  
                            <?php endif; ?>
                            <?php if ($this->session->flashdata('incorrecto')): ?>
                                <div class="alert alert-success" role="alert" /> <?= $this->session->flashdata('incorrecto') ?> </div>  
                        <?php endif; ?>
                    </div>
                    <?php echo form_open('CategoriaController/InCategoria'); ?>
                    <div class="flex-center">
                        <?php if (validation_errors()): ?>
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <?php echo validation_errors(); ?> 
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="row">

                        <div class="col-9 col-md-9">

                            <div class="input-group">
                                <span class="input-group-addon"> <i class="fa fa-suitcase text-gray1" aria-hidden="true" ></i></span>
                                <input type="text" id="form1" class="form-control" name="NombreCategoria" required="required" placeholder="Categoría">
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"> <i class="fa fa-pencil text-gray1 " aria-hidden="true" ></i></span>
                                <textarea id="detallecat" class="form-control" name="txtdetalle"  placeholder="Detalle de Categoría"required="required"></textarea>
                            </div>

                            <div class="box-footer">
                                <button type="submit" class="btn bg-orange" name="btnNuevaCategoria" > <i class='fa fa-save'> </i> Crear Categoria</button>
                                <button type="button" class="btn bg-gray-active" data-dismiss="modal">Cerrar</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Footer-->
            <div class="modal-footer">

                <?php echo form_close(); ?>


            </div>
        </div>
        <!--/.Content-->
    </div>
    <!--fin modal categoria-->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <h5 class="label-default text-center">{heading}</h5>
        {contenido}

    </div>
    <footer class="main-footer">
        <strong>Copyright &copy; 2017 <a href="">Immerpro</a>.</strong> Todos los derechos reservados.
    </footer>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="<?= base_url() ?>public/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?= base_url() ?>public/bower_components/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?= base_url() ?>public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="<?= base_url() ?>public/bower_components/raphael/raphael.min.js"></script>
    <script src="<?= base_url() ?>public/bower_components/morris.js/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="<?= base_url() ?>public/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="<?= base_url() ?>public/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?= base_url() ?>public/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?= base_url() ?>public/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?= base_url() ?>public/bower_components/moment/min/moment.min.js"></script>
    <script src="<?= base_url() ?>public/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="<?= base_url() ?>public/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?= base_url() ?>public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="<?= base_url() ?>public/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?= base_url() ?>public/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>public/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?= base_url() ?>public/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url() ?>public/dist/js/demo.js"></script>
</body>
</html>

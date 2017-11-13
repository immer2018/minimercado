<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="<?php echo base_url() ?>public/img/IconoImmer.ico">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>{page_title}</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="<?= base_url() ?>public/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>public/css/wizard.css">
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

        <script src="<?= base_url() ?>public/bower_components/jquery/dist/jquery.min.js"></script>


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="<?= base_url() ?>public/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="<?= base_url() ?>public/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript">
            $(document).ready(function () {
                $("#categoria").change(function () {
                    $("#categoria option:selected").each(function () {
                        categoria = $('#categoria').val();
                        $.post("<?= base_url() ?>ProductoController/asociarCategoria_a_subcategoria", {categoria: categoria}, function (data) {
                            $("#subcatego").html(data);
                        });
                    });
                })
            });
        </script>
        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body class="hold-transition  sidebar-mini">
        <div class="wrapper">

            <header class="main-header">
                <!-- Logo -->
                <a href="<?= base_url() ?>welcome" class="logo">
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
                                <a href="<?= base_url() ?>public/#" class="dropdown-toggle" data-toggle="dropdown">
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
                            <!-- Tasks: style can be found in dropdown.less -->
                       
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="<?= base_url() ?>public/#" class="dropdown-toggle" data-toggle="dropdown">
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
                 
                        <li class="treeview active">
                            <a href="<?= base_url() ?>public/#">
                                <i class="fa fa-briefcase text-orange"></i> <span class="active">Categoría</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu skin-green">
                                <li class="active"><a href="<?php echo site_url('categoria/crear'); ?>"><i class="fa fa-plus text-orange"></i> Nueva</a></li>
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
                            <a href="<?= base_url() ?>public/#">
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
                                    <small class="label pull-right bg-orange-active"></small>
                                </span>
                            </a>
                        </li>

                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Top content -->
                <div >
                    <div class="container">
                        <div style="height:40px;"></div>
                        <div class="assessment-container container">
                            <div class="row">
                                <div class="col-md-6 form-box">
                                    <form role="form" class="registration-form" action="javascript:void(0);">
                                        <fieldset>
                                            <div class="form-top">
                                                <div class="form-top-left">
                                                    <h3><span><i class="fa fa-calendar-check-o" aria-hidden="true"></i></span>Lorem ipsum dolor sit amet</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="form-bottom">
                                                <div class="row">
                                                    <div class="form-group col-md-6 col-sm-6">
                                                        <input type="text" class="form-control" placeholder="Firstname" id="fname">
                                                    </div>
                                                    <div class="form-group col-md-6 col-sm-6">
                                                        <input type="text" class="form-control" placeholder="Lastname" id="lname">
                                                    </div>
                                                </div>
                                                <div class="form-group" style="margin-bottom:3px;">
                                                    <div class="row">
                                                        <div class="form-group col-md-3 col-sm-3">
                                                            <select class="form-control">
                                                                <option>00</option>
                                                                <option>00</option>
                                                                <option>00</option>
                                                                <option>00</option>
                                                                <option>00</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-9 col-sm-9">
                                                            <input type="text" class="form-control" placeholder="Contact Number" id="contact_number">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="email" placeholder="Email" class="form-email form-control" id="email" required>
                                                </div>

                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option>Gender</option>
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                    </select>
                                                </div>

                                                <button type="button" class="btn btn-next">Next</button>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <div class="form-top">
                                                <div class="form-top-left">
                                                    <h3><span><i class="fa fa-calendar-check-o" aria-hidden="true"></i></span> Lorem ipsum dolor sit amet</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="form-bottom">
                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option>Location</option>
                                                        <option>Location</option>
                                                        <option>Location</option>
                                                        <option>Location</option>
                                                        <option>Locationa</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <input type="date" class="form-control" id="pref_date">
                                                </div>
                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option>Preffered Time</option>
                                                        <option>Location</option>
                                                        <option>Location</option>
                                                        <option>Location</option>
                                                        <option>Location</option>
                                                        <option>Locationa</option>
                                                    </select>
                                                </div>
                                                <button type="button" class="btn btn-previous">Previous</button>
                                                <button type="submit" class="btn">Submit</button>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>



                        <!--cbdshfuvdsgiudfngiufdngiufdgiufndgufjnoigufiffdsjniudgniufjhifdugjhiufdg-->
                        <div class="row">
                            <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-box">
                                <form role="form" action="" method="post" class="f1" data-parsley-validate>

                                    <h3>Nuevo Producto</h3>
                                    <p>rellene la siguientes datos </p>
                                    <div class="f1-steps">
                                        <div class="f1-progress">
                                            <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3" style="width: 16.66%;"></div>
                                        </div>
                                        <div class="f1-step active">
                                            <div class="f1-step-icon"><i class="fa fa-user"></i></div>
                                            <p>describa</p>
                                        </div>
                                        <div class="f1-step">
                                            <div class="f1-step-icon"><i class="fa fa-key"></i></div>
                                            <p>cantidades</p>
                                        </div>
                                        <div class="f1-step">
                                            <div class="f1-step-icon"><i class="fa fa-twitter"></i></div>
                                            <p>detalles</p>
                                        </div>
                                    </div>

                                    <fieldset>
                                        <h4></h4>
                                        <div class="form-group">

                                        </div>
                                        <div class="form-group">

                                        </div>
                                        <div class="form-group">

                                        </div>
                                        <div class="f1-buttons">
                                            <button type="button" class="btn btn-next">Siguiente</button>
                                        </div>
                                    </fieldset>

                                    <fieldset>
                                        <h4></h4>
                                        <div class="form-group">
                                            <label class="sr-only" for="f1-email">Maximo Stock</label>
                                            <input type="text" name="txtMaximo" placeholder="minimo..." class="f1-email form-control" id="f1-email">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="f1-password">Minimo Stock</label>
                                            <input type="text" name="txtMinimo" placeholder="maximo ..." class="f1-password form-control" id="f1-password" required data-parsley-type="number"  data-parsley-trigger="keyup" data-parsley-required-message="el campo no debe estar vacio" value="<?= set_value('txtMinimo') ?>">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="f1-repeat-password">Existencias</label>
                                            <input type="text" name="f1-repeat-password" placeholder="existencias..." 
                                                   class="f1-repeat-password form-control" id="f1-repeat-password" required data-parsley-type="number" data-parsley-trigger="keyup" data-parsley-required-message="el campo no debe estar vacio" data-parsley-integer-message="debe ingresar numeros" value="<?= set_value('txtExits') ?>">
                                        </div>
                                        <div class="f1-buttons">
                                            <button type="button" class="btn btn-previous">Anterior</button>
                                            <button type="button" class="btn btn-next">Siguiente</button>
                                        </div>
                                    </fieldset>

                                    <fieldset>
                                        <h4></h4>
                                        <div class="form-group">
                                            <label class="sr-only" for="f1-facebook">Lote</label>
                                            <input type="text" name="txtLote" class="form-control " data-parsley-required="true" data-parsley-trigger="keyup" data-parsley-required-message="el campo no debe estar vacio" value="<?= set_value('txtLote') ?>" placeholder="lote"/>
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="fvencimiento">Fecha de vencimiento</label>
                                            <input type="text" id="date-picker-example" name="fvencimiento" class="form-control datepicker" data-parsley-required="true" data-parsley-trigger="keyup" data-parsley-required-message="el campo no debe estar vacio" value="<?= set_value('fvencimiento') ?>" placeholder="fecha vencimiento"/><br /> 

                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="f1-twitter">Categoria</label>
                                            <select name="categoria" class="form-control md-form"  id="categoria" required data-parsley-trigger="keyup">
                                                <option value="">seleccione una categorìa</option>
                                                <?php foreach ($categorias_select as $itemCategoria): ?>
                                                    <option value="<?= $itemCategoria['codCategoria'] ?>"><?= $itemCategoria['categoria'] ?></option>
                                                <?php endforeach; ?>    
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="f1-google-plus">Subcategoria</label>
                                            <select name="subcategoria" id="subcatego" class="form-control" required data-parsley-trigger="keyup"  >

                                                <option value="">selecciona la subcategoria</option>

                                            </select> 
                                        </div>
                                        <div class="f1-buttons">
                                            <button type="button" class="btn btn-previous">Anterior</button>
                                            <button type="submit" class="btn btn-submit">Crear Producto</button>
                                        </div>
                                    </fieldset>

                                </form>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <?php if (validation_errors()): ?>
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <?php echo validation_errors(); ?> 

                            </div>
                        <?php endif; ?>
                        <?php if ($this->session->flashdata('correcto')): ?>
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <?php echo $this->session->flashdata('correcto'); ?> 
                            </div>
                        <?php endif; ?>

                        <?php if ($this->session->flashdata('incorrecto')): ?>
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <?php echo $this->session->flashdata('incorrecto'); ?> 
                            </div>

                        <?php endif; ?>


                    </div>


                </div>

            </div>
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 1.0
                </div>
                <strong>Copyright &copy; 2017 <a href="">Immerpro</a>.</strong> All rights
                reserved.
            </footer>
            <!-- ./wrapper -->

            <!-- jQuery 3 -->
            <!-- jQuery UI 1.11.4 -->
            <script src="<?= base_url() ?>public/bower_components/jquery-ui/jquery-ui.min.js"></script>
            <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
            <script>
            $(document).ready(function () {
                $('.registration-form fieldset:first-child').fadeIn('slow');

                $('.registration-form input[type="text"]').on('focus', function () {
                    $(this).removeClass('input-error');
                });

                // next step
                $('.registration-form .btn-next').on('click', function () {
                    var parent_fieldset = $(this).parents('fieldset');
                    var next_step = true;

                    parent_fieldset.find('input[type="text"],input[type="email"]').each(function () {
                        if ($(this).val() == "") {
                            $(this).addClass('input-error');
                            next_step = false;
                        } else {
                            $(this).removeClass('input-error');
                        }
                    });

                    if (next_step) {
                        parent_fieldset.fadeOut(400, function () {
                            $(this).next().fadeIn();
                        });
                    }

                });

                // previous step
                $('.registration-form .btn-previous').on('click', function () {
                    $(this).parents('fieldset').fadeOut(400, function () {
                        $(this).prev().fadeIn();
                    });
                });

                // submit
                $('.registration-form').on('submit', function (e) {

                    $(this).find('input[type="text"],input[type="email"]').each(function () {
                        if ($(this).val() == "") {
                            e.preventDefault();
                            $(this).addClass('input-error');
                        } else {
                            $(this).removeClass('input-error');
                        }
                    });

                });


            }); 
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

            <script src="<?= base_url() ?>public/assets/js/jquery.backstretch.min.js"></script>
            <script src="<?= base_url() ?>public/assets/js/retina-1.1.0.min.js"></script>
            <script src="<?= base_url() ?>public/assets/js/scripts.js"></script>
    </body>
</html>




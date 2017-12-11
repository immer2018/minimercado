<style>
    .resaltar{color: rgb(255,255,250);}
    #tsm{height: 1px;width: 2px;}
    #categoria1:active{color: rgb(0,153,51); }
    .categoria1:hover{background-color:rgb(255,102,51);color: rgb(255,251,255);}
    .text-gray1{color: #cccccc;}
</style>
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
                <a href="<?= base_url() ?>public/#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">

                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="<?= base_url() ?>#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell-o"></i>
                                <span class="label label-warning"><?= $totalNotificaciones ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">Usted tiene <?= $totalNotificaciones ?> notificaciones</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="">
                                                <i class="fa fa- fa-calendar-times-o text-gray"></i> <span class="label label-default"><?= $vencidos ?></span> productos vencidos
                                            </a>
                                        </li>

                                        <li>
                                            <a href="">
                                                <i class="fa fa-calendar-minus-o text-info"></i> <span class="label label-info"><?= $porVencerse ?></span> productos por vencerse
                                            </a>
                                        </li>
                                        <li>
                                            <a href=">
                                               <i class="fa fa-battery-empty text-red"></i> <span class="label label-danger"><?= $agotados ?></span> productos agotados
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <i class="fa fa-battery-1 text-orange"></i><span class="label label-warning"><?= $porAgotarse ?></span> productos  por agotarse
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href=""></a></li>
                            </ul>
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->

                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?= base_url() ?>public/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                <span class="hidden-xs"><?php echo $perfil->NombreUsuario; ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="<?= base_url() ?>public/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                    <p>
                                        <?php echo $perfil->NombreUsuario; ?> - ROL
                                        <small></small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="row">
                                        <?php if ($this->session->userdata('rol') == 1): ?>
                                            <div class="col-xs-4 text-center">
                                                <a href="<?= site_url('habilita') ?>">Habilitar Colaborador</a>
                                            </div>
                                        <?php endif; ?>
                                        <div class="col-xs-4 text-center">
                                            <a href="#"></a>
                                        </div>
                                        <?php if ($this->session->userdata('rol') == 1): ?>
                                            <div class="col-xs-4 text-center">

                                                <a href="<?= site_url('registro') ?>">Registrar Colaborador</a>

                                            </div>
                                        <?php endif; ?>
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
                        <p><?php echo $perfil->NombreUsuario; ?></p>
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
                        <?php if ($this->session->userdata('rol') == 1): ?>
                            <a href="">
                                <i class="fa fa-briefcase text-orange text-gray"></i> <span>Categoría</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu skin-green" >

                                <li class="active" id="categoria1" ><a data-toggle="modal" data-target="#basicExample" href="#"><i class="fa fa-plus text-orange"></i> Nueva</a></li>
                                <li><a href="<?php echo site_url('categoria'); ?>"><i class="fa fa-search text-orange"></i> Listar</a></li>

                            </ul>
                        <?php endif; ?>
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
                        <?php if ($this->session->userdata('rol') == 1): ?>
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
                        <?php endif; ?>
                    </li>

                    <li class="treeview">
                        <a href="">
                            <i class="fa fa-folder text-orange"></i>
                            <span>Inventario</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left  pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <?php if ($this->session->userdata('rol') == 1): ?>
                                <li class="treeview">
                                    <a href=""><i class="fa fa-circle-o text-orange"></i> Orden Entrada
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="<?php echo site_url('Entrada'); ?>"><i class="fa fa-plus text-orange"></i> Registrar</a></li>
                                        <li><a href="<?php echo site_url('Consultar'); ?>"><i class="fa fa-search text-orange"></i> Consultar</a></li>
                                    </ul>
                                </li>
                            <?php endif; ?>
                            <li class="treeview">
                                <a href=""><i class="fa fa-circle-o text-orange"></i> Orden Salida
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="<?php echo site_url('nuevaSalida'); ?>"><i class="fa fa-plus text-orange"></i> Registrar</a></li>
                                    <li><a href="<?php echo site_url('BuscadorController/index'); ?>"><i class="fa fa-search text-orange"></i> Consultar</a></li>
                                </ul>
                            </li>
                            <?php if ($this->session->userdata('rol') == 1): ?>
                                <li><a href="<?php echo site_url('ReporteController/mostrarreporte'); ?>"><i class="fa fa-archive text-orange"></i> Reportes</a></li>
                            <?php endif; ?>
                        </ul>

                    </li>
                    <li>
                        <?php if ($this->session->userdata('rol') == 1): ?>
                            <a href="<?php echo site_url('recuperadato'); ?>">
                                <i class="fa fa-th text-orange"></i> <span>Restauraciòn</span>
                                <span class="pull-right-container">
                                    <small class="label pull-right bg-orange-active">Datos</small>
                                </span>
                            </a>
                        <?php endif; ?>
                    </li>

                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!--MODAL INGRESO CATEGORIA-->
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

    <!--FIN MODAL INGRESO CATEGORIA-->
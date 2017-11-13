<div style="height: 5vh"></div>
<div class="container" >
    <section class="content">
        <p class="h2 text-orange text-center">Restauraciòn Informaciòn</p>
        <div style="height: 4vh"></div>
        <div class="row">
            <div class="col-md-8">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Informaciòn del mòdulo </h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                            </button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <p class="h4">
                            en esta seccion podra ver la informacion que esta inactiva y tendra la opcion 
                            de activarla nuevamente por favor dar click sobre los modulos que desee ver
                            por ejemplo si quiero ver las categorias eliminadas dar click sobre 
                            categorìa y se desplegara la informaciòn solicitada
                        </p> 
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div> 
        </div>
        <div class="col-md-8">
            <!-- Custom Tabs (Pulled to the right) -->
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs pull-right">
                    <li class="active"><a href="#tab_1-1" data-toggle="tab">Categorias</a></li>
                    <li><a href="#tab_2-2" data-toggle="tab">Subcategorias</a></li>
                    <li><a href="#tab_3-2" data-toggle="tab">Productos</a></li>
                    <li><a href="#tab_4-2" data-toggle="tab">Proveedores</a></li>
                    <li><a href="#tab_5-2" data-toggle="tab">Registrados</a></li>
                    <li><a href="#tab_6-2" data-toggle="tab">Activos</a></li>

                    <li class="pull-left header"><i class="fa fa-th"></i> </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane" id="tab_1-1">
                        <div class="card-body">
                            <?php if ($listadoCategoriaDel): ?>
                            <table class="table table-bordered table-hover table-info">
                                <thead class="table-inverse">
                                    <tr>
                                        <th>Categorìa</th>
                                        <th>Detalle</th>
                                        <th>Activar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php foreach ($listadoCategoriaDel as $listadoCat): ?>
                                        <td><?= $listadoCat['NombreCategoria'] ?></td>
                                        <td><?= $listadoCat['detalles'] ?></td>
                                        <td>
                                            <a class="grey-text"  title="activar" href=" <?php echo base_url() . 'reestablecer/activoCategoria/' . $listadoCat['idCategoria'] ?>" ><i class="fa fa-check-circle-o fa-3x" ></i></a>

                                        </td>
                                    </tr>
                                    <?php endforeach; ?>

                                </tbody>

                            </table>
                            <?php else: ?>
                            <p class="lead">
                                no hay categorias eliminadas
                            </p>   
                            <?php endif; ?>
                        </div>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_2-2">
                        <div class="card-body">
                            <?php if ($listadosubcategoria): ?>
                            <table class="table table-bordered table-hover ">
                                <thead class="table-inverse">
                                    <tr>
                                        <th>SubCategorìa</th>
                                        <th>Detalle</th>
                                        <th>Activar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php foreach ($listadosubcategoria as $listadosubcat): ?>
                                        <td><?= $listadosubcat['NombreSubcategoria'] ?></td>
                                        <td><?= $listadosubcat['detallesSub'] ?></td>
                                        <td>
                                            <a class="grey-text"  title="activar" href=" <?php echo base_url() . 'reestablecer/activarsubcategoria/' . $listadosubcat['idSubcategoria'] ?>" ><i class="fa fa-check-circle-o fa-3x" ></i></a>

                                        </td>
                                    </tr>
                                    <?php endforeach; ?>

                                </tbody>

                            </table>
                            <?php else: ?>
                            <p class="lead">
                                no hay subcategorias inactivas 
                            </p>   
                            <?php endif; ?>
                        </div> 
                    </div>

                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_3-2">
                        <div class="card-body">
                            <?php if ($listadoproducto): ?>
                            <table class="table table-bordered table-hover ">
                                <thead class="table-inverse">
                                    <tr>
                                        <th>Producto</th>
                                        <th>Detalle</th>
                                        <th>Activar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php foreach ($listadoproducto as $listapro): ?>
                                        <td><?= $listapro['NombreProducto'] ?></td>
                                        <td><?= $listapro['DescripcionProducto'] ?></td>
                                        <td>
                                            <a class="grey-text"  title="activar" href=" <?php echo base_url() . 'reestablecer/activarproducto/' . $listapro['idProducto'] ?>" ><i class="fa fa-check-circle-o fa-3x" ></i></a>

                                        </td>
                                    </tr>
                                    <?php endforeach; ?>

                                </tbody>

                            </table>
                            <?php else: ?>
                            <p class="lead">
                                no hay productos inactivos 
                            </p>   
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab_4-2">
                        <div class="card-body">
                            <?php if ($listadoproveedores): ?>
                            <table class="table table-bordered table-hover ">
                                <thead class="table-inverse">
                                    <tr>
                                        <th>Telefono</th>
                                        <th>Nombre Proveedor</th>
                                        <th>Contacto</th>
                                        <th>Direccion</th>
                                        <th>Correo</th>
                                        <th>Activar</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php foreach ($listadoproveedores as $listadoProvee): ?>
                                        <td><?= $listadoProvee['TelefonoProveedor'] ?></td>
                                        <td><?= $listadoProvee['NombreProveedor'] ?></td>
                                        <td><?= $listadoProvee['NombreContacto'] ?></td>
                                          <a class="grey-text"  title="activar" href=" <?php echo base_url() . 'reestablecer/activoProveedor/' . $listadoProvee['idProveedor'] ?>" ><i class="fa fa-check-circle-o fa-3x" ></i></a>

                                   <td><?= $listadoProvee['DireccionProveedor'] ?></td>
                                        <td><?= $listadoProvee['CorreoElectronicoProveedor'] ?></td>
                                        <td>
                                            <a class="grey-text"  title="activar" href=" <?php echo base_url() . 'reestablecer/activoProveedor/' . $listadoProvee['idProveedor'] ?>" ><i class="fa fa-check-circle-o fa-3x" ></i></a>

                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                    <?php else: ?>
                            <p class="lead">
                                no hay proveedores  inactivos 
                            </p>  
                                    <?php endif;?>
                                    </div> 
                                    </div>
                                <div class="tab-pane" id="tab_5-2">
                                    <div class="card-body">
                                       <!--listadoproveedores-->
                                    <?php if ($listadocolaborador): ?>
                                    <table class="table table-bordered table-hover ">
                                        <thead class="table-inverse">
                                            <tr>
                                                <th>Usuario</th>
                                                <th>Nombre del Colaborador</th>
                                                <th>email</th>
                                                <th>Activar</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <?php foreach ($listadocolaborador as $listacolabora): ?>
                                                <td><?= $listacolabora['NombreUsuario'] ?></td>
                                                <td><?= $listacolabora['nombreCompleto'] ?></td>
                                                <td><?= $listacolabora['email'] ?></td>

                                                <td>
                                                    <a class="grey-text"  title="activar" href=" <?php echo base_url() . 'reestablecer/activoColaborador/' . $listacolabora['idUsuario'] ?>" ><i class="fa fa-check-circle-o fa-3x" ></i></a>

                                                </td>
                                            </tr>
                                            <?php endforeach; ?>


                                        </tbody>

                                    </table>
                                    <?php else: ?>
                                    <p class="lead">
                                        no hay nuevos colaboradores registrados
                                    </p>   
                                    <?php endif; ?>
                               
                                    </div>
                                </div>
                                    
                                     <!-- ACTIVOS :) -->
                                    
                                     
                                <div class="tab-pane" id="tab_6-2">
                                              <div class="card-body">  <!--listadoproveedores-->
                                    <?php if ($listadoactivos): ?>
                                    <table class="table table-bordered table-hover ">
                                        <thead class="table-inverse">
                                            <tr>
                                                <th>Usuario</th>
                                                <th>Nombre del Colaborador</th>
                                                <th>email</th>
                                                <th>Inactivar</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <?php foreach ($listadoactivos as $activo): ?>
                                                <td><?= $activo['NombreUsuario'] ?></td>
                                                <td><?= $activo['nombreCompleto'] ?></td>
                                                <td><?= $activo['email'] ?></td>

                                                <td>
                                                    <a   title="inactivar" href=" <?php echo base_url() . 'reestablecer/inactivoColaborador/' . $activo['idUsuario'] ?>" ><i class="fa fa-ban fa-1x text-danger fa-2x" ></i></a>

                                                </td>
                                            </tr>
                                            <?php endforeach; ?>


                                        </tbody>

                                    </table>
                                    <?php else: ?>
                                    <p class="lead">
                                        no hay colaboradores activos 
                                    </p>   
                                    <?php endif; ?>
                                </div>
                                     </div>
                                     
                                </div>

                               
                                
                        </div>
                        <!-- /.tab-content -->
                    </div>
                    <!-- nav-tabs-custom -->
                </div>
                <!-- /.col -->
          
    </section>
</div>



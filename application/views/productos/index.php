<section class="content">
    <h4 class="label-primary center-block">Indicadores de inventario</h4>

    <div style="height: 4vh"></div>
    <div class="row"><div class="col col-lg-4">
            <?php if ($this->session->flashdata('sinInactivar')): ?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <?php echo $this->session->flashdata('sinInactivar'); ?> 
                </div>

            <?php endif; ?>
            <?php if ($this->session->flashdata('Inactivar')): ?>
                <div class="alert alert-info alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <?php echo $this->session->flashdata('Inactivar'); ?> 
                </div>

            <?php endif; ?>
            <?php echo form_open('producto'); ?>
            <span ><?php echo validation_errors(); ?></span>
        </div></div>
    <div class="row">
        <div class="col-md-3">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">inventario por agotarse</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                        </button>
                    </div>
                    <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <i class="fa fa-info-circle fa-2x text-red"></i> las existencias son menores que el minimo stock
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div> 
        <div class="col-md-3">
            <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">exceso de inventario</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                    <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <i class="fa fa-info-circle fa-2x text-orange"></i> las existencias son mayores que el maximo stock
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <div class="col-md-3">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">inventario estable</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                    <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <i class="fa fa-info-circle fa-2x text-blue"></i> las existencias son iguales que el maximo stock
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 " style="margin-left: 240px;">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title text-center">Productos</h3>
                </div>
                <!-- /.box-header -->
                <div style="height: 2vh;"></div>
              
                    <div class="row">
                        <div class="col-md-2">
                            busqueda
                        </div> 
                        <div class="col-md-4"> 
                            <input type="text" name="txtbuscar" id="buscar" required="required" class="form-control" data-parsley-required="true">

                        </div>
                        <div class="col-md-4">
                            <select   name="ddlfiltro"  data-parsley-required="true" class="form-control">
                                <option value="NombreProducto">Producto</option>   
                                <option value="NombreSubCategoria">Subcategoria</option>   
                            </select>
                        </div>
                        <div class="col-md-2">
                            <span class="input-group-btn">
                                <button type="submit" class="btn bg-orange" title="Buscar"> <i class="fa fa-search"></i> </button>
                            </span> 

                        </div>
                    </div>
             
                <div style="height: 2vh;"></div>
            </div>
        </div>
        <div style="height: 2vh"></div>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title box-warning">Listado de Productos</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <?php echo $div1 . $table; ?>


                    </div>
                </div>


                <?php echo form_close(); ?>
            </div>
            <!-- /.box-body -->
        </div>

</section>


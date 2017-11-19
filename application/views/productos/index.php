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
    <div class="row" style="margin-left: 15px;">
            <div class="col-md-4">
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title resaltar"> <i class="fa fa-battery-quarter"></i> inventario por agotarse</h3>

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
            <div class="col-md-4">
                <div class="box box-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title resaltar"><i class="fa fa-battery-full"></i> exceso de inventario</h3>

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
            <div class="col-md-4">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title resaltar"><i class="fa fa-balance-scale"></i> inventario estable</h3>

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
            <div class="col-xs-5" style="margin-left: 340px;">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title text-center resaltar"><i class="fa fa-shopping-cart"></i> Productos</h3>
                    </div>
                    <!-- /.box-header -->
                    <div style="height: 4vh"></div>
                    <div class=" form-group" style="margin-left: 50px;">
                        <label for="buscar" class="badge badge-warning"> <i class="fa fa-search"></i> busqueda</label>
                        <br>
                        <input style="width: 350px;" type="search" name="txtbuscar" id="buscar" required="required" class="form-control" data-parsley-required="true">
                    </div>  
                    <br>
                    <div class="form-group" style="margin-left: 50px;">
                        <select style="width: 350px;"  name="ddlfiltro" class="form-control" data-parsley-required="true">
                            <option value="NombreProducto">Producto</option>   
                            <option value="NombreSubCategoria">Subcategoria</option>   
                        </select> <br>
                        <button style="margin-left: 130px;" class="btn bg-orange" type="submit"> <i class="fa fa-search"></i>  Buscar</button>
                    </div>
                    <div style="height: 1vh"></div>
                </div>
            </div>
        </div>
        <div style="height: 2vh"></div>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title box-warning resaltar"><i class="fa fa-table"></i> Listado de Productos</h3>
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


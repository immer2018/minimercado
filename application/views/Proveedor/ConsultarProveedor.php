<div class="container" >

    <section class="section">
        <p class=" orange-text flex-center h1-responsive"></p>


        <div class="row" style="margin-top: 15px; margin-left: -26px;">
            <div class="col-lg-3"></div>
            <div class="col-md-7">
                <div class="box box-solid">

                    <!-- /.box-header -->
                    <div class="box-body">
                        <?php echo form_open('proveedor'); ?>
                        <div class="md-form form-group">
                            <label for="buscar" class="badge badge-warning"> busqueda</label>

                            <input type="search" name="txtbuscar" id="buscar" required="required" class="form-control" data-parsley-required="true">
                        </div>  
                        <div class="formg-group">
                            <select name="ddlfiltro" class="form-control" data-parsley-required="true" >
                                <option value="NombreProveedor">Nombre proveedor</option>
                                <option value="nit">NIT proveedor</option>
                            </select>
                            <br>
                            <button class="btn bg-orange " type="submit"> <i class="fa fa-search"></i>  Buscar</button>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col (left) -->

            <!-- /.col (right) -->
        </div>

        <div style="height: 2vh"></div>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title box-warning">Listado de Proveedores</h3>
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
</div>

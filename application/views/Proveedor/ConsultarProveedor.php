<div class="container" >

    <section class="section">
        <h5 class="text-orange text-center">Proveedores del minimercado</h5>


        <div class="row" style="margin-top: 15px; margin-left: -26px;">
            <div class="col-lg-3"></div>
            <div class="col-md-9">


                <div class="box box-solid">

                    <!-- /.box-header -->
                    <div class="box-body">
                        <?php echo form_open('proveedor'); ?>
                        <div class="col-md-2">
                            <label for="buscar"> consulta proveedor</label>
                        </div>
                        
                        <div class="col-md-4">
                            <input type="search" name="txtbuscar" id="buscar" required="required" class="form-control" data-parsley-required="true">
                        </div> 
                        <div class="col-md-4">
                            <select name="ddlfiltro" class="form-control inline" data-parsley-required="true" >
                                <option value="NombreProveedor">Nombre proveedor</option>
                                <option value="nit">NIT proveedor</option>
                            </select>
                            <br>
                            
                        </div>
                        <div class="col-md-2">
                            
                            <button class="btn bg-orange" type="submit" title="buscar"> <i class="fa fa-search"></i></button>
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
            <div class="col-xs-11">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title box-success resaltar"> <i class="fa fa-table"></i> Listado de Proveedores</h3>
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

<section class="content">

    <div class="row">
        <div class="col-lg-5"></div>
        <div class="col-md-6">
            <div class="box box-solid">

                <!-- /.box-header -->
                <div class="box-body">
                    <?php echo form_open('CategoriaController'); ?>
                  
                    <div class="input-group">
                        <div class="input-group-addon">
                           categoria a buscar 
                        </div>
                        <div class="input-group input-group-sm">

                            <input type="text" class="form-control" name="txtbuscar" id="buscar" required="required">
                            <span class="input-group-btn">
                                <button type="submit" class="btn bg-orange btn-flat"> <i class="fa fa-search"></i></button>
                            </span>
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
                        <h3 class="box-title box-warning resaltar"> <i class="fa fa-list"></i> Listado de Categorias</h3>
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


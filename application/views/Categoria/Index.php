<section class="content">

    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-md-7">
            <div class="box box-solid">
                
                <!-- /.box-header -->
                <div class="box-body">
                    <?php echo form_open('CategoriaController'); ?>
                    <div class="md-form form-group">
                        <label for="buscar" class="h4 badge-warning">categoria a buscar </label>

                        <input type="search" name="txtbuscar" id="buscar" required="required" class="form-control" data-parsley-required="true">
                    </div>  

                    <div class="form-group"><center>
                        <button class="btn bg-orange " type="submit"> <i class="fa fa-search"></i> realizar busqueda</button>
                   </center> </div>
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


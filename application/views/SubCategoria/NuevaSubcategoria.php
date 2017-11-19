<section class="content">
    <h1 class="display-4 text-orange text-center">Nueva Subcategoría</h1>
    <div style="height: 5vh"></div>
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-xs-7">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title box-success"><span class="resaltar"><i class="fa fa-check-square"></i> subcategoría de <?= $nombrecategoria ?></span></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <?php echo form_open('Subcategoria/SubInCategoria'); ?> 
                    <input type="hidden" name="codigoCategoria" value="<?= $codcategoria ?>">


                    <div class="input-group">
                        <span class="input-group-addon"> <i class="fa fa-folder-o text-gray1"></i></span>
                        <input type="text" id="form1" class="form-control" name="NombreSubcategoría" placeholder="Subcategoría">
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"> <i class="fa fa-pencil-square-o text-gray1"></i></span>
                        <textarea class="form-control" placeholder="Detalle Subcategoría" name="detalSubCategoria"></textarea> 

                    </div>
                    <br>
                    <div class="form-group">
                        <button type="submit" class="btn bg-orange" style="margin-left: 35%;"><i class='fa fa-save'> Crear SubCategoría</i></button>

                    </div>

                    <?php echo form_close(); ?>
                </div>
            </div>



        </div>
        <!-- /.box-body -->
    </div>

</section>
<div class="col-9 ">
    <span class="alert-danger close"><?php echo validation_errors(); ?></span> 
</div>

<div class="container">
    <section class="content">
        <div style="height: 5vh"></div>
        <h1 class="display-4 orange-text text-center"></h1>
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
    <div class="col-lg-3"></div>
    <div class="col-6 col-md-6">
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title"> <i class="fa fa-archive text-green"></i><span class="resaltar"> Categorìa </span></h3>
            </div>
            <br>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
                <div class="box-body">
                    <div class="input-group">
                        <span class="input-group-addon"> <i class="fa fa-suitcase text-gray" aria-hidden="true" ></i></span>
                                         <input type="text" id="form1" class="form-control" name="NombreCategoria" required="required" placeholder="Categoría">
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"> <i class="fa fa-pencil text-gray " aria-hidden="true" ></i></span>
                        <textarea id="detallecat" class="form-control" name="txtdetalle"  placeholder="Detalle de Categoría"required="required"></textarea>
                    </div>


                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn bg-orange" name="btnNuevaCategoria" > <i class='fa fa-save'> </i> Crear Categoria</button>

                </div>
                <?php echo form_close(); ?>
            </form>
        </div>

    </div>
</div>
</section>
</div>
<div style="height: 5vh"></div>





<div class="container">
    <section class="section" data-parsley-validate>
        <h1  class="h1-responsive text-orange text-center">Orden de Entrada</h1>
        <div style="height: 4vh"></div>
        <?php echo form_open('IngreseEntrada'); ?>
        <div class="row">
            <div class="col-8">
                <?php if (validation_errors()): ?>
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <?php echo validation_errors(); ?> 

                    </div>
                <?php endif; ?>
                <?php if ($this->session->flashdata('correcto')): ?>
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <?php echo $this->session->flashdata('correcto'); ?> 
                    </div>
                <?php endif; ?>

                <?php if ($this->session->flashdata('incorrecto')): ?>
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <?php echo $this->session->flashdata('incorrecto'); ?> 
                    </div>

                <?php endif; ?>
            </div>
        </div>
        <div class="row">
    <div class="col-md-5" style="margin-left: 350px;">
        <div class="box box-success">

            <!-- /.box-header -->
            <div class="box-body">
                <div class="input-group">
                    <label for="producto" class="input-group-addon" data-error="wrong" data-success="right"><i class="fa fa-cart-plus text-gray1"></i></label>
                    <input type="text" name="txtProducto" id="producto" class="form-control" placeholder="Nombre del producto">

                </div>
                <br>
                <script>
                    $(function () {
                        $("#producto").autocomplete({
                            source: "<?php base_url() ?>inventario/get_producto" // 
                        });
                    });
                </script>
                <div class="input-group">
                    <label for="cantentrada"  class="input-group-addon" data-error="wrong" data-success="right"><i class="fa fa-cubes text-gray1 "></i> </label>
                    <input type="text" id="cantentrada" class="form-control" name="txtCantentra" placeholder="Cantidad Entrada">
                </div>
                <br>
                <div class="input-group">
                    <label for="snombP" data-error="wrong" data-success="right" class="input-group-addon"> <i class="fa fa-money text-gray1"></i>  </label>
                    <input type="text" name="txtPreentra" id="form1" class="form-control" placeholder="Precio Entrada">
                </div>
                <br>
                <div class="input-group">
                    <label for="proveedor" data-error="wrong" data-success="right" class="input-group-addon"> <i class="fa fa-photo text-gray1"></i></label>
                    <select name="txtCodProv" class="form-control md-form"  id="txtCodProv" required data-parsley-trigger="keyup">
                        <option value="">seleccione un Proveedor</option>
                        <?php foreach ($proveedor_select as $proveedor_item): ?>
                            <option value="<?= $proveedor_item['idProveedor'] ?>"><?= $proveedor_item['NombreProveedor'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>  
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div> 


</div>
        <div class="row" style="margin-left:500px ;">
            <div class="col-11">
                <div class="flex-center">

                    <button type="submit" class="btn bg-orange "  name="btnNuevaEntrada"  ><i class='fa fa-send'> Registrar Orden Entrada</i></button>

                </div>
            </div>
        </div>

        <?php echo form_close(); ?>

    </section>

</div> 

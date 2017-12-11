<div class="container">
    <section class="content">
        <div style="height: 5vh"></div>
        <h5 class=" text-orange text-center"></h5>
        <?php if ($this->session->flashdata('correcto')): ?>
            <div class=" alert alert-success" ><?php echo $this->session->flashdata('correcto'); ?> </div> 
        <?php endif; ?>
        <?php if ($this->session->flashdata('incorrecto')): ?>
            <div class=" alert alert-danger" ><?php echo $this->session->flashdata('incorrecto'); ?> </div> 
        <?php endif; ?>
        <?php echo form_open('IngreseEntrada'); ?>
        <div class="flex-center">
            <?php if (validation_errors()): ?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <?php echo validation_errors(); ?> 
                </div>
            <?php endif; ?>
        </div>
        <div class="row">
            <div class="col-lg-11" >
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title"><span class="resaltar"> <i class="fa fa-plus-square-o"></i> Orden Entrada</span></h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                    title="Collapse">
                                <i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="col-md-6">
                            <div class="input-group">
                                <label for="producto" class="input-group-addon" data-error="wrong" data-success="right"><i class="fa fa-cart-plus text-gray"></i></label>
                                
                                <select  name="txtCodProd" class="form-control select2"  id="txtCodProd" required data-parsley-trigger="keyup">
                                    <option value="">seleccione un Producto</option>
                                    <?php foreach ($productos as $producto_item): ?>
                                        <option value="<?= $producto_item['idProducto'] ?>"><?= $producto_item['NombreProducto'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                                
                                
                            </div>
                            
                            <br>
                                
                         
                            <div class="input-group">
                                <label for="cantentrada"  class="input-group-addon" data-error="wrong" data-success="right"><i class="fa fa-cubes text-gray "></i> </label>
                                <input type="text" id="cantentrada" class="form-control" name="txtCantentra" placeholder="Cantidad Entrada">
                            </div>
                            <br>

                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <label for="snombP" data-error="wrong" data-success="right" class="input-group-addon"> <i class="fa fa-money text-gray"></i>  </label>
                                <input type="text" name="txtPreentra" id="form1" class="form-control" placeholder="Precio Entrada">
                            </div>
                            <br>
                            <div class="input-group">
                                <label for="proveedor" data-error="wrong" data-success="right" class="input-group-addon"> <i class="fa fa-photo text-gray"></i></label>
                                <select name="txtCodProv" class="form-control select2"  id="txtCodProv" required data-parsley-trigger="keyup">
                                    <option value="">seleccione un Proveedor</option>
                                    <?php foreach ($proveedor_select as $proveedor_item): ?>
                                        <option value="<?= $proveedor_item['idProveedor'] ?>"><?= $proveedor_item['NombreProveedor'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <br>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn bg-orange pull-right "  name="btnNuevaEntrada"  ><i class='fa fa-save'> Registrar Orden Entrada</i></button>
                    </div>
                    <!-- /.box-footer-->
                </div>
                <!-- /.box --> 
                <?php echo form_close(); ?>
            </div> 
        </div>
    </section>
</div>

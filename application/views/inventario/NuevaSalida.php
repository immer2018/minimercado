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
        <?php echo form_open('ingresosalida'); ?>
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
                        <h3 class="box-title"><span class="resaltar"> <i class="fa fa-plus-square-o"></i> Orden Salida</span></h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                    title="Collapse">
                                <i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="col-md-6">
                            <div class="input-group">
                                <label class="input-group-addon" for="snombP" data-error="wrong" data-success="right"><i class="fa fa-cart-plus text-gray"></i></label>
                                <input type="text" id="snombP" class="form-control validate" name="txtProducto" placeholder="Nombre del Producto">
                                <script>
                                    $(function () {
                                        $("#snombP").autocomplete({
                                            source: "<?php base_url() ?>inventario/get_producto" // path to the get_birds method
                                        });
                                    });
                                </script>
                            </div>
                            <br>
                            <div class="input-group">
                                <label  class="input-group-addon" for="cants" data-error="wrong" data-success="right"><i class="fa fa-cubes text-gray"></i></label>
                                <input type="text" id="cants" class="form-control validate" name="txtCantsalida" placeholder="Cantidad Salida">

                            </div>
                            <br>

                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <label  class="input-group-addon" for="snombP" data-error="wrong" data-success="right"> <i class="fa fa-money text-gray"></i> </label>
                                <input type="text" id="snombP" class="form-control validate" name="txtPreSalida" placeholder="Precio Salida">
                            </div>
                            <br>
                            <div class="input-group">
                                <label for="snombP" data-error="wrong" data-success="right" class="input-group-addon"> <i class="fa fa-list-alt text-gray"></i></label>
                                <select name="cboMotivo" class="form-control md-form"  id="motivos" required data-parsley-trigger="keyup">
                                    <option value="">seleccione un motivo de salida</option>
                                    <option value="merma">Merma</option>
                                    <option value="devolucion"> devolucion proveedor</option>
                                    <option value="venta">venta</option>
                                </select>
                            </div>
                            <br>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn bg-orange pull-right "  name="btnNuevaSalida"  ><i class='fa fa-save'> Registrar Salida</i></button>
                    </div>
                    <!-- /.box-footer-->
                </div>
                <!-- /.box --> 
                <?php echo form_close(); ?>
            </div> 
        </div>
    </section>
</div>

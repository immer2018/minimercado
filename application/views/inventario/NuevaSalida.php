<div class="container">
    <section class="section" data-parsley-validate>
        <h1  class="h1-responsive text-orange text-center">Orden de Salida</h1>
        <div style="height: 4vh"></div>
        <?php echo form_open('ingresosalida'); ?>
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
                            <label class="input-group-addon" for="snombP" data-error="wrong" data-success="right"><i class="fa fa-cart-plus text-gray1"></i></label>
                            <input type="text" id="snombP" class="form-control validate" name="txtProducto" placeholder="Nombre del Producto">
                        </div> 
                        <br>
                        <script>
                            $(function () {
                                $("#snombP").autocomplete({
                                    source: "<?php base_url() ?>inventario/get_producto" // path to the get_birds method
                                });
                            });
                        </script>

                        <div class="input-group">
                            <label  class="input-group-addon" for="cants" data-error="wrong" data-success="right"><i class="fa fa-cubes text-gray1"></i></label>
                            <input type="text" id="cants" class="form-control validate" name="txtCantsalida" placeholder="Cantidad Salida">

                        </div>
                        <br>

                        <div class="input-group">
                            <label  class="input-group-addon" for="snombP" data-error="wrong" data-success="right"> <i class="fa fa-money text-gray1"></i> </label>
                            <input type="text" id="snombP" class="form-control validate" name="txtPreSalida" placeholder="Precio Salida">
                        </div>  
                        <br>

                        <div class="input-group">
                            <label for="snombP" data-error="wrong" data-success="right" class="input-group-addon"> <i class="fa fa-list-alt text-gray1"></i></label>
                            <select name="cboMotivo" class="form-control md-form"  id="motivos" required data-parsley-trigger="keyup">
                                <option value="">seleccione un motivo de salida</option>
                                <option value="merma">Merma</option>
                                <option value="devolucion"> devolucion proveedor</option>
                                <option value="venta">venta</option>
                            </select>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-11">
                <div class="flex-center">

                    <button style="margin-left: 500px;" type="submit" class="btn bg-orange " name="btnNuevaSalida"  ><i class='fa fa-save'> Registrar Orden Salida</i></button>

                </div>
            </div>
        </div>

        <?php echo form_close(); ?>

    </section>

</div> 

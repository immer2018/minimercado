<div class="container">
    <section class="section" data-parsley-validate>
      <h1  class="h1-responsive orange-text text-center">Orden de Salida</h1>
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
        <div class="box box-danger">

            <!-- /.box-header -->
            <div class="box-body">
                <div class="form-group">
                    <i class="fa fa-cart-plus prefix fa-2x"></i> <label for="snombP" data-error="wrong" data-success="right"></i> Nombre del Producto: </label>
                    <input type="text" id="snombP" class="form-control validate" name="txtProducto">
                    
                    
                </div> 
            
            <script>
                $(function () {
                    $("#snombP").autocomplete({
                        source: "<?php base_url() ?>inventario/get_producto" // path to the get_birds method
                    });
                });
            </script>
            
                <div class="form-group">
                    <i class="fa fa-cubes prefix fa-2x"></i> <label for="cants" data-error="wrong" data-success="right">Cantidad Salida:</label>
                    <input type="text" id="cants" class="form-control validate" name="txtCantsalida">
                    
                </div>
            
           
                <div class="form-group">
                    <i class="fa fa-money prefix fa-2x"></i> <label for="snombP" data-error="wrong" data-success="right"> Precio Salida</label>
                    <input type="text" id="snombP" class="form-control validate" name="txtPreSalida">
                </div>  
            
            
            <div class=form-group">
                    <label for="snombP" data-error="wrong" data-success="right"> <i class="fa fa-list-alt fa-2x"></i> Motivo Salida</label>

                    <select class="form-control" name="cboMotivo">
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

                    <button style="margin-left: 500px;" type="submit" class="btn bg-orange " name="btnNuevaSalida"  ><i class='fa fa-send'> Registrar Orden Salida</i></button>

                </div>
            </div>
        </div>

        <?php echo form_close(); ?>

    </section>

</div> 

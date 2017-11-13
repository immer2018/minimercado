<div class="container">
    <section class="content">
        <div style="height: 5vh"></div>
        <h1 class="display-4 orange-text text-center"></h1>
        <div class="row">
            <div class="col-6 ">
                <span class="alert-danger close"><?php echo validation_errors(); ?></span> 
            </div>

        </div>

        <?php if ($this->session->flashdata('correcto')): ?>
            <div class=" alert alert-success" ><?php echo $this->session->flashdata('correcto'); ?> </div> 
        <?php endif; ?>
        <?php if ($this->session->flashdata('incorrecto')): ?>
            <div class=" alert alert-danger" ><?php echo $this->session->flashdata('incorrecto'); ?> </div> 
        <?php endif; ?>
        <?php echo form_open('proveedor/NuevoProveedor'); ?>
        <div class="flex-center">
            <?php if (validation_errors()): ?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <?php echo validation_errors(); ?> 
                </div>
            <?php endif; ?>
        </div>
            
        <div class="row">
            <div class="col-lg-4" style="margin-left: 200px;">
                <div class="box box-success">
                   
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="form-group">
                            <label for="tel"><i class="fa fa-user fa-2x "></i> Nombre proveedor</label>
                            <input type="text" name="txttelefono"  id="tel" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label for="dir"><i class="fa fa-archive fa-2x"></i> Dirección</label>
                            <input type="text" name="txtdireccion"  id="dir" class="form-control" required="">
                        </div>

                        <div class="form-group">
                            <label for="tel"><i class="fa fa-train fa-2x "></i> Telefono</label>
                            <input type="text" name="txttelefono"  id="tel" class="form-control" required="">
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div> 
            <div class="col-lg-4" style="margin-left: 100px;">
                <div class="box box-success">
                    
                    <!-- /.box-header -->
                    <div class="box-body">

                        <div class="form-group">
                            <label for="ctc"><i class="fa fa-comment fa-2x"></i> Contacto Proveedor</label>
                            <input type="text" name="txtcontacto"  id="ctc" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label for="tel"><i class="fa fa-certificate fa-2x "></i> NIT proveedor</label>
                            <input type="text" name="txttelefono"  id="tel" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label for="tel"><i class="fa fa-envelope fa-2x "></i> Correo electrònico</label>
                            <input type="text" name="txttelefono"  id="tel" class="form-control" required="">
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!--            <div class="col-md-5">
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">inventario estable</h3>
            
                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                     /.box-tools 
                                </div>
                                 /.box-header 
                                <div class="box-body">
                                    <i class="fa fa-info-circle fa-2x text-blue"></i> las existencias son iguales que el maximo stock
                                </div>
                                 /.box-body 
                            </div>
                             /.box 
                        </div>-->
        </div>



        <!-- /.box-header -->
        <!-- form start -->
        <form role="form">
            <div class="box-body">



                <div class="form-group">

                </div>




            </div>
            <!-- /.box-body -->


            <button type="submit" class="btn bg-orange " style="margin-left: 456px;"> <i class='fa fa-send'></i>Crear Proveedor</button>



            <?php echo form_close(); ?>
        </form>
</div>

</div>
</div>
</section>
</div>
<div style="height: 5vh"></div>

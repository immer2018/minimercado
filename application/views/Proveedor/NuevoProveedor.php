<div class="container">
    <section class="content">


        <div style="height: 5vh"></div>
        <h1 class="display-4 text-orange text-center">Proveedores del minimercado</h1>
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
            <div class="col-lg-11" >
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title"><span class="resaltar"> <i class="fa fa-plus-square-o"></i>  Nuevo Proveedor</span></h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                    title="Collapse">
                                <i class="fa fa-minus"></i></button>
                            
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user text-gray1 "></i> </span>
                                <input type="text" name="txttelefono"  id="tel" class="form-control" required="" placeholder="Nombre proveedor"/>
                            </div>
                            <br>
                            <div class="input-group">
                                <label class="input-group-addon"><i class="fa fa-home text-gray1"></i></label>
                                <input type="text" name="txtdireccion"  id="dir" class="form-control" required="" placeholder="Direccion">
                            </div>
                            <br>
                            <div class="input-group">
                                <label class="input-group-addon"><i class="fa fa-phone text-gray1 "></i> </label>
                                <input type="text" name="txttelefono"  id="tel" class="form-control" required="" placeholder="Telefono">
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <label class="input-group-addon"><i class="fa fa-comment text-gray1 "></i></label>
                                <input type="text" name="txtcontacto"  id="ctc" class="form-control" required="" placeholder="Contacto">
                            </div>
                            <br>
                            <div class="input-group">
                                <label class="input-group-addon"><i class="fa fa-certificate text-gray1 "></i></label>
                                <input type="text" name="txtnit"  id="nit" class="form-control" required="" placeholder="Nit">
                            </div>
                            <br>
                            <div class="input-group">
                                <label class="input-group-addon"><i class="fa fa-envelope text-gray1 "></i> </label>
                                <input type="text" name="txtemail"  id="email" class="form-control" required="" placeholder="Correo electrònico">
                            </div>
                            <br>
                        </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn bg-orange " style="margin-left: 456px;"> <i class='fa fa-save'></i> Crear Proveedor</button>

                    </div>
                    <!-- /.box-footer-->
                </div>
                <!-- /.box --> 
                <?php echo form_close(); ?>
            </div> 
        </div>
    </section>
</div>


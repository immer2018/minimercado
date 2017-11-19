<div class="container" >

    <section class="section">
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

<div style="height: 4vh"></div>
        <h1 class="display-4 text-orange text-center" >Modificar Proveedor</h1>
        
        <?php echo form_open('Proveedor/ProveedorActualizado/' . $id); ?>
        <div class="row">
            <div class="col-md-11" >
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
                                <span class="input-group-addon"><i class="fa fa-user text-gray1 "></i><span class="text-green"> proveedor </span> </span>
                                <input type="text" name="txttelefono"  id="tel" class="form-control" required=""  value="<?= $NombrePr ?>"/>
                            </div>
                            <br>
                            <div class="input-group">
                                <label class="input-group-addon"><i class="fa fa-home text-gray1"></i><span class="text-green"> Dirección </span></label>
                                <input type="text" name="txtdireccion"  id="dir" class="form-control" required="" value="<?= $direccion ?>">
                            </div>
                            <br>
                            <div class="input-group">
                                <label class="input-group-addon"><i class="fa fa-phone text-gray1 "></i><span class="text-green"> Telefono </span> </label>
                                <input type="text" name="txttelefono"  id="tel" class="form-control" required="" value="<?= $telefono ?>" >
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <label class="input-group-addon"><i class="fa fa-comment text-gray1 "></i> <span class="text-green"> Contacto</span></label>
                                <input type="text" name="txtcontacto"  id="ctc" class="form-control" required="" placeholder="Contacto"value="<?= $nombrecotacto ?>">
                            </div>
                            <br>
                            <div class="input-group">
                                <label class="input-group-addon"><i class="fa fa-certificate text-gray1 "></i><span class="text-green"> Nit</span></label>
                                <input type="text" name="txtNit"  id="nit" class="form-control" required="" value="<?= $nitp ?>">
                            </div>
                            <br>
                            <div class="input-group">
                                <label class="input-group-addon"><i class="fa fa-envelope text-gray1 "></i><span class="text-green"> Email </span> </label>
                                <input type="text" name="txtcorreo"  id="email" class="form-control" required=""  value="<?= $correo ?>">
                            </div>
                            <br>
                        </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn bg-orange " style="margin-left: 456px;"> <i class='fa fa-edit'></i> Modificar Proveedor</button>

                    </div>
                    <!-- /.box-footer-->
                </div>
                
<div style="height: 2vh"></div>

<?php echo form_close(); ?>

</section>

</div>




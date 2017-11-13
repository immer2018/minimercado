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


        <h1 class="display-4 green-text flex-center" style="margin-left: 510px;">Modificar Proveedor</h1>
        
        <?php echo form_open('Proveedor/ProveedorActualizado/' . $id); ?>
        <div class="row">
            <div class="col-md-7" style="margin-left: 350px;">
                <div class="box box-success">

                    <!-- /.box-header -->
                    <div class="box-body">

                        <div class="md-form">
                            <br><label for="nproveedor"><i class="fa fa-user fa-3x"></i> Nombre Proveedor</label>
                            <input type="text" name="txtNProveedor"  id="nproveedor" class="form-control" required="" value="<?= $NombrePr ?>"/><br>


                        </div>
                        <div class="md-form">
                            <br>            <label for="nit"><i class="fa fa-certificate fa-3x"></i> Nit-Proveedor</label>

                            <input type="text" name="txtNit"  id="nit" class="form-control" required="" value="<?= $nitp ?>"/><br>

                        </div>
                        <div class="md-form">
                            <br>            <label for="email" class=""><i class=" fa fa-envelope fa-3x"></i> Correo Electronico</label>

                            <input type="email" name="txtcorreo"  id="email" class="form-control" required="" value="<?= $correo ?>"/><br>

                        </div>

                        <div class="md-form">
                            <br>            <label for="dir"><i class="fa fa-archive fa-3x"></i>Dirección</label>

                            <input type="text" name="txtdireccion"  id="dir" class="form-control" required="" value="<?= $direccion ?>"/>
                            <br>
                        </div>
                        <div class="md-form">
                            <br>            <label for="ctc"><i class="fa fa-comment fa-3x"></i>Contacto Proveedor</label>

                            <input type="text" name="txtcontacto"  id="ctc" class="form-control" required="" value="<?= $nombrecotacto ?>"/>
                            <br>
                        </div>
                        <div class="md-form">
                            <br>            <label for="tel"><i class="fa fa-train fa-3x "></i>Telefono</label>

                            <input type="text" name="txttelefono"  id="tel" class="form-control" required="" value="<?= $telefono ?>"/>

                        </div>
                    </div>
                </div>
            </div>
        </div>


</div>

<div class="flex-center">
    <button type="submit" class="btn bg-orange " style="margin-left: 500px;">Modificar Proveedor</button>


</div>
<div style="height: 2vh"></div>

<?php echo form_close(); ?>

</section>

</div>




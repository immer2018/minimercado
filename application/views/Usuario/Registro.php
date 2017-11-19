<section class="content">
    <?php echo form_open('registro'); ?>
    <div class="row">


    </div>

    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-md-7">
            <div class="box box-success">
                <div class="box-header">
                    <h3 class="box-title"><p style="text-transform: capitalize; color: white; text-align: center;"> <i class="fa fa-plus-square-o"></i> registro Colaborador</p></h3>

                    <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa fa-user text-gray1"></i></span>
                        <input type="text" id="nombrecompleto" class="form-control" name="txtnombrecompleto" data-parsley-required="true" placeholder="Nombre Completo">
                    </div>
                    <br>

                    <div class="input-group">
                        <span class="input-group-addon"> <i class="fa fa-envelope text-gray1" aria-hidden="true"></i></span>
                        <input type="email" id="Correoelectronico" class="form-control" name="txtcorreo" data-parsley-required="true" data-parsley-type="email" data-parsley-trigger="keyup" placeholder="Correo Electrónico ">
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope text-gray1 " aria-hidden="true"></i></span>
                        <input  placeholder="Usuario" type="text" id="usuario" class="form-control" name="txtusuario" data-parsley-required="true" >
                    </div> 
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"> <i class="fa fa-lock text-gray1" aria-hidden="true"></i></span>
                        <input  placeholder="Contraseña" type="password" id="password" class="form-control" name="txtpassword" data-parsley-required="true" 
                                data-parsley-trigger="keyup">
                    </div> 
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"> <i class="fa fa-lock text-gray1" aria-hidden="true"></i></span>
                        <input  type="password" id="configpassword" class="form-control" name="txtconfir" data-parsley-required="true" 
                                data-parsley-trigger="keyup" data-parsley-equalto="#password" placeholder="Ingresa nuevamente la contraseña">


                    </div> 
                    <br>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <div style="margin-left: 47%;">
                        <button  type="submit" class="btn bg-orange" name="btnRegistro"  > <i class='fa fa-save'> </i> Registrar</button>

                    </div>
                    <div style="height: 4vh"></div>
                    <?php if (validation_errors()): ?>
                        <div class="input-group">
                            <div class="alert alert-danger alert-dismissible" style="margin-left: 20%;">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h4><i class="icon fa fa-ban"></i> Error!</h4>
                                <p class="alert-danger close"><?php echo validation_errors(); ?></p> 
                            </div>
                        <?php endif; ?>
                    </div> 
                </div>
            </div>

            <div class="input-group">
                <?php if ($this->session->flashdata('correcto')): ?>
                    <div class=" alert alert-success" ><?php echo $this->session->flashdata('correcto'); ?> </div> 
                <?php endif; ?>
                <?php if ($this->session->flashdata('incorrecto')): ?>
                    <div class=" alert alert-danger" ><?php echo $this->session->flashdata('incorrecto'); ?> </div> 
                <?php endif; ?>

            </div>
            <!-- /.box -->
        </div>
    </div>

    <?php echo form_close(); ?>
</section>

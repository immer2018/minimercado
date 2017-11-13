<div style="height: 5vh"></div>
<p class="h1 text-center text-orange">Autorización</p>
<div style="height: 4vh"></div>
<div class="container">
    <section class="content data-parsley-validate">
        <?php echo form_open('authCol'); ?>
        <div class="row">
            <script type="text/javascript">
                alertify.success("bienvenido Admin <?= $this->session->userdata('usuario') ?> a la secciòn de habilitar y dar permisos a los colaboradores");
            </script>
            <div class="col-lg-3"></div>
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"> <p class="text-center"><i class="fa fa-users fa-3x prefix" aria-hidden="true" ></i><label for="user" class="h3 label-success">Colaborador</label></p></h3>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <?php if ($colaboradores): ?>
                            <select name="cboColabora" class="form-control" required data-parsley-trigger="keyup">
                                <option value="">- seleccione un colaborador-</option>
                                <?php foreach ($colaboradores as $lcolabora): ?>
                                    <option value="<?= $lcolabora['idUsuario'] ?>"><?= $lcolabora['nombreCompleto'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        <?php else: ?>
                            <p class="lead">no hay colaboradores para ser habilitados</p>
                        <?php endif; ?> 
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <div style="height: 2vh"></div>
                        <?php if ($colaboradores): ?>
                            <button type="submit" class="btn bg-orange waves-effect orange" name="btnHabilita" ><i class='fa fa-send'></i> Habilitar Colaborador</button>
                        <?php endif; ?>
                    </div>
                </div>
                <!-- /.box -->
            </div>
            <?php echo form_close(); ?> 
    </section>
</div>




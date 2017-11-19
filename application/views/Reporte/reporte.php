<div class="container">
    <h1 class="h1-responsive text-center text-orange">Reporte de Inventario</h1>
    <div style="height: 4vh"></div>

    <section class="content">
        <?php if ($this->session->flashdata('excelok')): ?>
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <?php echo $this->session->flashdata('excelok'); ?> 
            </div>
        <?php endif; ?>
        <?php echo form_open('ReporteController/generarReporte'); ?>
        <div class="row">
            <div class="col-md-5" style="margin-left: 350px;">
                <div class="box box-success ">
                    <div class="box-header with-border">
                        <h3 class="box-title resaltar"></h3>
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body">

                        <div class="input-group">
                            <span class="input-group-addon"> <i class="fa fa-calendar-plus-o text-gray1" aria-hidden="true" ></i></span>
                            <?php
                            $data = array(
                                'name' => 'finicial',
                                'id' => 'inicial',
                                'class' => 'form-control',
                                'data-parsley-required' => 'true',
                                'data-parsley-trigger' => 'keyup',
                                'placeholder' => 'Fecha Inicial'
                            );
                            echo form_input($data);
                            ?>
                        </div>
                        <script type="text/javascript">
                            $(function () {
                                $("#inicial").datepicker({
                                    changeMonth: true,
                                    changeYear: true
                                });
                            });
                        </script>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"> <i class="fa fa-calendar-plus-o text-gray1" aria-hidden="true" ></i></span>


                            <?php
                            $data = array(
                                'name' => 'ffinal',
                                'id' => 'final',
                                'class' => 'form-control',
                                'data-parsley-required' => 'true',
                                'data-parsley-trigger' => 'keyup',
                                'placeholder' => 'Fecha Final'
                            );
                            echo form_input($data);
                            ?>
                        </div>
                        <script type="text/javascript">
                            $(function () {
                                $("#final").datepicker({
                                    changeMonth: true,
                                    changeYear: true
                                });
                            });
                        </script>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"> <i class="fa fa-briefcase text-gray1" aria-hidden="true" ></i></span>

                            <?php
                            $options = array(
                                '' => 'seleccione un  tipo de reporte',
                                'vencido' => 'producto vencido',
                                'venta' => 'producto vendido',
                            );

                            echo form_dropdown('tipoReporte', $options, '', ['class' => 'form-control', 'data-parsley-required' => 'true']);
                            ?>
                        </div>
                        <br>

                        <div class="input-group">
                            <span class="input-group-addon"> <i class="fa fa-briefcase text-gray1" aria-hidden="true" ></i></span>

                            <?php
                            $options = array(
                                '' => 'seleccione el modo de exportar ',
                                'excel' => 'excel',
                                'pdf' => 'PDF'
                            );

                            echo form_dropdown('ddExportar', $options, '', ['class' => 'form-control', 'data-parsley-required' => 'true']);
                            ?>


                        </div>
                       
                    </div>
                     <div class="box-footer">
                            <div class="input-group">
                                <button type="submit" style="margin-left: 150px;" class="btn bg-orange" name="btnGenerarReporte"> <i class=' fa fa-download'>  Generar Reporte</i></button>

                            </div> 
                        </div>

                </div>

            </div>

        </div>
       
        <?php echo form_close(); ?>
    </section>
</div>

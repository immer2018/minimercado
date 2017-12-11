<div class="container">
    <section class="content">
        <div style="height: 5vh"></div>
        <h5 class=" text-orange text-center"></h5>
        <div class="col-lg-11">
            <?php if ($this->session->flashdata('excelok')): ?>
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <?php echo $this->session->flashdata('excelok'); ?> 
                </div>
            <?php endif; ?>
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title"><span class="resaltar"> <i class="fa fa-plus-square-o"></i> Reporte</span></h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                            <i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-addon"> <i class="fa fa-calendar-plus-o text-gray" aria-hidden="true" ></i></span>
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
                            <script type="text/javascript">
                                $(function () {
                                    $("#inicial").datepicker({
                                        changeMonth: true,
                                        changeYear: true
                                    });
                                });
                            </script>
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"> <i class="fa fa-calendar-plus-o text-gray" aria-hidden="true" ></i></span>


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
                            <script type="text/javascript">
                                $(function () {
                                    $("#final").datepicker({
                                        changeMonth: true,
                                        changeYear: true
                                    });
                                });
                            </script>
                        </div>
                        <br>

                    </div>
                    <div class="col-md-6">


                        <div class="input-group">
                            <span class="input-group-addon"> <i class="fa fa-briefcase text-gray" aria-hidden="true" ></i></span>

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

                            <span class="input-group-addon"> <i class="fa fa-briefcase text-gray" aria-hidden="true" ></i></span>

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
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit"  class="btn bg-orange pull-right" name="btnGenerarReporte"> <i class=' fa fa-download'>  Generar Reporte</i></button>

                </div>
                <!-- /.box-footer-->
            </div>
            <!-- /.box --> 
            <?php echo form_close(); ?>
        </div> 
</div>
</section>
</div>

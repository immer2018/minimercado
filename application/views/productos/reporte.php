<div class="container">
    <h1 class="h1-responsive text-center orange-text">Reporte de Inventario</h1>
    <div style="height: 4vh"></div>

    <section class="text-center placeholders">
        <?php if ($this->session->flashdata('excelok')): ?>
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <?php echo $this->session->flashdata('excelok'); ?> 
            </div>
        <?php endif; ?>
        <?php echo form_open('ReporteController/generarReporte'); ?>
        <div class="row">
    <div class="col-md-5" style="margin-left: 350px;">
        <div class="box box-danger">

            <!-- /.box-header -->
            <div class="box-body">
                <div class="form-group">
                                        <label for="producto"><span class="badge badge-primary"><i class="fa fa-cart-plus fa-2x"></i> </span>Producto</label>

                    <?php
                    date_default_timezone_set('America/Bogota');

                    $data = array(
                        'name' => 'txtProducto',
                        'id' => 'producto',
                        'class' => 'form-control'
                    );
                    echo form_input($data);
                    ?>
                </div>
                <div class="form-group">
                                        <label for="inicial"><span class="badge badge-primary"><i class="fa  fa-calendar-plus-o fa-2x"></i> </span>Fecha Inicio</label>

                    <?php
                    $data = array(
                        'name' => 'finicial',
                        'id' => 'inicial',
                        'class' => 'form-control',
                        'data-parsley-required' => 'true',
                        'data-parsley-trigger' => 'keyup'
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
                <div class="form-group">
                                        <label for="final"><span class="badge badge-primary"><i class="fa  fa-calendar fa-2x"></i> </span>Fecha finalizaciòn</label>

                    <?php
                    $data = array(
                        'name' => 'ffinal',
                        'id' => 'final',
                        'class' => 'form-control',
                        'data-parsley-required' => 'true',
                        'data-parsley-trigger' => 'keyup'
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
                <div class="form-group">
                    <label for="reportel"><span class="badge badge-primary"><i class="fa   fa-briefcase fa-2x"></i> </span>Tipo de reporte</label>

                    <?php
                    $options = array(
                        '' => 'seleccione un reporte',
                        'vencido' => 'producto vencido',
                        'venta' => 'producto vendido',
                    );


                    echo form_dropdown('tipoReporte', $options, '', ['class' => 'form-control', 'data-parsley-required' => 'true']);
                    ?>
                </div>
                <div class="form-group">
                    <label for="final"><span class="badge badge-primary"><i class="fa   fa-briefcase fa-2x"></i> </span>Exportar a</label>
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

        </div>
      
        </div>
        <div class="row" style="margin-left:500px ;">
            <div class="col-11">
                <div class="flex-center">

                    <button type="submit" style="margin-left: -500px;" class="btn bg-orange" name="btnGenerarReporte"> <i class=' fa fa-download'>  Generar Reporte</i></button>
 <div style="height: 2vh"></div>
                </div>   
            </div>
        </div>

  
        <?php echo form_close(); ?>
    </section>

    
    <!-- modales con informacion -->
    <!-- Modal -->



</div>

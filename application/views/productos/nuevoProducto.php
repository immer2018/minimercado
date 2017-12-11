
<div class="container">
    <section class="content" data-parsley-validate>
        <h5 class="h1-responsive text-orange text-center">Nuevo Producto</h5>
        <div style="height: 4vh"></div>
        <?php echo form_open('ProductoController/nuevoProducto'); ?>
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
        <!--vfbvhbvbfvoifdhnvofduhmgvudfhngoidjgoijtoi-->

        <div class="row">
            <div class="col-lg-11" >
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title"><span class="resaltar"> <i class="fa fa-plus-square-o"></i> productos</span></h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                    title="Collapse">
                                <i class="fa fa-minus"></i></button>

                        </div>
                    </div>
                    <div class="box-body">
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-cart-plus text-gray "></i> </span>
                                <input type="text" id="prod"  class="form-control" name="txtNombProd" data-parsley-trigger="keyup" data-parsley-required-message="el campo no debe estar vacio" data-parsley-required="true" placeholder="producto">

                            </div>
                            <br>
                            <div class="input-group">
                                <label class="input-group-addon"><i class="fa fa-briefcase text-gray"></i></label>
                                <select name="categoria" class="form-control md-form"  id="categoria" required data-parsley-trigger="keyup">
                                    <option value="">seleccione una categorìa</option>
                                    <?php foreach ($categorias_select as $itemCategoria): ?>
                                        <option value="<?= $itemCategoria['codCategoria'] ?>"><?= $itemCategoria['categoria'] ?></option>
                                    <?php endforeach; ?>    
                                </select>
                            </div>
                            <br>
                            <div class="input-group">
                                <label class="input-group-addon"><i class="fa fa-folder-open text-gray "></i> </label>
                                <select name="subcategoria" id="subcatego" class="form-control" required data-parsley-trigger="keyup"  >

                                    <option value="">selecciona la subcategoria</option>

                                </select> 
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <label class="input-group-addon"><i class="fa fa-book text-gray "></i></label>
                                <textarea class="form-control" rows="3" placeholder="descripción del producto ..." name="txtDescripcion" id="descrip" data-parsley-required="true" 
                                          data-parsley-trigger="keyup" 
                                          data-parsley-required-message="el campo no debe estar vacio" ></textarea>
                            </div>
                            <br>
                            <div class="input-group">
                                <label class="input-group-addon"><i class="fa fa-barcode text-gray "></i></label>
                                <input type="text"
                                       name="txtCodBarras"
                                       id="CodigoDeBarras"
                                       class="form-control"
                                       required
                                       data-parsley-type="number"
                                       data-parsley-trigger="keyup"
                                       data-parsley-minlength="13"
                                       data-parsley-maxlength="13"
                                       data-parsley-required-message="el campo no debe estar vacio"
                                       placeholder="código de barras"

                                       /><br />
                            </div>


                        </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">


                    </div>
                    <!-- /.box-footer-->
                </div>
                <!-- /.box --> 

            </div> 
        </div> 

        <!--seccion cantidades-->

        <div class="row">
            <div class="col-lg-11" >
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title"><span class="resaltar"> <i class="fa fa-plus-square-o"></i> Stock</span></h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                    title="Collapse">
                                <i class="fa fa-minus"></i></button>

                        </div>
                    </div>
                    <div class="box-body">
                        <div class="col-md-4">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-battery-1 text-gray "></i> </span>
                                <input type="text" name="txtMinimo"  id="minimo" class="form-control"  required data-parsley-type="number"  data-parsley-trigger="keyup" data-parsley-required-message="el campo no debe estar vacio" value="<?= set_value('txtMinimo') ?>" placeholder="mínimo"/><br />

                            </div>
                            <br>



                        </div>
                        <div class="col col-md-4">

                            <div class="input-group">
                                <label class="input-group-addon"><i class="fa fa-battery-full text-gray"></i></label>
                                <input type="text" name="txtMaximo" id="Maximo" class="form-control" required data-parsley-type="number" data-parsley-trigger="keyup" data-parsley-required-message="el campo no debe estar vacio" value="<?= set_value('txtMaximo') ?>" data-parsley-gt="#minimo" data-parsley-gt-message="debe ser mayor que el minimo" placeholder="máximo"/><br />

                            </div>  
                        </div>

                        <div class="col col-md-4">
                            <div class="input-group">
                                <label class="input-group-addon"><i class="fa fa-folder-open text-gray "></i> </label>

                                <input placeholder="existencias" type="text" name="txtExits"  id="exist" class="form-control" required data-parsley-type="number" data-parsley-trigger="keyup" data-parsley-required-message="el campo no debe estar vacio" data-parsley-integer-message="debe ingresar numeros" value="<?= set_value('txtExits') ?>"  /><br />

                            </div> 
                        </div>


                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">


                    </div>
                    <!-- /.box-footer-->
                </div>
                <!-- /.box --> 

            </div> 
        </div> 
        <div class="row">
            <div class="col-lg-11" >
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title"><span class="resaltar"> <i class="fa fa-plus-square-o"></i> detalle</span></h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                    title="Collapse">
                                <i class="fa fa-minus"></i></button>

                        </div>
                    </div>
                    <div class="box-body">
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-product-hunt text-gray "></i> </span>
                                <input placeholder="lote" type="text" name="txtLote" class="form-control " data-parsley-required="true" data-parsley-trigger="keyup" data-parsley-required-message="el campo no debe estar vacio" value="<?= set_value('txtLote') ?>"/><br /> 

                            </div>

                            <br>


                        </div>
                        <div class="col-md-6">

                            <div class="input-group">
                                <label class="input-group-addon"><i class="fa fa-calendar-o text-gray"></i></label>
                                <input placeholder="fecha de vencimiento" type="text" id="date-picker-example" name="fvencimiento" class="form-control datepicker" data-parsley-required="true" data-parsley-trigger="keyup" data-parsley-required-message="el campo no debe estar vacio" value="<?= set_value('fvencimiento') ?>"/><br /> 


                            </div>
                            <script type="text/javascript">
                                $(function () {
                                    $("#date-picker-example").datepicker({
                                        changeMonth: true,
                                        changeYear: true
                                    });
                                });
                            </script>

                            <script>
                                $(document).ready(function () {
                                    $('form').parsley();
                                });
                            </script>
                            <br>


                        </div>


                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <div >
                            <button  type="submit" class="btn bg-orange  pull-right" name="btnNuevoProducto"  ><i class='fa fa-save'> Crear Producto</i></button>

                        </div>

                    </div>
                    <!-- /.box-footer-->
                </div>
                <!-- /.box --> 

            </div> 
        </div>

        <!--fin cantidades-->


        <div class="row">
            <div class="col-11">

            </div>
        </div>




        <?php echo form_close(); ?>

    </section>

</div>
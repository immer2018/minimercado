
<div class="container">
    <section class="content" data-parsley-validate>
        <h1 class="h1-responsive text-orange text-center">Actualizar Producto</h1>
        <div style="height: 4vh"></div>
        <?php echo form_open('ProductoController/ProductoActualizado/' . $id); ?>
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
                        <h3 class="box-title"><span class="resaltar"> <i class="fa fa-plus-square-o"></i> productos del minimercado</span></h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                    title="Collapse">
                                <i class="fa fa-minus"></i></button>

                        </div>
                    </div>
                    <div class="box-body">
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon text-gray"><i class="fa fa-cart-plus  "></i>  Producto </span>
                                <input type="text" id="prod"  value="<?= $producto ?>" class="form-control" name="txtNombProd" data-parsley-trigger="keyup" data-parsley-required-message="el campo no debe estar vacio" data-parsley-required="true" placeholder="producto">

                            </div>
                            <br>
                            <div class="input-group">
                                <label class="input-group-addon text-gray"><i class="fa fa-briefcase "></i> Categoría</label>
                                <span class="badge badge-mdb-color h6"></span>
                                <select name="categoria" class="form-control md-form"  id="categoria" required data-parsley-trigger="keyup">
                                    <option value="99"><?= $nombreCategoria->categoriaN ?></option>

                                    <?php foreach ($categorias_select as $itemCategoria): ?>

                                        <?php if ($nombreCategoria->categoriaN == $itemCategoria['categoria']): ?>
                                            <option value="<?= $itemCategoria['codCategoria'] ?>"><?= $itemCategoria['categoria'] ?></option>

                                        <?php else: ?>
                                            <option value="<?= $itemCategoria['codCategoria'] ?>"><?= $itemCategoria['categoria'] ?></option>

                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <br>
                            <div class="input-group">
                                <label class="input-group-addon text-gray"><i class="fa fa-folder-open  "></i> Subcategoría</label>
                                <select name="subcategoria" id="subcatego" class="form-control" required data-parsley-trigger="keyup"  >
                                    <?php if ($this->input->post('categoria') == 99): ?>
                                        <option value="4">Lacteos</option>

                                    <?php else: ?>
                                        <option value="<?= $idsub ?>"><?= $nombreSub->NombreSubcategoria ?></option>

                                    <?php endif; ?>
                                </select> 
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <label class="input-group-addon text-gray"><i class="fa fa-book text-gray "></i> Descripción</label>
                                <textarea class="form-control" rows="3" placeholder="descripción del producto ..." name="txtDescripcion" id="descrip" data-parsley-required="true" 
                                          data-parsley-trigger="keyup" 
                                          data-parsley-required-message="el campo no debe estar vacio" > <?= $descripcion ?></textarea>
                            </div>
                            <br>



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
                        <h3 class="box-title"><span class="resaltar"> <i class="fa fa-plus-square-o"></i> Cantidad</span></h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                    title="Collapse">
                                <i class="fa fa-minus"></i></button>

                        </div>
                    </div>
                    <div class="box-body">
                        <div class="col-md-4">
                            <div class="input-group">
                                <span class="input-group-addon text-gray"><i class="fa fa-battery-1 "></i> Minimo Stock</span>
                                <input type="text" name="txtMinimo" value="<?= $minStock ?>" id="minimo" class="form-control"  required data-parsley-type="number"  data-parsley-trigger="keyup" data-parsley-required-message="el campo no debe estar vacio" value="<?= set_value('txtMinimo') ?>" placeholder="minimo"/><br />

                            </div>


                        </div>
                        <div class="col-md-4">
                            <div class="input-group">
                                <label class="input-group-addon text-gray"><i class="fa fa-battery-full "></i> Maximo Stock</label>
                                <input type="text" name="txtMaximo" value="<?= $maxStock ?>" id="Maximo" class="form-control" required data-parsley-type="number" data-parsley-trigger="keyup" data-parsley-required-message="el campo no debe estar vacio" value="<?= set_value('txtMaximo') ?>" data-parsley-gt="#minimo" data-parsley-gt-message="debe ser mayor que el minimo" placeholder="Maximo"/><br />

                            </div>
                        </div>
                         <div class="col-md-4">
                           
                            <div class="input-group">
                                <label class="input-group-addon text-gray"><i class="fa fa-folder-open "></i> Existencias </label>

                                <input placeholder="Existencias" type="text" value="<?= $exist ?>" name="txtExits"  id="exist" class="form-control" required data-parsley-type="number" data-parsley-trigger="keyup" data-parsley-required-message="el campo no debe estar vacio" data-parsley-integer-message="debe ingresar numeros" value="<?= set_value('txtExits') ?>"  /><br />

                            </div>

                        </div>


                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                <button  type="submit" class="btn bg-orange pull-right" name="btnEditaProducto"><i class='fa fa-edit'> Actualizar Producto</i></button>


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

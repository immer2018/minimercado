<div class="container" >
    <section class="section" data-parsley-validate>
        <div class="row" style="margin-top: 15px; margin-left: 50px; height: 200px; width: 900px;">
            <div class="col-lg-3"></div>
            <div class="col-md-7">
                <div class="box box-solid">
        <div style="height: 5vh" class="box-body"></div> 
        <h3 style="margin-left: 100px; margin-top: -10px;">Consulta de Orden Entrada</h3>
        <?php echo form_open('inventario/consultarordenentrada'); ?>
        <span ><?php echo validation_errors(); ?></span>

        <div class="md-form form-group" style="margin-left: 100px;">
            <label for="buscar" class="badge badge-warning"> busqueda</label>
            <input style="width: 300px;" type="text" id="form1" class="form-control" name="txtbuscar">
        </div>  



        <div class="form-group"style="margin-left: 100px;">
            <select name="filtro" class="form-control" data-parsley-required="true" style="width: 300px;">
                <option value="producto">Producto</option>   
                <option value="proveedor">Proveedor</option>   
            </select><br>
            <button class="btn bg-orange " type="submit" style="margin-left: 100px;"> <i class="fa fa-search"></i>  Buscar</button>
        </div>
        <div style="height: 1vh"></div>
</div>
</div>
</div>



<div style="height: 2vh"></div>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title box-warning">Listado de entrada de productos</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">


                <?php echo $div1 . $table; ?>

            </div>
        </div>

        <?php echo form_close(); ?>

    </div>
    <!-- /.box-body -->
</div>




</section>
</div>

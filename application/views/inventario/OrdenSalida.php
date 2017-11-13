<div class="container">

    <section class="section" data-parsley-validate>
        <div class="row" style="margin-top: 15px; margin-left: 50px; height: 200px; width: 900px;">
            <div class="col-lg-3"></div>
            <div class="col-md-7">
                <div class="box box-solid">
        <div style="height: 5vh" class="box-body"></div> 
        <h3 style="margin-left: 100px; margin-top: -10px;">Consulta de Orden Salida</h3>
    <?php echo form_open('buscador'); ?>
    <span ><?php echo validation_errors(); ?>
       
                <div class="md-form form-group" style="margin-left: 100px;">
            <label for="buscar" class="badge badge-warning"> busqueda</label>
            <input style="width: 300px;" type="text" id="form1" class="form-control" name="txtbuscar">
        </div>  

                

            
               <div class="form-group"style="margin-left: 100px;">
                    <select class="form-control" name="ddlfiltro" style="width: 300px;">
                        <option class="dropdown-item" value="productoSaliente" >Producto</option>

                        <option class="dropdown-item" value="motivoSal" >Motivo</option>

                    </select><br>
                
                <button class="btn bg-orange " type="submit"><i class="fa fa-search"></i>Buscar</button>
            </div>
   
       <div style="height: 1vh"></div>
                </div>
    
            
</div></div>
                <div style="height: 2vh"></div>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title box-warning">Listado de salida de productos</h3>
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

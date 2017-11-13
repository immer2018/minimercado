<style>
    .imagencard{
        width: 350px;
        height: 150px;
    }
</style>
 <div style="height: 4vh"></div>
<h1 class="h1-responsive text-center text-orange">Bienvenido(a) <?php echo $perfil->nombreCompleto; ?></h1>
<!-- ****** Team Section****** -->
 <div style="height: 4vh"></div>
<div class="container">
    <section class="content">
        <div class="row">
            <div class="col-md-5">
                <div class="box box-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title">
                            <div class="avatar"><img src="<?PHP echo base_url(); ?>/public/img/market2.jpg" class="mx-auto d-block imagencard" alt="img"></div>
                        </h3>


                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <p><i class="fa fa-quote-left text-success"></i> permite el registro y consulta de los productos del minimercado </p>

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>   
             <div class="col-md-5">
                <div class="box box-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title">
                            <div class="avatar"><img src="<?PHP echo base_url(); ?>/public/img/woman_market_2.jpg" class="mx-auto d-block imagencard" alt="img">
                    </div>
                        </h3>


                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                       <p><i class="fa fa-quote-left"></i>podra registrar y consultar  ordenes de salida </p>

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>  
        </div>
    </section>
</div>




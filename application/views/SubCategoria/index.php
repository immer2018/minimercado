<section class="content">
    <div style="height: 2vh"></div>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title box-warning">Listado de Categorias</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table  id="dataTables-example" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Nombre SubCategoria</th>
                                <th>Detalle SubCategoria</th>
                            </tr>  
                        </thead>
                        <tbody>
                            <tr>
                                <?php foreach ($Subcategorias as $Subcategoria_item): ?>
                                    <td><?php echo $Subcategoria_item['NombreSubcategoria']; ?></td>
                                    <td><?php echo $Subcategoria_item['detallesSub']; ?></td>
                                </tr>

                            <?php endforeach; ?>   

                        </tbody>

                    </table>



                </div>
            </div>



        </div>
        <!-- /.box-body -->
    </div>

</section>











<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title box-warning">Listado de SubCategorias</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">

                </div>
            </div>
        </div>
        <!-- /.box-body -->
    </div>
</section>
<script>
    $(function () {

        $('#dataTables-example').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': false,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    })
</script>

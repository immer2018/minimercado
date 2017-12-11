<section class="content">
    <div style="height: 2vh"></div>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title box-success resaltar"><i class="fa fa-list"></i> Listado de SubCategorias</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="dataTables-example" class="table table-striped">
                        <tr>
                            <th>Nombre SubCategoria</th>
                            <th>Detalle Subcategoria</th>
                            <th>Nombre Categoria</th>
                            <th>Opciones</th>

                        </tr>
                        <tr>
                            <?php foreach ($categorias as $Subcategoria_item): ?>
                                <td><?php echo $Subcategoria_item['NombreSubcategoria']; ?></td>
                                <td><?php
                                    echo $Subcategoria_item['detallesSub'];
                                    echo br(3);
                                    ?></td>
                                <td><?php
                                    echo $Subcategoria_item['NombreCategoria'];
                                    echo br(3);
                                    ?></td>
                                <td> <a  title="Modificar" class="teal-text"  href=" <?php echo base_url() . 'SubCategoria/editarSub/' . $Subcategoria_item['idSubcategoria'] ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                     <a title="Eliminar" class="text-red"  href=" <?php echo base_url() . 'SubCategoria/modalSub/' . $Subcategoria_item['idSubcategoria'] ?>"><i class="fa fa-remove" aria-hidden="true"></i>
                                    </a>
                                </td>


                            </tr>


                        <?php endforeach; ?>   

                    </table>  



                </div>
            </div>



        </div>
        <!-- /.box-body -->
    </div>

</section>

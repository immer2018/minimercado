<div class="container">
    <section class="content">
        <div style="height: 5vh"></div>

        <div class="flex-center">
            <div style="height: 5vh"></div>
            <?php if ($this->session->flashdata('correcto')): ?>
                <div class="alert alert-success" role="alert" /> <?= $this->session->flashdata('correcto') ?> </div>  
        <?php endif; ?>
        <?php if ($this->session->flashdata('incorrecto')): ?>
            <div class="alert alert-success" role="alert" /> <?= $this->session->flashdata('incorrecto') ?> </div>  
<?php endif; ?>
</div>
<?php echo form_open('Subcategoria/actualizarsub/' . $idSub); ?>  
<input type="hidden" name="hdcodigoCategoria" value="<?= $codCategoria ?>">

<div class="row">
    <div class="col-lg-1"></div>
    <div class="col-9 col-md-9">
     <div class="box">
        <div class="box-header">
            <h3 class="box-title box-success"><span class="resaltar"><i class="fa fa-eye"></i> Actualizar SubCategorìa</span></h3>
        </div> 
        <div class="box-body">
          
                <div class="input-group">
                    <span class="input-group-addon"> <i class="fa fa-folder-o "></i> Subcategoria  </span>  
                    <input type="text" id="form1" class="form-control" name="NombreSubcategoria" value="<?php echo $NombreSub; ?>">
                </div>
                <div style="height: 3vh"></div>
                <div class="input-group">
                    <span class="input-group-addon"> <i class="fa fa-pencil-square-o"></i> Detalle de Subcategoria </span> 
                    <textarea rows="10" cols="90"  name="detalSubCategoria"><?php echo $DetallesSub; ?></textarea> 

                </div>

           
        </div>
        <div class="box-footer">
            <div class="input-group">
                <button type="submit" class="btn bg-orange " name="btnEditaSubcategoria"><i class='fa fa-edit'> Actualizar Subcategoria</i></button>
            </div>
        </div>

    </div>    
    </div>
   

</div>
<div style="height: 5vh"></div>
<?php echo form_close(); ?>
<div class="col-9 ">
    <span class="alert-danger close"><?php echo validation_errors(); ?></span> 
</div>
</section>
</div>

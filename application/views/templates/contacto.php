
<br>



<section id="contacto" class="section mb-4">
    
                <div style="height: 5vh"></div> 
                <!--Section heading-->
                <div id="contacto"></div><center>
                    
                     <div class="col-xs-6 col-sm-6 col-md-6 panel panel-primary" style="margin-left: 400px; margin-top: -40px; height: 450px;">
                            
                    <h1 class="section-heading text-center orange-text" >Contactanos</h1>
                    <div style="height: 12vh"></div> 
                <!--Section sescription-->
                <div class="row flex-center" style="margin-left: 200px;">
                    <div class="col-md-6"></div>

                    <div class="col-md-6">

                    </div>

                    <div class="col-md-7">

                        <!-- Contact form -->

                        <form action="<?php base_url() ?>contacto" method="POST" data-parsley-validate>
                            <div class="md-form">
                                <i class="fa fa-user prefix grey-text"></i> <label for="form3"> Nombre</label>
                                <input type="text" id="form3" class="form-control" data-required="true" name="txtnombre">
                                
                            </div>

                            <div class="md-form">
                                <i class="fa fa-envelope prefix grey-text" style="margin-left: -18px;"> </i> <label for="form2"> Email</label>
                                <input type="email" id="form2" class="form-control"  name="txtemail" data-required="true" data-parsley-type="email" data-parsley-trigger="keyup" data-parsley-required-message="el campo no debe estar vacio">
                                
                            </div>

                            <div class="md-form">
                                <i class="fa fa-tag prefix grey-text" style="margin-left: -5px;"></i> <label for="form34"> Asunto</label>
                                <input type="text" id="form32" class="form-control" data-required="true" name="txtAsunto" data-parsley-required-message="el campo no debe estar vacio">
                               
                            </div>

                            <div class="md-form">
                                <i class="fa fa-pencil prefix grey-text" style="margin-left: -5px;"></i> <label for="form8"> Mensaje</label>
                                <textarea  id="form8" class="md-textarea" style="height: 100px; width: 300px;" data-required="true" name="txtMensaje" data-parsley-required-message="el campo no debe estar vacio"></textarea>
                                
                            </div>
                            <br>
                            <div class="text-center">
                                <button class="btn btn-orange" type="submit">Enviar <i class="fa fa-paper-plane-o ml-1"></i></button>
                            </div>
                            <br>
                            <br>
                            <br>
                        </form>
                        <!-- Contact form -->


                    </div>
                    <!--/Second column-->
                     <div class="row">
            <?php messages_flash('red',validation_errors(),'Errores del formulario', true);?>
        </div>

                </div>
                         </div><div style="height: 12vh"></div> 
               </center>
</section><br>
<div style="height: 36vh"></div> 

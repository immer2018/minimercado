
<br>
<style>
    .sinnegrita{
        
        font-weight: normal;
    }
</style>


<section style="margin-left: -500px;" id="contacto" class="section mb-4">
    
                <div style="height: 5vh"></div> 
                <!--Section heading-->
                <div id="contacto"></div><center>
                    
                     <div class="col-xs-6 col-sm-6 col-md-6 " style="margin-left: 400px; margin-top: -30px; height: 450px;">
                            
                         <h1 class="section-heading text-center orange-text" style="margin-left:250px;">Contáctenos</h1>
                    <div style="height: 12vh"></div> 
                <!--Section sescription-->
                <div class="row flex-center" style="margin-left: 200px;">
                    <div class="col-md-6"></div>

                    <div class="col-md-6">

                    </div>

                    <div class="col-md-8">

                        <!-- Contact form -->

                        <form action="<?php base_url() ?>contacto" method="POST" data-parsley-validate class="form-horizontal">
                            <div class="md-form">
                                <div style="margin-left:225px;"></div>  <label for="form3" class="sinnegrita col-md-6"> <i class="fa fa-user grey-text"></i> Nombre </label>
                                <input type="text" style="width:300px " id="form3" class="form-control " data-required="true" name="txtnombre">
                                
                            </div>

                            <div class="md-form" >
                                <label for="form2" class="sinnegrita col-md-6"> <i class="fa fa-envelope  grey-text" > </i> Email</label>
                                <input type="email" id="form2" style="width:300px " class="form-control"  name="txtemail" data-required="true" data-parsley-type="email" data-parsley-trigger="keyup" data-parsley-required-message="el campo no debe estar vacio">
                                
                            </div>

                            <div class="md-form">
                                 <label for="form34" class="sinnegrita col-md-6"><i class="fa fa-tag prefix grey-text"></i> Asunto</label>
                                <input type="text" id="form32" style="width:300px " class="form-control" data-required="true" name="txtAsunto" data-parsley-required-message="el campo no debe estar vacio">
                               
                            </div>
                            
                            <div class="md-form "  style="margin-top: -180px; margin-left: 400px">
                                
                                 <label for="form8" class="sinnegrita"> <i class="fa fa-pencil prefix grey-text"></i>Mensaje</label>
                                <br>
                                <textarea  id="form8" class="md-textarea" style="height: 152px; width: 305px; margin: 0px;" data-required="true" name="txtMensaje" data-parsley-required-message="el campo no debe estar vacio"></textarea>
                                
                            </div>
                            <br>
                            <div class="text-center" style="margin-top: -10px; margin-left: 490px">
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

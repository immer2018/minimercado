
<section id="intro" class="intro">
    <div class="intro-content">

    
        <div class="container" style="height: 295px;">
            <div class="row">
                <div class="col-lg-6">
                   
                   
<div style="height: 11vh"></div>
<div class="col-xs-6 col-sm-3 col-md-8 panel panel-primary" style="margin-left: 395px; margin-top: -20px; height: 50px;">
                    <div class="form-group ">
                        <p class="h1 orange-text text-center" style="margin-top: 0px;">Recuperar Clave</p></div></div>
<div style="height: 30vh"></div>
<div class="container">
    <section >
        <div>
            <?php echo form_open('recupera'); ?>
            <div class="row">
                <?PHP
                messages_flash('danger', validation_errors(), 'Errores del formulario', true);

                //si hay error enviando el email
                messages_flash('danger', 'not_email_send', 'Error enviando el email');

                //si se ha enviando el email correctamente
                messages_flash('success', 'mail_send', 'Email enviado correctamente');

                //si hay error enviando el email
                messages_flash('warning', 'expired_request', 'Error recuperación password');

                //si hay error modificando el password lo mostramos
                messages_flash('danger', 'error_password_changed', 'Error modificando el password');

                //si se ha modificado el password correctamente
                messages_flash('info', 'password_changed', 'Password modificado correctamente');
                ?>
            </div>
            <center>

                <div class="col-xs-6 col-sm-6 col-md-6 panel panel-primary" style="margin-left: 280px; margin-top: -40px;">
                    <div class="form-group ">
                        <i class="fa fa-envelope-square fa-2x prefix" aria-hidden="true" ></i>    <label for="userMail" >Email</label>

                        
                        <input type="email" id="userMail" class="form-control" name="txtusuarioEmail" data-parsley-required="true" data-parsley-type="email"
                               data-parsley-trigger="keyup" >
                    </div>


                </div>  </center>
        </div>

<br>
<br>



        <div style="height: 1.5vh"></div>

        <button style="margin-left: -400px;" type="submit" class="btn btn-orange waves-effect orange" name="btnRecuperaClave" > <i class='fa fa-lock'> </i> Recuperar Contraseña</button>



</div>
</div>

            </div>
</div></div></section>

<script>
    $(document).ready(function () {
        $('form').parsley();
    });
</script>
<div style="height: 9vh"></div>
<?php echo form_close(); ?>

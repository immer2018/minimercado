<style>
    .centerdiv{
        margin-left: 7%; 
        margin-top: 15%;

    }
    .inputtam{
        width: 300px;
    }
</style>
<div style="height: 2vh"></div>
<section id="intro" class="intro">
    <div class="intro-content">

        <?php echo form_open('ingresar'); ?>
        <div class="container" style="height: 295px;">
            <div class="row">
                <div class="col-lg-6">
                    <div class="well well-trans">
                        <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
                            <h2 class="h-ultra">Immerpro</h2>
                        </div>

                        <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
                            <h4 class="h-light">Software de inventarios para minimercados</h4>
                        </div>
                    </div>
                    <div class="well well-trans">
                        <div class="wow fadeInRight" data-wow-delay="0.1s">

                            <ul class="lead-list">
                                <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Facil manejo</strong></li>
                                <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Gestiona los inventarios de manera segura</strong></li>
                                <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Agilidad en sus procesos</strong></li>
                            </ul>

                        </div>
                    </div>


                </div><div style="height: 4vh"></div>
                <div class="col-lg-6">
                    <div id="sendmessage">envio exitoso</div>
                    <div id="errormessage"></div>

                    <form action="" method="post" role="form" class="contactForm lead">

                        <div class=" flex-center col-xs-6 col-sm-6 col-md-6 panel-primary" style="margin-left: 50px; margin-top: -40px; width: 550px;">
                            <div class="col-xs-6 col-sm-6 col-md-6 panel-primary" style="margin-left: -15px; margin-top: -0px; width: 550px; height: 70px;">
                                <a class="navbar-brand" >
                                    <img src="<?php echo base_url() ?>public/img/logoimmerv2.png" alt="" width="206" height="44" style=" margin-top:-10px; margin-left: 120px; " />
                                </a>
                            </div>
                            <div style="height: 4vh"></div>
                            <div class="centerdiv">
                                <div class="form-group">
                                    <input type="hidden" name="token" value="<?= $token ?>">
                                    <i class="fa fa-user"> </i> <label >Usuario</label> 
                                    <input style=""  type="text" name="txtusuario" id="first_name" class="form-control input-md" data-rule="minlen:3" data-msg="Please enter at least 3 chars">

                                </div>
                                <div class="form-group">
                                    <i class="fa fa-lock"> </i> <label >Contraseña</label>
                                    <input  type="password" name="txtpassword" id="last_name" class="form-control input-md" data-rule="minlen:3" data-msg="Please enter at least 3 chars">
                                    <div class="validation"></div>
                                </div> 
                            </div>


                            <input style="margin-left: 198px;" type="submit" value="Ingresar" class="btn btn-orange  btn-lg bg-orange">
                            <br>

                            <div style="height: 3vh"></div>
                            <label style="margin-left: 180px; margin-top: -29px;"><a href="<?php echo base_url() ?>olvido"><b>Olvido de contraseña</b></a></label>
                        </div>
                        <div class="flex-center">
                            <div class="alert-danger"><?php echo validation_errors(); ?></div> 
                            <?php if ($this->session->flashdata('usuario_mal')): ?>
                                <div class="alert alert-success"><?= $this->session->flashdata('usuario_mal') ?></div> 
                            <?php endif; ?>
                        </div>
                    </form>
                </div>

                <div style="height: 4vh"></div>

            </div>				

        </div>
    </div>
</div>					
</div>		

</section>
<br>
<br>





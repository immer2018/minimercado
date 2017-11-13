 
<br>
<br>
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


                </div><br><br><br><br>
                <div class="col-lg-6">




                    <div id="sendmessage">envio exitoso</div>
                    <div id="errormessage"></div>

                    <form action="" method="post" role="form" class="contactForm lead">

                        <div class="col-xs-6 col-sm-6 col-md-6 panel panel-primary" style="margin-left: 50px; margin-top: -40px; width: 650px;">
                            <div class="col-xs-6 col-sm-6 col-md-6 panel panel-primary" style="margin-left: -15px; margin-top: -0px; width: 650px; height: 70px;">
                                <a class="navbar-brand" >
                                    <img src="<?php echo base_url() ?>public/img/ilogo.png" alt="" width="120" height="70" style=" margin-top:-28px ;margin-left: 130px;; width: 300px; height: 80px;" />
                                </a>
                            </div>
                            <br><br><br><br>
                            <div class="form-group ">

                                <center>
                                    <table >


                                        <tr>
                                            <td style=" width: 300px;"><i class="fa fa-user"> </i> <label >Usuario</label> </td>

                                            <td style=" width: 250px;"><i class="fa fa-lock"> </i> <label >Contraseña</label></td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="hidden" name="token" value="<?= $token ?>">
                                            </td>
                                        </tr>
                                        <tr>

                                            <td><input style="width: 250px;"  type="text" name="txtusuario" id="first_name" class="form-control input-md" data-rule="minlen:3" data-msg="Please enter at least 3 chars">

                                                <div class="validation"></div></td>
                                            <td><input type="password" name="txtpassword" id="last_name" class="form-control input-md" data-rule="minlen:3" data-msg="Please enter at least 3 chars">
                                                <div class="validation"></div></td>
                                        </tr>
                                    </table>
                                    <div class="flex-center">
                                        <div class="alert-danger"><?php echo validation_errors(); ?></div> 
                                        <?php if ($this->session->flashdata('usuario_mal')): ?>
                                            <div class="alert alert-success"><?= $this->session->flashdata('usuario_mal') ?></div> 
                                        <?php endif; ?>
                                    </div>
                                </center>

                            </div>
             <input style="margin-left: 250px;" type="submit" value="Ingresar" class="btn btn-skin  btn-lg">
                            <br>


                            <label style="margin-left: 230px; margin-top: -22px;"><a href="<?php  echo base_url()?>olvido"><b>Olvido de contraseña</b></a></label>
                        </div>
                    </form>
                </div>

                </center>


            </div>				

        </div>
    </div>
</div>					
</div>		

</section>
<br>
<br>





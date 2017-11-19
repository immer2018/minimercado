<head>
    <?php echo link_tag('public/alerta/themes/alertify.core.css'); ?>
    <?php echo link_tag('public/alerta/themes/alertify.default.css'); ?>
    <script type="text/javascript" src="<?PHP echo base_url() ?>public/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="<?PHP echo base_url() ?>public/js/parsley.min.js"></script>
    <script type="text/javascript" src="<?PHP echo base_url() ?>public/js/es.js"></script>
    <script type="text/javascript" src="<?PHP echo base_url() ?>public/alerta/lib/alertify.js"></script> 
    <script type="text/javascript" src="<?PHP echo base_url() ?>public/js/push.min.js"></script>
</head>
<body style="background-image: url(<?php echo base_url() . '/public/img/woman-1594711_1920.jpg'; ?>)">

    <div class="col-lg-6">
 <script type="text/javascript">

            function alerta() {
                //un alert
                alertify.alert("Contraseña actulizada correctamente", function () {
                    location.href = '<?= base_url() ?>iniciar';
                });
            }
            alerta();

        </script>

  
    </div> 
</body>

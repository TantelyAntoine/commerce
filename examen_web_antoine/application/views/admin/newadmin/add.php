<!DOCTYPE html>
<html class="no-focus">
    <head>
        <meta charset="utf-8">
        <title>Nouveau admin</title>
        <meta name="description" content="OneUI - Admin Dashboard Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
        <link rel="shortcut icon" href="assets/img/favicons/favicon.png">

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/plugins/slick/slick.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/plugins/slick/slick-theme.min.css">

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" id="css-main" href="<?php echo base_url(); ?>assets/css/oneui.css">

    </head>
    <body>
        <div id="page-container" class="side-scroll header-navbar-fixed">


            <?php require_once(APPPATH . 'views/admin/header.php'); ?>
            <main id="main-container">
                <div class="content">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php if ($this->session->flashdata('SUCCESSMSG')) { ?>
                                <div role="alert" class="alert alert-success">
                                    <button data-dismiss="alert" class="close" type="button"><span class="sr-only">Fermer</span></button>
                                    <strong>Effectué!</strong>
                                    <?= $this->session->flashdata('SUCCESSMSG') ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="block">
                                <div class="block-header">
                                    <ul class="block-options">
                                        <li>
                                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                        </li>
                                    </ul>
                                    <h3 class="block-title">Nouveau admin</h3>
                                </div>
                                <div class="block-content block-content-full bg-gray-lighter ">
                                    <form class="form-horizontal"  method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Nom</label>
                                            <div class="col-md-7">
                                                <input class="form-control" type="text" id="" value="<?php echo set_value('first_name'); ?>" name="first_name" placeholder="Nom" >
                                                <div style="margin-top: 0px; color: red;"><?= form_error('first_name'); ?></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Prénom</label>
                                            <div class="col-md-7">
                                                <input class="form-control" type="text" id="" value="<?php echo set_value('last_name'); ?>" name="last_name" placeholder="Prénom" >
                                                <div style="margin-top: 0px; color: red;"><?= form_error('last_name'); ?></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">E-mail</label>
                                            <div class="col-md-7">
                                                <input class="form-control" type="text" id="" value="<?php echo set_value('email'); ?>" name="email" placeholder="E-mail" >
                                                <div style="margin-top: 0px; color: red;"><?= form_error('email'); ?></div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Mot de passe</label>
                                            <div class="col-md-7">
                                                <input class="form-control" type="password" id="" value="<?php echo set_value('password'); ?>" name="password" placeholder="Mot de passe" >
                                                <div style="margin-top: 0px; color: red;"><?= form_error('password'); ?></div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Confirmer le mot de passe</label>
                                            <div class="col-md-7">
                                                <input class="form-control" type="password" id="" value="<?php echo set_value('cpassword'); ?>" name="cpassword" placeholder="Mot de passe" >
                                                <div style="margin-top: 0px; color: red;"><?= form_error('cpassword'); ?></div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Téléphone</label>
                                            <div class="col-md-7">
                                                <input class="form-control" type="text" id="" value="<?php echo set_value('mobile'); ?>" name="mobile" placeholder="Téléphone" >
                                                <div style="margin-top: 0px; color: red;"><?= form_error('mobile'); ?></div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-8 col-md-offset-2">
                                                <button class="btn btn-sm btn-primary"  type="submit"><i class="fa fa-check"></i>Enregistrer</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </main>
            <?php require_once(APPPATH . 'views/admin/footer.php'); ?>
        </div>

        <script src="<?php echo base_url(); ?>assets/js/core/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/core/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/core/jquery.appear.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/core/jquery.countTo.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/core/jquery.placeholder.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/core/js.cookie.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/app.js"></script>

    </body>
</html>
<script>
    $('document').ready(function ()
    {
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#previewimage').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#uploadFile").change(function () {
            readURL(this);
        });

    });
</script>
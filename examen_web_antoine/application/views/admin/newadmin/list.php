<!DOCTYPE html>
<html class="no-focus"> 
    <head>
        <meta charset="utf-8">
        <title>Liste des admin</title>
        <meta name="description" content="OneUI - Admin Dashboard Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
        <link rel="shortcut icon" href="assets/img/favicons/favicon.png">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/js/plugins/datatables/jquery.dataTables.min.css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" id="css-main" href="<?= base_url(); ?>assets/css/oneui.css">

    </head>
    <body>
        <div id="page-container" class="side-scroll header-navbar-fixed">
            <?php require_once(APPPATH . 'views/admin/header.php'); ?>

            <main id="main-container">
                <div class="content">
                    <?php if ($this->session->flashdata('SUCCESSMSG')) { ?>
                        <div role="alert" class="alert alert-success">
                            <button data-dismiss="alert" class="close" type="button"><span class="sr-only">Fermer</span></button>
                            <strong>Effectué!</strong>
                            <?= $this->session->flashdata('SUCCESSMSG') ?>
                        </div>
                    <?php } ?>
                    <div class="block">
                        <div class="block-header">
                            <h3 class="block-title col-lg-6" style="text-align: left;">
                                Admin Report 
                            </h3>
                            <span class="col-lg-6" style="text-align: right;">
                            </span>
                        </div>
                        <div class="col-md-12" style="padding-top: 20px;"></div>
                        <div class="block-content">
                            <table class="table table-bordered table-striped js-dataTable-full">
                                <thead>
                                    <tr>
                                        <th>Numéro d'admin</th>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>E-mail</th>
                                        <th>Mot de passe</th>
                                        <th>Téléphone</th>
                                        <th>Créer par admin numéro</th>
                                        <th>Date de création</th>

                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($admin_list as $value) {
                                        ?>
                                        <tr>
                                            <td><?= $value->id ?></td>
                                            <td style="text-transform: capitalize;"><?= $value->firstname ?></td>
                                            <td style="text-transform: capitalize;"><?= $value->lastname ?></td>
                                            <td><?= $value->email ?></td>
                                            <td><?= $value->password ?></td>
                                            <td><?= $value->mobile ?></td>
                                            <td><?= $value->created_by ?></td>

                                            <td><?= $value->created_date ?></td>
                                            <td>
                                                <a class="btn btn-danger btn-rounded btn-condensed btn-sm" href="<?= base_url() ?>account/admin-delete/<?= $value->id ?>" data-href="" data-toggle="tooltip" title="" data-original-title="Supprimer">
                                                    <span class="fa fa-times" title="delete"></span>
                                                </a>
                                            </td>
                                        </tr>
<?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>



                </div>

            </main>


<?php require_once(APPPATH . 'views/admin/footer.php'); ?>
        </div>
        <div class="modal fade" id="header-modal" aria-hidden="true"></div>

        <script src="<?= base_url(); ?>assets/js/core/jquery.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/core/bootstrap.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/core/jquery.appear.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/core/jquery.countTo.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/core/jquery.placeholder.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/core/js.cookie.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/app.js"></script>
        <script src="<?= base_url(); ?>assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/pages/base_tables_datatables.js"></script>
        <script src="<?= base_url(); ?>assets/js/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/plugins/bootstrap-datetimepicker/moment.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>


    </body>
</html>
<script>
    jQuery(function () {
        App.initHelpers(['datepicker', 'datetimepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider', 'tags-inputs']);
    });
</script>
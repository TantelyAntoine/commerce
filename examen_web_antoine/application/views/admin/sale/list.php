<!DOCTYPE html>
<html class="no-focus"> 
    <head>
        <meta charset="utf-8">

        <title>Rapport du vente</title>

        <meta name="description" content="OneUI - Admin Dashboard Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
        <link rel="shortcut icon" href="assets/img/favicons/favicon.png">

        <!-- Web fonts -->
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
                            <strong>Effectué</strong>
                            <?= $this->session->flashdata('SUCCESSMSG') ?>
                        </div>
                    <?php } ?>
                    <div class="block">

                        <div class="block-header">
                            <h3 class="block-title col-lg-6" style="text-align: left;">
                                Rapport du vente
                            </h3>
                            <span class="col-lg-6" style="text-align: right;">
                            </span>
                        </div>
                        <form method="post">                 
                            <div class="col-md-12">
                                <div class="col-md-3">
                                    <select class="form-control" name="buyer_name" >
                                        <option value="">Choisir acheteur</option>
                                        <?php
                                        foreach ($Buyer_Name as $buyer) {
                                            ?>
                                            <option value="<?= $buyer->buyer_name ?>"<?php if (@$buyer->buyer_name == @$buyername) echo "séléctionné"; ?>><?= $buyer->buyer_name ?></option>
                                        <?php } ?>

                                    </select>
                                </div>
                                <div class="col-md-2"><input id="example-datepicker1" class="js-datepicker form-control" name="start_date" data-date-format="yyyy/mm/dd" placeholder="Choisir date de début" type="text"></div>
                                <div class="col-md-2"><input id="example-datepicker1" class="js-datepicker form-control" name="end_date" data-date-format="yyyy/mm/dd" placeholder="Choisir date fin" type="text"></div>
                                <div class="col-md-3">
                                    <select class="form-control" name="created_name" >
                                        <option value="">Choisir créer par</option>
                                        <option value="0" <?php if (@$created_names == '0') echo "selected" ?>>Site web</option>
                                        <option value="1" <?php if (@$created_names == '1') echo "selected" ?>>Admin</option>
                                    </select>
                                </div>
                                <div class="col-md-2"><input class="btn btn-success" value="Rechercher" type="submit"></div>
                            </div>
                        </form>        
                        <div class="col-md-12" style="padding-top: 20px;"></div>
                        <div class="block-content">
                            <table class="table table-bordered table-striped js-dataTable-full">
                                <thead>
                                    <tr>
                                        <th>Nombre de commande</th>
                                        <th>Date de commande</th>
                                        <th>Date exigible</th>
                                        <th>Créer par</th>
                                        <th>Nom d'acheteur</th>
                                        <th>Espéce remise</th>
                                        <th>Montant splendide</th>
                                        <th>Numéro d'article</th>
                                        <th>Net</th>
                                        <th>Statut</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($sale_list as $value) {
                                        ?>
                                        <tr>
                                            <td><?= $value->id ?></td>
                                            <td><?= $value->issue_date; ?></td>
                                            <td><?= $value->due_date ?></td>
                                            <td><?php
                                                if (($value->created_by) == 0) {
                                                    echo 'Website';
                                                } else {
                                                    echo "Admin";
                                                }
                                                ?>
                                            </td>
                                            <td><?= $value->buyer_name ?></td>
                                            <td><?= $value->cash_discount ?></td>
                                            <td><?= $value->grand_amount ?></td>
                                            <td><?= $value->total_quantity ?></td>
                                            <td><?= $value->grand_amount ?></td>
                                            <td>
                                                <?php
                                                if ($value->shipped_status == 0) {
                                                    ?>
                                                    <span class="label label-warning">Commande placé</span>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <span class="label label-success">Transporté</span></td>
                                            <?php }
                                            ?>


                                            <td>
                                                <a class="btn-sm editField" href="<?= base_url(); ?>account/sale-detail/<?= $value->id ?>" data-toggle="tooltip" data-placement="top" title="" data-product_id="71" data-href="" data-type="sale_detail" data-original-title="Voir detail du vente">
                                                    <span class="fa fa-eye"></span>
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
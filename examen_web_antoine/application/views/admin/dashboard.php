<?php
if ($this->session->email == "") {
    redirect(login_controllers);
}
?>
<!DOCTYPE html>
<html class="no-focus">
    <head>
        <meta charset="utf-8">
        <title>Tableau de bord</title>
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

            <?php ?>
            <?php require_once('header.php'); ?>
            <main id="main-container" style="background: #ffffff;">
                <div class="content bg-image overflow-hidden" style="background-image: url('<?php echo base_url(); ?>/assets/img/photos/photo3@2x.jpg');">
                    <div class="push-50-t push-15">
                        <h1 class="h2 text-white animated zoomIn">Tableau de bord</h1>
                        <h2 class="h5 text-white-op animated zoomIn">Bienvenue administrateur</h2>
                    </div>
                </div>
                <div class="content bg-white border-b">
                    <div class="row items-push text-uppercase">
                        <div class="col-xs-6 col-sm-3">
                            <div class="font-w700 text-gray-darker animated fadeIn">Vente du produit</div>
                            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i>Aujourd'hui</small></div>
                            <a class="h2 font-w300 text-primary animated flipInX" ><?= $todaysale ?></a>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="font-w700 text-gray-darker animated fadeIn">Vente total</div>
                            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i>Tous les temps</small></div>
                            <a class="h2 font-w300 text-primary animated flipInX" ><?= $counttotalsum ?></a>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="font-w700 text-gray-darker animated fadeIn">Gain total</div>
                            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> Tous les temps</small></div>
                            <a class="h2 font-w300 text-primary animated flipInX" >
                                Rs.    <?php
                                foreach ($totalsum as $sum) {
                                    echo $sum->sum;
                                }
                                ?>
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="font-w700 text-gray-darker animated fadeIn">Vente moyenne</div>
                            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i>Tous les temps</small></div>
                            <a class="h2 font-w300 text-primary animated flipInX" >
                                Rs.  <?php
                                foreach ($totalsum as $avg) {
                                    $sum = $avg->sum;
                                    echo "$sum / $counttotalsum";
                                }
                                ?>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <div class="block">
                        <div class="block-header">
                            <h3 class="block-title col-lg-6" style="text-align: left;">
                                Rapport du vente aujourd'hui 
                            </h3>
                            <span class="col-lg-6" style="text-align: right;">
                            </span>
                        </div>
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
                                        <th>Grand montant</th>
                                        <th>Numéro d'article</th>
                                        <th>Net</th>
                                        <th>Statut</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (!empty($todaysalelist)) {
                                        foreach ($todaysalelist as $value) {
                                            ?>
                                            <tr>
                                                <td><?= $value->id ?></td>
                                                <td><?= $value->issue_date; ?></td>
                                                <td><?= $value->due_date ?></td>
                                                <td><?php
                                                    if (($value->created_by) == 0) {
                                                        echo 'Site web';
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
                                        <?php
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>



                    <div class="block">

                        <div class="block-header">
                            <h3 class="block-title col-lg-6" style="text-align: left;">
                                Nom d'utilisateur enregistrer aujourd'hui
                            </h3>
                            <span class="col-lg-6" style="text-align: right;">
                            </span>
                        </div>
                        <div class="col-md-12" style="padding-top: 20px;"></div>
                        <div class="block-content">
                            <table class="table table-bordered table-striped js-dataTable-full">
                                <thead>
                                    <tr>
                                        <th>Numéro du client</th>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>E-mail</th>
                                        <th>Mot de passe</th>
                                        <th>Téléhone</th>
                                        <th>Créer par</th>
                                        <th>Date de création</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (!empty($customer_list)) {
                                        foreach ($customer_list as $value) {
                                            ?>
                                            <tr>
                                                <td><?= $value->customer_id ?></td>
                                                <td style="text-transform: capitalize;"><?= $value->first_name ?></td>
                                                <td style="text-transform: capitalize;"><?= $value->last_name ?></td>
                                                <td><?= $value->email ?></td>
                                                <td><?= $value->password ?></td>
                                                <td><?= $value->phone ?></td>
                                                <td><?php
                                                    if (($value->created_by) == 0) {
                                                        echo 'Site web';
                                                    } else {
                                                        echo "Admin";
                                                    }
                                                    ?>
                                                </td>
                                                <td><?= $value->created_date ?></td>
                                            </tr>
                                        <?php
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
        </div>
    </main>
    <div class="modal fade" id="header-modal" aria-hidden="true"></div>
<?php require_once ('footer.php'); ?>
</div>
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
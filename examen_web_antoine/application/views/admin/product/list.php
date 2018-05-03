<html class="no-focus">
    <head>
        <meta charset="utf-8">

        <title>Liste des produits</title>

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
                            <strong>Effectué</strong>
                        </div>
                    <?php } ?>
                    <div class="block">

                        <div class="block-header">
                            <h3 class="block-title col-lg-6" style="text-align: left;">
                                Liste des produits
                            </h3>
                            <span class="col-lg-6" style="text-align: right;">
                                <a class="btn btn-default btn-rounded btn-condensed btn-sm" data-toggle="tooltip" title="Ajouter un nouveau produit" href="<?= base_url(); ?>account/product-add"><span title="Ajouter nouveau produit"class="fa fa-plus"></span></a>
                            </span>
                        </div>
                        <form method="get">                 
                            <div class="col-md-12">
                                <div class="col-md-3"><input class="form-control" type="text" value="" name="product_code" placeholder="Entrer le code du produit" ></div>
                                <div class="col-md-3"><input class="form-control" type="text" value="" name="product_description" placeholder="Entrer le description" ></div>
                                <div class="col-md-3">
                                    <select class="form-control" name="product_category" >
                                        <option value="">Choisir catégorie</option>
                                        <?php
                                        foreach ($category_list as $post) {
                                            ?>
                                            <option value="<?= $post->id ?>"><?= $post->category_name ?></option>
                                        <?php }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-3"><input class="btn btn-success" name="submit" value="Rechercher" type="submit"></div>
                            </div>
                        </form>        
                        <div class="col-md-12" style="padding-top: 20px;"></div>
                        <div class="block-content">
                            <table class="table table-bordered table-striped js-dataTable-full">
                                <thead>
                                    <tr>
                                        <th>Code</th>
                                        <th>Image</th>
                                        <th>Nom</th>
                                        <th>Categorie</th>
                                        <th>Description</th>
                                        <th>Prix</th>
                                        <th>Créer</th>
                                        <th>Modifié</th>
                                        <th>Statut</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($product_list as $post) {
                                        ?>
                                        <tr>
                                            <td><?= $post->product_code ?></td>
                                            <td><img src="<?= base_url(); ?>/upload/product/<?= $post->id ?>/<?= $post->product_image ?>" width="100" height="100"></td>
                                            <td><?= $post->product_name ?>&nbsp;&nbsp;<a href="javascript:" class="btn-sm editField" data-toggle="tooltip"  data-placement="top" title="Modifier le nom" data-product_id="<?= $post->id ?>" data-href="<?= site_url('account/signle-product-edit') ?>" data-type="product_name"><span class="fa fa-pencil"></span></a></td>
                                            <td style="text-transform: capitalize;"><?php
                                                foreach ($category_list as $value) {
                                                    if ($value->id == $post->category_id) {
                                                        echo $value->category_name;
                                                    }
                                                }
                                                ?>
                                                &nbsp;&nbsp;<a href="javascript:" class="btn-sm editField" data-toggle="tooltip"  data-placement="top" title="Modifier le ctégorie" data-product_id="<?= $post->id ?>" data-href="<?= site_url('account/signle-product-edit') ?>" data-type="product_category"><span class="fa fa-pencil"></span></a></td>
                                            <td><?= $post->product_description ?>&nbsp;&nbsp;<a href="javascript:" class="btn-sm editField" data-toggle="tooltip"  data-placement="top" title="Modifier la Description" data-product_id="<?= $post->id ?>" data-href="<?= site_url('account/signle-product-edit') ?>" data-type="product_description"><span class="fa fa-pencil"></span></a></td>
                                            <td><?= $post->product_price ?></td>
                                            <td><?= $post->created_date ?></td>
                                           <td> <?= $post->modified_date ?></td>
                                            <td><?php
                                            if ($post->status == "0") {
                                                echo "Active";
                                            } else {
                                                echo "Inactive";
                                            }
                                                ?>
                                            </td>
                                            <td>
                                                <button class="btn btn-default btn-rounded btn-condensed btn-sm product_detail" id="<?= $post->id ?>"  data-toggle="tooltip" title="Voir le produit" ><span title="Voir le sous catégorie"class="fa fa-eye"></span></button>
                                                <a class="btn btn-default btn-rounded btn-condensed btn-sm" type="button" data-toggle="tooltip"  title="Modifier" href="<?= base_url(); ?>account/product-edit/<?= $post->id ?>"><i class="fa fa-pencil"></i></a>
    <?php if ($post->status == '1') { ?>
                                                    <a href="<?= base_url() . 'account/product-status/' . $post->id . '/0' ?>" data-toggle="tooltip" title="Inactive" class="btn btn-default btn-rounded btn-condensed btn-sm changestatus"><span  class="fa fa-ban" title="Inactive"></span></a>
                                                <?php } else { ?>
                                                    <a href="<?= base_url() . 'account/product-status/' . $post->id . '/1' ?>" data-toggle="tooltip" title="Active" class="btn btn-default btn-rounded btn-condensed btn-sm changestatus"><span class="fa fa-check-circle-o" title="Active"></span></a>
                                                <?php } ?>
                                                <a href="<?= base_url() . 'account/product-delete/' . $post->id ?>" data-href="" class="btn btn-danger btn-rounded btn-condensed btn-sm delete"  data-toggle="tooltip" title="Supprimer" ><span class="fa fa-times" title="Supprimer"></span></a>
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
    </body>
</html>
<script>

    $('body').delegate('.product_detail', 'click', function () {
        var product_id = $(this).attr('id');
        $.ajax({
            type: "POST",
            url: "<?= base_url(); ?>account/product-detail",
            data: {product_id: product_id},
            dataType: "json",
            success: function (data) {
                $("#header-modal").html("<div class='modal-dialog modal-lg'>" +
                        "<div class='modal-content'>" +
                        "<div class='modal-header'>" +
                        "<button type='' class='close' data-dismiss='modal' aria-hidden='true'><i class='icons-office-52'>Femer</i></button>" +
                        "<h4 class='modal-title'><strong>Detail du produit</strong></h4>" +
                        "</div>" +
                        "<div class='modal-body' id='modal_body'>" +
                        "<div class='row'>" +
                        "<div class='col-md-4'><label class='control-label'>Code du produit</label></div>" +
                        "<div class='col-md-8'>" + data.product_code + "</div>" +
                        "</div>" +
                        "<div class='row'>" +
                        "<div class='col-md-4'><label class='control-label'>Produit</label></div>" +
                        "<div class='col-md-8'>" + data.product_name + "</div>" +
                        "</div>" +
                        "<div class='row'>" +
                        "<div class='col-md-4'><label class='control-label'>Description</label></div>" +
                        "<div class='col-md-8'>" + data.product_description + "</div>" +
                        "</div>" +
                        "<div class='row'>" +
                        "<div class='col-md-4'><label class='control-label'>Categorie</label></div>" +
                        "<div class='col-md-8'>" + data.category_list + "</div>" +
                        "</div>" +
                        "<div class='row'>" +
                        "<div class='col-md-4'><label class='control-label'>Sous Categorie</label></div>" +
                        "<div class='col-md-8'>" + data.sub_cate + "</div>" +
                        "</div>" +
                        "</div>" +
                        "<div class='modal-footer'> " +
                        "<button type='button' class='btn btn-danger  btn-embossed bnt-square' data-dismiss='modal'>Annuler</button>" +
                        "</div>" +
                        "</div>" +
                        "</div>"
                        );
                $('#header-modal').modal('show');
            }
        });

    });
    $('body').delegate('.editField', 'click', function () {

        var product_id = $(this).attr('data-product_id');
        var posturl = $(this).attr('data-href');
        var type = $(this).attr('data-type');
        $.ajax({
            type: "POST",
            url: posturl,
            data: {product_id: product_id, type: type},
            dataType: "json",
            success: function (data) {
                var contact = data['html'];
                var name = data['name'];
                $("#header-modal").html("<div class='modal-dialog modal-lg'>" +
                        "<div class='modal-content'>" +
                        "<div class='modal-header'>" +
                        "<button type='' class='close' data-dismiss='modal' aria-hidden='true'><i class='icons-office-52'>Fermer</i></button>" +
                        "<h4 class='modal-title'><strong>Modifier le produit</strong></h4>" +
                        "</div>" +
                        "<div class='modal-body' id='modal_body'>" +
                        "<div class='row text-center'>" +
                        "<div class='col-md-2'><label class='control-label'>" + name + "</label></div>" +
                        "<div class='col-md-8'>" + contact + "</div>" +
                        "</div>" +
                        "<div class='col-md-2'></div>" +
                        "<div class='col-md-8 error_data' style='color: red;'></div>" +
                        "</div>" +
                        "<div class='modal-footer'> " +
                        "<button type='button' class='btn btn-success product_edit_submit_data'>Submit</button>" +
                        "<button type='button' class='btn btn-danger  btn-embossed bnt-square' data-dismiss='modal'>Annuler</button>" +
                        "</div>" +
                        "</div>" +
                        "</div>"
                        );
                $('#header-modal').modal('show');
            }
        });
    });

    $('#header-modal').delegate('.product_edit_submit_data', 'click', function () {
        var product_value = $('.product_value').val();
        if (product_value == "")
        {
            $('.error_data').html("This Field is Required!!");
        } else
        {
            var product_id = $('.product_value').attr('id');
            var posturl = 'product_edit_submit';
            var type = $('.product_value').attr('data-type');
            $.ajax({
                type: "POST",
                url: posturl,
                data: {product_id: product_id, product_value: product_value, type: type},
                dataType: "json",
                success: function (data) {
                    if (data.success)
                    {
                        location.reload();
                    }
                }
            });
        }

    });

</script>
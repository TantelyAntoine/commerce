<?php
if ($_SESSION['email'] == "") {
    redirect(login);
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

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/plugins/slick/slick.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/plugins/slick/slick-theme.min.css">

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" id="css-main" href="<?php echo base_url(); ?>assets/css/oneui.css">

    </head>
    <body>
        <div id="page-container" class="side-scroll header-navbar-fixed">

            <?php require_once ('sidebar.php'); ?>
            <?php require_once('header.php'); ?>
            <main id="main-container">
                <div class="content bg-image overflow-hidden" style="background-image: url('<?php echo base_url(); ?>assets/img/photos/photo3@2x.jpg');">
                    <div class="push-50-t push-15">
                        <h1 class="h2 text-white animated zoomIn">Produit ajouté</h1>
                        <h2 class="h5 text-white-op animated zoomIn">Bienvenue administrateur</h2>
                    </div>
                </div>
                <div class="content bg-white border-b">
                    <div class="row items-push text-uppercase">
                        <div class="col-xs-6 col-sm-3">
                            <div class="font-w700 text-gray-darker animated fadeIn"></div>
                            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i>Aujourd'hui</small></div>
                            <a class="h2 font-w300 text-primary animated flipInX" href="base_comp_charts.html">300</a>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="font-w700 text-gray-darker animated fadeIn">Produit ajouté</div>
                            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i>Ce mois</small></div>
                            <a class="h2 font-w300 text-primary animated flipInX" href="base_comp_charts.html">8,790</a>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="font-w700 text-gray-darker animated fadeIn">Total Product</div>
                            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> Tous les temps</small></div>
                            <a class="h2 font-w300 text-primary animated flipInX" href="base_comp_charts.html">93,880</a>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="font-w700 text-gray-darker animated fadeIn">Remise du produit</div>
                            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i>Tous les temps</small></div>
                            <a class="h2 font-w300 text-primary animated flipInX" href="base_comp_charts.html">270</a>
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
                                    <h3 class="block-title">Nouveau produit enregistrer</h3>
                                </div>
                                <div class="block-content block-content-full bg-gray-lighter ">
                                    <form class="form-horizontal"  method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Catégorie du produit</label>
                                            <div class="col-md-7">
                                                <select class="form-control" name="product_category" >
                                                    <option></option>
                                                    <option>Téléphone</option>
                                                    <option>Ordinateur</option>
                                                    <option>Télévision</option>
                                                    <option>Décodeur</option>
                                                </select>
                                                <div style="margin-top: 0px; color: red;"><?= form_error('product_category'); ?></div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Produit</label>
                                            <div class="col-md-7">
                                                <input class="form-control" type="text" id="product_name" value="<?php echo set_value('product_name'); ?>" name="product_name" placeholder="Produit" >
                                                <div style="margin-top: 0px; color: red;"><?= form_error('product_name'); ?></div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Image</label>
                                            <div class="col-md-7">
                                                <img id="previewimage" onclick="$('#uploadFile').click();" src="<?php echo base_url(); ?>images/product_image.gif" style="cursor: pointer;height: 210px;width: 210px;position: relative;z-index: 10;"/>
                                                <input type="file" id="uploadFile" name="product_image" style="position: absolute; margin: 0px auto; visibility: hidden;" accept="image/*" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Prix<span class="text-danger">*</span></label>
                                            <div class="col-md-7">
                                                <input class="form-control" type="text" value="<?php echo set_value('product_price'); ?>" id="product_price" name="product_price" placeholder="Prix"  >
                                                <div style="margin-top: 0px; color: red;"><?= form_error('product_price'); ?></div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Remise du produit<span class="text-danger"></span></label>
                                            <div class="col-md-7">
                                                <input class="form-control" type="text" value="<?php echo set_value('product_discount'); ?>" id="product_discount" name="product_discount" placeholder="Remise du produit" >
                                                <div style="margin-top: 0px; color: red;"><?= form_error('product_discount'); ?></div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Lien du produit</label>
                                            <div class="col-md-7">
                                                <input class="form-control" type="text" value="<?php echo set_value('product_link'); ?>" id="product_link"  name="product_link" placeholder="produit.com" >
                                                <div style="margin-top: 0px; color: red;"><?= form_error('product_link'); ?></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Description</label>
                                            <div class="col-md-7">
                                                <textarea class="form-control input-lg" id="product_description"  name="product_description" placeholder="Description" rows="4" ><?php echo set_value('product_description'); ?></textarea>
                                                <div style="margin-top: 0px; color: red;"><?= form_error('product_description'); ?></div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-8 col-md-offset-2">
                                                <button class="btn btn-sm btn-primary" name="submit" type="submit"><i class="fa fa-check"></i>Envoyer</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </main>
            <?php require_once ('footer.php'); ?>
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
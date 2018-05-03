<!DOCTYPE html>
<html class="no-focus">
    <head>
        <meta charset="utf-8">
        <title>Ajouter un produit</title>
        <meta name="description" content="OneUI - Admin Dashboard Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
        <link rel="shortcut icon" href="assets/img/favicons/favicon.png">

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/plugins/slick/slick.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/plugins/slick/slick-theme.min.css">

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" id="css-main" href="<?php echo base_url(); ?>assets/css/oneui.css">
        <link rel="stylesheet" id="css-main" href="<?php echo base_url(); ?>assets/js/jquery.multiselect.css">

    </head>
    <body>
        <div id="page-container" class="side-scroll header-navbar-fixed">


            <?php require_once(APPPATH . 'views/admin/header.php'); ?>
            <main id="main-container">
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
                                    <h3 class="block-title">Nouveau produit</h3>
                                </div>
                                <div class="block-content block-content-full bg-gray-lighter ">
                                    <form class="form-horizontal"  method="post" enctype="multipart/form-data">

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Code du produit &nbsp;&nbsp;<a style="cursor: pointer;" class="AutoGenerate">Générer automatique</a></label>
                                            <div class="col-md-7">
                                                <input class="form-control" type="text" id="product_code" value="<?php echo set_value('product_code'); ?>" name="product_code" placeholder="Code du produit" >
                                                <div style="margin-top: 0px; color: red;"><?= form_error('product_code'); ?></div>
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
                                            <label class="col-md-2 control-label">Description</label>
                                            <div class="col-md-7">
                                                <textarea class="form-control input-lg" id="product_description"  name="product_description" placeholder="Description" rows="4" ><?php echo set_value('product_description'); ?></textarea>
                                                <div style="margin-top: 0px; color: red;"><?= form_error('product_description'); ?></div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Categorie</label>
                                            <div class="col-md-7">
                                                <select class="form-control" name="product_category" id="subcategoryview" >
                                                    <option value="">Choisir categorie</option>
                                                    <?php
                                                    foreach ($category_list as $post) {
                                                        ?>
                                                        <option value="<?= $post->id ?>"><?= $post->category_name ?></option>
                                                    <?php }
                                                    ?>

                                                </select>
                                                <div style="margin-top: 0px; color: red;"><?= form_error('product_category'); ?></div>
                                            </div>
                                        </div>

                                        <div class="form-group" >
                                            <div id="subcat">
                                                <label class="col-md-2 control-label">Sous Categorie</label>
                                                <div class="col-md-7">
                                                    <select class="form-control" multiple="" name="sub_category_id[]" >
                                                    </select>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="form-group">
                                            <label  class="col-md-2 control-label">Couleur<span class="text-danger"></span></label>
                                            <div class="col-md-7">
                                                <select  class="form-control" name="colorproduct[]"  multiple id="colorproduct">
                                                    <?php
                                                    foreach ($color_list as $post) {
                                                        ?>
                                                        <option value="<?= $post->id ?>"><?= $post->color_name; ?></option>
                                                    <?php }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label  class="col-md-2 control-label">Taille<span class="text-danger"></span></label>
                                            <div class="col-md-7">
                                                <select   class="form-control" name="sizeproduct[]"  multiple id="sizeproduct">
                                                    <?php
                                                    foreach ($size_list as $post) {
                                                        ?>
                                                        <option value="<?= $post->id ?>"><?= $post->size; ?></option>
                                                    <?php }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label  class="col-md-2 control-label">Relation du Produit<span class="text-danger"></span></label>
                                            <div class="col-md-7">
                                                <select  class="form-control" name="relatedproduct[]"  multiple id="relatedproduct">
                                                    <?php
                                                    foreach ($product_list as $post) {
                                                        ?>
                                                        <option value="<?= $post->id ?>"><?= $post->product_name ?></option>
                                                    <?php }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>  
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Type du produit</label>
                                            <div class="col-md-7">
                                                <select class="form-control" name="product_type" >
                                                    <option value="">Choisir type</option>
                                                    <option value="1">Le plus récent</option>
                                                    <option value="2">Fréquenté</option>
                                                    <option value="3">Qualité</option>

                                                </select>
                                                <div style="margin-top: 0px; color: red;"><?= form_error('product_type'); ?></div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Image</label>
                                            <div class="col-md-7">
                                                <img id="previewimage" onclick="$('#uploadFile').click();" src="<?php echo base_url(); ?>images/product_image.gif" style="cursor: pointer;height: 210px;width: 210px;position: relative;z-index: 10;"/>
                                                <input type="file" id="uploadFile" name="product_image" style="position: absolute; margin: 0px auto; visibility: hidden;" accept="image/*" />
                                                <div style="margin-top: 0px; color: red;"><?= form_error('product_image'); ?></div>
                                            </div>
                                        </div>
                                        <hr><div style="text-align: center; font-weight: 100; font-size: 20px;">Detail de prix du produit</div><hr>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Prix unitaire(Ariary)</label>
                                            <div class="col-md-7">
                                                <input class="form-control" type="text"  name="rate" value="<?php echo set_value('rate'); ?>" placeholder="Prix unitaire"  id="rate">
                                                <div style="margin-top: 0px; color: red;"><?= form_error('rate'); ?></div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Quantité<span class="text-danger"></span></label>
                                            <div class="col-md-7">
                                                <input class="form-control quantity" type="text" id="quantity" name="quantity" placeholder="Quantité"  >
                                                <div style="margin-top: 0px; color: red;"></div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Montant brut(Ariary)<span class="text-danger"></span></label>
                                            <div class="col-md-7">
                                                <input class="form-control" type="text" readonly="" value="" id="gross" name="gross_amount" placeholder="Montant brut"  >
                                                <div style="margin-top: 0px; color: red;"></div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Remise(%)<span class="text-danger"></span></label>
                                            <div class="col-md-7">
                                                <input class="form-control discount" type="text" value="<?php echo set_value('product_discount'); ?>" id="discount" name="product_discount" placeholder="Remise" >
                                                <div style="margin-top: 0px; color: red;"><?= form_error('product_discount'); ?></div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Montant net(Ariary)<span class="text-danger"></span></label>
                                            <div class="col-md-7">
                                                <input class="form-control" type="text" readonly="" value="" id="net" name="net_amount" placeholder="Montant net" >
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-8 col-md-offset-2">
                                                <button class="btn btn-sm btn-primary" name="submit" type="submit"><i class="fa fa-check"></i>Ajouter</button>
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
        <script src="<?php echo base_url(); ?>assets/js/jquery.multiselect.js"></script>


    </body>
</html>
<script>

                                                    $('#relatedproduct').multiselect({
                                                        columns: 1,
                                                        placeholder: 'Aucun séléctionné',
                                                        search: true,
                                                        selectAll: true
                                                    });
                                                    $('#colorproduct').multiselect({
                                                        columns: 1,
                                                        placeholder: 'Aucun séléctionné',
                                                        search: true,
                                                        selectAll: true
                                                    });
                                                    $('#sizeproduct').multiselect({
                                                        columns: 1,
                                                        placeholder: 'Aucun séléctionné',
                                                        search: true,
                                                        selectAll: true
                                                    });

</script>
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

        $(".AutoGenerate").click(function () {

        });

        $('.AutoGenerate').bind("click", function () {
            $.post("<?php echo base_url() . 'account/product/product-code' ?>", {}, function (data) {
                $('#product_code').val(data);
            });
        });

        $('#subcategoryview').change(function (event)
        {
            var category_id = $(this).val()
            $.ajax({
                url: '<?= site_url('account/subcategory_view') ?>',
                data: "category_id=" + category_id,
                type: "post",
                dataType: "json",
                success: function (data) {
                    $('#subcat').html(data.html);
                }
            });
        });




        var quantity_blur = function ()
        {
            var quantity = $('#quantity').val().trim();
            if (quantity === '' || isNaN(quantity))
            {
                $('#quantity').val('1');
                quantity = '1';
            }

            var rate = parseFloat($('#rate').val());
            var gross = parseFloat(rate * quantity);

            $('#gross').val(gross.toFixed(2));
        };

        var discount_blur = function ()
        {
            var discount = $('#discount').val().trim();
            if (discount === '' || isNaN(discount))
            {
                $('#discount').val('0');
                discount = '0';
            }
            var gross = $('#gross').val();
            var net = gross - (gross * discount / 100);

            $('#net').val(net.toFixed(2));
        }

        $('.quantity').blur(quantity_blur);
        $('.discount').blur(discount_blur);






    });
</script>
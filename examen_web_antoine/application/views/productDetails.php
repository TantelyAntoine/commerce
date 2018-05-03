<!DOCTYPE HTML>
<html>
    <head>
        <title>Shop Tantely</title>
        <link href="<?= base_url(); ?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="<?= base_url(); ?>css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?= base_url(); ?>css/owl.carousel.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <script src="<?= base_url(); ?>js/jquery.min.js"></script>
        <script src="<?= base_url(); ?>js/simpleCart.min.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>js/bootstrap-3.1.1.min.js"></script>
        <script src="<?= base_url(); ?>js/imagezoom.js"></script>
        <script defer src="<?= base_url(); ?>js/jquery.flexslider.js"></script>
        <link rel="stylesheet" href="<?= base_url(); ?>css/flexslider.css" type="text/css" media="screen" />

        <script>
        $(window).load(function () {
            $('.flexslider').flexslider({
                animation: "slide",
                controlNav: "thumbnails"
            });
        });
        </script>
        <style>
            .active
            {
                border: 2px solid #0000ff;
            }
            .active_size
            {
                border: 2px solid #0000ff;
            }
            .modal-header {
                border-bottom: 0px solid #e5e5e5;
                min-height: 16.4286px;
                padding: 15px;
            }
        </style>

    </head>
    <body>
        <?php
        require_once 'header.php';
        ?>
        <div class="content">
            <div class="single">
                <div class="container">
                    <div class="single-grids">
                        <div class="col-md-4 single-grid1">
                            <h2>Categorie</h2>
                            <ul>
                                <?php
                                foreach ($category_list as $category) {
                                    ?>
                                    <li style="text-transform: capitalize;"><a href="<?= base_url(); ?>category/<?= $category->id; ?>"><?= $category->category_name ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                        <?php
                        foreach ($product_detail as $detail) {
                            $id = $detail->id;
                            $name = $detail->product_name;
                            $description = $detail->product_description;
                            $price = $detail->product_price;
                            $image = $detail->product_image;
                            ?>
                            <div class="col-md-4 single-grid">		
                                <div class="flexslider">
                                    <ul class="slides">
                                        <li data-thumb="<?= base_url(); ?>/upload/product/<?= $detail->id; ?>/<?= $detail->product_image; ?>">
                                            <div class="thumb-image"> <img src="<?= base_url(); ?>/upload/product/<?= $detail->id; ?>/<?= $detail->product_image; ?>" data-imagezoom="true" style="width: 100%; height: 425px;"> </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>	
                            <div class="col-md-4 single-grid simpleCart_shelfItem">		
                                <h3 style="text-transform: capitalize;"><?= $detail->product_name ?></h3>
                                <p><?= $detail->product_description ?></p>
                                <script>

                                    function setSizeValue(obj) {
                                        $('.size_data').removeClass('active');
                                        $("#" + obj).addClass('active');
                                        $("#productsize").val(obj.slice(1));
                                    }
                                </script>
                                <ul class="size">
                                    <h3>Taille</h3>

    <?php
    $size_data = explode(",", $detail->size_id);
    $size = $this->db->query("SELECT * FROM tbl_size");
    foreach ($size->result() as $value) {
        foreach ($size_data as $size_value) {
            if ($size_value == $value->id) {
                ?>
                                                <li>
                                                    <a class="size_data " id="s<?php echo $value->id; ?>" onclick="setSizeValue('s<?php echo $value->id; ?>')"><?php echo $value->size; ?></a>
                                                </li>

            <?php
            }
        }
    }
    ?>
                                </ul>
                                <script>

                                    function setColorValue(obj) {
                                        $('.color').removeClass('active');
                                        $("#" + obj).addClass('active');
                                        var id = obj;
                                        $("#productcolor").val(id);
                                    }
                                    function validateForm() {
                                        var color = document.forms["productform"]["color"].value;
                                        if (color == null || color == "") {
                                            alert("Couleur selectionné. Cliquez pour choisir.");
                                            return false;
                                        }

                                        var size = document.forms["productform"]["size"].value;
                                        if (size == null || size == "") {
                                            alert("Taille selectionné. Cliquez pour choisir.");
                                            return false;
                                        }
                                    }

                                </script>

                                <ul class="size">
                                    <h3>Couleur</h3>
                                    <?php
                                    $color_data = explode(",", $detail->color_id);
                                    $color = $this->db->query("SELECT * FROM tbl_color");
                                    foreach ($color->result() as $value) {
                                        foreach ($color_data as $color_value) {
                                            if ($color_value == $value->id) {
                                                ?>
                                                <li class="color" id="<?php echo $value->id; ?>" onclick="setColorValue('<?php echo $value->id; ?>')">
                                                    <div style=" height: 20px; width:20px; background-color:#<?php echo $value->colorcode; ?>;"></div>
                                                </li>
                                            <?php
                                            }
                                        }
                                    }
                                    ?>
                                </ul>

                                <div class="galry">
                                    <div class="prices">
                                        <h5 class="item_price">Rs. <?= $detail->product_price; ?></h5>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>

                                <div class="btn_form">

                                    <form action="<?= base_url(); ?>cart/add" method="post" name="productform" onsubmit="return validateForm()">
                                        <p class="qty"> Quantité :  </p>
                                        <input min="1" type="number" id="quantity" name="qty" value="1" class="form-control input-small">
                                        <input type="hidden" name="color" id="productcolor" value="" />
                                        <input type="hidden" name="size" id="productsize" value="" />
                                        <?php
                                        echo form_hidden('id', $id);
                                        echo form_hidden('name', $name);
                                        echo form_hidden('price', $price);
                                        echo form_hidden('image', $image);
                                        ?> 
                                        <button type="submit" class="add-cart item_add" name="action">AJOUTER AU PANIER</button>

                                        <?php ?>
                                    </form>

                                    <br>
                                </div>
                                <div class="tag">
                                    <p>Categorie : <a style="text-transform: capitalize; cursor: pointer;"> 
                                            <?php
                                            $cat = $this->db->query('SELECT * FROM tbl_category WHERE id =' . $detail->category_id . ' ');
                                            foreach ($cat->result() as $value) {
                                                echo $value->category_name;
                                            }
                                            ?>
                                        </a></p>
                                </div>
                            </div>

                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
                <div class="collpse">
                    <div class="container">
                        <div class="panel-group collpse" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Description
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <?= $detail->product_description ?>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFour">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                           Aide
                                        </a>
                                    </h4>
                                </div>

                            </div>
                        </div>   <?php } ?>
                </div>
            </div>
            <div class="related-products">
                <div class="container">
                    <h3>Relation du produit</h3>
                    <div class="product-model-sec single-product-grids">
                        <?php
                        foreach ($related_product_detail as $post) {
                            foreach ($post as $data) {

                                if (!empty($data)) {

                                    foreach ($data as $value) {

                                        $id = $value->id;
                                        $name = $value->product_name;
                                        $description = $value->product_description;
                                        $price = $value->product_price;
                                        $image = $value->product_image;
                                        ?>



                                        <div class="product-grid "  >
                                            <div class="more-product"><span> </span></div>						
                                            <div class="product-img b-link-stripe b-animate-go  thickbox">
                                                <img class=""   src="<?= base_url(); ?>/upload/product/<?= $value->id; ?>/<?= $value->product_image; ?>" style="width: 100%; height: 300px; cursor: pointer;"  alt="">
                                                <div class="b-wrapper quicklook" id="<?= $value->id; ?>" style="cursor: pointer;">
                                                    <h4 class="b-animate b-from-left  b-delay03">							
                                                        <button> + </button>
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="product-info simpleCart_shelfItem">
                                                <div class="product-info-cust prt_name">
                                                    <h4 style="color: #333333; text-transform: capitalize; font-size: 18px;"><?= $value->product_name; ?></h4>								
                                                    <span class="item_price">Rs. <?= $value->product_price; ?></span>
                                                    <div class="clearfix"> </div>
                                                </div>												
                                            </div>
                                        </div>
            <?php
            }
        } else {
            echo "Aucun article trouvé";
        }
    }
}
?>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="header-modal" aria-hidden="true" ></div>
<?php
require_once 'footer.php';
?>			
    </body>
</html>
<script type="text/javascript">

    $(document).ready(function () {

        $("#header-modal").delegate("#addcartform", "submit", function (e) {
            var color = document.forms["productformcart"]["color"].value;
            if (color == null || color == "") {
                alert("Couleur selectionné. Cliquez pour choisir.");
                return false;
            }

            var size = document.forms["productformcart"]["size"].value;
            if (size == null || size == "") {
                alert("Taille selectionné. Cliquez pou choisir.");
                return false;
            }
        });




        $("#header-modal").delegate(".data_values", "click", function (e) {
            var id = $(this).attr('id');
            $('.data_values').removeClass('active');
            $("#" + id).addClass('active');
            $("#colorProduct").val(id.slice(1));
        });
        $("#header-modal").delegate(".data_values_size", "click", function (e) {
            var id = $(this).attr('id');
            $('.data_values_size').removeClass('active');
            $("#" + id).addClass('active');
            $("#sizeProduct").val(id.slice(4));
        });
        $('.quicklook').click(function () {
            var product_id = $(this).attr('id');

            $.ajax({
                type: "POST",
                url: "<?= base_url(); ?>product/SingleProuctDetail",
                data: {product_id: product_id},
                dataType: "json",
                success: function (data) {
                    $("#header-modal").html(data.success);
                    $('#header-modal').modal('show');
                }

            });


        });

    });
</script>
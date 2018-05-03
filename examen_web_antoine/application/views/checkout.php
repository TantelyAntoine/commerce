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
    </head>
    <body>
        <?php require_once 'header.php'; ?>

        <div class="content">
            <div class="main-1">
                <div class="container">
                    <div class="register">
                        <form method="post"  action="<?php echo base_url(); ?>checkout">
                            <div class="register-top-grid">
                                <h3>Adresse</h3>

                                <div class="wow fadeInLeft" data-wow-delay="0.4s">
                                    <span>Nom</span>
                                    <input  type="text"  value="" required=""  placeholder="Nom" name="fname" >
                                </div>
                                <div class="wow fadeInLeft" data-wow-delay="0.4s">
                                    <span>Prénom</span>
                                    <input  type="text"  value=""  required="" placeholder="Prénom" name="lname" >
                                </div>
                                <div class="wow fadeInLeft" data-wow-delay="0.4s">
                                    <span>Téléphone</span>
                                    <input  type="text"  value=""  required="" placeholder="Téléphone" name="phone" >
                                </div>
                                <div class="wow fadeInLeft" data-wow-delay="0.4s">
                                    <span>E-mail</span>
                                    <input  type="text"  value=""  required="" placeholder="E-mail" name="email" >
                                </div>
                                <div class="wow fadeInLeft" data-wow-delay="0.4s">
                                    <span>Pays</span>
                                    <input  type="text"  value="" required=""  placeholder="Pays" name="country" >
                                </div>
                                <div class="wow fadeInRight" data-wow-delay="0.4s">
                                    <span>Ville</span>
                                    <input  type="text"  value=""  required="" placeholder="Ville" name="city" >
                                </div>
                                <div class="wow fadeInRight" data-wow-delay="0.4s">
                                    <span>Province / Territoire</span>
                                    <input  type="text"  value="" required=""   placeholder="Province / Territoire" name="province" >
                                </div>
                                <div class="wow fadeInRight" data-wow-delay="0.4s">
                                    <span>Code postale</span>
                                    <input  type="text"  value="" required=""  placeholder="Code postale" name="postcode" >
                                </div>
                                <div class="wow fadeInRight" data-wow-delay="0.4s">
                                    <span>Rue 1</span>
                                    <input  type="text"  value=""  required="" placeholder="Rue 1" name="add1" >
                                </div>
                                <div class="wow fadeInRight" data-wow-delay="0.4s">
                                    <span>Rue 2</span>
                                    <input  type="text"  value=""  placeholder="Rue 2" name="add2" >
                                </div>


                                <div class="clearfix"> </div>
                                <a class="news-letter" href="#">

                                </a>
                            </div>


                            <div class="register-but">
                                <input  style="    background-color: #fff;
                                        border: 2px solid #000;
                                        color: #000;
                                        display: inline-block;
                                        font-size: 1.2em;
                                        outline: medium none;
                                        padding: 0.6em 2em;
                                        text-transform: uppercase;
                                        transition: all 0.5s ease 0s;" type="submit" value="Continuer" name="cdetail">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>

        <?php require 'footer.php'; ?>
        <div class="modal fade" id="header-modal" aria-hidden="true"></div>
    </body>
</html>

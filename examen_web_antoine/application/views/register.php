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
        <?php
        require_once 'header.php';
        ?>
        <div class="content">
            <div class="main-1">
                <div class="container">
                    <div class="register">
                        <form method="post"  action="<?php echo base_url(); ?>register">
                            <div class="register-top-grid">
                                <h3>INFORMATION PERSONNEL</h3>
                                <div class="wow fadeInLeft" data-wow-delay="0.4s">
                                    <span>Nom</span>
                                    <input  type="text"  value="<?php echo set_value('firstname'); ?>"   placeholder="Nom" name="firstname" >
                                    <div style="margin-top: 0px; color: red;"><?= form_error('firstname'); ?></div>  
                                </div>
                                <div class="wow fadeInRight" data-wow-delay="0.4s">
                                    <span>Prénom</span>
                                    <input  type="text" value="<?php echo set_value('lastname'); ?>" name="lastname"  placeholder="Prénom">
                                    <div style="margin-top: 0px; color: red;"><?= form_error('lastname'); ?></div>
                                </div>
                                <div class="wow fadeInRight" data-wow-delay="0.4s">
                                    <span>Adresse E-mai</span>
                                    <input  type="text" name="email" value="<?php echo set_value('email'); ?>" placeholder="E-mail" >
                                    <div style="margin-top: 0px; color: red;"><?= form_error('email'); ?></div>
                                </div>
                                <div class="wow fadeInRight" data-wow-delay="0.4s">
                                    <span>Téléphone</span>
                                    <input  type="text"  name="phone" value="<?php echo set_value('phone'); ?>" placeholder="Téléphone">
                                    <div style="margin-top: 0px; color: red;"><?= form_error('phone'); ?></div>
                                </div>
                                <div class="clearfix"> </div>
                                <a class="news-letter" href="#">

                                </a>
                            </div>
                            <div class="register-bottom-grid">
                                <h3>INFORMATION CONNEXION</h3>
                                <div class="wow fadeInLeft" data-wow-delay="0.4s">
                                    <span>Mot de passe</span>
                                    <input  type="text" placeholder="Password"  value="<?php echo set_value('password'); ?>" name="password" placeholder="Mot de passe">
                                    <div style="margin-top: 0px; color: red;"><?= form_error('password'); ?></div>
                                </div>
                                <div class="wow fadeInRight" data-wow-delay="0.4s">
                                    <span>Confirmer</span>
                                    <input  type="text" name="cpassword" value="<?php echo set_value('cpassword'); ?>"  placeholder="Confirmer">
                                    <div style="margin-top: 0px; color: red;"><?= form_error('cpassword'); ?></div>
                                </div>
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
                                        transition: all 0.5s ease 0s;" type="submit" value="Envoyer">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <?php
        require_once 'footer.php';
        ?>		
    </body>
</html>
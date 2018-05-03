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
                    <div class="login-page">
                        <div class="account_grid">
                            <div class="col-md-6 login-left">
                                <h3>NOUVEAU CLIENT</h3>
                                <p>Veuillez créer un compte</p>
                                <a class="acount-btn" href="<?= base_url() ?>register">Créer un compte</a>
                            </div>
                            <div class="col-md-6 login-right">
                                <h3>CLIENT INSCRIT</h3>
                                <p>Connectez vous s'il vous plait.</p>
                                <?php if ($this->session->flashdata('error')) { ?>
                                    <div role="alert" class="alert alert-danger">
                                        <button data-dismiss="alert" class="close" type="button"><span class="sr-only">Fermer</span></button>
                                        <?= $this->session->flashdata('error') ?>
                                    </div>
                                <?php } ?>
                                <form action="<?= base_url(); ?>login/verify" method="post">
                                    <div>
                                        <span>Adresse e-mail</span>
                                        <input type="text" required="" name="email" placeholder="E-mail" > 
                                    </div>
                                    <div>
                                        <span>Mot de passe</span>
                                        <input type="text" name="password" required="" placeholder="Mot de passe"> 
                                    </div>
                                    <input type="submit" value="Connexion">
                                </form>
                            </div>	
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php
    require_once 'footer.php';
    ?>

</body>
</html>
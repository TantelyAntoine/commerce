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
    <body>
        <?php require_once 'header.php'; ?>
        <div class="contact">
            <div class="container">
                <?php if ($this->session->flashdata('SUCCESSMSG')) { ?>
                    <div role="alert" class="alert alert-success">
                        <button data-dismiss="alert" class="close" type="button"><span class="sr-only">Fermer</span></button>
                        <strong>Effectué!</strong>
                        <?= $this->session->flashdata('SUCCESSMSG') ?>
                    </div>
                <?php } ?>

                <div class=" contact-w3">	
                    <div class="col-md-5 contact-right">	
                      <h3>Pour plus d'information,veuillez contacter:</h3><br>
                       <h4>Téléphone: 0329957321</h4><br>
                        <h4>E-mail: tantelyantoineandriamiadana@gmail.com</h4><br>
                        <h4>Facebook: Tantely Antoine Andriamiadana</h4><br>

                    </div>
                    <div class="col-md-4 contact-lef">
                       
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <?php require 'footer.php'; ?>
        <script src="<?= base_url(); ?>js/easyResponsiveTabs.js" type="text/javascript"></script>
    </body>
</html>
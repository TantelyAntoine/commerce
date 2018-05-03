<div class="header">
    <div class="header-top">
        <div class="container">
            <div class="top-right" style="width: 300px;">
                <ul>
                    <?php
                    if (!empty($this->session->userdata('userid'))) {
                        ?>
                        <li  class="text"><a style="cursor: pointer; text-transform: capitalize;"><?php echo $this->session->userdata('firstname'); ?></a></li>
                        <li  class="text"><a href="<?= base_url(); ?>login/logout" >Deconnexion</a></li>
                    <?php } else {
                        ?>
                        <li  class="text"><a href="<?= base_url(); ?>login">Connexion</a></li>
                        <li  class="text"><a href="<?= base_url(); ?>register">Enregistrer</a></li>
                    <?php }
                    ?>
                    <li><div class="cart box_1">
                            <a href="<?= base_url() ?>cart">Cart
                                <?php
                                if (!empty($this->cart->contents())) {
                                    echo $this->cart->total_items();
                                } else {
                                    echo "0";
                                }
                                ?>   
                            </a>	
                            <div class="clearfix"> </div>
                        </div></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="content white">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h1 class="navbar-brand"><a  href="<?= base_url(); ?>"dashboard>Shop Tantely</a></h1>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="<?= base_url(); ?>dashboard">Accueil</a></li>
                            <?php
                            foreach ($category_list as $category) {
                                ?>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= $category->category_name ?><b class="caret"></b></a>
                                    <ul class="dropdown-menu multi-column columns-3">
                                        <div class="row">
                                            <?php
                                            foreach ($subcate as $sub) {
                                                if ($category->id == $sub->parent_category_id) {
                                                    ?>
                                                    <div class="col-sm-4">
                                                        <ul class="multi-column-dropdown">
                                                            <li><a style="text-transform: capitalize;" class="list1" href="<?php echo base_url() ?>ProductList/<?php echo $category->id . '/' . $sub->subcat_id; ?>"><?= $sub->subcategory_name; ?></a></li>
                                                        </ul>
                                                    </div>
                                                <?php }
                                            }
                                            ?>
                                        </div>
                                    </ul>
                                </li>
<?php } ?>
                            <li><a href="<?= base_url(); ?>contact">Contact</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="search-box">
                <div id="sb-search" class="sb-search">
                    <form>
                        <input class="sb-search-input" placeholder="Entrez vos recherche..." type="Rechercher" name="search" id="search">
                        <input class="sb-search-submit" type="submit" value="">
                        <span class="sb-icon-search"> </span>
                    </form>
                </div>
            </div>
            <script src="<?= base_url(); ?>js/classie.js"></script>
            <script src="<?= base_url(); ?>js/uisearch.js"></script>
            <script>
                new UISearch(document.getElementById('sb-search'));
            </script>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
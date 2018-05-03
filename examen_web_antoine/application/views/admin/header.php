<header id="header-navbar" class="content-mini content-mini-full">
               <ul class="nav-header pull-left">
                    <li>
                        <div class="btn-group">
                            <a href="<?= base_url();?>account/dashboard" class="btn btn-default btn-image dropdown-toggle" >
                                 Tableau de bord
                            </a>
                        </div>
                    </li>
                </ul>
                <ul class="nav-header pull-left">
                    <li>
                        <div class="btn-group">
                            <button class="btn btn-default btn-image dropdown-toggle" data-toggle="dropdown" type="button">
                              Produits
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                    <a tabindex="-1" href="<?= base_url();?>account/produc-list">
                                       Tous les produits
                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="<?= base_url();?>account/product-add">
    Ajouter un produit
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                
                <ul class="nav-header pull-left">
                    <li>
                        <div class="btn-group">
                            <button class="btn btn-default btn-image dropdown-toggle" data-toggle="dropdown" type="button">
                              Categorie
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                    <a tabindex="-1" href="<?= base_url();?>account/category">
                                       Tous les catégories
                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="<?= base_url();?>account/category-add">
 Ajouter  un categorie
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <ul class="nav-header pull-left">
                    <li>
                        <div class="btn-group">
                            <button class="btn btn-default btn-image dropdown-toggle" data-toggle="dropdown" type="button">
                              Couleur
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                    <a tabindex="-1" href="<?= base_url();?>account/color">
                                     Tous les couleurs
                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="<?= base_url();?>account/color-add">
  Ajouter une couleur
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <ul class="nav-header pull-left">
                    <li>
                        <div class="btn-group">
                            <button class="btn btn-default btn-image dropdown-toggle" data-toggle="dropdown" type="button">
                              Taille
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                    <a tabindex="-1" href="<?= base_url();?>account/size">
                                       Tous les tailles
                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="<?= base_url();?>account/size-add">
  Ajouter une taille
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                
                <ul class="nav-header pull-left">
                    <li>
                        <div class="btn-group">
                            <button class="btn btn-default btn-image dropdown-toggle" data-toggle="dropdown" type="button">
                              Client
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                    <a tabindex="-1" href="<?= base_url();?>account/customer-list">
                                        Liste des clients 
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                
                <ul class="nav-header pull-left">
                    <li>
                        <div class="btn-group">
                            <button class="btn btn-default btn-image dropdown-toggle" data-toggle="dropdown" type="button">
                              Vente
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                    <a tabindex="-1" href="<?= base_url();?>account/sale-list">
                                       Tous les ventes
                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="<?= base_url();?>account/sale-list-shipped">
                                    Vente transporté
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                   <ul class="nav-header pull-left">
                    <li>
                        <div class="btn-group">
                            <button class="btn btn-default btn-image dropdown-toggle" data-toggle="dropdown" type="button">
                            Diapositive
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                    <a tabindex="-1" href="<?=base_url();?>account/list-slider">
                                     Tous les diapositive
                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="<?=base_url();?>account/add-slider">
                                         Ajouter un diapositive
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                
                <ul class="nav-header pull-left">
                    <li>
                        <div class="btn-group">
                            <button class="btn btn-default btn-image dropdown-toggle" data-toggle="dropdown" type="button">
                             Admin
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                    <a tabindex="-1" href="<?=base_url();?>account/admin-list">
                                      Liste des admin
                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="<?=base_url();?>account/new-admin">
                                         Ajouter un admin
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
             
                <ul class="nav-header pull-right">
                    <li>
                        <div class="btn-group">
                            <button class="btn btn-default btn-image dropdown-toggle" data-toggle="dropdown" type="button">
                            
                                    Bonjour, <?php echo $this->session->email; ?> &nbsp;
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                       <a href="<?php echo site_url('admin/login_controllers/logout'); ?>">
                                        <i class="si si-logout pull-right"></i>Deconnexion
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </header>
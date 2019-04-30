<header class="header-desktop">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="header-wrap">
                <form class="form-header" action="" method="POST">
                    <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                    <button class="au-btn--submit" type="submit">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                </form>
                <div class="header-button">
                    <div class="noti-wrap">


                        <div class="noti__item js-item-menu">
                            <i class="zmdi zmdi-notifications"></i>
                            <?php
                            if($recl->notif()+$prod->notif_prod()>0){
                                ?>
                                <span class="quantity"><?php echo $recl->notif()+$prod->notif_prod(); ?></span>
                                <?php
                            }

                            ?>                                    <div class="notifi-dropdown js-dropdown">
                                <div class="notifi__title">
                                    <p>Vous avez <?php echo $recl->notif()+$prod->notif_prod(); ?> Notifications</p>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c1 img-cir img-40">
                                        <a href="afficherReclamation.php">
                                            <i class="zmdi zmdi-email-open"></i>
                                    </div>
                                    <div class="content">
                                        <p>Nouvelle Reclamation de <?php echo $recl->notif_con(); ?></p>
                                    </div>
                                    </a>
                                </div>

                                <div class="notifi__item">
                                    <div class="bg-c3 img-cir img-40">
                                        <a href="affiche_produit_sepcii.php">

                                            <i class="zmdi zmdi-file-text"></i>
                                    </div>
                                    <div class="content">
                                        <p>nouvelle Demande de produit:<br> <?php echo $prod->notif_con_prod(); ?></p>
                                    </div>
                                    </a>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="account-wrap">
                        <div class="account-item clearfix js-item-menu">
                            <div class="image">
                                <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                            </div>
                            <div class="content">
                                <a class="js-acc-btn" href="#"><?= $_SESSION['Nom']?></a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="#">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#"><?= $_SESSION['Nom']?></a>
                                        </h5>
                                        <span class="email"><?= $_SESSION['mail']?></span>
                                    </div>
                                </div>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="Profileemploye.php">
                                            <i class="zmdi zmdi-account"></i>Mon compte</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-settings"></i>Changer mot de passe</a>
                                    </div>
                                </div>
                                <div class="account-dropdown__footer">
                                    <a href="logout.php">
                                        <i class="zmdi zmdi-power"></i>Deconnecter</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
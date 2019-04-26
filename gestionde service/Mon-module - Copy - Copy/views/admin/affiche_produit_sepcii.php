<?PHP
include "../../core/produit_specifiqueC.php";

$recl=new Produit_specifiqueC();
$listeProduit_sp=$recl->afficher_Produit_specifique();
if(isset($_GET['filtrage'])) {
    if ($_GET['filtrage'] === 'titre')
        $listeProduit_sp=$recl->afficher_Produit_specifique_titre();
    else if ($_GET['filtrage'] === 'auteur')
        $listeProduit_sp=$recl->afficher_Produit_specifique_auteur();
    else
        $listeProduit_sp=$recl->afficher_Produit_specifique_categorie();
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Tables</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
<div class="page-wrapper">


    <!-- MENU SIDEBAR-->
    <aside class="menu-sidebar d-none d-lg-block">
        <div class="logo">
            <a href="#">
                <img src="images/icon/logo.png" alt="Cool Admin" class="logo_img" />
            </a>
        </div>
        <div class="menu-sidebar__content js-scrollbar1">
            <nav class="navbar-sidebar">
                <ul class="list-unstyled navbar__list">
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-tachometer-alt"></i>Acceuil</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="index.html">Acceuil</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="statistique.php">
                            <i class="fas fa-chart-bar"></i>statistique</a>
                    </li>
                    <li >
                        <a href="afficherReclamation.php">
                            <i class="fas fa-table"></i>gestion de Reclamation</a>
                    </li>
                    <li>
                        <a href="affiche_produit_sepcii.php">
                            <i class="far fa-check-square"></i>gestion de produit specifique</a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-calendar-alt"></i>Calendar</a>
                    </li>
                    <li>
                        <a href="map.html">
                            <i class="fas fa-map-marker-alt"></i>Maps</a>
                    </li>


                </ul>
            </nav>
        </div>
    </aside>
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="header-wrap">
                        <form class="form-header" action="" method="">
                            <input class="au-input au-input--xl" type="text" name="search" id="ss" placeholder="Search for datas &amp; reports..." />
                            <button class="au-btn--submit" type="submit" name="bt" id="sr">
                                <i class="zmdi zmdi-search"></i>
                            </button>
                        </form>
                        <div class="header-button">
                            <div class="noti-wrap">


                                <div class="noti__item js-item-menu">
                                    <i class="zmdi zmdi-notifications"></i>
                                    <?php
                                    if($recl->notification()>0){
                                        ?>
                                        <span class="quantity"><?php echo $recl->notification(); ?></span>
                                        <?php
                                    }

                                    ?>                                    <div class="notifi-dropdown js-dropdown">
                                        <div class="notifi__title">
                                            <p>Vous avez <?php echo $recl->notification(); ?> Notifications</p>
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
                                                <p>nouvelle Demande de produit:<br> <?php echo $recl->notif_con_prod(); ?></p>
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
                                        <a class="js-acc-btn" href="#">john doe</a>
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
                                                    <a href="#">john doe</a>
                                                </h5>
                                                <span class="email">johndoe@example.com</span>
                                            </div>
                                        </div>
                                        <div class="account-dropdown__body">
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-account"></i>Account</a>
                                            </div>
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-settings"></i>Setting</a>
                                            </div>
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-money-box"></i>Billing</a>
                                            </div>
                                        </div>
                                        <div class="account-dropdown__footer">
                                            <a href="#">
                                                <i class="zmdi zmdi-power"></i>Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->

        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- DATA TABLE -->
                        <h3 class="title-5 m-b-35">data table</h3>
                        <div class="table-data__tool">
                            <div class="table-data__tool-left">

                                <div class="rs-select2--light rs-select2--sm">



                                    <form action="" method="GET">
                                        <select class="js-select2" name="filtrage">
                                            <option selected="selected">reclamation</option>
                                            <option value="nom">Nom</option>
                                            <option value="id">Identifiant</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                </div>
                                <i class="zmdi zmdi-filter-list"> </i>
                                <input type="submit" value="filtre" class="au-btn-filter">
                                </form>





                            </div>

                        </div>

                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2">
                                <thead>
                                <tr>
                                    <th>
                                        <label class="au-checkbox">
                                            <input type="checkbox">
                                            <span class="au-checkmark"></span>
                                        </label>
                                    </th>
                                    <th>titre</th>
                                    <th>auteur</th>
                                    <th>categorie</th>
                                    <th>Autre information</th>
                                    <th>Adresse Email</th>
                                    <th>N°Tel</th>



                                    <th></th>
                                </tr>
                                </thead>
                                    <?php foreach($listeProduit_sp as $row)
                                        : ?>
                                        <tbody>
                                        <tr class="tr-shadow">
                                            <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td>
                                            <td><?PHP echo $row['Titre']; ?></td>
                                            <td><?PHP echo $row['auteur']; ?></td>
                                            <td><?PHP echo $row['categorie']; ?></td>
                                            <td><?PHP echo $row['autre_info']; ?></td>

                                            <td><?PHP echo $row['mail']; ?></td>
                                            <td><?PHP echo $row['telephone']; ?></td>
                                            <td>
                                                <div class="table-data-feature">

                                                    <div class="table-data-feature">
                                                        <button type="button" class="item"  name="bt" data-toggle="modal" data-target="#sms<?PHP echo $row['id']; ?>" data-toggle="modal" data-target="#myModal" title="Repondre">                                                            <i class="zmdi zmdi-mail-send"></i>
                                                        </button>



                                                    </div>
                                            </td>
                                           <!-- Modal -->
                                            <div id="sms<?PHP echo $row['id']; ?>" class="modal fade" role="dialog">
                                                <div class="modal-dialog">

                                                    <!-- Modal content-->
                                                    <div class="modal-content">


                                                        <div class="modal-body">
                                                            <p>Repondre a la reclamation de <strong><?PHP echo $row['id']; ?></strong>:</p>
                                                            <form method="post" action="sendsms.php">
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <input type="hidden" name="delete_id" value="<?PHP echo $row['id']; ?>">

                                                                    </div>
                                                                </div>

                                                                <div class="row form-group">
                                                                    <div class="col col-md-3">
                                                                        <label for="textarea-input" class=" form-control-label">Message</label>
                                                                    </div>
                                                                    <div class="col-12 col-md-9">
                                                                        <textarea name="msg" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea>
                                                                    </div>
                                                                    <div class="card-footer">
                                                                        <button type="submit" name="envoyer" class="btn btn-secondary btn-sm">
                                                                            <i class="fa fa-dot-circle-o"></i> envoyer
                                                                        </button>

                                                                    </div>

                                                                </div>

                                                            </form>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                        </div>
                        </tr>
                        <tr class="spacer"></tr>

                        <?php       endforeach;?>
                        </tbody>

                        </table>

                    </div>
                </div>
                <!-- END DATA TABLE -->



            </div>

        </div>




        <!-- Jquery JS-->
<script src="vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="vendor/bootstrap-4.1/popper.min.js"></script>
<script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="vendor/slick/slick.min.js">
</script>
<script src="vendor/wow/wow.min.js"></script>
<script src="vendor/animsition/animsition.min.js"></script>
<script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="vendor/circle-progress/circle-progress.min.js"></script>
<script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="vendor/chartjs/Chart.bundle.min.js"></script>
<script src="vendor/select2/select2.min.js">
</script>

<!-- Main JS-->
<script src="js/main.js"></script>

</body>

</html>
<!-- end document-->

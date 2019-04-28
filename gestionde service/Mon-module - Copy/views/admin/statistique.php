<?PHP
include "../../core/produit_specifiqueC.php";
include "../../core/reclamationC.php";

include "../../config.php";
$recl=new ReclamationC();
$prod=new Produit_specifiqueC();

$db = config::getConnexion();
$stmt=$db->prepare("SElECT DISTINCT categorie From produit_specifique  ");
$stmt->execute();
$jeson=[];
while ($row=$stmt->fetch(PDO::FETCH_ASSOC)){
    extract($row);
    $jeson[]= $categorie;
}
echo json_encode($jeson);

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
    <title>Charts</title>

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
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

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
                            <input class="au-input au-input--xl" type="text" name="search" id="ss" placeholder="Search for datas &amp; reports..." onkeyup="showCustomer(this.value) ,showCustomer2(this.value)" />
                            <button class="au-btn--submit" type="submit" name="bt" id="sr">
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
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-lg-6">
                            <div class="au-card m-b-30">
                                <div class="au-card-inner">
                                    <h3 class="title-2 m-b-40">Single Bar Chart</h3>
                                    <canvas id="myChart"></canvas>
                                    <script>var ctx = document.getElementById('myChart').getContext('2d');
                                        var chart = new Chart(ctx, {
                                            // The type of chart we want to create
                                            type: 'bar',

                                            // The data for our dataset
                                            data: {
                                                labels: <?php echo json_encode($jeson); ?>,

                                                datasets: [{
                                                    label: 'Categorie plus demader',
                                                    backgroundColor: 'rgb(25,25,112)',
                                                    borderColor: 'rgb(25,25,112)',
                                                    data: [<?php echo $prod->cat2(); ?>,<?php echo $prod->cat1(); ?>,<?php echo $prod->cat3(); ?>,<?php echo $prod->cat4(); ?>,<?php echo $prod->cat5(); ?>]
                                                }]
                                            },

                                            // Configuration options go here
                                            options: {}
                                        });</script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT-->
    </div>
    <!-- END PAGE CONTAINER-->

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


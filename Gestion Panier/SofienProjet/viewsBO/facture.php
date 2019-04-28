<?php
require '../include.php';
session_start();
$commande=new CommandeC();

$recl=new ReclamationC();
$prod=new produit_specifiqueC();
$list=$commande->afficherFacture($_GET['id']);
$liste=$commande->afficherdetailcommande($_GET['id']);
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
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" sizes="50x50">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <?php require 'aside.php';?>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php require 'header.php';?>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <h3 class="title-5 m-b-35">Notre Client:</h3>
                    <div class="table-responsive table-responsive-data2">
                        <table class="table table-data2">
                            <thead>
                            <tr>
                                <th>name</th>
                                <th>Mail</th>
                                <th>Adresse</th>
                                <th>City</th>
                                <th>Phone</th>
                                <th>Type Livraison</th>
                            </tr>
                            </thead>
                            <?php foreach($liste as $row): ?>
                                <form action="modifierEtat.php?id=<?= $row['ID_Commande']?>" method="post">

                                <tbody>
                                    <tr class="tr-shadow">
                                        <td class="desc"><?= $row['Nom']?><?=$row['Prenom'] ?></td>
                                        <td><span class="block-email"><?= $row['Email'] ?></span> </td>
                                        <td > <?= $row['Adresse_Street'] ?> </td>
                                        <td><?= $row['City'] ?></td>
                                        <td><?= $row['Phone']?></td>
                                        <td><?= $row['Type_Livraison']?></td>
                                        <td>
                                            <div class="table-data-feature">
                                                <button  name="edit" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                    <i class="zmdi zmdi-edit"></i>
                                                </button>

                                                <button name="delete" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                    <i class="zmdi zmdi-delete"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </form>
                            <?php endforeach; ?>
                        </table>
                    </div>
                    <br>
                    <div class="col-lg-9">
                        <h3 class="title-5 m-b-35">Produits Commande:</h3>
                        <div class="table-responsive table--no-card m-b-30">
                            <table class="table table-borderless table-striped table-earning">
                                <thead>
                                <tr>
                                    <th>name</th>
                                    <th class="text-right">price</th>
                                    <th class="text-right">quantity</th>
                                    <th class="text-right">total</th>
                                </tr>
                                </thead>
                                <?php foreach($list as $row): ?>
                                <tbody>
                                <tr>
                                    <td><?= $row['Nom_Produit']?></td>
                                    <td class="text-right"><?= $row['Prix_Produit']?></td>
                                    <td class="text-right"><?= $row['Qty_Produit']?></td>
                                    <td class="text-right"><?= $row['Prix_Produit']* $row['Qty_Produit']?></td>
                                </tr>
                                </tbody>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>
                        <a href="commande.php">Back</a>

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

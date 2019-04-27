<?php
/*require '../cores/commandeC.php';*/

require '../include.php';
session_start();
$recl=new ReclamationC();
$prod=new produit_specifiqueC();

$db = config::getConnexion();
$stmt=$db->prepare("SElECT DISTINCT categorie From produit_specifique  ");
$stmt->execute();
$jeson=[];
while ($row=$stmt->fetch(PDO::FETCH_ASSOC)){
    extract($row);
    $jeson[]= $categorie;
}

$commande=new CommandeC();
$jan=$commande->jan();
$feb=$commande->feb();
$mar=$commande->mar();
$apr=$commande->apr();
$may=$commande->may();
$jun=$commande->jun();
$jul=$commande->jul();
$aug=$commande->aug();
$sep=$commande->sep();
$oct=$commande->oct();
$nov=$commande->nov();
$dec=$commande->dec();


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
    <title>chart Commande Par Jour</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" sizes="50x50">

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
    <link href="theme.css" rel="stylesheet" media="all">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js'></script>

</head>

<body class="animsition">
    <div class="page-wrapper">
        <?php require 'aside.php';?>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php require 'header.php';?>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                                <!-- DATA TABLE -->
                                <div class="col-lg-6">
                                    <div class="au-card m-b-30">
                                        <h3 class="title-2 m-b-40">Commande Recu Par Mois</h3>

                                        <div class="au-card-inner">
                                            <!-- line chart canvas element -->
                                            <canvas id="buyers" width="600" height="400"></canvas>

                                            <script>
                                                var buyerData = {
                                                    labels : ["janvier","février","mars","avril","mai","juin","juillet","août","septembre","octobre","novembre","décembre"],
                                                    datasets : [
                                                        {
                                                            fillColor : "#892d2d",
                                                            strokeColor : "#4f3c3c",
                                                            pointColor : "#fff",
                                                            pointStrokeColor : "#892d2d",
                                                            data : [<?= $jan ?>,<?= $feb ?>,<?= $mar ?>,<?= $apr ?>,<?= $may?>,<?= $jun ?>,<?= $jul ?>,<?= $aug ?>,<?= $sep ?>,<?= $oct ?>,<?= $nov ?>,<?= $dec ?>]
                                                        }
                                                    ]
                                                }
                                                var buyers = document.getElementById('buyers').getContext('2d');
                                                new Chart(buyers).Line(buyerData);

                                            </script>

                                        </div>
                                    </div>
                                </div>


                                <!-- END DATA TABLE -->

                            <div class="col-lg-6">
                                <div class="au-card m-b-30">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 m-b-40">Nomber De Poste Par Utilisateur</h3>

                                        <div id="chart-container">
                                            <canvas id="mycanvas"></canvas>
                                        </div>

                                        <!-- javascript -->
                                        <script type="text/javascript" src="vendor/jquery-3.2.1.min.js"></script>
                                        <script type="text/javascript" src="vendor/chartjs/Chart.bundle.min.js"></script>
                                        <script type="text/javascript">
                                            $(document).ready(function(){
                                                $.ajax({
                                                    url: "data.php",
                                                    method: "GET",
                                                    success: function(data) {
                                                        // console.log(data);
                                                        data2 = JSON.parse(data);
                                                        // console.log(data2);
                                                        var player = [];
                                                        var score = [];

                                                        for(var i in data2) {
                                                            player.push( data2[i].Createur);
                                                            score.push(data2[i].Number);
                                                        }
                                                        console.log(player);
                                                        var chartdata = {
                                                            labels: player,
                                                            datasets : [
                                                                {
                                                                    label: 'Nombre de posts',
                                                                    backgroundColor: '#a94442',
                                                                    borderColor: '#a94442',
                                                                    hoverBackgroundColor: '#d15855',
                                                                    hoverBorderColor: '#d15855',
                                                                    data: score
                                                                }
                                                            ]
                                                        };

                                                        var ctx = $("#mycanvas");

                                                        var barGraph = new Chart(ctx, {
                                                            type: 'bar',
                                                            data: chartdata
                                                        });
                                                    },
                                                    error: function(data) {
                                                        //console.log(data);
                                                    }
                                                });
                                            });

                                        </script>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="au-card m-b-30">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 m-b-40">Categorie Le Plus Demande</h3>
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

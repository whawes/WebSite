<?PHP
/*include "../cores/reclamationC.php";
include "../cores/produit_specifiqueC.php";
include "../config.php";*/

require '../include.php';
session_start();
$recl=new ReclamationC();
$prod=new produit_specifiqueC();
$commande=new CommandeC();
$list=$commande->afficherCommande();

$recl=new ReclamationC();
$prod=new produit_specifiqueC();

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

    <?php require 'aside.php';?>
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <!-- HEADER DESKTOP-->
        <?php require 'header.php';?>

        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- DATA TABLE -->
                        <h3 class="title-5 m-b-35">Commandes Recu</h3>
                        <div class="table-data__tool">
                            <div class="rs-select2--light rs-select2--sm">
                                <select class="js-select2" name="time" onchange="sort(this.value)">
                                    <option value="0">Today</option>
                                    <option value="3">3 Days</option>
                                    <option value="1">1 Week</option>
                                </select>
                                <div class="dropDownSelect2"></div>
                            </div>





                        </div>

                        <div id="det" class="table-responsive table-responsive-data2">
                            <table class="table table-data2">
                                <thead>
                                <tr>
                                    <th>
                                        <label class="au-checkbox">
                                            <input type="checkbox">
                                            <span class="au-checkmark"></span>
                                        </label>
                                    </th>
                                    <th>name</th>
                                    <th>Adresse</th>
                                    <th>date</th>
                                    <th>status</th>



                                    <th></th>
                                </tr>
                                </thead>
                                <?php foreach($list as $row){ ?>
                                    <form method="post" action="modifierEtat.php?id=<?=$row['ID_Commande']?>">

                                        <tbody>
                                        <tr class="spacer"></tr>
                                        <tr class="tr-shadow">
                                            <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td>
                                            <td class="desc"><?= $row['Nom']?><?= $row['Prenom']?></td>
                                            <td ><?= $row['Adresse_Street']?></td>
                                            <td><?= $row['Date_Creation']?></td>
                                            <td>
                                                <div class="col-12 col-md-9">
                                                    <select name="etat" id="SelectLm" class="form-control-sm form-control" onchange="this.form.submit()">
                                                        <option value="En Cours"><?=$row['Etat_Commande']?></option>
                                                        <option value="Invalid">Invalid</option>
                                                        <option value="Valid">Valide</option>

                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="table-data-feature">
                                                    <button class="item" data-toggle="modal" data-placement="top" title="Delete" data-target="#delete<?PHP echo $row['ID_Commande']; ?>" data-toggle="modal" data-target="#myModal" title="Repondre">   >
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>

                                                   <a href="facture.php?id=<?= $row['ID_Commande']; ?>"> <button  name="more" class="item" data-toggle="tooltip" data-placement="top" title="More">

                                                        <i class="zmdi zmdi-more"></i>
                                                    </button></a>

                                                </div>
                                            </td>
                                            <!-- Modal -->
                                            <div id="delete<?PHP echo  $row['ID_Commande']; ?>" class="modal fade" role="dialog">
                                                <div class="modal-dialog">

                                                    <!-- Modal content-->
                                                    <div class="modal-content">

                                                        <div class="modal-body">
                                                            <form method="post" action="supprimerReclamation.php">
                                                                <!-- Modal content-->
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                        <h4 class="modal-title">Suppression</h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <input type="hidden" name="delete_id" value="<?PHP  $row['ID_Commande']; ?>">
                                                                        <div class="alert alert-danger">vous voulez suprimer </div>
                                                                        <div class="modal-footer">
                                                                            <button type="submit" name="delete" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> YES</button>
                                                                            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> NO</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>


                                                        </div>

                                                    </div>

                                                </div>
                                            </div>


                                        </tr>

                                        </tbody>
                                    </form>

                                <?php } ?>

                </div>
            </div>
            <!-- END DATA TABLE -->



        </div>

    </div>
    <script>
        function sort(id)
        {
            $.ajax({
                url: "comande_trie.php",
                data:{data: id},
                type: "POST",
                success: function(data){
                    $('#det').html(data);
                },
                failure: function(data){
                    $('#det').html(data);
                }
            });
        }


        function showCustomer(str) {

            var xhttp;
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("det").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "recherche_commande.php?q="+str, true);

            xhttp.send();
        }

    </script>

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

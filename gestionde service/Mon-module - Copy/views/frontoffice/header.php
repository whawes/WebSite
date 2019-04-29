<?php
    include "../../core/notificationC.php";
include "../../config.php";
    $notif=new NotificationC();
    $list=$notif->afficherNotification($_SESSION['mail']);

?>
<!doctype html>
<html class="no-js" lang="">
<head>
    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $Titre ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,700,600,500,300' rel='stylesheet' type='text/css'>

    <!-- all css here -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- Font-Awesome css -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- pe-icon-7-stroke css -->
    <link rel="stylesheet" href="css/pe-icon-7-stroke.css">
    <!-- Flaticon css -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- venobox css -->
    <link rel="stylesheet" href="venobox/venobox.css" type="text/css" media="screen" />
    <!-- nivo slider css -->
    <link rel="stylesheet" href="lib/css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="lib/css/preview.css" type="text/css" media="screen" />
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- style css -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="profilecss.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr css -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<!--Header Area Start-->
<div class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-6 col-xs-6">
                <div class="header-logo">
                    <a href="index.html">
                        <img src="img/logo.png" alt="">
                    </a>
                </div>
            </div>

            <div class="col-md-9 col-sm-12 hidden-xs">
                <div class="mainmenu text-center">
                    <nav>
                        <ul id="nav">
                            <li><a href="index.php">HOME</a></li>
                            <li><a href="shop.php">CATALOGUE</a>
                                <ul class="sub-menu">
                                    <li><a href="shop.htmll">CATALOGUE1</a></li>
                                    <li><a href="shop.html">CATALOGUE2</a></li>
                                </ul></li>
                            <li><a href="#">ESPACE DISCUSSIONS</a>
                                <ul class="sub-menu">
                                    <li><a href="lecture.php">Lecture</a></li>
                                    <li><a href="forum.php">Forum</a></li>
                                </ul></li>
                            <li><a href="#">RESSOURCES</a>
                                <ul class="sub-menu">
                                    <li><a href="auteurs.html">Espace auteurs</a></li>
                                    <li><a href="editeur.html">Espace éditeurs</a></li>

                                </ul></li>
                            <li><a href="#">ESPACE ECOLE</a>
                                <ul class="sub-menu">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="cart.html">Cart Page</a></li>
                                </ul></li>
                            <li><a href="#">CONTACT</a>
                                <ul class="sub-menu">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="contact.php">Reclamation</a></li>
                                    <li><a href="demande_produit_specifique.php">Demande produit specifie</a></li>
                                </ul></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="col-md-1 hidden-sm">
                <div class="header-right">
                    <ul>
                        <?php if(!empty($_SESSION['mail']))
                        {?>
                            <li class="shoping-cart">
                                <a href="profile.php">
                                    <i class="flaticon-people"></i>
                                    <span>2</span>
                                </a>
                                <div class="add-to-cart-product">
                                    <div class="cart-product">
                                        <div class="cart-product-image">
                                            <a href="single-product.html">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="total-cart-price">
                                        <div class="cart-product-line fast-line">
                                            <?php foreach ($list as $row):
                                            ?>
                                            <span> <?php  if( $row['message']!="")
                                                echo "reclamation: ".$row['message'];
                                                else echo "pas notification";?></span>
                                            <span class="free-shiping" ><a href="supprimer_notification.php?id=<?php  echo $row['id']; ?>'"><i class="fa fa-times"></i></a></span>
                                            <?php  endforeach;?>
                                        </div>
                                        <div class="cart-product-line">
                                        </div>
                                    </div>
                                    <div class="cart-checkout">
                                        <a href="logout.php">
                                            Se déconnecter
                                            <i class="fa fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        <?php } else { ?>


                            <li class="shoping-cart">
                                <a href="login/login.html">
                                    <i class="flaticon-people"></i>
                                </a></li>


                        <?php }?>
                        <li class="shoping-cart">
                            <a href="cart.php">
                                <i class="flaticon-shop"></i>
                                <span>0</span>
                            </a>
                            <div class="add-to-cart-product">
                                <div class="cart-product-line">
                                    <span>Empty Cart</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
    </div>
</div>
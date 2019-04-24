<?php
require '../include.php';
//require '../cores/commandeC.php';

$commande=new CommandeC();

$id=$_GET['id'];
?>
<!doctype html>
<html class="no-js" lang="" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Checkout || Witter Multipage Responsive Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,700,600,500,300' rel='stylesheet' type='text/css'>

    <!-- all css here -->
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
    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr css -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="stylesheets/style.css" />
    <script type="text/javascript" language="javascript" src="javascripts/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="javascripts/script.js"></script>
</head>
<body>

<!-- Add your site or application content here -->
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
                            <li><a href="index.html">HOME</a></li>
                            <li><a href="#">CATALOGUE</a>
                                <ul class="sub-menu">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="cart.html">Cart Page</a></li>
                                </ul></li>
                            <li><a href="#">ESPACE LECTEUR</a>
                                <ul class="sub-menu">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="cart.html">Cart Page</a></li>
                                </ul></li>
                            <li><a href="#">ESPACE ECOLE</a>
                            <li><a href="#">MAISSON D'EDITION</a>
                                <ul class="sub-menu">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="cart.html">Cart Page</a></li>
                                </ul></li>
                            <li><a href="#">CONTACT</a>
                                <ul class="sub-menu">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="demande_produit.html">Demande produit specifie</a></li>
                                </ul></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-md-1 hidden-sm">
                <div class="header-right">
                    <ul>
                        <li>
                            <a href="my-account.html"><i class="flaticon-people"></i></a>
                        </li>
                        <li class="shoping-cart">
                            <a href="cart.php">
                                <i class="flaticon-shop"></i>
                                <span>2</span>
                            </a>

                            <div class="add-to-cart-product">

                                    <div class="cart-product">

                                        <div class="cart-product-image">
                                            <a href="single-product.html">
                                                <img src="img/shop/1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="cart-product-info">
                                            <p>
                                                <span></span>
                                                x
                                                <a href="single-product.html"></a>
                                            </p>
                                            <a href="single-product.html">S, Orange</a>
                                            <span class="cart-price">$ </span>
                                        </div>
                                        <div class="cart-product-remove">
                                            <i class="fa fa-times"></i>
                                        </div>

                                    </div>

                                <div class="total-cart-price">
                                    <div class="cart-product-line fast-line">
                                        <span>Shipping</span>
                                        <span class="free-shiping"></span>
                                    </div>
                                    <div class="cart-product-line">
                                        <span>Total</span>
                                        <span class="total"></span>
                                    </div>
                                </div>

                                <div class="cart-checkout">
                                    <a href="chekout.php">
                                        Check out
                                        <i class="fa fa-chevron-right"></i>
                                    </a>
                                </div>
                                <div class="cart-checkout">
                                    <a href="cart.php">
                                        View Cart
                                        <i class="fa fa-chevron-right"></i>
                                    </a>
                                </div>

                            </div>

                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>
<!--Header Area End-->
<!-- Mobile Menu Start -->
<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-12 hidden-xs">
                <div class="mainmenu text-center">
                    <nav>
                        <ul id="nav">
                            <li><a href="index.html">HOME</a></li>
                            <li><a href="#">CATALOGUE</a>
                                <ul class="sub-menu">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="cart.html">Cart Page</a></li>
                                </ul></li>
                            <li><a href="#">ESPACE LECTEUR</a>
                                <ul class="sub-menu">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="cart.html">Cart Page</a></li>
                                </ul></li>
                            <li><a href="#">MAISSON D'EDITION</a>
                                <ul class="sub-menu">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="cart.html">Cart Page</a></li>
                                </ul></li>
                            <li><a href="#">CONTACT</a>
                                <ul class="sub-menu">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="demande_produit.html">Demande produit specifie</a></li>
                                </ul></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile Menu End -->
<!-- Breadcrumbs Area Start -->
<div class="breadcrumbs-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs">
                    <h2>Checkout List</h2>
                    <ul class="breadcrumbs-list">
                        <li>
                            <a title="Return to Home" href="index.html">Home</a>
                        </li>
                        <li>Checkout List</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumbs Area Start -->
<!-- Check Out Area Start -->
<div class="check-out-area section-padding">

    <div class="container">
        <div class="row">

                <div class="col-md-8">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <h2>Modifier Votre Adresse</h2>
                                <div class="panel-body">
                                    <div class="row">
                                    <?php $list=$commande->afficherdetailcommande($_GET['id'])?>

                                        <?php foreach ($list as $row): ?>
                                        <form action="ModifCommande.php?id=<?= $row['ID_Commande']?>" method="post" >
                                        <div class="col-md-6">
                                            <p class="form-row">
                                                <input type="text" value="<?= $row['Nom']?>" class="form_text" name="nom" id="form_firstname" placeholder="First Name *"><span class="error_form" id="firstname_error_message"></span>
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="form-row">
                                                <input type="text" value="<?= $row['Prenom']?>" class="form_text" name="prenom" id="form_lastname" placeholder="Last Name *" ><span class="error_form" id="lastname_error_message"></span>
                                            </p>
                                        </div>
                                        <div class="col-md-12">
                                            <p class="form-row">
                                                <input type="text" value="<?= $row['Adresse_Street']?>" class="form_text" name="as" id="form_street" placeholder="Street address *" ><span class="error_form" id="street_error_message"></span>

                                            </p>
                                        </div>
                                        <div class="col-md-12">
                                            <p class="form-row">
                                                <input type="text" value="<?= $row['City']?>" class="form_text" name="cty" id="form_city" placeholder="Town/City *" ><span class="error_form" id="city_error_message"></span>

                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="form-row">
                                                <input type="text" value="<?= $row['Country']?>" class="form_text" name="ctry" id="form_country" placeholder="State/Country *" ><span class="error_form" id="country_error_message"></span>
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="form-row">
                                                <input type="text" value="<?= $row['CP']?>" class="form_text" name="cp" id="form_cp" placeholder="Code Postal *" ><span class="error_form" id="cp_error_message"></span>
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="form-row">
                                                <input type="text" value="<?= $row['Email']?>" class="form_text" name="email" id="form_mail" placeholder="Mail Adress *" ><span class="error_form" id="mail_error_message"></span>

                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="form-row">
                                                <input type="text" value="<?= $row['Phone']?>" class="form_text" name="ph" id="form_phone" placeholder="phone *" ><span class="error_form" id="phone_error_message"></span>

                                            </p>
                                        </div>

                                        <?php endforeach;?>
                                        <div class="shopingcart-bottom-area">

                                            <input type="submit" value="UPDATE Adresse" name="button">
                                        </div>
                                        </form>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>


        </div>
    </div>

</div>
<!-- Check Out Area End -->
<!-- Footer Area Start -->
<footer>
    <div class="footer-top-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-8">
                    <div class="footer-left">
                        <a href="index.html">
                            <img src="img/logo-2.png" alt="">
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                        <ul class="footer-contact">
                            <li>
                                <i class="flaticon-location"></i>
                                450 fifth Avenue, 34th floor. NYC
                            </li>
                            <li>
                                <i class="flaticon-technology"></i>
                                (+800) 123 4567 890
                            </li>
                            <li>
                                <i class="flaticon-web"></i>
                                info@bookstore.com
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4">
                    <div class="single-footer">
                        <h2 class="footer-title">Information</h2>
                        <ul class="footer-list">
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="#">auteur</a></li>
                            <li><a href="#">Maison d'edition</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 hidden-sm">
                    <div class="single-footer">
                        <h2 class="footer-title">My Account</h2>
                        <ul class="footer-list">
                            <li><a href="my-account.html">My Account</a></li>
                            <li><a href="cart.html">My Cart</a></li>
                            <li><a href="wishlist.html">Wishlist</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 hidden-sm">
                    <div class="single-footer">
                        <h2 class="footer-title">Cataloge</h2>
                        <ul class="footer-list">
                            <li><a href="#">Cataloge1</a></li>
                            <li><a href="#">Cataloge2</a></li>
                            <li><a href="#">Cataloge3</a></li>
                            <li><a href="#">Cataloge4</a></li>
                            <li><a href="#">Cataloge5</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-8">
                    <div class="single-footer footer-newsletter">
                        <h2 class="footer-title">Our Newsletter</h2>
                        <p>Consectetur adipisicing elit se do eiusm od tempor incididunt ut labore et dolore magnas aliqua.</p>
                        <form action="#" method="post">
                            <div>
                                <input type="text" placeholder="email address">
                            </div>
                            <button class="btn btn-search btn-small" type="submit">SUBSCRIBE</button>
                            <i class="flaticon-networking"></i>
                        </form>
                        <ul class="social-icon">
                            <li>
                                <a href="#">
                                    <i class="flaticon-social"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="flaticon-social-1"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="flaticon-social-2"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="flaticon-video"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 visible-sm">
                    <div class="single-footer">
                        <h2 class="footer-title">Cataloge</h2>
                        <ul class="footer-list">
                            <li><a href="#">Cataloge1</a></li>
                            <li><a href="#">Cataloge2</a></li>
                            <li><a href="#">Cataloge3</a></li>
                            <li><a href="#">Cataloge4</a></li>
                            <li><a href="#">Cataloge5</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="footer-bottom-left pull-left">
                        <p>Copyright &copy; 2019 <span><a href="#">Tech Army</a></span>. All Right Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End -->
<!-- all js here -->
<!-- jquery latest version -->
<script src="js/vendor/jquery-1.12.0.min.js"></script>
<!-- bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- owl.carousel js -->
<script src="js/owl.carousel.min.js"></script>
<!-- jquery-ui js -->
<script src="js/jquery-ui.min.js"></script>
<!-- jquery Counterup js -->
<script src="js/jquery.counterup.min.js"></script>
<script src="js/waypoints.min.js"></script>
<!-- jquery countdown js -->
<script src="js/jquery.countdown.min.js"></script>
<!-- jquery countdown js -->
<script type="text/javascript" src="venobox/venobox.min.js"></script>
<!-- jquery Meanmenu js -->
<script src="js/jquery.meanmenu.js"></script>
<!-- wow js -->
<script src="js/wow.min.js"></script>
<script>
    new WOW().init();
</script>
<!-- scrollUp JS -->
<script src="js/jquery.scrollUp.min.js"></script>
<!-- plugins js -->
<script src="js/plugins.js"></script>
<!-- Nivo slider js -->
<script src="lib/js/jquery.nivo.slider.js" type="text/javascript"></script>
<script src="lib/home.js" type="text/javascript"></script>
<!-- main js -->
<script src="js/main.js"></script>
</body>
</html>
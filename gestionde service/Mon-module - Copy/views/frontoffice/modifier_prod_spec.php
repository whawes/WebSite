<?PHP
include "../../core/produit_specifiqueC.php";
$n=229;
$recl=new produit_specifiqueC();
$resulat=$recl->afficherProduit_specifique_a_modifier($n);
 foreach($resulat as $row)

?>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>About Us || Witter Multipage Responsive Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,700,600,500,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="mystyle">
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
</head>
<body>

</body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

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
            <div class="col-md-1 col-sm-6 visible-sm  col-xs-6">
                <div class="header-right">
                    <ul>
                        <li>
                            <a href="account.html"><i class="flaticon-people"></i></a>
                        </li>
                        <li class="shoping-cart">
                            <a href="#">
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
                                            <span>1</span>
                                            x
                                            <a href="single-product.html">East of eden</a>
                                        </p>
                                        <a href="single-product.html">S, Orange</a>
                                        <span class="cart-price">$ 140.00</span>
                                    </div>
                                    <div class="cart-product-remove">
                                        <i class="fa fa-times"></i>
                                    </div>
                                </div>
                                <div class="cart-product">
                                    <div class="cart-product-image">
                                        <a href="single-product.html">
                                            <img src="img/shop/1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-product-info">
                                        <p>
                                            <span>1</span>
                                            x
                                            <a href="single-product.html">East of eden</a>
                                        </p>
                                        <a href="single-product.html">S, Orange</a>
                                        <span class="cart-price">$ 140.00</span>
                                    </div>
                                    <div class="cart-product-remove">
                                        <i class="fa fa-times"></i>
                                    </div>
                                </div>
                                <div class="total-cart-price">
                                    <div class="cart-product-line fast-line">
                                        <span>Shipping</span>
                                        <span class="free-shiping">$10.50</span>
                                    </div>
                                    <div class="cart-product-line">
                                        <span>Total</span>
                                        <span class="total">$ 140.00</span>
                                    </div>
                                </div>
                                <div class="cart-checkout">
                                    <a href="checkout.html">
                                        Check out
                                        <i class="fa fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
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
                            <a href="account.html"><i class="flaticon-people"></i></a>
                        </li>
                        <li class="shoping-cart">
                            <a href="#">
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
                                            <span>1</span>
                                            x
                                            <a href="single-product.html">East of eden</a>
                                        </p>
                                        <a href="single-product.html">S, Orange</a>
                                        <span class="cart-price">$ 140.00</span>
                                    </div>
                                    <div class="cart-product-remove">
                                        <i class="fa fa-times"></i>
                                    </div>
                                </div>
                                <div class="cart-product">
                                    <div class="cart-product-image">
                                        <a href="single-product.html">
                                            <img src="img/shop/1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-product-info">
                                        <p>
                                            <span>1</span>
                                            x
                                            <a href="single-product.html">East of eden</a>
                                        </p>
                                        <a href="single-product.html">S, Orange</a>
                                        <span class="cart-price">$ 140.00</span>
                                    </div>
                                    <div class="cart-product-remove">
                                        <i class="fa fa-times"></i>
                                    </div>
                                </div>
                                <div class="total-cart-price">
                                    <div class="cart-product-line fast-line">
                                        <span>Shipping</span>
                                        <span class="free-shiping">$10.50</span>
                                    </div>
                                    <div class="cart-product-line">
                                        <span>Total</span>
                                        <span class="total">$ 140.00</span>
                                    </div>
                                </div>
                                <div class="cart-checkout">
                                    <a href="checkout.html">
                                        Check out
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

<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="anel-body">
                            <div class="coupon-info">

                                <form action="modifier_Produit_specifique.php" method="post">
                                <p class="form-row">
        <input type="text" placeholder="Titre de Livre *" name="titre" id="book"  value="<?PHP echo $row['Titre'] ?>"> >

                                </p>
                                    <p id="a"></p>
                                <p class="form-row">
                                <input type="text" placeholder="auteur *" name="auteur" id="author" value="<?PHP echo $row['auteur'] ?>">
                                </p>
                                    <p id="a1"></p>


                                    <p id="a3"></p>
                                <div class="shop-select">
                            <label>Category<span class="required">*</span></label>
                                <select name="categorie"  >
                                    <option value="<?PHP echo $row['categorie'] ?>">"<?PHP echo $row['categorie'] ?></option>
                                    <option value="Roman">Roman</option>
                                <option value="2">Bande dessinee</option>
                                <option value="3">Roman d'amour</option>
                                <option value="4">Fantastique</option>
                                <option value="5">Science-fiction</option>

                                </select>
                                </div>


                                    <input class="btn btn-default" type="submit" value="SEND" name="submit" id="submit" onclick="tryy()" >
                            </form>
                            </div>
                        </div>
                    </div>
</div>
</div>
</div>
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
                        <p>Copyright &copy; 2016 <span><a href="#">DevItems</a></span>. All Right Reserved.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="footer-bottom-right pull-right">
                        <img src="img/paypal.png" alt="">
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
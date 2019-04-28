<?php
require '../core/auteurC.php';
$auteur=new auteurC();
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home One || Witter Multipage Responsive Template</title>
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
    </head>
    <body>
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
                                    <li><a href="shop.html">CATALOGUE</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop.htmll">CATALOGUE1</a></li>
                                        <li><a href="shop.html">CATALOGUE2</a></li>
                                    </ul></li>
                                    <li><a href="#">ESPACE LECTEUR</a>
                                    <ul class="sub-menu">
                                        <li><a href="lecture.html">Lecture</a></li>
                                        <li><a href="#">Forum</a></li>
                                    </ul></li>
                                    <li><a href="#">RESSOURCES</a>
                                        <ul class="sub-menu">
                                            <li><a href="auteurs.php">Espace auteurs</a></li>
                                            <li><a href="Editeur.php">Espace éditeurs</a></li>

                                        </ul></li>
                                      <li><a href="login-admin.php">ESPACE ECOLE</a>
                                    </li>
                                    <li><a href="#">CONTACT</a>
                                    <ul class="sub-menu">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="contact.html">Reclamation</a></li>
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
        <!--Header Area End-->
        <!-- Mobile Menu Start -->
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul>
                                    <li><a href="index.html">HOME</a></li>
                                    <li><a href="shop.html">FEATURED</a></li>
                                    <li><a href="shop.html">REVIEW BOOK</a></li>
                                    <li><a href="about.html">ABOUT AUTHOR</a></li>
                                    <li><a href="#">pages</a>
                                        <ul>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="cart.html">Cart Page</a></li>
                                            <li><a href="checkout.html">Check Out</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="my-account.html">My Account</a></li>
                                            <li><a href="shop.html">Shopping Page</a></li>
                                            <li><a href="single-product.html">Single Shop Page</a></li>
                                            <li><a href="wishlist.html">Wishlist Page</a></li>
                                            <li><a href="404.html">404 Page</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">CONTACT</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- breadcrumbs starts here-->
         <div class="breadcrumbs-area-auteur">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumbs">
                              <div class="writing" >
       <link href="https://fonts.googleapis.com/css?family=Raleway:200,100,400" rel="stylesheet" type="text/css" />
<h1 class="writing-h1" >Nos auteurs sont
  <span
     class="txt-rotate"
     data-period="2000"
     data-rotate='[ "Talentueux.", "intelligents.", "innovateurs.", "créatifs." ]'></span>
</h1>
<h2 class="writing-h2" >Un simple click vous le prouvera !</h2>
   </div>
                           <ul class="breadcrumbs-list">
                                <li>
                                    <a title="Return to Home" href="index.html">Accueil</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- breadcrumbs ends here --> 
       <!--writer-->
    
       <div class="our-team-area">
            <h2 class="section-title">Nos Best Sellers</h2>
            <div class="container">
                <div class="row">
                <div class="team-list indicator-style">
                    <?php 
                    $liste = $auteur ->rechercherAuteurTop();
                    ?>
                        <?php foreach($liste as $row ): ?>
                        <div class="col-md-3">
                                <div class="single-team-member">
                                    <a href="#">
                                        <img style ="height:270px;width:210px" src="img/auteur/<?php echo $row['prenom'];?>.jpg" alt="">
                                    </a>
                                    <div class="member-info">
                                        <a href="#"><?php echo $row['prenom'] ;echo " "; echo $row['nom'];  ?></a>
                                     
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                  
         
                </div>
                </div>
            </div>
        </div>
        <!-- Our Team Area End -->
         <div class="layer-4">
            <style type="text/css">
                #searc{

                    margin-left: 110px;
                    border: medium none black;
  border-bottom-left-radius: 30px;
  border-top-left-radius: 30px;
  color: rgb(225,225,225);
  height: 50px;
  line-height: 50px;
  padding-left: 20px;
  position: relative;
  width: 40%;
                }
            </style>
                        <form action="searchA.php" id="searc" class="title-4" >
                            <input name="search" type="text" placeholder="Enter your book title here">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <!-- position Area End -->
        <div class="shop-tab-pill pull-right">
                                    <ul>
                                        
                                        <li class="product-size-deatils">
                                            <div class="show-label">
                                                <label><i class="fa fa-sort-amount-asc"></i>Sort by : </label>
                                                <select id="sort" onchange="sort(this.value)">
                                                    <option value="name" selected="selected">name</option>
                                                    <option value="vente">vente</option>
                                                </select>
                                            </div>
                                        </li>   
                                        
                                    </ul>
                                </div>
        <div class="shopping-cart-area section-padding">
    <div class="container">
 <div class="row" id="det">
<h2>Liste complète des auteurs</h2>
    <?php
    
        $list=$auteur->afficherAuteur();
    ?>
    <?php foreach($list as $row): ?>
    <div  class="single-shop-product">
        <div class="col-xs-12 col-sm-7 col-nn-8">
            <div class="deal-product-content">
                <h4>
                    <form action="#">
                    <a title="East of eden" href="" data-toggle="modal" data-target="#productModal"><?php echo $row['nom'] ; echo " "; echo $row['prenom'] ;echo "<br>" ?></a><span><h5><?php echo "informations :"; echo $row['informations']; echo "<br>"; echo " livres :" ; echo $row['livres']?></h5></span>
                    
                                                </form>
                </h4>
                
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div></div>
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
                                <form action="subscribe.html" method="post">
                                    <button class="btn btn-search btn-small" type="submit">SUBSCRIBE</button>
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
        <!--Quickview Product Start -->
        <div id="quickview-wrapper">
            <!-- Modal -->
            <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="modal-product">
                                <div class="product-images">
                                    <div class="main-image images">
                                        <img alt="" src="img/quick-view.jpg">
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h1>Frame Princes Cut Diamond</h1>
                                    <div class="price-box">
                                        <p class="s-price"><span class="special-price"><span class="amount">$280.00</span></span></p>
                                    </div>
                                    <a href="product-details.html" class="see-all">See all features</a>
                                    <div class="quick-add-to-cart">
                                        <form method="post" class="cart">
                                            <div class="numbers-row">
                                                <input type="number" id="french-hens" value="3">
                                            </div>
                                            <button class="single_add_to_cart_button" type="submit">Add to cart</button>
                                        </form>
                                    </div>
                                    <div class="quick-desc">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.
                                    </div>
                                    <div class="social-sharing">
                                        <div class="widget widget_socialsharing_widget">
                                            <h3 class="widget-title-modal">Share this product</h3>
                                            <ul class="social-icons">
                                                <li><a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i class="fa fa-facebook"></i></a></li>
                                                <li><a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i class="fa fa-twitter"></i></a></li>
                                                <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a target="_blank" title="Google +" href="#" class="gplus social-icon"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a target="_blank" title="LinkedIn" href="#" class="linkedin social-icon"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- .product-info -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Quickview Product-->         
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
        <script>
        function sort(id)
 {
    $.ajax({
			url: "sortauteur.php",
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
        
        </script>
    </body>
   
    </html>
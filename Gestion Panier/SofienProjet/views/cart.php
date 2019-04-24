<?php
require '../include.php';
//require '../cores/panierC.php';
session_start();

$panierC=new PanierC();
$DB = new config();
$Titre="Cart";
require 'header.php';
?>

		<!-- Mobile Menu End -->   
        <!-- Breadcrumbs Area Start -->
        <div class="breadcrumbs-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
					    <div class="breadcrumbs">
					       <h2>SHOPPING CART</h2> 
					       <ul class="breadcrumbs-list">
						        <li>
						            <a title="Return to Home" href="index.html">Home</a>
						        </li>
						        <li>Shopping Cart</li>
						    </ul>
					    </div>
					</div>
				</div>
			</div>
		</div> 
		<!-- Breadcrumbs Area Start --> 
		<!-- Cart Area Start -->
        <?php
        if(!empty($_SESSION['cart']))
            require 'AfficherPanier.php';
        else
            require 'PanierVide.php'

        ?>
		<!-- Cart Area End -->
        <!-- Discount Area Start -->

        <!-- Discount Area End -->
        <!-- Footer Area Start -->
        </div>
        <!-- Discount Area End -->
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
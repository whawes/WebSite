<?php
$Titre="Login";
require 'header.php';
?>
        <!-- Breadcrumbs Area Start -->
        <div class="breadcrumbs-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
					    <div class="breadcrumbs">
					       <h2>LOGIN/REGISTER</h2> 
					       <ul class="breadcrumbs-list">
						        <li>
						            <a title="Return to Home" href="index.php">Home</a>
						        </li>
						        <li>Login</li>
						    </ul>
					    </div>
					</div>
				</div>
			</div>
		</div> 
		<!-- Breadcrumbs Area Start --> 
        <!-- Loging Area Start -->
        <div class="login-account section-padding">
           <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <form action="#" class="create-account-form" method="post">
                            <h2 class="heading-title">
                                CREATE AN ACCOUNT
                            </h2>
                            <p class="form-row">
                                <input type="email" placeholder="Email address">
                            </p>
                            <div class="submit">					
                                <button name="submitcreate" id="submitcreate" type="submit" class="btn-default">
                                    <span>
                                        <i class="fa fa-user left"></i>
                                        Create an account
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 col-sm-6">
                       <form action="connexion.php" class="create-account-form" method="post">
                            <h2 class="heading-title">
                                ALREADY RESIGTERED?
                            </h2>
                            <p class="form-row">
                                <input name="addressmail" type="email" placeholder="Email address" required>
                            </p>
                            <p class="form-row">
                                <input name="pass" type="password" placeholder="Password" required>
                            </p>
                            <p class="lost-password form-group">
                                <a href="#" rel="nofollow">Forgot your password?</a>
                            </p> 
                            <div class="submit">					
                                <button name="submitcreate" id="submitcreate" type="submit" class="btn-default">
                                    <span>
                                        <i class="fa fa-user left"></i>
                                        SING IN
                                    </span>
                                </button>
                            </div>                          
                       </form>
                    </div>
                </div>               
           </div>
        </div>
        <!-- Loging Area End -->
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
    </body>
</html>
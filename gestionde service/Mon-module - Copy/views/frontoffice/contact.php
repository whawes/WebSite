<?php
include "../../config.php";
//require '../include.php';
session_start();
if(!isset($_SESSION['mail']) ) {
    $_SESSION['page2'] = $_SERVER['REQUEST_URI'];
    header('location:login/login.html');
}
$Titre="Contact";
require 'header.php';
?>



<!-- Mobile Menu End -->
<!-- Map Area Start -->
<div class="map-area">
    <div id="googleMap" style="width:100%;height:445px;"></div>
</div>
<!-- Map Area End -->
<!-- Address Information Area Start -->
<div class="address-info-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4 hidden-sm">
                <div class="address-single">
                    <div class="all-adress-info">
                        <div class="icon">
                            <span><i class="fa fa-user-plus"></i></span>
                        </div>
                        <div class="info">
                            <h3>PHONE</h3>
                            <p>+(216)-71-342-462</p>
                            <p>+(216)-71-344-202</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="address-single">
                    <div class="all-adress-info">
                        <div class="icon">
                            <span><i class="fa fa-map-marker"></i></span>
                        </div>
                        <div class="info">
                            <h3>ADDRESS</h3>
                            <p>46-50,Rue des Slines</p>
                            <p>Le Passage, Tunis.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="address-single no-margin">
                    <div class="all-adress-info">
                        <div class="icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="info">
                            <h3>E-MAIL</h3>
                            <p>contact@centretunisdulivre.com</p>
                            <p>www.centretunisdulivre.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Address Information Area End -->
<!-- Contact Form Area Start -->
<div class="contact-form-area">
    <div class="container">
        <div class="about-title">
            <h3>LEAVE A MESSAGE</h3>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form method="POST" action="ajouterReclamation.php">

                    <div class="col-md-7">
                        <div class="contact-form-right">
                            <div class="input-message">
                                <textarea name="msg" id="message" required placeholder="Your Message"></textarea>
                                <p id="b4"></p>

                                <input class="btn btn-default" type="submit" value="SEND" name="submit" id="submit" onclick="test()" >


                            </div>

                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
<!-- Contact Form Area End -->
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
<!-- Google Map js -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
    function initialize() {
        var mapOptions = {
            zoom: 16,
            scrollwheel: false,
            center: new google.maps.LatLng(23.763474, 90.431483)
        };
        var map = new google.maps.Map(document.getElementById('googleMap'),
            mapOptions);
        var marker = new google.maps.Marker({
            position: map.getCenter(),
            animation:google.maps.Animation.BOUNCE,
            icon: 'img/map-icon.png',
            map: map
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>
<!-- main js -->
<script src="js/main.js"></script>
<script src="contact.js"></script>
</body>
</html>
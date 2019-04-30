<?php 
include "../core/Users.php";
session_start();
$Client=new Users() ;
$clients=$Client->afficher($_SESSION['role'],$_SESSION['id']);
 
?>

<!doctype html>
<html class="no-js" lang="">
    <head>




  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>   



        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Mes information personels</title>
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
        <link rel="stylesheet" href="profilecss.css">
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
                                            <li><a href="auteurs.html">Espace auteurs</a></li>
                                            <li><a href="editeur.html">Espace éditeurs</a></li>

                                        </ul></li>
                                    <li><a href="login-admin.html">ESPACE ECOLE</a>
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
		<!-- Mobile Menu End -->   
        <!-- Breadcrumbs Area Start -->
      <!--  <div class="breadcrumbs-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
					    <div class="breadcrumbs">
					       <h2>My Account</h2> 
					       <ul class="breadcrumbs-list">
						        <li>
						            <a title="Return to Home" href="index.html">Home</a>
						        </li>
						        <li>My Account</li>
						    </ul>
					    </div>
					</div>
				</div>
			</div>
		</div> -->
		<!-- Breadcrumbs Area Start -->
		<!-- My Account Area Start -->
		<div class="my-account-area section-padding">
			<div class="container">
				<div class="section-title2">
					<p><h2>Bienvenue <?= $_SESSION['nom']?> sur votre compte. </h2></p> 
				</div><br>
			<div id="user-profile-2" class="user-profile">
        <div class="tabbable">
            <ul class="nav nav-tabs padding-18">
                <li class="active">
                    <a data-toggle="tab" href="#home">
                        <i class="green ace-icon fa fa-user bigger-120"></i>
                        Profile
                    </a>
                </li>

                <li>
                    <a data-toggle="tab" href="#feed">
                        <i class="orange ace-icon fa fa-rss bigger-120"></i>
                        Mes commandes
                    </a>
                </li>

                <li>
                    <a data-toggle="tab" href="#friends">
                        <i class="blue ace-icon fa fa-users bigger-120"></i>
                        Friends
                    </a>
                </li>

                <li>
                    <a data-toggle="tab" href="#pictures">
                        <i class="pink ace-icon fa fa-picture-o bigger-120"></i>
                        Pictures
                    </a>
                </li>
            </ul>

            <div class="tab-content no-border padding-24">
                <div id="home" class="tab-pane in active">
                    <div class="row">
                        <div class="col-xs-12 col-sm-3 center">
                            <span class="profile-picture">
                    <label for="imagepro">    <img class="editable img-responsive" alt=" Avatar" id="avatar2" src="http://bootdey.com/img/Content/avatar/avatar6.png"></label>
                            </span>
                            <input type="file" name="" id="imagepro" class="hidden">

<script type="text/javascript">
  $(document).ready(function() {

    
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.img-responsive').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    

    $(".hidden").on('change', function(){
        readURL(this);
    });
    
    $(".upload-button").on('click', function() {
       $(".hidden").click();
    });
});
</script>


                            <div class="space space-4"></div>

                            
                        </div><!-- /.col -->
<?php foreach ($clients as $row):?>
    <form action="modifierC.php?id=<?=$row['ID'];?>" method="POST">
                        <div class="col-xs-12 col-sm-9">
                            <h4 class="blue">
                                <span class="middle"><?= $row['Nom']?></span>
                            </h4>

                            <div class="profile-user-info">
                                <div class="profile-info-row">
                                    <div class="profile-info-name">Nom</div>

                                    <div class="profile-info-value">
                                        <span><input type="text" name="Nom" value="<?= $row['Nom']?>" class=""></span>
                                    </div>
                                </div>

                                <div class="profile-info-row">
                                    <div class="profile-info-name">Email</div>

                                    <div class="profile-info-value">
                                        
                                        <span><input type="email" name="Email" value="<?= $row['Email']?>" class=""></span>
                                       
                                    </div>
                                </div>

                                <div class="profile-info-row">
                                    <div class="profile-info-name">Date</div>

                                    <div class="profile-info-value">
                                        <span><input type="Date" name="Datedenaissance" value="<?= $row['DateDeNaissance']?>" class=""></span>
                                    </div>
                                </div>

                                <div class="profile-info-row">
                                    <div class="profile-info-name">Telephone</div>

                                    <div class="profile-info-value">
                                        <span><input type="text" name="Numerotelephone" value="<?= $row['NumeroTelephone']?>" class=""></span>
                                    </div>
                                </div>

                                <div class="profile-info-row">
                                    <div class="profile-info-name">Adresse</div>
                                      
                                    <div class="profile-info-value">
                                        <span><input type="text" name="Adresse" value="<?= $row['Adresse']?>" class=""></span>
                                    </div>
                                </div>
                            </div>

                            <div class="hr hr-8 dotted"></div>

                            <div class="profile-user-info">
                                <div class="profile-info-row">
                                    <div class="profile-info-name">Ville</div>

                                    <div class="profile-info-value">
                                        <span><input type="text" name="Ville" value="<?= $row['Ville']?>" class=""></span>
                                    </div>
                                </div>
                            </div>
                            <div class="profile-user-info">
                                <div class="profile-info-row">
                                    <div class="profile-info-name">Code postale</div>

                                    <div class="profile-info-value">
                                        <span><input type="text" name="Codepostale" value="<?= $row['CodePostale']?>" class=""></span>
                                    </div>
                                </div>
                            </div>
                            <div class="checkbox">
                                                        <label>
                                                            <span><input type="checkbox" name="newsletter" /></span>
                                                            Inscrivez-vous à notre newsletter!
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <span><input type="checkbox" /></span>
                                                            Recevez des offres spéciales de nos partenaires!
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <span><input type="checkbox" /></span>
                                                            Recevez des offres spéciales de nos partenaires!
                                                        </label>
                                                    </div>
                            <div class="profile-info-value">
                            <button class="btn btn-search btn-small" type="submit" name="modifier">Modifier</button>
                        </div>
                        </div>
                        </form>
                        <?php endforeach;?><!-- /.col -->
                    </div><!-- /.row -->

                    <div class="space-20"></div>

                    
                </div><!-- /#home -->

                <div id="feed" class="tab-pane">
                    <div class="profile-feed row">
                        <div class="col-sm-6">
                            <div class="profile-activity clearfix">
                                <div>
                                    <img class="pull-left" alt="Alex Doe's avatar" src="http://bootdey.com/img/Content/avatar/avatar1.png">
                                    <a class="user" href="#"> Alex Doe </a>
                                    changed his profile photo.
                                    <a href="#">Take a look</a>

                                    <div class="time">
                                        <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                        an hour ago
                                    </div>
                                </div>

                                <div class="tools action-buttons">
                                    <a href="#" class="blue">
                                        <i class="ace-icon fa fa-pencil bigger-125"></i>
                                    </a>

                                    <a href="#" class="red">
                                        <i class="ace-icon fa fa-times bigger-125"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="profile-activity clearfix">
                                <div>
                                    <img class="pull-left" alt="Susan Smith's avatar" src="http://bootdey.com/img/Content/avatar/avatar2.png">
                                    <a class="user" href="#"> Susan Smith </a>

                                    is now friends with Alex Doe.
                                    <div class="time">
                                        <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                        2 hours ago
                                    </div>
                                </div>

                                <div class="tools action-buttons">
                                    <a href="#" class="blue">
                                        <i class="ace-icon fa fa-pencil bigger-125"></i>
                                    </a>

                                    <a href="#" class="red">
                                        <i class="ace-icon fa fa-times bigger-125"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="profile-activity clearfix">
                                <div>
                                    <i class="pull-left thumbicon fa fa-check btn-success no-hover"></i>
                                    <a class="user" href="#"> Alex Doe </a>
                                    joined
                                    <a href="#">Country Music</a>

                                    group.
                                    <div class="time">
                                        <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                        5 hours ago
                                    </div>
                                </div>

                                <div class="tools action-buttons">
                                    <a href="#" class="blue">
                                        <i class="ace-icon fa fa-pencil bigger-125"></i>
                                    </a>

                                    <a href="#" class="red">
                                        <i class="ace-icon fa fa-times bigger-125"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="profile-activity clearfix">
                                <div>
                                    <i class="pull-left thumbicon fa fa-picture-o btn-info no-hover"></i>
                                    <a class="user" href="#"> Alex Doe </a>
                                    uploaded a new photo.
                                    <a href="#">Take a look</a>

                                    <div class="time">
                                        <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                        5 hours ago
                                    </div>
                                </div>

                                <div class="tools action-buttons">
                                    <a href="#" class="blue">
                                        <i class="ace-icon fa fa-pencil bigger-125"></i>
                                    </a>

                                    <a href="#" class="red">
                                        <i class="ace-icon fa fa-times bigger-125"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="profile-activity clearfix">
                                <div>
                                    <img class="pull-left" alt="David Palms's avatar" src="http://bootdey.com/img/Content/avatar/avatar3.png">
                                    <a class="user" href="#"> David Palms </a>

                                    left a comment on Alex's wall.
                                    <div class="time">
                                        <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                        8 hours ago
                                    </div>
                                </div>

                                <div class="tools action-buttons">
                                    <a href="#" class="blue">
                                        <i class="ace-icon fa fa-pencil bigger-125"></i>
                                    </a>

                                    <a href="#" class="red">
                                        <i class="ace-icon fa fa-times bigger-125"></i>
                                    </a>
                                </div>
                            </div>
                        </div><!-- /.col -->

                        <div class="col-sm-6">
                            <div class="profile-activity clearfix">
                                <div>
                                    <i class="pull-left thumbicon fa fa-pencil-square-o btn-pink no-hover"></i>
                                    <a class="user" href="#"> Alex Doe </a>
                                    published a new blog post.
                                    <a href="#">Read now</a>

                                    <div class="time">
                                        <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                        11 hours ago
                                    </div>
                                </div>

                                <div class="tools action-buttons">
                                    <a href="#" class="blue">
                                        <i class="ace-icon fa fa-pencil bigger-125"></i>
                                    </a>

                                    <a href="#" class="red">
                                        <i class="ace-icon fa fa-times bigger-125"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="profile-activity clearfix">
                                <div>
                                    <img class="pull-left" alt="Alex Doe's avatar" src="http://bootdey.com/img/Content/avatar/avatar4.png">
                                    <a class="user" href="#"> Alex Doe </a>

                                    upgraded his skills.
                                    <div class="time">
                                        <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                        12 hours ago
                                    </div>
                                </div>

                                <div class="tools action-buttons">
                                    <a href="#" class="blue">
                                        <i class="ace-icon fa fa-pencil bigger-125"></i>
                                    </a>

                                    <a href="#" class="red">
                                        <i class="ace-icon fa fa-times bigger-125"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="profile-activity clearfix">
                                <div>
                                    <i class="pull-left thumbicon fa fa-key btn-info no-hover"></i>
                                    <a class="user" href="#"> Alex Doe </a>

                                    logged in.
                                    <div class="time">
                                        <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                        12 hours ago
                                    </div>
                                </div>

                                <div class="tools action-buttons">
                                    <a href="#" class="blue">
                                        <i class="ace-icon fa fa-pencil bigger-125"></i>
                                    </a>

                                    <a href="#" class="red">
                                        <i class="ace-icon fa fa-times bigger-125"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="profile-activity clearfix">
                                <div>
                                    <i class="pull-left thumbicon fa fa-power-off btn-inverse no-hover"></i>
                                    <a class="user" href="#"> Alex Doe </a>

                                    logged out.
                                    <div class="time">
                                        <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                        16 hours ago
                                    </div>
                                </div>

                                <div class="tools action-buttons">
                                    <a href="#" class="blue">
                                        <i class="ace-icon fa fa-pencil bigger-125"></i>
                                    </a>

                                    <a href="#" class="red">
                                        <i class="ace-icon fa fa-times bigger-125"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="profile-activity clearfix">
                                <div>
                                    <i class="pull-left thumbicon fa fa-key btn-info no-hover"></i>
                                    <a class="user" href="#"> Alex Doe </a>

                                    logged in.
                                    <div class="time">
                                        <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                        16 hours ago
                                    </div>
                                </div>

                                <div class="tools action-buttons">
                                    <a href="#" class="blue">
                                        <i class="ace-icon fa fa-pencil bigger-125"></i>
                                    </a>

                                    <a href="#" class="red">
                                        <i class="ace-icon fa fa-times bigger-125"></i>
                                    </a>
                                </div>
                            </div>
                        </div><!-- /.col -->
                    </div><!-- /.row -->

                    <div class="space-12"></div>

                    <div class="center">
                        <button type="button" class="btn btn-sm btn-primary btn-white btn-round">
                            <i class="ace-icon fa fa-rss bigger-150 middle orange2"></i>
                            <span class="bigger-110">View more activities</span>

                            <i class="icon-on-right ace-icon fa fa-arrow-right"></i>
                        </button>
                    </div>
                </div><!-- /#feed -->

                <div id="friends" class="tab-pane">
                    <div class="profile-users clearfix">
                        <div class="itemdiv memberdiv">
                            <div class="inline pos-rel">
                                <div class="user">
                                    <a href="#">
                                        <img src="http://bootdey.com/img/Content/avatar/avatar6.png" alt="Bob Doe's avatar">
                                    </a>
                                </div>

                                <div class="body">
                                    <div class="name">
                                        <a href="#">
                                            <span class="user-status status-online"></span>
                                            Bob Doe
                                        </a>
                                    </div>
                                </div>

                                <div class="popover">
                                    <div class="arrow"></div>

                                    <div class="popover-content">
                                        <div class="bolder">Content Editor</div>

                                        <div class="time">
                                            <i class="ace-icon fa fa-clock-o middle bigger-120 orange"></i>
                                            <span class="green"> 20 mins ago </span>
                                        </div>

                                        <div class="hr dotted hr-8"></div>

                                        <div class="tools action-buttons">
                                            <a href="#">
                                                <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="itemdiv memberdiv">
                            <div class="inline pos-rel">
                                <div class="user">
                                    <a href="#">
                                        <img src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="Rose Doe's avatar">
                                    </a>
                                </div>

                                <div class="body">
                                    <div class="name">
                                        <a href="#">
                                            <span class="user-status status-offline"></span>
                                            Rose Doe
                                        </a>
                                    </div>
                                </div>

                                <div class="popover">
                                    <div class="arrow"></div>

                                    <div class="popover-content">
                                        <div class="bolder">Graphic Designer</div>

                                        <div class="time">
                                            <i class="ace-icon fa fa-clock-o middle bigger-120 grey"></i>
                                            <span class="grey"> 30 min ago </span>
                                        </div>

                                        <div class="hr dotted hr-8"></div>

                                        <div class="tools action-buttons">
                                            <a href="#">
                                                <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="itemdiv memberdiv">
                            <div class="inline pos-rel">
                                <div class="user">
                                    <a href="#">
                                        <img src="http://bootdey.com/img/Content/avatar/avatar2.png" alt="Jim Doe's avatar">
                                    </a>
                                </div>

                                <div class="body">
                                    <div class="name">
                                        <a href="#">
                                            <span class="user-status status-busy"></span>
                                            Jim Doe
                                        </a>
                                    </div>
                                </div>

                                <div class="popover">
                                    <div class="arrow"></div>

                                    <div class="popover-content">
                                        <div class="bolder">SEO &amp; Advertising</div>

                                        <div class="time">
                                            <i class="ace-icon fa fa-clock-o middle bigger-120 red"></i>
                                            <span class="grey"> 1 hour ago </span>
                                        </div>

                                        <div class="hr dotted hr-8"></div>

                                        <div class="tools action-buttons">
                                            <a href="#">
                                                <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="itemdiv memberdiv">
                            <div class="inline pos-rel">
                                <div class="user">
                                    <a href="#">
                                        <img src="http://bootdey.com/img/Content/avatar/avatar3.png" alt="Alex Doe's avatar">
                                    </a>
                                </div>

                                <div class="body">
                                    <div class="name">
                                        <a href="#">
                                            <span class="user-status status-idle"></span>
                                            Alex Doe
                                        </a>
                                    </div>
                                </div>

                                <div class="popover">
                                    <div class="arrow"></div>

                                    <div class="popover-content">
                                        <div class="bolder">Marketing</div>

                                        <div class="time">
                                            <i class="ace-icon fa fa-clock-o middle bigger-120 orange"></i>
                                            <span class=""> 40 minutes idle </span>
                                        </div>

                                        <div class="hr dotted hr-8"></div>

                                        <div class="tools action-buttons">
                                            <a href="#">
                                                <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="itemdiv memberdiv">
                            <div class="inline pos-rel">
                                <div class="user">
                                    <a href="#">
                                        <img src="http://bootdey.com/img/Content/avatar/avatar4.png" alt="Phil Doe's avatar">
                                    </a>
                                </div>

                                <div class="body">
                                    <div class="name">
                                        <a href="#">
                                            <span class="user-status status-online"></span>
                                            Phil Doe
                                        </a>
                                    </div>
                                </div>

                                <div class="popover">
                                    <div class="arrow"></div>

                                    <div class="popover-content">
                                        <div class="bolder">Public Relations</div>

                                        <div class="time">
                                            <i class="ace-icon fa fa-clock-o middle bigger-120 orange"></i>
                                            <span class="green"> 2 hours ago </span>
                                        </div>

                                        <div class="hr dotted hr-8"></div>

                                        <div class="tools action-buttons">
                                            <a href="#">
                                                <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="itemdiv memberdiv">
                            <div class="inline pos-rel">
                                <div class="user">
                                    <a href="#">
                                        <img src="http://bootdey.com/img/Content/avatar/avatar6.png" alt="Susan Doe's avatar">
                                    </a>
                                </div>

                                <div class="body">
                                    <div class="name">
                                        <a href="#">
                                            <span class="user-status status-online"></span>
                                            Susan Doe
                                        </a>
                                    </div>
                                </div>

                                <div class="popover">
                                    <div class="arrow"></div>

                                    <div class="popover-content">
                                        <div class="bolder">HR Management</div>

                                        <div class="time">
                                            <i class="ace-icon fa fa-clock-o middle bigger-120 orange"></i>
                                            <span class="green"> 20 mins ago </span>
                                        </div>

                                        <div class="hr dotted hr-8"></div>

                                        <div class="tools action-buttons">
                                            <a href="#">
                                                <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="itemdiv memberdiv">
                            <div class="inline pos-rel">
                                <div class="user">
                                    <a href="#">
                                        <img src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="Jennifer Doe's avatar">
                                    </a>
                                </div>

                                <div class="body">
                                    <div class="name">
                                        <a href="#">
                                            <span class="user-status status-offline"></span>
                                            Jennifer Doe
                                        </a>
                                    </div>
                                </div>

                                <div class="popover">
                                    <div class="arrow"></div>

                                    <div class="popover-content">
                                        <div class="bolder">Graphic Designer</div>

                                        <div class="time">
                                            <i class="ace-icon fa fa-clock-o middle bigger-120 grey"></i>
                                            <span class="grey"> 2 hours ago </span>
                                        </div>

                                        <div class="hr dotted hr-8"></div>

                                        <div class="tools action-buttons">
                                            <a href="#">
                                                <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="itemdiv memberdiv">
                            <div class="inline pos-rel">
                                <div class="user">
                                    <a href="#">
                                        <img src="http://bootdey.com/img/Content/avatar/avatar2.png" alt="Alexa Doe's avatar">
                                    </a>
                                </div>

                                <div class="body">
                                    <div class="name">
                                        <a href="#">
                                            <span class="user-status status-offline"></span>
                                            Alexa Doe
                                        </a>
                                    </div>
                                </div>

                                <div class="popover">
                                    <div class="arrow"></div>

                                    <div class="popover-content">
                                        <div class="bolder">Accounting</div>

                                        <div class="time">
                                            <i class="ace-icon fa fa-clock-o middle bigger-120 grey"></i>
                                            <span class="grey"> 4 hours ago </span>
                                        </div>

                                        <div class="hr dotted hr-8"></div>

                                        <div class="tools action-buttons">
                                            <a href="#">
                                                <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="hr hr10 hr-double"></div>

                    <ul class="pager pull-right">
                        <li class="previous disabled">
                            <a href="#">← Prev</a>
                        </li>

                        <li class="next">
                            <a href="#">Next →</a>
                        </li>
                    </ul>
                </div><!-- /#friends -->

                <div id="pictures" class="tab-pane">
                    <ul class="ace-thumbnails">
                        <li>
                            <a href="#" data-rel="colorbox">
                                <img alt="150x150" src="http://lorempixel.com/200/200/nature/1/">
                                <div class="text">
                                    <div class="inner">Sample Caption on Hover</div>
                                </div>
                            </a>

                            <div class="tools tools-bottom">
                                <a href="#">
                                    <i class="ace-icon fa fa-link"></i>
                                </a>

                                <a href="#">
                                    <i class="ace-icon fa fa-paperclip"></i>
                                </a>

                                <a href="#">
                                    <i class="ace-icon fa fa-pencil"></i>
                                </a>

                                <a href="#">
                                    <i class="ace-icon fa fa-times red"></i>
                                </a>
                            </div>
                        </li>

                        <li>
                            <a href="#" data-rel="colorbox">
                                <img alt="150x150" src="http://lorempixel.com/200/200/nature/2/">
                                <div class="text">
                                    <div class="inner">Sample Caption on Hover</div>
                                </div>
                            </a>

                            <div class="tools tools-bottom">
                                <a href="#">
                                    <i class="ace-icon fa fa-link"></i>
                                </a>

                                <a href="#">
                                    <i class="ace-icon fa fa-paperclip"></i>
                                </a>

                                <a href="#">
                                    <i class="ace-icon fa fa-pencil"></i>
                                </a>

                                <a href="#">
                                    <i class="ace-icon fa fa-times red"></i>
                                </a>
                            </div>
                        </li>

                        <li>
                            <a href="#" data-rel="colorbox">
                                <img alt="150x150" src="http://lorempixel.com/200/200/nature/3/">
                                <div class="text">
                                    <div class="inner">Sample Caption on Hover</div>
                                </div>
                            </a>

                            <div class="tools tools-bottom">
                                <a href="#">
                                    <i class="ace-icon fa fa-link"></i>
                                </a>

                                <a href="#">
                                    <i class="ace-icon fa fa-paperclip"></i>
                                </a>

                                <a href="#">
                                    <i class="ace-icon fa fa-pencil"></i>
                                </a>

                                <a href="#">
                                    <i class="ace-icon fa fa-times red"></i>
                                </a>
                            </div>
                        </li>

                        <li>
                            <a href="#" data-rel="colorbox">
                                <img alt="150x150" src="http://lorempixel.com/200/200/nature/4/">
                                <div class="text">
                                    <div class="inner">Sample Caption on Hover</div>
                                </div>
                            </a>

                            <div class="tools tools-bottom">
                                <a href="#">
                                    <i class="ace-icon fa fa-link"></i>
                                </a>

                                <a href="#">
                                    <i class="ace-icon fa fa-paperclip"></i>
                                </a>

                                <a href="#">
                                    <i class="ace-icon fa fa-pencil"></i>
                                </a>

                                <a href="#">
                                    <i class="ace-icon fa fa-times red"></i>
                                </a>
                            </div>
                        </li>

                        <li>
                            <a href="#" data-rel="colorbox">
                                <img alt="150x150" src="http://lorempixel.com/200/200/nature/5/">
                                <div class="text">
                                    <div class="inner">Sample Caption on Hover</div>
                                </div>
                            </a>

                            <div class="tools tools-bottom">
                                <a href="#">
                                    <i class="ace-icon fa fa-link"></i>
                                </a>

                                <a href="#">
                                    <i class="ace-icon fa fa-paperclip"></i>
                                </a>

                                <a href="#">
                                    <i class="ace-icon fa fa-pencil"></i>
                                </a>

                                <a href="#">
                                    <i class="ace-icon fa fa-times red"></i>
                                </a>
                            </div>
                        </li>

                        <li>
                            <a href="#" data-rel="colorbox">
                                <img alt="150x150" src="http://lorempixel.com/200/200/nature/6/">
                                <div class="text">
                                    <div class="inner">Sample Caption on Hover</div>
                                </div>
                            </a>

                            <div class="tools tools-bottom">
                                <a href="#">
                                    <i class="ace-icon fa fa-link"></i>
                                </a>

                                <a href="#">
                                    <i class="ace-icon fa fa-paperclip"></i>
                                </a>

                                <a href="#">
                                    <i class="ace-icon fa fa-pencil"></i>
                                </a>

                                <a href="#">
                                    <i class="ace-icon fa fa-times red"></i>
                                </a>
                            </div>
                        </li>

                        <li>
                            <a href="#" data-rel="colorbox">
                                <img alt="150x150" src="http://lorempixel.com/200/200/nature/7/">
                                <div class="text">
                                    <div class="inner">Sample Caption on Hover</div>
                                </div>
                            </a>

                            <div class="tools tools-bottom">
                                <a href="#">
                                    <i class="ace-icon fa fa-link"></i>
                                </a>

                                <a href="#">
                                    <i class="ace-icon fa fa-paperclip"></i>
                                </a>

                                <a href="#">
                                    <i class="ace-icon fa fa-pencil"></i>
                                </a>

                                <a href="#">
                                    <i class="ace-icon fa fa-times red"></i>
                                </a>
                            </div>
                        </li>

                        <li>
                            <a href="#" data-rel="colorbox">
                                <img alt="150x150" src="http://lorempixel.com/200/200/nature/1/">
                                <div class="text">
                                    <div class="inner">Sample Caption on Hover</div>
                                </div>
                            </a>

                            <div class="tools tools-bottom">
                                <a href="#">
                                    <i class="ace-icon fa fa-link"></i>
                                </a>

                                <a href="#">
                                    <i class="ace-icon fa fa-paperclip"></i>
                                </a>

                                <a href="#">
                                    <i class="ace-icon fa fa-pencil"></i>
                                </a>

                                <a href="#">
                                    <i class="ace-icon fa fa-times red"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div><!-- /#pictures -->
            </div>
        </div>
    </div>
				<div class="row">
					<div class="col-md-12">
						<div class="create-account-button pull-left">
							<a href="index.html" class="btn button button-small" title="Home">
								<span>
									<i class="fa fa-chevron-left"></i>
									  Home
								</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- My Account Area End -->
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
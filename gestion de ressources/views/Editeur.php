<?php
require '../core/EditeurC.php';
$editeur=new EditeurC();
?>

<!doctype html>

<html class="no-js" lang="">
<head>
    <style>
        .myModalWindow{
            z-index: 10;//or higher, depends on z-index of other elements on your page
        }
    </style>
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
<?php require 'templates/header.php'?>
<!--Header Area End-->
<div class="breadcrumbs-area-auteur">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs">
                    <div class="writing" >
                        <link href="https://fonts.googleapis.com/css?family=Raleway:200,100,400" rel="stylesheet" type="text/css" />
                        <h1 class="writing-h1" >Trouvez les
                            <span
                                    class="txt-rotate"
                                    data-period="2000"
                                    data-rotate='[ "Meilleurs ", "Plus Intéressents " ]'></span> éditeurs.
                        </h1>
                        <h2 class="writing-h2" >Chez le Centre Tunisien Du Livre</h2>
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

<!-- Mobile Menu Start -->
<?php
$limit=9;
$liste = $editeur ->afficherEditeur();
$total_records  = $liste ->rowCount();
$total_pages = ceil($total_records / $limit);

?>
<!-- editeur -->
<div class="our-team-area">
    <h2 class="section-title">Nos Best Sellers</h2>
    <div class="layer-4">
   
    <form action="search.php" id="searc" class="title-4" >
        <input name="search" type="text" placeholder="Enter your book title here">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>
</div>
<!--position menu Area start-->

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
    <div class="container">
        <div id="target-content" class="clearfix">
        </div>

    </div>
</div>
<div style="padding-left: 730px">
    <ul class='pagination' id="pagination">
        <?php if(!empty($total_pages)):for($i=1; $i<=$total_pages; $i++):
            if($i == 1):?>
                <li class='page-item active'  id="<?php echo $i;?>"><a href='response.php?page=<?php echo $i;?>' class="page-link"><?php echo $i;?></a></li>
            <?php else:?>
                <li id="<?php echo $i;?>" class="page-item"><a href='response.php?page=<?php echo $i;?>' class="page-link"><?php echo $i;?></a></li>
            <?php endif;?>
        <?php endfor;endif;?>
    </ul>
</div>
<!--Search-->

<!-- Affichage PHP Start -->
<div id="target-content" class="clearfix">
</div>

<!-- Footer Area Start -->
<footer>      <!-- Our Team Area End -->
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


<!-- Modal content-->



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
<script type="text/javascript">
    function sort(id)
    {
        $.ajax({
            url: "sortalpha.php",
            data:{data: id},
            type: "POST",
            success: function(data){
                $('#det').html(data);
            }
        });
    }


    function mod(id){
        // window.location.href = "details.php?id=" + id;
        // $.post('details.php', {variable: id});

        console.log(id);
        $.ajax({
                type : "POST",
                url : "details.php",
                data :  {data: id},
                success : function(data)
                {
                    $(".modal-content").html(data);
                    $('#myModal').modal('show');

                    //alert(data)
                },
                error: function(jqxhr, status, exception) {
                    alert('Exception:', exception);
                }

            }

        );

    }
</script>



<script type="text/javascript">
    $(document).ready(function(){
        jQuery("#target-content").load("page.php?page=1");
    })
</script>

<script>

    jQuery("#pagination li").on('click',function(e){
        e.preventDefault();
        jQuery("#target-content").html('loading...');
        jQuery("#pagination li").removeClass('active');
        jQuery(this).addClass('active');
        var pageNum = this.id;
        jQuery("#target-content").load("response.php?page=" + pageNum);
    });

    $(document).ready(function(){
        jQuery("#target-content").load("response.php?page=1");
    })
</script>



<style type="text/css">
    .card {
        height: 260px;
        width: 20%;
        margin-top:10px;
        margin-right:10px;
        float: left
    }
    .page-container {
        margin-top: 20px;
    }
</style>

</body>

</html>


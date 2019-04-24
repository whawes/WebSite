<div class="col-md-1 hidden-sm">
    <div class="header-right">
        <ul>
            <?php if(!empty($_SESSION['mail']))
            {?>
                <li class="shoping-cart">
                    <a href="my-account.php">
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
                                <span>Shipping</span>
                                <span class="free-shiping"><a href=""><i class="fa fa-times"></i></a></span>
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
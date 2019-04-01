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
                    <?php $liste=$panierC->afficherPanier(); ?>
                    <?php foreach($liste as $row): ?>
                    <div class="cart-product">

                        <div class="cart-product-image">
                            <a href="single-product.html">
                                <img src="img/shop/1.jpg" alt="">
                            </a>
                        </div>
                        <div class="cart-product-info">
                            <p>
                                <span><?=$row['Qty_Produit']?></span>
                                x
                                <a href="single-product.html"><?=$row['Nom_Produit']?></a>
                            </p>
                            <a href="single-product.html">S, Orange</a>
                            <span class="cart-price">$ <?=$row['Prix_Produit']?></span>
                        </div>
                        <div class="cart-product-remove">
                            <i class="fa fa-times"></i>
                        </div>

                    </div>
                    <?php endforeach; ?>
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
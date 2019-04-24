<?php
$nbr=0;
if(!empty($_SESSION['cart'])){
                        foreach($_SESSION["cart"] as $keys => $values) {
                            $nbr += $values['qty'];

                        }}?>
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
                    <span><?=$nbr?></span>
                </a>

                <div class="add-to-cart-product">
                    <?php

                    $total = 0;
                    $subtotal=0;
                    $nbr=0;
                    if(!empty($_SESSION['cart'])){

                        foreach($_SESSION["cart"] as $keys => $values)
                        {
                            $total += ($values['qty'] * $values['prix']);
                            $subtotal +=  $values['prix'];
                            $nbr+=$values['qty'];


                            ?>
                    <div class="cart-product">

                        <div class="cart-product-image">
                            <a href="single-product.html">
                                <img src="img/shop/1.jpg" alt="">
                            </a>
                        </div>
                        <div class="cart-product-info">
                            <p>
                                <span><?= $values['qty'] ;?></span>
                                x
                                <a href="single-product.html"><?= $values['nom'] ;?></a>
                            </p>
                            <a href="single-product.html"></a>
                            <span class="cart-price">$ <?= $values['prix'] ;?></span>
                        </div>
                        <div class="cart-product-remove">
                            <a href="SupprimerPanier.php?id=<?= $values['id'] ;?>">
                            <i class="fa fa-times"></i>
                            </a>
                        </div>

                    </div>
                    <?php } }?>
                    <div class="total-cart-price">
                        <div class="cart-product-line fast-line">
                            <span>Shipping</span>
                            <span class="free-shiping"><?= $subtotal ?>DT</span>
                        </div>
                        <div class="cart-product-line">
                            <span>Total</span>
                            <span class="total"><?= $total ?>DT</span>
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
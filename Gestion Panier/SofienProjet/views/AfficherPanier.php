
<div class="shopping-cart-area section-padding">
    <div class="container">

        <div class="row">
            <div class="col-md-12">

                <div class="wishlist-table-area table-responsive">
                    <table>
                        <thead>
                        <tr>
                            <th class="product-remove">Remove</th>
                            <th class="product-image">Image</th>
                            <th class="t-product-name">Product Name</th>
                            <th class="product-unit-price">Unit Price</th>
                            <th class="product-unit-price">Edit</th>
                            <th class="product-quantity">Quantity</th>
                            <th class="product-subtotal">Subtotal</th>
                        </tr>
                        </thead>
                        <?php
                        $total = 0;
                        $subtotal=0;


                        if(!empty($_SESSION['cart']))
                        {
                        foreach($_SESSION['cart'] as $keys => $values)
                        {
                            $total +=($values['qty'] * $values['prix']);
                            $subtotal +=  $values['prix'];

                        ?>
                            <tbody>
                            <tr>
                                <td class="product-remove">
                                    <a href="SupprimerPanier.php?id=<?= $values['id'] ;?>">
                                        <i class="flaticon-delete"></i>
                                    </a>
                                </td>
                                <td class="product-image">
                                    <a href="#">
                                        <img src="img/shop/1.jpg"  alt="" width="50" height="50">
                                    </a>
                                </td>
                                <td class="t-product-name">
                                    <h3>
                                        <a href="#"><?= $values['nom']; ?></a>
                                    </h3>
                                </td>
                                    <td class="product-unit-price">
                                       <span> <?= $values['prix']; ?>DT</span>
                                    </td>
                                <form method="post" action="ModifierPanier.php?id=<?= $values['id'] ;?>">
                                <td class="product-unit-price">
                                    <button type="submit" value="edit" name="edit"style="font-size:24px"><i class="material-icons">mode_edit</i></button>
                                </td>
                                    <td class="product-quantity product-cart-details">
                                        <input name="qty" min="1" type="number" value="<?= $values['qty']; ?>">
                                    </td>
                                </form>

                                <td class="product-quantity" >
                                    <div id="cart-price-<?= $values['id']; ?>">
                                    <?= $values['prix']*$values['qty']; ?>
                                    </div>
                                </td>

                            </tr>

                            </tbody>
                        <?php }} ?>
                    </table>
                </div>
                <div class="shopingcart-bottom-area">
                    <a class="left-shoping-cart" href="shop.php">CONTINUE SHOPPING</a>
                    <div class="shopingcart-bottom-area pull-right">
                        <a class="right-shoping-cart" href="SupprimerPanier.php?action=delete">CLEAR SHOPPING CART</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="discount-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="subtotal-main-area">
                    <div class="subtotal-area">
                        <h2>SUBTOTAL<span><?= number_format($subtotal, 0); ?>DT</span></h2>
                    </div>
                    <div class="subtotal-area">
                        <h2>GRAND TOTAL<span><?= number_format($total, 0); ?>DT</span></h2>
                    </div>
                    <a href="chekout.php">CHECKOUT</a>
                    <p>Checkout With Multiple Addresses</p>
                </div>
            </div>
        </div>
    </div>
</div>

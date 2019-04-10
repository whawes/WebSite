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
                            <th class="product-edit">Edit</th>
                            <th class="product-unit-price">Unit Price</th>
                            <th class="product-quantity">Quantity</th>
                            <th class="product-subtotal">Subtotal</th>
                        </tr>
                        </thead>
                        <?php $list=$panierC->afficherPanier(); ?>
                        <?php foreach($list as $row): ?>
                            <tbody>
                            <tr>
                                <td class="product-remove">
                                    <a href="supprimerPanier.php?id=<?=$row['ID_Produit']?>">
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
                                        <a href="#"><?=$row['Nom_Produit']?></a>
                                    </h3>
                                </td>
                                <form action="ModifierPanier.php?id=<?=$row['ID_Produit']?>" method="POST">

                                    <td class="product-edit">
                                        <p>
                                            <input type="submit" value="Edit" name="button" min="1">

                                        </p>
                                    </td>

                                    <td class="product-unit-price">
                                        <?=$row['Prix_Produit']?>DT
                                    </td>

                                    <td class="product-quantity product-cart-details"  >
                                        <input type="number" value=<?=$row['Qty_Produit']?> name="qty" min="1">

                                    </td>
                                </form>
                                <td class="product-quantity">
                                    <p><?=$row['Prix_Produit']*$row['Qty_Produit']?>DT</p>
                                </td>
                            </tr>

                            </tbody>
                        <?php endforeach; ?>
                    </table>
                </div>
                <div class="shopingcart-bottom-area">
                    <a class="left-shoping-cart" href="shop.php">CONTINUE SHOPPING</a>
                    <div class="shopingcart-bottom-area pull-right">
                        <a class="right-shoping-cart" href="supprimerPanier.php?id='%'">CLEAR SHOPPING CART</a>

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
                        <h2>SUBTOTAL<span><?= $somme=$panierC->subtotalPanier(); ?>DT</span></h2>
                    </div>
                    <div class="subtotal-area">
                        <h2>GRAND TOTAL<span><?= $panierC->totalPanier(); ?>DT</span></h2>
                    </div>
                    <a href="chekout.php">CHECKOUT</a>
                    <p>Checkout With Multiple Addresses</p>
                </div>
            </div>
        </div>
    </div>
</div>
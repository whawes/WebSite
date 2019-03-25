<?php
require '../cores/commandeC.php';
$commande=new CommandeC();
?>
<div class="shopping-area section-padding">
    <div class="container">

                <div class="wishlist-right-area table-responsive">
                    <table class="wish-list-table">
                        <thead>
                        <tr>
                            <th class="t-product-name">Num°Commande</th>
                            <th class="product-details-comment">Date Commande</th>
                            <th class="t-product-name">Etat Commande</th>
                            <th class="product-price-cart">Facture</th>
                            <th class="w-product-remove">Remove</th>
                        </tr>
                        </thead>
                        <?php $list=$commande->afficherCommande(); ?>
                        <?php foreach($list as $row): ?>
                        <tbody>
                        <tr>
                            <td class="product-image">
                                <h4><?= $row['ID_Commande'] ?></h4>
                            </td>
                            <td class="product-details">
                                <h4><?= $row['Date_Creation'] ?></h4>

                            </td>
                            <td class="product-details">
                                <h4><?= $row['Etat_Commande'] ?></h4>

                            </td>
                            <td class="product-cart">
                                <div class="product-cart-details">
                                    <br>
                                    <input type="submit" value="View Facture">
                                    <input type="submit" value="Telechagére Facture">
                                </div>
                            </td>
                            <td class="product-remove">
                                <a href="#">
                                    <i class="flaticon-delete"></i>
                                </a>
                            </td>
                        </tr>

                        </tbody>
                        <?php endforeach; ?>

                    </table>
                </div>
                <div class="wishlist-bottom-link">
                    <a class="wishlist-single-link" href="index.html">
                        <i class="fa fa-angle-double-left"></i>
                        Back
                    </a>
                    <div class="shopingcart-bottom-area wishlist-bottom-area pull-right">
                        <a href="#" class="right-shoping-cart">SHARE WISHLIST</a>
                        <a href="#" class="right-shoping-cart">ADD ALL TO CART</a>
                        <a href="#" class="right-shoping-cart">UPDATE WISHLIST</a>
                    </div>
                </div>

    </div>
</div>
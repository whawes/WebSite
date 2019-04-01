<?php
require '../cores/commandeC.php';
$commande=new CommandeC();
?>
<div class="shopping-area section-padding">
    <div class="container">

                <div class="wishlist-right-area table-responsive">
                    <table class="wish-list-table" >
                        <thead>
                        <tr>
                            <th class="t-product-name">Num°Commande</th>
                            <th class="product-details-comment">Date Commande</th>
                            <th class="product-details-comment">Adresse</th>
                            <th class="t-product-name">Etat Commande</th>
                            <th class="product-price-cart">Facture</th>
                            <th class="w-product-remove">Remove</th>
                        </tr>
                        </thead>
                        <?php $list=$commande->afficherCommande(); ?>
                        <?php foreach($list as $row): ?>
                        <tbody>
                        <tr>
                            <td >
                                <h4><?= $row['ID_Commande'] ?></h4>
                            </td>
                            <td >
                                <h4><?= $row['Date_Creation'] ?></h4>

                            </td >

                            <td class="product-edit">
                                <p>
                                    <input type="submit" value="Edit" name="button">

                                </p>
                            </td>


                            <td >
                                <h4><?= $row['Etat_Commande'] ?></h4>

                            </td>
                            <td>

                                    <a href="" title="Quick view" data-toggle="modal" data-target="#productModal">
                                    <input  type="submit"  name="ok" value="facture">
                                    </a>
                                <br>
                                    <input type="submit" value="Telechagére Facture">
                                <br>
                            </td>
                            <td class="product-remove">
                                <a href="SupprimerCommande.php?id=<?=$row['ID_Commande']?>">
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
                        <a href="#" class="right-shoping-cart">UPDATE WISHLIST</a>
                    </div>
                </div>

    </div>
</div>
<div id="quickview-wrapper">
    <!-- Modal -->
    <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="wishlist-right-area table-responsive">
                        <div class="modal-body">
                            <div class="wishlist-right-area table-responsive">
                                <table class="wish-list-table">
                                    <thead>
                                    <tr>
                                        <th class="t-product-name">Nom Produit</th>
                                        <th class="product-details-comment">Quantite</th>
                                        <th class="t-product-name">Prix Unit</th>

                                    </tr>
                                    </thead>
                                    <?php $list=$commande->afficherFacture(1); ?>
                                    <?php foreach($list as $row): ?>
                                        <tbody>
                                        <tr>
                                            <td class="product-image">
                                                <h4><?= $row['Nom_Produit'] ?></h4>
                                            </td>
                                            <td class="product-details">
                                                <h4><?= $row['Qty_Produit'] ?></h4>

                                            </td>
                                            <td class="product-details">
                                                <h4><?= $row['Prix_Produit'] ?></h4>
                                            </td>
                                        </tr>

                                        </tbody>
                                    <?php endforeach; ?>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
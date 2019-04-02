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

                                    <a href="ModifierCommande.php?id=<?= $row['ID_Commande'] ?>"><input  type="submit" value="Edit" name="button"></a>

                                </p>

                            </td>


                            <td >
                                <h4><?= $row['Etat_Commande'] ?></h4>

                            </td>
                            <td>
                                <form action="facture.php?id=<?= $row['ID_Commande'] ?>" method="post">
                                <input  type="submit"  name="facture" value="View Facture">
                                </form>


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
                        <a href="SupprimerCommande.php?id='%'" class="right-shoping-cart">Clear Table</a>
                    </div>
                </div>

    </div>
</div>

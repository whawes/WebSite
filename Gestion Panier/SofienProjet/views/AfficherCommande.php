<?php
require '../include.php';
//require '../cores/commandeC.php';
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
                            <th class="product-price-cart">Produit Commande</th>
                            <th class="t-product-name">Etat Commande</th>
                            <th class="product-price-cart">Facture</th>
                            <th class="product-price-cart">Total Commande</th>
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

                                    <a href="ModifierCommande.php?id=<?= $row['ID_Commande'] ?>">
                                    <button type="submit" value="Edit" name="button"style="font-size:24px"><i class="material-icons">mode_edit</i></button></a>
                                </p>

                            </td>
                              <td>
                                  <?php $produit=$commande->afficherFacture($row['ID_Commande']);
                                  $total=0;
                                   foreach($produit as $fac){
                                      $total+=$fac['Qty_Produit']*$fac['Prix_Produit'] ;
                                      ?>

                                  <p>-<?= $fac['Nom_Produit'] ?>(<?= $fac['Qty_Produit'] ?>)</p>
                                  <?php } ?>
                              </td>

                            <td >
                                <h4><?= $row['Etat_Commande'] ?></h4>
                            </td>
                            <td>
                                <?php if( $row['Etat_Commande']=="Valid"){?>
                                    <form action="facture.php?id=<?= $row['ID_Commande'] ?>" method="post">

                                        <button type="submit" name="facture" style="font-size:20px;color:darkred"><i class="fa fa-file-pdf-o"></i></button>
                                    </form>
<?php }else
                                { ?>
                                <span>-</span>

                                <?php }?>
                            </td>
                            <td>
                                <?= $total  ?>DT
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
                    <a class="wishlist-single-link" href="index.php">
                        <i class="fa fa-angle-double-left"></i>
                        Back
                    </a>
                    <div class="shopingcart-bottom-area wishlist-bottom-area pull-right">
                        <a href="SupprimerCommande.php?id='%'" class="right-shoping-cart">Clear Table</a>
                    </div>
                </div>

    </div>
</div>

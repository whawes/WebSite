<?php
require '../cores/commandeC.php';
$commande=new CommandeC();
?>
    <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
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
                            <?php $list=$commande->afficherFacture($_GET['id']); ?>
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



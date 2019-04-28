           <div class="shopping-cart-area section-padding">
    <div class="container">
 <div class="row">
<h2>Liste complète des Auteurs</h2>
    <?php
    
        $list=$editeur->afficherAuteur();
    ?>
    <?php foreach($list as $row): ?>
    <div class="single-shop-product">
        <div class="col-xs-12 col-sm-7 col-nn-8">
            <div class="deal-product-content">
                <h4>
                    <form action="#">
                    <a title="East of eden" href="" data-toggle="modal" data-target="#productModal"><?php echo $row['nom']; $var=$row['prenom'] ?></a><span>
                    
                                                </form>
                </h4>
                
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>
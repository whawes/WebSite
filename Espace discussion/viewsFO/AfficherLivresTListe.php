<?php $list=$livretF->afficherLivresT();?>
<?php foreach($list as $row): ?>
<div class="single-shop-product">
    <div class="col-xs-12 col-sm-5 col-md-4">
        <div class="left-item">
            <a title="East of eden" href="single-product.html">
                <img alt="" src="img/featured/1.jpg">
            </a>
        </div>
    </div>
    <div class="col-xs-12 col-sm-7 col-md-8">
        <div class="deal-product-content">
            <h4><?php echo $row['Titre']?></h4>
            <p><?php echo $row['Description']?></p>
            <div class="availability">
                <?php
                $file=$row['ID'];
                
                $titret=$titre.'.pdf';
                echo "<span><a href=\"files/$titret\" download=\"$titret\">Telecharger</a></span>"?>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>
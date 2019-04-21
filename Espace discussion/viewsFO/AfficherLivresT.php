<?php $list=$livretF->afficherLivresT();?>
<?php foreach($list as $row): ?>
<div class="col-md-4 col-sm-6">

    <div class="single-banner">
        <div class="product-wrapper">
            <a class="single-banner-image-wrapper" href="#">
                <img alt="" src="img/featured/1.jpg">
            </a>
            <div class="product-description">
                <div class="functional-buttons">
                    <form action="post">
                    <a title="Telecharger" href="#">
                        <i class="fa fa-download"></i>
                    </a>
                    </form>
                    <a title="Quick view" href="#" data-toggle="modal" data-target="#productModal">
                        <i class="fa fa-compress"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="banner-bottom text-center">
            <div class="banner-bottom-title">
                <p><?php echo $row['Titre']?></p>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>
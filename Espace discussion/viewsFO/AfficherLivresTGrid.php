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
                <?php
                $titre=$row['Titre'];
                $description=$row['Description'];
                $file=$row['ID'];
                $titret=$titre.'.pdf';
                echo "<a href=\"files/$titret\" download=\"$titret\"><i class=\"fa fa-download\"></i></a>";
                echo "<a id=\"abcdef\" title=\"Quick view\" href=\"#\" onclick=\"geturl4('$titre','$description')\" data-toggle=\"modal\" data-target=\"#productModal\">
                        <i class=\"fa fa-compress\"></i>
                    </a>"?>
                </div>
            </div>
        </div>
        <div class="banner-bottom text-center">
            <div class="banner-bottom-title">
                <?php echo $row['Titre']?>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>
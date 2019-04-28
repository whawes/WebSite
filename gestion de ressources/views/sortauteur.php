
<?php
    require '../core/auteurC.php';
    $auteur=new auteurC();
    $id = $_POST["data"];
    if ($id === "name"){
    $list=$auteur->triAuteur();
    }else{
        $list=$auteur->triAuteurParVente();  
    }

?>


<?php foreach($list as $row): ?>
    <div id="det" class="single-shop-product">
        <div class="col-xs-12 col-sm-7 col-nn-8">
            <div class="deal-product-content">
                <h4>
                    <form action="#">
                    <a title="East of eden" href="" data-toggle="modal" data-target="#productModal"><?php echo $row['nom'] ; echo " "; echo $row['prenom'] ;echo "<br>" ?></a><span><h5><?php echo "informations :"; echo $row['informations']; echo "<br>"; echo " livres :" ; echo $row['livres']?></h5></span>
                    
                                                </form>
                </h4>
                
            </div>
        </div>
    </div>
<?php endforeach; ?>
<?php
    require '../core/EditeurC.php';
    $editeur=new EditeurC();
    $id = $_POST["data"];
    if ($id === "name"){
    $list=$editeur->triEditeur();
    }else{
        $list=$editeur->triEditeurParVente();  
    }

?>


<?php foreach($list as $row): ?>
    <div class="single-shop-product" id="det">
        <div class="col-xs-12 col-sm-7 col-nn-8">
            <div class="deal-product-content">
                <h4>
                    <form action="#">
                        <a title="East of eden" href="" data-toggle="modal" data-target="#productModal">
                            <?php echo $row['nomMaison']; $var=$row['nomMaison'] ?>
                        </a>
                        <span>
                            <h5><?php echo "présentation "; echo $row['informations'];?></h5>
                        </span>
            
                    </form>
                </h4>
            
            </div>
        </div>
    </div>
    <?php endforeach; ?>
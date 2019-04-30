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

<div class="row" id="det" id="se">
<?php
foreach ($list as $row){
    ?>
    <div class="col-md-4">
        <div class="single-team-member">
            <a href="#">
                <img style ="height:270px;width:210px" src="http://placehold.it/150x100" alt="">
            </a>
            <div class="member-info">
                <a href="#"><?php echo $row['nomMaison'];  ?></a>

            </div>
        </div>
    </div>
    <?php

};
?>
 </div>
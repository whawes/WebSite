<div class="row">
    <?php
    $_SESSION["page"]=$_SERVER['REQUEST_URI'];
        $list=$sujetF->recupererSujet($_GET['id']);
        $_SESSION["connected"] = "aaa";
    ?>
    <?php foreach($list as $row): ?>
    <div class="single-shop-product">
        <div class="col-xs-12 col-sm-7 col-nn-8">
            <div class="deal-product-content">
                <h1>
                    <?php $id=$row['ID']; 
                    echo "<a title=\"East of eden\" href=\"sujet.php?id=$id\">" ?><?php echo $row['Titre']?></a><span><h5><?php echo "créer par "; echo $row['Createur']; echo " le "; echo $row['Date']?></h5></span><span><h5><?php echo "Genre: ".$row['Genre']?></h5></span>
                </h1>
                <p><h4><?php echo $row['Texte']?></h4></p>
                <p><?php echo $row['Note']." jaimes"; ?> </p>
                <div class="availability">
             <?php
                    
                                $liste2=$sujetF->like($id,$_SESSION["connected"]);
                    foreach($liste2 as $row2):
                        {
                         $n=$row2['n'];
                        }
                    endforeach;
                    if($n==0)
                            echo "<span><a href=\"up.php?id=$id\"><i class=\"fa fa-thumbs-up\"></i> J'aime</a></span>";
                                else
                    echo "<span style=\"background-color:#4841a8\" ><a href=\"down.php?id=$id\"><i class=\"fa fa-thumbs-up\"></i> Je n'aime plus</a></span>";
                      ?>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>

    <?php
        $list2=$commantaireF->afficherCommantaires($id);
        $_SESSION["connected"] = "aaa";
         $_SESSION['idd']=$_GET['id'];
         $id=$_SESSION['idd'];
    ?>
    <?php foreach($list2 as $row2): ?>
    <div class="single-shop-product2">
        <div class="col-xs-12 col-sm-7 col-nn-8">
            <div class="deal-product-content">
                <h4>
                    <?php echo $row2['Createur']?><span><h6><?php echo $row2['Date']?></h6></span>
                </h4>
                
                <p><h5><?php echo $row2['Texte']?></h5></p>
                <div class="availability">
                    <?php
                        if ($row2['Createur']==$_SESSION["connected"])
                            { 
                                            
                                            $crea2=$row2['Createur'];
                                            $text=$row2['Texte'];
                               ?>
                               <span><a id="abcde" title="Modifier" href="#" data-toggle="modal" data-target="#d<?PHP echo $row2['ID']; ?>"><i class="fa fa fa-file-text-o"></i></a></span>"
                   <?php          }
                    ?>
                    <?php
                    $id2=$row2['ID'];
                        if ($row2['Createur']==$_SESSION["connected"])
                            {
                                echo "<span><a href=\"SupprimerCommantaire.php?ids=$id&id=$id2\"><i class=\"fa fa-close\"></i></a></span>";
                            }
                    ?>
                    <div class="modal fade" id="d<?PHP echo $row2['ID']; ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="modal-product">                                
                                    <form method="POST" name="modif" action="ModifierCommantaire.php" class="cart">
                                        <div class="tabble">

                                            <input type="hidden" name="id" value="<?php echo $row2['ID'] ?>">
                                             <textarea name="post_text" class="msg" required><?php echo $row2['Texte'] ?></textarea>
                                        </div>
                                        <div class="quick-desc"></div>
                                        <div class="quick-add-to-cart" style="padding-top: 20px">
                                            <button class="single_add_to_cart_button" type="submit">Modifier</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
    <div class="single-shop-product2">
        <div class="col-xs-12 col-sm-7 col-nn-8">
            <div class="deal-product-content">
                <form method="GET" action="AjouterCommantaire.php" class="cart">
                    <h5>nouveau commantaire</h5>
                    <div class="tabble">
                        <textarea name="post_text" class="msg3" placeholder="Text" required></textarea>
                    </div>
                    <div class="quick-add-to-cart" id="aaa">
                        <button class="single_add_to_cart_button" type="submit">Commenter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
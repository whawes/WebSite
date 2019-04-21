<div class="row">

    <?php
    $_SESSION["page"]=$_SERVER['REQUEST_URI'];
        if(isset($_GET['tri']))
        {
            if($_GET['tri']==='Note')
                $list=$sujetF->recupererSujetsNote($_SESSION["connected"]);
            if($_GET['tri']==='Name')
                $list=$sujetF->recupererSujetsNom($_SESSION["connected"]);
            if($_GET['tri']==='Date')
                $list=$sujetF->recupererSujetsDate($_SESSION["connected"]);
        }
        else
            $list=$sujetF->recupererSujets($_SESSION["connected"]);
    ?>
    <?php foreach($list as $row): ?>
    <div class="single-shop-product">
        <div class="col-xs-12 col-sm-7 col-nn-8">
            <div class="deal-product-content">
                <h4>
                    <a title="East of eden" href="sujet.php?id=<?=$id?>"><?php echo $row['Titre']?></a><span><h5><?php echo "créer par "; echo $row['Createur']; echo " le "; echo $row['Date']?></h5></span>
                </h4> 
                <div style="float: right"><p>Genre: <?php echo $row['Genre']?></p>
                </div>
                
                <p><?php echo $row['Texte']?></p>
                <p><?php echo $row['Note']." jaimes"; ?> </p>
                <div class="availability">
                    <?php
                    
                                $id=$row['ID'];
                                $Titre_post=$row['Titre'];
                                $Createur_post=$row['Createur'];
                                $Genre_post=$row['Genre'];
                                $Text_post=$row['Texte'];
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
                    <span><a href="sujet.php?id=<?=$id?>"><i class="fa fa-wechat"></i> Commenter</a></span>
                    
                    <span><a href="https://www.facebook.com/sharer/sharer.php?u=sujet.php?id=<?=$id?>"><i class="fa fa-share"></i> Partager
                    <?php

                                $Titre_post=$row['Titre'];
                                $Createur_post=$row['Createur'];
                                $Genre_post=$row['Genre'];
                                $Text_post=$row['Texte'];
                                echo "<span><a id=\"abcd\" title=\"Modifier\" href=\"#\" data-toggle=\"modal\" onclick=\"geturl2('$Titre_post','$Createur_post','$Genre_post','$Text_post')\" data-target=\"#modifierpost\"><i class=\"fa fa fa-file-text-o\"></i> Modifier</a></span>";?>
                    <?php
                    echo "<span><a href=\"SupprimervosSujet.php?id=$id\"><i class=\"fa fa-close\"></i> Supprimer</a></span>";?>
                    
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>
<div class="row">
    <?php
        if(isset($_GET['Createur_post']) && isset($_GET['Titre_post']))
        {
            $createur=$_GET['Createur_post'];
            $titre=$_GET['Titre_post'];
            $_SESSION["createur"] = $createur;
            $_SESSION["titre"] = $titre;
        }
        $list=$sujetF->recupererSujet($_SESSION["createur"],$_SESSION["titre"]);
        $_SESSION["connected"] = "aaa";
    ?>
    <?php foreach($list as $row): ?>
    <div class="single-shop-product">
        <div class="col-xs-12 col-sm-7 col-nn-8">
            <div class="deal-product-content">
                <h1>
                    <a title="East of eden" href="sujet.php?Titre_post=<?=$row['Titre']?>&Createur_post=<?=$row['Createur']?>"><?php echo $row['Titre']?></a><span><h5><?php echo "créer par "; echo $row['Createur']; echo " le "; echo $row['Date']?></h5></span><span><h5><?php echo $row['Genre']?></h5></span>
                </h1>
                <p><h4><?php echo $row['Texte']?></h4></p>
                <div class="availability">
                    <big><?php echo $row['Note']; ?> </big>
                    <?php
                        $up=0;
                                $Titre_post=$row['Titre'];
                                $Createur_post=$row['Createur'];
                                $line=$row['Titre'].$row['Createur'];
                                $file = fopen("lib/upvote.txt","r");
                                    $result = fgets($file);
                                    if(strpos($result,$line)!==false)
                                    {
                                        $up=1;
                                    }
                                fclose($file);
                                if($up==0)
                            echo "<span><a href=\"up2.php?Titre_post=$Titre_post&Createur_post=$Createur_post\"><i class=\"fa fa-arrow-up\"></i></a></span>";
                                else
                    echo "<span style=\"background-color:#4841a8\" ><a href=\"upno2.php?Titre_post=$Titre_post&Createur_post=$Createur_post\"><i class=\"fa fa-arrow-up\"></i></a></span>";
                      ?>
                     <?php
                        $up2=0;
                                $Titre_post=$row['Titre'];
                                $Createur_post=$row['Createur'];
                                $line2=$row['Titre'].$row['Createur'];
                                $file2 = fopen("lib/downvote.txt","r");
                                    $result2 = fgets($file2);
                                    if(strpos($result2,$line2)!==false)
                                    {
                                        $up2=1;
                                    }
                                fclose($file2);
                                if($up2==0)
                            echo "<span><a href=\"down2.php?Titre_post=$Titre_post&Createur_post=$Createur_post\"><i class=\"fa fa-arrow-down\"></i></a></span>";
                                else
                    echo "<span style=\"background-color:#4841a8\" ><a href=\"downno2.php?Titre_post=$Titre_post&Createur_post=$Createur_post\"><i class=\"fa fa-arrow-down\"></i></a></span>";
                      ?>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>

    <?php
        $list2=$commantaireF->afficherCommantaires($_SESSION["titre"],$_SESSION["createur"]);
        $_SESSION["connected"] = "aaa";
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
                                            $creea=$_SESSION["createur"];
                                            $tit=$_SESSION["titre"];
                                            $crea2=$row2['Createur'];
                                            $text=$row2['Texte'];
                                echo "<span><a id=\"abcde\" title=\"Modifier\" href=\"#\" data-toggle=\"modal\" onclick=\"geturl3('$tit','$creea','$crea2','$text')\" data-target=\"#modifierpost\"><i class=\"fa fa fa-file-text-o\"></i></a></span>";;
                            }
                    ?>
                    <?php
                    $crea=$row2['Createur'];
                    $txt=$row2['Texte'];
                        if ($row2['Createur']==$_SESSION["connected"])
                            {
                                echo "<span><a href=\"SupprimerCommantaire.php?Createur=$crea&Texte=$txt\"><i class=\"fa fa-close\"></i></a></span>";
                            }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
    <div class="single-shop-product2">
        <div class="col-xs-12 col-sm-7 col-nn-8">
            <div class="deal-product-content">
                <?php 
                    $Createur_post=$_SESSION["createur"];
                    $Titre_post=$_SESSION["titre"];
                ?>
                <form method="POST" action="AjouterCommantaire.php?Titre_post=$Titre_post&Createur_post=$Createur_post\" class="cart">
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
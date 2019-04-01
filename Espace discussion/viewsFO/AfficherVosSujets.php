<div class="row">

    <?php
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
                    <a title="East of eden" href="sujet.php?Titre_post=<?=$row['Titre']?>&Createur_post=<?=$row['Createur']?>"><?php echo $row['Titre']?></a><span><h5><?php echo "créer par "; echo $row['Createur']; echo " le "; echo $row['Date']?></h5></span>
                </h4>
                
                <p><?php echo $row['Texte']?></p>
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
                            echo "<span><a href=\"up3.php?Titre_post=$Titre_post&Createur_post=$Createur_post\"><i class=\"fa fa-arrow-up\"></i></a></span>";
                                else
                    echo "<span style=\"background-color:#4841a8\" ><a href=\"upno3.php?Titre_post=$Titre_post&Createur_post=$Createur_post\"><i class=\"fa fa-arrow-up\"></i></a></span>";
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
                            echo "<span><a href=\"down3.php?Titre_post=$Titre_post&Createur_post=$Createur_post\"><i class=\"fa fa-arrow-down\"></i></a></span>";
                                else
                    echo "<span style=\"background-color:#4841a8\" ><a href=\"downno3.php?Titre_post=$Titre_post&Createur_post=$Createur_post\"><i class=\"fa fa-arrow-down\"></i></a></span>";
                      ?>
                    <span><a href="sujet.php?Titre_post=<?=$row['Titre']?>&Createur_post=<?=$row['Createur']?>"><i class="fa fa-wechat"></i></a></span>
                    <span><a href=""><i class="fa fa-share"></i></a></span>
                    <?php

                                $Titre_post=$row['Titre'];
                                $Createur_post=$row['Createur'];
                                $Genre_post=$row['Genre'];
                                $Text_post=$row['Texte'];
                                echo "<span><a id=\"abcd\" title=\"Modifier\" href=\"#\" data-toggle=\"modal\" onclick=\"geturl2('$Titre_post','$Createur_post','$Genre_post','$Text_post')\" data-target=\"#modifierpost\"><i class=\"fa fa fa-file-text-o\"></i></a></span>";
                    ?>
                    <span><a href="SupprimervosSujet2.php?Titre_post=<?=$row['Titre']?>&Createur_post=<?=$row['Createur']?>"><i class="fa fa-close"></i></a></span>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>
<?php
$list2=$commantaireF->afficherCommantaires($_GET['Titre_post']);?>
                                            <?php foreach($list2 as $row): ?>
                                            <tr class="tr-shadow">
                                                <td class="desc"><?php echo $row['Createur'];?></td>
                                                <td><?php echo $row['Date'];?></td>
                                                <td style="word-wrap: break-word"><?php echo $row['Texte'];?></td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <?php
                                                        $id=$_GET['Titre_post'];
                                                        $idd=$row['ID'];
                                                        echo "<a href=\"SupprimerCommantaire.php?id=$id&idd=$idd\"><button class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Delete\">
                                                            <i class=\"zmdi zmdi-delete\"></i>
                                                        </button></a>"?>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            </tr>
                                            <?php endforeach; ?>
  

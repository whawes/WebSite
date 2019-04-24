<?php $list=$sujetF->afficherSujets();?>
    <?php foreach($list as $row): ?>
                                            <tr class="tr-shadow">
                                                <td><?php $titre=$row['ID'];
                                                $t=$row['Titre'];
                                                echo "<a href=\"table2.php?Titre_post=$titre&nom=$t\">$t</a>";?></td>
                                                <td>
                                                    <span class="block-email"><?php echo $row['Createur']; ?></span>
                                                </td>
                                                <td><?php echo $row['Genre'];?></td>
                                                <td><?php echo $row['Date'];?></td>
                                                <td><?php echo $row['Texte'];?></td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <?php 
                                                        
                                                        echo "<a href=\"SupprimerSujet.php?Titre_post=$titre\"><button class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Delete\">
                                                            <i class=\"zmdi zmdi-delete\"></i>
                                                        </button></a>"?>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            </tr>
                                                <?php endforeach; ?>
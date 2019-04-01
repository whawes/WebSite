<?php
$list2=$commantaireF->afficherCommantaires($titre,$createur);?>
                                            <?php foreach($list2 as $row): ?>
                                            <tr class="tr-shadow">
                                                <td class="desc"><?php echo $row['Createur'];?></td>
                                                <td><?php echo $row['Date'];?></td>
                                                <td><?php echo $row['Texte'];?></td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <?php
                                                        $crea=$row['Createur'];
                                                        $texte=$row['Texte'];
                                                        echo "<a href=\"SupprimerCommantaire.php?Titre=$titre&Createur=$createur&Crea=$crea&Texte=$texte\"><button class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Delete\">
                                                            <i class=\"zmdi zmdi-delete\"></i>
                                                        </button></a>"?>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            </tr>
                                            <?php endforeach; ?>
  

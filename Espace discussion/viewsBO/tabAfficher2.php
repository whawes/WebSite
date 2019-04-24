<?php $list2=$livretF->afficherLivresT();?>
    <?php foreach($list2 as $row): ?>
                                            <tr class="tr-shadow">
                                                <td class="desc"><?php echo $row['Titre'];?></td>
                                                <td><?php echo $row['Description'];?></td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <?php $titre=$row['Titre'];
                                                        $desc=$row['Description'];
                                                        $id=$row['ID'];
                                                        echo "<a href=\"form2.php?id=$id\" <button class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"edit\">
                                                            <i class=\"zmdi zmdi-edit\"></i>
                                                        </button></a>";
                                                        
                                                        echo "<a href=\"SupprimerLivreT.php?Titre=$titre\"><button class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Delete\">
                                                            <i class=\"zmdi zmdi-delete\"></i>
                                                        </button></a>"?>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            </tr>
<?php endforeach; ?>
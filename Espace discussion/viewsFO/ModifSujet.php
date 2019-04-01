<div id="quickview-wrapper">
            <div class="modal fade" id="modifierpost" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="modal-product">
                                <?php
                                    $Titre_post=$_GET['Titre_post'];
                                    $Createur_post=$_GET['Createur_post'];
                                    $Genre_post=$_GET['Genre_post'];
                                    $Text_post=$_GET['Text_post']; 
                                    $_SESSION["Titre"]=$Titre_post;
                                    $_SESSION["Createur_post"]=$Createur_post; 
                                ?>
                                <h3><?php echo "Titre: "; echo $Titre_post;?></h3>
                                <h3><?php echo "Genre: "; echo $Genre_post;?></h3>
                                <h3><?php echo "Texte: "; echo $Text_post;?></h3>
                                    
                                    <form method="POST" name="modif" action="ModifierSujet2.php" class="cart" onsubmit="return verifform()">
                                        <div class="tabble">
                                            <input type="text" class="msg2" name="post_name" placeholder="Titre"/>
                                        </div>
                                        <div class="tabble">
                                            <input type="text" class="msg2" name="post_tags" placeholder="Tags"/>
                                        </div>
                                        <div class="tabble">
                                            <textarea name="post_text" class="msg" placeholder="Text"></textarea>
                                        </div>
                                        <div class="quick-desc"></div>
                                        <div class="quick-add-to-cart">
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
        
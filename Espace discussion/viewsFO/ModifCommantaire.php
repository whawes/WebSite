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
                                    $Createur_comm=$_GET['Createur_comm'];
                                    $Comm_text=$_GET['Comm_text']; 
                                    $_SESSION["Titre_post"]=$Titre_post;
                                    $_SESSION["Createur_post"]=$Createur_post;
                                    $_SESSION["Createur_comm"]=$Createur_comm;
                                    $_SESSION["Comm_text"]=$Comm_text;
                            ?>
                                <h3><?php echo "Texte: "; echo $Comm_text;?></h3>
 
                                    <form method="POST" name="modif" action="ModifierCommantaire.php" class="cart">
                                        <div class="tabble">
                                            <textarea name="post_text" class="msg" placeholder="Text" required></textarea>
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
        
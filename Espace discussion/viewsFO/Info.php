<div id="quickview-wrapper">
            <!-- Modal -->

            <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="modal-product">
                                <div class="product-images">
                                    <div class="main-image images">
                                        <img alt="" src="img/quick-view.jpg">
                                    </div>
                                </div>
                                <div class="product-info">
                                    <?php
                                    $nom=$_GET['Titre'];
                                    $nomt=$nom.".pdf";
                                    $tit=$_GET['Description'];
                                    ?>
                                    <h1><?php echo $nom ?></h1>
                                    <div class="quick-desc">
                                        <?php echo $tit ;?>
                                    </div>
                                    <div class="quick-add-to-cart">
                                            <?php echo" <a href=\"files/$nomt\" download=\"files/$nomt\"><button class=\"single_add_to_cart_button\">Telecharger</button> </a>"?>
                                    </div>
                                </div><!-- .product-info -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php


require "../../config.php";

require '../../core/reclamationC.php';

session_start();
$recl=new reclamationC();
$DB = new config();
?>

<?php


    if ($_POST['data'] === 'id')
        $listeReclamation = $recl->afficherReclamtion_id();
    else if ($_POST['data'] === 'nom')
        $listeReclamation = $recl->afficherReclamtion_nom();
    else
        $listeReclamation = $recl->afficherReclamtion();
?>

<table class="table table-data2">
    <thead>
    <tr>
        <th>
            <label class="au-checkbox">
                <input type="checkbox">
                <span class="au-checkmark"></span>
            </label>
        </th>
        <th>id</th>
        <th>nom</th>
        <th>mail</th>
        <th>Message</th>
        <th>Traitement</th>


        <th></th>
    </tr>
    </thead>
    <?php foreach($listeReclamation as $row):
    ?>


    <tbody>


    <tr class="tr-shadow">
        <td>
            <label class="au-checkbox">
                <input type="checkbox">
                <span class="au-checkmark"></span>
            </label>
        </td>
        <td><?PHP echo $row['id']; ?></td>
        <td><?PHP echo $row['nom']; ?></td>
        <td><?PHP echo $row['mail']; ?></td>
        <td><?PHP echo $row['msg']; ?></td>
        <td><?PHP if($row['traitement']=='non')echo"<span class=\"status--denied\">non</span>";
            else echo"<span class=\"status--process\">oui</span>";?></td>
        <td>
            <div class="table-data-feature">
                <button type="button" class="item"  name="bt" data-toggle="modal" data-target="#m<?PHP echo $row['id']; ?>" data-toggle="modal" data-target="#myModal" title="Repondre">                                                            <i class="zmdi zmdi-mail-send"></i>
                </button>


            </div>
        </td>


        <!-- Modal -->
        <div id="m<?PHP echo $row['id']; ?>" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Envoyer Email</h4>
                    </div>
                    <div class="modal-body">
                        <p>Repondre a la reclamation de <strong><?PHP echo $row['nom']; ?></strong>:</p>
                        <form method="post" action="trait.php">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="hidden" name="delete_id" value="<?PHP echo $row['id']; ?>">

                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="textarea-input" class=" form-control-label">Message</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <textarea name="msg" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" name="envoyer" class="btn btn-secondary btn-sm">
                                        <i class="fa fa-dot-circle-o"></i> envoyer
                                    </button>

                                </div>

                            </div>

                        </form>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>


        </div>






        <!-- Modal -->
        <div id="delete<?PHP echo $row['id']; ?>" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="supprimerReclamation.php">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Suppression</h4>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" name="delete_id" value="<?PHP echo $row['id']; ?>">
                                    <div class="alert alert-danger">vous voulez suprimer <strong>
                                            <?php echo $row['nom']; ?>?</strong> </div>
                                    <div class="modal-footer">
                                        <button type="submit" name="delete" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> YES</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> NO</button>
                                    </div>
                                </div>
                            </div>
                        </form>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>


        </div>
    </tr>
    <tr class="spacer"></tr>

    <?php       endforeach;?>
    </tbody>

</table>

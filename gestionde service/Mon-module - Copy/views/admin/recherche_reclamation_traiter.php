<?php


require "../../config.php";

require '../../core/reclamationC.php';

session_start();
$recl=new reclamationC();
$DB = new config();
?>

<?php

if ($_GET['q']!="")
    $listeReclamation = $recl->afficherReclamtion_recherche($_GET['q']);
else
    $listeReclamation = $recl->afficherReclamtion_traiter();
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

                <button class="item" data-toggle="modal" data-placement="top" title="Delete" data-target="#delete<?PHP echo $row['id']; ?>" data-toggle="modal" data-target="#myModal" title="Repondre">   >
                    <i class="zmdi zmdi-delete"></i>
                </button>
            </div>
        </td>

        <!-- Modal -->

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

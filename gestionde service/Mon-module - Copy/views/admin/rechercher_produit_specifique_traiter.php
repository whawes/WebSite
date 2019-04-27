<?php


require "../../config.php";

require '../../core/produit_specifiqueC.php';

session_start();
$recl=new produit_specifiqueC();
$DB = new config();
?>

<?php

if ($_GET['q']!="")
    $listeProduit_sp = $recl->afficher_Produit_specifique_traiter_recherche($_GET['q']);

else
    $listeProduit_sp = $recl->afficher_Produit_specifique_traiter();
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
        <th>titre</th>
        <th>auteur</th>
        <th>categorie</th>
        <th>Autre information</th>
        <th>Adresse Email</th>
        <th>N°Tel</th>
        <th>Etat</th>



        <th></th>
    </tr>
    </thead>
    <?php foreach($listeProduit_sp as $row)
    : ?>
    <tbody>
    <tr class="tr-shadow">
        <td>
            <label class="au-checkbox">
                <input type="checkbox">
                <span class="au-checkmark"></span>
            </label>
        </td>
        <td><?PHP echo $row['Titre']; ?></td>
        <td><?PHP echo $row['auteur']; ?></td>
        <td><?PHP echo $row['categorie']; ?></td>
        <td><?PHP echo $row['autre_info']; ?></td>

        <td><?PHP echo $row['mail']; ?></td>
        <td><?PHP echo $row['telephone']; ?></td>
        <td><?PHP if($row['etat']=='non')echo"<span class=\"status--denied\">non</span>";
            else echo"<span class=\"status--process\">oui</span>";?></td>
        <td>
        <td>
            <div class="table-data-feature">

                <div class="table-data-feature">
                    <button type="button" class="item"  name="bt" data-toggle="modal" data-target="#sms<?PHP echo $row['id']; ?>" data-toggle="modal" data-target="#myModal" title="Repondre">                                                            <i class="zmdi zmdi-mail-send"></i>
                    </button>



                </div>
        </td>
        <!-- Modal -->
        <div id="sms<?PHP echo $row['id']; ?>" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">


                    <div class="modal-body">
                        <p>Repondre a la reclamation de <strong><?PHP echo $row['id']; ?></strong>:</p>
                        <form method="post" action="sendsms.php">
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
    </tr>
    <tr class="spacer"></tr>

    <?php       endforeach;?>
    </tbody>

</table>

<?php

/*
require "../../config.php";

require '../../core/reclamationC.php';
*/

include "../core/Users.php";
session_start();
$tabclient=new Users();
$DB = new config();
?>

<?php


    if ($_POST['data'] === 'role')
        $liste= $tabclient->afficherusers_role();
    else if ($_POST['data'] === 'nom')
        $liste= $tabclient->afficherusers_Nom();
    else
        $liste= $tabclient->afficherusers();
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
                                                <th>Nom</th>
                                                <th>Email</th>
                                                <th>Role</th>
                                                
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <?php foreach ($liste as $row):?>
                                        
                                        <tbody>
                                            <tr class="tr-shadow">
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>
                                                <td><?=$row['Nom']?></td>
                                                <td>
                                                    <span class="block-email"><?=$row['Email']?></span>
                                                </td>
                                                <td><?php if ($row['Role']=='Client'){?>
                                                    <span class="role member"><?=$row['Role']?></span>
                                                <?php } else if ($row['Role']=='Admin'){?>
                                                <span class="role admin"><?=$row['Role']?></span>
                                            <?php } else{ ?>
                                                <span class="role user"><?=$row['Role']?></span>
                                            <?php }?>

                                                </td>
                                                
                                                <td> 
                                                    <form action="supprimer.php?id=<?=$row['ID']?>" method="post">
                                                    <div class="table-data-feature">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                            <i class="zmdi zmdi-mail-send"></i>
                                                        </button>
                                            
                                                        <button name="supprimer" class="item" data-toggle="tooltip" data-placement="top"  title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                                </td>
                                                <div id="m" class="modal fade" role="dialog">
                                                <div class="modal-dialog">

                                                    <!-- Modal content-->
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Ajouter un employe</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                           <div class="login-form">
                            <form action="AjouterE.php" method="post">
                                <div class="form-group">
                                    <input class="au-input au-input--full" type="text" name="Cin" placeholder="CIN..">
                                </div>
                                   <div class="form-group">
                                    <input class="au-input au-input--full" type="text" name="Nom" placeholder="Nom complet..">
                                </div>
                                <div class="form-group">
                                    <input class="au-input au-input--full" type="email" name="Email" placeholder="Email..">
                                </div>
                                <div class="form-group">
                                    <input class="au-input au-input--full" type="text" name="Numerotelephone" placeholder="Numero de telephone..">
                                </div>
                                <div class="form-group">
                                    <input class="au-input au-input--full" type="text" name="Adresse" placeholder="Adresse..">
                                </div>
                                <div class="form-group">
                                    <select name="Role">
                                        <option value="Admin">Admin</option>
                                        <option value="EmployeC" >EmployeC</option>
                                        <option value="EmployeP" >EmployeP</option>
                                        <option value="EmployeS" >EmployeS</option>
                                        <option value="EmployeD" >EmployeD</option>
                                        <option value="EmployeE" >EmployeE</option>

                                    </select>
                                </div>
    
                                
                                
                                <button name="Ajouter" class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Ajouter</button>
                            </form>
                           
                        </div>

                                                        </div>

                                                    </div>
                                                   <!--end of model -->
                                                </div>
                                            </div>
                                            </tr>
                                           
                                        </tbody>
                                    <?php endforeach; ?>
                                    </table>
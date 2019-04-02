
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <!-- DATA TABLE -->
            <h3 class="title-5 m-b-35">Commandes Recu</h3>
            <form method="get" action="commande.php">
                <div class="table-data__tool">
                    <div class="rs-select2--light rs-select2--sm">
                        <select class="js-select2" name="time">
                            <option value="0">Today</option>
                            <option value="3">3 Days</option>
                            <option value="1">1 Week</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>

                    <div class="input-group-btn">
                        <button  name="search" class="btn btn-primary">
                            <i class="fa fa-dot-circle-o"></i> Filters
                        </button>
                    </div>

                <div class="input-group">
                    <div class="col col-sm-3">
                        <input name="nom" type="text" placeholder="Nom.." class="form-control">
                    </div>
                    <div class="input-group-btn">
                        <button  name="search" class="btn btn-primary">
                            <i class="fa fa-search"></i> Search
                        </button>
                    </div>

                </div>

                </div>
            </form>
        </div>
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                <tr>
                    <th>name</th>
                    <th>Adresse</th>
                    <th>date</th>
                    <th>status</th>

                </tr>
                </thead>
                <?php foreach($list as $row): ?>
                    <form action="modifierEtat.php?id=<?= $row['ID_Commande']?>" method="post">
                        <tbody>
                        <tr class="tr-shadow">
                            <td class="desc"><?= $row['Nom']?><?= $row['Prenom']?></td>
                            <td ><?= $row['Adresse_Street']?></td>
                            <td><?= $row['Date_Creation']?></td>
                            <td>
                                <div class="col-12 col-md-9">
                                    <select name="etat" id="SelectLm" class="form-control-sm form-control">
                                        <option value="En Cours"><?=$row['Etat_Commande']?></option>
                                        <option value="Invalid">Invalid</option>
                                        <option value="Valid">Valide</option>

                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="table-data-feature">
                                    <button  name="edit" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                        <i class="zmdi zmdi-edit"></i>
                                    </button>

                                    <button name="delete" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                        <i class="zmdi zmdi-delete"></i>
                                    </button>

                                    <button  name="more" class="item" data-toggle="tooltip" data-placement="top" title="More">
                                        <i class="zmdi zmdi-more"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="spacer"></tr>
                        </tbody>
                    </form>
                <?php endforeach; ?>
            </table>
        </div>
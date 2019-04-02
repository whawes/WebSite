<?php
require '../cores/commandeC.php';
$commande=new CommandeC();

$adresse=$commande->afficherdetailcommande($_GET['id']);
$produit=$commande->afficherFacture($_GET['id']);
$date=$commande->afficherCommandespecific($_GET['id']);
$Total=$commande->TotalPrice()
?>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>CTL</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:300|Raleway:200,300" rel="stylesheet" type="text/css"/>
        <link href="facture.css" rel="stylesheet" media="all">
      </head>
      <body>
        <header>
          <h1>FACTURE
            <h2>Centre Tunisien Du Livre − Tunis</h2>
          </h1>
        </header>
        <section class="flex">
            <?php foreach ($date as $row): ?>
          <dl>
            <dt>Facture #</dt>
            <dd><?= $row['ID_Commande']?></dd>
            <dt>Date de facturation</dt>
            <dd><?= $row['Date_Creation']?></dd>
          </dl>
            <?php endforeach;?>
        </section>
        <section class="flex">
          <dl class="bloc">
              <?php foreach ($adresse as $roww): ?>
            <dt>Facturé à:</dt>
            <dd>
                <?= $roww['Nom']?><?= $roww['Prenom']?><br>
                <?= $roww['Adresse_Street']?>,<br>
                <?= $roww['City']?>, <?= $roww['Country']?>, <?= $roww['CP']?>
              <dl>

                <dt>Téléphone</dt>
                <dd><?= $roww['Phone']?></dd>
                <dt>Courriel</dt>
                <dd><?= $roww['Email']?></dd>
                  <?php endforeach;?>
              </dl>
            </dd>
          </dl>
          <dl class="bloc">
            <dt>Description de service:</dt>
            <dd>Centre Tunisien Du Livre</dd>
          </dl>
        </section>
        <table>
          <thead>
            <tr> 
              <th>Nom Produit</th>
              <th>Description</th>
              <th>Quantite</th>
              <th>Price</th>
              <th>Total</th>
            </tr>
          </thead>
            <?php foreach ($produit as $pr): ?>

            <tbody>
            <tr>
              <td><?= $pr['Nom_Produit']?></td>
              <td>Dévelopement du jeu Tomatina</td>
              <td><?= $pr['Qty_Produit']?></td>
              <td><?= $pr['Prix_Produit']?> DT</td>
              <td><?= $pr['Prix_Produit']* $pr['Qty_Produit'] ?> DT</td>
            </tr>
          </tbody>

            <?php endforeach;?>
            <tfoot>
            <tr> 
              <td colspan="3">− Merci Pour Votre achat −</td>
              <td>Total:</td>
              <td><?= $Total?>&#8202;DT</td>
            </tr>

          </tfoot>
        </table>
        <footer>
          <p>CTL – Edication − Tunis | <a href="http://www.ctl.com">www.ctl.com</a></p>
          <p>6080 rue 27 octobre, Mareth | Tél. 53 925 295 | <a href="sofien.argoubi@esprit.tn">sofien.argoubi@esprit.tn</a></p>
        </footer>
      </body>
      </html>
<
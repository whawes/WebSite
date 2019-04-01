<?php
ob_start();
//client et en-tÃ¨te
?>
<table><tr>
<td width='200'><img src='http://vinsamour.be/images/vins-amour-sigle.jpg' width='160' height='150'></td>
<td width='230'>A.B.Vins'Amour<br>sur l'agaux 124<br>B-4651 Herve<br>GSM: 0495/32.86.22<br>BCE 0774.124.732</td>
<td width='200'>
<?php
require '../cores/commandeC.php';
$commande=new CommandeC();

?>
    <?php $list=$commande->afficherCommande();?>
   <?php foreach ($list as $row): ?>
    {


   <?= $row['ID_Commande'] ?>
   }



    <?php endforeach; ?>

<table>
<tr><td width='400'> nÂ°




</td><td></td></tr>
</table>
<!-- contenu de la page tableau etc... -->

<table border='1'>
<tr><th width='200'> D&eacute;nomination </th><th width='100'> Prix unitaire </th><th width='100'> Quantit&eacute; </th><th width='100'> Taux TVA </th><th width='100'> Prix HTVA </th></tr>

</table>
<table><tr><td width='400'></td><td><b>TOTAL HTVA: <?php echo round($tot, 3) . '&euro;'; ?></b></td></tr></table>

<!-- tableau TVA -->



<table border='1'>
<tr><th width='100'></th><th width='100'>TVA 6%</th><th width='100'>TVA 21%</th><th width='100'>TOTAL</th></tr>
<tr><th>Prix HTVA</th><td>cc</td></tr>
<tr><th>TVA</th><td>cc</td></tr>
<tr><th>Total</th><td>cc</b></td></tr>
</table>
<p>
Dexia: 792-5772646-34
</p>




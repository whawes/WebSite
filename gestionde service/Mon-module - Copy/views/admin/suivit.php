 <?PHP
include "../../core/reclamationC.php";
$recl=new ReclamationC();
$listeReclamation=$recl->afficherReclamtion_text();

//var_dump($listeEmployes->fetchAll());
?>
<div class="product-status-wrap">
        <table>
          

            <thead> <!-- En-tête du tableau -->
            <tr>
                
                <th>message</th>
                
            </tr>
            </thead>

            <tbody> <!-- Corps du tableau -->
            <tr>
                <?PHP
foreach($listeReclamation as $row){
    ?>
    <tr>
  
    
    <td><?PHP echo $row['msg']; ?></td>
   
     
    </tr>
    <?PHP
}
?>
            </tbody>
        </table>
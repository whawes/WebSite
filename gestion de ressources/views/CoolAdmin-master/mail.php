<?php
if(isset($_POST['submit'])){
$to='wafa.haoues@esprit.tn';
$sujet='test mail en local';
$texte='Votre insciption en tant qu administrateur a été confirmé';
$header='Form = test@gmail.com';
mail($to,$sujet,$texte,$header);

}
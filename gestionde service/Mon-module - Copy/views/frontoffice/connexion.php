<?php
if(($_POST['adressmail']=='aa@esprit.tn')&&($_POST['motdepasse']==0000))
{
	header('Location: contact.html');
}
else if(($_POST['adressmail']=='bb@esprit.tn')&&($_POST['motdepasse']==1111))
{
	header('Location: ../admin/table.html');
}
else
{
	header('Location: login.html');
}


?>
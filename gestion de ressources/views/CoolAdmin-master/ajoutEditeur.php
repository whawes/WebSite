<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["superadmin"]) || $_SESSION["superadmin"] !== true){
    header("location: ../login-admin.php");
    exit;
}
?>
<?PHP
include "../../entities/editeur.php";
include "../../core/EditeurC.php";
//echo "nom <br>";
//echo $_POST['nom']; 
//echo "informations :   <br>";
//echo $_POST['info'];
//echo "livfre <br>";
//echo $_POST['livres'];
//echo "mail <br>";
//echo $_POST['mail'];
//echo "phone <br>";
//echo $_POST['telephone'];
//echo "address <br>";
//echo $_POST['adresse'];
if ( isset($_POST['nom']) and isset($_POST['info']) and isset($_POST['livres']) and isset($_POST['mail']) and isset($_POST['telephone']) and isset($_POST['adresse'])
){

//echo "address <br>";
//var_dump($editeur1);

$editeur1=new editeur($_POST['nom'],$_POST['info'],$_POST['livres'],$_POST['mail'],$_POST['telephone'],$_POST['adresse']);

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file

} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		$editeur1 ->setImage(basename( $_FILES["fileToUpload"]["name"]));
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
//Partie2
/*
var_dump($editeur1);
}
*/
//Partie3
$editeur1C=new EditeurC();
$editeur1C->ajouterEditeurAvecImage($editeur1);





//header('Location: Editeur-list.php');	
}else{
	echo "vérifier les champs";
}

//*/

?>
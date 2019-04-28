function testAuteur() {
var nom= getElementById("nom").value ;
var prenom = getElementById("prenom").value ;
var informations = getElementById("informations").value ;
var livres = getElementById("livres").value;
if ((nom == "")||(prenom == "")||(informations == "")||(livres == "")){
	alert("vérifiez les champs");
}


}
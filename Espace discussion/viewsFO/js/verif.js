function verifform()
{
  var x = document.forms["modif"]["post_name"].value;
  var y = document.forms["modif"]["post_tags"].value;
  var z = document.forms["modif"]["post_text"].value;
  if ((x=="")&&(y=="")&&(z==""))
  {
    alert("Au moins un champs doit être remplis");
    return false;
  }
}

function verifform2()
{
  var x = document.forms["modiflivre"]["cc-payment2"].value;
  var y = document.forms["modiflivre"]["cc-name2"].value;
  if ((x=="")&&(y==""))
  {
    alert("Au moins un champs doit être remplis");
    return false;
  }
}

function geturl(Titre_post,Createur_post,Genre_post,Text_post)
{
    
    document.getElementById("abc").onclick== stock(Titre_post,Createur_post,Genre_post,Text_post);
}
function geturl2(Titre_post,Createur_post,Genre_post,Text_post)
{
    document.getElementById("abcd").onclick== stock2(Titre_post,Createur_post,Genre_post,Text_post);
}
function geturl3(Titre_post,Createur_post,Createur_comm,Comm_text)
{
    document.getElementById("abcde").onclick== stock3(Titre_post,Createur_post,Createur_comm,Comm_text);
}
function stock(Titre_post,Createur_post,Genre_post,Text_post)
{
	var s1="/phpmyadmin/atelierPHP/projet/viewsFO/forum.php?";
	var Titre_post=Titre_post;
	var Createur_post=Createur_post;
	var Genre_post=Genre_post;
	var Text_post=Text_post;
	var s2="Titre_post=";
	var s3="&Createur_post=";
	var s4="&Genre_post=";
	var s5="&Text_post=";
	var s6=s2.concat(Titre_post);
	var s7=s3.concat(Createur_post);
	var s8=s4.concat(Genre_post);
	var s9=s5.concat(Text_post);
	var s10=s1.concat(s6);
	var s11=s10.concat(s7);
	var s12=s11.concat(s8);
	var s13=s12.concat(s9);
	window.history.pushState(s1, 'Title', s13);
}

function stock2(Titre_post,Createur_post,Genre_post,Text_post)
{
	var s1="/phpmyadmin/atelierPHP/projet/viewsFO/vossujet.php?";
	var Titre_post=Titre_post;
	var Createur_post=Createur_post;
	var Genre_post=Genre_post;
	var Text_post=Text_post;
	var s2="Titre_post=";
	var s3="&Createur_post=";
	var s4="&Genre_post=";
	var s5="&Text_post=";
	var s6=s2.concat(Titre_post);
	var s7=s3.concat(Createur_post);
	var s8=s4.concat(Genre_post);
	var s9=s5.concat(Text_post);
	var s10=s1.concat(s6);
	var s11=s10.concat(s7);
	var s12=s11.concat(s8);
	var s13=s12.concat(s9);
	window.history.pushState(s1, 'Title', s13);
}
function stock3(Titre_post,Createur_post,Createur_comm,Comm_text)
{
	var s1="/phpmyadmin/atelierPHP/projet/viewsFO/sujet.php?";
	var Titre_post=Titre_post;
	var Createur_post=Createur_post;
	var Createur_comm=Createur_comm;
	var Comm_text=Comm_text;
	var s2="Titre_post=";
	var s3="&Createur_post=";
	var s4="&Createur_comm=";
	var s5="&Comm_text=";
	var s6=s2.concat(Titre_post);
	var s7=s3.concat(Createur_post);
	var s8=s4.concat(Createur_comm);
	var s9=s5.concat(Comm_text);
	var s10=s1.concat(s6);
	var s11=s10.concat(s7);
	var s12=s11.concat(s8);
	var s13=s12.concat(s9);
	window.history.pushState(s1, 'Title', s13);
}


function geturl4(Titre,Description)
{
    document.getElementById("abcdef").onclick== stock4(Titre,Description);
}
function stock4(Titre,Description)
{
	var s1="/phpmyadmin/atelierPHP/projet/viewsFO/lecture.php?";
	var Titre=Titre;
	var Description=Description;
	var s2="Titre=";
	var s3="&Description=";
	var s6=s2.concat(Titre);
	var s7=s3.concat(Description);
	var s10=s1.concat(s6);
	var s11=s10.concat(s7);
	window.history.pushState(s1, 'Title', s11);
}

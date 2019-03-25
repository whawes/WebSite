function test(){
    var mail = chekout.mail.value;
    var pwd = chekout.pwd.value;
    var a = "@";
    var pt = ".";
    if( mail.length== 0 || pwd.length== 0)
    {
    alert("Vérifier votre login et votre de mot de passe");
    }
    else{
    var prenom = mail.substring(0,mail.indexOf(pt) );
    var nom = mail.substring(mail.indexOf(pt) + 1,mail.indexOf(a));
    alert('Bienvenue ' + prenom + " " + nom ) ;
    }
    }
    function surligne(champ, erreur)
{
   if(erreur)
      champ.style.backgroundColor = "red";
   else
      champ.style.backgroundColor = "";
}
function verifMail(champ)
{
   var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
   if(!regex.test(champ.value))
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}

/*function test(){
var user=document.getElementById("login").value;
alert(user);
   
}*/
/*function getuser(){
    var user=document.getElementById("lineEdit").value;
    alert(user);
}*/

function verfier1() {
    var book=document.getElementById("book").value;
    if( book.length==0 ){
        document.getElementById("a").innerHTML = "incorrect";
        document.getElementById("a").style.color = "#ff0000";}
    else
        document.getElementById("a").innerHTML = "";


}
function verfier2() {
    var author=document.getElementById("author").value;
    if( author.length==0 ){
        document.getElementById("a1").innerHTML = "inccorrect";
        document.getElementById("a1").style.color = "#ff0000";}
    else
        document.getElementById("a1").innerHTML = "";


}
function verfier3() {
    var mail=document.getElementById("mail").value;
    if( mail.length==0 || mail.indexOf("@")==-1 ){
        document.getElementById("a2").innerHTML = "inccorrect";
        document.getElementById("a2").style.color = "#ff0000";}
    else
        document.getElementById("a2").innerHTML = "";


}
function verfier4() {
    var city=document.getElementById("tel").value;
    if( city.length!=8 || typeof (city)=="int"){
        document.getElementById("a3").innerHTML = "inccorrect";
        document.getElementById("a3").style.color = "#ff0000";
    return 0;}
    else
        document.getElementById("a3").innerHTML = "";
return 1;

}



function tryy(){

    verfier1();
    verfier2();
    verfier3();
    verfier4();







}
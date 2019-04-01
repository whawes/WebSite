
function verfier1() {
    var name=document.getElementById("name").value;
    if( name.length==0 ){
        document.getElementById("b1").innerHTML = "incorrect";
        document.getElementById("b1").style.color = "#ff0000";}
    else
        document.getElementById("b1").innerHTML = "";


}
function verfier2() {
    var mail=document.getElementById("email").value;
    if( mail.length==0 || mail.indexOf("@")==-1 ){
        document.getElementById("b2").innerHTML = "inccorrect";
        document.getElementById("b2").style.color = "#ff0000";}
    else
        document.getElementById("b2").innerHTML = "";


}
function verfier3() {
    var phone=document.getElementById("phone").value;
    var x= typeof phone;

  
    if( phone.length==0){
        document.getElementById("b3").innerHTML = "inccorrect";
        document.getElementById("b3").style.color = "#ff0000";}
    else
        document.getElementById("b3").innerHTML = "";


}
function verfier4() {
    var msg=document.getElementById("message").value;
    if( msg.length==0 ){
        document.getElementById("b4").innerHTML = "inccorrect";
        document.getElementById("b4").style.color = "#ff0000";
    }
    else
        document.getElementById("b4").innerHTML = "";

}
function test(){
    
    verfier1();
    verfier2();
    verfier3();
    verfier4();


}

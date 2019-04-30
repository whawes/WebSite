<?php
/*
require '../cores/commandeC.php';*/
require '../include.php';
$commande=new CommandeC();
$id=$_GET['id'];
$user=$commande->afficheruser($id);
$list=$commande->ajouterFacture($id);
foreach ($list as $row){


}
echo $_POST['etat'];

$msg="
<!DOCTYPE HTML PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional //EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html><head><title></title><meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"><meta name=\"viewport\" content=\"width=320, target-densitydpi=device-dpi\">
    <style type=\"text/css\">

        /* Reset Styles */
        /* Add 100px so mobile switch bar doesn't cover street address. */
        body { background-color: #ececec; margin: 0; padding: 0; }
        br, strong br, b br, em br, i br { line-height:100%; }
        h1, h2, h3, h4, h5, h6 { line-height: 100% !important; -webkit-font-smoothing: antialiased; }
        h1 a, h2 a, h3 a, h4 a, h5 a, h6 a { color: blue !important; }
        h1 a:active, h2 a:active,  h3 a:active, h4 a:active, h5 a:active, h6 a:active {	color: red !important; }
        /* Preferably not the same color as the normal header link color.  There is limited support for psuedo classes in email clients, this was added just for good measure. */
        h1 a:visited, h2 a:visited,  h3 a:visited, h4 a:visited, h5 a:visited, h6 a:visited { color: purple !important; }
        /* Preferably not the same color as the normal header link color. There is limited support for psuedo classes in email clients, this was added just for good measure. */
        table td, table tr { border-collapse: collapse; }
        .yshortcuts, .yshortcuts a, .yshortcuts a:link,.yshortcuts a:visited, .yshortcuts a:hover, .yshortcuts a span {
            color: black; text-decoration: none !important; border-bottom: none !important; background: none !important;
        }	/* Body text color for the New Yahoo.  This example sets the font of Yahoo's Shortcuts to black. */
        /* This most probably won't work in all email clients. Don't include code blocks in email. */

        #background-table { background-color: #ececec; }
        /* Webkit Elements */
        #top-bar { border-radius:6px 6px 0px 0px; -moz-border-radius: 6px 6px 0px 0px; -webkit-border-radius:6px 6px 0px 0px; -webkit-font-smoothing: antialiased; background-color: #000000; color: #e6e6e6; }
        #footer { border-radius:0px 0px 6px 6px; -moz-border-radius: 0px 0px 6px 6px; -webkit-border-radius:0px 0px 6px 6px; -webkit-font-smoothing: antialiased; }
        /* Fonts and Content */
        body, td { font-family: HelveticaNeue, sans-serif; }
        .header-content, .footer-content-left, .footer-content-right { -webkit-text-size-adjust: none; -ms-text-size-adjust: none; }
        /* Prevent Webkit and Windows Mobile platforms from changing default font sizes on header and footer. */
        .header-content { font-size: 12px; color: #e6e6e6; }
        .header-content a { font-weight: bold; color: #fafafa; text-decoration: none; }
        #headline p { color: #f5f5f5; font-family: HelveticaNeue, sans-serif; font-size: 36px; text-align: center; margin-top:0px; margin-bottom:30px; }
        #headline p a { color: #f5f5f5; text-decoration: none; }
        .article-title { font-size: 18px; line-height:24px; color: #873D3D; font-weight:bold; margin-top:0px; margin-bottom:18px; font-family: HelveticaNeue, sans-serif; }
        .article-title a { color: #873D3D; text-decoration: none; }
        .article-title.with-meta {margin-bottom: 0;}
        .article-meta { font-size: 13px; line-height: 20px; color: #ccc; font-weight: bold; margin-top: 0;}
        .article-content { font-size: 13px; line-height: 18px; color: #444444; margin-top: 0px; margin-bottom: 18px; font-family: HelveticaNeue, sans-serif; }
        .article-content a { color: #00707b; font-weight:bold; text-decoration:none; }
        .article-content img { max-width: 100% }
        .article-content ol, .article-content ul { margin-top:0px; margin-bottom:18px; margin-left:19px; padding:0; }
        .article-content li { font-size: 13px; line-height: 18px; color: #444444; }
        .article-content li a { color: #00707b; text-decoration:underline; }
        .article-content p {margin-bottom: 15px;}
        .footer-content-left { font-size: 12px; line-height: 15px; color: #E6E6E6; margin-top: 0px; margin-bottom: 15px; }
        .footer-content-left a { color: #FAFAFA; font-weight: bold; text-decoration: none; }
        .footer-content-right { font-size: 11px; line-height: 16px; color: #E6E6E6; margin-top: 0px; margin-bottom: 15px; }
        .footer-content-right a { color: #FAFAFA; font-weight: bold; text-decoration: none; }
        #footer { background-color: #873D3D; color: #E6E6E6; }
        #footer a { color: #FAFAFA; text-decoration: none; font-weight: bold; }
        #permission-reminder { white-space: normal; }
        #street-address { color: #e7cba3; white-space: normal; }
    </style>
<![endif]--></head><body><table align=\"center\" class=\"gmail hide\"><tbody><tr><td>&nbsp;</td></tr></tbody></table>
<table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" id=\"background-table\" style=\"table-layout:fixed\" align=\"center\">
	<tbody><tr>
		<td align=\"center\" bgcolor=\"#ececec\">
        	<table class=\"w640\" style=\"margin:0 10px;\" width=\"640\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
            	<tbody><tr><td class=\"w640\" width=\"640\" height=\"20\"></td></tr>

            	<tr>
                	<td class=\"w640\" width=\"640\">
                        <table id=\"top-bar\" class=\"w640\" width=\"640\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" bgcolor=\"#873d3d\">
    <tbody><tr>
        <td class=\"w15\" width=\"15\"></td>
        <td class=\"w325\" width=\"350\" valign=\"middle\" align=\"left\">
            <table class=\"w325\" width=\"350\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
                <tbody><tr><td class=\"w325\" width=\"350\" height=\"8\"></td></tr>
            </tbody></table>
            <table class=\"w325\" width=\"350\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
                <tbody><tr><td class=\"w325\" width=\"350\" height=\"8\"></td></tr>
            </tbody></table>
        </td>
        <td class=\"w30\" width=\"30\"></td>
        <td class=\"w255\" width=\"255\" valign=\"middle\" align=\"right\">
            <table class=\"w255\" width=\"255\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
                <tbody><tr><td class=\"w255\" width=\"255\" height=\"8\"></td></tr>
            </tbody></table>
            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
    <tbody><tr>



    </tr>
</tbody></table>
            <table class=\"w255\" width=\"255\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
                <tbody><tr><td class=\"w255\" width=\"255\" height=\"8\"></td></tr>
            </tbody></table>
        </td>
        <td class=\"w15\" width=\"15\"></td>
    </tr>
</tbody></table>

                    </td>
                </tr>
                <tr>
                <td id=\"header\" class=\"w640\" width=\"640\" align=\"center\" bgcolor=\"#873d3d\">

    <table class=\"w640\" width=\"640\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
        <tbody><tr><td class=\"w30\" width=\"30\"></td><td class=\"w580\" width=\"580\" height=\"30\"></td><td class=\"w30\" width=\"30\"></td></tr>
        <tr>
            <td class=\"w30\" width=\"30\"></td>
            <td class=\"w580\" width=\"580\">
                <div align=\"center\" id=\"headline\">
                    <p>
                        <span><img src=\"logo.png\" alt=\"\" width=\"100\" height=\"50\"/></span><strong><singleline label=\"Title\">Centre Tunisien Du Livre</singleline></strong>
                    </p>
                </div>
            </td>
            <td class=\"w30\" width=\"30\"></td>
        </tr>
    </tbody></table>


</td>
                </tr>

                <tr><td class=\"w640\" width=\"640\" height=\"30\" bgcolor=\"#ffffff\"></td></tr>
                <tr id=\"simple-content-row\"><td class=\"w640\" width=\"640\" bgcolor=\"#ffffff\">
    <table align=\"left\" class=\"w640\" width=\"640\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
        <tbody><tr>
            <td class=\"w30\" width=\"30\"></td>
            <td class=\"w580\" width=\"580\">
                <repeater>

                    <layout label=\"Text only\">
                        <table class=\"w580\" width=\"580\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
                            <tbody><tr>
                                <td class=\"w580\" width=\"580\">
                                    <p align=\"left\" class=\"article-title\"><singleline label=\"Title\">Bonjour,$user</singleline></p>
                                    <div align=\"left\" class=\"article-content\">
                                        <multiline label=\"Description\">Felicitation</multiline>
                                    </div>
                                </td>
                            </tr>
                            <tr><td class=\"w580\" width=\"580\" height=\"10\"></td></tr>
                        </tbody></table>
                    </layout>


                    <layout label=\"Text with full-width image\">
                        <table class=\"w580\" width=\"580\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
                            <tbody><tr>
                                <td class=\"w580\" width=\"580\">
                                    <p align=\"left\" class=\"article-title\"><singleline label=\"Title\">....</singleline></p>
                                </td>
                            </tr>
                            <tr>
                                <td class=\"w580\" width=\"580\"><img editable=\"true\" label=\"Image\" class=\"w580\" width=\"580\" border=\"0\"></td>
                            </tr>
                            <tr><td class=\"w580\" width=\"580\" height=\"15\"></td></tr>
                            <tr>
                                <td class=\"w580\" width=\"580\">
                                    <div align=\"left\" class=\"article-content\">
                                        <multiline label=\"Description\">...</multiline>
                                    </div>
                                </td>
                            </tr>
                            <tr><td class=\"w580\" width=\"580\" height=\"10\"></td></tr>
                        </tbody></table>
                    </layout>
                </repeater>
            </td>
            <td class=\"w30\" width=\"30\"></td>
        </tr>
    </tbody></table>
</td></tr>
                <tr><td class=\"w640\" width=\"640\" height=\"15\" bgcolor=\"#ffffff\"></td></tr>

                <tr>
                <td class=\"w640\" width=\"640\">
    <table id=\"footer\" class=\"w640\" width=\"640\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" bgcolor=\"#873D3D\">
        <tbody><tr><td class=\"w30\" width=\"30\"></td><td class=\"w580 h0\" width=\"360\" height=\"30\"></td><td class=\"w0\" width=\"60\"></td><td class=\"w0\" width=\"160\"></td><td class=\"w30\" width=\"30\"></td></tr>
        <tr>
            <td class=\"w30\" width=\"30\"></td>
            <td class=\"w580\" width=\"360\" valign=\"top\">
            <span class=\"hide\"><p id=\"permission-reminder\" align=\"left\" class=\"footer-content-left\"></p></span>
            <p align=\"left\" class=\"footer-content-left\"><preferences lang=\"en\">Edit your subscription</preferences> | <unsubscribe>Unsubscribe</unsubscribe></p>
            </td>
            <td class=\"hide w0\" width=\"60\"></td>
            <td class=\"hide w0\" width=\"160\" valign=\"top\">
            <p id=\"street-address\" align=\"right\" class=\"footer-content-right\"></p>
            </td>
            <td class=\"w30\" width=\"30\"></td>
        </tr>
        <tr><td class=\"w30\" width=\"30\"></td><td class=\"w580 h0\" width=\"360\" height=\"15\"></td><td class=\"w0\" width=\"60\"></td><td class=\"w0\" width=\"160\"></td><td class=\"w30\" width=\"30\"></td></tr>
    </tbody></table>
</td>
                </tr>
                <tr><td class=\"w640\" width=\"640\" height=\"60\"></td></tr>
            </tbody></table>
        </td>
	</tr>
</tbody></table></body></html>
";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
if($_POST['etat']=="Invalid"){

       mail($commande->Email($_GET['id']),"Verification Commande",$msg,$headers);


}else {
        mail($commande->Email($_GET['id']),"Verification Commande",$msg,$headers);
    }
    $commande->ModifierEtat($_POST['etat'],$_GET['id']);
    header('location:commande.php');

if(isset($_POST['delete'])) {
    $commande->supprimerCommande($_GET['id']);
    header('location:commande.php');
}
if(isset($_POST['more'])) {
   $id=$_GET['id'];
    require 'facture.php';
}

?>


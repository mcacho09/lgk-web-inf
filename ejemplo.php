

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
$nombre= $_REQUEST['nam'];
$phone= $_REQUEST['phon'];
$correo=$_REQUEST['emai'];
$message=$_REQUEST['mess'];

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";

$mail->SMTPDebug  = 0;  
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port       = 587;
$mail->Host       = "smtp.gmail.com"; 
$mail->Username   = "soporte@logistikapp.com";
$mail->Password   = "l4g3st3k1pp";

$mail->IsHTML(true);
$mail->AddAddress($correo, $nombre);
$mail->SetFrom("soporte@logistikapp.com","Soporte LogistikApp");
$mail->AddReplyTo("soporte@logistikapp.com","Soporte LogistikApp");
$mail->AddReplyTo($correo,$nombre);
$mail->AddCC("soporte@logistikapp.com","Soporte LogistikApp");
$mail->Subject = "Soporte";
$content = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>A Simple Responsive HTML Email</title>
  <style type="text/css">
  body {margin: 0; padding: 0; min-width: 100%!important;}
  img {height: auto;}
  .content {width: 100%; max-width: 600px;}
  .header {padding: 40px 30px 20px 30px;}
  .innerpadding {padding: 30px 30px 30px 30px;}
  .borderbottom {border-bottom: 1px solid #f2eeed;}
  .subhead {font-size: 15px; color: #ffffff; font-family: sans-serif; letter-spacing: 10px;}
  .h1, .h2, .bodycopy {color: #153643; font-family: sans-serif;}
  .h1 {font-size: 33px; line-height: 38px; font-weight: bold;}
  .h2 {padding: 0 0 15px 0; font-size: 24px; line-height: 28px; font-weight: bold;}
  .bodycopy {font-size: 16px; line-height: 22px;}
  .button {text-align: center; font-size: 18px; font-family: sans-serif; font-weight: bold; padding: 0 30px 0 30px;}
  .button a {color: #ffffff; text-decoration: none;}
  .footer {padding: 20px 30px 15px 30px;}
  .footercopy {font-family: sans-serif; font-size: 14px; color: #ffffff;}
  .footercopy a {color: #ffffff; text-decoration: underline;}

  @media only screen and (max-width: 550px), screen and (max-device-width: 550px) {
  body[yahoo] .hide {display: none!important;}
  body[yahoo] .buttonwrapper {background-color: transparent!important;}
  body[yahoo] .button {padding: 0px!important;}
  body[yahoo] .button a {background-color: #e05443; padding: 15px 15px 13px!important;}
  body[yahoo] .unsubscribe {display: block; margin-top: 20px; padding: 10px 50px; background: #095493; border-radius: 5px; text-decoration: none!important; font-weight: bold;}
  }

  /*@media only screen and (min-device-width: 601px) {
    .content {width: 600px !important;}
    .col425 {width: 425px!important;}
    .col380 {width: 380px!important;}
    }*/

  </style>
<script type="text/javascript" nonce="cee96b6fa0544fec99001ba3604" src="//local.adguard.org?ts=1580148917269&amp;type=content-script&amp;dmn=tutsplus.github.io&amp;css=1&amp;js=1&amp;gcss=1&amp;rel=1&amp;rji=1"></script>
<script type="text/javascript" nonce="cee96b6fa0544fec99001ba3604" src="//local.adguard.org?ts=1580148917269&amp;name=AdGuard%20Assistant&amp;name=AdGuard%20Extra&amp;type=user-script"></script></head>

<body yahoo bgcolor="#095493">
<table width="100%" bgcolor="#f6f8f1" border="0" cellpadding="0" cellspacing="0">
<tr>
  <td>
    <!--[if (gte mso 9)|(IE)]>
      <table width="600" align="center" cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td>
    <![endif]-->     
    <table bgcolor="#ffffff" class="content" align="center" cellpadding="0" cellspacing="0" border="0">
      <tr>
        <td bgcolor="#095493" class="header">
            <!--
          <table width="70" align="left" border="0" cellpadding="0" cellspacing="0">  
            <tr>
              <td height="70" style="padding: 0 20px 20px 0;">
                <img class="fix" src="images/logo.png" width="200" height="200" border="0" alt="" />
              </td>
            </tr>
          </table>
        -->
          <!--[if (gte mso 9)|(IE)]>
            <table width="425" align="left" cellpadding="0" cellspacing="0" border="0">
              <tr>
                <td>
          <![endif]-->
          <table class="col425" align="left" border="0" cellpadding="0" cellspacing="0" style="width: 100%; max-width: 425px;">  
            <tr>
              <td height="70">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td class="subhead" style="padding: 0 0 0 3px;">
                      Soporte
                    </td>
                  </tr>
                  <tr>
                    <td class="h1" style="padding: 5px 0 0 0; color: white;">
                      LogistikApp
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
          <!--[if (gte mso 9)|(IE)]>
                </td>
              </tr>
          </table>
          <![endif]-->
        </td>
      </tr>
      <tr>
        <td class="innerpadding borderbottom">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td class="h2">
                Gracias por tu solicitud de información!
              </td>
            </tr>
            <tr>
              <td class="bodycopy">
                Gracias por confiar en nosotros '.$nombre.' , A continuación nos comunicaremos con usted con el correo dado de alta '.$correo.' o por telefono '.$phone.'.
                </br>
                Su mensaje fue:</br>
                '.$message.'.
              </td>
            
            </tr>
          </table>
          <br>
          <table class="buttonwrapper" bgcolor="#095493" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td class="button" height="45">
                <a href="http://logistikapp.com/">Visitar pagina!</a>
              </td>
            </tr>
          </table>
        </td>
        
      </tr>
      <tr>
        
      </tr>
      <tr>
        <td class="innerpadding borderbottom">
          <img class="fix" src="https://i.ibb.co/VwVNhNG/Cap.jpg" width="100%" border="0" alt="" />
        </td>
      </tr>
      
      <tr>
        <td class="footer" bgcolor="#095493">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td align="center" class="footercopy">
                &reg; Copyright LogistikApp, LogistikApp 2020<br/>
                
              </td>
            </tr>
            <tr>
              <td align="center" style="padding: 20px 0 0 0;">
                <table border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="37" style="text-align: center; padding: 0 10px 0 10px;">
                      <a href="https://www.facebook.com/pg/LogistikApp/">
                        <img src="https://img.icons8.com/color/96/000000/facebook-new.png" width="37" height="37" alt="Facebook" border="0" />
                      </a>
                    </td>
                    <td width="37" style="text-align: center; padding: 0 10px 0 10px;">
                      <a href="https://www.youtube.com/channel/UCP3P28wqqD14rJSbOB440Qg">
                        <img src="https://img.icons8.com/color/96/000000/youtube-play.png" width="37" height="37" alt="Twitter" border="0" />
                      </a>
                    </td>
                    <td width="37" style="text-align: center; padding: 0 10px 0 10px;">
                      <a href="https://www.linkedin.com/company/logistikapp/">
                        <img src="https://img.icons8.com/color/96/000000/linkedin-circled.png" width="37" height="37" alt="Twitter" border="0" />
                      </a>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
    <!--[if (gte mso 9)|(IE)]>
          </td>
        </tr>
    </table>
    <![endif]-->
    </td>
  </tr>
</table>

<!--analytics-->

</body>
</html>';


$mail->MsgHTML($content); 
if(!$mail->Send()) {
 //  echo "Error while sending Email.";
  var_dump($mail);
} else {
  //echo "Email sent successfully";
  //header('Location: index.html');

}
?>
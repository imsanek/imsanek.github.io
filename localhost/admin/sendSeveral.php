<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

// Переменные, которые отправляет пользователь
$name = $_POST['name'];
$email = $_POST['email'];
$firstDate = $_POST['firstDate'];
$lastDate = $_POST['lastDate'];
$price1 = $_POST['price1'];
$price2 = $_POST['price2'];
$number1 = $_POST['number1'];
$number2 = $_POST['number2'];
$dayCount1 = $_POST['dayCount1'];
$dayCount2 = $_POST['dayCount2'];

$allPrice = $price1 + $price2;

// Формирование самого письма
$title = "Бронирование номеров ". $number1 ." и ". $number2 ." в Бутик-отеле История г. Алушта";
$body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office" style="font-family:arvo, courier, georgia, serif">
 <head> 
  <meta charset="UTF-8"> 
  <meta content="width=device-width, initial-scale=1" name="viewport"> 
  <meta name="x-apple-disable-message-reformatting"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta content="telephone=no" name="format-detection">  
  <!--[if (mso 16)]>
    <style type="text/css">
    a {text-decoration: none;}
    </style>
    <![endif]--> 
  <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]--> 
  <!--[if gte mso 9]>
<xml>
    <o:OfficeDocumentSettings>
    <o:AllowPNG></o:AllowPNG>
    <o:PixelsPerInch>96</o:PixelsPerInch>
    </o:OfficeDocumentSettings>
</xml>
<![endif]--> 
  <!--[if !mso]><!-- --> 
  <link href="https://fonts.googleapis.com/css?family=Arvo:400,400i,700,700i" rel="stylesheet"> 
  <!--<![endif]--> 
  <style type="text/css">
#outlook a {
	padding:0;
}
.es-button {
	mso-style-priority:100!important;
	text-decoration:none!important;
}
a[x-apple-data-detectors] {
	color:inherit!important;
	text-decoration:none!important;
	font-size:inherit!important;
	font-family:inherit!important;
	font-weight:inherit!important;
	line-height:inherit!important;
}
.es-desk-hidden {
	display:none;
	float:left;
	overflow:hidden;
	width:0;
	max-height:0;
	line-height:0;
	mso-hide:all;
}
[data-ogsb] .es-button {
	border-width:0!important;
	padding:10px 20px 10px 20px!important;
}
[data-ogsb] .es-button.es-button-1 {
	padding:5px 55px!important;
}
@media only screen and (max-width:600px) {p, ul li, ol li, a { line-height:150%!important } h1, h2, h3, h1 a, h2 a, h3 a { line-height:120% } h1 { font-size:30px!important; text-align:left } h2 { font-size:24px!important; text-align:left } h3 { font-size:20px!important; text-align:left } .es-header-body h1 a, .es-content-body h1 a, .es-footer-body h1 a { font-size:30px!important; text-align:left } .es-header-body h2 a, .es-content-body h2 a, .es-footer-body h2 a { font-size:24px!important; text-align:left } .es-header-body h3 a, .es-content-body h3 a, .es-footer-body h3 a { font-size:20px!important; text-align:left } .es-menu td a { font-size:14px!important } .es-header-body p, .es-header-body ul li, .es-header-body ol li, .es-header-body a { font-size:14px!important } .es-content-body p, .es-content-body ul li, .es-content-body ol li, .es-content-body a { font-size:14px!important } .es-footer-body p, .es-footer-body ul li, .es-footer-body ol li, .es-footer-body a { font-size:14px!important } .es-infoblock p, .es-infoblock ul li, .es-infoblock ol li, .es-infoblock a { font-size:12px!important } *[class="gmail-fix"] { display:none!important } .es-m-txt-c, .es-m-txt-c h1, .es-m-txt-c h2, .es-m-txt-c h3 { text-align:center!important } .es-m-txt-r, .es-m-txt-r h1, .es-m-txt-r h2, .es-m-txt-r h3 { text-align:right!important } .es-m-txt-l, .es-m-txt-l h1, .es-m-txt-l h2, .es-m-txt-l h3 { text-align:left!important } .es-m-txt-r img, .es-m-txt-c img, .es-m-txt-l img { display:inline!important } .es-button-border { display:inline-block!important } a.es-button, button.es-button { font-size:18px!important; display:inline-block!important } .es-adaptive table, .es-left, .es-right { width:100%!important } .es-content table, .es-header table, .es-footer table, .es-content, .es-footer, .es-header { width:100%!important; max-width:600px!important } .es-adapt-td { display:block!important; width:100%!important } .adapt-img { width:100%!important; height:auto!important } .es-m-p0 { padding:0px!important } .es-m-p0r { padding-right:0px!important } .es-m-p0l { padding-left:0px!important } .es-m-p0t { padding-top:0px!important } .es-m-p0b { padding-bottom:0!important } .es-m-p20b { padding-bottom:20px!important } .es-mobile-hidden, .es-hidden { display:none!important } tr.es-desk-hidden, td.es-desk-hidden, table.es-desk-hidden { width:auto!important; overflow:visible!important; float:none!important; max-height:inherit!important; line-height:inherit!important } tr.es-desk-hidden { display:table-row!important } table.es-desk-hidden { display:table!important } td.es-desk-menu-hidden { display:table-cell!important } .es-menu td { width:1%!important } table.es-table-not-adapt, .esd-block-html table { width:auto!important } table.es-social { display:inline-block!important } table.es-social td { display:inline-block!important } }
</style> 
 </head> 
 <body style="width:100%;font-family:arvo, courier, georgia, serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0"> 
  <div class="es-wrapper-color" style="background-color:#FFF2CC"> 
   <!--[if gte mso 9]>
			<v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
				<v:fill type="tile" color="#fff2cc" origin="0.5, 0" position="0.5, 0"></v:fill>
			</v:background>
		<![endif]--> 
   <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top;background-color:#FFF2CC"> 
     <tr> 
      <td valign="top" style="padding:0;Margin:0"> 
       <table class="es-header" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top"> 
         <tr> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-header-body" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px"> 
             <tr> 
              <td align="left" style="padding:0;Margin:0;padding-top:20px;padding-left:20px;padding-right:20px"> 
               <table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr> 
                  <td align="center" valign="top" style="padding:0;Margin:0;width:560px"> 
                   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr> 
                      <td align="center" style="padding:0;Margin:0;font-size:0px"><a target="_blank" href="https://hotel-istoria.ru" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#2CB543;font-size:14px"><img class="adapt-img" src="https://image.prntscr.com/image/ga4n9RZAThKQR8MGKTAuxQ.png" alt="Официальный сайт" style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic" width="560" title="Официальный сайт"></a></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
         <tr> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-content-body" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px"> 
             <tr> 
              <td align="left" style="padding:0;Margin:0;padding-top:20px;padding-left:20px;padding-right:20px"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:560px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr> 
                      <td align="center" style="padding:0;Margin:0"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arvo, courier, georgia, serif;line-height:30px;color:#333333;font-size:20px">Здравствуйте,&nbsp;' . $name . '!</p></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table class="es-footer" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top"> 
         <tr> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-footer-body" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;border-top:1px solid transparent;border-right:1px solid transparent;border-left:1px solid transparent;width:600px;border-bottom:1px solid transparent"> 
             <tr> 
              <td align="left" style="padding:0;Margin:0;padding-top:20px;padding-left:20px;padding-right:20px"> 
               <table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr> 
                  <td align="center" valign="top" style="padding:0;Margin:0;width:558px"> 
                   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr> 
                      <td align="left" style="padding:0;Margin:0"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arvo, courier, georgia, serif;line-height:28px;color:#333333;font-size:14px">Для Вас предварительно забронирован номер в бутик-отеле "История" в Алуште.</p></td> 
                     </tr> 
                     <tr> 
                      <td align="left" style="padding:0;Margin:0"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arvo, courier, georgia, serif;line-height:28px;color:#333333;font-size:14px">Дата заезда:&nbsp;' . $firstDate . '</p><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arvo, courier, georgia, serif;line-height:28px;color:#333333;font-size:14px">Дата выезда:&nbsp;' . $lastDate . '<br>Номер: ' . $number1 .' и '. $number2 . '</p></td> 
                     </tr> 
                     <tr> 
                      <td align="center" style="padding:20px;Margin:0;font-size:0"> 
                       <table border="0" width="100%" height="100%" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                         <tr> 
                          <td style="padding:0;Margin:0;border-bottom:1px solid #cccccc;background:none;height:1px;width:100%;margin:0px"></td> 
                         </tr> 
                       </table></td> 
                     </tr> 
                     <tr> 
                      <td align="center" style="padding:0;Margin:0"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arvo, courier, georgia, serif;line-height:28px;color:#333333;font-size:14px">Расчёт стоимости и реквизиты для внесения предоплаты прилагаем ниже.<br>Предварительная бронь действительна в течении 3-х дней.</p><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arvo, courier, georgia, serif;line-height:28px;color:#333333;font-size:14px"><br></p><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arvo, courier, georgia, serif;line-height:28px;color:#333333;font-size:14px">После внесения предоплаты, мы отправляем Вам ваучер подтверждения брони, что будет являться гарантией забронированного номера.</p></td> 
                     </tr> 
                     <tr> 
                      <td align="center" style="padding:0;Margin:0"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arvo, courier, georgia, serif;line-height:28px;color:#333333;font-size:14px">Приятного Вам отдыха!</p></td> 
                     </tr> 
                     <tr> 
                      <td align="center" style="padding:20px;Margin:0;font-size:0"> 
                       <table border="0" width="100%" height="100%" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                         <tr> 
                          <td style="padding:0;Margin:0;border-bottom:1px solid #cccccc;background:none;height:1px;width:100%;margin:0px"></td> 
                         </tr> 
                       </table></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
             <tr style="display: flex;"> 
              <td align="left" style="padding:0;Margin:0 auto;padding-top:20px;padding-left:20px;padding-right:20px"> 
               <!--[if mso]><table style="width:558px" cellpadding="0" cellspacing="0"><tr><td style="width:143px" valign="top"><![endif]--> 
               <table cellpadding="0" cellspacing="0" class="es-left" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left"> 
                 <tr> 
                  <td class="es-m-p0r es-m-p20b" align="center" style="padding:0;Margin:0;width:150px"> 
                   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr> 
                      <td align="center" bgcolor="#333333" style="padding:5px;Margin:0"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arvo, courier, georgia, serif;line-height:21px;color:#ffffff;font-size:14px">НОМЕР</p></td> 
                     </tr> 
                   </table></td> 
                  <td class="es-hidden" style="padding:0;Margin:0;width:20px"></td> 
                 </tr> 
                 <tr> 
                  <td class="es-m-p0r es-m-p20b" align="center" style="padding:0;Margin:0;width:125px"> 
                   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr> 
                      <td align="center" style="padding:0;Margin:0"><p style="Margin:0; border: 1px solid black;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arvo, courier, georgia, serif;line-height:21px;color:#333333;font-size:14px">' . $number1 . '<br>' . $number2 . '</p></td> 
                     </tr> 
                   </table></td> 
                  <td class="es-hidden" style="padding:0;Margin:0;width:20px"></td> 
                 </tr> 
               </table> 
               <!--[if mso]></td><td style="width:145px" valign="top"><![endif]--> 
               <table cellpadding="0" cellspacing="0" class="es-left" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left"> 
                 <tr> 
                  <td class="es-m-p20b" align="center" style="padding:0;Margin:0;width:125px"> 
                   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr> 
                      <td align="center" bgcolor="#333333" style="padding:5px;Margin:0"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arvo, courier, georgia, serif;line-height:21px;color:#ffffff;font-size:14px">КОЛ-ВО НОЧЕЙ</p></td> 
                     </tr> 
                   </table></td> 
                  <td class="es-hidden" style="padding:0;Margin:0;width:20px"></td> 
                 </tr> 
                 <tr> 
                  <td class="es-m-p20b" align="center" style="padding:0;Margin:0;width:125px"> 
                   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr> 
                      <td align="center" style="padding:0;Margin:0"><p style="Margin:0; border: 1px solid black;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arvo, courier, georgia, serif;line-height:21px;color:#333333;font-size:14px">' . $dayCount1 . '<br>' .  $dayCount2 .  '</p></td> 
                     </tr> 
                   </table></td> 
                  <td class="es-hidden" style="padding:0;Margin:0;width:20px"></td> 
                 </tr> 
               </table> 
               <!--[if mso]></td><td style="width:125px" valign="top"><![endif]--> 
               <table cellpadding="0" cellspacing="0" class="es-left" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left"> 
                 <tr> 
                  <td class="es-m-p20b" align="center" style="padding:0;Margin:0;width:125px"> 
                   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr> 
                      <td align="center" bgcolor="#333333" style="padding:5px;Margin:0"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arvo, courier, georgia, serif;line-height:21px;color:#ffffff;font-size:14px">ЦЕНА</p></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
                 <tr> 
                  <td class="es-m-p20b" align="center" style="padding:0;Margin:0;width:125px"> 
                   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr> 
                      <td align="center" style="padding:0;Margin:0"><p style="Margin:0; border: 1px solid black;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arvo, courier, georgia, serif;line-height:21px;color:#333333;font-size:14px">' . $price1/$dayCount1 . ' руб.<br>' . $price2/$dayCount2 . ' руб.</p></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table> 
               <!--[if mso]></td><td style="width:20px"></td><td style="width:125px" valign="top"><![endif]-->
               <br><br>  
               <table cellpadding="0" cellspacing="0" class="es-right" align="right" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right"> 
                 <tr> 
                  <td align="center" style="padding:0;Margin:0;width:125px"> 
                   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr> 
                      <td align="center" bgcolor="#333333" style="padding:5px;Margin:0"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arvo, courier, georgia, serif;line-height:21px;color:#ffffff;font-size:14px">СУММА</p></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
                 <tr> 
                  <td align="center" style="padding:0;Margin:0;width:125px"> 
                   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr> 
                      <td align="center" style="padding:0;Margin:0"><p style="Margin:0; border: 1px solid black;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arvo, courier, georgia, serif;line-height:21px;color:#333333;font-size:14px">' . $allPrice . ' руб.</p></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table> 
               <!--[if mso]></td></tr></table><![endif]--></td> 
             </tr> 
             <tr> 
              <td align="left" style="padding:0;Margin:0;padding-top:20px;padding-left:20px;padding-right:20px"> 
               <table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr> 
                  <td align="center" valign="top" style="padding:0;Margin:0;width:558px"> 
                   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr> 
                      <td align="center" style="padding:20px;Margin:0;font-size:0"> 
                       <table border="0" width="100%" height="100%" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                         <tr> 
                          <td style="padding:0;Margin:0;border-bottom:1px solid #cccccc;background:none;height:1px;width:100%;margin:0px"></td> 
                         </tr> 
                       </table></td> 
                     </tr> 
                     <tr> 
                      <td align="center" style="padding:0;Margin:0"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arvo, courier, georgia, serif;line-height:21px;color:#333333;font-size:14px">Только для жителей России на расчетный счёт можно отправлять средства из любого банка - ВНУТРИРОССИЙСКИЙ ПЕРЕВОД!<br><br> <table>
                      <span style="
                      padding: 10px;
                      font-weight: bold;
                      font-family: arvo, courier, georgia, serif;
                      line-height: 24px;
                      color: #333333;
                      font-size: 16px;
    float: left;
                  ">Всего к оплате по счёту (предоплата: 20%): ' . $allPrice * 0.2 . ' руб.</span> <br><br>
                      <span style="
                      padding: 10px;
                      font-weight: bold;
                      font-family: arvo, courier, georgia, serif;
                      line-height: 24px;
                      color: #333333;
                      font-size: 16px;
    float: left;
                  ">Задолженность (оплачивается при поселении): ' . $allPrice * 0.8 . ' руб.</span> <br><br>
                      <span style="
                      padding: 10px;
                      font-weight: bold;
                      font-family: arvo, courier, georgia, serif;
                      line-height: 24px;
                      color: #333333;
                      font-size: 16px;
    float: left;
                  ">Реквезиты для внесения предоплаты (20%): ' . $allPrice * 0.2 . ' руб.</span> <br><br>
                      <tr>
                          <td style="
              border: 1px solid black;
              padding: 10px;font-family:arvo, courier, georgia, serif;line-height:21px;color:#333333;font-size:14px
          ">Банк</td>
                          <td style="
              border: 1px solid black;
              padding: 10px;font-family:arvo, courier, georgia, serif;line-height:21px;color:#333333;font-size:14px
          ">Тинькофф Банк <br> ул. Хуторская 2-я, 38А, стр. 26, г. Москва, Россия</td>
                      </tr>
                      <tr>
                          <td style="
              border: 1px solid black;
              padding: 10px;font-family:arvo, courier, georgia, serif;line-height:21px;color:#333333;font-size:14px
          ">Расчётный счёт</td>
                          <td style="
              border: 1px solid black;
              padding: 10px;font-family:arvo, courier, georgia, serif;line-height:21px;color:#333333;font-size:14px
          ">40802810000002608461</td>
                      </tr>
                      <tr>
                          <td style="
              border: 1px solid black;
              padding: 10px;font-family:arvo, courier, georgia, serif;line-height:21px;color:#333333;font-size:14px
          ">К/С</td>
                          <td style="
              border: 1px solid black;
              padding: 10px;font-family:arvo, courier, georgia, serif;line-height:21px;color:#333333;font-size:14px
          ">30101810145250000974</td>
                      </tr>
                      <tr>
                          <td style="
              border: 1px solid black;
              padding: 10px;font-family:arvo, courier, georgia, serif;line-height:21px;color:#333333;font-size:14px
          ">БИК</td>
                          <td style="
              border: 1px solid black;
              padding: 10px;font-family:arvo, courier, georgia, serif;line-height:21px;color:#333333;font-size:14px
          ">044525974</td>
                      </tr>
                      <tr>
                          <td style="
              border: 1px solid black;
              padding: 10px;font-family:arvo, courier, georgia, serif;line-height:21px;color:#333333;font-size:14px
          ">ИНН</td>
                          <td style="
              border: 1px solid black;
              padding: 10px;font-family:arvo, courier, georgia, serif;line-height:21px;color:#333333;font-size:14px
          ">781613977728</td>
                      </tr>
                      <tr>
                          <td style="
              border: 1px solid black;
              padding: 10px;font-family:arvo, courier, georgia, serif;line-height:21px;color:#333333;font-size:14px
          ">Получатель</td>
                          <td style="
              border: 1px solid black;
              padding: 10px;font-family:arvo, courier, georgia, serif;line-height:21px;color:#333333;font-size:14px
          ">ИП Новикова Любовь Владимировна</td>
                      </tr>
                      <tr>
                          <td style="
              border: 1px solid black;
              padding: 10px;font-family:arvo, courier, georgia, serif;line-height:21px;color:#333333;font-size:14px
          ">Отправитель</td>
                          <td style="
              border: 1px solid black;
              padding: 10px;font-family:arvo, courier, georgia, serif;line-height:21px;color:#333333;font-size:14px
          ">' . $name . '</td>
                      </tr>
                      <tr>
                          <td style="
              border: 1px solid black;
              padding: 10px;font-family:arvo, courier, georgia, serif;line-height:21px;color:#333333;font-size:14px
          ">Сумма к оплате</td>
                          <td style="
              border: 1px solid black;
              padding: 10px;font-family:arvo, courier, georgia, serif;line-height:21px;color:#333333;font-size:14px
          ">' . $allPrice * 0.2 . ' руб.</td>
                      </tr>
                      <tr>
                          <td style="
              border: 1px solid black;
              padding: 10px;font-family:arvo, courier, georgia, serif;line-height:21px;color:#333333;font-size:14px
          ">Назначение платежа</td>
                          <td style="
              border: 1px solid black;
              padding: 10px;font-family:arvo, courier, georgia, serif;line-height:21px;color:#333333;font-size:14px
          ">Бронирование номера ' . $number1 .' и '. $number2 . ' в Бутик-отеле История</td>
                      </tr>
                  </table><br><br>Когда Вы оплатите счёт, нажмите на эту кнопку.</p></td> 
                     </tr> 
                     <tr> 
                      <td align="center" style="padding:10px;Margin:0"><span class="es-button-border" style="border-style:solid;border-color:#2CB543;background:#2CB543;border-width:0px 0px 2px 0px;display:inline-block;border-radius:6px;width:auto"><a href="https://hotel-istoria.ru/payment.html?name='. $name .'&number='. $number1 .' и '. $number2 .'&email='. $email .'&firstDate='. $firstDate .'&lastDate='. $lastDate .'&price='. $allPrice * 0.2 .'" class="es-button es-button-1" target="_blank" style="mso-style-priority:100 !important;text-decoration:none;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;color:#FFFFFF;font-size:18px;border-style:solid;border-color:#31CB4B;border-width:5px 55px;display:inline-block;background:#31CB4B;border-radius:6px;font-family:arvo, courier, georgia, serif;font-weight:normal;font-style:normal;line-height:22px;width:auto;text-align:center">Я оплатил</a></span></td> 
                     </tr> 
                     <tr> 
                      <td align="center" style="padding:0;Margin:0"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arvo, courier, georgia, serif;line-height:21px;color:#333333;font-size:14px"><br>Переведённые денежные средства входят в стоимость оплаты и необходимы для&nbsp; резервирования данного номера. При отмене бронирования менее, чем за 30 суток, сумма оплаты не возвращается. Более чем за 30 суток, сумма оплаты возвращается с вычетом налогов.<br><br></p></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table></td> 
     </tr> 
   </table> 
  </div>  
 </body>
</html>
';

// Настройки PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    //$mail->SMTPDebug = 2;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    // Настройки вашей почты
    $mail->Host       = 'smtp.mail.ru'; // SMTP сервера вашей почты
    $mail->Username   = 'hotel-istoria@mail.ru'; // Логин на почте
    $mail->Password   = 'u6kFqjzazhGPXEBUZt1M'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('hotel-istoria@mail.ru', 'Бутик-отель История'); // Адрес самой почты и имя отправителя

    // Получатель письма
    $mail->addAddress($email);  

    // Прикрипление файлов к письму
if (!empty($file['name'][0])) {
    for ($ct = 0; $ct < count($file['tmp_name']); $ct++) {
        $uploadfile = tempnam(sys_get_temp_dir(), sha1($file['name'][$ct]));
        $filename = $file['name'][$ct];
        if (move_uploaded_file($file['tmp_name'][$ct], $uploadfile)) {
            $mail->addAttachment($uploadfile, $filename);
            $rfile[] = "Файл $filename прикреплён";
        } else {
            $rfile[] = "Не удалось прикрепить файл $filename";
        }
    }   
}
// Отправка сообщения
$mail->isHTML(true);
$mail->Subject = $title;
$mail->Body = $body;    

// Проверяем отравленность сообщения
if ($mail->send()) {$result = "success";} 
else {$result = "error";}

} catch (Exception $e) {
    $result = "error";
    $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}

// Отображение результата
echo json_encode(["result" => $result, "resultfile" => $rfile, "status" => $status]);
<?php

function send_questions($to,$body,$heading){
    require_once 'Swift-5.0.1/lib/swift_required.php';
    
    $transport = Swift_SmtpTransport::newInstance('email-smtp.us-west-2.amazonaws.com', 587, "tls")
      ->setUsername('AKIAI3LTAP4OOQQSPQUQ')
      ->setPassword('AloRW+1qtQ7rAflLgKE1W0DmT4AV/byyUnRPtu1hal8g');

    $mailer = Swift_Mailer::newInstance($transport);

    $message = Swift_Message::newInstance($heading)
      ->setFrom(array("daily@subliminalprime.com" => 'Subliminal Prime'))
      ->setTo(array($to))
      ->setBody($body,'text/html');

    $result = $mailer->send($message);

    if ($result){
        return TRUE;
    }
    else{
        return FALSE;
    }


}


function generate_email_preference($email){

    $pages ='<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
  <style>
/**********************************************
* Ink v1.0.5 - Copyright 2013 ZURB Inc        *
**********************************************/

/* Client-specific Styles & Reset */

#outlook a { 
  padding:0; 
} 

body{ 
  width:100% !important; 
  min-width: 100%;
  -webkit-text-size-adjust:100%; 
  -ms-text-size-adjust:100%; 
  margin:0; 
  padding:0;
}

.ExternalClass { 
  width:100%;
} 

.ExternalClass, 
.ExternalClass p, 
.ExternalClass span, 
.ExternalClass font, 
.ExternalClass td, 
.ExternalClass div { 
  line-height: 100%; 
} 

#backgroundTable { 
  margin:0; 
  padding:0; 
  width:100% !important; 
  line-height: 100% !important; 
}

img { 
  outline:none; 
  text-decoration:none; 
  -ms-interpolation-mode: bicubic;
  width: auto;
  max-width: 100%; 
  float: left; 
  clear: both; 
  display: block;
}

center {
  width: 100%;
  min-width: 580px;
}

a img { 
  border: none;
}

p {
  margin: 0 0 0 10px;
}

table {
  border-spacing: 0;
  border-collapse: collapse;
}

td { 
  word-break: break-word;
  -webkit-hyphens: auto;
  -moz-hyphens: auto;
  hyphens: auto;
  border-collapse: collapse !important; 
}

table, tr, td {
  padding: 0;
  vertical-align: top;
  text-align: left;
}

hr {
  color: #d9d9d9; 
  background-color: #d9d9d9; 
  height: 1px; 
  border: none;
}

/* Responsive Grid */

table.body {
  height: 100%;
  width: 100%;
}

table.container {
  width: 580px;
  margin: 0 auto;
  text-align: inherit;
}

table.row { 
  padding: 0px; 
  width: 100%;
  position: relative;
}

table.container table.row {
  display: block;
}

td.wrapper {
  padding: 10px 20px 0px 0px;
  position: relative;
}

table.columns,
table.column {
  margin: 0 auto;
}

table.columns td,
table.column td {
  padding: 0px 0px 10px; 
}

table.columns td.sub-columns,
table.column td.sub-columns,
table.columns td.sub-column,
table.column td.sub-column {
  padding-right: 10px;
}

td.sub-column, td.sub-columns {
  min-width: 0px;
}

table.row td.last,
table.container td.last {
  padding-right: 0px;
}

table.one { width: 30px; }
table.two { width: 80px; }
table.three { width: 130px; }
table.four { width: 180px; }
table.five { width: 230px; }
table.six { width: 280px; }
table.seven { width: 330px; }
table.eight { width: 380px; }
table.nine { width: 430px; }
table.ten { width: 480px; }
table.eleven { width: 530px; }
table.twelve { width: 580px; }

table.one center { min-width: 30px; }
table.two center { min-width: 80px; }
table.three center { min-width: 130px; }
table.four center { min-width: 180px; }
table.five center { min-width: 230px; }
table.six center { min-width: 280px; }
table.seven center { min-width: 330px; }
table.eight center { min-width: 380px; }
table.nine center { min-width: 430px; }
table.ten center { min-width: 480px; }
table.eleven center { min-width: 530px; }
table.twelve center { min-width: 580px; }

table.one .panel center { min-width: 10px; }
table.two .panel center { min-width: 60px; }
table.three .panel center { min-width: 110px; }
table.four .panel center { min-width: 160px; }
table.five .panel center { min-width: 210px; }
table.six .panel center { min-width: 260px; }
table.seven .panel center { min-width: 310px; }
table.eight .panel center { min-width: 360px; }
table.nine .panel center { min-width: 410px; }
table.ten .panel center { min-width: 460px; }
table.eleven .panel center { min-width: 510px; }
table.twelve .panel center { min-width: 560px; }

.body .columns td.one,
.body .column td.one { width: 8.333333%; }
.body .columns td.two,
.body .column td.two { width: 16.666666%; }
.body .columns td.three,
.body .column td.three { width: 25%; }
.body .columns td.four,
.body .column td.four { width: 33.333333%; }
.body .columns td.five,
.body .column td.five { width: 41.666666%; }
.body .columns td.six,
.body .column td.six { width: 50%; }
.body .columns td.seven,
.body .column td.seven { width: 58.333333%; }
.body .columns td.eight,
.body .column td.eight { width: 66.666666%; }
.body .columns td.nine,
.body .column td.nine { width: 75%; }
.body .columns td.ten,
.body .column td.ten { width: 83.333333%; }
.body .columns td.eleven,
.body .column td.eleven { width: 91.666666%; }
.body .columns td.twelve,
.body .column td.twelve { width: 100%; }

td.offset-by-one { padding-left: 50px; }
td.offset-by-two { padding-left: 100px; }
td.offset-by-three { padding-left: 150px; }
td.offset-by-four { padding-left: 200px; }
td.offset-by-five { padding-left: 250px; }
td.offset-by-six { padding-left: 300px; }
td.offset-by-seven { padding-left: 350px; }
td.offset-by-eight { padding-left: 400px; }
td.offset-by-nine { padding-left: 450px; }
td.offset-by-ten { padding-left: 500px; }
td.offset-by-eleven { padding-left: 550px; }

td.expander {
  visibility: hidden;
  width: 0px;
  padding: 0 !important;
}

table.columns .text-pad,
table.column .text-pad {
  padding-left: 10px;
  padding-right: 10px;
}

table.columns .left-text-pad,
table.columns .text-pad-left,
table.column .left-text-pad,
table.column .text-pad-left {
  padding-left: 10px;
}

table.columns .right-text-pad,
table.columns .text-pad-right,
table.column .right-text-pad,
table.column .text-pad-right {
  padding-right: 10px;
}

/* Block Grid */

.block-grid {
  width: 100%;
  max-width: 580px;
}

.block-grid td {
  display: inline-block;
  padding:10px;
}

.two-up td {
  width:270px;
}

.three-up td {
  width:173px;
}

.four-up td {
  width:125px;
}

.five-up td {
  width:96px;
}

.six-up td {
  width:76px;
}

.seven-up td {
  width:62px;
}

.eight-up td {
  width:52px;
}

/* Alignment & Visibility Classes */

table.center, td.center {
  text-align: center;
}

h1.center,
h2.center,
h3.center,
h4.center,
h5.center,
h6.center {
  text-align: center;
}

span.center {
  display: block;
  width: 100%;
  text-align: center;
}

img.center {
  margin: 0 auto;
  float: none;
}

.show-for-small,
.hide-for-desktop {
  display: none;
}

/* Typography */

body, table.body, h1, h2, h3, h4, h5, h6, p, td { 
  color: #222222;
  font-family: "Helvetica", "Arial", sans-serif; 
  font-weight: normal; 
  padding:0; 
  margin: 0;
  text-align: left; 
  line-height: 1.3;
}

h1, h2, h3, h4, h5, h6 {
  word-break: normal;
}

h1 {font-size: 40px;}
h2 {font-size: 36px;}
h3 {font-size: 32px;}
h4 {font-size: 28px;}
h5 {font-size: 24px;}
h6 {font-size: 20px;}
body, table.body, p, td {font-size: 14px;line-height:19px;}

p.lead, p.lede, p.leed {
  font-size: 18px;
  line-height:21px;
}

p { 
  margin-bottom: 10px;
}

small {
  font-size: 10px;
}

a {
  color: #2ba6cb; 
  text-decoration: none;
}

a:hover { 
  color: #2795b6 !important;
}

a:active { 
  color: #2795b6 !important;
}

a:visited { 
  color: #2ba6cb !important;
}

h1 a, 
h2 a, 
h3 a, 
h4 a, 
h5 a, 
h6 a {
  color: #2ba6cb;
}

h1 a:active, 
h2 a:active,  
h3 a:active, 
h4 a:active, 
h5 a:active, 
h6 a:active { 
  color: #2ba6cb !important; 
} 

h1 a:visited, 
h2 a:visited,  
h3 a:visited, 
h4 a:visited, 
h5 a:visited, 
h6 a:visited { 
  color: #2ba6cb !important; 
} 

/* Panels */

.panel {
  background: #f2f2f2;
  border: 1px solid #d9d9d9;
  padding: 10px !important;
}

.sub-grid table {
  width: 100%;
}

.sub-grid td.sub-columns {
  padding-bottom: 0;
}

/* Buttons */

table.button,
table.tiny-button,
table.small-button,
table.medium-button,
table.large-button {
  width: 100%;
  overflow: hidden;
}

table.button td,
table.tiny-button td,
table.small-button td,
table.medium-button td,
table.large-button td {
  display: block;
  width: auto !important;
  text-align: center;
  background: #2ba6cb;
  border: 1px solid #2284a1;
  color: #ffffff;
  padding: 8px 0;
}

table.tiny-button td {
  padding: 5px 0 4px;
}

table.small-button td {
  padding: 8px 0 7px;
}

table.medium-button td {
  padding: 12px 0 10px;
}

table.large-button td {
  padding: 21px 0 18px;
}

table.button td a,
table.tiny-button td a,
table.small-button td a,
table.medium-button td a,
table.large-button td a {
  font-weight: bold;
  text-decoration: none;
  font-family: Helvetica, Arial, sans-serif;
  color: #ffffff;
  font-size: 16px;
}

table.tiny-button td a {
  font-size: 12px;
  font-weight: normal;
}

table.small-button td a {
  font-size: 16px;
}

table.medium-button td a {
  font-size: 20px;
}

table.large-button td a {
  font-size: 24px;
}

table.button:hover td,
table.button:visited td,
table.button:active td {
  background: #2795b6 !important;
}

table.button:hover td a,
table.button:visited td a,
table.button:active td a {
  color: #fff !important;
}

table.button:hover td,
table.tiny-button:hover td,
table.small-button:hover td,
table.medium-button:hover td,
table.large-button:hover td {
  background: #2795b6 !important;
}

table.button:hover td a,
table.button:active td a,
table.button td a:visited,
table.tiny-button:hover td a,
table.tiny-button:active td a,
table.tiny-button td a:visited,
table.small-button:hover td a,
table.small-button:active td a,
table.small-button td a:visited,
table.medium-button:hover td a,
table.medium-button:active td a,
table.medium-button td a:visited,
table.large-button:hover td a,
table.large-button:active td a,
table.large-button td a:visited {
  color: #ffffff !important; 
}

table.secondary td {
  background: #e9e9e9;
  border-color: #d0d0d0;
  color: #555;
}

table.secondary td a {
  color: #555;
}

table.secondary:hover td {
  background: #d0d0d0 !important;
  color: #555;
}

table.secondary:hover td a,
table.secondary td a:visited,
table.secondary:active td a {
  color: #555 !important;
}

table.success td {
  background: #5da423;
  border-color: #457a1a;
}

table.success:hover td {
  background: #457a1a !important;
}

table.alert td {
  background: #c60f13;
  border-color: #970b0e;
}

table.alert:hover td {
  background: #970b0e !important;
}

table.radius td {
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
}

table.round td {
  -webkit-border-radius: 500px;
  -moz-border-radius: 500px;
  border-radius: 500px;
}

/* Outlook First */

body.outlook p {
  display: inline !important;
}

/*  Media Queries */

@media only screen and (max-width: 600px) {

  table[class="body"] img {
    width: auto !important;
    height: auto !important;
  }

  table[class="body"] center {
    min-width: 0 !important;
  }

  table[class="body"] .container {
    width: 95% !important;
  }

  table[class="body"] .row {
    width: 100% !important;
    display: block !important;
  }

  table[class="body"] .wrapper {
    display: block !important;
    padding-right: 0 !important;
  }

  table[class="body"] .columns,
  table[class="body"] .column {
    table-layout: fixed !important;
    float: none !important;
    width: 100% !important;
    padding-right: 0px !important;
    padding-left: 0px !important;
    display: block !important;
  }

  table[class="body"] .wrapper.first .columns,
  table[class="body"] .wrapper.first .column {
    display: table !important;
  }

  table[class="body"] table.columns td,
  table[class="body"] table.column td {
    width: 100% !important;
  }

  table[class="body"] .columns td.one,
  table[class="body"] .column td.one { width: 8.333333% !important; }
  table[class="body"] .columns td.two,
  table[class="body"] .column td.two { width: 16.666666% !important; }
  table[class="body"] .columns td.three,
  table[class="body"] .column td.three { width: 25% !important; }
  table[class="body"] .columns td.four,
  table[class="body"] .column td.four { width: 33.333333% !important; }
  table[class="body"] .columns td.five,
  table[class="body"] .column td.five { width: 41.666666% !important; }
  table[class="body"] .columns td.six,
  table[class="body"] .column td.six { width: 50% !important; }
  table[class="body"] .columns td.seven,
  table[class="body"] .column td.seven { width: 58.333333% !important; }
  table[class="body"] .columns td.eight,
  table[class="body"] .column td.eight { width: 66.666666% !important; }
  table[class="body"] .columns td.nine,
  table[class="body"] .column td.nine { width: 75% !important; }
  table[class="body"] .columns td.ten,
  table[class="body"] .column td.ten { width: 83.333333% !important; }
  table[class="body"] .columns td.eleven,
  table[class="body"] .column td.eleven { width: 91.666666% !important; }
  table[class="body"] .columns td.twelve,
  table[class="body"] .column td.twelve { width: 100% !important; }

  table[class="body"] td.offset-by-one,
  table[class="body"] td.offset-by-two,
  table[class="body"] td.offset-by-three,
  table[class="body"] td.offset-by-four,
  table[class="body"] td.offset-by-five,
  table[class="body"] td.offset-by-six,
  table[class="body"] td.offset-by-seven,
  table[class="body"] td.offset-by-eight,
  table[class="body"] td.offset-by-nine,
  table[class="body"] td.offset-by-ten,
  table[class="body"] td.offset-by-eleven {
    padding-left: 0 !important;
  }

  table[class="body"] table.columns td.expander {
    width: 1px !important;
  }

  table[class="body"] .right-text-pad,
  table[class="body"] .text-pad-right {
    padding-left: 10px !important;
  }

  table[class="body"] .left-text-pad,
  table[class="body"] .text-pad-left {
    padding-right: 10px !important;
  }

  table[class="body"] .hide-for-small,
  table[class="body"] .show-for-desktop {
    display: none !important;
  }

  table[class="body"] .show-for-small,
  table[class="body"] .hide-for-desktop {
    display: inherit !important;
  }
}

  </style>
</head>
<body>
	<table class="body">
		<tr>
			<td class="center" align="center" valign="top">
        <center>

          <table class="row header">
            <tr>
              <td class="center" align="center">
                <center>

                  <table class="container">
                    <tr>
                      <td class="wrapper last">

                        <table class="twelve columns">
                          <tr>
                            <td class="six sub-columns" style="background: black; height: 40px; text-align: center; color: #fff">
                              <div style="font-size: 30px; padding-top: 15px">Subliminal Prime</div>
                            </td>
                            <td class="six sub-columns last" style="text-align:right; vertical-align:middle;">
                            </td>
                            <td class="expander"></td>
                          </tr>
                        </table>

                      </td>
                    </tr>
                  </table>

                </center>
              </td>
            </tr>
          </table>

          <table class="container">
            <tr>
              <td>

                <table class="row">
                  <tr>
                    <td class="wrapper last">

                      <table class="twelve columns">
                        <tr>
                          <td>
                            <h1 style="padding-top: 20px">Dear user,</h1>
                						<p class="lead" style="padding-top: 15px">You are receiving this email because you have updated your preference.</p>
                						<p class="lead">This email was sent to you as a confirmation.</p>
                          </td>
                          <td class="expander"></td>
                        </tr>
                      </table>

                    </td>
                  </tr>
                </table>


                <table class="row">
                  <tr>
                    <td class="wrapper last">

                      <table class="twelve columns">
                        <tr>
                          <td style="padding-top: 20px">
                            <p class="lead">Thank you,<br>Subliminal Prime Team</p>
                          </td>
                          <td class="expander"></td>
                        </tr>
                      </table>

                    </td>
                  </tr>
                </table>

              <!-- container end below -->
              </td>
            </tr>
          </table>

        </center>
			</td>
		</tr>
	</table>
</body>
</html>';

    $page = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style type="text/css">
.font-sans-serif {
  font-family: sans-serif;
}
.font-avenir {
  font-family: Avenir, sans-serif;
}
.mso .wrapper .font-avenir {
  font-family: sans-serif !important;
}
.font-lato {
  font-family: Lato, Tahoma, sans-serif;
}
.mso .wrapper .font-lato {
  font-family: Tahoma, sans-serif !important;
}
.font-cabin {
  font-family: Cabin, Avenir, sans-serif;
}
.mso .wrapper .font-cabin {
  font-family: sans-serif !important;
}
.font-open-Sans {
  font-family: "Open Sans", sans-serif;
}
.mso .wrapper .font-open-Sans {
  font-family: sans-serif !important;
}
.font-roboto {
  font-family: Roboto, Tahoma, sans-serif;
}
.mso .wrapper .font-roboto {
  font-family: Tahoma, sans-serif !important;
}
.font-ubuntu {
  font-family: Ubuntu, sans-serif;
}
.mso .wrapper .font-ubuntu {
  font-family: sans-serif !important;
}
.font-pt-sans {
  font-family: "PT Sans", "Trebuchet MS", sans-serif;
}
.mso .wrapper .font-pt-sans {
  font-family: "Trebuchet MS", sans-serif !important;
}
.font-georgia {
  font-family: Georgia, serif;
}
.font-merriweather {
  font-family: Merriweather, Georgia, serif;
}
.mso .wrapper .font-merriweather {
  font-family: Georgia, serif !important;
}
.font-bitter {
  font-family: Bitter, Georgia, serif;
}
.mso .wrapper .font-bitter {
  font-family: Georgia, serif !important;
}
.font-pt-serif {
  font-family: "PT Serif", Georgia, serif;
}
.mso .wrapper .font-pt-serif {
  font-family: Georgia, serif !important;
}
.font-pompiere {
  font-family: Pompiere, "Trebuchet MS", sans-serif;
}
.mso .wrapper .font-pompiere {
  font-family: "Trebuchet MS", sans-serif !important;
}
.font-roboto-slab {
  font-family: "Roboto Slab", Georgia, serif;
}
.mso .wrapper .font-roboto-slab {
  font-family: Georgia, serif !important;
}
@media only screen and (max-width: 620px) {
  .wrapper .column .size-8 {
    font-size: 8px !important;
    line-height: 14px !important;
  }
  .wrapper .column .size-9 {
    font-size: 9px !important;
    line-height: 16px !important;
  }
  .wrapper .column .size-10 {
    font-size: 10px !important;
    line-height: 18px !important;
  }
  .wrapper .column .size-11 {
    font-size: 11px !important;
    line-height: 19px !important;
  }
  .wrapper .column .size-12 {
    font-size: 12px !important;
    line-height: 19px !important;
  }
  .wrapper .column .size-13 {
    font-size: 13px !important;
    line-height: 21px !important;
  }
  .wrapper .column .size-14 {
    font-size: 14px !important;
    line-height: 21px !important;
  }
  .wrapper .column .size-15 {
    font-size: 15px !important;
    line-height: 23px !important;
  }
  .wrapper .column .size-16 {
    font-size: 16px !important;
    line-height: 24px !important;
  }
  .wrapper .column .size-17 {
    font-size: 17px !important;
    line-height: 26px !important;
  }
  .wrapper .column .size-18 {
    font-size: 17px !important;
    line-height: 26px !important;
  }
  .wrapper .column .size-20 {
    font-size: 17px !important;
    line-height: 26px !important;
  }
  .wrapper .column .size-22 {
    font-size: 18px !important;
    line-height: 26px !important;
  }
  .wrapper .column .size-24 {
    font-size: 20px !important;
    line-height: 28px !important;
  }
  .wrapper .column .size-26 {
    font-size: 22px !important;
    line-height: 31px !important;
  }
  .wrapper .column .size-28 {
    font-size: 24px !important;
    line-height: 32px !important;
  }
  .wrapper .column .size-30 {
    font-size: 26px !important;
    line-height: 34px !important;
  }
  .wrapper .column .size-32 {
    font-size: 28px !important;
    line-height: 36px !important;
  }
  .wrapper .column .size-34 {
    font-size: 30px !important;
    line-height: 38px !important;
  }
  .wrapper .column .size-36 {
    font-size: 30px !important;
    line-height: 38px !important;
  }
  .wrapper .column .size-40 {
    font-size: 32px !important;
    line-height: 40px !important;
  }
  .wrapper .column .size-44 {
    font-size: 34px !important;
    line-height: 43px !important;
  }
  .wrapper .column .size-48 {
    font-size: 36px !important;
    line-height: 43px !important;
  }
  .wrapper .column .size-56 {
    font-size: 40px !important;
    line-height: 47px !important;
  }
  .wrapper .column .size-64 {
    font-size: 44px !important;
    line-height: 50px !important;
  }
}
body {
  margin: 0;
  padding: 0;
  min-width: 100%;
}
.mso body {
  mso-line-height-rule: exactly;
}
.no-padding .wrapper .column .column-top,
.no-padding .wrapper .column .column-bottom {
  font-size: 0px;
  line-height: 0px;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
}
td {
  padding: 0;
  vertical-align: top;
}
.spacer,
.border {
  font-size: 1px;
  line-height: 1px;
}
.spacer {
  width: 100%;
}
img {
  border: 0;
  -ms-interpolation-mode: bicubic;
}
.image {
  font-size: 12px;
  mso-line-height-rule: at-least;
}
.image img {
  display: block;
}
.logo {
  mso-line-height-rule: at-least;
}
.logo img {
  display: block;
}
strong {
  font-weight: bold;
}
h1,
h2,
h3,
p,
ol,
ul,
blockquote,
.image {
  font-style: normal;
  font-weight: 400;
}
ol,
ul,
li {
  padding-left: 0;
}
blockquote {
  Margin-left: 0;
  Margin-right: 0;
  padding-right: 0;
}
.column-top,
.column-bottom {
  font-size: 32px;
  line-height: 32px;
  transition-timing-function: cubic-bezier(0, 0, 0.2, 1);
  transition-duration: 150ms;
  transition-property: all;
}
.half-padding .column .column-top,
.half-padding .column .column-bottom {
  font-size: 16px;
  line-height: 16px;
}
.column {
  text-align: left;
}
.contents {
  table-layout: fixed;
  width: 100%;
}
.padded {
  padding-left: 32px;
  padding-right: 32px;
  word-break: break-word;
  word-wrap: break-word;
}
.wrapper {
  display: table;
  table-layout: fixed;
  width: 100%;
  min-width: 620px;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
}
.wrapper a {
  transition: opacity 0.2s ease-in;
}
table.wrapper {
  table-layout: fixed;
}
.one-col,
.two-col,
.three-col {
  Margin-left: auto;
  Margin-right: auto;
  width: 600px;
}
.centered {
  Margin-left: auto;
  Margin-right: auto;
}
.btn a {
  border-radius: 3px;
  display: inline-block;
  font-size: 14px;
  font-weight: 700;
  line-height: 24px;
  padding: 13px 35px 12px 35px;
  text-align: center;
  text-decoration: none !important;
}
.btn a:hover {
  opacity: 0.8;
}
.two-col .btn a {
  font-size: 12px;
  line-height: 22px;
  padding: 10px 28px;
}
.three-col .btn a,
.two-col .column-narrower .btn a {
  font-size: 11px;
  line-height: 19px;
  padding: 6px 18px 5px 18px;
}
@media only screen and (max-width: 620px) {
  .btn a {
    display: block !important;
    font-size: 14px !important;
    line-height: 24px !important;
    padding: 13px 10px 12px 10px !important;
  }
}
.two-col .column {
  width: 290px;
}
.two-col .gutter {
  width: 20px;
  font-size: 1px;
  line-height: 1px;
}
.three-col .column-top,
.three-col .column-bottom {
  font-size: 20px;
  line-height: 20px;
}
.half-padding .three-col .column-top,
.half-padding .three-col .column-bottom {
  font-size: 10px;
  line-height: 10px;
}
.three-col .column,
.two-col .column-narrower {
  width: 190px;
}
.three-col .gutter {
  width: 15px;
  font-size: 1px;
  line-height: 1px;
}
.three-col .padded {
  padding-left: 20px;
  padding-right: 20px;
}
.wider {
  width: 390px;
}
.narrower {
  width: 190px;
}
@media only screen and (min-width: 0) {
  .wrapper {
    text-rendering: optimizeLegibility;
  }
}
@media only screen and (max-width: 620px) {
  [class=wrapper] {
    min-width: 280px !important;
    width: 100% !important;
  }
  [class=wrapper] .one-col,
  [class=wrapper] .two-col,
  [class=wrapper] .three-col {
    width: 280px !important;
  }
  [class=wrapper] .column,
  [class=wrapper] .gutter {
    display: block;
    float: left;
    width: 280px !important;
  }
  [class=wrapper] .padded {
    padding-left: 20px !important;
    padding-right: 20px !important;
  }
  [class=wrapper] .block {
    display: block !important;
  }
  [class=wrapper] .hide {
    display: none !important;
  }
  [class=wrapper] .image img {
    height: auto !important;
    width: 100% !important;
  }
}
.footer {
  width: 100%;
}
.footer .inner {
  padding: 58px 0 29px 0;
  width: 600px;
}
.footer .left td,
.footer .right td {
  font-size: 12px;
  line-height: 22px;
}
.footer .left td {
  text-align: left;
  width: 400px;
}
.footer .right td {
  max-width: 200px;
  mso-line-height-rule: at-least;
}
.footer .links {
  line-height: 26px;
  Margin-bottom: 26px;
  mso-line-height-rule: at-least;
}
.footer .links a:hover {
  opacity: 0.8;
}
.footer .links img {
  vertical-align: middle;
}
.footer .address {
  Margin-bottom: 18px;
}
.footer .campaign {
  Margin-bottom: 18px;
}
.footer .campaign a {
  font-weight: bold;
  text-decoration: none;
}
.footer .sharing div {
  Margin-bottom: 5px;
}
.wrapper .footer .fblike,
.wrapper .footer .tweet,
.wrapper .footer .linkedinshare,
.wrapper .footer .forwardtoafriend {
  background-repeat: no-repeat;
  background-size: 200px 56px;
  border-radius: 2px;
  color: #ffffff;
  display: block;
  font-size: 11px;
  font-weight: bold;
  line-height: 11px;
  padding: 8px 11px 7px 28px;
  text-align: left;
  text-decoration: none;
}
.wrapper .footer .fblike:hover,
.wrapper .footer .tweet:hover,
.wrapper .footer .linkedinshare:hover,
.wrapper .footer .forwardtoafriend:hover {
  color: #ffffff !important;
  opacity: 0.8;
}
.footer .fblike {
  background-image: url(https://i9.createsend1.com/static/eb/master/09-onyx/imgf/fblike.png);
}
.footer .tweet {
  background-image: url(https://i10.createsend1.com/static/eb/master/09-onyx/imgf/tweet.png);
}
.footer .linkedinshare {
  background-image: url(https://i1.createsend1.com/static/eb/master/09-onyx/imgf/lishare.png);
}
.footer .forwardtoafriend {
  background-image: url(https://i2.createsend1.com/static/eb/master/09-onyx/imgf/forward.png);
}
@media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min--moz-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2/1), only screen and (min-device-pixel-ratio: 2), only screen and (min-resolution: 192dpi), only screen and (min-resolution: 2dppx) {
  .footer .fblike {
    background-image: url(https://i3.createsend1.com/static/eb/master/09-onyx/imgf/fblike@2x.png) !important;
  }
  .footer .tweet {
    background-image: url(https://i4.createsend1.com/static/eb/master/09-onyx/imgf/tweet@2x.png) !important;
  }
  .footer .linkedinshare {
    background-image: url(https://i6.createsend1.com/static/eb/master/09-onyx/imgf/lishare@2x.png) !important;
  }
  .footer .forwardtoafriend {
    background-image: url(https://i5.createsend1.com/static/eb/master/09-onyx/imgf/forward@2x.png) !important;
  }
}
@media only screen and (max-width: 620px) {
  .footer {
    width: 280px !important;
  }
  .footer td {
    display: none;
  }
  .footer .inner,
  .footer .inner td {
    display: block;
    text-align: center !important;
    max-width: 280px !important;
    width: 280px !important;
  }
  .footer .sharing {
    Margin-bottom: 40px;
  }
  .footer .sharing div {
    display: inline-block;
  }
  .footer .fblike,
  .footer .tweet,
  .footer .linkedinshare,
  .footer .forwardtoafriend {
    display: inline-block !important;
  }
}
.wrapper h1,
.wrapper h2,
.wrapper h3,
.wrapper p,
.wrapper ol,
.wrapper ul,
.wrapper li,
.wrapper blockquote,
.image,
.btn,
.divider {
  Margin-bottom: 0;
  Margin-top: 0;
}
.wrapper .column h1 + * {
  Margin-top: 16px;
}
.wrapper .column h2 + * {
  Margin-top: 14px;
}
.wrapper .column h3 + * {
  Margin-top: 12px;
}
.wrapper .column p + *,
.wrapper .column ol + *,
.wrapper .column ul + *,
.wrapper .column blockquote + *,
.image + .contents td > :first-child {
  Margin-top: 32px;
}
.wrapper .column li + * {
  Margin-top: 10px;
}
.contents:nth-last-child(n+3) h1:last-child,
.no-padding .contents:nth-last-child(n+2) h1:last-child {
  Margin-bottom: 16px;
}
.contents:nth-last-child(n+3) h2:last-child,
.no-padding .contents:nth-last-child(n+2) h2:last-child {
  Margin-bottom: 14px;
}
.contents:nth-last-child(n+3) h3:last-child,
.no-padding .contents:nth-last-child(n+2) h3:last-child {
  Margin-bottom: 12px;
}
.contents:nth-last-child(n+3) p:last-child,
.no-padding .contents:nth-last-child(n+2) p:last-child,
.contents:nth-last-child(n+3) ol:last-child,
.no-padding .contents:nth-last-child(n+2) ol:last-child,
.contents:nth-last-child(n+3) ul:last-child,
.no-padding .contents:nth-last-child(n+2) ul:last-child,
.contents:nth-last-child(n+3) blockquote:last-child,
.no-padding .contents:nth-last-child(n+2) blockquote:last-child,
.contents:nth-last-child(n+3) .image,
.no-padding .contents:nth-last-child(n+2) .image,
.contents:nth-last-child(n+3) .divider,
.no-padding .contents:nth-last-child(n+2) .divider,
.contents:nth-last-child(n+3) .btn,
.no-padding .contents:nth-last-child(n+2) .btn {
  Margin-bottom: 32px;
}
.two-col .column p + *,
.two-col .column ol + *,
.two-col .column ul + *,
.two-col .column blockquote + *,
.two-col .image + .contents td > :first-child {
  Margin-top: 32px;
}
.two-col .contents:nth-last-child(n+3) p:last-child,
.no-padding .two-col .contents:nth-last-child(n+2) p:last-child,
.two-col .contents:nth-last-child(n+3) ol:last-child,
.no-padding .two-col .contents:nth-last-child(n+2) ol:last-child,
.two-col .contents:nth-last-child(n+3) ul:last-child,
.no-padding .two-col .contents:nth-last-child(n+2) ul:last-child,
.two-col .contents:nth-last-child(n+3) blockquote:last-child,
.no-padding .two-col .contents:nth-last-child(n+2) blockquote:last-child,
.two-col .contents:nth-last-child(n+3) .image,
.no-padding .two-col .contents:nth-last-child(n+2) .image,
.two-col .contents:nth-last-child(n+3) .divider,
.no-padding .two-col .contents:nth-last-child(n+2) .divider,
.two-col .contents:nth-last-child(n+3) .btn,
.no-padding .two-col .contents:nth-last-child(n+2) .btn {
  Margin-bottom: 32px;
}
.three-col .column p + *,
.tw-col .column-narrower .column p + *,
.three-col .column ol + *,
.tw-col .column-narrower .column ol + *,
.three-col .column ul + *,
.tw-col .column-narrower .column ul + *,
.three-col .column blockquote + *,
.tw-col .column-narrower .column blockquote + *,
.three-col .image + .contents td > :first-child,
.tw-col .column-narrower .image + .contents td > :first-child,
.two-col .column-narrower p + *,
.two-col .column-narrower ol + *,
.two-col .column-narrower ul + *,
.two-col .column-narrower blockquote + * {
  Margin-top: 20px;
}
.three-col .contents:nth-last-child(n+3) p:last-child,
.two-col .column-narrower .contents:nth-last-child(n+3) p:last-child,
.no-padding .three-col .contents:nth-last-child(n+2) p:last-child,
.no-padding .two-col .column-narrower .contents:nth-last-child(n+2) p:last-child,
.three-col .contents:nth-last-child(n+3) ol:last-child,
.two-col .column-narrower .contents:nth-last-child(n+3) ol:last-child,
.no-padding .three-col .contents:nth-last-child(n+2) ol:last-child,
.no-padding .two-col .column-narrower .contents:nth-last-child(n+2) ol:last-child,
.three-col .contents:nth-last-child(n+3) ul:last-child,
.two-col .column-narrower .contents:nth-last-child(n+3) ul:last-child,
.no-padding .three-col .contents:nth-last-child(n+2) ul:last-child,
.no-padding .two-col .column-narrower .contents:nth-last-child(n+2) ul:last-child,
.three-col .contents:nth-last-child(n+3) blockquote:last-child,
.two-col .column-narrower .contents:nth-last-child(n+3) blockquote:last-child,
.no-padding .three-col .contents:nth-last-child(n+2) blockquote:last-child,
.no-padding .two-col .column-narrower .contents:nth-last-child(n+2) blockquote:last-child,
.three-col .contents:nth-last-child(n+3) .image,
.two-col .column-narrower .contents:nth-last-child(n+3) .image,
.no-padding .three-col .contents:nth-last-child(n+2) .image,
.no-padding .two-col .column-narrower .contents:nth-last-child(n+2) .image,
.three-col .contents:nth-last-child(n+3) .divider,
.two-col .column-narrower .contents:nth-last-child(n+3) .divider,
.no-padding .three-col .contents:nth-last-child(n+2) .divider,
.no-padding .two-col .column-narrower .contents:nth-last-child(n+2) .divider,
.three-col .contents:nth-last-child(n+3) .btn,
.two-col .column-narrower .contents:nth-last-child(n+3) .btn,
.no-padding .three-col .contents:nth-last-child(n+2) .btn,
.no-padding .two-col .column-narrower .contents:nth-last-child(n+2) .btn {
  Margin-bottom: 20px;
}
@media only screen and (max-width: 620px) {
  .wrapper p + *,
  .wrapper ol + *,
  .wrapper ul + *,
  .wrapper blockquote + *,
  .image + .contents td > :first-child {
    Margin-top: 32px !important;
  }
  .contents:nth-last-child(n+3) p:last-child,
  .no-padding .contents:nth-last-child(n+2) p:last-child,
  .contents:nth-last-child(n+3) ol:last-child,
  .no-padding .contents:nth-last-child(n+2) ol:last-child,
  .contents:nth-last-child(n+3) ul:last-child,
  .no-padding .contents:nth-last-child(n+2) ul:last-child,
  .contents:nth-last-child(n+3) blockquote:last-child,
  .no-padding .contents:nth-last-child(n+2) blockquote:last-child,
  .contents:nth-last-child(n+3) .image:last-child,
  .no-padding .contents:nth-last-child(n+2) .image:last-child,
  .contents:nth-last-child(n+3) .divider:last-child,
  .no-padding .contents:nth-last-child(n+2) .divider:last-child,
  .contents:nth-last-child(n+3) .btn:last-child,
  .no-padding .contents:nth-last-child(n+2) .btn:last-child {
    Margin-bottom: 32px !important;
  }
}
.column table,
.padded table {
  width: 100%;
}
.preheader {
  width: 100%;
}
.preheader .title,
.preheader .webversion {
  font-size: 11px;
  line-height: 16px;
}
.preheader .title {
  padding: 9px;
  text-align: left;
}
.preheader .webversion {
  padding: 9px;
  text-align: right;
  width: 250px;
}
.preheader .webversion a {
  font-weight: bold;
  text-decoration: none;
}
.header {
  width: 100%;
  Margin-left: auto;
  Margin-right: auto;
}
.logo {
  width: 600px;
}
.logo div a {
  text-decoration: none;
}
.logo div.logo-center {
  text-align: center;
}
.logo div.logo-center img {
  Margin-left: auto;
  Margin-right: auto;
}
ul li {
  list-style-type: disc;
  list-style-position: outside;
}
.mso ul li {
  list-style-image: none !important;
  list-style-type: disc !important;
}
.wrapper h1 {
  font-size: 30px;
  line-height: 40px;
}
.wrapper h2 {
  font-size: 20px;
  line-height: 28px;
}
.wrapper h3 {
  font-size: 16px;
  line-height: 24px;
}
.wrapper p,
.wrapper ol,
.wrapper ul {
  font-size: 14px;
  line-height: 22px;
}
.wrapper blockquote {
  Margin-left: 0;
}
.mso .wrapper li {
  padding-left: 5px !important;
  margin-left: 10px !important;
}
.mso .wrapper ol,
.mso .wrapper ul {
  margin-left: 20px !important;
}
.one-col,
.two-col,
.three-col,
.one-col-feature {
  table-layout: fixed;
}
.one-col,
.two-col,
.three-col {
  Margin-left: auto;
  Margin-right: auto;
}
.one-col .padded,
.two-col .padded,
.three-col .padded {
  text-align: left;
}
.one-col blockquote,
.two-col blockquote,
.three-col blockquote {
  background-repeat: no-repeat;
  background-position: 0px 4px;
}
.divider img {
  display: block;
}
.separator {
  font-size: 20px;
  line-height: 20px;
}
.one-col-bg,
.two-col-bg,
.three-col-bg,
.one-col-feature-bg {
  width: 100%;
}
.one-col .padded ul li {
  padding-left: 13px;
}
.one-col ol,
.one-col ul {
  Margin-left: 48px;
}
.one-col ol li,
.one-col ul li {
  padding-left: 13px;
}
.one-col blockquote p {
  font-size: 18px;
  line-height: 26px;
}
.one-col blockquote p,
.one-col blockquote h1,
.one-col blockquote h2,
.one-col blockquote h3,
.one-col blockquote ol,
.one-col blockquote ul {
  padding-left: 60px;
}
.mso .one-col blockquote p,
.mso .one-col blockquote h1,
.mso .one-col blockquote h2,
.mso .one-col blockquote h3,
.mso .one-col blockquote ol,
.mso .one-col blockquote ul {
  padding: 0 !important;
}
.one-col-feature {
  width: 600px;
  Margin-left: auto;
  Margin-right: auto;
}
.one-col-feature h1 a,
.one-col-feature h2 a,
.one-col-feature h3 a,
.one-col-feature p a,
.one-col-feature li a {
  text-decoration: none;
}
.one-col-feature ol {
  Margin-left: 36px;
}
.one-col-feature ol li {
  padding-left: 15px;
}
.one-col-feature ul {
  Margin-left: 30px;
}
.one-col-feature ul li {
  padding-left: 20px;
  line-height: 40px;
}
.one-col-feature ol,
.one-col-feature ul {
  font-size: 26px;
  line-height: 40px;
}
.one-col-feature h1,
.one-col-feature h2,
.one-col-feature h3,
.one-col-feature p,
.one-col-feature .btn {
  text-align: center;
}
.one-col-feature blockquote {
  background-repeat: no-repeat;
  background-position: 100% 100%;
}
.one-col-feature blockquote p:first-child,
.one-col-feature blockquote h1:first-child,
.one-col-feature blockquote h2:first-child,
.one-col-feature blockquote h3:first-child,
.one-col-feature blockquote ol:first-child,
.one-col-feature blockquote ul:first-child {
  padding-top: 27px;
}
.one-col-feature blockquote p,
.one-col-feature blockquote h1,
.one-col-feature blockquote h2,
.one-col-feature blockquote h3,
.one-col-feature blockquote ol,
.one-col-feature blockquote ul {
  background-repeat: no-repeat;
  background-position: 0% 0%;
  font-size: 26px;
  line-height: 40px;
  padding: 0;
}
.one-col-feature blockquote p:last-child,
.one-col-feature blockquote h1:last-child,
.one-col-feature blockquote h2:last-child,
.one-col-feature blockquote h3:last-child,
.one-col-feature blockquote ol:last-child,
.one-col-feature blockquote ul:last-child {
  padding-bottom: 30px;
}
.one-col-feature .divider img {
  display: block;
  Margin-left: auto;
  Margin-right: auto;
}
.two-col ol,
.two-col ul {
  Margin-left: 18px;
}
.two-col li {
  padding-left: 20px;
}
.two-col blockquote p,
.two-col blockquote h1,
.two-col blockquote h2,
.two-col blockquote h3,
.two-col blockquote ol,
.two-col blockquote ul {
  padding-left: 38px;
}
.two-col .column-wider {
  width: 390px;
}
.two-col .column-narrower {
  width: 190px;
}
.three-col .column .padded,
.two-col .column-narrower .padded {
  padding-left: 20px;
  padding-right: 20px;
}
.three-col .column ol,
.three-col .column ul,
.two-col .column-narrower ol,
.two-col .column-narrower ul {
  Margin-left: 18px;
}
.three-col .column ol li,
.three-col .column ul li,
.two-col .column-narrower ol li,
.two-col .column-narrower ul li {
  padding-left: 10px;
}
.three-col .column blockquote p,
.three-col .column blockquote h1,
.three-col .column blockquote h2,
.three-col .column blockquote h3,
.three-col .column blockquote ol,
.three-col .column blockquote ul,
.two-col .column-narrower blockquote p,
.two-col .column-narrower blockquote h1,
.two-col .column-narrower blockquote h2,
.two-col .column-narrower blockquote h3,
.two-col .column-narrower blockquote ol,
.two-col .column-narrower blockquote ul {
  padding-left: 28px;
}
.one-col .column .contents blockquote {
  background-image: url(https://i1.createsend1.com/static/eb/master/09-onyx/images/quote-double-large.png);
}
.two-col .column .contents blockquote {
  background-image: url(https://i7.createsend1.com/static/eb/master/09-onyx/images/quote-double.png);
}
.three-col .column .contents blockquote,
.two-col .column-narrower .contents blockquote {
  background-image: url(https://i9.createsend1.com/static/eb/master/09-onyx/images/quote-single.png);
}
.two-col .column-narrower .contents blockquote {
  background-image: url(https://i9.createsend1.com/static/eb/master/09-onyx/images/quote-single.png);
}
.two-col .column-wider .contents blockquote {
  background-image: url(https://i7.createsend1.com/static/eb/master/09-onyx/images/quote-double.png);
}
.contents ul li {
  list-style-image: url(https://i8.createsend1.com/static/eb/master/09-onyx/images/bullet.png);
}
.one-col-feature .contents ul li {
  list-style-image: url(https://i10.createsend1.com/static/eb/master/09-onyx/images/bullet-large.png);
}
.one-col-feature .contents blockquote {
  background-image: url(https://i2.createsend1.com/static/eb/master/09-onyx/images/quote-bottom-feature.png);
}
.one-col-feature .contents blockquote p:first-child,
.one-col-feature .contents blockquote h1:first-child,
.one-col-feature .contents blockquote h2:first-child,
.one-col-feature .contents blockquote h3:first-child,
.one-col-feature .contents blockquote ol:first-child,
.one-col-feature .contents blockquote ul:first-child {
  background-image: url(https://i3.createsend1.com/static/eb/master/09-onyx/images/quote-top-feature.png);
}
.wrapper blockquote * {
  font-style: italic;
}
@media (-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi) {
  .one-col ul {
    border-left: 30px solid transparent;
  }
}
@media (-webkit-min-device-pixel-ratio: 1.5) and (min-width: 620px), (min-resolution: 144dpi) and (min-width: 620px) {
  .one-col .column .contents ul li {
    padding-left: 38px !important;
  }
  .two-col .column .contents ul li {
    padding-left: 38px !important;
  }
  .three-col .column .contents ul li,
  .two-col .column-narrower .contents ul li {
    padding-left: 28px !important;
  }
  .two-col .column-narrower .contents ul li {
    padding-left: 28px !important;
  }
  .one-col .column .contents blockquote {
    background-size: 40px !important;
    background-image: url(https://i6.createsend1.com/static/eb/master/09-onyx/images/quote-double-large@2x.png);
  }
  .two-col .column .contents blockquote {
    background-size: 28px !important;
    background-image: url(https://i4.createsend1.com/static/eb/master/09-onyx/images/quote-double@2x.png);
  }
  .three-col .column .contents blockquote,
  .two-col .column-narrower .contents blockquote {
    background-size: 15px !important;
    background-image: url(https://i1.createsend1.com/static/eb/master/09-onyx/images/quote-single@2x.png);
  }
  .two-col .column-narrower .contents blockquote {
    background-size: 15px !important;
    background-image: url(https://i1.createsend1.com/static/eb/master/09-onyx/images/quote-single@2x.png);
  }
  .two-col .column-wider .contents blockquote {
    background-size: 28px !important;
    background-image: url(https://i4.createsend1.com/static/eb/master/09-onyx/images/quote-double@2x.png);
  }
}
@media (-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi), (max-width: 620px) {
  [class=wrapper] .one-col-feature blockquote {
    background-size: 30px !important;
    background-image: url(https://i2.createsend1.com/static/eb/master/09-onyx/images/quote-bottom-dark@2x.png) !important;
    background-position: 50% 100% !important;
  }
  [class=wrapper] .one-col-feature blockquote p:first-child,
  [class=wrapper] .one-col-feature blockquote h1:first-child,
  [class=wrapper] .one-col-feature blockquote h2:first-child,
  [class=wrapper] .one-col-feature blockquote h3:first-child,
  [class=wrapper] .one-col-feature blockquote ol:first-child,
  [class=wrapper] .one-col-feature blockquote ul:first-child {
    background-size: 30px !important;
    background-image: url(https://i5.createsend1.com/static/eb/master/09-onyx/images/quote-top-dark@2x.png) !important;
    background-position: 50% 0% !important;
  }
  [class=wrapper] .contents ul li {
    background: transparent url(https://i10.createsend1.com/static/eb/master/09-onyx/images/bullet@2x.png) no-repeat top left !important;
  }
  [class=wrapper] .contents ul {
    margin-left: 0px !important;
  }
  [class=wrapper] .contents ul li {
    list-style-type: none !important;
    list-style-image: none !important;
    background-size: 10px 10px !important;
    background-position: 0 5px !important;
  }
  [class=wrapper] .one-col-feature ul {
    margin-left: 0 !important;
  }
  [class=wrapper] .one-col-feature ul li {
    list-style: none !important;
    background: transparent url(https://i7.createsend1.com/static/eb/master/09-onyx/images/bullet-large@2x.png) no-repeat top left !important;
    background-size: 20px !important;
    background-position: 0 9px !important;
    padding-left: 50px;
  }
}
@media (-webkit-min-device-pixel-ratio: 1.5) and (max-width: 620px), (min-resolution: 144dpi) and (max-width: 620px) {
  [class=wrapper] .one-col ul {
    margin-left: 0 !important;
    border: 0 !important;
  }
  [class=wrapper] .one-col .divider,
  [class=wrapper] .two-col .column .divider,
  [class=wrapper] .two-col .column-narrower .divider,
  [class=wrapper] .two-col .column-wider .divider,
  [class=wrapper] .three-col .divider {
    background-image: url(https://i8.createsend1.com/static/eb/master/09-onyx/images/divider-waves@2x.png) !important;
  }
}
@media only screen and (max-width: 620px) {
  [class=wrapper] .one-col .contents blockquote p,
  [class=wrapper] .two-col .contents blockquote p,
  [class=wrapper] .three-col .contents blockquote p,
  [class=wrapper] .one-col .contents blockquote h1,
  [class=wrapper] .two-col .contents blockquote h1,
  [class=wrapper] .three-col .contents blockquote h1,
  [class=wrapper] .one-col .contents blockquote h2,
  [class=wrapper] .two-col .contents blockquote h2,
  [class=wrapper] .three-col .contents blockquote h2,
  [class=wrapper] .one-col .contents blockquote h3,
  [class=wrapper] .two-col .contents blockquote h3,
  [class=wrapper] .three-col .contents blockquote h3,
  [class=wrapper] .one-col .contents blockquote ol,
  [class=wrapper] .two-col .contents blockquote ol,
  [class=wrapper] .three-col .contents blockquote ol,
  [class=wrapper] .one-col .contents blockquote ul,
  [class=wrapper] .two-col .contents blockquote ul,
  [class=wrapper] .three-col .contents blockquote ul {
    padding-left: 38px !important;
  }
  [class=wrapper] .contents blockquote {
    background-image: url(https://i4.createsend1.com/static/eb/master/09-onyx/images/quote-double@2x.png) !important;
    background-size: 27px !important;
  }
  [class=wrapper] .contents ul li {
    padding-left: 38px !important;
  }
  [class=wrapper] .contents ol li {
    padding-left: 18px !important;
  }
  [class=wrapper] .spacer {
    display: none !important;
  }
  [class=wrapper] .header .logo {
    width: 280px !important;
  }
  [class=wrapper] .header .logo div {
    margin-bottom: 0 !important;
  }
  [class=wrapper] .header .logo div img {
    display: inline-block !important;
    max-width: 280px !important;
    height: auto !important;
  }
  [class=wrapper] .preheader .webversion,
  [class=wrapper] .header .logo a {
    text-align: center !important;
  }
  [class=wrapper] .column-wider,
  [class=wrapper] .column-narrower {
    display: block;
    float: left;
    width: 280px !important;
  }
  [class=wrapper] .one-col-feature {
    width: 280px !important;
  }
  [class=wrapper] .one-col-feature li {
    font-size: 18px !important;
    line-height: 28px !important;
  }
  [class=wrapper] .one-col-feature ol {
    margin-left: 22px !important;
  }
  [class=wrapper] .one-col-feature ol li {
    padding-left: 18px !important;
  }
  [class=wrapper] .one-col-feature ul li {
    background-size: 10px !important;
    padding-left: 40px !important;
  }
  [class=wrapper] .gutter {
    font-size: 10px;
    line-height: 10px;
    height: 10px !important;
  }
  [class=wrapper] table.one-col,
  [class=wrapper] table.one-col-feature,
  [class=wrapper] td.last {
    margin-bottom: 10px !important;
  }
  [class=wrapper] ol,
  [class=wrapper] ul {
    margin-left: 20px !important;
  }
  [class=wrapper] .preheader *[class*="column"] {
    display: block !important;
    text-align: center !important;
  }
  [class=wrapper] .preheader .title {
    display: none !important;
  }
  [class=wrapper] .one-col .divider,
  [class=wrapper] .two-col .column .divider,
  [class=wrapper] .two-col .column-narrower .divider,
  [class=wrapper] .two-col .column-wider .divider,
  [class=wrapper] .three-col .divider {
    background: transparent url(https://i9.createsend1.com/static/eb/master/09-onyx/images/divider-waves.png) repeat center center;
    background-size: auto 6px !important;
  }
  [class=wrapper] .one-col .divider img,
  [class=wrapper] .two-col .column .divider img,
  [class=wrapper] .two-col .column-narrower .divider img,
  [class=wrapper] .two-col .column-wider .divider img,
  [class=wrapper] .three-col .divider img {
    visibility: hidden;
    width: 240px !important;
  }
}
</style>
    <style type="text/css">
    </style>
  <!--[if !mso]><!--><style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Ubuntu:400,700,400italic,700italic);
</style><link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700,400italic,700italic" rel="stylesheet" type="text/css" /><!--<![endif]--><style type="text/css">
.wrapper h1{}.wrapper h1{font-family:Ubuntu,sans-serif}.mso .wrapper h1{font-family:sans-serif !important}.wrapper h2{}.wrapper h2{font-family:Ubuntu,sans-serif}.mso .wrapper h2{font-family:sans-serif !important}.wrapper h3{}.wrapper h3{font-family:Ubuntu,sans-serif}.mso .wrapper h3{font-family:sans-serif !important}.wrapper p,.wrapper ol,.wrapper ul,.wrapper .image{}.wrapper p,.wrapper ol,.wrapper ul,.wrapper .image{font-family:Ubuntu,sans-serif}.mso .wrapper p,.mso .wrapper ol,.mso .wrapper ul,.mso .wrapper .image{font-family:sans-serif !important}.wrapper .btn a{}.wrapper .btn a{font-family:Ubuntu,sans-serif}.mso .wrapper .btn a{font-family:sans-serif !important}.logo div{}.logo div{font-family:Avenir,sans-serif}.mso .logo div{font-family:sans-serif 
!important}.title,.webversion,.fblike,.tweet,.linkedinshare,.forwardtoafriend,.link,.address,.permission,.campaign{}.title,.webversion,.fblike,.tweet,.linkedinshare,.forwardtoafriend,.link,.address,.permission,.campaign{font-family:Ubuntu,sans-serif}.mso .title,.mso .webversion,.mso .fblike,.mso .tweet,.mso .linkedinshare,.mso .forwardtoafriend,.mso .link,.mso .address,.mso .permission,.mso .campaign{font-family:sans-serif !important}body,.wrapper,.emb-editor-canvas{background-color:#171e24}.mso body{background-color:#fff !important}.mso .header,.mso .footer,.mso .one-col-bg,.mso .two-col-bg,.mso .three-col-bg,.mso .one-col-feature-bg{background-color:#171e24}.hr hr{color:#fff;background-color:#fff}.border{background-color:#11161b}.wrapper h1{color:#80bfc4}.wrapper h2{color:#80bfc4}.wrapper h3{color:#80bfc4}.wrapper p,.wrapper ol,.wrapper ul{color:#e0dce0}.wrapper 
.image{color:#e0dce0}.wrapper a{color:#c5dee0}.wrapper a:hover{color:#a4cbce !important}.wrapper .btn a{background-color:#80bfc4;color:#171e24}.wrapper .btn a:hover{color:#171e24 !important}.preheader{background-color:#11161b}.title,.webversion,.footer .inner td{color:#fff}.wrapper .title a,.wrapper .webversion a,.wrapper .footer a{font-weight:bold;color:#fff}.wrapper .title a:hover,.wrapper .webversion a:hover,.wrapper .footer a:hover{color:#fff !important}.logo div{color:#41637e}.logo div a{color:#41637e}.logo div a:hover{color:#41637e !important}.column-bg{background-color:#212a32}.extra-wide .big-feature{background-color:#212a32}.emb-editor-canvas{background-color:#11161b}.emb-editor-canvas .wrapper{background-color:#171e24}.fblike,.tweet,.linkedinshare,.forwardtoafriend{background-color:#0c0f12}
</style><meta name="robots" content="noindex,nofollow" />
<meta property="og:title" content="My First Campaign" />
</head>
<!--[if mso]>
  <body class="mso">
<![endif]-->
<!--[if !mso]><!-->
  <body class="full-padding" style="margin: 0;padding: 0;min-width: 100%;background-color: #171e24;">
<!--<![endif]-->
    <center class="wrapper" style="display: table;table-layout: fixed;width: 100%;min-width: 620px;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;background-color: #171e24;">
      <table class="preheader" style="border-collapse: collapse;border-spacing: 0;width: 100%;background-color: #11161b;">
        <tbody><tr>
          
          
        </tr>
      </tbody></table>
      <div class="spacer" style="font-size: 1px;line-height: 20px;width: 100%;">&nbsp;</div>
      <table class="header centered" style="border-collapse: collapse;border-spacing: 0;Margin-left: auto;Margin-right: auto;width: 100%;">
        <tbody><tr>
          <td style="padding: 0;vertical-align: top;">&nbsp;</td>
          <td class="logo emb-logo-padding-box" style="padding: 0;vertical-align: top;mso-line-height-rule: at-least;width: 600px;padding-top: 20px;padding-bottom: 26px;"><div class="logo-center" style="font-family: Avenir,sans-serif;color: #41637e;text-align: center;font-size: 0px !important;line-height: 0 !important;" align="center" id="emb-email-header"><a style="transition: opacity 0.2s ease-in;color: #41637e;text-decoration: none;" href="http://subliminalprime.com/"><img style="border: 0;-ms-interpolation-mode: bicubic;display: block;Margin-left: auto;Margin-right: auto;max-width: 166px;" src="img/prime.png" alt="" width="166" height="120" /></a></div></td>
          <td style="padding: 0;vertical-align: top;">&nbsp;</td>
        </tr>
      </tbody></table>
      
          <table class="one-col-bg" style="border-collapse: collapse;border-spacing: 0;width: 100%;">
            <tbody><tr>
              <td style="padding: 0;vertical-align: top;" align="center">
                <table class="one-col centered column-bg" style="border-collapse: collapse;border-spacing: 0;Margin-left: auto;Margin-right: auto;background-color: #212a32;width: 600px;table-layout: fixed;">
                  <tbody><tr>
                    <td class="column" style="padding: 0;vertical-align: top;text-align: left;">
                      
            <div class="image" style="font-size: 12px;mso-line-height-rule: at-least;font-style: normal;font-weight: 400;Margin-bottom: 0;Margin-top: 0;font-family: Ubuntu,sans-serif;color: #e0dce0;" align="center">
              <img class="gnd-corner-image gnd-corner-image-center gnd-corner-image-top" style="border: 0;-ms-interpolation-mode: bicubic;display: block;max-width: 640px;" src="img/sunrise-small.jpg" alt="" width="600" height="399" />
            </div>
          
                        <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%;">
                          <tbody><tr>
                            <td class="padded" style="padding: 0;vertical-align: top;padding-left: 32px;padding-right: 32px;word-break: break-word;word-wrap: break-word;text-align: left;">
                              
            <div style="Margin-top: 32px;line-height: 14px;font-size: 1px;">&nbsp;</div>
          
                            </td>
                          </tr>
                        </tbody></table>
                      
                        <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%;">
                          <tbody><tr>
                            <td class="padded" style="padding: 0;vertical-align: top;padding-left: 32px;padding-right: 32px;word-break: break-word;word-wrap: break-word;text-align: left;">
                              
            
<h1 class="size-30" style="font-style: normal;font-weight: 400;Margin-bottom: 0;Margin-top: 0;font-size: 30px;line-height: 38px;font-family: Ubuntu,sans-serif;color: #80bfc4;text-align: left;"><span style="color:#ffffff">Dear user,</span></h1><p class="size-18" style="font-style: normal;font-weight: 400;Margin-bottom: 0;Margin-top: 16px;font-size: 18px;line-height: 26px;font-family: Ubuntu,sans-serif;color: #e0dce0;text-align: left;"><span style="text-align:center"><strong style="font-weight: bold;">Your preferences have been updated.</strong>&nbsp;</span></p><h3 class="size-18" style="font-style: normal;font-weight: 400;Margin-bottom: 0;Margin-top: 32px;font-size: 18px;line-height: 26px;font-family: Ubuntu,sans-serif;color: #80bfc4;text-align: left;"><span style="color:#ffffff"><span style="text-align:center">Thank you,</span></span></h3><p class="size-18" style="font-style: 
normal;font-weight: 400;Margin-bottom: 0;Margin-top: 12px;font-size: 18px;line-height: 26px;font-family: Ubuntu,sans-serif;color: #e0dce0;text-align: left;"><span style="text-align:center">Subliminal Prime</span></p><p class="size-18" style="font-style: normal;font-weight: 400;Margin-bottom: 0;Margin-top: 32px;font-size: 18px;line-height: 26px;font-family: Ubuntu,sans-serif;color: #e0dce0;text-align: left;">&nbsp;</p>
          
                            </td>
                          </tr>
                        </tbody></table>
                      
                      <div class="column-bottom" style="font-size: 32px;line-height: 32px;transition-timing-function: cubic-bezier(0, 0, 0.2, 1);transition-duration: 150ms;transition-property: all;">&nbsp;</div>
                    </td>
                  </tr>
                </tbody></table>
              </td>
            </tr>
          </tbody></table>
        
          <div class="separator" style="font-size: 20px;line-height: 20px;">&nbsp;</div>
        
      <table class="footer centered" style="border-collapse: collapse;border-spacing: 0;Margin-left: auto;Margin-right: auto;width: 100%;">
        <tbody><tr>
          <td style="padding: 0;vertical-align: top;">&nbsp;</td>
          <td class="inner" style="padding: 58px 0 29px 0;vertical-align: top;width: 600px;">
            <table class="right" style="border-collapse: collapse;border-spacing: 0;" align="right">
              <tbody><tr>
                <td style="padding: 0;vertical-align: top;color: #fff;font-size: 12px;line-height: 22px;max-width: 200px;mso-line-height-rule: at-least;">
                  <div class="sharing">
                    
                    
                    
                    
                  </div>
                </td>
              </tr>
            </tbody></table>
            <table class="left" style="border-collapse: collapse;border-spacing: 0;" align="left">
              <tbody><tr>
                <td style="padding: 0;vertical-align: top;color: #fff;font-size: 12px;line-height: 22px;text-align: left;width: 400px;">
                  <div class="links emb-web-links" style="line-height: 26px;Margin-bottom: 26px;mso-line-height-rule: at-least;">
                    
<a style="transition: opacity 0.2s ease-in;color: #fff;font-weight: bold;" href="https://facebook.com/subliminalprime"><img style="border: 0;-ms-interpolation-mode: bicubic;vertical-align: middle;" src="https://i7.createsend1.com/static/eb/master/09-onyx/imgf/facebook-sf.png" width="29" height="26" /></a><a style="transition: opacity 0.2s ease-in;color: #fff;font-weight: bold;" href="https://twitter.com/primesubliminal"><img style="border: 0;-ms-interpolation-mode: bicubic;vertical-align: middle;" src="https://i9.createsend1.com/static/eb/master/09-onyx/imgf/twitter-sf.png" width="29" height="26" /></a><a style="transition: opacity 0.2s ease-in;color: #fff;font-weight: bold;" href="https://subliminalprime.com"><img style="border: 0;-ms-interpolation-mode: bicubic;vertical-align: middle;" src="https://i4.createsend1.com/static/eb/master/09-onyx/imgf/website-sf.png" width="29" height="26" /></a>
                  </div>
                  <div class="address" style="font-family: Ubuntu,sans-serif;Margin-bottom: 18px;">
                    
                  </div>
                  <div class="permission" style="font-family: Ubuntu,sans-serif;">
                    
                  </div>
                  <div class="campaign" style="font-family: Ubuntu,sans-serif;Margin-bottom: 18px;">
                    
                    <unsubscribe>
                        <a href="http://subliminalprime.com/unsubscribe.php?email='.$email.'">Unsubscribe</a>
                    </unsubscribe>
                  </div>
                </td>
              </tr>
            </tbody></table>
          </td>
          <td style="padding: 0;vertical-align: top;">&nbsp;</td>
        </tr>
      </tbody></table>
    </center>
  
</body></html>
';

    return $page;
}



function generate_email($questions, $category, $email){
    
    $emails ='<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
  <style>
/******************************************************************************************************************************************************
Copyright (c) 2015 ZURB, inc.

MIT License

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
******************************************************************************************************************************************************/

/* Client-specific Styles & Reset */

#outlook a { 
  padding:0; 
} 

body{ 
  width:100% !important; 
  min-width: 100%;
  -webkit-text-size-adjust:100%; 
  -ms-text-size-adjust:100%; 
  margin:0; 
  padding:0;
}

.ExternalClass { 
  width:100%;
} 

.ExternalClass, 
.ExternalClass p, 
.ExternalClass span, 
.ExternalClass font, 
.ExternalClass td, 
.ExternalClass div { 
  line-height: 100%; 
} 

#backgroundTable { 
  margin:0; 
  padding:0; 
  width:100% !important; 
  line-height: 100% !important; 
}

img { 
  outline:none; 
  text-decoration:none; 
  -ms-interpolation-mode: bicubic;
  width: auto;
  max-width: 100%; 
  float: left; 
  clear: both; 
  display: block;
}

center {
  width: 100%;
  min-width: 580px;
}

a img { 
  border: none;
}

p {
  margin: 0 0 0 10px;
}

table {
  border-spacing: 0;
  border-collapse: collapse;
}

td { 
  word-break: break-word;
  -webkit-hyphens: auto;
  -moz-hyphens: auto;
  hyphens: auto;
  border-collapse: collapse !important; 
}

table, tr, td {
  padding: 0;
  vertical-align: top;
  text-align: left;
}

hr {
  color: #d9d9d9; 
  background-color: #d9d9d9; 
  height: 1px; 
  border: none;
}

/* Responsive Grid */

table.body {
  height: 100%;
  width: 100%;
}

table.container {
  width: 580px;
  margin: 0 auto;
  text-align: inherit;
}

table.row { 
  padding: 0px; 
  width: 100%;
  position: relative;
}

table.container table.row {
  display: block;
}

td.wrapper {
  padding: 10px 20px 0px 0px;
  position: relative;
}

table.columns,
table.column {
  margin: 0 auto;
}

table.columns td,
table.column td {
  padding: 0px 0px 10px; 
}

table.columns td.sub-columns,
table.column td.sub-columns,
table.columns td.sub-column,
table.column td.sub-column {
  padding-right: 10px;
}

td.sub-column, td.sub-columns {
  min-width: 0px;
}

table.row td.last,
table.container td.last {
  padding-right: 0px;
}

table.one { width: 30px; }
table.two { width: 80px; }
table.three { width: 130px; }
table.four { width: 180px; }
table.five { width: 230px; }
table.six { width: 280px; }
table.seven { width: 330px; }
table.eight { width: 380px; }
table.nine { width: 430px; }
table.ten { width: 480px; }
table.eleven { width: 530px; }
table.twelve { width: 580px; }

table.one center { min-width: 30px; }
table.two center { min-width: 80px; }
table.three center { min-width: 130px; }
table.four center { min-width: 180px; }
table.five center { min-width: 230px; }
table.six center { min-width: 280px; }
table.seven center { min-width: 330px; }
table.eight center { min-width: 380px; }
table.nine center { min-width: 430px; }
table.ten center { min-width: 480px; }
table.eleven center { min-width: 530px; }
table.twelve center { min-width: 580px; }

table.one .panel center { min-width: 10px; }
table.two .panel center { min-width: 60px; }
table.three .panel center { min-width: 110px; }
table.four .panel center { min-width: 160px; }
table.five .panel center { min-width: 210px; }
table.six .panel center { min-width: 260px; }
table.seven .panel center { min-width: 310px; }
table.eight .panel center { min-width: 360px; }
table.nine .panel center { min-width: 410px; }
table.ten .panel center { min-width: 460px; }
table.eleven .panel center { min-width: 510px; }
table.twelve .panel center { min-width: 560px; }

.body .columns td.one,
.body .column td.one { width: 8.333333%; }
.body .columns td.two,
.body .column td.two { width: 16.666666%; }
.body .columns td.three,
.body .column td.three { width: 25%; }
.body .columns td.four,
.body .column td.four { width: 33.333333%; }
.body .columns td.five,
.body .column td.five { width: 41.666666%; }
.body .columns td.six,
.body .column td.six { width: 50%; }
.body .columns td.seven,
.body .column td.seven { width: 58.333333%; }
.body .columns td.eight,
.body .column td.eight { width: 66.666666%; }
.body .columns td.nine,
.body .column td.nine { width: 75%; }
.body .columns td.ten,
.body .column td.ten { width: 83.333333%; }
.body .columns td.eleven,
.body .column td.eleven { width: 91.666666%; }
.body .columns td.twelve,
.body .column td.twelve { width: 100%; }

td.offset-by-one { padding-left: 50px; }
td.offset-by-two { padding-left: 100px; }
td.offset-by-three { padding-left: 150px; }
td.offset-by-four { padding-left: 200px; }
td.offset-by-five { padding-left: 250px; }
td.offset-by-six { padding-left: 300px; }
td.offset-by-seven { padding-left: 350px; }
td.offset-by-eight { padding-left: 400px; }
td.offset-by-nine { padding-left: 450px; }
td.offset-by-ten { padding-left: 500px; }
td.offset-by-eleven { padding-left: 550px; }

td.expander {
  visibility: hidden;
  width: 0px;
  padding: 0 !important;
}

table.columns .text-pad,
table.column .text-pad {
  padding-left: 10px;
  padding-right: 10px;
}

table.columns .left-text-pad,
table.columns .text-pad-left,
table.column .left-text-pad,
table.column .text-pad-left {
  padding-left: 10px;
}

table.columns .right-text-pad,
table.columns .text-pad-right,
table.column .right-text-pad,
table.column .text-pad-right {
  padding-right: 10px;
}

/* Block Grid */

.block-grid {
  width: 100%;
  max-width: 580px;
}

.block-grid td {
  display: inline-block;
  padding:10px;
}

.two-up td {
  width:270px;
}

.three-up td {
  width:173px;
}

.four-up td {
  width:125px;
}

.five-up td {
  width:96px;
}

.six-up td {
  width:76px;
}

.seven-up td {
  width:62px;
}

.eight-up td {
  width:52px;
}

/* Alignment & Visibility Classes */

table.center, td.center {
  text-align: center;
}

h1.center,
h2.center,
h3.center,
h4.center,
h5.center,
h6.center {
  text-align: center;
}

span.center {
  display: block;
  width: 100%;
  text-align: center;
}

img.center {
  margin: 0 auto;
  float: none;
}

.show-for-small,
.hide-for-desktop {
  display: none;
}

/* Typography */

body, table.body, h1, h2, h3, h4, h5, h6, p, td { 
  color: #222222;
  font-family: "Helvetica", "Arial", sans-serif; 
  font-weight: normal; 
  padding:0; 
  margin: 0;
  text-align: left; 
  line-height: 1.3;
}

h1, h2, h3, h4, h5, h6 {
  word-break: normal;
}

h1 {font-size: 40px;}
h2 {font-size: 36px;}
h3 {font-size: 32px;}
h4 {font-size: 28px;}
h5 {font-size: 24px;}
h6 {font-size: 20px;}
body, table.body, p, td {font-size: 14px;line-height:19px;}

p.lead, p.lede, p.leed {
  font-size: 18px;
  line-height:21px;
}

p { 
  margin-bottom: 10px;
}

small {
  font-size: 10px;
}

a {
  color: #2ba6cb; 
  text-decoration: none;
}

a:hover { 
  color: #2795b6 !important;
}

a:active { 
  color: #2795b6 !important;
}

a:visited { 
  color: #2ba6cb !important;
}

h1 a, 
h2 a, 
h3 a, 
h4 a, 
h5 a, 
h6 a {
  color: #2ba6cb;
}

h1 a:active, 
h2 a:active,  
h3 a:active, 
h4 a:active, 
h5 a:active, 
h6 a:active { 
  color: #2ba6cb !important; 
} 

h1 a:visited, 
h2 a:visited,  
h3 a:visited, 
h4 a:visited, 
h5 a:visited, 
h6 a:visited { 
  color: #2ba6cb !important; 
} 

/* Panels */

.panel {
  background: #f2f2f2;
  border: 1px solid #d9d9d9;
  padding: 10px !important;
}

.sub-grid table {
  width: 100%;
}

.sub-grid td.sub-columns {
  padding-bottom: 0;
}

/* Buttons */

table.button,
table.tiny-button,
table.small-button,
table.medium-button,
table.large-button {
  width: 100%;
  overflow: hidden;
}

table.button td,
table.tiny-button td,
table.small-button td,
table.medium-button td,
table.large-button td {
  display: block;
  width: auto !important;
  text-align: center;
  background: #2ba6cb;
  border: 1px solid #2284a1;
  color: #ffffff;
  padding: 8px 0;
}

table.tiny-button td {
  padding: 5px 0 4px;
}

table.small-button td {
  padding: 8px 0 7px;
}

table.medium-button td {
  padding: 12px 0 10px;
}

table.large-button td {
  padding: 21px 0 18px;
}

table.button td a,
table.tiny-button td a,
table.small-button td a,
table.medium-button td a,
table.large-button td a {
  font-weight: bold;
  text-decoration: none;
  font-family: Helvetica, Arial, sans-serif;
  color: #ffffff;
  font-size: 16px;
}

table.tiny-button td a {
  font-size: 12px;
  font-weight: normal;
}

table.small-button td a {
  font-size: 16px;
}

table.medium-button td a {
  font-size: 20px;
}

table.large-button td a {
  font-size: 24px;
}

table.button:hover td,
table.button:visited td,
table.button:active td {
  background: #2795b6 !important;
}

table.button:hover td a,
table.button:visited td a,
table.button:active td a {
  color: #fff !important;
}

table.button:hover td,
table.tiny-button:hover td,
table.small-button:hover td,
table.medium-button:hover td,
table.large-button:hover td {
  background: #2795b6 !important;
}

table.button:hover td a,
table.button:active td a,
table.button td a:visited,
table.tiny-button:hover td a,
table.tiny-button:active td a,
table.tiny-button td a:visited,
table.small-button:hover td a,
table.small-button:active td a,
table.small-button td a:visited,
table.medium-button:hover td a,
table.medium-button:active td a,
table.medium-button td a:visited,
table.large-button:hover td a,
table.large-button:active td a,
table.large-button td a:visited {
  color: #ffffff !important; 
}

table.secondary td {
  background: #e9e9e9;
  border-color: #d0d0d0;
  color: #555;
}

table.secondary td a {
  color: #555;
}

table.secondary:hover td {
  background: #d0d0d0 !important;
  color: #555;
}

table.secondary:hover td a,
table.secondary td a:visited,
table.secondary:active td a {
  color: #555 !important;
}

table.success td {
  background: #5da423;
  border-color: #457a1a;
}

table.success:hover td {
  background: #457a1a !important;
}

table.alert td {
  background: #c60f13;
  border-color: #970b0e;
}

table.alert:hover td {
  background: #970b0e !important;
}

table.radius td {
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
}

table.round td {
  -webkit-border-radius: 500px;
  -moz-border-radius: 500px;
  border-radius: 500px;
}

/* Outlook First */

body.outlook p {
  display: inline !important;
}

/*  Media Queries */

@media only screen and (max-width: 600px) {

  table[class="body"] img {
    width: auto !important;
    height: auto !important;
  }

  table[class="body"] center {
    min-width: 0 !important;
  }

  table[class="body"] .container {
    width: 95% !important;
  }

  table[class="body"] .row {
    width: 100% !important;
    display: block !important;
  }

  table[class="body"] .wrapper {
    display: block !important;
    padding-right: 0 !important;
  }

  table[class="body"] .columns,
  table[class="body"] .column {
    table-layout: fixed !important;
    float: none !important;
    width: 100% !important;
    padding-right: 0px !important;
    padding-left: 0px !important;
    display: block !important;
  }

  table[class="body"] .wrapper.first .columns,
  table[class="body"] .wrapper.first .column {
    display: table !important;
  }

  table[class="body"] table.columns td,
  table[class="body"] table.column td {
    width: 100% !important;
  }

  table[class="body"] .columns td.one,
  table[class="body"] .column td.one { width: 8.333333% !important; }
  table[class="body"] .columns td.two,
  table[class="body"] .column td.two { width: 16.666666% !important; }
  table[class="body"] .columns td.three,
  table[class="body"] .column td.three { width: 25% !important; }
  table[class="body"] .columns td.four,
  table[class="body"] .column td.four { width: 33.333333% !important; }
  table[class="body"] .columns td.five,
  table[class="body"] .column td.five { width: 41.666666% !important; }
  table[class="body"] .columns td.six,
  table[class="body"] .column td.six { width: 50% !important; }
  table[class="body"] .columns td.seven,
  table[class="body"] .column td.seven { width: 58.333333% !important; }
  table[class="body"] .columns td.eight,
  table[class="body"] .column td.eight { width: 66.666666% !important; }
  table[class="body"] .columns td.nine,
  table[class="body"] .column td.nine { width: 75% !important; }
  table[class="body"] .columns td.ten,
  table[class="body"] .column td.ten { width: 83.333333% !important; }
  table[class="body"] .columns td.eleven,
  table[class="body"] .column td.eleven { width: 91.666666% !important; }
  table[class="body"] .columns td.twelve,
  table[class="body"] .column td.twelve { width: 100% !important; }

  table[class="body"] td.offset-by-one,
  table[class="body"] td.offset-by-two,
  table[class="body"] td.offset-by-three,
  table[class="body"] td.offset-by-four,
  table[class="body"] td.offset-by-five,
  table[class="body"] td.offset-by-six,
  table[class="body"] td.offset-by-seven,
  table[class="body"] td.offset-by-eight,
  table[class="body"] td.offset-by-nine,
  table[class="body"] td.offset-by-ten,
  table[class="body"] td.offset-by-eleven {
    padding-left: 0 !important;
  }

  table[class="body"] table.columns td.expander {
    width: 1px !important;
  }

  table[class="body"] .right-text-pad,
  table[class="body"] .text-pad-right {
    padding-left: 10px !important;
  }

  table[class="body"] .left-text-pad,
  table[class="body"] .text-pad-left {
    padding-right: 10px !important;
  }

  table[class="body"] .hide-for-small,
  table[class="body"] .show-for-desktop {
    display: none !important;
  }

  table[class="body"] .show-for-small,
  table[class="body"] .hide-for-desktop {
    display: inherit !important;
  }
}

  </style>
</head>
<body>
	<table class="body">
		<tr>
			<td class="center" align="center" valign="top">
        <center>

          <table class="row header">
            <tr>
              <td class="center" align="center">
                <center>

                  <table class="container">
                    <tr>
                      <td class="wrapper last">

                        <table class="twelve columns">
                          <tr>
                            <td class="six sub-columns" style="background: black; height: 40px; text-align: center; color: #fff">
                              <div style="font-size: 30px; padding-top: 15px">Subliminal Prime</div>
                            </td>
                            <td class="six sub-columns last" style="text-align:right; vertical-align:middle;">
                            </td>
                            <td class="expander"></td>
                          </tr>
                        </table>

                      </td>
                    </tr>
                  </table>

                </center>
              </td>
            </tr>
          </table>

          <table class="container">
            <tr>
              <td>

                <table class="row">
                  <tr>
                    <td class="wrapper last">

                      <table class="twelve columns">
                        <tr>
                          <td>
                            <h1 style="padding-top: 20px">Dear user,</h1>
                			 <h4>Here are the sentences for '.$category.'.</h4>	
                              <br>
                              <p class="lead">1) '.$questions[0].'</p>
                              <p class="lead">2) '.$questions[1].'</p>
                              <p class="lead">3) '.$questions[2].'</p>
                              <p class="lead">4) '.$questions[3].'</p>
                              <p class="lead">5) '.$questions[4].'</p>
                              
                            
                          </td>
                          <td class="expander"></td>
                        </tr>
                      </table>

                    </td>
                  </tr>
                </table>

                <table class="row">
                  <tr>
                    <td class="wrapper last">

                      <table class="twelve columns">
                        <tr>
                          <td>
                            <p class="lead">Thank you,<br>Subliminal Prime Team</p>
                          </td>
                          <td class="expander"></td>
                        </tr>
                      </table>

                    </td>
                  </tr>
                </table>

                <table class="row" style="padding-bottom: 20px">
                  <tr>
                    <td class="wrapper last">

                      <table class="twelve columns">
                        <tr>
                          <td align="center">
                            <center>
                              <p style="text-align:center;"><a href="http://subliminalprime.com/unsubscribe.php?email='.$email.'">Unsubscribe</a></p>
                            </center>
                          </td>
                          <td class="expander"></td>
                        </tr>
                      </table>

                    </td>
                  </tr>
                </table>

              <!-- container end below -->
              </td>
            </tr>
          </table>

        </center>
			</td>
		</tr>
	</table>
</body>
</html>';

    $email = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style type="text/css">
.font-sans-serif {
  font-family: sans-serif;
}
.font-avenir {
  font-family: Avenir, sans-serif;
}
.mso .wrapper .font-avenir {
  font-family: sans-serif !important;
}
.font-lato {
  font-family: Lato, Tahoma, sans-serif;
}
.mso .wrapper .font-lato {
  font-family: Tahoma, sans-serif !important;
}
.font-cabin {
  font-family: Cabin, Avenir, sans-serif;
}
.mso .wrapper .font-cabin {
  font-family: sans-serif !important;
}
.font-open-Sans {
  font-family: "Open Sans", sans-serif;
}
.mso .wrapper .font-open-Sans {
  font-family: sans-serif !important;
}
.font-roboto {
  font-family: Roboto, Tahoma, sans-serif;
}
.mso .wrapper .font-roboto {
  font-family: Tahoma, sans-serif !important;
}
.font-ubuntu {
  font-family: Ubuntu, sans-serif;
}
.mso .wrapper .font-ubuntu {
  font-family: sans-serif !important;
}
.font-pt-sans {
  font-family: "PT Sans", "Trebuchet MS", sans-serif;
}
.mso .wrapper .font-pt-sans {
  font-family: "Trebuchet MS", sans-serif !important;
}
.font-georgia {
  font-family: Georgia, serif;
}
.font-merriweather {
  font-family: Merriweather, Georgia, serif;
}
.mso .wrapper .font-merriweather {
  font-family: Georgia, serif !important;
}
.font-bitter {
  font-family: Bitter, Georgia, serif;
}
.mso .wrapper .font-bitter {
  font-family: Georgia, serif !important;
}
.font-pt-serif {
  font-family: "PT Serif", Georgia, serif;
}
.mso .wrapper .font-pt-serif {
  font-family: Georgia, serif !important;
}
.font-pompiere {
  font-family: Pompiere, "Trebuchet MS", sans-serif;
}
.mso .wrapper .font-pompiere {
  font-family: "Trebuchet MS", sans-serif !important;
}
.font-roboto-slab {
  font-family: "Roboto Slab", Georgia, serif;
}
.mso .wrapper .font-roboto-slab {
  font-family: Georgia, serif !important;
}
@media only screen and (max-width: 620px) {
  .wrapper .column .size-8 {
    font-size: 8px !important;
    line-height: 14px !important;
  }
  .wrapper .column .size-9 {
    font-size: 9px !important;
    line-height: 16px !important;
  }
  .wrapper .column .size-10 {
    font-size: 10px !important;
    line-height: 18px !important;
  }
  .wrapper .column .size-11 {
    font-size: 11px !important;
    line-height: 19px !important;
  }
  .wrapper .column .size-12 {
    font-size: 12px !important;
    line-height: 19px !important;
  }
  .wrapper .column .size-13 {
    font-size: 13px !important;
    line-height: 21px !important;
  }
  .wrapper .column .size-14 {
    font-size: 14px !important;
    line-height: 21px !important;
  }
  .wrapper .column .size-15 {
    font-size: 15px !important;
    line-height: 23px !important;
  }
  .wrapper .column .size-16 {
    font-size: 16px !important;
    line-height: 24px !important;
  }
  .wrapper .column .size-17 {
    font-size: 17px !important;
    line-height: 26px !important;
  }
  .wrapper .column .size-18 {
    font-size: 17px !important;
    line-height: 26px !important;
  }
  .wrapper .column .size-20 {
    font-size: 17px !important;
    line-height: 26px !important;
  }
  .wrapper .column .size-22 {
    font-size: 18px !important;
    line-height: 26px !important;
  }
  .wrapper .column .size-24 {
    font-size: 20px !important;
    line-height: 28px !important;
  }
  .wrapper .column .size-26 {
    font-size: 22px !important;
    line-height: 31px !important;
  }
  .wrapper .column .size-28 {
    font-size: 24px !important;
    line-height: 32px !important;
  }
  .wrapper .column .size-30 {
    font-size: 26px !important;
    line-height: 34px !important;
  }
  .wrapper .column .size-32 {
    font-size: 28px !important;
    line-height: 36px !important;
  }
  .wrapper .column .size-34 {
    font-size: 30px !important;
    line-height: 38px !important;
  }
  .wrapper .column .size-36 {
    font-size: 30px !important;
    line-height: 38px !important;
  }
  .wrapper .column .size-40 {
    font-size: 32px !important;
    line-height: 40px !important;
  }
  .wrapper .column .size-44 {
    font-size: 34px !important;
    line-height: 43px !important;
  }
  .wrapper .column .size-48 {
    font-size: 36px !important;
    line-height: 43px !important;
  }
  .wrapper .column .size-56 {
    font-size: 40px !important;
    line-height: 47px !important;
  }
  .wrapper .column .size-64 {
    font-size: 44px !important;
    line-height: 50px !important;
  }
}
body {
  margin: 0;
  padding: 0;
  min-width: 100%;
}
.mso body {
  mso-line-height-rule: exactly;
}
.no-padding .wrapper .column .column-top,
.no-padding .wrapper .column .column-bottom {
  font-size: 0px;
  line-height: 0px;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
}
td {
  padding: 0;
  vertical-align: top;
}
.spacer,
.border {
  font-size: 1px;
  line-height: 1px;
}
.spacer {
  width: 100%;
}
img {
  border: 0;
  -ms-interpolation-mode: bicubic;
}
.image {
  font-size: 12px;
  mso-line-height-rule: at-least;
}
.image img {
  display: block;
}
.logo {
  mso-line-height-rule: at-least;
}
.logo img {
  display: block;
}
strong {
  font-weight: bold;
}
h1,
h2,
h3,
p,
ol,
ul,
blockquote,
.image {
  font-style: normal;
  font-weight: 400;
}
ol,
ul,
li {
  padding-left: 0;
}
blockquote {
  Margin-left: 0;
  Margin-right: 0;
  padding-right: 0;
}
.column-top,
.column-bottom {
  font-size: 32px;
  line-height: 32px;
  transition-timing-function: cubic-bezier(0, 0, 0.2, 1);
  transition-duration: 150ms;
  transition-property: all;
}
.half-padding .column .column-top,
.half-padding .column .column-bottom {
  font-size: 16px;
  line-height: 16px;
}
.column {
  text-align: left;
}
.contents {
  table-layout: fixed;
  width: 100%;
}
.padded {
  padding-left: 32px;
  padding-right: 32px;
  word-break: break-word;
  word-wrap: break-word;
}
.wrapper {
  display: table;
  table-layout: fixed;
  width: 100%;
  min-width: 620px;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
}
.wrapper a {
  transition: opacity 0.2s ease-in;
}
table.wrapper {
  table-layout: fixed;
}
.one-col,
.two-col,
.three-col {
  Margin-left: auto;
  Margin-right: auto;
  width: 600px;
}
.centered {
  Margin-left: auto;
  Margin-right: auto;
}
.btn a {
  border-radius: 3px;
  display: inline-block;
  font-size: 14px;
  font-weight: 700;
  line-height: 24px;
  padding: 13px 35px 12px 35px;
  text-align: center;
  text-decoration: none !important;
}
.btn a:hover {
  opacity: 0.8;
}
.two-col .btn a {
  font-size: 12px;
  line-height: 22px;
  padding: 10px 28px;
}
.three-col .btn a,
.two-col .column-narrower .btn a {
  font-size: 11px;
  line-height: 19px;
  padding: 6px 18px 5px 18px;
}
@media only screen and (max-width: 620px) {
  .btn a {
    display: block !important;
    font-size: 14px !important;
    line-height: 24px !important;
    padding: 13px 10px 12px 10px !important;
  }
}
.two-col .column {
  width: 290px;
}
.two-col .gutter {
  width: 20px;
  font-size: 1px;
  line-height: 1px;
}
.three-col .column-top,
.three-col .column-bottom {
  font-size: 20px;
  line-height: 20px;
}
.half-padding .three-col .column-top,
.half-padding .three-col .column-bottom {
  font-size: 10px;
  line-height: 10px;
}
.three-col .column,
.two-col .column-narrower {
  width: 190px;
}
.three-col .gutter {
  width: 15px;
  font-size: 1px;
  line-height: 1px;
}
.three-col .padded {
  padding-left: 20px;
  padding-right: 20px;
}
.wider {
  width: 390px;
}
.narrower {
  width: 190px;
}
@media only screen and (min-width: 0) {
  .wrapper {
    text-rendering: optimizeLegibility;
  }
}
@media only screen and (max-width: 620px) {
  [class=wrapper] {
    min-width: 280px !important;
    width: 100% !important;
  }
  [class=wrapper] .one-col,
  [class=wrapper] .two-col,
  [class=wrapper] .three-col {
    width: 280px !important;
  }
  [class=wrapper] .column,
  [class=wrapper] .gutter {
    display: block;
    float: left;
    width: 280px !important;
  }
  [class=wrapper] .padded {
    padding-left: 20px !important;
    padding-right: 20px !important;
  }
  [class=wrapper] .block {
    display: block !important;
  }
  [class=wrapper] .hide {
    display: none !important;
  }
  [class=wrapper] .image img {
    height: auto !important;
    width: 100% !important;
  }
}
.footer {
  width: 100%;
}
.footer .inner {
  padding: 58px 0 29px 0;
  width: 600px;
}
.footer .left td,
.footer .right td {
  font-size: 12px;
  line-height: 22px;
}
.footer .left td {
  text-align: left;
  width: 400px;
}
.footer .right td {
  max-width: 200px;
  mso-line-height-rule: at-least;
}
.footer .links {
  line-height: 26px;
  Margin-bottom: 26px;
  mso-line-height-rule: at-least;
}
.footer .links a:hover {
  opacity: 0.8;
}
.footer .links img {
  vertical-align: middle;
}
.footer .address {
  Margin-bottom: 18px;
}
.footer .campaign {
  Margin-bottom: 18px;
}
.footer .campaign a {
  font-weight: bold;
  text-decoration: none;
}
.footer .sharing div {
  Margin-bottom: 5px;
}
.wrapper .footer .fblike,
.wrapper .footer .tweet,
.wrapper .footer .linkedinshare,
.wrapper .footer .forwardtoafriend {
  background-repeat: no-repeat;
  background-size: 200px 56px;
  border-radius: 2px;
  color: #ffffff;
  display: block;
  font-size: 11px;
  font-weight: bold;
  line-height: 11px;
  padding: 8px 11px 7px 28px;
  text-align: left;
  text-decoration: none;
}
.wrapper .footer .fblike:hover,
.wrapper .footer .tweet:hover,
.wrapper .footer .linkedinshare:hover,
.wrapper .footer .forwardtoafriend:hover {
  color: #ffffff !important;
  opacity: 0.8;
}
.footer .fblike {
  background-image: url(https://i9.createsend1.com/static/eb/master/09-onyx/imgf/fblike.png);
}
.footer .tweet {
  background-image: url(https://i10.createsend1.com/static/eb/master/09-onyx/imgf/tweet.png);
}
.footer .linkedinshare {
  background-image: url(https://i1.createsend1.com/static/eb/master/09-onyx/imgf/lishare.png);
}
.footer .forwardtoafriend {
  background-image: url(https://i2.createsend1.com/static/eb/master/09-onyx/imgf/forward.png);
}
@media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min--moz-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2/1), only screen and (min-device-pixel-ratio: 2), only screen and (min-resolution: 192dpi), only screen and (min-resolution: 2dppx) {
  .footer .fblike {
    background-image: url(https://i3.createsend1.com/static/eb/master/09-onyx/imgf/fblike@2x.png) !important;
  }
  .footer .tweet {
    background-image: url(https://i4.createsend1.com/static/eb/master/09-onyx/imgf/tweet@2x.png) !important;
  }
  .footer .linkedinshare {
    background-image: url(https://i6.createsend1.com/static/eb/master/09-onyx/imgf/lishare@2x.png) !important;
  }
  .footer .forwardtoafriend {
    background-image: url(https://i5.createsend1.com/static/eb/master/09-onyx/imgf/forward@2x.png) !important;
  }
}
@media only screen and (max-width: 620px) {
  .footer {
    width: 280px !important;
  }
  .footer td {
    display: none;
  }
  .footer .inner,
  .footer .inner td {
    display: block;
    text-align: center !important;
    max-width: 280px !important;
    width: 280px !important;
  }
  .footer .sharing {
    Margin-bottom: 40px;
  }
  .footer .sharing div {
    display: inline-block;
  }
  .footer .fblike,
  .footer .tweet,
  .footer .linkedinshare,
  .footer .forwardtoafriend {
    display: inline-block !important;
  }
}
.wrapper h1,
.wrapper h2,
.wrapper h3,
.wrapper p,
.wrapper ol,
.wrapper ul,
.wrapper li,
.wrapper blockquote,
.image,
.btn,
.divider {
  Margin-bottom: 0;
  Margin-top: 0;
}
.wrapper .column h1 + * {
  Margin-top: 16px;
}
.wrapper .column h2 + * {
  Margin-top: 14px;
}
.wrapper .column h3 + * {
  Margin-top: 12px;
}
.wrapper .column p + *,
.wrapper .column ol + *,
.wrapper .column ul + *,
.wrapper .column blockquote + *,
.image + .contents td > :first-child {
  Margin-top: 32px;
}
.wrapper .column li + * {
  Margin-top: 10px;
}
.contents:nth-last-child(n+3) h1:last-child,
.no-padding .contents:nth-last-child(n+2) h1:last-child {
  Margin-bottom: 16px;
}
.contents:nth-last-child(n+3) h2:last-child,
.no-padding .contents:nth-last-child(n+2) h2:last-child {
  Margin-bottom: 14px;
}
.contents:nth-last-child(n+3) h3:last-child,
.no-padding .contents:nth-last-child(n+2) h3:last-child {
  Margin-bottom: 12px;
}
.contents:nth-last-child(n+3) p:last-child,
.no-padding .contents:nth-last-child(n+2) p:last-child,
.contents:nth-last-child(n+3) ol:last-child,
.no-padding .contents:nth-last-child(n+2) ol:last-child,
.contents:nth-last-child(n+3) ul:last-child,
.no-padding .contents:nth-last-child(n+2) ul:last-child,
.contents:nth-last-child(n+3) blockquote:last-child,
.no-padding .contents:nth-last-child(n+2) blockquote:last-child,
.contents:nth-last-child(n+3) .image,
.no-padding .contents:nth-last-child(n+2) .image,
.contents:nth-last-child(n+3) .divider,
.no-padding .contents:nth-last-child(n+2) .divider,
.contents:nth-last-child(n+3) .btn,
.no-padding .contents:nth-last-child(n+2) .btn {
  Margin-bottom: 32px;
}
.two-col .column p + *,
.two-col .column ol + *,
.two-col .column ul + *,
.two-col .column blockquote + *,
.two-col .image + .contents td > :first-child {
  Margin-top: 32px;
}
.two-col .contents:nth-last-child(n+3) p:last-child,
.no-padding .two-col .contents:nth-last-child(n+2) p:last-child,
.two-col .contents:nth-last-child(n+3) ol:last-child,
.no-padding .two-col .contents:nth-last-child(n+2) ol:last-child,
.two-col .contents:nth-last-child(n+3) ul:last-child,
.no-padding .two-col .contents:nth-last-child(n+2) ul:last-child,
.two-col .contents:nth-last-child(n+3) blockquote:last-child,
.no-padding .two-col .contents:nth-last-child(n+2) blockquote:last-child,
.two-col .contents:nth-last-child(n+3) .image,
.no-padding .two-col .contents:nth-last-child(n+2) .image,
.two-col .contents:nth-last-child(n+3) .divider,
.no-padding .two-col .contents:nth-last-child(n+2) .divider,
.two-col .contents:nth-last-child(n+3) .btn,
.no-padding .two-col .contents:nth-last-child(n+2) .btn {
  Margin-bottom: 32px;
}
.three-col .column p + *,
.tw-col .column-narrower .column p + *,
.three-col .column ol + *,
.tw-col .column-narrower .column ol + *,
.three-col .column ul + *,
.tw-col .column-narrower .column ul + *,
.three-col .column blockquote + *,
.tw-col .column-narrower .column blockquote + *,
.three-col .image + .contents td > :first-child,
.tw-col .column-narrower .image + .contents td > :first-child,
.two-col .column-narrower p + *,
.two-col .column-narrower ol + *,
.two-col .column-narrower ul + *,
.two-col .column-narrower blockquote + * {
  Margin-top: 20px;
}
.three-col .contents:nth-last-child(n+3) p:last-child,
.two-col .column-narrower .contents:nth-last-child(n+3) p:last-child,
.no-padding .three-col .contents:nth-last-child(n+2) p:last-child,
.no-padding .two-col .column-narrower .contents:nth-last-child(n+2) p:last-child,
.three-col .contents:nth-last-child(n+3) ol:last-child,
.two-col .column-narrower .contents:nth-last-child(n+3) ol:last-child,
.no-padding .three-col .contents:nth-last-child(n+2) ol:last-child,
.no-padding .two-col .column-narrower .contents:nth-last-child(n+2) ol:last-child,
.three-col .contents:nth-last-child(n+3) ul:last-child,
.two-col .column-narrower .contents:nth-last-child(n+3) ul:last-child,
.no-padding .three-col .contents:nth-last-child(n+2) ul:last-child,
.no-padding .two-col .column-narrower .contents:nth-last-child(n+2) ul:last-child,
.three-col .contents:nth-last-child(n+3) blockquote:last-child,
.two-col .column-narrower .contents:nth-last-child(n+3) blockquote:last-child,
.no-padding .three-col .contents:nth-last-child(n+2) blockquote:last-child,
.no-padding .two-col .column-narrower .contents:nth-last-child(n+2) blockquote:last-child,
.three-col .contents:nth-last-child(n+3) .image,
.two-col .column-narrower .contents:nth-last-child(n+3) .image,
.no-padding .three-col .contents:nth-last-child(n+2) .image,
.no-padding .two-col .column-narrower .contents:nth-last-child(n+2) .image,
.three-col .contents:nth-last-child(n+3) .divider,
.two-col .column-narrower .contents:nth-last-child(n+3) .divider,
.no-padding .three-col .contents:nth-last-child(n+2) .divider,
.no-padding .two-col .column-narrower .contents:nth-last-child(n+2) .divider,
.three-col .contents:nth-last-child(n+3) .btn,
.two-col .column-narrower .contents:nth-last-child(n+3) .btn,
.no-padding .three-col .contents:nth-last-child(n+2) .btn,
.no-padding .two-col .column-narrower .contents:nth-last-child(n+2) .btn {
  Margin-bottom: 20px;
}
@media only screen and (max-width: 620px) {
  .wrapper p + *,
  .wrapper ol + *,
  .wrapper ul + *,
  .wrapper blockquote + *,
  .image + .contents td > :first-child {
    Margin-top: 32px !important;
  }
  .contents:nth-last-child(n+3) p:last-child,
  .no-padding .contents:nth-last-child(n+2) p:last-child,
  .contents:nth-last-child(n+3) ol:last-child,
  .no-padding .contents:nth-last-child(n+2) ol:last-child,
  .contents:nth-last-child(n+3) ul:last-child,
  .no-padding .contents:nth-last-child(n+2) ul:last-child,
  .contents:nth-last-child(n+3) blockquote:last-child,
  .no-padding .contents:nth-last-child(n+2) blockquote:last-child,
  .contents:nth-last-child(n+3) .image:last-child,
  .no-padding .contents:nth-last-child(n+2) .image:last-child,
  .contents:nth-last-child(n+3) .divider:last-child,
  .no-padding .contents:nth-last-child(n+2) .divider:last-child,
  .contents:nth-last-child(n+3) .btn:last-child,
  .no-padding .contents:nth-last-child(n+2) .btn:last-child {
    Margin-bottom: 32px !important;
  }
}
.column table,
.padded table {
  width: 100%;
}
.preheader {
  width: 100%;
}
.preheader .title,
.preheader .webversion {
  font-size: 11px;
  line-height: 16px;
}
.preheader .title {
  padding: 9px;
  text-align: left;
}
.preheader .webversion {
  padding: 9px;
  text-align: right;
  width: 250px;
}
.preheader .webversion a {
  font-weight: bold;
  text-decoration: none;
}
.header {
  width: 100%;
  Margin-left: auto;
  Margin-right: auto;
}
.logo {
  width: 600px;
}
.logo div a {
  text-decoration: none;
}
.logo div.logo-center {
  text-align: center;
}
.logo div.logo-center img {
  Margin-left: auto;
  Margin-right: auto;
}
ul li {
  list-style-type: disc;
  list-style-position: outside;
}
.mso ul li {
  list-style-image: none !important;
  list-style-type: disc !important;
}
.wrapper h1 {
  font-size: 30px;
  line-height: 40px;
}
.wrapper h2 {
  font-size: 20px;
  line-height: 28px;
}
.wrapper h3 {
  font-size: 16px;
  line-height: 24px;
}
.wrapper p,
.wrapper ol,
.wrapper ul {
  font-size: 14px;
  line-height: 22px;
}
.wrapper blockquote {
  Margin-left: 0;
}
.mso .wrapper li {
  padding-left: 5px !important;
  margin-left: 10px !important;
}
.mso .wrapper ol,
.mso .wrapper ul {
  margin-left: 20px !important;
}
.one-col,
.two-col,
.three-col,
.one-col-feature {
  table-layout: fixed;
}
.one-col,
.two-col,
.three-col {
  Margin-left: auto;
  Margin-right: auto;
}
.one-col .padded,
.two-col .padded,
.three-col .padded {
  text-align: left;
}
.one-col blockquote,
.two-col blockquote,
.three-col blockquote {
  background-repeat: no-repeat;
  background-position: 0px 4px;
}
.divider img {
  display: block;
}
.separator {
  font-size: 20px;
  line-height: 20px;
}
.one-col-bg,
.two-col-bg,
.three-col-bg,
.one-col-feature-bg {
  width: 100%;
}
.one-col .padded ul li {
  padding-left: 13px;
}
.one-col ol,
.one-col ul {
  Margin-left: 48px;
}
.one-col ol li,
.one-col ul li {
  padding-left: 13px;
}
.one-col blockquote p {
  font-size: 18px;
  line-height: 26px;
}
.one-col blockquote p,
.one-col blockquote h1,
.one-col blockquote h2,
.one-col blockquote h3,
.one-col blockquote ol,
.one-col blockquote ul {
  padding-left: 60px;
}
.mso .one-col blockquote p,
.mso .one-col blockquote h1,
.mso .one-col blockquote h2,
.mso .one-col blockquote h3,
.mso .one-col blockquote ol,
.mso .one-col blockquote ul {
  padding: 0 !important;
}
.one-col-feature {
  width: 600px;
  Margin-left: auto;
  Margin-right: auto;
}
.one-col-feature h1 a,
.one-col-feature h2 a,
.one-col-feature h3 a,
.one-col-feature p a,
.one-col-feature li a {
  text-decoration: none;
}
.one-col-feature ol {
  Margin-left: 36px;
}
.one-col-feature ol li {
  padding-left: 15px;
}
.one-col-feature ul {
  Margin-left: 30px;
}
.one-col-feature ul li {
  padding-left: 20px;
  line-height: 40px;
}
.one-col-feature ol,
.one-col-feature ul {
  font-size: 26px;
  line-height: 40px;
}
.one-col-feature h1,
.one-col-feature h2,
.one-col-feature h3,
.one-col-feature p,
.one-col-feature .btn {
  text-align: center;
}
.one-col-feature blockquote {
  background-repeat: no-repeat;
  background-position: 100% 100%;
}
.one-col-feature blockquote p:first-child,
.one-col-feature blockquote h1:first-child,
.one-col-feature blockquote h2:first-child,
.one-col-feature blockquote h3:first-child,
.one-col-feature blockquote ol:first-child,
.one-col-feature blockquote ul:first-child {
  padding-top: 27px;
}
.one-col-feature blockquote p,
.one-col-feature blockquote h1,
.one-col-feature blockquote h2,
.one-col-feature blockquote h3,
.one-col-feature blockquote ol,
.one-col-feature blockquote ul {
  background-repeat: no-repeat;
  background-position: 0% 0%;
  font-size: 26px;
  line-height: 40px;
  padding: 0;
}
.one-col-feature blockquote p:last-child,
.one-col-feature blockquote h1:last-child,
.one-col-feature blockquote h2:last-child,
.one-col-feature blockquote h3:last-child,
.one-col-feature blockquote ol:last-child,
.one-col-feature blockquote ul:last-child {
  padding-bottom: 30px;
}
.one-col-feature .divider img {
  display: block;
  Margin-left: auto;
  Margin-right: auto;
}
.two-col ol,
.two-col ul {
  Margin-left: 18px;
}
.two-col li {
  padding-left: 20px;
}
.two-col blockquote p,
.two-col blockquote h1,
.two-col blockquote h2,
.two-col blockquote h3,
.two-col blockquote ol,
.two-col blockquote ul {
  padding-left: 38px;
}
.two-col .column-wider {
  width: 390px;
}
.two-col .column-narrower {
  width: 190px;
}
.three-col .column .padded,
.two-col .column-narrower .padded {
  padding-left: 20px;
  padding-right: 20px;
}
.three-col .column ol,
.three-col .column ul,
.two-col .column-narrower ol,
.two-col .column-narrower ul {
  Margin-left: 18px;
}
.three-col .column ol li,
.three-col .column ul li,
.two-col .column-narrower ol li,
.two-col .column-narrower ul li {
  padding-left: 10px;
}
.three-col .column blockquote p,
.three-col .column blockquote h1,
.three-col .column blockquote h2,
.three-col .column blockquote h3,
.three-col .column blockquote ol,
.three-col .column blockquote ul,
.two-col .column-narrower blockquote p,
.two-col .column-narrower blockquote h1,
.two-col .column-narrower blockquote h2,
.two-col .column-narrower blockquote h3,
.two-col .column-narrower blockquote ol,
.two-col .column-narrower blockquote ul {
  padding-left: 28px;
}
.one-col .column .contents blockquote {
  background-image: url(https://i1.createsend1.com/static/eb/master/09-onyx/images/quote-double-large.png);
}
.two-col .column .contents blockquote {
  background-image: url(https://i7.createsend1.com/static/eb/master/09-onyx/images/quote-double.png);
}
.three-col .column .contents blockquote,
.two-col .column-narrower .contents blockquote {
  background-image: url(https://i9.createsend1.com/static/eb/master/09-onyx/images/quote-single.png);
}
.two-col .column-narrower .contents blockquote {
  background-image: url(https://i9.createsend1.com/static/eb/master/09-onyx/images/quote-single.png);
}
.two-col .column-wider .contents blockquote {
  background-image: url(https://i7.createsend1.com/static/eb/master/09-onyx/images/quote-double.png);
}
.contents ul li {
  list-style-image: url(https://i8.createsend1.com/static/eb/master/09-onyx/images/bullet.png);
}
.one-col-feature .contents ul li {
  list-style-image: url(https://i10.createsend1.com/static/eb/master/09-onyx/images/bullet-large.png);
}
.one-col-feature .contents blockquote {
  background-image: url(https://i2.createsend1.com/static/eb/master/09-onyx/images/quote-bottom-feature.png);
}
.one-col-feature .contents blockquote p:first-child,
.one-col-feature .contents blockquote h1:first-child,
.one-col-feature .contents blockquote h2:first-child,
.one-col-feature .contents blockquote h3:first-child,
.one-col-feature .contents blockquote ol:first-child,
.one-col-feature .contents blockquote ul:first-child {
  background-image: url(https://i3.createsend1.com/static/eb/master/09-onyx/images/quote-top-feature.png);
}
.wrapper blockquote * {
  font-style: italic;
}
@media (-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi) {
  .one-col ul {
    border-left: 30px solid transparent;
  }
}
@media (-webkit-min-device-pixel-ratio: 1.5) and (min-width: 620px), (min-resolution: 144dpi) and (min-width: 620px) {
  .one-col .column .contents ul li {
    padding-left: 38px !important;
  }
  .two-col .column .contents ul li {
    padding-left: 38px !important;
  }
  .three-col .column .contents ul li,
  .two-col .column-narrower .contents ul li {
    padding-left: 28px !important;
  }
  .two-col .column-narrower .contents ul li {
    padding-left: 28px !important;
  }
  .one-col .column .contents blockquote {
    background-size: 40px !important;
    background-image: url(https://i6.createsend1.com/static/eb/master/09-onyx/images/quote-double-large@2x.png);
  }
  .two-col .column .contents blockquote {
    background-size: 28px !important;
    background-image: url(https://i4.createsend1.com/static/eb/master/09-onyx/images/quote-double@2x.png);
  }
  .three-col .column .contents blockquote,
  .two-col .column-narrower .contents blockquote {
    background-size: 15px !important;
    background-image: url(https://i1.createsend1.com/static/eb/master/09-onyx/images/quote-single@2x.png);
  }
  .two-col .column-narrower .contents blockquote {
    background-size: 15px !important;
    background-image: url(https://i1.createsend1.com/static/eb/master/09-onyx/images/quote-single@2x.png);
  }
  .two-col .column-wider .contents blockquote {
    background-size: 28px !important;
    background-image: url(https://i4.createsend1.com/static/eb/master/09-onyx/images/quote-double@2x.png);
  }
}
@media (-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi), (max-width: 620px) {
  [class=wrapper] .one-col-feature blockquote {
    background-size: 30px !important;
    background-image: url(https://i2.createsend1.com/static/eb/master/09-onyx/images/quote-bottom-dark@2x.png) !important;
    background-position: 50% 100% !important;
  }
  [class=wrapper] .one-col-feature blockquote p:first-child,
  [class=wrapper] .one-col-feature blockquote h1:first-child,
  [class=wrapper] .one-col-feature blockquote h2:first-child,
  [class=wrapper] .one-col-feature blockquote h3:first-child,
  [class=wrapper] .one-col-feature blockquote ol:first-child,
  [class=wrapper] .one-col-feature blockquote ul:first-child {
    background-size: 30px !important;
    background-image: url(https://i5.createsend1.com/static/eb/master/09-onyx/images/quote-top-dark@2x.png) !important;
    background-position: 50% 0% !important;
  }
  [class=wrapper] .contents ul li {
    background: transparent url(https://i10.createsend1.com/static/eb/master/09-onyx/images/bullet@2x.png) no-repeat top left !important;
  }
  [class=wrapper] .contents ul {
    margin-left: 0px !important;
  }
  [class=wrapper] .contents ul li {
    list-style-type: none !important;
    list-style-image: none !important;
    background-size: 10px 10px !important;
    background-position: 0 5px !important;
  }
  [class=wrapper] .one-col-feature ul {
    margin-left: 0 !important;
  }
  [class=wrapper] .one-col-feature ul li {
    list-style: none !important;
    background: transparent url(https://i7.createsend1.com/static/eb/master/09-onyx/images/bullet-large@2x.png) no-repeat top left !important;
    background-size: 20px !important;
    background-position: 0 9px !important;
    padding-left: 50px;
  }
}
@media (-webkit-min-device-pixel-ratio: 1.5) and (max-width: 620px), (min-resolution: 144dpi) and (max-width: 620px) {
  [class=wrapper] .one-col ul {
    margin-left: 0 !important;
    border: 0 !important;
  }
  [class=wrapper] .one-col .divider,
  [class=wrapper] .two-col .column .divider,
  [class=wrapper] .two-col .column-narrower .divider,
  [class=wrapper] .two-col .column-wider .divider,
  [class=wrapper] .three-col .divider {
    background-image: url(https://i8.createsend1.com/static/eb/master/09-onyx/images/divider-waves@2x.png) !important;
  }
}
@media only screen and (max-width: 620px) {
  [class=wrapper] .one-col .contents blockquote p,
  [class=wrapper] .two-col .contents blockquote p,
  [class=wrapper] .three-col .contents blockquote p,
  [class=wrapper] .one-col .contents blockquote h1,
  [class=wrapper] .two-col .contents blockquote h1,
  [class=wrapper] .three-col .contents blockquote h1,
  [class=wrapper] .one-col .contents blockquote h2,
  [class=wrapper] .two-col .contents blockquote h2,
  [class=wrapper] .three-col .contents blockquote h2,
  [class=wrapper] .one-col .contents blockquote h3,
  [class=wrapper] .two-col .contents blockquote h3,
  [class=wrapper] .three-col .contents blockquote h3,
  [class=wrapper] .one-col .contents blockquote ol,
  [class=wrapper] .two-col .contents blockquote ol,
  [class=wrapper] .three-col .contents blockquote ol,
  [class=wrapper] .one-col .contents blockquote ul,
  [class=wrapper] .two-col .contents blockquote ul,
  [class=wrapper] .three-col .contents blockquote ul {
    padding-left: 38px !important;
  }
  [class=wrapper] .contents blockquote {
    background-image: url(https://i4.createsend1.com/static/eb/master/09-onyx/images/quote-double@2x.png) !important;
    background-size: 27px !important;
  }
  [class=wrapper] .contents ul li {
    padding-left: 38px !important;
  }
  [class=wrapper] .contents ol li {
    padding-left: 18px !important;
  }
  [class=wrapper] .spacer {
    display: none !important;
  }
  [class=wrapper] .header .logo {
    width: 280px !important;
  }
  [class=wrapper] .header .logo div {
    margin-bottom: 0 !important;
  }
  [class=wrapper] .header .logo div img {
    display: inline-block !important;
    max-width: 280px !important;
    height: auto !important;
  }
  [class=wrapper] .preheader .webversion,
  [class=wrapper] .header .logo a {
    text-align: center !important;
  }
  [class=wrapper] .column-wider,
  [class=wrapper] .column-narrower {
    display: block;
    float: left;
    width: 280px !important;
  }
  [class=wrapper] .one-col-feature {
    width: 280px !important;
  }
  [class=wrapper] .one-col-feature li {
    font-size: 18px !important;
    line-height: 28px !important;
  }
  [class=wrapper] .one-col-feature ol {
    margin-left: 22px !important;
  }
  [class=wrapper] .one-col-feature ol li {
    padding-left: 18px !important;
  }
  [class=wrapper] .one-col-feature ul li {
    background-size: 10px !important;
    padding-left: 40px !important;
  }
  [class=wrapper] .gutter {
    font-size: 10px;
    line-height: 10px;
    height: 10px !important;
  }
  [class=wrapper] table.one-col,
  [class=wrapper] table.one-col-feature,
  [class=wrapper] td.last {
    margin-bottom: 10px !important;
  }
  [class=wrapper] ol,
  [class=wrapper] ul {
    margin-left: 20px !important;
  }
  [class=wrapper] .preheader *[class*="column"] {
    display: block !important;
    text-align: center !important;
  }
  [class=wrapper] .preheader .title {
    display: none !important;
  }
  [class=wrapper] .one-col .divider,
  [class=wrapper] .two-col .column .divider,
  [class=wrapper] .two-col .column-narrower .divider,
  [class=wrapper] .two-col .column-wider .divider,
  [class=wrapper] .three-col .divider {
    background: transparent url(https://i9.createsend1.com/static/eb/master/09-onyx/images/divider-waves.png) repeat center center;
    background-size: auto 6px !important;
  }
  [class=wrapper] .one-col .divider img,
  [class=wrapper] .two-col .column .divider img,
  [class=wrapper] .two-col .column-narrower .divider img,
  [class=wrapper] .two-col .column-wider .divider img,
  [class=wrapper] .three-col .divider img {
    visibility: hidden;
    width: 240px !important;
  }
}
</style>
    <style type="text/css">
    </style>
  <!--[if !mso]><!--><style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Ubuntu:400,700,400italic,700italic);
</style><link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700,400italic,700italic" rel="stylesheet" type="text/css" /><!--<![endif]--><style type="text/css">
.wrapper h1{}.wrapper h1{font-family:Ubuntu,sans-serif}.mso .wrapper h1{font-family:sans-serif !important}.wrapper h2{}.wrapper h2{font-family:Ubuntu,sans-serif}.mso .wrapper h2{font-family:sans-serif !important}.wrapper h3{}.wrapper h3{font-family:Ubuntu,sans-serif}.mso .wrapper h3{font-family:sans-serif !important}.wrapper p,.wrapper ol,.wrapper ul,.wrapper .image{}.wrapper p,.wrapper ol,.wrapper ul,.wrapper .image{font-family:Ubuntu,sans-serif}.mso .wrapper p,.mso .wrapper ol,.mso .wrapper ul,.mso .wrapper .image{font-family:sans-serif !important}.wrapper .btn a{}.wrapper .btn a{font-family:Ubuntu,sans-serif}.mso .wrapper .btn a{font-family:sans-serif !important}.logo div{}.logo div{font-family:Avenir,sans-serif}.mso .logo div{font-family:sans-serif 
!important}.title,.webversion,.fblike,.tweet,.linkedinshare,.forwardtoafriend,.link,.address,.permission,.campaign{}.title,.webversion,.fblike,.tweet,.linkedinshare,.forwardtoafriend,.link,.address,.permission,.campaign{font-family:Ubuntu,sans-serif}.mso .title,.mso .webversion,.mso .fblike,.mso .tweet,.mso .linkedinshare,.mso .forwardtoafriend,.mso .link,.mso .address,.mso .permission,.mso .campaign{font-family:sans-serif !important}body,.wrapper,.emb-editor-canvas{background-color:#171e24}.mso body{background-color:#fff !important}.mso .header,.mso .footer,.mso .one-col-bg,.mso .two-col-bg,.mso .three-col-bg,.mso .one-col-feature-bg{background-color:#171e24}.hr hr{color:#fff;background-color:#fff}.border{background-color:#11161b}.wrapper h1{color:#80bfc4}.wrapper h2{color:#80bfc4}.wrapper h3{color:#80bfc4}.wrapper p,.wrapper ol,.wrapper ul{color:#e0dce0}.wrapper 
.image{color:#e0dce0}.wrapper a{color:#c5dee0}.wrapper a:hover{color:#a4cbce !important}.wrapper .btn a{background-color:#80bfc4;color:#171e24}.wrapper .btn a:hover{color:#171e24 !important}.preheader{background-color:#11161b}.title,.webversion,.footer .inner td{color:#fff}.wrapper .title a,.wrapper .webversion a,.wrapper .footer a{font-weight:bold;color:#fff}.wrapper .title a:hover,.wrapper .webversion a:hover,.wrapper .footer a:hover{color:#fff !important}.logo div{color:#41637e}.logo div a{color:#41637e}.logo div a:hover{color:#41637e !important}.column-bg{background-color:#212a32}.extra-wide .big-feature{background-color:#212a32}.emb-editor-canvas{background-color:#11161b}.emb-editor-canvas .wrapper{background-color:#171e24}.fblike,.tweet,.linkedinshare,.forwardtoafriend{background-color:#0c0f12}
</style><meta name="robots" content="noindex,nofollow" />
<meta property="og:title" content="My First Campaign" />
</head>
<!--[if mso]>
  <body class="mso">
<![endif]-->
<!--[if !mso]><!-->
  <body class="full-padding" style="margin: 0;padding: 0;min-width: 100%;background-color: #171e24;">
<!--<![endif]-->
    <center class="wrapper" style="display: table;table-layout: fixed;width: 100%;min-width: 620px;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;background-color: #171e24;">
      <table class="preheader" style="border-collapse: collapse;border-spacing: 0;width: 100%;background-color: #11161b;">
        <tbody><tr>
          
          
        </tr>
      </tbody></table>
      <div class="spacer" style="font-size: 1px;line-height: 20px;width: 100%;">&nbsp;</div>
      <table class="header centered" style="border-collapse: collapse;border-spacing: 0;Margin-left: auto;Margin-right: auto;width: 100%;">
        <tbody><tr>
          <td style="padding: 0;vertical-align: top;">&nbsp;</td>
          <td class="logo emb-logo-padding-box" style="padding: 0;vertical-align: top;mso-line-height-rule: at-least;width: 600px;padding-top: 20px;padding-bottom: 26px;"><div class="logo-center" style="font-family: Avenir,sans-serif;color: #41637e;text-align: center;font-size: 0px !important;line-height: 0 !important;" align="center" id="emb-email-header"><a style="transition: opacity 0.2s ease-in;color: #41637e;text-decoration: none;" href="http://subliminalprime.com/"><img style="border: 0;-ms-interpolation-mode: bicubic;display: block;Margin-left: auto;Margin-right: auto;max-width: 166px;" src="img/prime.png" alt="" width="166" height="120" /></a></div></td>
          <td style="padding: 0;vertical-align: top;">&nbsp;</td>
        </tr>
      </tbody></table>
      
          <table class="one-col-bg" style="border-collapse: collapse;border-spacing: 0;width: 100%;">
            <tbody><tr>
              <td style="padding: 0;vertical-align: top;" align="center">
                <table class="one-col centered column-bg" style="border-collapse: collapse;border-spacing: 0;Margin-left: auto;Margin-right: auto;background-color: #212a32;width: 600px;table-layout: fixed;">
                  <tbody><tr>
                    <td class="column" style="padding: 0;vertical-align: top;text-align: left;">
                      
            <div class="image" style="font-size: 12px;mso-line-height-rule: at-least;font-style: normal;font-weight: 400;Margin-bottom: 0;Margin-top: 0;font-family: Ubuntu,sans-serif;color: #e0dce0;" align="center">
              <img class="gnd-corner-image gnd-corner-image-center gnd-corner-image-top" style="border: 0;-ms-interpolation-mode: bicubic;display: block;max-width: 640px;" src="img/sunrise-small1.jpg" alt="" width="600" height="399" />
            </div>
          
                        <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%;">
                          <tbody><tr>
                            <td class="padded" style="padding: 0;vertical-align: top;padding-left: 32px;padding-right: 32px;word-break: break-word;word-wrap: break-word;text-align: left;">
                              
            <div style="Margin-top: 32px;line-height: 14px;font-size: 1px;">&nbsp;</div>
          
                            </td>
                          </tr>
                        </tbody></table>
                      
                        <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%;">
                          <tbody><tr>
                            <td class="padded" style="padding: 0;vertical-align: top;padding-left: 32px;padding-right: 32px;word-break: break-word;word-wrap: break-word;text-align: left;">
                              
            
<h1 class="size-30" style="font-style: normal;font-weight: 400;Margin-bottom: 0;Margin-top: 0;font-size: 30px;line-height: 38px;font-family: Ubuntu,sans-serif;color: #80bfc4;text-align: left;"><span style="color:#ffffff">Dear user,</span></h1><p class="size-18" style="font-style: normal;font-weight: 400;Margin-bottom: 0;Margin-top: 16px;font-size: 18px;line-height: 26px;font-family: Ubuntu,sans-serif;color: #e0dce0;text-align: left;"><span style="text-align:center"><strong style="font-weight: bold;">Here are the sentences for '.$category.'.</strong>&nbsp;</span></p><p class="size-18" style="font-style: normal;font-weight: 400;Margin-bottom: 0;Margin-top: 16px;font-size: 18px;line-height: 26px;font-family: Ubuntu,sans-serif;color: #e0dce0;text-align: left;"><span style="text-align:center"><strong style="font-weight: bold;">'.$questions[0].'</strong>&nbsp;</span></p><p class="size-18" style="font-style: normal;font-weight: 400;Margin-bottom: 0;Margin-top: 16px;font-size: 18px;line-height: 26px;font-family: Ubuntu,sans-serif;color: #e0dce0;text-align: left;"><span style="text-align:center"><strong style="font-weight: bold;">'.$questions[1].'</strong>&nbsp;</span></p><p class="size-18" style="font-style: normal;font-weight: 400;Margin-bottom: 0;Margin-top: 16px;font-size: 18px;line-height: 26px;font-family: Ubuntu,sans-serif;color: #e0dce0;text-align: left;"><span style="text-align:center"><strong style="font-weight: bold;">'.$questions[2].'</strong>&nbsp;</span></p><p class="size-18" style="font-style: normal;font-weight: 400;Margin-bottom: 0;Margin-top: 16px;font-size: 18px;line-height: 26px;font-family: Ubuntu,sans-serif;color: #e0dce0;text-align: left;"><span style="text-align:center"><strong style="font-weight: bold;">'.$questions[3].'</strong>&nbsp;</span></p><p class="size-18" style="font-style: normal;font-weight: 400;Margin-bottom: 0;Margin-top: 16px;font-size: 18px;line-height: 26px;font-family: Ubuntu,sans-serif;color: #e0dce0;text-align: left;"><span style="text-align:center"><strong style="font-weight: bold;">'.$questions[4].'</strong>&nbsp;</span></p><h3 class="size-18" style="font-style: normal;font-weight: 400;Margin-bottom: 0;Margin-top: 32px;font-size: 18px;line-height: 26px;font-family: Ubuntu,sans-serif;color: #80bfc4;text-align: left;"><span style="color:#ffffff"><span style="text-align:center">Thank you,</span></span></h3><p class="size-18" style="font-style: 
normal;font-weight: 400;Margin-bottom: 0;Margin-top: 12px;font-size: 18px;line-height: 26px;font-family: Ubuntu,sans-serif;color: #e0dce0;text-align: left;"><span style="text-align:center">Subliminal Prime</span></p><p class="size-18" style="font-style: normal;font-weight: 400;Margin-bottom: 0;Margin-top: 32px;font-size: 18px;line-height: 26px;font-family: Ubuntu,sans-serif;color: #e0dce0;text-align: left;">&nbsp;</p>
          
                            </td>
                          </tr>
                        </tbody></table>
                      
                      <div class="column-bottom" style="font-size: 32px;line-height: 32px;transition-timing-function: cubic-bezier(0, 0, 0.2, 1);transition-duration: 150ms;transition-property: all;">&nbsp;</div>
                    </td>
                  </tr>
                </tbody></table>
              </td>
            </tr>
          </tbody></table>
        
          <div class="separator" style="font-size: 20px;line-height: 20px;">&nbsp;</div>
        
      <table class="footer centered" style="border-collapse: collapse;border-spacing: 0;Margin-left: auto;Margin-right: auto;width: 100%;">
        <tbody><tr>
          <td style="padding: 0;vertical-align: top;">&nbsp;</td>
          <td class="inner" style="padding: 58px 0 29px 0;vertical-align: top;width: 600px;">
            <table class="right" style="border-collapse: collapse;border-spacing: 0;" align="right">
              <tbody><tr>
                <td style="padding: 0;vertical-align: top;color: #fff;font-size: 12px;line-height: 22px;max-width: 200px;mso-line-height-rule: at-least;">
                  <div class="sharing">
                    
                    
                    
                    
                  </div>
                </td>
              </tr>
            </tbody></table>
            <table class="left" style="border-collapse: collapse;border-spacing: 0;" align="left">
              <tbody><tr>
                <td style="padding: 0;vertical-align: top;color: #fff;font-size: 12px;line-height: 22px;text-align: left;width: 400px;">
                  <div class="links emb-web-links" style="line-height: 26px;Margin-bottom: 26px;mso-line-height-rule: at-least;">
                    
<a style="transition: opacity 0.2s ease-in;color: #fff;font-weight: bold;" href="https://facebook.com/subliminalprime"><img style="border: 0;-ms-interpolation-mode: bicubic;vertical-align: middle;" src="https://i7.createsend1.com/static/eb/master/09-onyx/imgf/facebook-sf.png" width="29" height="26" /></a><a style="transition: opacity 0.2s ease-in;color: #fff;font-weight: bold;" href="https://twitter.com/primesubliminal"><img style="border: 0;-ms-interpolation-mode: bicubic;vertical-align: middle;" src="https://i9.createsend1.com/static/eb/master/09-onyx/imgf/twitter-sf.png" width="29" height="26" /></a><a style="transition: opacity 0.2s ease-in;color: #fff;font-weight: bold;" href="https://subliminalprime.com"><img style="border: 0;-ms-interpolation-mode: bicubic;vertical-align: middle;" src="https://i4.createsend1.com/static/eb/master/09-onyx/imgf/website-sf.png" width="29" height="26" /></a>
                  </div>
                  <div class="address" style="font-family: Ubuntu,sans-serif;Margin-bottom: 18px;">
                    
                  </div>
                  <div class="permission" style="font-family: Ubuntu,sans-serif;">
                    
                  </div>
                  <div class="campaign" style="font-family: Ubuntu,sans-serif;Margin-bottom: 18px;">
                    
                    <unsubscribe>
                      <a href="http://subliminalprime.com/unsubscribe.php?email='.$email.'">Unsubscribe</a>
                    </unsubscribe>
                  </div>
                </td>
              </tr>
            </tbody></table>
          </td>
          <td style="padding: 0;vertical-align: top;">&nbsp;</td>
        </tr>
      </tbody></table>
    </center>
  
</body></html>
';

    return $email;
}


function generate_email_html($email){

    $pages ='<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
  <style>
/**********************************************
* Ink v1.0.5 - Copyright 2013 ZURB Inc        *
**********************************************/

/* Client-specific Styles & Reset */

#outlook a { 
  padding:0; 
} 

body{ 
  width:100% !important; 
  min-width: 100%;
  -webkit-text-size-adjust:100%; 
  -ms-text-size-adjust:100%; 
  margin:0; 
  padding:0;
}

.ExternalClass { 
  width:100%;
} 

.ExternalClass, 
.ExternalClass p, 
.ExternalClass span, 
.ExternalClass font, 
.ExternalClass td, 
.ExternalClass div { 
  line-height: 100%; 
} 

#backgroundTable { 
  margin:0; 
  padding:0; 
  width:100% !important; 
  line-height: 100% !important; 
}

img { 
  outline:none; 
  text-decoration:none; 
  -ms-interpolation-mode: bicubic;
  width: auto;
  max-width: 100%; 
  float: left; 
  clear: both; 
  display: block;
}

center {
  width: 100%;
  min-width: 580px;
}

a img { 
  border: none;
}

p {
  margin: 0 0 0 10px;
}

table {
  border-spacing: 0;
  border-collapse: collapse;
}

td { 
  word-break: break-word;
  -webkit-hyphens: auto;
  -moz-hyphens: auto;
  hyphens: auto;
  border-collapse: collapse !important; 
}

table, tr, td {
  padding: 0;
  vertical-align: top;
  text-align: left;
}

hr {
  color: #d9d9d9; 
  background-color: #d9d9d9; 
  height: 1px; 
  border: none;
}

/* Responsive Grid */

table.body {
  height: 100%;
  width: 100%;
}

table.container {
  width: 580px;
  margin: 0 auto;
  text-align: inherit;
}

table.row { 
  padding: 0px; 
  width: 100%;
  position: relative;
}

table.container table.row {
  display: block;
}

td.wrapper {
  padding: 10px 20px 0px 0px;
  position: relative;
}

table.columns,
table.column {
  margin: 0 auto;
}

table.columns td,
table.column td {
  padding: 0px 0px 10px; 
}

table.columns td.sub-columns,
table.column td.sub-columns,
table.columns td.sub-column,
table.column td.sub-column {
  padding-right: 10px;
}

td.sub-column, td.sub-columns {
  min-width: 0px;
}

table.row td.last,
table.container td.last {
  padding-right: 0px;
}

table.one { width: 30px; }
table.two { width: 80px; }
table.three { width: 130px; }
table.four { width: 180px; }
table.five { width: 230px; }
table.six { width: 280px; }
table.seven { width: 330px; }
table.eight { width: 380px; }
table.nine { width: 430px; }
table.ten { width: 480px; }
table.eleven { width: 530px; }
table.twelve { width: 580px; }

table.one center { min-width: 30px; }
table.two center { min-width: 80px; }
table.three center { min-width: 130px; }
table.four center { min-width: 180px; }
table.five center { min-width: 230px; }
table.six center { min-width: 280px; }
table.seven center { min-width: 330px; }
table.eight center { min-width: 380px; }
table.nine center { min-width: 430px; }
table.ten center { min-width: 480px; }
table.eleven center { min-width: 530px; }
table.twelve center { min-width: 580px; }

table.one .panel center { min-width: 10px; }
table.two .panel center { min-width: 60px; }
table.three .panel center { min-width: 110px; }
table.four .panel center { min-width: 160px; }
table.five .panel center { min-width: 210px; }
table.six .panel center { min-width: 260px; }
table.seven .panel center { min-width: 310px; }
table.eight .panel center { min-width: 360px; }
table.nine .panel center { min-width: 410px; }
table.ten .panel center { min-width: 460px; }
table.eleven .panel center { min-width: 510px; }
table.twelve .panel center { min-width: 560px; }

.body .columns td.one,
.body .column td.one { width: 8.333333%; }
.body .columns td.two,
.body .column td.two { width: 16.666666%; }
.body .columns td.three,
.body .column td.three { width: 25%; }
.body .columns td.four,
.body .column td.four { width: 33.333333%; }
.body .columns td.five,
.body .column td.five { width: 41.666666%; }
.body .columns td.six,
.body .column td.six { width: 50%; }
.body .columns td.seven,
.body .column td.seven { width: 58.333333%; }
.body .columns td.eight,
.body .column td.eight { width: 66.666666%; }
.body .columns td.nine,
.body .column td.nine { width: 75%; }
.body .columns td.ten,
.body .column td.ten { width: 83.333333%; }
.body .columns td.eleven,
.body .column td.eleven { width: 91.666666%; }
.body .columns td.twelve,
.body .column td.twelve { width: 100%; }

td.offset-by-one { padding-left: 50px; }
td.offset-by-two { padding-left: 100px; }
td.offset-by-three { padding-left: 150px; }
td.offset-by-four { padding-left: 200px; }
td.offset-by-five { padding-left: 250px; }
td.offset-by-six { padding-left: 300px; }
td.offset-by-seven { padding-left: 350px; }
td.offset-by-eight { padding-left: 400px; }
td.offset-by-nine { padding-left: 450px; }
td.offset-by-ten { padding-left: 500px; }
td.offset-by-eleven { padding-left: 550px; }

td.expander {
  visibility: hidden;
  width: 0px;
  padding: 0 !important;
}

table.columns .text-pad,
table.column .text-pad {
  padding-left: 10px;
  padding-right: 10px;
}

table.columns .left-text-pad,
table.columns .text-pad-left,
table.column .left-text-pad,
table.column .text-pad-left {
  padding-left: 10px;
}

table.columns .right-text-pad,
table.columns .text-pad-right,
table.column .right-text-pad,
table.column .text-pad-right {
  padding-right: 10px;
}

/* Block Grid */

.block-grid {
  width: 100%;
  max-width: 580px;
}

.block-grid td {
  display: inline-block;
  padding:10px;
}

.two-up td {
  width:270px;
}

.three-up td {
  width:173px;
}

.four-up td {
  width:125px;
}

.five-up td {
  width:96px;
}

.six-up td {
  width:76px;
}

.seven-up td {
  width:62px;
}

.eight-up td {
  width:52px;
}

/* Alignment & Visibility Classes */

table.center, td.center {
  text-align: center;
}

h1.center,
h2.center,
h3.center,
h4.center,
h5.center,
h6.center {
  text-align: center;
}

span.center {
  display: block;
  width: 100%;
  text-align: center;
}

img.center {
  margin: 0 auto;
  float: none;
}

.show-for-small,
.hide-for-desktop {
  display: none;
}

/* Typography */

body, table.body, h1, h2, h3, h4, h5, h6, p, td { 
  color: #222222;
  font-family: "Helvetica", "Arial", sans-serif; 
  font-weight: normal; 
  padding:0; 
  margin: 0;
  text-align: left; 
  line-height: 1.3;
}

h1, h2, h3, h4, h5, h6 {
  word-break: normal;
}

h1 {font-size: 40px;}
h2 {font-size: 36px;}
h3 {font-size: 32px;}
h4 {font-size: 28px;}
h5 {font-size: 24px;}
h6 {font-size: 20px;}
body, table.body, p, td {font-size: 14px;line-height:19px;}

p.lead, p.lede, p.leed {
  font-size: 18px;
  line-height:21px;
}

p { 
  margin-bottom: 10px;
}

small {
  font-size: 10px;
}

a {
  color: #2ba6cb; 
  text-decoration: none;
}

a:hover { 
  color: #2795b6 !important;
}

a:active { 
  color: #2795b6 !important;
}

a:visited { 
  color: #2ba6cb !important;
}

h1 a, 
h2 a, 
h3 a, 
h4 a, 
h5 a, 
h6 a {
  color: #2ba6cb;
}

h1 a:active, 
h2 a:active,  
h3 a:active, 
h4 a:active, 
h5 a:active, 
h6 a:active { 
  color: #2ba6cb !important; 
} 

h1 a:visited, 
h2 a:visited,  
h3 a:visited, 
h4 a:visited, 
h5 a:visited, 
h6 a:visited { 
  color: #2ba6cb !important; 
} 

/* Panels */

.panel {
  background: #f2f2f2;
  border: 1px solid #d9d9d9;
  padding: 10px !important;
}

.sub-grid table {
  width: 100%;
}

.sub-grid td.sub-columns {
  padding-bottom: 0;
}

/* Buttons */

table.button,
table.tiny-button,
table.small-button,
table.medium-button,
table.large-button {
  width: 100%;
  overflow: hidden;
}

table.button td,
table.tiny-button td,
table.small-button td,
table.medium-button td,
table.large-button td {
  display: block;
  width: auto !important;
  text-align: center;
  background: #2ba6cb;
  border: 1px solid #2284a1;
  color: #ffffff;
  padding: 8px 0;
}

table.tiny-button td {
  padding: 5px 0 4px;
}

table.small-button td {
  padding: 8px 0 7px;
}

table.medium-button td {
  padding: 12px 0 10px;
}

table.large-button td {
  padding: 21px 0 18px;
}

table.button td a,
table.tiny-button td a,
table.small-button td a,
table.medium-button td a,
table.large-button td a {
  font-weight: bold;
  text-decoration: none;
  font-family: Helvetica, Arial, sans-serif;
  color: #ffffff;
  font-size: 16px;
}

table.tiny-button td a {
  font-size: 12px;
  font-weight: normal;
}

table.small-button td a {
  font-size: 16px;
}

table.medium-button td a {
  font-size: 20px;
}

table.large-button td a {
  font-size: 24px;
}

table.button:hover td,
table.button:visited td,
table.button:active td {
  background: #2795b6 !important;
}

table.button:hover td a,
table.button:visited td a,
table.button:active td a {
  color: #fff !important;
}

table.button:hover td,
table.tiny-button:hover td,
table.small-button:hover td,
table.medium-button:hover td,
table.large-button:hover td {
  background: #2795b6 !important;
}

table.button:hover td a,
table.button:active td a,
table.button td a:visited,
table.tiny-button:hover td a,
table.tiny-button:active td a,
table.tiny-button td a:visited,
table.small-button:hover td a,
table.small-button:active td a,
table.small-button td a:visited,
table.medium-button:hover td a,
table.medium-button:active td a,
table.medium-button td a:visited,
table.large-button:hover td a,
table.large-button:active td a,
table.large-button td a:visited {
  color: #ffffff !important; 
}

table.secondary td {
  background: #e9e9e9;
  border-color: #d0d0d0;
  color: #555;
}

table.secondary td a {
  color: #555;
}

table.secondary:hover td {
  background: #d0d0d0 !important;
  color: #555;
}

table.secondary:hover td a,
table.secondary td a:visited,
table.secondary:active td a {
  color: #555 !important;
}

table.success td {
  background: #5da423;
  border-color: #457a1a;
}

table.success:hover td {
  background: #457a1a !important;
}

table.alert td {
  background: #c60f13;
  border-color: #970b0e;
}

table.alert:hover td {
  background: #970b0e !important;
}

table.radius td {
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
}

table.round td {
  -webkit-border-radius: 500px;
  -moz-border-radius: 500px;
  border-radius: 500px;
}

/* Outlook First */

body.outlook p {
  display: inline !important;
}

/*  Media Queries */

@media only screen and (max-width: 600px) {

  table[class="body"] img {
    width: auto !important;
    height: auto !important;
  }

  table[class="body"] center {
    min-width: 0 !important;
  }

  table[class="body"] .container {
    width: 95% !important;
  }

  table[class="body"] .row {
    width: 100% !important;
    display: block !important;
  }

  table[class="body"] .wrapper {
    display: block !important;
    padding-right: 0 !important;
  }

  table[class="body"] .columns,
  table[class="body"] .column {
    table-layout: fixed !important;
    float: none !important;
    width: 100% !important;
    padding-right: 0px !important;
    padding-left: 0px !important;
    display: block !important;
  }

  table[class="body"] .wrapper.first .columns,
  table[class="body"] .wrapper.first .column {
    display: table !important;
  }

  table[class="body"] table.columns td,
  table[class="body"] table.column td {
    width: 100% !important;
  }

  table[class="body"] .columns td.one,
  table[class="body"] .column td.one { width: 8.333333% !important; }
  table[class="body"] .columns td.two,
  table[class="body"] .column td.two { width: 16.666666% !important; }
  table[class="body"] .columns td.three,
  table[class="body"] .column td.three { width: 25% !important; }
  table[class="body"] .columns td.four,
  table[class="body"] .column td.four { width: 33.333333% !important; }
  table[class="body"] .columns td.five,
  table[class="body"] .column td.five { width: 41.666666% !important; }
  table[class="body"] .columns td.six,
  table[class="body"] .column td.six { width: 50% !important; }
  table[class="body"] .columns td.seven,
  table[class="body"] .column td.seven { width: 58.333333% !important; }
  table[class="body"] .columns td.eight,
  table[class="body"] .column td.eight { width: 66.666666% !important; }
  table[class="body"] .columns td.nine,
  table[class="body"] .column td.nine { width: 75% !important; }
  table[class="body"] .columns td.ten,
  table[class="body"] .column td.ten { width: 83.333333% !important; }
  table[class="body"] .columns td.eleven,
  table[class="body"] .column td.eleven { width: 91.666666% !important; }
  table[class="body"] .columns td.twelve,
  table[class="body"] .column td.twelve { width: 100% !important; }

  table[class="body"] td.offset-by-one,
  table[class="body"] td.offset-by-two,
  table[class="body"] td.offset-by-three,
  table[class="body"] td.offset-by-four,
  table[class="body"] td.offset-by-five,
  table[class="body"] td.offset-by-six,
  table[class="body"] td.offset-by-seven,
  table[class="body"] td.offset-by-eight,
  table[class="body"] td.offset-by-nine,
  table[class="body"] td.offset-by-ten,
  table[class="body"] td.offset-by-eleven {
    padding-left: 0 !important;
  }

  table[class="body"] table.columns td.expander {
    width: 1px !important;
  }

  table[class="body"] .right-text-pad,
  table[class="body"] .text-pad-right {
    padding-left: 10px !important;
  }

  table[class="body"] .left-text-pad,
  table[class="body"] .text-pad-left {
    padding-right: 10px !important;
  }

  table[class="body"] .hide-for-small,
  table[class="body"] .show-for-desktop {
    display: none !important;
  }

  table[class="body"] .show-for-small,
  table[class="body"] .hide-for-desktop {
    display: inherit !important;
  }
}

  </style>
</head>
<body>
	<table class="body">
		<tr>
			<td class="center" align="center" valign="top">
        <center>

          <table class="row header">
            <tr>
              <td class="center" align="center">
                <center>

                  <table class="container">
                    <tr>
                      <td class="wrapper last">

                        <table class="twelve columns">
                          <tr>
                            <td class="six sub-columns" style="background: black; height: 40px; text-align: center; color: #fff">
                              <div style="font-size: 30px; padding-top: 15px">Subliminal Prime</div>
                            </td>
                            <td class="six sub-columns last" style="text-align:right; vertical-align:middle;">
                            </td>
                            <td class="expander"></td>
                          </tr>
                        </table>

                      </td>
                    </tr>
                  </table>

                </center>
              </td>
            </tr>
          </table>

          <table class="container">
            <tr>
              <td>

                <table class="row">
                  <tr>
                    <td class="wrapper last">

                      <table class="twelve columns">
                        <tr>
                          <td>
                            <h1 style="padding-top: 20px">Dear user,</h1>
                						<p class="lead" style="padding-top: 15px">Thank you for subscribing to SubliminalPrime.</p>
                						<p class="lead">Please confirm your email address by clicking on the link below.</p>
                          </td>
                          <td class="expander"></td>
                        </tr>
                      </table>

                    </td>
                  </tr>
                </table>

                <table class="row callout">
                  <tr>
                    <td class="wrapper last">

                      <table class="twelve columns">
                        <tr>
                          <td class="panel">
                            <p><a href="http://subliminalprime.com/verification.php?email='.$email.'">Click here</a> to verify your email address.</p>
                          </td>
                          <td class="expander"></td>
                        </tr>
                      </table>

                    </td>
                  </tr>
                </table>

                <table class="row">
                  <tr>
                    <td class="wrapper last">

                      <table class="twelve columns">
                        <tr>
                          <td style="padding-top: 20px">
                            <p class="lead">Thank you,<br>Subliminal Prime Team</p>
                          </td>
                          <td class="expander"></td>
                        </tr>
                      </table>

                    </td>
                  </tr>
                </table>

              <!-- container end below -->
              </td>
            </tr>
          </table>

        </center>
			</td>
		</tr>
	</table>
</body>
</html>';
    
    $confirm_page = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style type="text/css">
.font-sans-serif {
  font-family: sans-serif;
}
.font-avenir {
  font-family: Avenir, sans-serif;
}
.mso .wrapper .font-avenir {
  font-family: sans-serif !important;
}
.font-lato {
  font-family: Lato, Tahoma, sans-serif;
}
.mso .wrapper .font-lato {
  font-family: Tahoma, sans-serif !important;
}
.font-cabin {
  font-family: Cabin, Avenir, sans-serif;
}
.mso .wrapper .font-cabin {
  font-family: sans-serif !important;
}
.font-open-Sans {
  font-family: "Open Sans", sans-serif;
}
.mso .wrapper .font-open-Sans {
  font-family: sans-serif !important;
}
.font-roboto {
  font-family: Roboto, Tahoma, sans-serif;
}
.mso .wrapper .font-roboto {
  font-family: Tahoma, sans-serif !important;
}
.font-ubuntu {
  font-family: Ubuntu, sans-serif;
}
.mso .wrapper .font-ubuntu {
  font-family: sans-serif !important;
}
.font-pt-sans {
  font-family: "PT Sans", "Trebuchet MS", sans-serif;
}
.mso .wrapper .font-pt-sans {
  font-family: "Trebuchet MS", sans-serif !important;
}
.font-georgia {
  font-family: Georgia, serif;
}
.font-merriweather {
  font-family: Merriweather, Georgia, serif;
}
.mso .wrapper .font-merriweather {
  font-family: Georgia, serif !important;
}
.font-bitter {
  font-family: Bitter, Georgia, serif;
}
.mso .wrapper .font-bitter {
  font-family: Georgia, serif !important;
}
.font-pt-serif {
  font-family: "PT Serif", Georgia, serif;
}
.mso .wrapper .font-pt-serif {
  font-family: Georgia, serif !important;
}
.font-pompiere {
  font-family: Pompiere, "Trebuchet MS", sans-serif;
}
.mso .wrapper .font-pompiere {
  font-family: "Trebuchet MS", sans-serif !important;
}
.font-roboto-slab {
  font-family: "Roboto Slab", Georgia, serif;
}
.mso .wrapper .font-roboto-slab {
  font-family: Georgia, serif !important;
}
@media only screen and (max-width: 620px) {
  .wrapper .column .size-8 {
    font-size: 8px !important;
    line-height: 14px !important;
  }
  .wrapper .column .size-9 {
    font-size: 9px !important;
    line-height: 16px !important;
  }
  .wrapper .column .size-10 {
    font-size: 10px !important;
    line-height: 18px !important;
  }
  .wrapper .column .size-11 {
    font-size: 11px !important;
    line-height: 19px !important;
  }
  .wrapper .column .size-12 {
    font-size: 12px !important;
    line-height: 19px !important;
  }
  .wrapper .column .size-13 {
    font-size: 13px !important;
    line-height: 21px !important;
  }
  .wrapper .column .size-14 {
    font-size: 14px !important;
    line-height: 21px !important;
  }
  .wrapper .column .size-15 {
    font-size: 15px !important;
    line-height: 23px !important;
  }
  .wrapper .column .size-16 {
    font-size: 16px !important;
    line-height: 24px !important;
  }
  .wrapper .column .size-17 {
    font-size: 17px !important;
    line-height: 26px !important;
  }
  .wrapper .column .size-18 {
    font-size: 17px !important;
    line-height: 26px !important;
  }
  .wrapper .column .size-20 {
    font-size: 17px !important;
    line-height: 26px !important;
  }
  .wrapper .column .size-22 {
    font-size: 18px !important;
    line-height: 26px !important;
  }
  .wrapper .column .size-24 {
    font-size: 20px !important;
    line-height: 28px !important;
  }
  .wrapper .column .size-26 {
    font-size: 22px !important;
    line-height: 31px !important;
  }
  .wrapper .column .size-28 {
    font-size: 24px !important;
    line-height: 32px !important;
  }
  .wrapper .column .size-30 {
    font-size: 26px !important;
    line-height: 34px !important;
  }
  .wrapper .column .size-32 {
    font-size: 28px !important;
    line-height: 36px !important;
  }
  .wrapper .column .size-34 {
    font-size: 30px !important;
    line-height: 38px !important;
  }
  .wrapper .column .size-36 {
    font-size: 30px !important;
    line-height: 38px !important;
  }
  .wrapper .column .size-40 {
    font-size: 32px !important;
    line-height: 40px !important;
  }
  .wrapper .column .size-44 {
    font-size: 34px !important;
    line-height: 43px !important;
  }
  .wrapper .column .size-48 {
    font-size: 36px !important;
    line-height: 43px !important;
  }
  .wrapper .column .size-56 {
    font-size: 40px !important;
    line-height: 47px !important;
  }
  .wrapper .column .size-64 {
    font-size: 44px !important;
    line-height: 50px !important;
  }
}
body {
  margin: 0;
  padding: 0;
  min-width: 100%;
}
.mso body {
  mso-line-height-rule: exactly;
}
.no-padding .wrapper .column .column-top,
.no-padding .wrapper .column .column-bottom {
  font-size: 0px;
  line-height: 0px;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
}
td {
  padding: 0;
  vertical-align: top;
}
.spacer,
.border {
  font-size: 1px;
  line-height: 1px;
}
.spacer {
  width: 100%;
}
img {
  border: 0;
  -ms-interpolation-mode: bicubic;
}
.image {
  font-size: 12px;
  mso-line-height-rule: at-least;
}
.image img {
  display: block;
}
.logo {
  mso-line-height-rule: at-least;
}
.logo img {
  display: block;
}
strong {
  font-weight: bold;
}
h1,
h2,
h3,
p,
ol,
ul,
blockquote,
.image {
  font-style: normal;
  font-weight: 400;
}
ol,
ul,
li {
  padding-left: 0;
}
blockquote {
  Margin-left: 0;
  Margin-right: 0;
  padding-right: 0;
}
.column-top,
.column-bottom {
  font-size: 32px;
  line-height: 32px;
  transition-timing-function: cubic-bezier(0, 0, 0.2, 1);
  transition-duration: 150ms;
  transition-property: all;
}
.half-padding .column .column-top,
.half-padding .column .column-bottom {
  font-size: 16px;
  line-height: 16px;
}
.column {
  text-align: left;
}
.contents {
  table-layout: fixed;
  width: 100%;
}
.padded {
  padding-left: 32px;
  padding-right: 32px;
  word-break: break-word;
  word-wrap: break-word;
}
.wrapper {
  display: table;
  table-layout: fixed;
  width: 100%;
  min-width: 620px;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
}
.wrapper a {
  transition: opacity 0.2s ease-in;
}
table.wrapper {
  table-layout: fixed;
}
.one-col,
.two-col,
.three-col {
  Margin-left: auto;
  Margin-right: auto;
  width: 600px;
}
.centered {
  Margin-left: auto;
  Margin-right: auto;
}
.btn a {
  border-radius: 3px;
  display: inline-block;
  font-size: 14px;
  font-weight: 700;
  line-height: 24px;
  padding: 13px 35px 12px 35px;
  text-align: center;
  text-decoration: none !important;
}
.btn a:hover {
  opacity: 0.8;
}
.two-col .btn a {
  font-size: 12px;
  line-height: 22px;
  padding: 10px 28px;
}
.three-col .btn a,
.two-col .column-narrower .btn a {
  font-size: 11px;
  line-height: 19px;
  padding: 6px 18px 5px 18px;
}
@media only screen and (max-width: 620px) {
  .btn a {
    display: block !important;
    font-size: 14px !important;
    line-height: 24px !important;
    padding: 13px 10px 12px 10px !important;
  }
}
.two-col .column {
  width: 290px;
}
.two-col .gutter {
  width: 20px;
  font-size: 1px;
  line-height: 1px;
}
.three-col .column-top,
.three-col .column-bottom {
  font-size: 20px;
  line-height: 20px;
}
.half-padding .three-col .column-top,
.half-padding .three-col .column-bottom {
  font-size: 10px;
  line-height: 10px;
}
.three-col .column,
.two-col .column-narrower {
  width: 190px;
}
.three-col .gutter {
  width: 15px;
  font-size: 1px;
  line-height: 1px;
}
.three-col .padded {
  padding-left: 20px;
  padding-right: 20px;
}
.wider {
  width: 390px;
}
.narrower {
  width: 190px;
}
@media only screen and (min-width: 0) {
  .wrapper {
    text-rendering: optimizeLegibility;
  }
}
@media only screen and (max-width: 620px) {
  [class=wrapper] {
    min-width: 280px !important;
    width: 100% !important;
  }
  [class=wrapper] .one-col,
  [class=wrapper] .two-col,
  [class=wrapper] .three-col {
    width: 280px !important;
  }
  [class=wrapper] .column,
  [class=wrapper] .gutter {
    display: block;
    float: left;
    width: 280px !important;
  }
  [class=wrapper] .padded {
    padding-left: 20px !important;
    padding-right: 20px !important;
  }
  [class=wrapper] .block {
    display: block !important;
  }
  [class=wrapper] .hide {
    display: none !important;
  }
  [class=wrapper] .image img {
    height: auto !important;
    width: 100% !important;
  }
}
.footer {
  width: 100%;
}
.footer .inner {
  padding: 58px 0 29px 0;
  width: 600px;
}
.footer .left td,
.footer .right td {
  font-size: 12px;
  line-height: 22px;
}
.footer .left td {
  text-align: left;
  width: 400px;
}
.footer .right td {
  max-width: 200px;
  mso-line-height-rule: at-least;
}
.footer .links {
  line-height: 26px;
  Margin-bottom: 26px;
  mso-line-height-rule: at-least;
}
.footer .links a:hover {
  opacity: 0.8;
}
.footer .links img {
  vertical-align: middle;
}
.footer .address {
  Margin-bottom: 18px;
}
.footer .campaign {
  Margin-bottom: 18px;
}
.footer .campaign a {
  font-weight: bold;
  text-decoration: none;
}
.footer .sharing div {
  Margin-bottom: 5px;
}
.wrapper .footer .fblike,
.wrapper .footer .tweet,
.wrapper .footer .linkedinshare,
.wrapper .footer .forwardtoafriend {
  background-repeat: no-repeat;
  background-size: 200px 56px;
  border-radius: 2px;
  color: #ffffff;
  display: block;
  font-size: 11px;
  font-weight: bold;
  line-height: 11px;
  padding: 8px 11px 7px 28px;
  text-align: left;
  text-decoration: none;
}
.wrapper .footer .fblike:hover,
.wrapper .footer .tweet:hover,
.wrapper .footer .linkedinshare:hover,
.wrapper .footer .forwardtoafriend:hover {
  color: #ffffff !important;
  opacity: 0.8;
}
.footer .fblike {
  background-image: url(https://i9.createsend1.com/static/eb/master/09-onyx/imgf/fblike.png);
}
.footer .tweet {
  background-image: url(https://i10.createsend1.com/static/eb/master/09-onyx/imgf/tweet.png);
}
.footer .linkedinshare {
  background-image: url(https://i1.createsend1.com/static/eb/master/09-onyx/imgf/lishare.png);
}
.footer .forwardtoafriend {
  background-image: url(https://i2.createsend1.com/static/eb/master/09-onyx/imgf/forward.png);
}
@media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min--moz-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2/1), only screen and (min-device-pixel-ratio: 2), only screen and (min-resolution: 192dpi), only screen and (min-resolution: 2dppx) {
  .footer .fblike {
    background-image: url(https://i3.createsend1.com/static/eb/master/09-onyx/imgf/fblike@2x.png) !important;
  }
  .footer .tweet {
    background-image: url(https://i4.createsend1.com/static/eb/master/09-onyx/imgf/tweet@2x.png) !important;
  }
  .footer .linkedinshare {
    background-image: url(https://i6.createsend1.com/static/eb/master/09-onyx/imgf/lishare@2x.png) !important;
  }
  .footer .forwardtoafriend {
    background-image: url(https://i5.createsend1.com/static/eb/master/09-onyx/imgf/forward@2x.png) !important;
  }
}
@media only screen and (max-width: 620px) {
  .footer {
    width: 280px !important;
  }
  .footer td {
    display: none;
  }
  .footer .inner,
  .footer .inner td {
    display: block;
    text-align: center !important;
    max-width: 280px !important;
    width: 280px !important;
  }
  .footer .sharing {
    Margin-bottom: 40px;
  }
  .footer .sharing div {
    display: inline-block;
  }
  .footer .fblike,
  .footer .tweet,
  .footer .linkedinshare,
  .footer .forwardtoafriend {
    display: inline-block !important;
  }
}
.wrapper h1,
.wrapper h2,
.wrapper h3,
.wrapper p,
.wrapper ol,
.wrapper ul,
.wrapper li,
.wrapper blockquote,
.image,
.btn,
.divider {
  Margin-bottom: 0;
  Margin-top: 0;
}
.wrapper .column h1 + * {
  Margin-top: 16px;
}
.wrapper .column h2 + * {
  Margin-top: 14px;
}
.wrapper .column h3 + * {
  Margin-top: 12px;
}
.wrapper .column p + *,
.wrapper .column ol + *,
.wrapper .column ul + *,
.wrapper .column blockquote + *,
.image + .contents td > :first-child {
  Margin-top: 32px;
}
.wrapper .column li + * {
  Margin-top: 10px;
}
.contents:nth-last-child(n+3) h1:last-child,
.no-padding .contents:nth-last-child(n+2) h1:last-child {
  Margin-bottom: 16px;
}
.contents:nth-last-child(n+3) h2:last-child,
.no-padding .contents:nth-last-child(n+2) h2:last-child {
  Margin-bottom: 14px;
}
.contents:nth-last-child(n+3) h3:last-child,
.no-padding .contents:nth-last-child(n+2) h3:last-child {
  Margin-bottom: 12px;
}
.contents:nth-last-child(n+3) p:last-child,
.no-padding .contents:nth-last-child(n+2) p:last-child,
.contents:nth-last-child(n+3) ol:last-child,
.no-padding .contents:nth-last-child(n+2) ol:last-child,
.contents:nth-last-child(n+3) ul:last-child,
.no-padding .contents:nth-last-child(n+2) ul:last-child,
.contents:nth-last-child(n+3) blockquote:last-child,
.no-padding .contents:nth-last-child(n+2) blockquote:last-child,
.contents:nth-last-child(n+3) .image,
.no-padding .contents:nth-last-child(n+2) .image,
.contents:nth-last-child(n+3) .divider,
.no-padding .contents:nth-last-child(n+2) .divider,
.contents:nth-last-child(n+3) .btn,
.no-padding .contents:nth-last-child(n+2) .btn {
  Margin-bottom: 32px;
}
.two-col .column p + *,
.two-col .column ol + *,
.two-col .column ul + *,
.two-col .column blockquote + *,
.two-col .image + .contents td > :first-child {
  Margin-top: 32px;
}
.two-col .contents:nth-last-child(n+3) p:last-child,
.no-padding .two-col .contents:nth-last-child(n+2) p:last-child,
.two-col .contents:nth-last-child(n+3) ol:last-child,
.no-padding .two-col .contents:nth-last-child(n+2) ol:last-child,
.two-col .contents:nth-last-child(n+3) ul:last-child,
.no-padding .two-col .contents:nth-last-child(n+2) ul:last-child,
.two-col .contents:nth-last-child(n+3) blockquote:last-child,
.no-padding .two-col .contents:nth-last-child(n+2) blockquote:last-child,
.two-col .contents:nth-last-child(n+3) .image,
.no-padding .two-col .contents:nth-last-child(n+2) .image,
.two-col .contents:nth-last-child(n+3) .divider,
.no-padding .two-col .contents:nth-last-child(n+2) .divider,
.two-col .contents:nth-last-child(n+3) .btn,
.no-padding .two-col .contents:nth-last-child(n+2) .btn {
  Margin-bottom: 32px;
}
.three-col .column p + *,
.tw-col .column-narrower .column p + *,
.three-col .column ol + *,
.tw-col .column-narrower .column ol + *,
.three-col .column ul + *,
.tw-col .column-narrower .column ul + *,
.three-col .column blockquote + *,
.tw-col .column-narrower .column blockquote + *,
.three-col .image + .contents td > :first-child,
.tw-col .column-narrower .image + .contents td > :first-child,
.two-col .column-narrower p + *,
.two-col .column-narrower ol + *,
.two-col .column-narrower ul + *,
.two-col .column-narrower blockquote + * {
  Margin-top: 20px;
}
.three-col .contents:nth-last-child(n+3) p:last-child,
.two-col .column-narrower .contents:nth-last-child(n+3) p:last-child,
.no-padding .three-col .contents:nth-last-child(n+2) p:last-child,
.no-padding .two-col .column-narrower .contents:nth-last-child(n+2) p:last-child,
.three-col .contents:nth-last-child(n+3) ol:last-child,
.two-col .column-narrower .contents:nth-last-child(n+3) ol:last-child,
.no-padding .three-col .contents:nth-last-child(n+2) ol:last-child,
.no-padding .two-col .column-narrower .contents:nth-last-child(n+2) ol:last-child,
.three-col .contents:nth-last-child(n+3) ul:last-child,
.two-col .column-narrower .contents:nth-last-child(n+3) ul:last-child,
.no-padding .three-col .contents:nth-last-child(n+2) ul:last-child,
.no-padding .two-col .column-narrower .contents:nth-last-child(n+2) ul:last-child,
.three-col .contents:nth-last-child(n+3) blockquote:last-child,
.two-col .column-narrower .contents:nth-last-child(n+3) blockquote:last-child,
.no-padding .three-col .contents:nth-last-child(n+2) blockquote:last-child,
.no-padding .two-col .column-narrower .contents:nth-last-child(n+2) blockquote:last-child,
.three-col .contents:nth-last-child(n+3) .image,
.two-col .column-narrower .contents:nth-last-child(n+3) .image,
.no-padding .three-col .contents:nth-last-child(n+2) .image,
.no-padding .two-col .column-narrower .contents:nth-last-child(n+2) .image,
.three-col .contents:nth-last-child(n+3) .divider,
.two-col .column-narrower .contents:nth-last-child(n+3) .divider,
.no-padding .three-col .contents:nth-last-child(n+2) .divider,
.no-padding .two-col .column-narrower .contents:nth-last-child(n+2) .divider,
.three-col .contents:nth-last-child(n+3) .btn,
.two-col .column-narrower .contents:nth-last-child(n+3) .btn,
.no-padding .three-col .contents:nth-last-child(n+2) .btn,
.no-padding .two-col .column-narrower .contents:nth-last-child(n+2) .btn {
  Margin-bottom: 20px;
}
@media only screen and (max-width: 620px) {
  .wrapper p + *,
  .wrapper ol + *,
  .wrapper ul + *,
  .wrapper blockquote + *,
  .image + .contents td > :first-child {
    Margin-top: 32px !important;
  }
  .contents:nth-last-child(n+3) p:last-child,
  .no-padding .contents:nth-last-child(n+2) p:last-child,
  .contents:nth-last-child(n+3) ol:last-child,
  .no-padding .contents:nth-last-child(n+2) ol:last-child,
  .contents:nth-last-child(n+3) ul:last-child,
  .no-padding .contents:nth-last-child(n+2) ul:last-child,
  .contents:nth-last-child(n+3) blockquote:last-child,
  .no-padding .contents:nth-last-child(n+2) blockquote:last-child,
  .contents:nth-last-child(n+3) .image:last-child,
  .no-padding .contents:nth-last-child(n+2) .image:last-child,
  .contents:nth-last-child(n+3) .divider:last-child,
  .no-padding .contents:nth-last-child(n+2) .divider:last-child,
  .contents:nth-last-child(n+3) .btn:last-child,
  .no-padding .contents:nth-last-child(n+2) .btn:last-child {
    Margin-bottom: 32px !important;
  }
}
.column table,
.padded table {
  width: 100%;
}
.preheader {
  width: 100%;
}
.preheader .title,
.preheader .webversion {
  font-size: 11px;
  line-height: 16px;
}
.preheader .title {
  padding: 9px;
  text-align: left;
}
.preheader .webversion {
  padding: 9px;
  text-align: right;
  width: 250px;
}
.preheader .webversion a {
  font-weight: bold;
  text-decoration: none;
}
.header {
  width: 100%;
  Margin-left: auto;
  Margin-right: auto;
}
.logo {
  width: 600px;
}
.logo div a {
  text-decoration: none;
}
.logo div.logo-center {
  text-align: center;
}
.logo div.logo-center img {
  Margin-left: auto;
  Margin-right: auto;
}
ul li {
  list-style-type: disc;
  list-style-position: outside;
}
.mso ul li {
  list-style-image: none !important;
  list-style-type: disc !important;
}
.wrapper h1 {
  font-size: 30px;
  line-height: 40px;
}
.wrapper h2 {
  font-size: 20px;
  line-height: 28px;
}
.wrapper h3 {
  font-size: 16px;
  line-height: 24px;
}
.wrapper p,
.wrapper ol,
.wrapper ul {
  font-size: 14px;
  line-height: 22px;
}
.wrapper blockquote {
  Margin-left: 0;
}
.mso .wrapper li {
  padding-left: 5px !important;
  margin-left: 10px !important;
}
.mso .wrapper ol,
.mso .wrapper ul {
  margin-left: 20px !important;
}
.one-col,
.two-col,
.three-col,
.one-col-feature {
  table-layout: fixed;
}
.one-col,
.two-col,
.three-col {
  Margin-left: auto;
  Margin-right: auto;
}
.one-col .padded,
.two-col .padded,
.three-col .padded {
  text-align: left;
}
.one-col blockquote,
.two-col blockquote,
.three-col blockquote {
  background-repeat: no-repeat;
  background-position: 0px 4px;
}
.divider img {
  display: block;
}
.separator {
  font-size: 20px;
  line-height: 20px;
}
.one-col-bg,
.two-col-bg,
.three-col-bg,
.one-col-feature-bg {
  width: 100%;
}
.one-col .padded ul li {
  padding-left: 13px;
}
.one-col ol,
.one-col ul {
  Margin-left: 48px;
}
.one-col ol li,
.one-col ul li {
  padding-left: 13px;
}
.one-col blockquote p {
  font-size: 18px;
  line-height: 26px;
}
.one-col blockquote p,
.one-col blockquote h1,
.one-col blockquote h2,
.one-col blockquote h3,
.one-col blockquote ol,
.one-col blockquote ul {
  padding-left: 60px;
}
.mso .one-col blockquote p,
.mso .one-col blockquote h1,
.mso .one-col blockquote h2,
.mso .one-col blockquote h3,
.mso .one-col blockquote ol,
.mso .one-col blockquote ul {
  padding: 0 !important;
}
.one-col-feature {
  width: 600px;
  Margin-left: auto;
  Margin-right: auto;
}
.one-col-feature h1 a,
.one-col-feature h2 a,
.one-col-feature h3 a,
.one-col-feature p a,
.one-col-feature li a {
  text-decoration: none;
}
.one-col-feature ol {
  Margin-left: 36px;
}
.one-col-feature ol li {
  padding-left: 15px;
}
.one-col-feature ul {
  Margin-left: 30px;
}
.one-col-feature ul li {
  padding-left: 20px;
  line-height: 40px;
}
.one-col-feature ol,
.one-col-feature ul {
  font-size: 26px;
  line-height: 40px;
}
.one-col-feature h1,
.one-col-feature h2,
.one-col-feature h3,
.one-col-feature p,
.one-col-feature .btn {
  text-align: center;
}
.one-col-feature blockquote {
  background-repeat: no-repeat;
  background-position: 100% 100%;
}
.one-col-feature blockquote p:first-child,
.one-col-feature blockquote h1:first-child,
.one-col-feature blockquote h2:first-child,
.one-col-feature blockquote h3:first-child,
.one-col-feature blockquote ol:first-child,
.one-col-feature blockquote ul:first-child {
  padding-top: 27px;
}
.one-col-feature blockquote p,
.one-col-feature blockquote h1,
.one-col-feature blockquote h2,
.one-col-feature blockquote h3,
.one-col-feature blockquote ol,
.one-col-feature blockquote ul {
  background-repeat: no-repeat;
  background-position: 0% 0%;
  font-size: 26px;
  line-height: 40px;
  padding: 0;
}
.one-col-feature blockquote p:last-child,
.one-col-feature blockquote h1:last-child,
.one-col-feature blockquote h2:last-child,
.one-col-feature blockquote h3:last-child,
.one-col-feature blockquote ol:last-child,
.one-col-feature blockquote ul:last-child {
  padding-bottom: 30px;
}
.one-col-feature .divider img {
  display: block;
  Margin-left: auto;
  Margin-right: auto;
}
.two-col ol,
.two-col ul {
  Margin-left: 18px;
}
.two-col li {
  padding-left: 20px;
}
.two-col blockquote p,
.two-col blockquote h1,
.two-col blockquote h2,
.two-col blockquote h3,
.two-col blockquote ol,
.two-col blockquote ul {
  padding-left: 38px;
}
.two-col .column-wider {
  width: 390px;
}
.two-col .column-narrower {
  width: 190px;
}
.three-col .column .padded,
.two-col .column-narrower .padded {
  padding-left: 20px;
  padding-right: 20px;
}
.three-col .column ol,
.three-col .column ul,
.two-col .column-narrower ol,
.two-col .column-narrower ul {
  Margin-left: 18px;
}
.three-col .column ol li,
.three-col .column ul li,
.two-col .column-narrower ol li,
.two-col .column-narrower ul li {
  padding-left: 10px;
}
.three-col .column blockquote p,
.three-col .column blockquote h1,
.three-col .column blockquote h2,
.three-col .column blockquote h3,
.three-col .column blockquote ol,
.three-col .column blockquote ul,
.two-col .column-narrower blockquote p,
.two-col .column-narrower blockquote h1,
.two-col .column-narrower blockquote h2,
.two-col .column-narrower blockquote h3,
.two-col .column-narrower blockquote ol,
.two-col .column-narrower blockquote ul {
  padding-left: 28px;
}
.one-col .column .contents blockquote {
  background-image: url(https://i1.createsend1.com/static/eb/master/09-onyx/images/quote-double-large.png);
}
.two-col .column .contents blockquote {
  background-image: url(https://i7.createsend1.com/static/eb/master/09-onyx/images/quote-double.png);
}
.three-col .column .contents blockquote,
.two-col .column-narrower .contents blockquote {
  background-image: url(https://i9.createsend1.com/static/eb/master/09-onyx/images/quote-single.png);
}
.two-col .column-narrower .contents blockquote {
  background-image: url(https://i9.createsend1.com/static/eb/master/09-onyx/images/quote-single.png);
}
.two-col .column-wider .contents blockquote {
  background-image: url(https://i7.createsend1.com/static/eb/master/09-onyx/images/quote-double.png);
}
.contents ul li {
  list-style-image: url(https://i8.createsend1.com/static/eb/master/09-onyx/images/bullet.png);
}
.one-col-feature .contents ul li {
  list-style-image: url(https://i10.createsend1.com/static/eb/master/09-onyx/images/bullet-large.png);
}
.one-col-feature .contents blockquote {
  background-image: url(https://i2.createsend1.com/static/eb/master/09-onyx/images/quote-bottom-feature.png);
}
.one-col-feature .contents blockquote p:first-child,
.one-col-feature .contents blockquote h1:first-child,
.one-col-feature .contents blockquote h2:first-child,
.one-col-feature .contents blockquote h3:first-child,
.one-col-feature .contents blockquote ol:first-child,
.one-col-feature .contents blockquote ul:first-child {
  background-image: url(https://i3.createsend1.com/static/eb/master/09-onyx/images/quote-top-feature.png);
}
.wrapper blockquote * {
  font-style: italic;
}
@media (-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi) {
  .one-col ul {
    border-left: 30px solid transparent;
  }
}
@media (-webkit-min-device-pixel-ratio: 1.5) and (min-width: 620px), (min-resolution: 144dpi) and (min-width: 620px) {
  .one-col .column .contents ul li {
    padding-left: 38px !important;
  }
  .two-col .column .contents ul li {
    padding-left: 38px !important;
  }
  .three-col .column .contents ul li,
  .two-col .column-narrower .contents ul li {
    padding-left: 28px !important;
  }
  .two-col .column-narrower .contents ul li {
    padding-left: 28px !important;
  }
  .one-col .column .contents blockquote {
    background-size: 40px !important;
    background-image: url(https://i6.createsend1.com/static/eb/master/09-onyx/images/quote-double-large@2x.png);
  }
  .two-col .column .contents blockquote {
    background-size: 28px !important;
    background-image: url(https://i4.createsend1.com/static/eb/master/09-onyx/images/quote-double@2x.png);
  }
  .three-col .column .contents blockquote,
  .two-col .column-narrower .contents blockquote {
    background-size: 15px !important;
    background-image: url(https://i1.createsend1.com/static/eb/master/09-onyx/images/quote-single@2x.png);
  }
  .two-col .column-narrower .contents blockquote {
    background-size: 15px !important;
    background-image: url(https://i1.createsend1.com/static/eb/master/09-onyx/images/quote-single@2x.png);
  }
  .two-col .column-wider .contents blockquote {
    background-size: 28px !important;
    background-image: url(https://i4.createsend1.com/static/eb/master/09-onyx/images/quote-double@2x.png);
  }
}
@media (-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi), (max-width: 620px) {
  [class=wrapper] .one-col-feature blockquote {
    background-size: 30px !important;
    background-image: url(https://i2.createsend1.com/static/eb/master/09-onyx/images/quote-bottom-dark@2x.png) !important;
    background-position: 50% 100% !important;
  }
  [class=wrapper] .one-col-feature blockquote p:first-child,
  [class=wrapper] .one-col-feature blockquote h1:first-child,
  [class=wrapper] .one-col-feature blockquote h2:first-child,
  [class=wrapper] .one-col-feature blockquote h3:first-child,
  [class=wrapper] .one-col-feature blockquote ol:first-child,
  [class=wrapper] .one-col-feature blockquote ul:first-child {
    background-size: 30px !important;
    background-image: url(https://i5.createsend1.com/static/eb/master/09-onyx/images/quote-top-dark@2x.png) !important;
    background-position: 50% 0% !important;
  }
  [class=wrapper] .contents ul li {
    background: transparent url(https://i10.createsend1.com/static/eb/master/09-onyx/images/bullet@2x.png) no-repeat top left !important;
  }
  [class=wrapper] .contents ul {
    margin-left: 0px !important;
  }
  [class=wrapper] .contents ul li {
    list-style-type: none !important;
    list-style-image: none !important;
    background-size: 10px 10px !important;
    background-position: 0 5px !important;
  }
  [class=wrapper] .one-col-feature ul {
    margin-left: 0 !important;
  }
  [class=wrapper] .one-col-feature ul li {
    list-style: none !important;
    background: transparent url(https://i7.createsend1.com/static/eb/master/09-onyx/images/bullet-large@2x.png) no-repeat top left !important;
    background-size: 20px !important;
    background-position: 0 9px !important;
    padding-left: 50px;
  }
}
@media (-webkit-min-device-pixel-ratio: 1.5) and (max-width: 620px), (min-resolution: 144dpi) and (max-width: 620px) {
  [class=wrapper] .one-col ul {
    margin-left: 0 !important;
    border: 0 !important;
  }
  [class=wrapper] .one-col .divider,
  [class=wrapper] .two-col .column .divider,
  [class=wrapper] .two-col .column-narrower .divider,
  [class=wrapper] .two-col .column-wider .divider,
  [class=wrapper] .three-col .divider {
    background-image: url(https://i8.createsend1.com/static/eb/master/09-onyx/images/divider-waves@2x.png) !important;
  }
}
@media only screen and (max-width: 620px) {
  [class=wrapper] .one-col .contents blockquote p,
  [class=wrapper] .two-col .contents blockquote p,
  [class=wrapper] .three-col .contents blockquote p,
  [class=wrapper] .one-col .contents blockquote h1,
  [class=wrapper] .two-col .contents blockquote h1,
  [class=wrapper] .three-col .contents blockquote h1,
  [class=wrapper] .one-col .contents blockquote h2,
  [class=wrapper] .two-col .contents blockquote h2,
  [class=wrapper] .three-col .contents blockquote h2,
  [class=wrapper] .one-col .contents blockquote h3,
  [class=wrapper] .two-col .contents blockquote h3,
  [class=wrapper] .three-col .contents blockquote h3,
  [class=wrapper] .one-col .contents blockquote ol,
  [class=wrapper] .two-col .contents blockquote ol,
  [class=wrapper] .three-col .contents blockquote ol,
  [class=wrapper] .one-col .contents blockquote ul,
  [class=wrapper] .two-col .contents blockquote ul,
  [class=wrapper] .three-col .contents blockquote ul {
    padding-left: 38px !important;
  }
  [class=wrapper] .contents blockquote {
    background-image: url(https://i4.createsend1.com/static/eb/master/09-onyx/images/quote-double@2x.png) !important;
    background-size: 27px !important;
  }
  [class=wrapper] .contents ul li {
    padding-left: 38px !important;
  }
  [class=wrapper] .contents ol li {
    padding-left: 18px !important;
  }
  [class=wrapper] .spacer {
    display: none !important;
  }
  [class=wrapper] .header .logo {
    width: 280px !important;
  }
  [class=wrapper] .header .logo div {
    margin-bottom: 0 !important;
  }
  [class=wrapper] .header .logo div img {
    display: inline-block !important;
    max-width: 280px !important;
    height: auto !important;
  }
  [class=wrapper] .preheader .webversion,
  [class=wrapper] .header .logo a {
    text-align: center !important;
  }
  [class=wrapper] .column-wider,
  [class=wrapper] .column-narrower {
    display: block;
    float: left;
    width: 280px !important;
  }
  [class=wrapper] .one-col-feature {
    width: 280px !important;
  }
  [class=wrapper] .one-col-feature li {
    font-size: 18px !important;
    line-height: 28px !important;
  }
  [class=wrapper] .one-col-feature ol {
    margin-left: 22px !important;
  }
  [class=wrapper] .one-col-feature ol li {
    padding-left: 18px !important;
  }
  [class=wrapper] .one-col-feature ul li {
    background-size: 10px !important;
    padding-left: 40px !important;
  }
  [class=wrapper] .gutter {
    font-size: 10px;
    line-height: 10px;
    height: 10px !important;
  }
  [class=wrapper] table.one-col,
  [class=wrapper] table.one-col-feature,
  [class=wrapper] td.last {
    margin-bottom: 10px !important;
  }
  [class=wrapper] ol,
  [class=wrapper] ul {
    margin-left: 20px !important;
  }
  [class=wrapper] .preheader *[class*="column"] {
    display: block !important;
    text-align: center !important;
  }
  [class=wrapper] .preheader .title {
    display: none !important;
  }
  [class=wrapper] .one-col .divider,
  [class=wrapper] .two-col .column .divider,
  [class=wrapper] .two-col .column-narrower .divider,
  [class=wrapper] .two-col .column-wider .divider,
  [class=wrapper] .three-col .divider {
    background: transparent url(https://i9.createsend1.com/static/eb/master/09-onyx/images/divider-waves.png) repeat center center;
    background-size: auto 6px !important;
  }
  [class=wrapper] .one-col .divider img,
  [class=wrapper] .two-col .column .divider img,
  [class=wrapper] .two-col .column-narrower .divider img,
  [class=wrapper] .two-col .column-wider .divider img,
  [class=wrapper] .three-col .divider img {
    visibility: hidden;
    width: 240px !important;
  }
}
</style>
    <style type="text/css">
    </style>
  <!--[if !mso]><!--><style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Ubuntu:400,700,400italic,700italic);
</style><link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700,400italic,700italic" rel="stylesheet" type="text/css" /><!--<![endif]--><style type="text/css">
.wrapper h1{}.wrapper h1{font-family:Ubuntu,sans-serif}.mso .wrapper h1{font-family:sans-serif !important}.wrapper h2{}.wrapper h2{font-family:Ubuntu,sans-serif}.mso .wrapper h2{font-family:sans-serif !important}.wrapper h3{}.wrapper h3{font-family:Ubuntu,sans-serif}.mso .wrapper h3{font-family:sans-serif !important}.wrapper p,.wrapper ol,.wrapper ul,.wrapper .image{}.wrapper p,.wrapper ol,.wrapper ul,.wrapper .image{font-family:Ubuntu,sans-serif}.mso .wrapper p,.mso .wrapper ol,.mso .wrapper ul,.mso .wrapper .image{font-family:sans-serif !important}.wrapper .btn a{}.wrapper .btn a{font-family:Ubuntu,sans-serif}.mso .wrapper .btn a{font-family:sans-serif !important}.logo div{}.logo div{font-family:Avenir,sans-serif}.mso .logo div{font-family:sans-serif 
!important}.title,.webversion,.fblike,.tweet,.linkedinshare,.forwardtoafriend,.link,.address,.permission,.campaign{}.title,.webversion,.fblike,.tweet,.linkedinshare,.forwardtoafriend,.link,.address,.permission,.campaign{font-family:Ubuntu,sans-serif}.mso .title,.mso .webversion,.mso .fblike,.mso .tweet,.mso .linkedinshare,.mso .forwardtoafriend,.mso .link,.mso .address,.mso .permission,.mso .campaign{font-family:sans-serif !important}body,.wrapper,.emb-editor-canvas{background-color:#171e24}.mso body{background-color:#fff !important}.mso .header,.mso .footer,.mso .one-col-bg,.mso .two-col-bg,.mso .three-col-bg,.mso .one-col-feature-bg{background-color:#171e24}.hr hr{color:#fff;background-color:#fff}.border{background-color:#11161b}.wrapper h1{color:#80bfc4}.wrapper h2{color:#80bfc4}.wrapper h3{color:#80bfc4}.wrapper p,.wrapper ol,.wrapper ul{color:#e0dce0}.wrapper 
.image{color:#e0dce0}.wrapper a{color:#c5dee0}.wrapper a:hover{color:#a4cbce !important}.wrapper .btn a{background-color:#80bfc4;color:#171e24}.wrapper .btn a:hover{color:#171e24 !important}.preheader{background-color:#11161b}.title,.webversion,.footer .inner td{color:#fff}.wrapper .title a,.wrapper .webversion a,.wrapper .footer a{font-weight:bold;color:#fff}.wrapper .title a:hover,.wrapper .webversion a:hover,.wrapper .footer a:hover{color:#fff !important}.logo div{color:#41637e}.logo div a{color:#41637e}.logo div a:hover{color:#41637e !important}.column-bg{background-color:#212a32}.extra-wide .big-feature{background-color:#212a32}.emb-editor-canvas{background-color:#11161b}.emb-editor-canvas .wrapper{background-color:#171e24}.fblike,.tweet,.linkedinshare,.forwardtoafriend{background-color:#0c0f12}
</style><meta name="robots" content="noindex,nofollow" />
<meta property="og:title" content="My First Campaign" />
</head>
<!--[if mso]>
  <body class="mso">
<![endif]-->
<!--[if !mso]><!-->
  <body class="full-padding" style="margin: 0;padding: 0;min-width: 100%;background-color: #171e24;">
<!--<![endif]-->
    <center class="wrapper" style="display: table;table-layout: fixed;width: 100%;min-width: 620px;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;background-color: #171e24;">
      <table class="preheader" style="border-collapse: collapse;border-spacing: 0;width: 100%;background-color: #11161b;">
        <tbody><tr>
          
          
        </tr>
      </tbody></table>
      <div class="spacer" style="font-size: 1px;line-height: 20px;width: 100%;">&nbsp;</div>
      <table class="header centered" style="border-collapse: collapse;border-spacing: 0;Margin-left: auto;Margin-right: auto;width: 100%;">
        <tbody><tr>
          <td style="padding: 0;vertical-align: top;">&nbsp;</td>
          <td class="logo emb-logo-padding-box" style="padding: 0;vertical-align: top;mso-line-height-rule: at-least;width: 600px;padding-top: 20px;padding-bottom: 26px;"><div class="logo-center" style="font-family: Avenir,sans-serif;color: #41637e;text-align: center;font-size: 0px !important;line-height: 0 !important;" align="center" id="emb-email-header"><a style="transition: opacity 0.2s ease-in;color: #41637e;text-decoration: none;" href="http://subliminalprime.com/"><img style="border: 0;-ms-interpolation-mode: bicubic;display: block;Margin-left: auto;Margin-right: auto;max-width: 166px;" src="img/prime.png" alt="" width="166" height="120" /></a></div></td>
          <td style="padding: 0;vertical-align: top;">&nbsp;</td>
        </tr>
      </tbody></table>
      
          <table class="one-col-bg" style="border-collapse: collapse;border-spacing: 0;width: 100%;">
            <tbody><tr>
              <td style="padding: 0;vertical-align: top;" align="center">
                <table class="one-col centered column-bg" style="border-collapse: collapse;border-spacing: 0;Margin-left: auto;Margin-right: auto;background-color: #212a32;width: 600px;table-layout: fixed;">
                  <tbody><tr>
                    <td class="column" style="padding: 0;vertical-align: top;text-align: left;">
                      
            <div class="image" style="font-size: 12px;mso-line-height-rule: at-least;font-style: normal;font-weight: 400;Margin-bottom: 0;Margin-top: 0;font-family: Ubuntu,sans-serif;color: #e0dce0;" align="center">
              <img class="gnd-corner-image gnd-corner-image-center gnd-corner-image-top" style="border: 0;-ms-interpolation-mode: bicubic;display: block;max-width: 640px;" src="img/sunrise-small.jpg" alt="" width="600" height="399" />
            </div>
          
                        <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%;">
                          <tbody><tr>
                            <td class="padded" style="padding: 0;vertical-align: top;padding-left: 32px;padding-right: 32px;word-break: break-word;word-wrap: break-word;text-align: left;">
                              
            <div style="Margin-top: 32px;line-height: 14px;font-size: 1px;">&nbsp;</div>
          
                            </td>
                          </tr>
                        </tbody></table>
                      
                        <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%;">
                          <tbody><tr>
                            <td class="padded" style="padding: 0;vertical-align: top;padding-left: 32px;padding-right: 32px;word-break: break-word;word-wrap: break-word;text-align: left;">
                              
            
<h1 class="size-30" style="font-style: normal;font-weight: 400;Margin-bottom: 0;Margin-top: 0;font-size: 30px;line-height: 38px;font-family: Ubuntu,sans-serif;color: #80bfc4;text-align: left;"><span style="color:#ffffff">Dear user,</span></h1><p class="size-18" style="font-style: normal;font-weight: 400;Margin-bottom: 0;Margin-top: 16px;font-size: 18px;line-height: 26px;font-family: Ubuntu,sans-serif;color: #e0dce0;text-align: left;"><span style="text-align:center"><strong style="font-weight: bold;">Thank you for subscribing to Subliminal Prime. Please confirm your email address by clicking on this <a href="http://subliminalprime.com/verification.php?email='.$email.'">link</a>.</strong>&nbsp;</span></p><h3 class="size-18" style="font-style: normal;font-weight: 400;Margin-bottom: 0;Margin-top: 32px;font-size: 18px;line-height: 26px;font-family: Ubuntu,sans-serif;color: #80bfc4;text-align: left;"><span style="color:#ffffff"><span style="text-align:center">Thank you,</span></span></h3><p class="size-18" style="font-style: 
normal;font-weight: 400;Margin-bottom: 0;Margin-top: 12px;font-size: 18px;line-height: 26px;font-family: Ubuntu,sans-serif;color: #e0dce0;text-align: left;"><span style="text-align:center">Subliminal Prime</span></p><p class="size-18" style="font-style: normal;font-weight: 400;Margin-bottom: 0;Margin-top: 32px;font-size: 18px;line-height: 26px;font-family: Ubuntu,sans-serif;color: #e0dce0;text-align: left;">&nbsp;</p>
          
                            </td>
                          </tr>
                        </tbody></table>
                      
                      <div class="column-bottom" style="font-size: 32px;line-height: 32px;transition-timing-function: cubic-bezier(0, 0, 0.2, 1);transition-duration: 150ms;transition-property: all;">&nbsp;</div>
                    </td>
                  </tr>
                </tbody></table>
              </td>
            </tr>
          </tbody></table>
        
          <div class="separator" style="font-size: 20px;line-height: 20px;">&nbsp;</div>
        
      <table class="footer centered" style="border-collapse: collapse;border-spacing: 0;Margin-left: auto;Margin-right: auto;width: 100%;">
        <tbody><tr>
          <td style="padding: 0;vertical-align: top;">&nbsp;</td>
          <td class="inner" style="padding: 58px 0 29px 0;vertical-align: top;width: 600px;">
            <table class="right" style="border-collapse: collapse;border-spacing: 0;" align="right">
              <tbody><tr>
                <td style="padding: 0;vertical-align: top;color: #fff;font-size: 12px;line-height: 22px;max-width: 200px;mso-line-height-rule: at-least;">
                  <div class="sharing">
                    
                    
                    
                    
                  </div>
                </td>
              </tr>
            </tbody></table>
            <table class="left" style="border-collapse: collapse;border-spacing: 0;" align="left">
              <tbody><tr>
                <td style="padding: 0;vertical-align: top;color: #fff;font-size: 12px;line-height: 22px;text-align: left;width: 400px;">
                  <div class="links emb-web-links" style="line-height: 26px;Margin-bottom: 26px;mso-line-height-rule: at-least;">
                    
<a style="transition: opacity 0.2s ease-in;color: #fff;font-weight: bold;" href="https://facebook.com/subliminalprime"><img style="border: 0;-ms-interpolation-mode: bicubic;vertical-align: middle;" src="https://i7.createsend1.com/static/eb/master/09-onyx/imgf/facebook-sf.png" width="29" height="26" /></a><a style="transition: opacity 0.2s ease-in;color: #fff;font-weight: bold;" href="https://twitter.com/primesubliminal"><img style="border: 0;-ms-interpolation-mode: bicubic;vertical-align: middle;" src="https://i9.createsend1.com/static/eb/master/09-onyx/imgf/twitter-sf.png" width="29" height="26" /></a><a style="transition: opacity 0.2s ease-in;color: #fff;font-weight: bold;" href="https://subliminalprime.com"><img style="border: 0;-ms-interpolation-mode: bicubic;vertical-align: middle;" src="https://i4.createsend1.com/static/eb/master/09-onyx/imgf/website-sf.png" width="29" height="26" /></a>
                  </div>
                  <div class="address" style="font-family: Ubuntu,sans-serif;Margin-bottom: 18px;">
                    
                  </div>
                  <div class="permission" style="font-family: Ubuntu,sans-serif;">
                    
                  </div>
                </td>
              </tr>
            </tbody></table>
          </td>
          <td style="padding: 0;vertical-align: top;">&nbsp;</td>
        </tr>
      </tbody></table>
    </center>
  
</body></html>
';
    return $confirm_page;
}







    function main_page($msg="SubliminalPrime is a psychological service that uses “scrambled sentences” as a diversion and a means to  influence or prime ones behavior, thoughts, or capabilities."){
        
        $page='<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/icon.png"/>
    <title>Subliminal Prime</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <script src="js/jquery.js"></script>
</head>

<body id="page-top" onload="init()" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i><img src="img/icon.png" height="37" width="37"></i>  <span class="light">Subliminal</span> Prime
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <p class="intro-text">'.$msg.'</p>
						
						<form id="form_data" method="POST">
	                <div id ="times" class="overlay show">
                       
		                <span>Mon:</span>
		                <select id="mon" class="form-control" name="mon">
		                 	<option value="none">None</option>
		                 	<option value="0">00:00</option>
							<option value="1">01:00</option>
							<option value="2">02:00</option>
							<option value="3">03:00</option>
							<option value="4">04:00</option>
							<option value="5">05:00</option>
							<option value="6">06:00</option>
							<option value="7">07:00</option>
							<option value="8" selected>08:00</option>
							<option value="9">09:00</option>
							<option value="10">10:00</option>
							<option value="11">11:00</option>
							<option value="12">12:00</option>
							<option value="13">13:00</option>
							<option value="14">14:00</option>
							<option value="15">15:00</option>
							<option value="16">16:00</option>
							<option value="17">17:00</option>
							<option value="18">18:00</option>
							<option value="19">19:00</option>
							<option value="20">20:00</option>
							<option value="21">21:00</option>
							<option value="22">22:00</option>
							<option value="23">23:00</option>
						</select>

		                <span>Tues:</span>
		                <select id="tue" class="form-control" name="tue">
		                 	<option value="none">None</option>
		                 	<option value="0">00:00</option>
							<option value="1">01:00</option>
							<option value="2">02:00</option>
							<option value="3">03:00</option>
							<option value="4">04:00</option>
							<option value="5">05:00</option>
							<option value="6">06:00</option>
							<option value="7">07:00</option>
							<option value="8" selected>08:00</option>
							<option value="9">09:00</option>
							<option value="10">10:00</option>
							<option value="11">11:00</option>
							<option value="12">12:00</option>
							<option value="13">13:00</option>
							<option value="14">14:00</option>
							<option value="15">15:00</option>
							<option value="16">16:00</option>
							<option value="17">17:00</option>
							<option value="18">18:00</option>
							<option value="19">19:00</option>
							<option value="20">20:00</option>
							<option value="21">21:00</option>
							<option value="22">22:00</option>
							<option value="23">23:00</option>
						</select>

		                <span>Wed:</span>
		                <select id="wed" class="form-control" name="wed">
		                 	<option value="none">None</option>
		                 	<option value="0">00:00</option>
							<option value="1">01:00</option>
							<option value="2">02:00</option>
							<option value="3">03:00</option>
							<option value="4">04:00</option>
							<option value="5">05:00</option>
							<option value="6">06:00</option>
							<option value="7">07:00</option>
							<option value="8" selected>08:00</option>
							<option value="9">09:00</option>
							<option value="10">10:00</option>
							<option value="11">11:00</option>
							<option value="12">12:00</option>
							<option value="13">13:00</option>
							<option value="14">14:00</option>
							<option value="15">15:00</option>
							<option value="16">16:00</option>
							<option value="17">17:00</option>
							<option value="18">18:00</option>
							<option value="19">19:00</option>
							<option value="20">20:00</option>
							<option value="21">21:00</option>
							<option value="22">22:00</option>
							<option value="23">23:00</option>
						</select>

		                <span>Thur:</span>
		                <select id="thu" class="form-control" name="thu">
		                 	<option value="none">None</option>
		                 	<option value="0">00:00</option>
							<option value="1">01:00</option>
							<option value="2">02:00</option>
							<option value="3">03:00</option>
							<option value="4">04:00</option>
							<option value="5">05:00</option>
							<option value="6">06:00</option>
							<option value="7">07:00</option>
							<option value="8" selected>08:00</option>
							<option value="9">09:00</option>
							<option value="10">10:00</option>
							<option value="11">11:00</option>
							<option value="12">12:00</option>
							<option value="13">13:00</option>
							<option value="14">14:00</option>
							<option value="15">15:00</option>
							<option value="16">16:00</option>
							<option value="17">17:00</option>
							<option value="18">18:00</option>
							<option value="19">19:00</option>
							<option value="20">20:00</option>
							<option value="21">21:00</option>
							<option value="22">22:00</option>
							<option value="23">23:00</option>
						</select>

		                <span>Fri:</span>
		                <select id="fri" class="form-control" name="fri">
		                 	<option value="none">None</option>
		                 	<option value="0">00:00</option>
							<option value="1">01:00</option>
							<option value="2">02:00</option>
							<option value="3">03:00</option>
							<option value="4">04:00</option>
							<option value="5">05:00</option>
							<option value="6">06:00</option>
							<option value="7">07:00</option>
							<option value="8" selected>08:00</option>
							<option value="9">09:00</option>
							<option value="10">10:00</option>
							<option value="11">11:00</option>
							<option value="12">12:00</option>
							<option value="13">13:00</option>
							<option value="14">14:00</option>
							<option value="15">15:00</option>
							<option value="16">16:00</option>
							<option value="17">17:00</option>
							<option value="18">18:00</option>
							<option value="19">19:00</option>
							<option value="20">20:00</option>
							<option value="21">21:00</option>
							<option value="22">22:00</option>
							<option value="23">23:00</option>
						</select>

		                <span>Sat:</span>
		                <select id="sat" class="form-control" name="sat">
		                 	<option value="none">None</option>
		                 	<option value="0">00:00</option>
							<option value="1">01:00</option>
							<option value="2">02:00</option>
							<option value="3">03:00</option>
							<option value="4">04:00</option>
							<option value="5">05:00</option>
							<option value="6">06:00</option>
							<option value="7">07:00</option>
							<option value="8" selected>08:00</option>
							<option value="9">09:00</option>
							<option value="10">10:00</option>
							<option value="11">11:00</option>
							<option value="12">12:00</option>
							<option value="13">13:00</option>
							<option value="14">14:00</option>
							<option value="15">15:00</option>
							<option value="16">16:00</option>
							<option value="17">17:00</option>
							<option value="18">18:00</option>
							<option value="19">19:00</option>
							<option value="20">20:00</option>
							<option value="21">21:00</option>
							<option value="22">22:00</option>
							<option value="23">23:00</option>
						</select>

		                <span>Sun:</span>
		                <select id="sun" class="form-control" name="sun">
		                 	<option value="none">None</option>
		                 	<option value="0">00:00</option>
							<option value="1">01:00</option>
							<option value="2">02:00</option>
							<option value="3">03:00</option>
							<option value="4">04:00</option>
							<option value="5">05:00</option>
							<option value="6">06:00</option>
							<option value="7">07:00</option>
							<option value="8" selected>08:00</option>
							<option value="9">09:00</option>
							<option value="10">10:00</option>
							<option value="11">11:00</option>
							<option value="12">12:00</option>
							<option value="13">13:00</option>
							<option value="14">14:00</option>
							<option value="15">15:00</option>
							<option value="16">16:00</option>
							<option value="17">17:00</option>
							<option value="18">18:00</option>
							<option value="19">19:00</option>
							<option value="20">20:00</option>
							<option value="21">21:00</option>
							<option value="22">22:00</option>
							<option value="23">23:00</option>
						</select>
                        <input id="sel" type="hidden" name="category" value="confidence">
                        
	                </div>
                    <div class="row" style="padding-top: 40px">
                        <div class="col-md-1">
                        </div>
                        <div class="col-md-2 media media-intro media-border category" id="confidence">
									<h4 class="media-body">Confidence</h4>		
                        </div>
                        <div class="col-md-2 media media-intro category" id="humble">
									<h4 class="media-body">Humbleness</h4>		
                        </div>
                        <div class="col-md-2 media media-intro category" id="forgiveness" style="padding-left:0px; padding-right:0px;">
									<h4 class="media-body">Forgiveness</h4>		
                        </div>
                        <div class="col-md-2 media media-intro category" id="patient">
									<h4 class="media-body">Patience</h4>		
                        </div>
                        <div class="col-md-2 media media-intro category" id="gratitude">
									<h4 class="media-body">Gratitude</h4>
                        </div>
                        <div class="col-md-1">
                        </div>
                    </div>
                
	                <div class="form-inline" role="form">
						<div class="form-group">
							<input class="form-control" type="email" name="email" placeholder="Email" id="email">
						</div>
						<button type="button" onclick="register()" class="btn" style="color: black">Subscribe</button>
                        <button id="cust" type="button" class="btn"><span style="color:black;" class="glyphicon glyphicon-cog"></span></button>
					</div>
                    <br>
                    <p id ="message"> </p>
					</form>
					<br>
                        <a id="scroll-dwn" href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section">
        <div class="panel-group" id="accordion">
            <h2>FAQ</h2>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">What is subliminal priming?</a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body">
                        Subliminal priming is a stimulation on the unconscious mind that increases the probability of a later occurrence 
                        as well as a related cognitive goal. Subliminal priming is commonly used in the advertising industry, where a certain 
                        image, sound or phrase will activate a certain desire among the subject. SubliminalPrime uses “scrambled sentences” 
                        to achieve personal development goals (e.g. being more confident, happy, patient, etc.).
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">What evidence is there that subliminal priming works?</a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body">
                        See this <a href="http://www.psych-it.com.au/Psychlopedia/article.asp?id=109">link</a> for more information.
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Are my details safe?</a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse">
                    <div class="panel-body">
                        Absolutely, your email address is not shared with any third parties and no additional information is requested 
                        by the website.
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">How do I subscribe for the service?</a>
                    </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse">
                    <div class="panel-body">
                        SubliminalPrime makes every effort to make your “subliminal” experience as tailored as possible. You can sign up 
                        for our “Standard” service, that will send you emails from your selected category, everyday, at 08:00, local time. 
                        You can also “Customize” the service, receiving the emails on specific days/times. 
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">How do I unsubscribe from the service?</a>
                    </h4>
                </div>
                <div id="collapseFive" class="panel-collapse collapse">
                    <div class="panel-body">
                        If you wish to unsubscribe from the service, please click the “Unsubscribe” link within any of the emails you receive 
                        from SubliminalPrime. 
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">Can I select different “Primer” categories?</a>
                    </h4>
                </div>
                <div id="collapseSix" class="panel-collapse collapse">
                    <div class="panel-body">
                        Yes. Simply refresh the homepage and then select a different category, followed by your email address.  
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Questions, Comments, Suggestions</h2>
                <p><a href="mailto:joshpalfreman@gmail.com">info@subliminalprime.com</a>
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://twitter.com/primesubliminal" class="btn btn-default btn-lg"><i class="fa fa-twitter-square fa-fw" style="color:#4099FF"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href="https://facebook.com/subliminalprime" class="btn btn-default btn-lg"><i class="fa fa-facebook-square fa-fw " style="color:#3B5998"></i> <span class="network-name">Facebook</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

   

    <!-- Footer -->
    <footer>
    </footer>

	<script>
            $(document).ready(function(){
                
                $("#cust").click(function(){

                    var times = $("#times");
                    //alert(times.hasClass("show"));
                    if (times.hasClass("show")){
                         times.removeClass("show");
                    }
                    else{
                        times.addClass("show");
                    }
                   
                    
                });

            });
        
    </script>
    <script>
        $(document).ready(function(){
            
            $(".category").click(function(){
                $(".category").removeClass("media-border");
              
                $(this).addClass("media-border");
                var category = $(this).attr("id");
                //alert(category);
                document.getElementById("sel").value=category;
            });
        });
    </script>
    <script>
        
    </script>
	<script type="text/javascript">
		function register(){
			if (!validate()){
				return;
			}
				
			var form = document.getElementById("form_data");
            form.action="subscribe.php";
			var formData = new FormData(form);
			
			var xmlhttp;
				if (window.XMLHttpRequest)
					  {// code for IE7+, Firefox, Chrome, Opera, Safari
					  xmlhttp=new XMLHttpRequest();
					  }
					else
					  {// code for IE6, IE5
					  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
					  
					  }
				xmlhttp.onreadystatechange=function()
					  {
						  if (xmlhttp.readyState==4 && xmlhttp.status==200)
							{
							 
							    var info =xmlhttp.responseText;
							    //alert(info);
							    if(info==1){
								    //alert("subscription successfully made");
                                    document.getElementById("message").innerHTML="subscription successful";
                                    document.getElementById("message").style.color="#42dca3";
                                    document.getElementById("form_data").reset();
                                    document.getElementById("times").innerHTML=times;
							    }
							    else{
							
								    //alert("subscription not successfully, it might be due to an incorrect email");
                                    document.getElementById("message").innerHTML="subscription not successfull";
                                    document.getElementById("message").style.color="red";
							    }
						  }
					  }
					  
				
				xmlhttp.open("POST","subscribe.php",true);
				
				xmlhttp.send(formData);

		}

		function validate(){
            var days = ["mon","tue","wed","thu","fri", "sat", "sun"];
            var offset = new Date().getTimezoneOffset()/60;
            document.getElementById("email").value = document.getElementById("email").value.trim();
            var counter =0;
            for (i =0; i<days.length; i++){
                obj = document.getElementById(days[i]);
                day = obj.options[obj.selectedIndex].value;
                
                if(day!="none"){
                   day = parseInt(day);
                   obj.options[obj.selectedIndex].value = day + offset; 
                   counter+=1;
                }
             }
            if(counter==0){
                alert("Error, no time selected");
                return false;
                }
            if (document.getElementById("email").value==""){
                document.getElementById("message").innerHTML="invalid email";
                document.getElementById("message").style.color="red";
                return false;
             }


			return true;
		}

        function init(){
            times = document.getElementById("times").innerHTML;

        }
	</script>
   

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>

</body>

</html>';

        return $page;
    }
?>



<?php
/**
 * @var $this yii\web\View
 * @var $user webvimark\modules\UserManagement\models\User
 */
use yii\helpers\Html;

?>
<?php
$resetLink = Yii::$app->urlManager->createAbsoluteUrl(['/user-management/auth/password-recovery-receive', 'token' => $user->confirmation_token]);
?>





<!doctype html>
<html xmlns:o=urn:schemas-microsoft-com:office:office>
  
  <head>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name=format-detection content=telephone=no>
    <style type=text/css>
      table {
      border-collapse: collapse;
      mso-table-lspace: 0pt;
      mso-table-rspace: 0pt; }
      table td {
      border-collapse: collapse; }
      .ExternalClass {
      width: 100%; }
      .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {
      line-height: 100%; }
      a {
      border: none; }
      a img {
      outline: none;
      text-decoration: none;
      -ms-interpolation-mode: bicubic; }
      html {
      -webkit-text-size-adjust: none !important; }
      a[x-apple-data-detectors] {
      color: inherit !important;
      text-decoration: none !important;
      pointer-events: none !important; }
      .preheader, .ganga-show {
      display: none;
      display: none !important; }
      sup {
      line-height: 1.5;
      font-size: 65%;
      vertical-align: top;
      mso-ansi-font-size: 100%; }
      img.img-g + div {
      display: none; }
      @media yahoo {
      .d-hide, .ganga-show, .preheader {
      display: none;
      display: none !important; } }
    </style>
    <style type=text/css>
      @media screen {
      @font-face {
      font-family: AkkuratNest-Book;
      src: url("http://marketing-assets.nest.com/email-assets/fonts/AkkuratNest/Woff/AkkuratNestWeb-Book.woff");
      }
      @font-face {
      font-family: AkkuratNest-Light;
      src: url("http://marketing-assets.nest.com/email-assets/fonts/AkkuratNest/Woff/AkkuratNestWeb-Light.woff");
      }
      @font-face {
      font-family: AkkuratNest-Regular;
      src: url("http://marketing-assets.nest.com/email-assets/fonts/AkkuratNest/Woff/AkkuratNestWeb-Regular.woff");
      }
      @font-face {
      font-family: AkkuratNest-Bold;
      src: url("http://marketing-assets.nest.com/email-assets/fonts/AkkuratNest/Woff/AkkuratNestWeb-Bold.woff");
      }
      @font-face {
      font-family: AkkuratNest-Medium;
      src: url("http://marketing-assets.nest.com/email-assets/fonts/AkkuratNest/Woff/AkkuratNestWeb-Medium.woff");
      }
      @font-face {
      font-family: GoogleSans-Bold;
      src: url("https://fonts.gstatic.com/s/googlesans/v6/4UabrENHsxJlGDuGo1OIlLV154tzCwZsPF4o.woff2");
      }
      @font-face {
      font-family: GoogleSans-BoldItalic;
      src: url("https://fonts.gstatic.com/s/googlesans/v6/4UaZrENHsxJlGDuGo1OIlL3L-idxOwRmO3wq9Io.woff2");
      }
      @font-face {
      font-family: GoogleSans-Italic;
      src: url("https://fonts.gstatic.com/s/googlesans/v6/4UaErENHsxJlGDuGo1OIlL3L8pxULilENlY.woff2");
      }
      @font-face {
      font-family: GoogleSans-Medium;
      src: url("https://fonts.gstatic.com/s/googlesans/v6/4UabrENHsxJlGDuGo1OIlLU94YtzCwZsPF4o.woff2");
      }
      @font-face {
      font-family: GoogleSans-MediumItalic;
      src: url("https://fonts.gstatic.com/s/googlesans/v6/4UaZrENHsxJlGDuGo1OIlL3L-m93OwRmO3wq9Io.woff2");
      }
      @font-face {
      font-family: GoogleSans-Regular;
      src: url("https://fonts.gstatic.com/s/googlesans/v6/4UaGrENHsxJlGDuGo1OIlL3Owp5eKQtG.woff2");
      }
      }
      @media screen and (-webkit-min-device-pixel-ratio: 0) {
      .gmail-top-line {
      padding-top: 0px !important;
      }
      }
      @media screen and (min-width: 601px) {
      .font-wt-norm {
      font-weight: normal !important;
      }
      .d-hide {
      display: none !important;
      }
      }
      @media screen and (max-width: 600px) {
      #email-container {
      width: 100% !important;
      }
      .font-wt-norm {
      font-weight: normal !important;
      }
      .m-fluid {
      width: 100% !important;
      }
      .side-pad {
      padding-left: 25px !important;
      padding-right: 25px !important;
      }
      .m-display,
      .m-block {
      display: block !important;
      }
      .m-hide {
      display: none !important;
      }
      .logo-cell {
      padding-right: 26px !important;
      }
      .pad-0 {
      padding: 0 !important;
      }
      .pad-tp-0 {
      padding-top: 0px !important;
      }
      .pad-rt-0 {
      padding-right: 0px !important;
      }
      .pad-bot-0 {
      padding-bottom: 0px !important;
      }
      .pad-lt-0 {
      padding-left: 0px !important;
      }
      .pad-lt-rt-0 {
      padding-left: 0 !important;
      padding-right: 0 !important;
      }
      .m-left {
      float: left;
      }
      .m-right {
      float: right;
      }
      .m-center {
      margin: 0 auto;
      text-align: center !important;
      float: none;
      }
      .d-hide {
      display: inline-block !important;
      }
      .d-hide-block {
      display: block !important;
      }
      .disclaimer {
      padding-right: 12% !important;
      padding-left: 12% !important;
      }
      .cta-btn a {
      font-size: 16px !important;
      line-height: 24px !important;
      }
      .cta-btn span {
      padding: 8px 24px !important;
      }
      }
      @media screen and (-webkit-min-device-pixel-ratio: 0) {
      .gmail-top-line {
      padding-top: 0px !important;
      }
      }
      @media screen and (min-width: 601px) {
      .font-wt-norm {
      font-weight: normal !important;
      }
      .d-hide {
      display: none !important;
      }
      }
      @media screen and (max-width: 600px) {
      #email-container {
      width: 100% !important;
      }
      .font-wt-norm {
      font-weight: normal !important;
      }
      .m-fluid {
      width: 100% !important;
      }
      .side-pad {
      padding-left: 25px !important;
      padding-right: 25px !important;
      }
      .m-display,
      .m-block {
      display: block !important;
      }
      .m-hide {
      display: none !important;
      }
      .logo-cell {
      padding-right: 26px !important;
      }
      .pad-0 {
      padding: 0 !important;
      }
      .pad-tp-0 {
      padding-top: 0px !important;
      }
      .pad-rt-0 {
      padding-right: 0px !important;
      }
      .pad-bot-0 {
      padding-bottom: 0px !important;
      }
      .pad-lt-0 {
      padding-left: 0px !important;
      }
      .pad-lt-rt-0 {
      padding-left: 0 !important;
      padding-right: 0 !important;
      }
      .m-left {
      float: left;
      }
      .m-right {
      float: right;
      }
      .m-center {
      margin: 0 auto;
      text-align: center !important;
      float: none;
      }
      .d-hide {
      display: inline-block !important;
      }
      .d-hide-block {
      display: block !important;
      }
      .disclaimer {
      padding-right: 12% !important;
      padding-left: 12% !important;
      }
      .cta-btn a {
      font-size: 16px !important;
      line-height: 24px !important;
      }
      .cta-btn span {
      padding: 8px 24px !important;
      }
      }
      @media screen and (max-width: 600px) {
      u + #body #email-container {
      min-width: calc(100vw - 8.5vw) !important;
      }
      #logo td > td:first-child {
      padding-bottom: 32px !important;
      padding-top: 32px !important;
      }
      #logo .nest-logo {
      width: 53px !important;
      }
      .resources .resource {
      width: auto !important;
      }
      .resources .resource._1 {
      padding-bottom: 40px !important;
      }
      .features .lockup {
      width: auto !important;
      padding-bottom: 32px !important;
      }
      .features tr.last > td + td {
      padding-bottom: 0 !important;
      }
      .features_sc .lockup {
      width: 100% !important;
      }
      .articles .img,
      .articles .center {
      text-align: center;
      }
      .articles .h3 {
      font-family: AkkuratNest-Medium, Helvetica, Arial, sans-serif !important;
      font-weight: bold !important;
      font-size: 16px !important;
      line-height: 24px !important;
      padding-top: 12px;
      }
      .articles .pad-copy {
      padding-left: 12% !important;
      padding-right: 12% !important;
      }
      .side-pad-32,
      .side-pad-40,
      .side-pad-128,
      .side-pad-72 {
      padding-right: 12% !important;
      padding-left: 12% !important;
      }
      .m-side-pad-16 {
      padding-right: 4.3% !important;
      padding-left: 4.3% !important;
      }
      .h1 {
      font-size: 28px !important;
      line-height: 36px !important;
      }
      .h2 {
      font-size: 20px !important;
      line-height: 28px !important;
      }
      .spacer .height-56 {
      height: 48px !important;
      line-height: 48px !important;
      font-size: 48px !important;
      }
      }
      @media screen and (max-width: 600px) {
      #de.split-width,
      #nl.split-width {
      width: 50% !important;
      }
      .custom #de.h1,
      .custom #nl.h1 {
      font-size: 26px !important;
      line-height: 34px !important;
      }
      .m-s-pad {
      padding-right: 7% !important;
      padding-left: 7% !important;
      }
      u + #body #email-container {
      min-width: calc(100vw - 8.5vw) !important;
      }
      #logo td > td:first-child {
      padding-bottom: 32px !important;
      padding-top: 32px !important;
      }
      #logo .nest-logo {
      width: 53px !important;
      }
      .resources .resource {
      width: auto !important;
      }
      .resources .resource._1 {
      padding-bottom: 40px !important;
      }
      .features .lockup {
      width: auto !important;
      padding-bottom: 32px !important;
      }
      .features tr.last > td + td {
      padding-bottom: 0 !important;
      }
      .articles .img,
      .articles .center {
      text-align: center;
      }
      .articles .h3 {
      font-family: AkkuratNest-Medium, Helvetica, Arial, sans-serif !important;
      font-weight: bold !important;
      font-size: 16px !important;
      line-height: 24px !important;
      padding-top: 12px;
      }
      .h1 {
      font-size: 28px !important;
      line-height: 36px !important;
      }
      .h2 {
      font-size: 20px !important;
      line-height: 28px !important;
      }
      .spacer .height-56 {
      height: 48px !important;
      line-height: 48px !important;
      font-size: 48px !important;
      }
      .order-right .line-item td {
      line-height: 20px !important;
      text-align: left !important;
      display: block !important;
      width: 100% !important;
      }
      .order-details-module .order-details span {
      line-height: 20px !important;
      display: block !important;
      }
      .center-on-mobile {
      text-align: center !important;
      }
      .adjust-width-10 {
      width: 10% !important;
      }
      .adjust-width-14 {
      width: 14% !important;
      }
      .footer-links {
      display: block !important;
      width: 100% !important;
      }
      }
      @media screen and (max-width: 600px) {
      .module--masthead {
      height: 60px !important;
      }
      /*.module--masthead .logo {
      width: 24px !important;
      }*/
      .typography--headline {
      font-size: 32px !important;
      line-height: 40px !important;
      }
      .typography--headline2 {
      font-size: 24px !important;
      line-height: 32px !important;
      padding-left: 24px !important;
      padding-right: 24px !important;
      }
      .typography--body {
      font-size: 20px !important;
      padding-left: 24px !important;
      padding-right: 24px !important;
      }
      .typography--body2 {
      font-size: 16px !important;
      line-height: 24px !important;
      padding-left: 24px !important;
      padding-right: 24px !important;
      }
      /*.feature-block .icon img {
      width: 32px !important;
      height: 32px !important;
      }*/
      .stack {
      display: block !important;
      }
      .disc {
      width: 95% !important;
      text-align: center !important;
      margin-left: auto !important;
      margin-right: auto !important;
      padding-bottom: 16px !important;
      }
      .bottom-cta-container {
      padding-bottom: 48px !important;
      }
      .features .edge-pad {
      padding-left: 25px !important;
      padding-right: 25px !important;
      }
      }
      @media screen and (max-width: 600px) {
      .bottom-cta-container {
      padding-bottom: 48px !important;
      }
      }
    </style>
    <style type=text/css>
      /*Inline styles go here*/
    </style>
    <!--[if gte mso 9]>
      <xml>
        <o:OfficeDocumentSettings>
          <o:AllowPNG/>
          <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
      </xml>
    <![endif]-->

  </head>
  
  <body id=body class=body style="-webkit-text-size-adjust: none; color: #7C8287; font-family: AkkuratNest-Book, Helvetica, Arial, sans-serif; font-size: 16px; -ms-text-size-adjust: 100%; mso-margin-top-alt: 0px; mso-margin-bottom-alt: 0px; mso-padding-alt: 0; margin: 0; padding: 0; background-color: #f9f9f9;">
    <div class=preheader style="font-size: 0px; display: none; opacity: 0; height: 0; line-height: 0px; visibility: hidden; position: relative; width: 100%; margin-left: auto; margin-right: auto;">Sorry, your order has been cancelled.</div>
    <table id=div-body align=center style="border-collapse: collapse; width: 100%; background-color: #f9f9f9; margin-left: auto; margin-right: auto;"
    width=100% bgcolor=#f9f9f9 cellpadding=0 cellspacing=0 border=0>
      <tr>
        <td style="border-collapse: collapse; font-size: 16px; line-height: 24px; color: #5F6368; font-family: GoogleSans-Regular, Helvetica, Arial, sans-serif;">
          <center>
            <!-- non iOS top line HACK -->
            <div class=gmail-top-line style="mso-hide: all;width: 100%; margin-left: auto; margin-right: auto; padding-top: 1px;"></div>
            <!-- /non iOS top line HACK -->
            <div id=email-container style="position: relative; width: 100%; margin-left: auto; margin-right: auto; overflow: hidden; max-width: 600px;"
            bgcolor=#f9f9f9>
              <!--[if gte mso 9]>
                <table align="center" width="600" bgcolor="#f9f9f9" cellpadding="0" cellspacing="0"
                border="0">
                  <tr>
                    <td>
                    <![endif]-->
                    <table id=email-body style="border-collapse: collapse; background-color: #ffffff;"
                    bgcolor=#ffffff cellpadding=0 cellspacing=0 border=0>
                      <tr>
                        <td style="border-collapse: collapse; font-size: 16px; line-height: 24px; color: #5F6368; font-family: GoogleSans-Regular, Helvetica, Arial, sans-serif;">
                          <!-- MASTHEAD -->
                          <table class="m-fluid theme--midnight" style="border-collapse: collapse;" cellpadding=0
                          cellspacing=0 border=0>
                            <tr>
                              <td class="module module--masthead " align=center style="border-collapse: collapse; font-size: 16px; line-height: 24px; color: #5F6368; font-family: GoogleSans-Regular, Helvetica, Arial, sans-serif; width: 600px; height: 80px; background: #ffffff;"
                              width=600 height=80>
                                
                                  <img class=logo src="https://unity.agechecked.com/images/agechecked.png" style="margin-top:40px;border: none; width: 72px; display: block;" width=72 border=0>
                                
                              </td>
                            </tr>
                          </table>
                          <!-- HERO -->
                          <table class="hero variation--1 " width=100% bgcolor style="border-collapse: collapse;"
                          cellpadding=0 cellspacing=0 border=0>
                            <tr>
                              <td class="h1 typography--headline" align=center style="border-collapse: collapse; font-weight: 500; font-family: GoogleSans-Medium, Helvetica, Arial, sans-serif; color: #3C4043; font-size: 32px; line-height: 36px; padding-left: 54px; padding-right: 54px; padding-top: 0px; background: #ffffff; padding-bottom: 0px;">


                                Reset Password

                                
                                
                              </td>
                            </tr>
                            
                            <tr>
                              <td class="body typography--body" align=center style="border-collapse: collapse; font-weight: 400; font-family: GoogleSans-Regular, Helvetica, Arial, sans-serif; color: #3C4043; padding-left: 43px; padding-right: 43px; font-size: 20px; line-height: 32px; letter-spacing: -0.4px; padding-bottom: 30px;">
                              <p>Hello <?= Html::encode($user->username) ?>, follow this link to reset your password:</p>
                              <p><?= Html::a('Reset password', $resetLink) ?></p>
                              <p>or</p>
                              <p>Paste this in your address bar: <?= $resetLink ?>
                              </p>
                                <!--p>Thanks {{site.name}}</p-->
                              </td>
                            </tr>
                          </table>
                          <!-- FEATURES -->
                          <table class="features " width=100% bgcolor style="border-collapse: collapse; background: #ffffff;"
                          cellpadding=0 cellspacing=0 border=0>
                            <tr>
                              <td class="typography-feature-hl edge-pad" align=center style="border-collapse: collapse; font-family: GoogleSans-Bold, Helvetica, Arial, sans-serif; font-weight: bold; color: #3C4043; font-size: 20px; line-height: 36px; padding-top: 59px; padding-bottom: 32px; letter-spacing: -0.06px; padding-left: 125px; padding-right: 125px;">Why has my order been cancelled?</td>
                            </tr>
                            <tr>
                              <td class="lockups edge-pad" style="border-collapse: collapse; font-size: 16px; line-height: 24px; color: #5F6368; font-family: GoogleSans-Regular, Helvetica, Arial, sans-serif; padding-left: 125px; padding-right: 125px;">
                                <table align=center class=m-fluid style="border-collapse: collapse;" cellpadding=0
                                cellspacing=0 border=0>
                                  <tr class="lockups ">
                                    <td class="feature-block lockup m-display pad-lt-rt-0" style="border-collapse: collapse; font-size: 16px; line-height: 24px; color: #5F6368; font-family: GoogleSans-Regular, Helvetica, Arial, sans-serif; vertical-align: top; padding-bottom: 32px;"
                                    valign=top>
                                      
                                    </td>
                                  </tr>
                                  
                                  <tr>
                                    <td class=bottom-cta-container align=center style="border-collapse: collapse; font-size: 16px; line-height: 24px; color: #5F6368; font-family: GoogleSans-Regular, Helvetica, Arial, sans-serif; padding-bottom: 32px;">
                                      <!-- CTA BUTTON -->
                                      
                                      <!-- /CTA BUTTON -->
                                    </td>
                                  </tr>
                                </table>
                              </td>
                            </tr>
                          </table>
                          <!--Disclaimer-->
                    </table>
            </div>
          </center>
          </td>
          </tr>
          </table>
          <!--[if gte mso 9]>
            </td>
            </tr>
    </table>
  <![endif]-->
  <!-- FOOTER -->
  <center>
    <div class=foot-soc style="position: relative; width: 100%; margin-left: auto; margin-right: auto; max-width: 696px">
      <table width=100% bgcolor=#f9f9f9 class=m-fluid style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"
      cellpadding=0 cellspacing=0 border=0>
        <tr>
          <td class=spacer style="border-collapse: collapse; height: 48px; line-height: 48px; font-size: 48px;"
          height=48> </td>
        </tr>
        
        
        
        <!-- ENTITY, ADDRESS, RATIONALE, LINKS -->
        <tr>
          <td>
            <table class="divider m-fluid" width=100% align=center>
              <tr>
                <td style="padding-left: 16px; padding-right: 16px;">
                  <table width=100%>
                    <tr>
                      <td width=100% style="border-top: 1px solid #d8d8d8; font-size: 0px; line-height: 0px; padding-bottom: 32px;"> </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </td>
        </tr>
        <tr>
          <td class="foot-soc-co m-s-pad" align=center style="border-collapse: collapse; text-align: center; font-family: GoogleSans-Regular, Helvetica, Arial, sans-serif; font-weight: 300; line-height: 15px; font-size: 11px; color: #7C8287; padding-left: 16px; padding-right: 16px;">© 2021 AgeChecked Limited,
            <a href="" style="text-decoration: none; cursor: default; color: #7C8287">161-165 Farringdon Road, London, EC1R 3AL, United Kingdom.</a>
            <br>
        </tr>
        <tr>
          <td align=center style="border-collapse: collapse; text-align: center; font-family: GoogleSans-Regular, Helvetica, Arial, sans-serif; font-weight: 300; line-height: 15px; font-size: 11px; color: #7C8287; padding-top: 12px">
            <a href=#
            style="text-decoration: none; color: #7C8287;">Privacy Policy</a>   |   
            <a href=#
            style="text-decoration: none; color: #7C8287;">Terms of service</a>
          </td>
        </tr>
        <tr>
          <td align=center style="border-collapse: collapse; text-align: center; font-family: GoogleSans-Regular, Helvetica, Arial, sans-serif; font-weight: 300; line-height: 15px; font-size: 11px; color: #7C8287; padding-top: 12px">
            Powered by <strong>Verifico</strong>
          </td>
        </tr>
        <!-- /ENTITY, ADDRESS, RATIONALE, LINKS -->
        <tr>
          <td class=spacer style="border-collapse: collapse; height: 64px; line-height: 64px; font-size: 64px;"
          height=64> </td>
        </tr>
      </table>
    </div>
  </center>
  <!-- /FOOTER -->
  <!-- INBOX & GMAIL MOBILE HACK -->
  <div class="ganga-show div-inbox-hack" style="height: 0px; line-height: 0px; mso-hide: all;">
<pre style="width: 650px; white-space: pre; font-size: 0; line-height: 0; height: 0; padding: 0; margin: 0;"><img src=https://unity.agechecked.com/images/s.png width=1 height=1 style="border: none;" border=0>
</pre>

  </div>
  <div class="ganga-show div-gmail-hack" style="white-space: nowrap; font: 15px courier; line-height: 0;">                                                           </div>
  <!-- /INBOX &
  GMAIL MOBILE HACK -->
 
   </body>

</html>

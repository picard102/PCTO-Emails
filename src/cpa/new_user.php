<?php
/**
 * Live Show submission confirmation
 *
 * @category PHP
 * @package  @theme_folder@
 * @author   @author_name@  <@author_email@>
 * @version  Release: @package_version@
 * @link     @git_link@
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta property="og:title" content="{{subject}}" />
  <title>{{subject}}</title>
  <meta name="format-detection" content="date=no">
  <meta name=”x-apple-disable-message-reformatting”>

  <style type="text/css">
    #outlook a {padding:0;}
    body{width:100% !important; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; margin:0; padding:0;}
    .ExternalClass {width:100%;}
    .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;}
    #backgroundTable {margin:0; padding:0; width:100% !important;}
    img {outline:none; text-decoration:none; -ms-interpolation-mode: bicubic;}
    a img {border:none;}
    .image_fix {display:block;}
    p {margin: 1em 0;}
    h1, h2, h3, h4, h5, h6 {color: black !important;}
    h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {color: #e3402e !important;}
    h1 a:active, h2 a:active,  h3 a:active, h4 a:active, h5 a:active, h6 a:active {
      color: red !important;
     }
    h1 a:visited, h2 a:visited,  h3 a:visited, h4 a:visited, h5 a:visited, h6 a:visited {
      color: #e3402e !important;
    }
    table td {border-collapse: collapse;}
    a {color: #e3402e;}
    @media only screen and (max-device-width: 480px) {
      a[href^="tel"], a[href^="sms"] {
            text-decoration: none;
            color: #e3402e; /* or whatever your want */
            pointer-events: none;
            cursor: default;
          }
      .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
            text-decoration: default;
            color: #e3402e !important; /* or whatever your want */
            pointer-events: auto;
            cursor: default;
          }
    }
    @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
      a[href^="tel"], a[href^="sms"] {
            text-decoration: none;
            color: #e3402e;
            pointer-events: none;
            cursor: default;
          }
      .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
            text-decoration: default;
            color: #e3402e !important;
            pointer-events: auto;
            cursor: default;
          }
    }
    @media only screen and (-webkit-min-device-pixel-ratio: 2) {
      /* Put your iPhone 4g styles in here */
    }
    @media only screen and (-webkit-device-pixel-ratio:.75){
      /* Put CSS for low density (ldpi) Android layouts in here */
    }
    @media only screen and (-webkit-device-pixel-ratio:1){
      /* Put CSS for medium density (mdpi) Android layouts in here */
    }
    @media only screen and (-webkit-device-pixel-ratio:1.5){
      /* Put CSS for high density (hdpi) Android layouts in here */
    }
  </style>
  <!--[if IEMobile 7]>
  <style type="text/css">
    /* Targeting Windows Mobile */
  </style>
  <![endif]-->
  <!--[if gte mso 9]>
  <style>
    /* Target Outlook 2007 and 2010 */
  </style>
  <![endif]-->
</head>
<body  style="padding: 0; margin: 0; background: #fff;">

<span style="display:none; font-size:0px; line-height:0px; max-height:0px; max-width:0px; opacity:0; overflow:hidden; visibility:hidden; mso-hide:all;">{{{preview}}}</span>

<div style="display: none; max-height: 0px; overflow: hidden;">
&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;
&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;
&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;
&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
</div>

<table bgcolor="#fff" border="0" cellpadding="0" cellspacing="0" style="background:#fff; padding: 12px;" width="100%" id="backgroundTable">
<tr>
  <td align="center">

  <table bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0" id="mailer_content" style="background:#FFFFFF; padding: 24px; width: 100%; max-width: 640px;">
    <tr>
      <td align="center">
        <img src="http://cdn.mcauto-images-production.sendgrid.net/4d8b1d2177da83e5/e9ef3424-a98d-4d12-bef8-6ce0058326ef/50x50.png" style="box-sizing: border-box; border: 0; display: block;" height="50" width="50">
      </td>
    </tr>
    <tr>
            <td height="10"></td>
    </tr>
    <tr>
      <td style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 15px; color:#e3402e; line-height: 1em;" align="center">The Canadian Podcast Awards
      </td>
    </tr>
  </table>


        {{#if new_user}}

  <table bgcolor="#e3402e" border="0" cellpadding="0" cellspacing="0" style="background:#e3402e; padding: 24px;  width: 100%; background-color: #e3402e;  padding: 78px 12px; background-position: center right; background-image:url('http://cdn.mcauto-images-production.sendgrid.net/4d8b1d2177da83e5/ed60d45a-7d87-4a58-bb72-af0c7a1e34fd/1465x620.png'); text-align: center; width: 100%; max-width: 1240px;" align="center">
    <tr>
      <td style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 32px; color: #fffffe; text-align: center;" align="center">
      <table border="0" cellpadding="0" cellspacing="0" style="padding: 24px; margin: auto; width: 100%; max-width: 640px;">
        <tr>
          <td style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 16px; color: #fffffe; text-align: center;">Welcome, {{{insert fname "default=Friend"}}}
            <span style="font-size: 42px; display: block; font-weight: 600;">Let's Begin!</span></td>
        </tr>
      </table>
    </td>
  </tr>
</table>


   <table bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0" style="background:#FFFFFF; padding: 24px;  width: 100%; max-width: 640px; min-width: 600px;">

    <tr>
      <td style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 16px; color: #222;">

    <table bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0" style="background:#FFFFFF; padding: 24px;  width: 100%; max-width: 640px;">

      <tr>
        <td width="150px">
            <img src="http://cdn.mcauto-images-production.sendgrid.net/4d8b1d2177da83e5/7ef132f8-08f6-4810-b856-84b4987eb38f/164x150.png">
        </td>
                        <td width="30px"></td>
        <td>
          <p><strong>Tell Us About Yourself</strong></p>
          <p>Complete your profile as much as possible, it's key for us to verify members are Canadian, real people, and members of the community.</p>
          <a href="{{profile_url}}" style="text-decoration: none; background:#ddd; color:#000; font-size: 13px; display: inline-block; padding: 12px 24px; border-radius: 3px;">
          <span style="display: block; font-weight: 500;">Complete Profile</span></a>
        </td>
      </tr>


      <tr>
        <td height="30px"></td>
      </tr>

      <tr>
        <td width="150px">
            <img src="http://cdn.mcauto-images-production.sendgrid.net/4d8b1d2177da83e5/51a10768-3292-4637-9977-3962b5a0575e/164x150.png">
        </td>
                <td width="30px"></td>
        <td>
          <p><strong>Tell Us About Your Experience</strong></p>
          <p>Letting us know what Podcasts you work with as a host, producer, or technical producer, also helps us verify accounts. These podcasts don't have to be Canadian, but you do.</p>
          <a href="{{podcasts_url}}" style="text-decoration: none; background:#ddd; color:#000; font-size: 13px; display: inline-block; padding: 12px 24px; border-radius: 3px;">
          <span style="display: block; font-weight: 500;">Add Podcasts</span></a>
        </td>
      </tr>

    </table>



    <p>The current wait time for approval is approximately {{timeline}} days, so reach out to us if it's been longer. Once reviewed you'll receive an email with our decision!</p>

      <p>Thank you!</p>
      </td>
    </tr>
  </table>




{{/if}}



  <table border="0" cellpadding="0" cellspacing="0"  style="padding: 24px; vertical-align: top;  width: 100%; max-width: 640px;">
    <tr>
      <td style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 16px; color: #222; border-top: 1px solid #ddd;" align="center">
        <h3 style="font-family: serif; font-size: 18px; color: #222; padding-top: 24px;">Thank you to our Partners & Sponsors</h3>
        {{#if sponsors}}
          {{#each sponsors}}
            <a href="{{this.url}}" style="text-decoration: none; height: 50px; width: 100px; text-align: center; display: inherit; vertical-align: middle;"><img src="{{this.image}}" style="display: block; max-width: 90%; max-height: 100%; margin: auto;"></a>
          {{/each}}
        {{/if}}
      </td>
    </tr>
  </table>











  <table border="0" cellpadding="0" cellspacing="0"  style="padding: 24px; vertical-align: top;  width: 100%; max-width: 640px;">
    <tr>
      <td style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 16px; color: #222; border-top: 1px solid #ddd;" align="center">
      </td>
    </tr>
  </table>

  <table border="0" cellpadding="0" cellspacing="0" style="padding: 12px 24px; vertical-align: top;  width: 100%; max-width: 640px;">
    <tr>
<td width="30%"></td>
      <td width="32">
    <a href="https://www.instagram.com/CanPodAwards/" style=""><img src="http://cdn.mcauto-images-production.sendgrid.net/4d8b1d2177da83e5/2bc38244-5693-4591-b9ff-7f1bdd8cee1b/32x32.png" style="box-sizing: border-box; border: 0; height: 32px; width: 32px; display: block;" width="32" height="32"></a>
  </td>
    <td width="10px">&nbsp;</td>
      <td width="32">
    <a href="https://www.facebook.com/CanPodAwards/" style=""><img src="http://cdn.mcauto-images-production.sendgrid.net/4d8b1d2177da83e5/1a4bf229-f00b-4a66-bcc3-64d63813ee06/32x32.png" style="box-sizing: border-box; border: 0; height: 32px; width: 32px; display: block;" width="32" height="32"></a>
  </td>
  <td width="10px">&nbsp;</td>
      <td width="32">
    <a href="https://twitter.com/CanPodAwards/" style=""><img src="http://cdn.mcauto-images-production.sendgrid.net/4d8b1d2177da83e5/4208b376-2a01-49a3-b6d4-77e98c946527/32x32.png" style="box-sizing: border-box; border: 0; height: 32px; width: 32px; display: block;" width="32" height="32"></a>
</td>
<td width="30%"></td>
</tr>
</table>


  <table border="0" cellpadding="0" cellspacing="0" style="padding: 12px 24px; vertical-align: top;  width: 100%; max-width: 640px;">
<tr>

<td style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 11px;  color: #555;" align="center">
  <p>This is an automated email triggered on applying to our community.</p>
  &copy; Canadian Podcast&nbsp;Awards, <br/>
  <span class="apple-link" style="box-sizing: border-box;">3&zwnj;-&zwnj;3&zwnj;92 <span style="box-sizing: border-box;">Wilson Ave</span>, Toronto Ont, CAN <span style="box-sizing: border-box;">M3H</span> 1S9</span>
      </td>
    </tr>
  </table>

    </td>
  </tr>
</table>


<?php
  require'footer.php';
?>
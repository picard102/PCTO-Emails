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


    {{#if podcasts}}
      {{#each podcasts}}






  <table bgcolor="{{this.bgcolor}} !important" border="0" cellpadding="0" cellspacing="0" id="new_podcast_header" style="background-color:{{this.bgcolor}} !important; color:{{this.textcolor}} !important; padding: 0 24px;

{{#equals this.textcolor '#FFF0FF'}}
  background-image:url('http://cdn.mcauto-images-production.sendgrid.net/4d8b1d2177da83e5/ee0fe3db-f698-4225-bbf2-fac481bf1465/700x700.png');
{{else}}
  background-image:url('http://cdn.mcauto-images-production.sendgrid.net/4d8b1d2177da83e5/65ea1184-07be-4b07-8e68-841104eb0b1c/700x700.png');
{{/equals}}
  background-position: top center; background-repeat: none;  width: 100%; max-width: 640px;" >


    <tr>
      <td style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 16px; color: {{this.textcolor}}; padding: 48px 24px 84px;" align="center">
         <span style="font-size: 24px; display: block; font-weight: 500;">{{{this.title}}}</span>
        <span style="margin-bottom: 48px; font-size: 16px; display: block; font-weight: 400;">was submitted to our database.</span>

<table border="0" cellpadding="0" cellspacing="0" style="" width="200" >
        <tr>
          <td style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 16px;" align="center" width="250" height="250">
            <a href="{{this.edit}}">
              <img src="{{this.image}}" width="250" height="250" style="border: 1px solid {{this.textcolor}};">
            </a>
          </td>
        </tr>
        <tr>
          <td height="20"></td>
        </tr>
        <tr>
          <td style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 16px;" align="left">
            <a href="{{this.edit}}" style="text-decoration: none; color: {{this.textcolor}};">
              <span style="padding-bottom: 6px; display: block; font-weight: 500;">{{{this.title}}}</span>
              {{#if this.category}}
                <small style="padding-bottom: 6px; display: block;">{{#each this.category}}
                  {{#if @index}}, {{/if}}
                  {{{this}}}
                {{/each}}
              </small>
              {{/if}}
            </a>
          </td>
        </tr>
        <tr>
          <td height="30"></td>
        </tr>
        <tr>
          <td align="center" >
            <a href="{{this.edit}}" style="text-decoration: none; background:{{this.textcolor}}; color:{{this.bgcolor}}; font-size: 11px; display: block; padding: 12px; border-radius: 3px;">
              <span style="display: block; font-weight: 500;">Edit</span></a>
          </td>
        </tr>
      </table>


      </td>
    </tr>
  </table>

        {{/each}}
      {{/if}}


  <table bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0" style="background:#FFFFFF; padding: 24px;  width: 100%; max-width: 640px;">
    <tr>
      <td style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 16px; color: #222;">
      <p>Hello {{{insert name "default=Podcaster"}}},</p>
      <p>This is an email letting you know that your podcast was recently submitted to our podcasting database.</p>

      <p>To review and be correctly displayed in our directory, we have used the information in your RSS feed, the PodChaser database, and additional data supplied by the user who submitted your show.</p>

      <p>If you would like to edit the listing, or provide additional information, you can do so by clicking
      {{#if podcasts}}
        {{#each podcasts}}
          <a style="color: #e3402e;" href="{{this.edit}}">here.</a>
        {{/each}}
      {{/if}}
      </p>

      <p>We receive a large volume of submissions, and your show may not immediately appear in our directory as we review each submission.</p>

      <p>If you have any questions, let us know.</p>

      <p>Thank You</p>


      </td>
    </tr>
  </table>








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
  <p>This is an automated email triggered on submission to our directory.</p>
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
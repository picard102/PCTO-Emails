<?php
/**
 * LiveStream Announce
 *
 * @category PHP
 * @package  PCTO-EMAILS
 * @author   John Leschinski  <john@leschinskidesign.com>
 * @version  Release: 0.3.3-0
 * @link     https://github.com/picard102/PCTO-EMAILS
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


    @media only screen and (max-width: 500px) {

      .icon_award {
 height: 50px;
      }

      #header_padding {
        padding: 0 !important;
      }

       #content_padding {
        padding: 12px !important;
      }

      .header_title {
        font-size: 40px !important;
        line-height: 40px !important;
      }

      .award_title {
        font-size: 25px !important;
        line-height: 25px !important;
      }
    }
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
&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;
&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;
&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;
&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;
&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;
&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;
&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
</div>

<table bgcolor="#343333" border="0" cellpadding="0" cellspacing="0" style="background-image:linear-gradient(#343333,#343333);  padding: 12px;" width="100%" id="backgroundTable">
<tr>
  <td align="center">

  <table bgcolor="#343333" border="0" cellpadding="0" cellspacing="0" style=" background-image:linear-gradient(#343333,#343333); width: 100%;   padding: 48px 12px 12px; background-position: center right; text-align: center; width: 100%; max-width: 640px; min-width: 400px;" align="center">
    <tr>
      <td style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 32px; color: #fffffe; text-align: center;" align="center">

        <table border="0" cellpadding="0" cellspacing="0" style="padding: 24px; margin: auto; " id="header_padding">
          <tr>
            <td>
             <img src="http://cdn.mcauto-images-production.sendgrid.net/4d8b1d2177da83e5/07cbbfdf-04e7-4bea-af2d-ab62d198e0d9/150x70.png" class="icon_award" style="max-width: 150px;" alt="Canadian Podcast Awards Logo" title="Canadian Podcast Awards Logo">
            </td>
          </tr>
        </table>

      </td>
    </tr>
  </table>


   <table bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0" style="background:#FFFFFF; padding: 24px;  width: 100%; max-width: 640px;">
    <tr>
      <td style="text-align: center;">


        <table border="0" cellpadding="0" align="center" cellspacing="3" style="border: 1px solid #343333;">
        <tr>
          <td style="font-family: serif; font-size: 30px; text-align: center; background: #343333; color: #fefefe; padding: 6px 48px">
            August
          </td>
        </tr>
        <tr>
          <td style="font-family: serif; text-align: center; ">
            <p  style="font-size: 90px; margin:0 0 12px 0; line-height: 90px;" >27</p>
            <p  style="font-size: 18px; margin: 0 0 12px 0; line-height: 18px;" >8:00pm EST</p>
          </td>
        </tr>
        </table>
</td></tr>
</table>

   <table bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0" style="background:#FFFFFF; padding: 24px;  width: 100%; max-width: 640px; min-width: 400px;" id="content_padding">
    <tr>
      <td style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 16px; color: #222; text-align: center;">



        <p  style="font-family: serif; font-size: 50px; line-height: 50px; color: #343333; text-align: center; margin-top: 0;" class="header_title" >Honouring the very best in Canadian Podcasting</p>



  <p  style="font-family:  Helvetica Neue, Helvetica, Arial, sans-serif;  margin: 0 auto; text-align: center; margin-bottom: 24px; max-width: 500px; font-size:19px;" >Join us as we showcase the very best Canadian podcasters, editors, and producers; and showcase the diverse voices, ideas and values we have here in Canada on August 27th at 8pm EST on our&nbsp;<a href="https://canpodawards.ca/livestream" style="color: #e41f3a;">LiveStream</a>.</p>


  <p  style="font-family:  Helvetica Neue, Helvetica, Arial, sans-serif;  margin: 0 auto; text-align: center; margin-bottom: 48px; max-width: 500px; font-size:19px;" >Winners will receive a 1-year license for Hindenburg's Journalist Pro courtesy of&nbsp;<a href="https://hindenburg.com/?&utm_source=canpodawards&utm_medium=email&utm_campaign=livestream_announce" style="color: #e41f3a;">Hindenburg</a>.
  </p>



  <p  style="font-family:  Helvetica Neue, Helvetica, Arial, sans-serif;  margin: 0 auto; text-align: left; margin-bottom: 48px; max-width: 500px; font-size:16px; padding: 24px; background: #343333; color: #eee;" >If you happen to be one of the lucky winners, <strong>Please&nbsp;Do&nbsp;Not&nbsp;Post</strong> about the outcome until after you receive a follow up email at the end of the livestream confirming the results, as well a graphics package for you to promote this auspicious occasion.</p>


  <p  style="font-family: serif; text-align: center;" >
  <a href="https://canpodawards.ca/livestream/ics" style="text-decoration: none; background:#343333; color:#fff; font-size: 22px; display: inline-block; padding: 12px 24px; border-radius: 3px;"> <span style="display: block; font-weight: 500;">Add&nbsp;to Calendar</span></a>
  </p>



  <p>
<a href="https://calendar.google.com/calendar/render?action=TEMPLATE&dates=20210828T000000Z%2F20210828T010000Z&details=https%3A%2F%2Fcanpodawards.ca%2Flivestream&location=&text=4th%20Annual%20Canadian%20Podcast%20Awards" title="Save Event in my Calendar"  style="color: #e41f3a;">Google</a>
∙
<a href="https://outlook.live.com/calendar/0/deeplink/compose?body=https%3A%2F%2Fcanpodawards.ca%2Flivestream&enddt=2021-08-28T01%3A00%3A00%2B00%3A00&location=&path=%2Fcalendar%2Faction%2Fcompose&rru=addevent&startdt=2021-08-28T00%3A00%3A00%2B00%3A00&subject=4th%20Annual%20Canadian%20Podcast%20Awards" title="Save Event in my Calendar"  style="color: #e41f3a;">Outlook</a>
∙
<a href="https://calendar.yahoo.com/?desc=https%3A%2F%2Fcanpodawards.ca%2Flivestream&et=20210828T010000Z&in_loc=&st=20210828T000000Z&title=4th%20Annual%20Canadian%20Podcast%20Awards&v=60" title="Save Event in my Calendar"  style="color: #e41f3a;">Yahoo</a>
</p>


      </td>
    </tr>
  </table>



  <table border="0" bgcolor="#FFFFFF" cellpadding="0" cellspacing="0"  style="padding: 24px; background:#FFFFFF; vertical-align: top;  width: 100%; max-width: 640px;">
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













  <table border="0" cellpadding="0" cellspacing="0" style="padding: 12px 24px; vertical-align: top;  width: 100%; max-width: 640px;">
    <tr>
<td width="40%"></td>
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
<td width="40%"></td>
</tr>
</table>


  <table border="0" cellpadding="0" cellspacing="0" style="padding: 12px 24px; vertical-align: top;  width: 100%; max-width: 640px;">
<tr>

<td style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 11px;  color: #999;" align="center">
  <p> <a href="https://canpodawards.ca/user/?action=notifications">Update your preferences.</a> </p>
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
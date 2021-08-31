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







        {{#if pwd_recovery}}


   <table bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0" style="background:#FFFFFF; padding: 24px;  width: 100%; max-width: 640px; min-width: 600px;">

    <tr>
      <td style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 16px; color: #222;">

<p>Hey {{{insert fname "default=Friend"}}}</p>
<p>We received a request to reset the password for the account associated with {{email}}.</p>

<p>You can reset your password by clicking the link below:</p>
<a href="{{password_set}}" style="text-decoration: none; background:#ddd; color:#000; font-size: 13px; display: inline-block; padding: 12px 24px; border-radius: 3px; width: 100%; text-align: center">
          <span style="display: block; font-weight: 500;">Reset Password</span></a>

<p>If you did not request a new password, you can ignore this email. No changes have been made to your account.</p>
<p>Thanks!</p>
{{/if}}







        {{#if rejected_user}}


   <table bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0" style="background:#FFFFFF; padding: 24px;  width: 100%; max-width: 640px; min-width: 600px;">

    <tr>
      <td style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 16px; color: #222;">

<p>Hey {{{insert fname "default=Friend"}}}</p>
<p>We have reviewed the details you supplied for your application, but were unable to approve your account at this time for the following reasons:</p>

<table bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0" style="background:#FFFFFF; padding: 24px;  width: 100%; max-width: 640px;">


{{#if reason.not-canadian}}
      <tr>
        <td width="100px" valign="top">
            <img src="http://cdn.mcauto-images-production.sendgrid.net/4d8b1d2177da83e5/6b668015-3f5b-4576-9402-c13c8ff8a0c6/100x92.png">
        </td>
       <td width="30px"></td>
        <td>
          <p>We were unable to verify that you are a Canadian citizen or permanent resident. Could you please reply to this email with a bit more background on your current citizenship or resident status?</p>
        </td>
      </tr>


      <tr>
        <td height="30px"></td>
      </tr>

{{/if}}


{{#if reason.not-podcaster}}
      <tr>
        <td width="100px" valign="top">
            <img src="http://cdn.mcauto-images-production.sendgrid.net/4d8b1d2177da83e5/61fa55c2-d113-4747-a181-9471dd84d8be/100x92.png">
        </td>
       <td width="30px"></td>
        <td>
          <p>We were unable to verify that you are a podcaster. Please update your profile to include the podcasts you are the host, co-host, or production team member of; past or present. Guests, listeners, or family members of podcasts are not accepted. Please ensure that you are listed on each podcasts websites credits page to ensure we can validate the claim.</p>

          <a href="{{Add Podcasts}}" style="text-decoration: none; background:#ddd; color:#000; font-size: 13px; display: inline-block; padding: 12px 24px; border-radius: 3px;">
          <span style="display: block; font-weight: 500;">Add Podcast</span></a>
        </td>
      </tr>


      <tr>
        <td height="30px"></td>
      </tr>

{{/if}}



{{#if reason.no-profile}}
      <tr>
        <td width="100px" valign="top">
            <img src="http://cdn.mcauto-images-production.sendgrid.net/4d8b1d2177da83e5/2db8fbf8-2de8-4239-981c-a7a8d140e340/100x92.png">
        </td>
       <td width="30px"></td>
        <td>
          <p>Your profile is incomplete. Please make sure to fill out all the information, including your first and last name (pseudonyms will not be approved), the podcasts you are part of, and your membership chapter.</p>

          <a href="{{profile_url}}" style="text-decoration: none; background:#ddd; color:#000; font-size: 13px; display: inline-block; padding: 12px 24px; border-radius: 3px;">
          <span style="display: block; font-weight: 500;">Complete Profile</span></a>
        </td>
      </tr>


      <tr>
        <td height="30px"></td>
      </tr>

{{/if}}




{{#if reason.multi-account}}
      <tr>
        <td width="100px" valign="top">
            <img src="http://cdn.mcauto-images-production.sendgrid.net/4d8b1d2177da83e5/f58448ca-f1f5-49e0-ac25-2327504f3f17/100x92.png">
        </td>
       <td width="30px"></td>
        <td>
          <p>You appear to already have an account under a different login.</p>
        </td>
      </tr>


{{/if}}





</table>

<p>If you can correct these errors, we would be happy to review your application again.</p>
<p>The current wait time for re-approval is approximately {{timeline}} days if submitted today. Once reviewed you'll receive an email with our decision!</p>
<p>Thanks.</p>

</td>
</tr>
</table>
{{/if}}







        {{#if approved_user}}
  <table bgcolor="#e3402e" border="0" cellpadding="0" cellspacing="0" style="background:#e3402e; padding: 24px;  width: 100%; background-color: #e3402e;  padding: 78px 12px; background-position: center right; background-image:url('http://cdn.mcauto-images-production.sendgrid.net/4d8b1d2177da83e5/ed60d45a-7d87-4a58-bb72-af0c7a1e34fd/1465x620.png'); text-align: center; width: 100%; max-width: 1240px;" align="center">
    <tr>
      <td style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 32px; color: #fffffe; text-align: center;" align="center">
      <table border="0" cellpadding="0" cellspacing="0" style="padding: 24px; margin: auto; width: 100%; max-width: 640px;">
        <tr>
          <td style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 16px; color: #fffffe; text-align: center;">Welcome to the club, {{{insert fname "default=Friend"}}}
            <span style="font-size: 42px; display: block; font-weight: 600;">You've Been Approved!</span></td>
        </tr>
      </table>
    </td>
  </tr>
</table>





   <table bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0" style="background:#FFFFFF; padding: 24px;  width: 100%; max-width: 640px; min-width: 600px;">

    <tr>
      <td style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 16px; color: #222;">

<p>We have reviewed the details you supplied for your application and have approved your application.</p>




        {{#if nominations}}
<p>Nominations are <a href="{{home_url}}/nominate?utm_source=sendgrid&utm_medium=email&utm_campaign={{campaign_id}}" style="color: #e3402e;">now open.</a> Help us showcase the very best Canadian podcasters, editors, and producers; and showcase the diverse voices, ideas and values we have here in Canada by submitting today.</p>
<p>Be sure to let your friends in the industry know as well. The top 10 podcasts with the most nominations across all categories will be eligible for the People's Choice award, open for voting by Canadian podcast audiences.</p>
{{/if}}

        {{#if voting}}

<p>Voting is  <a href="{{home_url}}/vote?utm_source=sendgrid&utm_medium=email&utm_campaign={{campaign_id}}" style="color: #e3402e;">now open.</a> Help us showcase the very best Canadian podcasters, editors, and producers; and showcase the diverse voices, ideas and values we have here in Canada by voting today. </p>

{{/if}}




<p>Thanks.</p>


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
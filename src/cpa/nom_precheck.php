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


    .podcast_artwork {

      width: 100px;
      height: 100px;
      margin-right: 20px;
      display: inline-block;
      vertical-align: middle;
    }

    .podcast_content {

      max-width: 60%;
      display: inline-block;
      vertical-align: middle;
      font-size: 20px;
      width: 100%;
    }

    .edit_link {
      font-size: 12px;
      width: 20%;
      text-align: center;
    }


    @media only screen and (max-width: 500px) {

      #podcast_table {
        padding: 0 !important;
        text-align: center;
      }

      #podcast_table table {
        display: inline-table;
        width: 48% !important;
        vertical-align: top;
        height: 100%;
        margin-bottom: 1% !important;
      }

      .title_link {
        height: 2.1em;
        overflow: hidden;
        display: block;
        margin-bottom: 1em;
      }

      .edit_link {
        font-size: 12px !important;
        width: 50%;
      }

      .podcast_artwork,
      .podcast_content {
        display: block;
        font-size: 16px;
        margin: auto;
        max-width: 300px;
        text-align: center;
        margin-bottom: 6px;
      }


      .podcast_artwork a,
      .podcast_content a {
        display: block;
      }


      .podcast_artwork {
          margin-top: 12px;
      }

      .podcast_artwork {
        width: 90%;
        max-width: 150px;
        height: auto;
      }

      .podcast_artwork a,
      .podcast_artwork img {
        width: 100%;
        display: block;
          height: auto;
      }

      #header_padding {
        padding: 0 !important;
        margin-bottom: 24px;
      }

       #content_padding {
        padding: 0 !important;
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
  &nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
</div>

<table bgcolor="#fff" border="0" cellpadding="0" cellspacing="0" style="background:#fff; padding: 12px;" width="100%" id="backgroundTable">
<tr>
  <td align="center">

  <table bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0" id="header_padding" style="background:#FFFFFF; padding: 24px; width: 100%; max-width: 640px;">
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











  <table bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0"  id="content_padding" style="background:#FFFFFF; padding: 24px;  width: 100%; max-width: 640px;">
    <tr>
      <td style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 16px; color: #222;">
      <p>Hello {{{insert name "default=Podcaster"}}},</p>
      <p>As we approach the end of our nominations period we are starting to verify podcasts that have at least one nomination.</p>
      <p>To do this, we require each podcast to review the data we currently have, and provide any updates or missing information before {{date}}.</p>
      <p>Any podcasts that have not completed this before {{date}} will not be eligible for this years awards.</p>
      <p>The following podcasts require your review.</p>

    {{#if podcasts}}
  <table border="0" cellpadding="0" cellspacing="0"  id="podcast_table" style="padding: 12px; width: 100%;" >
    <tr>
      <td>
      {{#each podcasts}}





<table bgcolor="#251e25 !important" border="0" cellpadding="0" cellspacing="0" style="background-color:#251e25 !important; color:#FFF0FF !important; padding: 12px; margin: 0 auto; margin-bottom: 12px; border-radius: 6px;
  background-image:url('http://cdn.mcauto-images-production.sendgrid.net/4d8b1d2177da83e5/ee0fe3db-f698-4225-bbf2-fac481bf1465/700x700.png');
  background-position: top center; background-repeat: none;  width: 100%; max-width: 500px;" data-start-index="7988" data-end-index="8675">
    <tbody><tr data-start-index="8680" data-end-index="8684">
      <td style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 16px;" data-start-index="8691" data-end-index="8779">

      <div class="podcast_artwork" data-start-index="8787" data-end-index="8816">
        <a href="http://awards.localhost/wp/podcast/squirrel-talk/?authenticate=3224-3ba9a6210fba593bba9dad1910305f05utm_source=sendgrid&amp;utm_medium=email&amp;utm_campaign=newpodcast" data-start-index="8825" data-end-index="8849" target="_blank">
          <img src="http://awards.localhost/wp-content/uploads/2021/04/squirrel-talk-1618628125-300x300.jpg" width="100" height="100" style="border: 1px solid #FFF0FF;" data-start-index="8860" data-end-index="8957">
        </a>
      </div>

      <div class="podcast_content" data-start-index="8991" data-end-index="9020">
        <a href="http://awards.localhost/wp/podcast/squirrel-talk/?authenticate=3224-3ba9a6210fba593bba9dad1910305f05utm_source=sendgrid&amp;utm_medium=email&amp;utm_campaign=newpodcast" style="text-decoration: none; color: #FFF0FF;" data-start-index="9029" data-end-index="9111" target="_blank"  class="title_link">
          <span style="padding-bottom: 12px; display: block; font-weight: 500; line-height: 1em;" data-start-index="9122" data-end-index="9210">Squirrel Talk!</span>
        </a>
        <a href="http://awards.localhost/wp/podcast/squirrel-talk/?authenticate=3224-3ba9a6210fba593bba9dad1910305f05utm_source=sendgrid&amp;utm_medium=email&amp;utm_campaign=newpodcast" style="text-decoration: none; background:#FFF0FF; color:#251e25; font-size: 12px; display: inline-block; padding: 6px 12px; border-radius: 3px; width: 50%;" class="edit_link" data-start-index="9255" data-end-index="9458" target="_blank">
          <span style="display: block; font-weight: 500;" data-start-index="9469" data-end-index="9517">Edit</span></a>
      </div>

      </td>
    </tr>
  </tbody></table>



<table bgcolor="#363252 !important" border="0" cellpadding="0" cellspacing="0" style="background-color:#363252 !important; color:#FFF0FF !important; padding: 12px; margin: 0 auto; margin-bottom: 12px; border-radius: 6px;
  background-image:url('http://cdn.mcauto-images-production.sendgrid.net/4d8b1d2177da83e5/ee0fe3db-f698-4225-bbf2-fac481bf1465/700x700.png');
  background-position: top center; background-repeat: none;  width: 100%; max-width: 500px;" data-start-index="7988" data-end-index="8675">
    <tbody><tr data-start-index="8680" data-end-index="8684">
      <td style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 16px;" data-start-index="8691" data-end-index="8779">

      <div class="podcast_artwork" data-start-index="8787" data-end-index="8816">
        <a href="http://awards.localhost/wp/podcast/the-books-are-boring-podcast/?authenticate=0-adc2d9401ca40f685bbdb95923de8e19" data-start-index="8825" data-end-index="8849" target="_blank">
          <img src="http://awards.localhost/wp-content/uploads/2020/11/the-books-are-boring-podcast-1605562014-150x150.png" width="100" height="100" style="border: 1px solid #FFF0FF;" data-start-index="8860" data-end-index="8957">
        </a>
      </div>

      <div class="podcast_content" data-start-index="8991" data-end-index="9020">
        <a href="http://awards.localhost/wp/podcast/the-books-are-boring-podcast/?authenticate=0-adc2d9401ca40f685bbdb95923de8e19" style="text-decoration: none; color: #FFF0FF;" data-start-index="9029" data-end-index="9111" target="_blank" class="title_link">
          <span style="padding-bottom: 12px; display: block; font-weight: 500; line-height: 1em;" data-start-index="9122" data-end-index="9210">The Books Are Boring Podcast The Books Are Boring Podcast</span>
        </a>
        <a href="http://awards.localhost/wp/podcast/the-books-are-boring-podcast/?authenticate=0-adc2d9401ca40f685bbdb95923de8e19" style="text-decoration: none; background:#FFF0FF; color:#363252; font-size: 12px; display: inline-block; padding: 6px 12px; border-radius: 3px;" class="edit_link" data-start-index="9255" data-end-index="9458" target="_blank">
          <span style="display: block; font-weight: 500;" data-start-index="9469" data-end-index="9517">Edit</span></a>
      </div>

      </td>
    </tr>
  </tbody></table>


  <table bgcolor="{{this.bgcolor}} !important" border="0" cellpadding="0" cellspacing="0"  style="background-color:{{this.bgcolor}} !important; color:{{this.textcolor}} !important; padding: 12px; margin: 0 auto; margin-bottom: 12px; border-radius: 6px;
{{#equals this.textcolor '#FFF0FF'}}
  background-image:url('http://cdn.mcauto-images-production.sendgrid.net/4d8b1d2177da83e5/ee0fe3db-f698-4225-bbf2-fac481bf1465/700x700.png');
{{else}}
  background-image:url('http://cdn.mcauto-images-production.sendgrid.net/4d8b1d2177da83e5/65ea1184-07be-4b07-8e68-841104eb0b1c/700x700.png');
{{/equals}}
  background-position: top center; background-repeat: none;  width: 100%; max-width: 500px;" >
    <tr>
      <td style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 16px;">

      <div class="podcast_artwork">
        <a href="{{this.edit}}">
          <img src="{{this.image}}" width="100" height="100" style="border: 1px solid {{this.textcolor}};">
        </a>
      </div>

      <div class="podcast_content">
        <a href="{{this.edit}}" style="text-decoration: none; color: {{this.textcolor}};" class="title_link">
          <span style="padding-bottom: 12px; display: block; font-weight: 500; line-height: 1em;">{{{this.title}}}</span>
        </a>
        <a href="{{this.edit}}" style="text-decoration: none; background:{{this.textcolor}}; color:{{this.bgcolor}}; font-size: 12px; display: inline-block; padding: 6px 12px; border-radius: 3px;" class="edit_link">
          <span style="display: block; font-weight: 500;">Edit</span></a>
      </div>

      </td>
    </tr>
  </table>







        {{/each}}
</td></tr></table>


      {{/if}}





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
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
      max-width: 70%;
      max-width: calc(100% - 40px - 100px);
      display: inline-block;
      vertical-align: middle;
      font-size: 16px;
      width: 100%;
      text-align: center;
    }

    .edit_link {
      font-size: 12px;
      width: 20%;
      text-align: center;
    }

    #media_thumb {
      max-width: 100px;
      width: 100px;
      vertical-align: middle;
    }

    .media_link {
      vertical-align: middle;
      width: 100%;
    }

    .media_link  a {
      max-width: 350px;
      width: 48%;
      display: inline-block;
      text-align: center;
      margin: 2px;
      border-radius: 6px;
    }

    .media_link  a span {
      padding: 1em;
      display: block;
    }

    .media_attach {
      margin: 6px auto;
      width: 100%;
      display: block;
      text-align: center;
      border: 1px solid red;
    }










    @media only screen and (max-width: 550px) {

    .media_link a {
      max-width: 100%;
      width: 100%;
      text-align: center;
    }


  .media_link a span {
      padding: .5em;
    }

    .podcast_content {
      max-width: 100%;
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
        padding: 6 !important;
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

<table bgcolor="#343333" border="0" cellpadding="0" cellspacing="0" style="background-image:linear-gradient(#343333,#343333);  padding: 12px;" width="100%" id="backgroundTable">
<tr>
  <td align="center">

  <table bgcolor="#343333" border="0" cellpadding="0" cellspacing="0" style=" background-image:linear-gradient(#343333,#343333); width: 100%;   padding: 48px 12px 12px; background-position: center right; text-align: center; width: 100%; max-width: 640px; min-width: 400px;" align="center">
    <tr>
      <td style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 10px; color: #fffffe; text-align: center;" align="center">

        <table border="0" cellpadding="0" cellspacing="0" style="padding: 12px; margin: auto; " id="header_padding">
          <tr>
            <td>
               <img src="http://cdn.mcauto-images-production.sendgrid.net/4d8b1d2177da83e5/07cbbfdf-04e7-4bea-af2d-ab62d198e0d9/150x70.png" class="icon_award" style="max-width: 150px;" alt="Nominations" title="Nominations">
            </td>
          </tr>
        </table>

      </td>
    </tr>
  </table>











  <table bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0"  id="content_padding" style="background:#FFFFFF; padding: 24px;  width: 100%; max-width: 640px;">
    <tr>
      <td style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 15px; color: #222;">



         <p  style="font-family: serif; font-size: 50px; margin-bottom: 12px; color: #343333; text-align: center; margin-top: 24px;" class="header_title" >Congratulations</p>


  <p  style="font-family:  Helvetica Neue, Helvetica, Arial, sans-serif;  margin: 0 auto; text-align: center; margin-bottom: 24px; max-width: 500px; font-size:19px;" >Nominations for the 4th Annual Canadian Podcast Awards have closed, and we’re pleased to be able to congratulate you on being one of our finalists out of over 500 podcasts&nbsp;nominated.</p>

    {{#if podcasts}}
      {{#each podcasts}}



  <table bgcolor="#343333" border="0" cellpadding="0" cellspacing="0"  style=" color: #FFFFFF; padding: 12px; margin: 0 auto; margin-bottom: 12px; border-radius: 6px; width: 100%; " >
    <tr>
      <td style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 12px;">

      <div class="podcast_artwork">
        <a href="{{this.edit}}">
          <img src="{{this.image}}" width="100" height="100" style="border: 1px solid {{this.textcolor}};">
        </a>
      </div>

 <div class="podcast_content">
        <table border="0" width="100%">
          <tr>

            <td>
            {{#if awards}}
            {{#each awards}}
            <span style="padding-bottom: 6px; display: inline-block; width: 100%; font-weight: 500; line-height: 1em; font-size: 16px;" style=" color: #ffffff">{{this}}</span>
            {{/each}}
            {{/if}}
            </td>

          </tr></table>
      </div>
      </td>
    </tr>
  </table>


 {{/each}}
      {{/if}}

<p>Voting will begin {{startdate}} and is open to all Canadian podcasters until {{enddate}}.</p>

<p>Winners will be announced online in June and will receive a 1-year license for Hindenburg's Journalist Pro courtesy of <a href="https://hindenburg.com/?&utm_source=canpodawards&utm_medium=email&utm_campaign=nom_announce" style='color: #e41f3a;'>Hindenburg</a>.</p>

{{#if pc}}
<p>You have also received a nomination for the People’s Choice award, comprised of the top nominated podcasts across all categories, which is open to voting by your audience until {{enddate}}.</p>
{{/if}}

<p>A press release is a great way to spread the word of this incredible achievement. Our in house copywriter has drafted a template for you to use if you’d like to share it with your local network and media. <a href="http://bit.ly/2C15BPD" style='color: #e41f3a;'>http://bit.ly/2C15BPD</a></p>

<p>We have also created a set of graphics for you to promote this auspicious occasion. </p>

<p><strong>Please do not post about this announcement or nominations until after 11am on {{embargo}}</strong>.</p>

{{#if podcasts}}
  {{#each podcasts}}
    {{#if media}}
<table border="0">
  <tr>
    <td>
    <img src="{{media_thumb}}" id="media_thumb">
    </td>
    <td width=10></td>
    <td>
      <div class="media_link" data-start-index="11243" data-end-index="11267">
       {{#each media}}
      <a href="{{this.large}}" style="text-decoration: none; font-size: 13px; background: #333; color:#fff;  margin: 2px;"><span>{{this.name}}</span></a>
    {{/each}}
  </div>
    </td>
  </tr>
</table>
{{/if}}

  {{/each}}
{{/if}}










      <p>If you have any questions, let us know.</p>

      <p>Thank You</p>


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
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
  <meta name="format-detection" content="date=no">
  <meta name=”x-apple-disable-message-reformatting”>
  <meta property="og:title" content="{{subject}}" />
  <title>{{subject}}</title>

</head>
<body  style="padding: 0; margin: 0; background: #fff;">

<span style="display:none; font-size:0px; line-height:0px; max-height:0px; max-width:0px; opacity:0; overflow:hidden; visibility:hidden; mso-hide:all;">{{preview}}</span>


<table bgcolor="#fff" border="0" cellpadding="0" cellspacing="0" id="mailer_body" style="background:#fff; padding: 12px;" width="100%">
<tr>
  <td align="center">


<!--   <table bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0" id="mailer_content" style="background:#FFFFFF; padding: 12px 24px 0 24px;" width="640">
    <tr>
      <td style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 11px;  color: #999;" >
          {{preview}}
      </td>
    </tr>
    <tr>
      <td style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 11px; border-bottom: 1px solid #ddd; color: #999; padding-top: 12px;" >
      </td>
    </tr>
  </table>



  <table bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0" id="mailer_content" style="background:#FFFFFF; padding: 24px;" width="640">
    <tr>
      <td width="30">
        <img src="http://podcamptoronto.com/external/img/raster/icons_award_cinna.png" style="box-sizing: border-box; border: 0; display: block;" height="50" width="50">
      </td>
      <td width="10"></td>
      <td style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 15px; color:#e3402e; line-height: 1em;" align="left">
        Canadian<br>Podcast<br>Awards
      </td>
    </tr>
            <tr>
            <td height="30"></td>
    </tr>
  </table> -->


  <table bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0" id="mailer_content" style="background:#FFFFFF; padding: 24px;" width="640">
    <tr>
      <td align="center">
        <img src="http://podcamptoronto.com/external/img/raster/icons_award_cinna.png" style="box-sizing: border-box; border: 0; display: block;" height="50" width="50">
      </td>
    </tr>
    <tr>
            <td height="10"></td>
    </tr>
    <tr >

               <td style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 15px; color:#e3402e; line-height: 1em;" align="center">
        Canadian Podcast Awards

      </td>
    </tr>

        <tr>
            <td height="30"></td>
    </tr>

  </table>



  <table bgcolor="#fff" border="0" cellpadding="0" cellspacing="0" id="mailer_content" style="background:#fff; padding: 0 24px;" width="640">
    <tr>
      <td style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 16px; color: #222;  background:#eee; padding: 84px;" align="center">

<table border="0" cellpadding="0" cellspacing="0" style="" width="200" >
        <tr>
          <td style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 16px;" align="center" width="100" height="100">
            <a href="{{this.edit}}">
              <img src="{{this.image}}" width="200" height="200" style="border: 1px solid #ccc;">
            </a>
          </td>
        </tr>
        <tr>
          <td height="20"></td>
        </tr>
        <tr>
          <td style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 16px;" align="left">
            <a href="{{this.edit}}" style="text-decoration: none; color: currentColor">
              <span style="padding-bottom: 6px; display: block; font-weight: 500;">{{this.title}}</span>
              {{#if this.category}}
                <small style="padding-bottom: 6px; display: block;">{{#each this.category}}
                  {{#if @index}}, {{/if}}
                  {{this}}
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
            <a href="{{this.edit}}" style="text-decoration: none; color: currentColor; background-color: #ccc; font-size: 11px; display: block; padding: 12px; border-radius: 3px;">
              <span style="display: block; font-weight: 500;">Edit</span>
          </td>
        </tr>
      </table>


      </td>
    </tr>
  </table>




  <table bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0" id="mailer_content" style="background:#FFFFFF; padding: 0 24px;" width="640">
    <tr>
      <td style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 16px; color: #222;">
      <p>Hello {{insert -name- "default=Podcaster"}},</p>
      <p>This is an email letting you know that your podcast was recently submitted to our podcasting directory.</p>

      <p>Durring this process we have useed the information in your RSS feed, the PodChaser database, and additional data supplied by the user who submited your show to review and correctly display it on our site.</p>

      <p>If you'd like to edit the listing or provide additional information, you can do so by clicking your listing below.</p>

    {{#if podcasts}}
      {{#each podcasts}}
      <table bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0" id="mailer_content" style="background:#FFFFFF; border: 1px solid #ccc; padding: 12px; margin-bottom: 12px;" width="100%" >
        <tr>
          <td style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 16px;" align="left" width="100" height="100">
            <a href="{{this.edit}}">
              <img src="{{this.image}}" width="100" height="100" style="border: 1px solid #ccc;">
            </a>
          </td>
          <td width="20"></td>
          <td style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 16px;" align="left">
            <a href="{{this.edit}}" style="text-decoration: none; color: currentColor">
              <span style="padding-bottom: 6px; display: block; font-weight: 500;">{{this.title}}</span>
              {{#if this.category}}
                <small style="padding-bottom: 6px; display: block;">{{#each this.category}}
                  {{#if @index}}, {{/if}}
                  {{this}}
                {{/each}}
              </small>
              {{/if}}
            </a>
          </td>
          <td width="30"></td>
          <td align="center" >
            <a href="{{this.edit}}" style="text-decoration: none; color: currentColor; background-color: #ccc; font-size: 11px; display: block; padding: 12px; border-radius: 3px;">
              <span style="display: block; font-weight: 500;">Edit</span>
          </td>
        </tr>
      </table>
        {{/each}}
      {{/if}}

      <p>If you have any questions, let us know.</p>

      <p>Thank You</p>

      </td>
    </tr>
  </table>



  <table bgcolor="#d5f1f4" border="0" cellpadding="0" cellspacing="0" id="mailer_content" style="background:#d5f1f4; padding: 24px;" width="640">
    <tr>


      <td width="32">
    <a href="https://www.instagram.com/CanPodAwards/" style=""><img src="http://podcamptoronto.com/external/img/raster/2019/emails/icon-instagram-d.png" style="box-sizing: border-box; border: 0; height: 32px; width: 32px; display: block;" width="32" height="32"></a>
  </td>
      <td width="32">
    <a href="https://www.facebook.com/CanPodAwards/" style=""><img src="http://podcamptoronto.com/external/img/raster/2019/emails/icon-facebook-d.png" style="box-sizing: border-box; border: 0; height: 32px; width: 32px; display: block;" width="32" height="32"></a>
  </td>
      <td width="32">
    <a href="https://twitter.com/CanPodAwards/" style=""><img src="http://podcamptoronto.com/external/img/raster/2019/emails/icon-twitter-d.png" style="box-sizing: border-box; border: 0; height: 32px; width: 32px; display: block;" width="32" height="32"></a>
</td>

<td width="30%"></td>

<td style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 11px;  color: #555;" align="right">
  <p>This notice was sent to -EMAIL- automaticly on submission to our database.</p>
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
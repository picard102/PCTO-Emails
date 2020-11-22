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

?><!DOCTYPE html>
<html class="no-js">
<head>
  <meta name="format-detection" content="date=no">
  <meta name=”x-apple-disable-message-reformatting”>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php
    $css = file_get_contents('awards.css');
    echo '<style>'.$css.'</style>';
    //$css = file_get_contents('style.css');
    //echo '<style>'.$css.'</style>';
  ?>
</head>
<body class="aw-body">
  <!--*|IF:MC_PREVIEW_TEXT|*-->
<!--[if !gte mso 9]><!----><span class="mcnPreview Text" style="display:none; font-size:0px; line-height:0px; max-height:0px; max-width:0px; opacity:0; overflow:hidden; visibility:hidden; mso-hide:all;">-PREVIEW-</span><!--<![endif]-->
<!--*|END:IF|*-->
<div style="display:none; white-space:nowrap; font:15px courier; color:#ffffff; line-height:0; width:600px !important; min-width:600px !important; max-width:600px !important;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>


<table class="table-base" border="0" cellpadding="0" cellspacing="0" width="100%">
  <tr>
    <td class="awards-content">
      <table>
        <tr><td>
          <a href="https://awards.podcamptoronto.com" class="logo-top">
            <img src="http://podcamptoronto.com/external/img/raster/icons_award_cinna.png" width="65">
          </a>
        </td></tr>
        <tr><td>
          <h1 class="title">Congratulations,</br>your account has been approved!</h1>
          <p>We have approved your application and we are really excited to welcome you to CPA community!</p>

          <p>Click on the link below to complete your registration and start getting bookings!</p>

          <a href="https://awards.podcamptoronto.com/nominate/?utm_source=mailchimp&utm_medium=email&utm_campaign=lastcall" class="button">Join Us&nbsp;<span>&#x25ba;&#xFE0E;</span></a><br/>

        </td></tr>
      </table>
    </td>
  </tr>




  <tr>
    <td class="awards-footer">
      <?php
        require'templates/awardsfooter.php';
      ?>
    </td>
  </tr>







</table>
</body></html>

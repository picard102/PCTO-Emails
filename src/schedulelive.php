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
    $css = file_get_contents('schedulelive.css');
    echo '<style>'.$css.'</style>';
    $css = file_get_contents('style.css');
    echo '<style>'.$css.'</style>';
  ?>
</head>
<body >
  <!--*|IF:MC_PREVIEW_TEXT|*-->
<!--[if !gte mso 9]><!----><span class="mcnPreview Text" style="display:none; font-size:0px; line-height:0px; max-height:0px; max-width:0px; opacity:0; overflow:hidden; visibility:hidden; mso-hide:all;">*|MC_PREVIEW_TEXT|*</span><!--<![endif]-->
<!--*|END:IF|*-->
<div style="display:none; white-space:nowrap; font:15px courier; color:#ffffff; line-height:0; width:600px !important; min-width:600px !important; max-width:600px !important;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>

<table class="table-body">
  <tr>
    <td class="main-header">
      <table><tr><td>
      <p>🙌</p>
      <h1>5&nbsp;Panels, 7&nbsp;Workshops, 27&nbsp;Sessions </h1>

      <p>The 2019 schedule is up and with <strong>only 6 more days until the event</strong>, it’s time to get your ticket and make your own custom schedule for the&nbsp;weekend.</p>

      <p>Don’t forget to tell your friends or anyone you feel would be interested. PodCamp is a community event, the more, the merrier! There is something for everyone from novice to the&nbsp;experienced.</p>

      <p>So head over to our website for more details, and to reserve your spot. Space is&nbsp;limited.</p>

      <a href="https://2019.podcamptoronto.com/schedule?&utm_source=mailchimp&utm_medium=email&utm_campaign=schedulelive" class="button">View&nbsp;Schedule&nbsp;<span>&#x25ba;&#xFE0E;</span></a>
      <a href="https://2019.podcamptoronto.com/schedule?tickets&utm_source=mailchimp&utm_medium=email&utm_campaign=schedulelive" class="button">Get&nbsp;Tickets&nbsp;<span>&#x25ba;&#xFE0E;</span></a><br/>
      </td></tr></table>
    </td>
  </tr>


  <tr>
    <td class="logos-sponsor">
      <?php
        require'templates/sponsors.php';
      ?>
    </td>
  </tr>

  <tr>
    <td class="white-footer">
      <?php
        require'templates/footer.php';
      ?>
    </td>
  </tr>

</table>
</body></html>

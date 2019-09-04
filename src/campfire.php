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
    $css = file_get_contents('style.css');
    echo '<style>'.$css.'</style>';
    $css = file_get_contents('campfire.css');
    echo '<style>'.$css.'</style>';
  ?>
</head>
<body>
  <!--*|IF:MC_PREVIEW_TEXT|*-->
<!--[if !gte mso 9]><!----><span class="mcnPreview Text" style="display:none; font-size:0px; line-height:0px; max-height:0px; max-width:0px; opacity:0; overflow:hidden; visibility:hidden; mso-hide:all;">*|MC_PREVIEW_TEXT|*</span><!--<![endif]-->
<!--*|END:IF|*-->
<div style="display:none; white-space:nowrap; font:15px courier; color:#ffffff; line-height:0; width:600px !important; min-width:600px !important; max-width:600px !important;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>

<table class="table-body">


  <tr>
    <td class="main-header">
      <table><tr><td>
      <p>⛺</p>
      <h1>Hey&nbsp;Campers</h1>
      <p>Three years ago we launched CampFire, as an intimate fireside chat for podcasters, and each year has been an amazing evening filled with great discussions, new friends, and burnt&nbsp;marshmallows.</p>
      <p>So... It's Back. September 14&nbsp;2019.</p>
      <p>Tickets are limited, so we're giving you the first crack at&nbsp;them.</p>
      <a href="https://www.eventbrite.ca/e/campfire-2019-tickets-65250900199?aff=mc1" class="button">Register Now&nbsp;<span>&#x25ba;&#xFE0E;</span></a><br/>
      <p>Hope to roast some marshmallows with&nbsp;you!</p>
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
    <td class="tree-content">
    </td>
  </tr>

  <tr>
    <td class="main-content" align="center">
      <table><tr><td>
        <h2>Need <strong>FREE</strong> studio space to record your next&nbsp;episode?</h2>

        <p>CF Toronto Eaton Centre has launched Streaming at CF. A dedicated storytelling space that enables content creators to come together and tell their stories with fans.</p>
        <p>Located on Level 2 by the Queen Street entrance, Streaming at CF will enable content creators from all backgrounds to create, shoot and air content using state of the art equipment.</p>
        <p>So if you want to use the space for your next YouTube video or to record your next podcast, just email them at <a href="mailto:streamingatcf@cadillacfairview.com">streamingatcf@cadillacfairview.com</a> to book the space. <br>Include who you are, what you do, your social media channels, and when you want to use the space. Their team will get back to you to confirm the&nbsp;booking. </p>
        <p>All community members, including up-and-comers and newbie content creators, are welcome.</p>
      </td></tr></table>
    </td>
  </tr>






  <tr>
    <td class="main-footer">
      <?php
        require'templates/footer.php';
      ?>
    </td>
  </tr>







</table>
</body></html>

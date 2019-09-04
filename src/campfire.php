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
      <p>Three years ago we launched CampFire, an intimate fireside chat for podcasters, as well as our kick off to PodCamp Toronto and the Canadian Podcast Awards. Each year has been an amazing evening filled with great discussions, new friends, and burnt&nbsp;marshmallows.</p>
      <p>So... It's Back. September 14&nbsp;2019.</p>
      <p>Tickets are limited, so we're giving past attendees, like you, the first crack at&nbsp;them.</p>
      <a href="https://www.eventbrite.ca/e/campfire-2019-tickets-65250900199?aff=mc1" class="button">Register Now&nbsp;<span>&#x25ba;&#xFE0E;</span></a><br/>
      <p>Hope to roast some marshmallows with&nbsp;you!</p>
      </td></tr></table>
    </td>
  </tr>



  <tr>
    <td class="main-content">
      <table><tr><td>

      <h2>Cadillac Fairview launches Toronto's newest content studio, Streaming at CF, in celebration of Canadian creativity</h2>

      <p>The Canadian Podcast Awards showcase the diverse voices, ideas and values we have here in Canada, and give creators the recognition they deserve.</p>

      <p>Twenty-six categories are open to nominations including: Outstanding News & Current Affairs series, Outstanding Society & Culture series, and Outstanding Documentary series. Entries are free and open to podcasters from across&nbsp;Canada.  </p>

      <a href="https://awards.podcamptoronto.com/nominate/?utm_source=mailchimp&utm_medium=email&utm_campaign=gift" class="button">Nominate&nbsp;<span>&#x25ba;&#xFE0E;</span></a><br/>

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
    <td class="main-footer">
      <?php
        require'templates/footer.php';
      ?>
    </td>
  </tr>







</table>
</body></html>

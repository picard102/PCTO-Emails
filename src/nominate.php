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
    $css = file_get_contents('nominate.css');
    echo '<style>'.$css.'</style>';
    $css = file_get_contents('style.css');
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
    <td class="nominate-header">
      <table><tr><td>
      <p>🏆</p>
      <h1>Last call for&nbsp;Nominations</h1>
<p>


</p>

      <p>We're now accepting submissions for sessions, panels, and workshops. If you have a topic you're passionate about, come share it! PodCamp is only as good as those who step up to share their experience, knowledge and ideas with the community. Let's make this the best year&nbsp;ever.</p> <p>C'mon and hook us up with that big brain of yours. Don't be&nbsp;shy! </p>

      <a href="https://awards.podcamptoronto.com/nominate/?utm_source=mailchimp&utm_medium=email&utm_campaign=lastcall" class="button">Nominate&nbsp;<span>&#x25ba;&#xFE0E;</span></a><br/>
      <p><small>Nominations close <span>Dec</span>ember 29</small></p>
      </td></tr></table>
    </td>
  </tr>



  <tr>
    <td class="follow">
      <table>
        <tr>
          <td>
            <h2>Follow Us</h2>
            <p>Follow us to keep up to date with everything happening!</p>
          </td>
        </tr>

    <tr><td>
       <table border="0" width="100%" class="follow-modual">
        <tr>
          <td class="instagram"><a href="https://www.instagram.com/CanPodAwards/">Instagram</a></td>
          <td class="facebook"><a href="https://www.facebook.com/CanPodAwards">Facebook</a></td>
          <td class="twitter"><a href="https://twitter.com/CanPodAwards">Twitter</a></td>
        </tr></table>
    </td></tr>

      </table>

    </td>
  </tr>


  <tr>
    <td class="pull-sponsor">
      <table>
        <tr>
          <td class="sponsor-image"> <a href="https://podnews.net?utm_source=podcamp"><img src="http://podcamptoronto.com/external/img/raster/email-sponsors/podnews.png"></a></td>
          <td>
            <p>A  quick, daily update with global news for those involved in podcasting and on-demand&nbsp;audio. <a href="https://podnews.net?utm_source=podcamptoronto" class="button inline">Sign up&nbsp;<span>&#x25ba;&#xFE0E;</span></a></p>
          </td>
        </tr>
      </table>
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
    <td class="awards-footer">
      <?php
        require'templates/awardsfooter.php';
      ?>
    </td>
  </tr>







</table>
</body></html>

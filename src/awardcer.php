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
      <h1>Voting Has Ended</h1>

      <p>We'll be announcing the results in select categories this Saturday at PodCamp Toronto's 13th annual celebration event. If you're thinking of attending let us know. All you need is a PodCamp Toronto ticket to enter.</p>

      <img src="http://podcamptoronto.com/external/img/raster/2019/emails/bettys.png">
      <small>Access by stairs only, minors allowed with parental supervision.</small>
      <table class="locations">
        <tr>
        <td>
            <h5>7pm @ Betty's Upstairs</h5>
            <span class="adr">
              <span class="street-address">240 King St E</span>
              <span class="locality">Toronto</span>,
              <abbr class="region" title="Ontario">ON</abbr>
              <span class="postal-code">M5A 1K2</span>
              <span class="country-name">Canada</span>
            </span>
            <a href="https://goo.gl/maps/SoqHXDWYN2R2">Google Maps</a>
        </td>
        <td class="join">
          <a href="https://2019.podcamptoronto.com/?tickets&utm_source=mailchimp&utm_medium=email&utm_campaign=ceremony" class="button">Join Us&nbsp;<span>&#x25ba;&#xFE0E;</span></a>
          <p><small>Space is Limited</small></p>
        </td>
      </tr>
      </table>

        <p>
          If you can't attend, we'll be publishing the results Tuesday the 26th on our website.
        </p>

        <p>Thank you to everyone who voted and helped us showcase the very best Canadian podcasters, editors, and producers.</p>
        <br>
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
    <td class="hind-sponsor">
      <table>
        <tr>
          <td>
<img src="http://podcamptoronto.com/external/img/raster/email-sponsors/hindenburg.png">

            <p>Use the link to receive Hindenburg’s Podcamp 2019 60-day Journalist PRO trial and special discount.
            <a href="https://hindenburg.com/podcamp?utm_source=podcamptoronto" class="button inline">Sign up&nbsp;<span>&#x25ba;&#xFE0E;</span></a>
</p>

<p>Attend Hindenburg's <a href="https://2019.podcamptoronto.com/sessions/painting-pictures-with-sound-learn-the-basics-of-audio-editing/">workshop</a> to receive an extended 6-month Journalist PRO licence.</p>

<p>Enter the draw to win either a 2-year HJP licence or limited edition messenger bag at Hindenburg’s booth.</p>
          </td>
        </tr>
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
    <td class="awards-footer">
      <?php
        require'templates/awardsfooter.php';
      ?>
    </td>
  </tr>







</table>
</body></html>

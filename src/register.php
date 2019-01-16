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
    $css = file_get_contents('ticket.css');
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
    <td class="main-header">
      <table><tr><td>
      <p>🎫</p>
      <h1>Tickets Now&nbsp;Available</h1>

      <p>Tickets are free, but you'll find options to support PodCamp Toronto. PodCamp is expensive to produce, and that means we need the support of sponsors and attendees alike. Currently we're looking to cover the 46% gap in funding through your help, so if you're able and feel like PodCamp has value, we have options available.</p>
      <p>With over 60 sessions covering six categories, there's something to appeal to every digital hobbyist and professional.</p>
      <p>So head over to our website for more details, and to reserve your spot. Space is limited.</p>

      <h3>Early Bird : $20 gets you a T-Shirt</h3>
      <h3>Pay What You Can : $20 gets you a T-Shirt</h3>
      <h3>General Admision : Free</h3>

      <a href="https://2019.podcamptoronto.com/?tickets&utm_source=mailchimp&utm_medium=email&utm_campaign=tickets" class="button">Register Now&nbsp;<span>&#x25ba;&#xFE0E;</span></a><br/>
      </td></tr></table>
    </td>
  </tr>



  <tr>
    <td class="main-content">
      <table><tr><td>
      <h2>Give the Gift of&nbsp;Knowledge</h2>
      <h3>Last chance to get your proposals&nbsp;in!</h3>

      <p>We're still accepting submissions for sessions, panels, and workshops. If you have a topic you're passionate about, come share it! PodCamp is only as good as those who step up to share their experience, knowledge and ideas with the&nbsp;community.</p> <p>C'mon and hook us up with that big brain of&nbsp;yours.</p>

      <a href="https://2019.podcamptoronto.com/submit/session-submit/?utm_source=mailchimp&utm_medium=email&utm_campaign=gift" class="button">Apply Now&nbsp;<span>&#x25ba;&#xFE0E;</span></a><br/>
      <p><small>Submit by <span>Feb</span>ruary 1</small></p>
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
          <td class="instagram"><a href="https://www.instagram.com/podcamptoronto/">Instagram</a></td>
          <td class="facebook"><a href="https://www.facebook.com/podcampto">Facebook</a></td>
          <td class="twitter"><a href="https://twitter.com/podcamptoronto">Twitter</a></td>
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
    <td class="main-footer">
      <?php
        require'templates/footer.php';
      ?>
    </td>
  </tr>







</table>
</body></html>

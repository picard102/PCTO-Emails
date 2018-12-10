<?php
/**
 * Submission recipt confirmation
 *
 * PHP version 5
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
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php
    $css = file_get_contents('style.css');
    echo '<style>'.$css.'</style>';
  ?>
</head>
<body>


<table class="body back-body" align="center" valign="top">
<tr>
  <td class="padmef" align="center" valign="top">

    <table class="gen-content-frame">
    <tr>
      <td class="gen-content-header">
        <small>PodCamp Toronto</small>
        <img src="http://podcamptoronto.com/external/img/raster/2019/emails/mark.png">
      </td>
    </tr>
    <tr>
      <td  class="padme" align="center" valign="top">

      <h1>Daaaaam *|FNAME|*!</br> Back at it again with the PodCamp!</h1>
         <table class="gen-content-body">
        <tr>
          <td class="padmes">
            <p><strong>Heads up!</strong></p>
            <p>PodCamp Toronto is back this year on the 25th and 26th of February, and, as always we'll be at Ryerson University's Rogers Communication Centre, in the heart of downtown Toronto, for two days of learning, sharing and networking.</p>

            <p>We're accepting submissions for sessions, panels, and workshops now, so if you have a topic you're passionate about, come share it. PodCamp is only as good as those who step up to share their experience, knowledge and ideas with the community. It's the core of the PodCamp experience. C'mon and hook us up with that big brain of yours. Don't be shy!</p>

            <p>We'll be emailing shortly when tickets are available, but presenting is a great chance to soft-launch your latest presentation, get exposure and become famous! </p>

            <a href="http://2019.podcamptoronto.com/submit/session-submit/" class="linkb button">Apply to Present</a>
          </td>
        </tr>
        <tr>
          <td class="no-top">
            <?php
            require'templates/social.php';
            ?>
          </td>
        </tr>
      </table>
      </td>
    </tr>
    <tr>
      <td class="padmes" align="center" valign="top">



<table class="footer">
  <tr>
    <td class="footer-body">
      <a href="http://podcamptoronto.com">PodCampToronto.com</a>
      &bull;
      <a href="mailto:info@podcamptoronto.com">Contact Us</a>
      <p>&copy; PodCamp Toronto, 3-392 Wilson Ave, Toronto Ont, CAN M3H 1S9</p>
      <p>This message was sent to <a href="mailto:*|EMAIL|*">*|EMAIL|*</a> and intended for *|FNAME|*. You are reciving this becuase you have attended PodCamp Toronto previously.</p>
      <a href="*|UNSUB|*">Remove me from this list</a>
    </td>
  </tr>
</table>



      </td>
    </tr>
    </table>

  </td>
</tr>


</body>

<?php
  $GLOBALS['current_url'] = 'http://'.$_SERVER['SERVER_NAME'];
  echo '<script src="'.$GLOBALS['current_url'].':25710/livereload.js?snipver=1"></script>';
?>
</html>

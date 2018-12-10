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


<table class="body register-body" align="center" valign="top">
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
      <h1>Tickets Now Available!</h1>
         <table class="gen-content-body">
        <tr>
          <td class="padmes">

            <p>Tickets are free, but you'll find options to support PodCamp Toronto. PodCamp is expensive to produce, and that means we need the support of sponsors and attendees alike. Currently we're looking to cover the 46% gap in funding through your help, so if you're able and feel like PodCamp has value, we have options available.</p>

            <p>With over 60 sessions covering six categories, there's something to appeal to every digital hobbyist and professional.</p>
            <p>So head over to our website for more details, and to reserve your spot. Space is limited.</p>
            <a href="http://2019.podcamptoronto.com/?tickets" class="linkb button">Get Your Tickets Now</a>

            <p>And there's still time to <a href="http://2019.podcamptoronto.com/submit/session-submit/">submit</a> your speaking proposals as well. Cut off is 6pm on Sunday the 19th, with the schedule being released on the next morning.</p>
          </td>
        </tr>

        <tr>
          <td class="no-top">
            <?php
            require'templates/social.php';
            ?>
          </td>
        </tr>
        <tr><td class="no-top">
<?php
  require'templates/sponsors.php';
?>
</td></tr>

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

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
?>
<!DOCTYPE html>

<html class="no-js">
<head>
  <meta content="width=device-width, initial-scale=1" name="viewport"><?php
      $css = file_get_contents('style.css');
      echo '<style>'.$css.'</style>';
    ?>

  <title>
  </title>
</head>

<body>
  <table align="center" class="body thanks-body" valign="top">
    <tr>
      <td align="center" class="padmef" valign="top">
        <table class="gen-content-frame">
          <tr>
            <td class="gen-content-header"><small>PodCamp Toronto</small> </td>
          </tr>


          <tr>
            <td align="center" class="padme" valign="top">
              <h1>Thank You *|FNAME|*!</h1>

              <table class="gen-content-body">
                <tr>
                  <td class="padmes">

                  <p>Thank you for joining us for another successful year!</p>

                  <p>Since its inception in 2007, PodCamp Toronto has had a reputation for being pretty awesome, and without a doubt, <strong>#PCTO17</strong> was one of our best years yet, thanks to you, our volunteers, and generous sponsors!</p>

                  <p>The dedication from everyone in the PodCamp community is part of what inspires us to do what we do!</p>

                  <p>If you are interested in helping out with PodCamp next year <a href="https://goo.gl/forms/NnddMgVFFQcNcaHK2">let us know</a>. If you'd like to make a financial contribution you can <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=ZFP7L2XQDXSQW">donate via paypal</a> or by sending an e-transfer to sponsorship@podcamptoronto.com</p>

                  <h4>There's Still More</h4>

                  <p>If you have any <strong>pictures</strong> from PCTO17, share them in our <a href="https://www.flickr.com/groups/podcamptoronto/">Flickr group</a>, and share any other content you've created with <strong>#PCTO17</strong> on any other platform.</p>

                  <p>Leave <strong>feedback</strong> on sessions you attended, to let the presenter know what you loved about their presentation, or what could be improved. </p>

                  <p>We're also asking our incredible presenters to post their videos and slides so you can go back and either review them or enjoy them for the first time. We'll send out an update on our social channels as those come.</p>

                  <p>That's it for now! Pencil <strong>Feb. 24 and 25, 2018</strong> into your calendars and stay tuned for updates!</p>

                  </td>
                </tr>

                <tr>
                  <td class="no-top">
                  <?php require'templates/sponsors.php'; ?>
                  </td>
                </tr>

                <tr>
                  <td class="no-top">


          <h4>MeetVibe</h4>
          <table class="meetvibe"><tr>
          <td><a href="https://meetvibe.com/pcto"><img src="http://podcamptoronto.com/external/img/raster/2017/emails/meetvibeapp.png"></a></td>
          <td>
          <p>Maximize networking opportunities and stay connected with the right people after PodCamp Toronto.</p>
                    </td></tr></table>



                    <h4>Think you got a great podcast?</h4>

                    <table class="meetvibe">
                      <tr>
                        <td>
                          <a href="https://meetvibe.com/pcto">
                            <img src="http://podcamptoronto.com/external/img/raster/email-sponsors/towebfest.png">
                          </a>
                        </td>
                        <td>
                          <p>Our friends at <a href="http://www.towebfest.com/" target="_blank">T.O.WebFest</a> are offering a special discount code to PodCampers who want to submit to their Podcast Series category. Deadline to enter March 28!<br>
                          <a href="http://www.towebfest.com/submit" target="_blank">Get on it now</a> and you could be a winner at #towebfest 2017.</p>
                          <p>Discount code: <strong>PODCAMPWEBFEST</strong></p>
                        </td>
                      </tr>
                    </table>

                  </td>
                </tr>

                <tr>
                  <td class="no-top">
                  <?php require'templates/social.php'; ?>
                  </td>
                </tr>


              </table>
            </td>
          </tr>


          <tr>
            <td align="center" class="padmes" valign="top">
              <table class="footer">
                <tr>
                  <td class="footer-body">
                    <a href="http://podcamptoronto.com">PodCampToronto.com</a> &bull; <a href="mailto:info@podcamptoronto.com">Contact Us</a>
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
  </table>
  <?php
    $GLOBALS['current_url'] = 'http://'.$_SERVER['SERVER_NAME'];
    echo '<script src="'.$GLOBALS['current_url'].':25710/livereload.js?snipver=1"></script>';
  ?>
</body>
</html>
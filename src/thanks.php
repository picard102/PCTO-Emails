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

                  <p>Since its inception in 2007, PodCamp Toronto has had a reputation for being pretty awesome. Without a doubt, #PCTO14 held true to that this year, thanks in part to you!</p>




<h4>Give Back</h4>
<p>If you are interested in helping out with PodCamp next year <a href="https://goo.gl/forms/NnddMgVFFQcNcaHK2">let us know</a>. Or if you'd like to make a financial contribution to cover this years costs you can donate via paypal or by sending an e-transfer to sponsorship@podcamptoronto.com</p>

<h4>Pics or it didn't happen</h4>
<p>Share pics you took on our PodCamp Toronto <a href="https://www.flickr.com/groups/podcamptoronto/">Flickr group</a>, and share blog/other content you've created at #PCTO17</p>


<h4>Volunteers</h4>
<p>Lastly, we need to thank the volunteers that helped our organizing team pull off this year’s event. We couldn’t have done it without their support.</p>

<p>That’s it for now! Pencil Feb. 24 and 25, 2018 into your calendars (tentative dates) and stay tuned for updates!</p>

<h4>Comment</h4>
Never fear: our Sessions postings are still active! We've asked our incredible presenters to post their videos and slides so you can go back and either review them or enjoy them for the first time. Share them with your friends and use them to educate your relations on the things you're passionate about!


<h4>Lastly</h4>
Thank you for joining us for another successful year! The dedication from everyone in the PodCamp community is part of what inspires us to do what we do!


                  </td>
                </tr>





                <tr>
                  <td class="no-top">
                  <?php require'templates/sponsors.php'; ?>
                  </td>
                </tr>


                <tr>
                  <td class="no-top">
                  <?php require'templates/social.php'; ?>
                  </td>
                </tr>




                <tr>
                  <td class="no-top">
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
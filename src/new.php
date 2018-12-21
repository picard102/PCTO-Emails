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
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php
    $css = file_get_contents('new.css');
    echo '<style>'.$css.'</style>';
    $css = file_get_contents('style.css');
    echo '<style>'.$css.'</style>';
  ?>
</head>
<body>

<table class="table-body">


  <tr>
    <td class="main-header">
      <table><tr><td>
      <p>🎁</p>
      <h1>Give the Gift of&nbsp;Knowledge</h1>
      <p>We're accepting submissions for sessions, panels, and workshops now, so if you have a topic you're passionate about, come share it. PodCamp is only as good as those who step up to share their experience, knowledge and ideas with the&nbsp;community.</p> <p>C'mon and hook us up with that big brain of yours. Don't be&nbsp;shy! </p>

      <a href="https://2019.podcamptoronto.com/submit/session-submit?umt_source=giftmailer" class="button">Apply Now  <span>▶</span></a><br/>
      <p><small>Submit by February 1</small></p>
      </td></tr></table>
    </td>
  </tr>



  <tr>
    <td class="main-content">
      <table><tr><td>
      <h2>Canadian Podcasting Awards</h2>
      <h3>Nominations close Jan 1</h3>
      <p>Bla</p>
      </td></tr></table>
    </td>
  </tr>


  <tr>
    <td class="pull-sponsor">
      <table>
        <tr>
          <td> <a href="https://podnews.net?utm_source=podcamp"><img src="http://podcamptoronto.com/external/img/raster/email-sponsors/podnews.png"></a></td>
          <td>
            <p>A  quick, daily update with global news for those involved in podcasting and on-demand&nbsp;audio. <a href="https://podnews.net?utm_source=podcamp" class="button inline">Sign up <span>▶</span></a></p>
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
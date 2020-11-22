<?php
/**
 * Schedule notice of time and room
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

<table class="body schedule-body">
  <tr>
    <td>

      <table border="0" class="layout">
        <tr>
          <td class="content-col">

<table border="0" style="width: 100%;">

  <tr>
    <td></td>
    <td class="content-header">
      <small>PodCamp Toronto</small>
      <h1>Your -TYPE- made it!</h1>
    </td>
  </tr>

  <tr>
    <td style="background: #fff;" class="fill"></td>
    <td>
      <table class="content-body">
        <tr>
          <td>
            <p><strong>Hi -FNAME-</strong>,</p>
            <p>Congrats, your -TYPE-, &quot;-TITLE-&quot; has been selected for inclusion on our 2019 schedule.</p>
            <h3>-DATE- at -TIME-, in room -ROOM-</h3>
            <p>If for some reason you cannot present at the time assigned, please let us know by clicking on the withdraw button on your <a href="-LINK-">-TYPE- page</a>.</p>
          </td>
        </tr>
      </table>
    </td>
  </tr>


 <tr>
    <td style="background: #fff;" class="fill"></td>
    <td>
      <table class="content-body">
        <tr>
          <td class="no-top">

 <table class="tips-body">
  <tr>
    <td>

<h4>Some Tips</h4>
<ul>
  <li>Plan to be at least 10 minutes early.</li>
  <li>While you don't need to have a presentation, if you do, please bring your own dongle. If you're in rooms 183, 185, 204, or 201, you'll need to be able to connect via VGA input. All others are HDMI.</li>
  <li>Please be prepared to be able to present even if you can't connect to Wi-Fi for some reason.</li>
  <li>Plan for your session/presentation content to be a max of 60 minutes long. Shorter is ok too!</li>
  <li>Finally, please let us know if you need to back out. It happens!</li>
</ul>

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
  require'templates/footer-submit.php';
?>

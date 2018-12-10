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

<table class="body submit-body">
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
      <h1>-TYPE- <br/>Proposal Received</h1>
    </td>
  </tr>

  <tr>
    <td style="background: #fff;"></td>
    <td>
      <table class="content-body">
        <tr>
          <td>
            <p><strong>Hi -FNAME-</strong>,</p>
            <p>We have received your -TYPE- proposal, &quot;<em>-TITLE-</em>.&quot;</p>
            <p>Our team will review it within the next 48 hours and let you know if it meets the <a href="http://www.podcamptoronto.com/external/files/pcto_speakers.pdf">content guidelines</a> for #pcto19.</p>
            <p>In the meantime, to review or check the status of your -TYPE- proposal, please visit your <a href="-LINK-">submission page</a>.</p>
            <p>Feel free to contact us with any questions or concerns.</p>
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
            <?php
            require'templates/social.php';
            ?>
          </td>
        </tr>
      </table>
    </td>
  </tr>

</table>

<?php
  require'templates/footer-submit.php';
?>

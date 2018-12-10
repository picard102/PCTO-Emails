<?php
/**
 * Submission approval notice
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

<table class="body approved-body">
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
      <h1>-TYPE- Approved!</h1>
    </td>
  </tr>

  <tr>
    <td style="background: #fff;" class="fill"></td>
    <td>
      <table class="content-body">
        <tr>
          <td>
            <p><strong>Hi -FNAME- </strong>,</p>
            <p>Congrats! Your -TYPE- proposal, &quot;<em>-TITLE-</em>,&quot; has been reviewed and meets our guidelines for content at #pcto19.</p>
            <p>The next step is that your -TYPE- is reviewed by the community.</p>
            <p>Attendees can &ldquo;vote&rdquo; for your session by using the Bookmark link on the session description page. Submissions close on Wednesday, February 10th, at which point we&rsquo;ll develop the schedule based on community interest and PodCamp topic representation, as well as some special considerations to be made by the organizing team. The schedule will then be released on Monday, February 15th!</p>
            <p>You can review your -TYPE- via your <a href="-LINK-">submission page</a>.</p>
          </td>
        </tr>
      </table>
    </td>
  </tr>

</table>

<?php
  require'templates/footer-submit.php';
?>

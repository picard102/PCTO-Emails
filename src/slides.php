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
    $css = file_get_contents('style.css');
    echo '<style>'.$css.'</style>';
  ?>
</head>
<body>

<table class="body submitlive-body">
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
      <h1>Thanks</h1>
    </td>
  </tr>

  <tr>
    <td style="background: #fff;"></td>
    <td>
      <table class="content-body">
        <tr>
          <td>
            <p><strong>Hey -FNAME-</strong>,</p>

<p>Awesome job. We put on a great weekend and we couldn't have done it without you.</p>

<p>Not everyone who wanted to come to your -TYPE- was able to. Whether it's because they were the in the next room over or because they live in Cambodia, there are people out there who still want to take in what you had to say. And we have a solution for that!</p>

<p>If you go back to your <a href="-LINK-">session</a> posting on our website, you'll see that you can now post your videos and slides. While it's unfortunate that we weren't able to record sessions this year, at least we can keep it going with the materials you worked so hard on in advance.</p>

<p>Also attendees can comment on and review your session now, so get in there and bask in your accolades!</p>

<p>Also attendees can comment on and review your session now, here's what some of them had to say:</p>



<p>We had a really great time, and we hope you did too.</p>


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



<?php
/**
 * Rejection notice
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

<table class="body reject-body">
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
      <h1>Something&#39;s not right.</h1>
    </td>
  </tr>

  <tr>
    <td style="background: #fff;" class="fill"></td>
    <td>
      <table class="content-body">
        <tr>
          <td>
          <p><strong>Hi -FNAME-</strong>,</p>
          <p>Unfortunately, it looks like your -TYPE- proposal, &quot;<em>-TITLE-</em>,&quot; does not meet the content guidelines for #pcto19.</p>
          <p>Here are some notes from the PCTO Organizing Committee about why we couldn&rsquo;t accept your submission:</p>
          <p>-REASON-</p>
          <p>You can review your -TYPE- proposal on your <a href="-LINK-">submission page</a> page and resubmit with the required adjustments.</p>
          </td>
        </tr>
      </table>
    </td>
  </tr>

</table>

<?php
  require'templates/footer-submit.php';
?>

<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
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



<table class="body waitlist-body">
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
    </td>
  </tr>

  <tr>
    <td style="background: #fff;" class="fill"></td>
    <td>
      <table class="content-body">
        <tr>
          <td>
            <p><strong>Hi -FNAME-</strong>,</p>
            <p>Unfortunatly, your -TYPE-, &quot;-TITLE-&quot; was not selected for inclusion on our 2017 schedule.</p>
            <p>We&#39;ll put you on a waiting list and if a spot opens up, notify you.</p>
          </td>
        </tr>
      </table>
    </td>
  </tr>

</table>

<?php
//require'templates/social.php';
require'templates/footer-submit.php';
?>

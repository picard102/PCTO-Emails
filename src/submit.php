<?php
/**
 * The template for displaying the index
 *
 * Displays the index of the theme
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
<?php require'templates/header.php'; ?>

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
            <p>Our team will review it within the next 48 hours and let you know if it meets the <a href="http://www.podcamptoronto.com/external/files/pcto_speakers.pdf">content guidelines</a> for #PCTO17.</p>
            <p>In the meantime, to review or check the status of your -TYPE- proposal, please visit your <a href="-LINK-">submission page</a>.</p>
            <p>Feel free to contact us with any questions or concerns.</p>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>



<?php
//require'templates/social.php';
require'templates/footer.php';
?>



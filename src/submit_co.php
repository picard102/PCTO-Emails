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
<?php require'templates/header-submit.php'; ?>

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
            <p><strong>Hey</strong>,</p>
            <p>We have received a -TYPE- proposal, &quot;<em>-TITLE-</em>.&quot;  submited by -NAME- that includes you.</p>
            <p>Our team will review is now reviewing the submission, and you can track its progress at the <a href="-LINK-">submission page</a></p>
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
//require'templates/social.php';
require'templates/footer-co.php';
?>



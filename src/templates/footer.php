<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @category PHP
 * @package  @theme_folder@
 * @author   @author_name@  <@author_email@>
 * @version  Release: @package_version@
 * @link     @git_link@
 */

?>

<table class="footer">
    <tr><td class="social-footer">
    <a href="https://www.instagram.com/podcamptoronto/" ><img src="http://podcamptoronto.com/external/img/raster/2019/emails/instagram.png"></a>
    <a href="https://www.facebook.com/PodCampTO" ><img src="http://podcamptoronto.com/external/img/raster/2019/emails/facebook.png"></a>
    <a href="https://twitter.com/podcamptoronto"><img src="http://podcamptoronto.com/external/img/raster/2019/emails/twitter.png"></a>
  </td></tr>
  <tr>
    <td>
      <a href="http://podcamptoronto.com">PodCampToronto.com</a>
      &bull;
      <a href="mailto:info@podcamptoronto.com">Contact Us</a>
      <p>&copy; PodCamp Toronto, 3-392 Wilson Ave, Toronto Ont, CAN M3H 1S9</p>
      <p>This message was sent to -EMAIL- and intended for -FNAME-. You are reciving this becuase you are a past attendee of PodCamp Toronto.</p>
    </td>
  </tr>

</table>


</body>
<?php
  $GLOBALS['current_url'] = 'http://'.$_SERVER['SERVER_NAME'];
  echo '<script src="'.$GLOBALS['current_url'].':25710/livereload.js?snipver=1"></script>';
?>
</html>

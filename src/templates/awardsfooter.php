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

<table class="awards-footer">
    <tr><td class="social-footer">
    <a href="https://www.instagram.com/CanPodAwards/" ><img src="http://podcamptoronto.com/external/img/raster/2019/emails/icon-instagram-d.png"></a>
    <a href="https://www.facebook.com/CanPodAwards" ><img src="http://podcamptoronto.com/external/img/raster/2019/emails/icon-facebook-d.png"></a>
    <a href="https://twitter.com/CanPodAwards"><img src="http://podcamptoronto.com/external/img/raster/2019/emails/icon-twitter-d.png"></a>
  </td></tr>
  <tr>
    <td>
      <a href="https://awards.podcamptoronto.com?utm_source=mailchimp&utm_medium=email&utm_campaign=lastcall">Awards.PodCampToronto.com</a>
      &bull;
      <a href="mailto:awards@podcamptoronto.com">Contact Us</a>
      <p>&copy; Canadian Podcast&nbsp;Awards, <span class="apple-link">3&zwnj;-&zwnj;3&zwnj;92 <span>Wilson Ave</span>, Toronto Ont, CAN <span>M3H</span> 1S9</span></p>
      <p>This message was sent to <span class="apple-link"><a href="*|EMAIL|*">*|EMAIL|*</a></span> and intended for <span class="apple-link">*|FNAME|*</span>. You are reciving this becuase you are a member of the Canadian Podcast&nbsp;Community.</p>
      <p><a href="*|UNSUB|*">Remove me from this list</a>
      <br><a href="*|UPDATE_PROFILE|*">Update subscription preferences</a></p>
    </td>
  </tr>

</table>


</body>
<?php
  $GLOBALS['current_url'] = 'http://'.$_SERVER['SERVER_NAME'];
  echo '<script src="'.$GLOBALS['current_url'].':25710/livereload.js?snipver=1"></script>';
?>
</html>

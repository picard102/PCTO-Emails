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
    </td>
    <td class="logo_col">
        <img width="150" src="http://podcamptoronto.com/external/img/raster/logo2.png">
    </td>
  </tr>

</table>


<table>
  <tr>
    <td class="center" align="center" valign="top">
      <center>
        <img width="150" src="http://podcamptoronto.com/external/img/raster/logo.png" class="center">
      </center>
    </td>
  </tr>

  <tr>
    <td>
     <a href="http://podcamptoronto.com">PodCampToronto.com</a>
      &bull;
      <a href="mailto:info@podcamptoronto.com">Contact Us</a>
    </td>
  </tr>

  <tr>
    <td>
      <p>&copy; PodCamp Toronto, 3-392 Wilson Ave, Toronto Ont, CAN M3H 1S9</p>
      <p>This message was sent to -EMAIL- and intended for -FNAME-. You are reciving this becuase you submitted a speaking proposal to PodCamp Toronto.</p>
    </td>
  </tr>
</table>


</body>
<?php
  $GLOBALS['current_url'] = 'http://'.$_SERVER['SERVER_NAME'];
  echo '<script src="'.$GLOBALS['current_url'].':25710/livereload.js?snipver=1"></script>';
?>
</html>
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

<style>

  iframe {
    width: 100%;
    display: block;
    height: 40vh;
    margin-bottom: 24px;
  }


</style>

<a href="nominate.php">Nominate</a>
<iframe src="nominate.php"></iframe>


<a href="new.php">New</a>
<iframe src="new.php"></iframe>

<a href="slides.php">Slides</a>
<iframe src="slides.php"></iframe>

<a href="thanks.php">Thankyou</a>
<iframe src="thanks.php"></iframe>

<a href="welcome.php">Welcome</a>
<iframe src="welcome.php"></iframe>

<a href="register.php">Register</a>
<iframe src="register.php"></iframe>

<a href="back.php">Back</a>
<iframe src="back.php"></iframe>

<a href="submit.php">Submit</a>
<iframe src="submit.php"></iframe>

<a href="submit_co.php">Submit Co</a>
<iframe src="submit_co.php"></iframe>

<a href="edit.php">Edit</a>
<iframe src="edit.php"></iframe>

<a href="approved.php">Approved</a>
<iframe src="approved.php"></iframe>

<a href="reject.php">Reject</a>
<iframe src="reject.php"></iframe>

<a href="schedule.php">Schedule</a>
<iframe src="schedule.php"></iframe>

<a href="schedule_co.php">Schedule Co</a>
<iframe src="schedule_co.php"></iframe>

<a href="waitlist.php">Waitlist</a>
<iframe src="waitlist.php"></iframe>

<a href="submit_live.php">Submit Live</a>
<iframe src="submit_live.php"></iframe>




<?php
  $GLOBALS['current_url'] = 'http://'.$_SERVER['SERVER_NAME'];
  echo '<script src="'.$GLOBALS['current_url'].':25710/livereload.js?snipver=1"></script>';
?>

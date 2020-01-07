<?php
$twitch = file_get_contents("https://api.shadowdev.cf/onlyhits/viewers.php");
$shoutcast = file_get_contents("https://api.shadowdev.cf/onlyhits/slisten.php");
$total = $twitch + $shoutcast;
echo $total;
?>
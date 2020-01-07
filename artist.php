<?php
//************************************//
//OnlyHit API v1.0.0 (3)              //
//Made by X_Shadow_#5962              //
//Original script by Xem              //
//Use code Shadow_ in the item shop   //
//or Xem (this one is better)         //
//************************************//
$title = file_get_contents('http://74.63.196.206:2640/currentsong');
$encoded = urlencode($title);

//Allmusic Info
$artist = strstr($title, ' - ', true);
$commacut = strstr($artist, ',', true); 
if (empty($commacut)) {
    $firstartist = $artist;
} else {
    $firstartist = $commacut;
}
echo $firstartist;
?>
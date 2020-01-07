<?php
//************************************//
//OnlyHit API v1.0.0 (3)              //
//Made by X_Shadow_#5962              //
//This script was made by Xem         //
//Use code Shadow_ in the             //
//item shop or Xem (this one is better)//
//************************************//
include("functions.php");
$KeyWord = file_get_contents("http://74.63.196.206:2640/currentsong?sid=1");
$keyword_s = str_replace(" ", "%20", $KeyWord);
$nonparsedJSON = search_vod($keyword_s);
$parsed = json_decode($nonparsedJSON);
$videoID = $parsed->items[0]->id->videoId;
?>
<iframe src="https://www.youtube.com/embed/<?php echo $videoID ?>?autoplay=1" style="position:fixed; top:0; left:0; bottom:0; right:0; width:100%; height:100%; border:none; margin:0; padding:0; overflow:hidden; z-index:999999;">
    Your browser doesn't support iframes
</iframe>
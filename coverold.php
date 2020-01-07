<?php
$xmlstr = file_get_contents("https://onlyhit.us/rss-feed-30-player-1");
$defaultXML = new SimpleXMLElement($xmlstr);
$newImg = $defaultXML->channel->item[0]->enclosure;
if (!isset($newImg['url'])) {
    $url = "https://api.shadowdev.cf/onlyhits/NoCover.png";
} else {
    $url = $newImg['url'];
}

$img = 'cover.png';
file_put_contents($img, file_get_contents($url));
header("Content-type: image/png");
readfile("cover.png");
exit;
?>
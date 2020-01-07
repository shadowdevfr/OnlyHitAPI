<?php
$xmlstr = file_get_contents("https://onlyhit.us/rss-feed-30-player-1");

$defaultXML = new SimpleXMLElement($xmlstr);
$title = $defaultXML->channel->item[0]->title;
if ($title == "Advert:OnlyHit - Advert:Ad") {
    echo "Advertisement";
} else {
    echo $title;
}

?>
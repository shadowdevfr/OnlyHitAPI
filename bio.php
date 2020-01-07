<?php
//************************************//
//OnlyHit API v1.0.0 (3)              //
//Made by X_Shadow_#5962              //
//This script was made by Xem         //
//Use code Shadow_ in the             //
//item shop or Xem (this one is better//
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

$allmusicgrab = file_get_contents(htmlspecialchars('https://www.allmusic.com/search/artists/'.$firstartist));
$artistfind1 = explode('https://www.allmusic.com/artist/', $allmusicgrab)[1]; 
$artistfind2 = strstr($artistfind1, '" data', true);
$artistbiopage = 'https://www.allmusic.com/artist/'.$artistfind2.'/biography';
$artistbiopageget = file_get_contents($artistbiopage);
$artistbiocut1 = explode('reviewBody">', $artistbiopageget)[2]; 
$artistbiocut2 = strstr($artistbiocut1, '</section>', true);
$utf8allmusic = preg_replace('/u([\da-fA-F]{4})/', '&#x\1;', $artistbiocut2);
$nobackw = str_replace("\\n","", $utf8allmusic);
$nobackwn = preg_replace('/\\\\/', '', $nobackw);
$cleanw = strip_tags($nobackwn);
//
// J'ai add ça :
//
$biography = str_replace(".", ".<br/>", $cleanw);

if (empty($artistfind2)) {
    $artistbio = "No biography available";
} elseif (empty($artistbiocut2)) {
    $artistbio = "No biography available";
} else {
    $artistbio = $biography;
}

echo $artistbio;
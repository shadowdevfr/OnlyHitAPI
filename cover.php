<?php
//************************************//
//OnlyHit API v1.0.0 (3)              //
//Made by X_Shadow_#5962              //
//With the help of A6D                //
//Use code Shadow_ in the             //
//item shop or Xem (this one is better//
//************************************//
$title = file_get_contents('http://radio.streemlion.com:2640/currentsong');
$encoded = urlencode($title);
$deezerinfo = file_get_contents('http://api.deezer.com/search?q='.$encoded);
$slashdeezer = str_replace('\/', '/', $deezerinfo);
 
//Cover Title
$covert1 = explode('"cover_big":"', $slashdeezer)[1];
$covert2 = strstr($covert1, '","', true);
$covertcut = explode('deezer.com/images/cover/', $covert2)[1];
//Si le cover est vide alors utiliser El famoso base one sur le logo
//J'ai utilisé l'url discord j'éspère que ça n'expire pas :/
if (empty($covertcut)) {
    $titlecover = "https://cdn.discordapp.com/attachments/663382471152369721/663398481423237122/unknown.png";
} else {
    $titlecover = 'http://cdn-images.deezer.com/images/cover/'.$covertcut;
}
//Sauvegarde le cover sur le fichier cover.png
//Pour une meilleure fluidité puis le lis
$img = 'cover.png';
file_put_contents($img, file_get_contents($titlecover));
header("Content-type: image/png");
readfile("cover.png");
exit;
?>

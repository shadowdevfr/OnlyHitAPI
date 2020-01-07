<?php
//************************************//
//OnlyHit API v1.0.0 (3)              //
//Made by X_Shadow_#5962              //
//This script was made by Xem         //
//Use code Shadow_ in the             //
//item shop or Xem (this one is better)//
//************************************//
function search_vod($searchterm) {
    $apikey = "AIzaSyAusJROAbaPkI2jfGmzvzS8Vh8qtL5y4FY";
	$ch = curl_init();

	curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_URL, "https://www.googleapis.com/youtube/v3/search?part=snippet&q=" . $searchterm . "&maxResults=1&key=" . $apikey . "&type=video");
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);     
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		"part: $searchterm"
	));

	$data = curl_exec($ch);
	curl_close($ch);
	return $data;
}
?>
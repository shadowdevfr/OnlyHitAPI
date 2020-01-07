<?php 
function file_get_contents_curl($url) {
	$ch = curl_init();

	curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);     
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		'Client-ID: rc5aesfd1lt8h83vj7essvrf53e8so'
	));

	$data = curl_exec($ch);
	curl_close($ch);
	return $data;
}

$url = 'https://api.twitch.tv/helix/streams?user_login=onlyhitus';
$json_array = json_decode(file_get_contents_curl($url), true);

echo $json_array['data'][0]['viewer_count'];
?>
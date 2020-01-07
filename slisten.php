<?php 
$xmlstr = file_get_contents("http://74.63.196.206:2640/stats?sid=1");
$defaultXML = new SimpleXMLElement($xmlstr);
$newImg = $defaultXML->UNIQUELISTENERS;
echo $newImg;
?>
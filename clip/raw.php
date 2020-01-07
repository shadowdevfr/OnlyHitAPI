<?php
//************************************//
//OnlyHit API v1.0.0 (3)              //
//Made by X_Shadow_#5962              //
//This script was made by Xem         //
//Use code Shadow_ in the             //
//item shop or Xem (this one is better)//
//************************************//
include("functions.php");
$KeyWord = "test";
$nonparsedJSON = search_vod($KeyWord);
$parsed = json_decode($nonparsedJSON);
echo $nonparsedJSON;
?>
<?php
date_default_timezone_set("UTC");
// $modDate = date('Y-m-dH:i:s',strtotime(' -2 hours +5 minutes',strtotime($date)));
//$date = "2020-09-1516:37:00";

// Credential
$user = "telcons815";
$secret = "passtelcons815";
$date = date('D, d M Y H:i:s').' GMT';
// $date = 'Mon, 03 May 2021 04:30:40 GMT';
$signingString = 'date: '.$date;
$digest = hash_hmac('sha512', $signingString, $secret, true);
$base64Digest = base64_encode($digest);
$authFull ='hmac username="'.$user.'", algorithm="hmac-sha512", headers="date", signature="'.$base64Digest.'"';
echo 'Date = '.$date;
echo '<br/>';
echo 'Signing String = '.$signingString;
echo '<br/>';
echo 'Digest = '.$digest;
echo '<br/>';
echo 'Base64 Digest = '.$base64Digest;
echo '<br/>';
echo 'Authorization full = '.$authFull;

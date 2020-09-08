<?php

$num_server_addr = "http://172.17.0.3";
$str_server_addr = "http://172.17.0.4";
$debug = false;

function ask_server($url) {
    $ch = curl_init();    
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5); // 5 seconds
    //curl_setopt($ch, CURLOPT_POST, 1);
    //curl_setopt($ch, CURLOPT_POSTFIELDS,
    //   "postvar1=value1&postvar2=value2&postvar3=value3");
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}
?>
<?php
require "vars.php";
$num_operations = json_decode(ask_server($num_server_addr."/support.php"),true);
$str_operations = json_decode(ask_server($str_server_addr."/support.php"),true);
$result = array(
    "num" => $num_operations,
    "str" => $str_operations,
);

echo json_encode($result, JSON_UNESCAPED_SLASHES);
?>
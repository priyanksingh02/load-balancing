<?php
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $oper = $_GET['oper'];
    switch($oper) {
        case "cc":  $result = $num1.$num2; break;
        case "len": $result = strlen($num1); break;
        case "com": $result = ($num1 === $num2)?"true":"false"; break;
        default:
            $result = "[str server: invalid operation]";
    }

    echo $result;

    $log  = "[ ".date("F j, Y, g:i a")." ] Operation: $num1 $num2 $oper [ Result ] $result".PHP_EOL;
    // file_put_contents('./log_'.date("j.n.Y").'.log', $log, FILE_APPEND);
    // Docker mapped files give permission error. 
    // So manually create event.log and chmod +w for others
    file_put_contents('event.log', $log, FILE_APPEND);
?>


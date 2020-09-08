<?php
    $num1 = (int)$_GET['num1'];
    $num2 = (int)$_GET['num2'];
    $oper = $_GET['oper'];
    switch($oper) {
        case "sum": $result = $num1+$num2; break;
        case "sub": $result = $num1-$num2; break;
        case "mul": $result = $num1*$num2; break;
        case "div": if($num2 != 0) {
                $result = $num1/$num2;
            }
            else {
                $result = "[error] Divide by zero!";
            }
            break;
        case "rem": if($num2 != 0) {
                $result = $num1%$num2;
            }
            else {
                $result = "[error] Divide by zero!";
            }
            break;
        default:
            $result = "[num server: invalid operation]";
    }

    echo $result;
    $log  = "[ ".date("F j, Y, g:i a")." ] Operation: $num1 $num2 $oper [ Result ] $result".PHP_EOL;
    // file_put_contents('./log_'.date("j.n.Y").'.log', $log, FILE_APPEND);
    // Docker mapped files give permission error. 
    // So manually create event.log and chmod +w for others
    file_put_contents('event.log', $log, FILE_APPEND);
?>


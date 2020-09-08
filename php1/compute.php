<?php
    require "vars.php";
    
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $oper = "";
    $url = "";
    if($_POST["type"] == "str") {
        $oper = $_POST["oper"];
        $url = $str_server_addr."/calculate.php?num1=$num1&num2=$num2&oper=".$oper;
    }
    else {
        $oper = $_POST["oper"];
        $url = $num_server_addr."/calculate.php?num1=$num1&num2=$num2&oper=".$oper;
    }
    if($debug) {
        echo "<br>[Operation] $oper";
        echo "<br>[URL] $url";
        echo "<br>[Result] ";
    }
    if($oper != "nop") { 
        $output = ask_server($url); //function defined in 'vars.php'
        echo $output;
    }
?>
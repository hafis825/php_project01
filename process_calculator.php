<?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$sign = $_GET['calcu'];

function calculator($num1,$num2,$sign) {
    switch ($sign) {
        case 'บวก':
            echo $num1. " + ".$num2." = ".($num1 + $num2);
            break;
        case 'ลบ':
            echo $num1. " - ".$num2." = ".($num1 - $num2);
            break;
        case 'คูณ':
            echo $num1. " * ".$num2." = ".($num1 * $num2);
            break;
        case 'หาร':
            echo $num1. " ÷ ".$num2." = ".($num1 / $num2);
            break;            
             
        default:
            echo "กรุณาเลือกเครื่องหมาย";
            break;
    }
}

calculator($num1,$num2,$sign);
?>
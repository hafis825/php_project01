<?php

$studen = array("Usman", "hafis", "faisan");

echo $studen[1]."<br>".$studen[2]."<br>".$studen[0];
echo "<br>";
echo count($studen)."  count";



echo "<hr>";
echo "for"."<br>";



$grade = array(1.11,2.22,3.33,4.00,1.13,5.13,3.54);
$num = count($grade);

for($x = 0; $x < $num; $x++){
    echo "เกรด : ".$grade[$x]."<br>";
}

echo "<hr>";
echo "foreach"."<br>";

foreach ($grade as $gg ) {
    echo "เกรด : ".$gg."<br>";
}



echo "<hr>";


$fruits = array("Apple"=>"35", "Banana"=>"40", "Grape"=>"80", "Strawberry"=>"3000", "Papaya"=>"50", "Durian"=>"5000", "Orange"=>"40");

foreach ($fruits as $fr => $vl) {
    echo "ผลไม้ ".$fr." ราคา ".$vl." บาท/กิโลกรัม"."<br>";
}


echo "<hr>";

/*
-------------------------------------------------
|   ID     |    FULLNAME    |   DEP |   GPA     |
|   101    |    Usman       |   IT  |   3.50    |
|   102    |    Kampol      |   IT  |   2.50    |
|   103    |    Sulkiplee   |   IT  |   3.75    |
|   104    |    Furkon      |   IT  |   2.15    |
-------------------------------------------------
*/

$std = array(
    array("101","Usman","IT",3.50),
    array("102","Kampol","IT",2.50),
    array("103","Sulkiplee","IT",3.75),
    array("104","Furkon","IT",2.15),
    array("105","Abdulhafis","IT",2.15)
);

echo " นาย : ".$std[3][1]." เกรด ".$std[3][3]."<br>";
echo " นาย : ".$std[2][1]." เกรด ".$std[2][3]."<br>";

echo "<hr>";

$c = count($std);
for ($a =0; $a < $c; $a++) { 
    echo "ผลการเรียน ปวส.1(2566)";
    echo "<ul>";
    
    for ($b=0; $b < 4; $b++) { 
        echo "<li>";
        echo $std[$a][$b];
        echo "</li>";
    }
    echo "</ul>";
} 

echo "<hr>";

    // sort() - sort arrays in ascending order
    
    sort($grade);
    foreach ($grade as $gg ) {
        echo "เกรด : ".$gg." / ";
    }


    echo "<hr>";
    // rsort() - sort arrays in descending order

    rsort($grade);
    foreach ($grade as $gg ) {
        echo "เกรด : ".$gg." / ";
    }

    echo "<hr>";
    // asort() - sort associative arrays in ascending order, according to the value

    asort($fruits);
    foreach ($fruits as $fr => $vl) {
        echo "ผลไม้ ".$fr." ราคา ".$vl." บาท/กิโลกรัม"."<br>";
    }
    
    echo "<hr>";
    // ksort() - sort associative arrays in ascending order, according to the key

    ksort($fruits);
    foreach ($fruits as $fr => $vl) {
        echo "ผลไม้ ".$fr." ราคา ".$vl." บาท/กิโลกรัม"."<br>";
    }
    
    echo "<hr>";
    // arsort() - sort associative arrays in descending order, according to the value

    arsort($fruits);
    foreach ($fruits as $fr => $vl) {
        echo "ผลไม้ ".$fr." ราคา ".$vl." บาท/กิโลกรัม"."<br>";
    }
    
    echo "<hr>";
    // krsort() - sort associative arrays in descending order, according to the key

    krsort($fruits);
    foreach ($fruits as $fr => $vl) {
        echo "ผลไม้ ".$fr." ราคา ".$vl." บาท/กิโลกรัม"."<br>";
    }





?>
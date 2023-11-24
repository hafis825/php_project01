<?php

    function notifyName() {
        echo "Abdulhafis waemusor";
    }

    notifyName();

    echo "<hr>";

    function factorial($num) {
        $x = $num - 1;
            while($x >= 1) {
                $num *= $x;
                $x--;
            }
        echo $num;
    }
    factorial(10);

    echo "<hr>";

    function loveMessage($love) {
        echo $love;
    }

    loveMessage("เธอจะไปไหน 'ฉันจะไปละหมาด'");


?>
<?php

// variabel akan kita copy, nilai tetap hasil copyan aja diubah
    $number1 = 2;
    $number2 = 3;

    function multiply($num1, $num2) {
        $num1 = 3;
        echo ($num1*$num2) . "<br/>";
    }

    multiply($number1, $number2);
    multiply($number1, $number2);

    // passing parameter by value
    echo $number1;

    //manipulasi parameter

    $number1 = 2;
    $number2 = 3;

    function mul($num1, $num2) {
        $num1 = 5;
        echo ($num1*$num2) . "<br/>";
    }

    mul($number1, $number2);
    mul($number1, $number2);

    //passing parameter by reference
    // variabel yang dijadikan parameter kemudian di manipulasi di 
    // dalam fungsi maka nanti akan diubah nilainya
    echo $number1;

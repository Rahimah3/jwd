<?php
    $myArray = [1,2,3];

    // indeks pertama dari array mulai dari 0
    // paramater by value
    echo $myArray[0] . "<br/>";

    function setArrayTo0(&$myArray){
        $myArray = 0;
    }

    setArrayTo0($myArray);

    echo($myArray[0]);

    // kalo by value variabel yang dijadikan parameter di copy proses didalam fungsi tidak diubah dalam global
    // variabel yang dijadikan parameter itu di manipulasi jadi parameter global juga berubah

?>
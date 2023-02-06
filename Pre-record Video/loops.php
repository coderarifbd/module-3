<?php
    /***
     * for loop
     * while loop
     *  */

     //for loop
     echo "for loop\n";
     for($i = 1; $i<=20; $i++){
        echo $i;
        echo PHP_EOL;
     }
     echo "while loop\n";
     $k = 0;
     while($k < 10){
        $k++;
        echo $k. PHP_EOL;
     }

    echo "do while loop\n";
    $j = 0;
     do{
        $j++;
        echo $j. PHP_EOL;
     }while($j < 10);
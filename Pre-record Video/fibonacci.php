<?php 
// 0, 1, 1, 2, 3, 5, 8
    $n = 10;
    $first = 0;
    $second = 0;
    $result = 0;

    for($i = 0; $i<$n; $i++){
        
        if($i <= 0){
            $first = 0;
            $second = 1;
            echo $first.", ".$second.", ";
        }
        $result = $first + $second;
        echo $result.", ";
        $first = $second;
        $second = $result;
    }
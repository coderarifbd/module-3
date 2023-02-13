<?php
//    1. Write a Reusable  PHP Function that can check Even & Odd Number And Return Decision 

function checkEvenOdd($n){
    if($n % 2 == 0){
        return "{$n} Is Even Number";
    }else{
        return "{$n} is Odd Number";
    }
}

echo checkEvenOdd(25).PHP_EOL;

//2. 1+2+3...…….100  Write a loop to calculate the summation of the series
$num = 100;
$sum = 0;
for($i = 0; $i <= $num; $i++){
    $sum +=$i;
}
echo "0 To {$num} Summation is : {$sum}".PHP_EOL;
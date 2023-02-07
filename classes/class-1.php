<?php
    function addTwoNumber($num1, $num2){
        $sum = $num1 + $num2;
        return $sum;
    }

    echo addTwoNumber(10, 20)+4;
    echo addTwoNumber(25, 35);

    function f1(){
        return "Ariful Islam\n";
    }
    function f2(){
        return f1();
    }
    function f3(){
        return f2();
    }

    echo f3();

    /**
     * for loop
     * foreach loop
     * while loop
     * do while loop
     */

     $allCity = array('Dhaka', 'Rangpur', 'Dinajpur', 'Barishal', 'Khulna');     
     foreach($allCity as $city){
        echo $city. PHP_EOL;
     }
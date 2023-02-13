<?php
    function serve($foodType="Coffee", $numberOfItem="1 Cup"){
        echo "{$numberOfItem} of {$foodType} have been served";
    }

    // $ft = 'coffee';
    $n = 2;
    // serve($n);


    function addSomeExtra(&$str){
        $str .= 'and something extra.';
    }
    $str = 'This is a string, ';
    addSomeExtra($str);
echo $str;    // outputs 'This is a string, and something extra.'
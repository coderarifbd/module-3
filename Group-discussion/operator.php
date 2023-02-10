<?php
    $money = 6500;
    $purchases = "shirt";
    if($money >= 500 && true || false){
        // echo "we are able to purchases someting".PHP_EOL;
    }

    $e = false || true;
    $f = false or true;
    // var_dump($e, $f);

    $n = 6;
    $m = 2;

    $n /= $m;
    // echo $n.PHP_EOL;

    $firstN = 10;
    $secondN = "ten";

    // var_dump($firstN, $secondN);


    // !== value and data check
    // != value check 

    // if( '10' != 10){
    //     echo "not equal";
    // }else{
    //     echo "equal";
    // }

    //spaceship operator 

    $a = 10;
    $b = $a++;
    echo $b.PHP_EOL;
    // $a++; 
    // echo $a.PHP_EOL;
    // ++$a;
    // echo $a.PHP_EOL;

/**
     * 25% commission for above 20,000 tution fee;
     * 20% commission if tution fee more than 10,000 and lessthan 20,000;
     * 15% commission if tution fee more than 7,000 and lessthan 10,000;
     * If the tuition fee is below seven thousand dollars the data will be invalid.
     */
    $condition = false;
    //  if($condition){
    //     echo "if block".PHP_EOL;
    //  }elseif(10 < 15){
    //     echo "10 less than 15".PHP_EOL;
    //  }else{
    //     echo "else block".PHP_EOL;
    //  }

     $result = ($condition ? "if block": (10 < 15 )) ? "10 less than 15" : "else block";
     echo $result;
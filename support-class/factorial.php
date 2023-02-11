<?php 
    function factorial($n){
        if($n == 0){
            return 1;
        }else{
            return $n * factorial( $n - 1);
        }
    }

   echo factorial(5).PHP_EOL;

   function fibonacci($n) {
    if ($n == 0 || $n == 1) {
        return $n;
    } else {
        return fibonacci($n-1) + fibonacci($n-2);
    }
}

for ($i = 0; $i < 10; $i++) {
    echo fibonacci($i) . " ";
}

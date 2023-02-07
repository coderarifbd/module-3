<?php
    /*
     * PHP loop multiple steping 
     * print 1-10 & 10-1 in one loop
     * print numbers which only divided only with 7;
     */
     

     for ($i = 10, $j=1; $i > 0; $i--, $j++){
        echo $i." : ".$j .  PHP_EOL;
     }

     for($i = 7, $j = 1; $i < 100; $i += 7, $j++){
      printf("7 x %d = %d", $j, $i);
      echo PHP_EOL;
     }
<?php
    /*
     * PHP loop multiple steping 
     * print 1-10 & 10-1 in one loop
     */
     

     for ($i = 10, $j=1; $i > 0; $i--, $j++){
        echo $i." : ".$j .  PHP_EOL;
     }
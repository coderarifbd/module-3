<?
/**
 * for
 * foreach
 * while 
 * do while
 */
// 1-10 print;

// for ( $i = 0; $i < 100; $i++){

//     if($i == 10){
//         continue;
//     }
//     echo $i.PHP_EOL;
// }


$studens = ['Ariful', 'Noman', 'Mainul', 'Mehedi'];
for($i = 0; $i < count($studens); $i++ ){
    if(isset($studens[4])){
        echo "not found";
    }
    // echo $studens[$i].PHP_EOL;
}
echo "================".PHP_EOL;
foreach($studens as $student){
    // echo $student.PHP_EOL;
}

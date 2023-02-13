<?php   
$globalVarialbe = "I'm a global variable";

function access_global_variable(){
    global $globalVarialbe;
    // echo $globalVarialbe;
}

access_global_variable();

//deafult parameter
function parameters($param1, $param2="default value"){
    // echo $param1, $param2;
}
parameters("first value");


//input validation
/**
 * empty() function : check a variable which is empty or not
 *  - null
 *  - 0
 *  - 0.0
 *  - ""(empty string)
 *  - "0"
 *  - array() empty array
 *  - false
 */

 $name = "";
//  if(empty($name)){
//     echo "the field is empty";
//  }else{
//     echo "this is not empty";
//  }

 //filter_var()
 /**
  * 
  */

  $email = "arifgmail.com";
  if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "email address valid";
  }else{
    echo "not valid";
  }
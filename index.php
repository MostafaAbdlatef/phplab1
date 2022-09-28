<?php

// (1)
// echo phpinfo();

// (2)

// define("WEBSITENAME", "mostafa.com");
// echo WEBSITENAME;


// (3)

// print_r( $_SERVER ["SERVER_PORT"]);
// echo "<br>";
// print_r ($_SERVER['SERVER_NAME']);
// echo "<br>";
// print_r ($_SERVER['SERVER_ADDR']);
// echo "<br>";
// print_r ($_SERVER['SCRIPT_FILENAME']);
// echo "<br>";
// print_r ($_SERVER['SCRIPT_NAME']);

// (4)
//for loop
$a = 0;
$b = 0;

for ($i = 0; $i < 5; $i++) {
    $a += 10;
    $b += 5;
};
echo "a=" . $a;
echo "<br>";
echo "b=" . $b;
echo "<br>";


//while loop
// $i = 0;
// $num = 50;

// // while( $i < 10) {
// //    $num--;
// //    $i++;
// // };
// // echo "i=". $i;
// // echo "<br>";
// // echo "num=". $num;
// // echo "<br>";


//do...while
// $i = 0;
// $num = 0;
         
// do {
// $i++;
//    }
         
// while( $i < 10 );
// echo "i=". $i;


//Switch
$age = 10 ;
switch ($age) {
    case ($age < 5):
      echo "Stay at home";
      break;
    case ($age == 5):
      echo "Go to Kinder garden";
      break;
    case ($age >=6 && $age <= 12 ):
      echo "Go to grade one";
      break;
    default:
      echo "you are older than 12 years old!";
  };

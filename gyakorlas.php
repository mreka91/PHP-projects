<?php

// for ($i = 1; $i <= 10; $i++)	{
//
//     for($j = 1; $j <= $i; $j++) {
//         echo "* ";
//     }
// echo "<br>";
// }

//echo "<hr>";

// for ($i = 1; $i <= 10; $i++)	{
//
//     for($j = 10; $j >= $i; $j--) {
//         echo "* ";
//     }
// echo "<br>";
// }

// echo "<hr>";
//
// for ($i = 1; $i <= 10; $i++)	{
//
//     for($j = 1; $j <= $i; $j++) {
//         echo $i;
//     }
// echo "<br>";
// }
//
//
// echo "<hr>";
//
//
// for ($i = 1; $i <= 10; $i++)	{
//
//     for($j = 1; $j <= $i; $j++) {
//         echo $j;
//     }
// echo "<br>";
// }
//
//
// echo "<hr>";
//
// $userArray = array(10, 43, 13, 76, 31, 9, 15, 45, 30, 55);
//
// sort($userArray);
// print_r($userArray);
//
// $array1 = array_slice($userArray, 0, 4);
// $array2 = array_slice($userArray, 4, 6);
// echo "<br>";
// print_r($array1);
// echo "<br>";
// print_r($array2);
//
//
// echo "<hr>";
//
//
//
//
// $userArray = array(11,12,13,14,15,16,17,118,119,110);
//  $lowerbound = array();
//  $upperbound = array();
//
// sort($userArray);
//
// foreach ($userArray as $key => $value) {
//   if($value < 18){
//     array_push($lowerbound, $value);
//   }else {
//     array_push($upperbound, $value);
//   }
// }
//
// print_r( $lowerbound);
// echo "<br>";
// print_r( $upperbound);

//echo "<hr>";

function sort_list($userArray){
  $lowerbound = array();
  $upperbound = array();
  foreach ($userArray as $key => $value) {
    if($value < 18){
      $lower = array_push($lowerbound, $value);
    }else {
      $upper = array_push($upperbound, $value);

    }
  }
  return array($lowerbound, $upperbound);

}

$userArray = array(11,12,13,14,15,16,17,118,119,110);

print_r(sort_list($userArray));




















?>

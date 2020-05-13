



<?php
#1.uppgift

// $color = array('white', 'green', 'red', 'blue', 'black');
// echo "The memory of that scene for me is like a frame of film forever frozen at that moment:
//   the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky.
// The new president and his first lady. - Richard M. Nixon";

#2.uppgift
// $color = array('white', 'green', 'red');
// foreach ($color as $value) {
// echo "$value, "; }
//
// sort($color);
//
// echo "<ul>";
// foreach ($color as $y)
// {
// echo "<li>$y</li>";
// }
// echo "</ul>";

#3.uppgift
// $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
// "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris",
// "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin",
// "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
// "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm",
// "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius",
// "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest",
// "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
// asort($ceu);
// foreach($ceu as $country => $capital)
// {
// echo "The capital of $country is $capital"."<br>" ;
// }



#4.uppgift
/* $x = array(1, 2, 3, 4, 5);
print_r(var_dump($x));
echo "<br>";
array_pop($x);
print_r(var_dump($x)); */


/* $x = array(1, 2, 3, 4, 5);
var_dump($x);
unset($x[3]);
$x = array_values($x);
echo "<br>";
var_dump($x); */


#5.uppgift
/* $color = array(4 => 'white', 6 => 'green', 11=> 'red');
echo reset($color); */

#print_r($color[4]); #reset?

#6.uppgift
//
// $json = '{"Title": "The Cuckoos Calling",
// "Author": "Robert Galbraith",
// "Detail": {
// "Publisher": "Little Brown"
// }}';
// #var_dump(json_decode($json));
// #var_dump(json_decode($json, true));
// $obj = json_decode($json);
// print $obj->{"Title"};

#uppgift 7.

// $original = array( '1','2','3','4','5' );
// echo 'Original array : '."\n";
// foreach ($original as $x)
// {echo "$x ";}
//
// $inserted = '$';
// array_splice( $original, 3, 0, $inserted );
// echo " \n After inserting '$' the array is : "."\n";
// foreach ($original as $x)
// {echo "$x ";}
// echo "\n"



#8.uppgift
//$name = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

#ascending order sort by value
// sort($name);
// $arrlength = count($name);
// for($x = 0; $x < $arrlength; $x++) {
//     echo $name[$x];
//     echo "<br>";
// }

#ascending order sort by Key
// ksort($name);
// foreach($name as $x => $x_value) {
//     echo "Age of " . $x . "is:" . $x_value;
//     echo "<br>";
// }


#descending order sorting by Value
// rsort($name);
//
// $clength = count($name);
// for($x = 0; $x < $clength; $x++) {
//     echo $name[$x];
//     echo "<br>";
// }

#descending order sorting by Key
// $name4 = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
//
// krsort($name4);
//
// foreach($name4 as $x=>$x_value)
//    {
//    echo "Age of " . $x . " is:" . $x_value;
//    echo "<br>";
//    }



#uppgift9

//average
// $temperature = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72,
// 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
// $average_of_temperature = array_sum($temperature) / count($temperature);
// echo "Average Temperature is $average_of_temperature" ;
// echo "<br>";

// sort(array_unique($temperature);
//
// echo " List of seven lowest temperatures :";
// for ($i=0; $i< 7; $i++)
// {
// echo $temperature[$i].", ";
// }
// echo "<br>";
//
// echo " List of seven highest temperatures :";
// $number = count($temperature);
// for ($i=($number-7); $i< ($number); $i++)
// {
// echo $temperature[$i].", ";
// }

#uppgift 10 --Bead-Sort Algorithm



#uppgift 11 nope
//$array1 = array(array(77, 87), array(23, 45));
//$array2 = array("w3resource", "com");

//försök 1
/* $result = array_merge($array1, $array2);
echo '<pre>';print_r($result);
 */

//lösning
/* function merge_arrays_by_index($x, $y){
$temp = array(); 
$temp[] = $x; 

if(is_scalar($y)){
$temp[] = $y;
} else{
    foreach($y as $k => $v){
      $temp[] = $v;
    }
  }
return $temp;
}
echo '<pre>'; print_r(array_map('merge_arrays_by_index',$array2, $array1));
 */





#uppgift 12
/* $Color = array('A' => 'Blue', 'B' => 'Green',
'c' => 'Red');
$Color = array_map('strtolower', $Color);
print_r($Color);
echo "<br>";
$Color = array_map('strtoupper', $Color);
print_r($Color); */




#uppgift 13
/*   for ($i=200 ; $i<=250 ; $i++) {
    if($i % 4 == 0) {
      echo "$i <br>";}
      }*/

  //echo implode(range(200, 250, 4))."\n"; 

#uppgift 14
// Convert array to an array of string lengths
// $data = array ("abcd","abc","de","hjjj","g","wer");
// $lengths = array_map('strlen', $data);

  // Show min and max string length
// echo "The shortest array length is " . min($lengths) .
//      ". The longest is " . max($lengths);

#uppgify 15 nope
/* $min=11;
$max=20;
echo rand($min,$max); */

/* $n = range(11,20);

shuffle($n);

for ($x = 0; $x < 10; $x++){
echo $n[$x].' ';
} */

#uppgift 16
// $arr = array( 1 => "A", 10 => "B", 5 => "C" );
// echo max(array_keys($arr));


#uppgift 17 ?

/* function min_values_not_zero(Array $values) 
{
return min(array_diff(array_map('intval', $values), array(0)));
}
print_r(min_values_not_zero(array(-1,0,1,12,-100,1))."\n"); */





#uppgift 18 ?

/* function floorDec($number, $precision, $separator)
{
$number_part=explode($separator, $number);
$number_part[1]=substr_replace($number_part[1],$separator,$precision,0);
if($number_part[0]>=0)
{$number_part[1]=floor($number_part[1]);}
else
{$number_part[1]=ceil($number_part[1]);}

$ceil_number= array($number_part[0],$number_part[1]);
return implode($separator,$ceil_number);
}
print_r(floorDec(1.155, 2, ".")."\n");
print_r(floorDec(100.25781, 4, ".")."\n");
print_r(floorDec(-2.9636, 3, ".")."\n");
 */




#uppgift 19
// $color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
// "numbers" => array ( 1, 2, 3, 4, 5, 6 ),
// "holes" => array ( "First", 5 => "Second", "Third"));
// echo $color["holes"][5]."\n";  #second
// echo $color["color"]["a"]."\n"; #red

#uppgift 20

#uppgift 21
#uppgift 22
#uppgift 23
#uppgift 24
#uppgift 25
#uppgift 26
#uppgift 27

#uppgift 28
// $colors = array("Red", "Orange", "Black", "White");
// rsort($colors);
// print_r($colors);



#uppgift 29 ?

$fruits = 'apple, orange, pear, banana, raspberry, peach';
$fruits_ar = explode(', ', $fruits);
var_dump($fruits_ar);








#uppgift 30
#uppgift 31
// $x = array(
//     'value_1' => 1111,
//     'value_2' => 2222,
//     'value_3' => 3333,
//     'value_4' => 4444,
//     'value_5' => 5555);
// arsort($x);
// $key_of_max = key($x);
// echo "Index of the highest value : ".$key_of_max."\n";


#uppgift 32
// $info = new SplFileInfo('for.php');
// var_dump($info->getExtension());

#uppgift 33

<?php

#uppgift 1

/* for($x = 1; $x <= 10; $x++)
{
 if($x < 10)
 {
 echo "$x-";
 }
 else
  {
 echo "$x";
  }
}
 */


 #uppgift 2
 //echo array_sum(range(0, 30));
/*
$sum = 0;
for ($i = 0; $i <= 30; $i++) {
    $sum += $i;
}

echo "The sum of the numbers 0 to 30 is $sum"; */


#uppgift 3

for ($i = 1; $i <= 6; $i++)	{

    for($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
echo "<br>";
}

#uppgift 4

/* for($i = 1; $i <= 5; $i++) {
  for($j = 1; $j <= $i; $j++) {
    echo ' * ';
  }
echo '<br>';
}
for($i = 5; $i >= 1; $i--) {
  for($j = 1; $j <= $i; $j++) {
    echo ' * ';
  }
echo '<br>';
}  */


#uppgift 5

/* $num = 4;
$factorial = 1;
for ($x = $num; $x >= 1; $x--)
{
  $factorial = $factorial * $x;
}
echo "Factorial of $num is $factorial";   */



#uppgift 6
/*
for($i = 0; $i < 10; $i++){
    for($j = 0; $j < 10; $j++){
        echo $i.$j.", ";
    }

} */



#uppgift 7

/* $text="w3resource";
$search_char="r";
$count="0";
for($x="0"; $x < strlen($text); $x++) {

    if(substr($text,$x,1) == $search_char) {
       $count = $count + 1;
	}
  }
echo $count; */

#uppgift 9






#uppguft 10

/* echo("<table border=\"1\">\n");

for ($i = 1; $i <= 10; $i++)
	{
	echo ("<tr>\n");

	for ($x = 1; $x <= 10; $x++)
		{
		echo ("\t<td>");
		echo ($i*$x);
		echo ("</td>\n");
		}

	echo ("</tr>\n");
	}

echo ("</table>") */


#uppgift 11
/* for ($i = 1; $i < 50; $i++){
    if( $i%3 == 0 && $i%5 == 0 ){
        echo " FizzBuzz <br>";
    } elseif ( $i%3 == 0){
        echo " Fizz <br>" ;
    }elseif( $i%5 == 0 ){
        echo " Buzz <br>";
    } else{
        echo $i ."<br>";
    }
} */


#uppgift 12
//
// $rows = 5; //number of rows
// $count = 1;
// $cc = $rows;
// $current = 1;
// for($i = 0; $i < $rows; $i++)
// {
//     for($k = 0; $k < $count; $k++)
//     {
//         echo $current;
//         echo ' ';
//         $current++;
//     }
//     echo '<br>';
//     $count++;
// }


?>

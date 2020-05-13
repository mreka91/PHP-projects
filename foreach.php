<html>
<style media="screen">
  body{background-color: grey;}
</style>
  <body>
    <h1>Foreach loop</h1>
<?php

$userArray = array(); #skapar en tom array
$user = 'Klara'; #skapar string
$user1 = 'Per';
array_push($userArray, $user);
array_push($userArray, $user1);

foreach ($userArray as $key => $user) {
  print_r($user);
}

unset($userArray[0]);
$count = count($userArray);




echo "<hr>";


function adding ($a, $b){
  $summa = $a +$b;
  return $summa;
}

$a = 5;
$b = 5;
$result = adding($a, $b);
echo $result;



echo "<hr>";


 $colors = array("red", "green", "blue", "yellow");
 array_push($colors, "pink", "grey");

foreach ($colors as $value) {
  echo "$value <br>"; }


  if (in_array("pink", $colors))
    {
    echo "Match found";
    }
  else
    {
    echo "Match not found";
    }


echo "<hr>";

  $people = array(); #tom array
  $name = "Dixon"; #variable
  array_push($people, $name); #lägger till listan
  print_r($people[0]); #skriver ut det som är först i listan
  echo "<br>";

  array_push($people, "Peter", "Reka", "Liza", "Per", "Niklas");

  foreach ($people as $value) {
  echo "$value <br>"; }

  array_pop($people); #tar bort den sista i arrayn
  unset($people[0]); #tar bort den första i arrayn, med index 0
  print_r($people);
  echo "<br>";
  echo count($people); #$numberofUsers = count($people);
  echo "<br>";
  echo sizeof($people); #samma sak som count();



echo "<hr>";

$color = array("Bengt"=>"red", "Ingvar"=>"green", "Nisse"=>"blue", "Klara"=>"yellow");
$color += ["Reka" => "black"];
foreach($color as $x => $value) {
  echo "$x = $value<br>";
}
echo array_search("black",$color);
?>
</html>

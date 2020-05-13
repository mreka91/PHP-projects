
<?php
//Hämtar data från formen
$weight = $_GET["weight"]; 
$height = $_GET["height"];     
$heightInMs = $height/100;
$bmi = $weight/($heightInMs*$heightInMs);

/*If och elseif satser bestämmer vad ska printas ut, beroende på BMIs värde */

//Kollar om BMI är mindre än 19
if ($bmi < 19)
{
  echo "Du är undervikt!";
}
//Kollar om BMI är mellan 19 och 25
elseif ($bmi >= 19 &&  $bmi <= 25)
{
  echo "Du är normal vikt!";
}
//Kollar om BMI är mellan 25 och 30
elseif ($bmi >= 25 && $bmi <= 30)
{
  echo "Du är övervikt!";
}
//Kollar om BMI är över 30
elseif ($bmi > 30)
{
  echo "Du är fetma!";
}
?>

<html>
<style media="screen">
  body {background-color: grey;}
</style>
  <body>
    <h1>Array</h1>

<?php
$people = array("Herman", "Bengt", "Agnes");

if (in_array("Bengt", $people))
  {
  echo "Match found";
  }
else
  {
  echo "Match not found";
  }

?>

   
  </body>
</html>
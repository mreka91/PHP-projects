<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title>Day of the week</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>

<?php
  $dayofweek = date("w");
  switch ($dayofweek) {
    case 1:
      echo "<p>It is Monday today!</p>";
       break;
    case 2:
      echo "<p>It is Tuesday today!</p>";
       break;
    case 3:
      echo "<p>It is Wednesday today!</p>";
        break;
    case 4:
      echo "<p>It is Thursday today!</p>";
         break;
    case 5:
      echo "<p>It is Friday today!</p>";
        break;
     case 6:
        echo "<p>It is Saturday today!</p>";
          break;
      case 0:
        echo "<p>It is Sunday today!</p>";
          break;

  }
 ?>

</body>
</html>

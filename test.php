
<html>
<style media="screen">
  body{background-color: lightblue;}
</style>
  <body>
    <h1>Hi there!</h1>
    <h2>Here comes the first bit of php:</h2>

    <?php
      $name = "Reka";
      echo "Welcome back $name.";
      echo "<br>";
     ?>

   <h2>Here comes the second bit of php:</h2>

    <?php
    $text = "Hello";
    $color = "black";
    $x = 100;
    $y = 50.5;
    $cars = array("Volvo","BMW","Toyota", "Audi");

    echo $text;
    echo "<br>";
    echo $x;
    echo "<br>";
    var_dump($x);
    echo "<br>";
    echo $y;
    echo "<br>";
    var_dump($y);
    echo "<br>";
    //echo $x + $y;
    //echo "<br>";
    //echo $x - $y;
    //echo "<br>";
    echo "My car is $color.";
    echo "<br>";
    var_dump($cars);
    echo "<br>";

    for ($i = 0; $i < count($cars); $i++)  {
        echo $cars[$i] ."<br/>";
    }

    foreach ($cars as $item) {
      echo $item. "<br/>";
    }

    ?>
  </body>
</html>

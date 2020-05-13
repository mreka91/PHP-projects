<html>
<style media="screen">
  body{background-color: grey;}
</style>
  <body>
    <h1>Session-array</h1><?php
// begin the session
session_start();

// create an array
$my_array=array('cat', 'dog', 'mouse', 'bird', 'crocodile', 'wombat', 'koala', 'kangaroo');

// put the array in a session variable
$_SESSION['animals']=$my_array;

// a little message to say we have done it
echo 'Putting array into a session variable <br>';


// loop through the session array with foreach
foreach($_SESSION['animals'] as $key=>$value)
    {
    // and print out the values
    echo 'The value of $_SESSION['."'".$key."'".'] is '."'".$value."'".' <br />';
    }
?>

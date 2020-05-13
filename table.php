
<html lang="en" dir="ltr">
<style media="screen">
  body{background-color: lightgrey;
        }
</style>
  <body>

<?php
$name = "rickard hagerberg";
$name = ucwords($name);
$email = "rickard.hagerbeg@gmail.com";
$mobil_n = "0707070707"
//echo $name;
 ?>

    <table width ="auto" border="1">
      <tr>
        <td>Namn:</td><td><?php echo $name?></td>
      </tr>
      <tr>
        <td>E-post:</td><td><?php echo $email?></td>
      </tr>
      <tr>
        <td>Mobil:</td><td><?php echo $mobil_n?></td>
      </tr>
    </table>
  </body>
</html>

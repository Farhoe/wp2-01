<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Auta</h1>
    <?php
    $submit=filter_input(input_post,'submit');
    $auta=filter_input(input_post,'auta');
    $rok=filter_input(input_post,'rok')
    $spd=filter_input(input_post,'spd');
     ?>

     <?php
    $age=date("Y")-$rok;
    if ($age<40) {
      $color="green";
    } else {
      $color="red";
    }

      ?>


  </body>
</html>

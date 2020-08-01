<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <?php
    $name = "Cherie";
    $number = 100;
    $tagName = "<h1> Hello </h1>";
    echo "<h1>Name Variable is: $name</h1>";
    echo "<h1>Number Variable is: $number</h1>";
    echo $tagName;
  ?>

  <h1>
    <?php
      $name = "Cherie";
      $number = 100;
      //Use a period to concat variables
      //Use quotes around the space to insert a string space
      echo $number . " " . $name
    ?>
  </h1>



</body>
</html>

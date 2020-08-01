<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    $list = [1000, 123, 354, 757, 786];
    print_r($list);
    echo "<br>";
    echo "max() array method will give me the largest integer in the array of nubmers: " . max($list)."<br>";
    echo "min() array method will give me the smallets integer in the array of nubmers: " . min($list)."<br>";
    sort($list);
    echo "sort() array method will sort the array of numbers: " . print_r($list);
  ?>
</body>
</html>

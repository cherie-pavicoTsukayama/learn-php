<?php
if(isset($_POST['submit'])) {
  echo "The submit button was pressed" . "<br>";
}
if(isset($_POST['username'])) {
  echo "The username is submitted" . "<br>";
}
if(isset($_POST['password'])) {
  echo "The password is submitted" . "<br>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
<div class="col-2 container mt-5">
  <form class="d-flex flex-wrap" action="checking-for-form-submission.php" method="post">
    <input class="col-12" type="text" name="username" placeholder="Enter Username">
    <input class="col-12" type="password" name="password" placeholder="Enter Password">
    <br>
    <input class="btn btn-primary" type="submit" name="submit">
  </form>
</div>

  <?php

  ?>
</body>
</html>

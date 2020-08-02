<?php
  include "db.php";

  $query = "SELECT * FROM users";
  $result = mysqli_query($connection, $query);

 //the below code checks if the result is false then runs the die method which
  //cancels out of the code and returns and error.
  if(!$result) {
    die('Query FAILED' . mysqli_error($connection));
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

  <div class="container">
        <div class="col-sm-8 mt-5">
          <form action="submit">
            <div class="form-group">
              <label for="username">Username</label>
              <input class="form-control" type="text" name="username" placeholder="Username">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input  class="form-control" type="text" name="password" placeholder="Password">
            </div>
            <div class="form-group">
              <select name="" id="">
                <option value="">1</option>
              </select>
            </div>
            <input class="btn btn-primary" type="submit" value="Update">
          </form>
        </div>
  </div>

</body>
</html>

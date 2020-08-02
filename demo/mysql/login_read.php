<?php
  //Create a variable to run the function mysqli_connect <=[this is an API] to connect to the database
  //mysqli_connect is an API
  //first parameter is the server ex: localhost
  //second parameter is the username ex: root
  //third parameter is the password
  //forth parameter is the database name ex: loginapp
  $connection  = mysqli_connect('localhost', 'root', '', 'loginapp');
  if($connection) {
    echo "connected to the database";
  } else {
    //will not excute any code and will report a specified error
    die("Database connection failed");
  }

  $query = "SELECT * FROM users";
  //use mysqli_query API to send the request to the database.
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
      <?php
        while($row = mysqli_fetch_assoc($result)) {
      ?>
          <pre class="card p-3">
            <?php
            print_r($row);
            ?>
          </pre>
      <?php

        }
      ?>
    </div>
  </div>

</body>
</html>

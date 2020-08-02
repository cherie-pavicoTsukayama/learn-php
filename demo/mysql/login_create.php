<?php
if(isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

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

  $query = "INSERT INTO users(username,password) ";
  //the below variable is the same as the above but when you use the .= it will
  //concatenate the code written after it to the variable above.
  $query .= "VALUES ('$username', '$password')";
  //use mysqli_query API to send the request to the database.
  $result = mysqli_query($connection, $query);
  //the below code checks if the result is false then runs the die method which
  //cancels out of the code and returns and error.
  if(!$result) {
    die('Query FAILED' . mysqli_error($connection));
  }
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
    <div class="col-sm-6 mt-5">
      <form action="login_create.php" method="post">
        <div class="form-group">
          <label for="username">Username</label>
          <input required type="text" name="username" class="form-control">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input required type="password" name="password" class="form-control">
        </div>
        <input class="btn btn-primary" type="submit" name="submit" value="Submit">
      </form>
    </div>
  </div>

</body>
</html>

<?php
if(isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if($username && $password) {
    echo "Your username: " . $username . "<br>";
    echo "Your password: ".$password;
  } else {
    echo "Username or password is not filled out";
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
      <form action="login.php" method="post">
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

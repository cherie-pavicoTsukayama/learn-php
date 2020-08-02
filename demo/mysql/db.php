<?php
  //Create a variable to run the function mysqli_connect <=[this is an API] to connect to the database
  //mysqli_connect is an API
  //first parameter is the server ex: localhost
  //second parameter is the username ex: root
  //third parameter is the password
  //forth parameter is the database name ex: loginapp
  $connection  = mysqli_connect('localhost', 'root', '', 'loginapp');
  if(!$connection) {
    //will not excute any code and will report a specified error
    die("Database connection failed");
  }
?>

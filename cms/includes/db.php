<?php

  $db['db_host'] = "localhost";
  $db['db_user'] = "root";
  $db['db_pass'] = "";
  $db['db_name'] = "cms";

  //convert array into constatns by using the foreach method.
  //first argument is the array
  //second argument is the key ie. db_host db_user db_pass

  foreach($db as $key => $value) {
    define(strtoupper($key), $value);
  }
//use the constants as arguemnts in the mysqli_connect method.
  $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
  if(!$connection) {
    echo 'You are not connected';
  }

?>

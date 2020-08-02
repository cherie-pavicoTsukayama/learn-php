<?php
if(isset($_POST['submit'])) {
  $name = ["Edwin", "Cherie", "Parker", "Shane", "Irene"];
  $username = $_POST['username'];
  $password = $_POST['password'];
  if (strlen($username) === 0) {
    echo 'Please enter a username';
  } else {
    echo 'Your username is: ' . $username;
  }
  if(in_array($username, $name)){
    echo "<br>";
    echo "Your username has been verified";
  }
}
?>

<?php
  //The user info is stored in the super global cookie. It's stored as an associative array.
  //PHP and the apache server takes care of this.
  //$_COOKIE;
  $name = "NameOfCookie";
  $value = 100;
  //the time() method is in seconds. It takes returns the current time in seconds.
  // Below we are setting the expiration to the current time PLUS (60 seconds * 60 Min * 24 hours * 7)
  // the above equation equals out to a week in seconds.
  $expiration = time() + (60 * 60 * 24 * 7);
  setcookie($name, $value, $expiration);


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    if(isset($_COOKIE['NameOfCookie'])) {
      $someOne = $_COOKIE["NameOfCookie"];
      //echos the value of the cookie not the name.
      echo 'the value property of the cookie is:' . $someOne;
    } else {
      $someOne = "";
    }
  ?>

</body>
</html>

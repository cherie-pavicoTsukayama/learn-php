<?php
//When the user goes to the page the below method is called and starts a session
//and a cookie has been created.
  session_start();
//A session is connected to the cookie and stores more information about the user

  echo $_SESSION['greeting'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

</body>
</html>

<?php
  $connection = mysqli_connect('localhost', 'root', '', 'cms');
  if($connection) {
    echo 'You are connected';
  }

?>

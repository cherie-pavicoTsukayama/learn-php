<?php include 'db.php' ?>

<?php

  function showAllData() {
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);

    //the below code checks if the result is false then runs the die method which
    //cancels out of the code and returns and error.
    if(!$result) {
      die('Query FAILED' . mysqli_error($connection));
    }

    while($row = mysqli_fetch_assoc($result)) {
      $id = $row['id'];
      echo "<option value='$id'>$id</option>";
    }
  }
?>

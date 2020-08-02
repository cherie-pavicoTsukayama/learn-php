<?php include 'db.php' ?>

<?php


  function createRows() {
    if(isset($_POST['submit'])) {
      global $connection;
      $username = $_POST['username'];
      $password = $_POST['password'];
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
  }

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

  function UpdateTable() {
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "UPDATE users SET ";
    $query .= "username = '$username', ";
    $query .= "password = '$password' ";
    $query .= "WHERE id = $id ";

    $result = mysqli_query($connection, $query);
    if(!$result) {
      die("Update Query FAILED" . mysqli_error($connection));
    }
  }

  function DeleteRows() {
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "DELETE FROM users ";
    $query .= "WHERE id = $id ";

    $result = mysqli_query($connection, $query);
    if(!$result) {
      die("Update Query FAILED" . mysqli_error($connection));
    }
  }
?>

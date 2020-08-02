<?php
  include "db.php";
  include "functions.php";
?>
<?php
if(isset($_POST['submit'])) {
  UpdateTable();
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
        <div class="col-sm-8 mt-5">
          <h1>Update Record</h1>
          <form action="login_update.php" method="post">
            <div class="form-group">
              <label for="username">Username</label>
              <input class="form-control" type="text" name="username" placeholder="Username">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input class="form-control" type="password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
              <select name="id" id="">
                <?php
                  showAllData();
                ?>

              </select>
            </div>
            <input class="btn btn-primary" type="submit" name="submit" value="Update">
          </form>
        </div>
  </div>

</body>
</html>

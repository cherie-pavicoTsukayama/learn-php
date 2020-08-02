<?php
  include "db.php";
  include "functions.php";
?>
<?php UpdateTable();?>
<?php include 'includes/header.php' ?>


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

<?php include 'includes/footer.php' ?>

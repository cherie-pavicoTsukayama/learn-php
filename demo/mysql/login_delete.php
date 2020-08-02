<?php
  include "db.php";
  include "functions.php";
?>
<?php deleteRows();?>

<?php include 'includes/header.php' ?>
<div class="container">
  <div class="col-sm-8 mt-5">
    <h1>Delete A Row</h1>
    <form action="login_delete.php" method="post">
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
      <input class="btn btn-danger" type="submit" name="submit" value="Delete">
    </form>
  </div>
</div>

<?php include 'includes/footer.php' ?>

<?php
include 'db.php';
include 'functions.php';
createRows();
include 'includes/header.php';
?>

<div class="container">
  <div class="col-sm-6 mt-5">
    <h1>Create</h1>
    <form action="login_create.php" method="post">
      <div class="form-group">
        <label for="username">Username</label>
        <input required type="text" name="username" class="form-control">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input required type="password" name="password" class="form-control">
      </div>
      <input class="btn btn-primary" type="submit" name="submit" value="Create">
    </form>
  </div>
</div>

<?php include 'includes/footer.php'; ?>

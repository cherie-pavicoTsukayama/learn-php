<?php
  include 'db.php';
  include 'functions.php';
?>

<?php include 'includes/header.php'?>
  <div class="container">
    <div class="col-sm-8 mt-5">
      <pre class="card">
        <?php
          readRows();
        ?>
      </pre>
    </div>
  </div>

<?php include 'includes/footer.php'?>

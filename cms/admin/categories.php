<?php include 'includes/admin_header.php' ?>

    <div id="wrapper">

        <!-- Navigation -->
       <?php include 'includes/admin_navigation.php' ?>
        <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Welcome to Admin
                        <small>Author</small>
                    </h1>
                    <div class="col-sm-6">
                        <?php insertCategories(); ?>
<!-- Add Category -->
                      <form action="categories.php" method="post">
                        <div class="form-group">
                          <label for="cat_title">Add Category</label>
                          <input
                            class="form-control"
                            type="text"
                            placeholder="Add New Category"
                            name="cat_title">
                        </div>
                        <div class="form-group">
                          <input
                            class="btn btn-primary"
                            type="submit"
                            name="submit"
                            value="Add Category">
                        </div>
                      </form>
<!-- Edit Category -->
                      <?php
                        if(isset($_GET['edit'])) {
                          $cat_id = $_GET['edit'];
                          include "includes/update_categories.php";
                        }
                      ?>
                    </div>
                    <div class="col-sm-6">
                      <table class="table table-bordered table-hover">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>Category Title</th>
                            <th class="text-center" colspan="2">Action</th>
                          </tr>
                        </thead>
                        <tbody>
<?php //FIND ALL CATEGORIES QUERY
$query = "SELECT * FROM categories ";
$select_categories = mysqli_query($connection, $query);

  while($row = mysqli_fetch_assoc($select_categories)) {
    $cat_title = $row['cat_title'];
    $cat_id = $row['cat_id'];
    echo "<tr>";
    echo "<td>{$cat_id}</td>";
    echo "<td>{$cat_title}</td>";
    echo "<td>
            <a href='categories.php?delete={$cat_id}'>
              Delete
            </a>
          </td>";
    echo "<td>
            <a href='categories.php?edit={$cat_id}'>
              Edit
            </a>
          </td>";
    echo "</tr>";
}
?>
<?php //DELETE CATEGORY QUERY
if(isset($_GET['delete'])) {
  $delete_cat_id = $_GET['delete'];
  $query = "DELETE FROM categories ";
  $query .= "WHERE cat_id = {$delete_cat_id} ";
  $delete_query = mysqli_query($connection, $query);
  header("Location: categories.php");
}
?>
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

</div>

        <!-- /#page-wrapper -->

<?php include "includes/admin_footer.php" ?>

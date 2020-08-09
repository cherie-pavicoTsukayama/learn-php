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
<?php
if(isset($_POST['submit'])) {
  $cat_title = $_POST['cat_title'];
  $cat_title = mysqli_real_escape_string($connection, $cat_title);
  if($cat_title === '' || empty($cat_title)) {
    echo 'This field should not be empty.';
  } else {
    $query = "INSERT INTO categories(cat_title) ";
    $query .= "VALUES('{$cat_title}') ";
    $create_category_query = mysqli_query($connection, $query);
    if(!$create_category_query) {
      die('QUERY FAILED' . mysqli_error($connection));
    }
  }
}
?>
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
                      <form action="categories.php" method="post">
                        <div class="form-group">
                          <label for="cat_title">Edit Category</label>
<?php
if(isset($_GET['edit'])) {
  $edit_cat_id = $_GET['edit'];
  $query = "SELECT * FROM categories WHERE cat_id = $edit_cat_id ";
  $select_categories_id = mysqli_query($connection, $query);

  while($row = mysqli_fetch_assoc($select_categories_id)) {
    $cat_title = $row['cat_title'];
    $cat_id = $row['cat_id'];
?>
<input
  class="form-control"
  type="text"
  placeholder="Edit Category"
  name="cat_title"
  value="<?php
   if(isset($cat_title)) {
     echo $cat_title;
   } else {
     echo "";
   }
  ?>"
  >
<?php }
} ?>




                        </div>
                        <div class="form-group">
                          <input
                            class="btn btn-primary"
                            type="submit"
                            name="edit"
                            value="Update">
                        </div>
                      </form>
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

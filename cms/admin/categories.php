<?php include 'includes/admin-header.php' ?>

    <div id="wrapper">

        <!-- Navigation -->
       <?php include 'includes/navigation.php' ?>
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
                      <form action="">
                        <div class="form-group">
                          <label for="cat-title">Add Category</label>
                          <input
                            class="form-control"
                            type="text"
                            placeholder="Add New Category"
                            name="cat-title">
                        </div>
                        <div class="form-group">
                          <input
                            class="btn btn-primary"
                            type="submit"
                            name="submit"
                            value="Add Category">
                        </div>
                      </form>
                    </div>
                    <div class="col-sm-6">
                      <table class="table table-bordered table-hover">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>Category Title</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Baseball id</td>
                            <td>Baseball category</td>
                          </tr>
                          <tr>
                            <td>id</td>
                            <td>basketball category</td>
                          </tr>
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

<?php include "includes/footer.php" ?>


<!-- Blog Sidebar Widgets Column -->
<div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <!-- Search Form -->
                    <form action="search.php" method="post">
                      <div class="input-group">
                          <input type="text" name="search" class="form-control">
                          <span class="input-group-btn">
                              <button type="submit" name="submit" class="btn btn-default">
                                  <span class="glyphicon glyphicon-search"></span>
                          </button>
                          </span>
                      </div>
                    </form>
                    <!-- Search Form End -->
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <?php
                    $query = "SELECT * FROM categories";
                    $select_categories_sidebar_query = mysqli_query($connection, $query);

                ?>

                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                              <?php
                                while($row = mysqli_fetch_assoc($select_categories_sidebar_query)) {
                                  $cat_title = $row['cat_title'];
                                  echo "<li><a href='#'>{$cat_title}</a></li>";
                                }
                              ?>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>
